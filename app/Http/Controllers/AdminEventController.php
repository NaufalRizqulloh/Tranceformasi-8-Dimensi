<?php

namespace App\Http\Controllers;

use App\Models\Event;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\User;
use Carbon\Carbon;
use Helpers\Data\EventOverviewHelper;
use Helpers\Data\EventStatHelper;
use Helpers\Data\StringHelper;
use Helpers\Validation\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        $yearRequested = request('year', date('Y'));

        $allEvents = Event::where('tanggal_selesai', 'like', '%' . $yearRequested . '%')
            ->with('jawabans.user')->get();

        $eventAnswers = $allEvents->flatMap(function ($event) {
            return $event->jawabans;
        }); 

        $eventUsers = $eventAnswers->pluck('user')->unique();

        $usersGender = EventStatHelper::calculateGenderDispersion($eventUsers->pluck('jenis_kelamin')->toArray());
        $usersAge = EventStatHelper::calculateAgeDispersion($eventUsers->pluck('usia')->toArray());
        $usersLastEducation = EventStatHelper::calculateEducationDispersion($eventUsers->pluck('pendidikan_terakhir')->toArray());
        $usersResidence = EventStatHelper::calculateResidenceDispersion($eventUsers->pluck('domisili')->toArray());

        $eventsGoalStatistic = EventOverviewHelper::calculateEventsGoal($allEvents->pluck('tujuan_tes')->toArray());
        $eventsTotalParticipant = $eventAnswers->count();
        // $eventsTotalParticipant = EventOverviewHelper::calculateTotalParticipant($allEvents->pluck('total_peserta', 'tanggal_selesai')->toArray());
        // $eventsInstitution = EventOverviewHelper::calculateInstitution($allEvents->pluck('institusi', 'tanggal_selesai')->toArray());

        $latestEvent = Event::latest()
            ->where('tanggal_selesai', 'like', '%' . $yearRequested . '%')
            ->where('tanggal_selesai', '>', now())->get();
        $expiredEvents = Event::latest()
            ->where('tanggal_selesai', 'like', '%' . $yearRequested . '%')
            ->where('tanggal_selesai', '<', now())->get();
        
        return view('admin/index', [
            'user'=> auth()->user(),
            'event' => $events,
            'latestEvents' => $latestEvent,
            'expiredEvents' => $expiredEvents,
            'gender' => $usersGender,
            'age' => $usersAge,
            'education' => $usersLastEducation,
            'residence' => array_slice($usersResidence, 0, 3),
            'goal' => $eventsGoalStatistic,
            'totalParticipant' => $eventsTotalParticipant,
            // 'institution' => array_slice($usersResidence, 0, 3),
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
            'users' => $users,
            'isAdmin' => Validation::isAdmin(auth()->user()->email),
            'year' => $yearRequested,
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
            'collab_logo_base64' => 'required|mimes:png,jpeg,jpg',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required|string|max:255',
            'tujuan_tes' => 'required|string|max:255|not_in:0',
            'collab_url' => 'required|string|max:255',
        ]);
        
        $name = null;

        if ($request->hasFile('collab_logo_base64')) {
            // $img = $request->file('collab_logo_base64')->store('collab-logo');
            // $img = Storage::disk('local')->put('images/', $request->file('collab_logo_base64'));

            $file = $request->file('collab_logo_base64');
            $name = 'logo-event-'. Event::latest()->first()->id + 1 . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('collab-logo'), $name);
        }
        
        Event::create([
            'nama' => $request->input('nama'),
            'kode_akses' => $request->input('kode_akses'),
            'institusi' => $request->input('institusi'),
            'collab_logo_name' => $name,
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_selesai' => $request->input('tanggal_selesai'),
            'deskripsi' => $request->input('deskripsi'),
            'tujuan_tes' => $request->input('tujuan_tes'),
            'collab_url' => $request->input('collab_url'),
            'is_answers_hold' => false,
        ]);

        // dd([
        //     'nama' => $request->input('nama'),
        //     'kode_akses' => $request->input('kode_akses'),
        //     'institusi' => $request->input('institusi'),
        //     'tanggal_mulai' => $request->input('tanggal_mulai'),
        //     'tanggal_selesai' => $request->input('tanggal_selesai'),
        //     'deskripsi' => $request->input('deskripsi'),
        //     'tujuan_tes' => $request->input('tujuan_tes'),
        //     'collab_logo_base64' => $img,
        //     'collab_url' => $request->input('collab_url'),
        //     'is_answers_hold' => false,
        // ]);

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
        $finishedUserS = $currentEvent->where('progress', '=', 'selesai');
        $unfinishedUserS = $currentEvent->where('progress', '!=', 'selesai');

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

        $timeStart = StringHelper::replaceDate(Carbon::parse($event->tanggal_mulai)->format('d F Y'));
        $timeEnd = StringHelper::replaceDate(Carbon::parse($event->tanggal_selesai)->format('d F Y'));

        $imgPath = public_path('collab-logo/' . $event->collab_logo_name);

        return view('admin.show', [ 
            'timeStart' => $timeStart,
            'timeEnd' => $timeEnd,
            'event' => $event,
            'peserta' => $users,
            'users' => $totalUser,
            'user' => auth()->user(),
            'finishedUser' => $finishedUser,
            'unfinishedUser' => $unfinishedUser,
            'finishedUserS' => $finishedUserS,
            'unfinishedUserS' => $unfinishedUserS,
            'kelamin' => $usersGender,
            'usia' => $usersAge,
            'pendidikan' => $usersLastEducation,
            'domisili' => $usersResidence,
            'penyebaran8D' => $usersDimension,
            'daftarUser' => [
                'selesai' => $finishedUser,
                'mengerjakan' => $unfinishedUser,
            ],
            'isAdmin' => Validation::isAdmin(auth()->user()->email),
            'img' => $imgPath
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:60',
            // 'kode_akses' => 'required|unique:events|string|max:25',
            'institusi' => 'required|string|max:255',
            'collab_logo_base64' => 'required|mimes:png,jpeg,jpg',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required|string|max:255',
            'tujuan_tes' => 'required|string|max:255|not_in:0',
            'collab_url' => 'required|string|max:255',
        ]);

        $eventt = Event::find($id);

        $eventt->nama = $request->nama;
        // $eventt->kode_akses = $request->kode_akses;
        $eventt->institusi = $request->institusi;
        $eventt->collab_logo_base64 = $request->collab_logo_base64;
        $eventt->tanggal_mulai = $request->tanggal_mulai;
        $eventt->tanggal_selesai = $request->tanggal_selesai;
        $eventt->deskripsi = $request->deskripsi;
        $eventt->tujuan_tes = $request->tujuan_tes;
        $eventt->collab_url = $request->collab_url;

        $eventt->save();

        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eventt = Event::find($id)->delete();

        return redirect()->route('admin.event.index');
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
