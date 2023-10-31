<?php

namespace App\Http\Controllers;

use App\Models\Event;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\User;
use Helpers\Data\EventOverviewHelper;
use Helpers\Data\EventStatHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Return Event Data
        $events = Event::all();
        $users = User::all();

        // Jenis Kelamin Count

        // Get the specific string from the request or hard-code it
        $lakila = $request->input('laki', 'laki');
        $perem = $request->input('perempuan', 'perempuan');

        // Define the table name and column name
        $tableName = 'users';
        $lakilaCol = 'jenis_kelamin';
        $peremCol = 'jenis_kelamin';

        // Perform the count operation
        $laki = DB::table($tableName)->where($lakilaCol, $lakila)->count();
        $perempuan = DB::table($tableName)->where($peremCol, $perem)->count();

        // End Jenis Kelamin Count
        
        // Age Range Count
        $ageRanges = [
            ['min' => 0, 'max' => 14],
            ['min' => 15, 'max' => 20],
            ['min' => 21, 'max' => 30],
            ['min' => 31, 'max' => 40],
            ['min' => 41, 'max' => 50],
            ['min' => 51, 'max' => 100],
            // Add more age ranges as needed
        ];
        
        $counts = [];
        
        foreach ($ageRanges as $range) {
            $count = DB::table('users')
            ->whereBetween('usia', [$range['min'], $range['max']])
            ->count();

            $counts[] = [
                'range' => $range,
                'count' => $count,
            ];
        }
        
        // end Age Range Count

        // Pendidikan Count
        
        // Get the specific string from the request or hard-code it
        $sds = $request->input('sd', 'sd');
        $smps = $request->input('smp', 'smp');
        $smas = $request->input('sma', 'sma');
        $smks = $request->input('smk', 'smk');
        $d1s = $request->input('d1', 'd1');
        $d2s = $request->input('d2', 'd2');
        $d3s = $request->input('d3', 'd3');
        $d4s = $request->input('d4', 'd4');
        $s1s = $request->input('s1', 's1');
        $s2s = $request->input('s2', 's2');
        $s3s = $request->input('s3', 's3');

        // Define the table name and column name
        $tableName = 'users';
        $pendidikan = 'pendidikan_terakhir';

        // Perform the count operation
        $sd = DB::table($tableName)->where($pendidikan, $sds)->count();
        $smp = DB::table($tableName)->where($pendidikan, $smps)->count();
        $sma = DB::table($tableName)->where($pendidikan, $smas)->count();
        $smk = DB::table($tableName)->where($pendidikan, $smks)->count();
        $d1 = DB::table($tableName)->where($pendidikan, $d1s)->count();
        $d2 = DB::table($tableName)->where($pendidikan, $d2s)->count();
        $d3 = DB::table($tableName)->where($pendidikan, $d3s)->count();
        $d4 = DB::table($tableName)->where($pendidikan, $d4s)->count();
        $s1 = DB::table($tableName)->where($pendidikan, $s1s)->count();
        $s2 = DB::table($tableName)->where($pendidikan, $s2s)->count();
        $s3 = DB::table($tableName)->where($pendidikan, $s3s)->count();

        $smak = $sma + $smk;

        // end Pendidikan Count

        $latestEvent = Event::latest()->where('is_expired', false)->get();
        $expiredEvents = Event::latest()->where('is_expired', true)->get();
        
        return view('admin/index', [
            'latestEvents' => $latestEvent,
            'expiredEvents' => $expiredEvents,
            'laki' => $laki,
            'perempuan' => $perempuan,
            'sd' => $sd,
            'smp' => $smp,
            'smak' => $smak,
            'd1' => $d1,
            'd2' => $d2,
            'd3' => $d3,
            'd4' => $d4,
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            'counts' => $counts,
            'events' => $events,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            'edit' => false,
            'create' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama' => 'required|string|max:60',
            'kode_akses' => 'required|unique:events|string|max:25',
            'institusi' => 'required|string|max:255',
            'total_peserta' => 'required|integer',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required|string|max:255',
            'tujuan_tes' => 'required|string|max:255|not_in:0',
        ]);

        Event::create([
            'nama' => $request->input('nama'),
            'kode_akses' => $request->input('kode_akses'),
            'institusi' => $request->input('institusi'),
            'total_peserta' => $request->input('total_peserta'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_selesai' => $request->input('tanggal_selesai'),
            'deskripsi' => $request->input('deskripsi'),
            'tujuan_tes' => $request->input('tujuan_tes'),
            'is_expired' => false,
            'is_answers_hold' => false
        ]);

        return redirect()->back()->with('success', 'Event berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $currentEvent = $event->jawabans()->with('user')->get();
        $users = $currentEvent->pluck('user')->unique();

        $totalUser = $currentEvent->count();
        $finishedUser = $currentEvent->where('progress', '=', 'selesai')->count();
        $unfinishedUser = $currentEvent->where('progress', '!=', 'selesai')->count();

        // Gender Category = ['Laki-laki', 'Perempuan']
        $usersGender = EventStatHelper::calculateGenderDispersion($users->pluck('jenis_kelamin')->toArray());

        // Age Category = [<15, '15-20', '20-30', '30-40', '40-50', '50>']
        $usersAge = EventStatHelper::calculateAgeDispersion($users->pluck('usia')->toArray());

        // Education Category = ['sd', 'smp', 'sma', 'smk', 'd1', 'd2', 'd3', 'd4', 's1', 's2', 's3']
        $usersLastEducation = EventStatHelper::calculateEducationDispersion($users->pluck('pendidikan_terakhir')->toArray());

        /**
         * ~ Size depends on users resident dispersion
         * ~ Filtered by number
         * Residence Category = ['X1' => 14, 'X2' => 7, 'X3' => 4]
         */
        $usersResidence = EventStatHelper::calculateResidenceDispersion($users->pluck('domisili')->toArray());

        // 8 Dimensions Category = ['Pelopor', 'Penggerak', 'Afirmasi', 'Inklusif', 'Rendah Hati', 'Pemikir', 'Tegas', 'Berwibawa']
        $usersDimension = EventStatHelper::calculate8DimensionsDispersion($currentEvent->pluck('dimensi_kepemimpinan')->toArray());

        $i = 1;

        return view('admin.show', [
            'event' => $event,
            'peserta' => $users,
            'user' => $totalUser,
            'finishedUser' => $finishedUser,
            'unfinishedUser' => $unfinishedUser,
            'kelamin' => $usersGender,
            'usia' => $usersAge,
            'pendidikan' => $usersLastEducation,
            'domisili' => $usersResidence,
            'penyebaran8D' => $usersDimension,
            'daftarUser' => [
                'selesai' => $finishedUser,
                'mengerjakan' => $unfinishedUser,
            ],
            'i' => $i,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return response()->json([
            'edit' => true,
            'create' => false
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'nama' => 'required|string|max:60',
            'kode_akses' => 'required|unique:events|string|max:25',
            'institusi' => 'required|string|255',
            'total_peserta' => 'required|integer',
            'tanggal_mulai' => 'required|date_format:o-m-d',
            'tanggal_selesai' => 'required|date_format:o-m-d',
            'deskripsi' => 'required|string|255'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    // Belum jadi
    public function overview()
    {
        $yearRequested = request('year', date('Y'));

        $allEvents = Event::where('tanggal_selesai', 'like', '%' . $yearRequested . '%')
            ->with('jawabans.user')->get();

        $eventAnswers = $allEvents->flatMap(function ($event) {
            return $event->jawabans;
        });
        $eventUsers = $eventAnswers->pluck('user')->unique();

        $finishedUser = $eventAnswers->where('progress', '=', 'selesai');
        $unfinishedUser = $eventAnswers->where('progress', '!=', 'selesai');

        $usersGender = EventStatHelper::calculateGenderDispersion($eventUsers->pluck('jenis_kelamin')->toArray());
        $usersAge = EventStatHelper::calculateAgeDispersion($eventUsers->pluck('usia')->toArray());
        $usersLastEducation = EventStatHelper::calculateEducationDispersion($eventUsers->pluck('pendidikan_terakhir')->toArray());
        $usersResidence = EventStatHelper::calculateResidenceDispersion($eventUsers->pluck('domisili')->toArray());
        $usersDimension = EventStatHelper::calculate8DimensionsDispersion($eventAnswers->pluck('dimensi_kepemimpinan')->toArray());

        $eventsGoalStatistic = EventOverviewHelper::calculateEventsGoal($allEvents->pluck('tujuan_tes')->toArray());
        $eventsTotalParticipant = EventOverviewHelper::calculateTotalParticipant($allEvents->pluck('total_peserta', 'tanggal_selesai')->toArray());
        $eventsInstitution = EventOverviewHelper::calculateInstitution($allEvents->pluck('institusi', 'tanggal_selesai')->toArray());

        return [
            'goal' => $eventsGoalStatistic,
            'participant' => $eventsTotalParticipant,
            'institusi' => $eventsInstitution,
            'progress' => [count($finishedUser), count($unfinishedUser)],
            'kelamin' => $usersGender,
            'usia' => $usersAge,
            'pendidikan' => $usersLastEducation,
            'domisili' => $usersResidence,
            'penyebaran8D' => $usersDimension,
        ];
    }

    public function updateCityApi()
    {
        $client = new Client();

        $response = $client->get('https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => '1d168db07423b0d975eb96d96b1d5bea'
            ],
        ]);

        $datas = json_decode($response->getBody(), true);

        $city = [];

        foreach ($datas['rajaongkir']['results'] as $data) {
            $city[] = $data['city_name'] . ', ' . $data['province'];
        }

        $finalData = json_encode(['city' => $city]);

        Info::updateOrCreate(
            ['name' => 'city'],
            ['json_value' => $finalData]
        );

        return response()->json(['city-update' => 'success']);
    }

    public function updateOnHold(Event $event)
    {
        $isHold = request('value', false);
        
        $event->is_answers_hold = $isHold;
        $event->save();
        
        return response()->json(['on-hold' => $isHold]);
    }
}
