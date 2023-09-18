<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\User;
use Helpers\Data\EventOverviewHelper;
use Helpers\Data\EventStatHelper;
use Helpers\GeneralHelper;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestEvent = Event::latest()->where('is_expired', false)->get();
        $expiredEvents = Event::latest()->where('is_expired', true)->get();

        return view('admin/index', [
            'latestEvents' => $latestEvent,
            'expiredEvents' => $expiredEvents,
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
        $request->validate([
            'nama' => 'required|string|max:60',
            'kode-akses' => 'required|unique:events|string|max:25',
            'institusi' => 'required|string|255',
            'total-peserta' => 'required|integer',
            'tanggal-mulai' => 'required|date_format:o-m-d',
            'tanggal-selesai' => 'required|date_format:o-m-d',
            'deskripsi' => 'required|string|255'
        ]);

        Event::create([
            'nama' => $request->input('nama'),
            'kode_akses' => $request->input('kode-akses'),
            'institusi' => $request->input('institusi'),
            'total_peserta' => $request->input('total-peserta'),
            'tanggal_mulai' => $request->input('tanggal-mulai'),
            'tanggal_selesai' => $request->input('tanggal-selesai'),
            'deskripsi' => $request->input('deskripsi'),
            'is_expired' => false
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

        return view('testing/chart', [
            'event' => $event,
            'progress' => [($finishedUser), ($unfinishedUser)],
            'kelamin' => $usersGender,
            'usia' => $usersAge,
            'pendidikan' => $usersLastEducation,
            'domisili' => $usersResidence,
            'penyebaran8D' => $usersDimension,
            'daftarUser' => [
                'selesai' => $finishedUser,
                'mengerjakan' => $unfinishedUser,
            ],
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
        

        return response()->json(['city-api-update' => 'success']);
    }
}
