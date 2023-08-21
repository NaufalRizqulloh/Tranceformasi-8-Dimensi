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
        return response()->with('create');
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
        $usersAnswer = $event->jawabans()->with('user')->get();
        $users = GeneralHelper::returnUniqueModelsOnly($usersAnswer->pluck('user'));
        // $users = $usersAnswer->pluck('user');
        
        $finishedUser = $usersAnswer->where('progress', '=', 'selesai');
        $unfinishedUser = $usersAnswer->where('progress', '!=', 'selesai');

        // Gender Category = ['Laki-laki', 'Perempuan']
        $usersGender = EventStatHelper::calculateGenderDispersion($users);

        // Age Category = [<15, '15-20', '20-30', '30-40', '40-50', '50>']
        $usersAge = EventStatHelper::calculateAgeDispersion($users);

        // Education Category = ['sd', 'smp', 'sma', 'smk', 'd1', 'd2', 'd3', 'd4', 's1', 's2', 's3']
        $usersLastEducation = EventStatHelper::calculateEducationDispersion($users);

        /**
         * ~ Size depends on users resident dispersion
         * ~ Filtered by number
         * Residence Category = ['X1' => 14, 'X2' => 7, 'X3' => 4]
         */
        $usersResidence = EventStatHelper::calculateResidenceDispersion($users);

        // 8 Dimensions Category = ['Pelopor', 'Penggerak', 'Afirmasi', 'Inklusif', 'Rendah Hati', 'Pemikir', 'Tegas', 'Berwibawa']
        // $usersDimension = EventStatHelper::calculate8DimensionsDispersion($users);

        // return view('', [
        //     'event' => $event,
        //     'progress' => [count($finishedUser), count($unfinishedUser)],
        //     'kelamin' => $usersGender,
        //     'usia' => $usersAge,
        //     'pendidikan' => $usersLastEducation,
        //     'domisili' => $usersResidence,
        //     'penyebaran8D' => $usersDimension,
        //     'daftarUser' => [
        //         'selesai' => $finishedUser,
        //         'mengerjakan' => $unfinishedUser,
        //     ],
        // ]);

        return [
            'event' => $event,
            'progress' => [count($finishedUser), count($unfinishedUser)],
            'kelamin' => $usersGender,
            'usia' => $usersAge,
            'pendidikan' => $usersLastEducation,
            'domisili' => $usersResidence,
            // 'penyebaran8D' => $usersDimension,
            'daftarUser' => [
                'selesai' => $finishedUser,
                'mengerjakan' => $unfinishedUser,
            ],
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return response()->with('edit', $event);
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
        $allEvent = Event::all();
        $allEventsResults = Event::with('jawabans')->get();

        $eventsGoalStatistic = EventOverviewHelper::calculateEventsGoal($allEvent);

        return view('', [
            'tujuanEvent' => $eventsGoalStatistic
        ]);
    }
}
