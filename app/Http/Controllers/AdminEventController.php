<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use Helpers\Data\EventStatHelper;
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
        //
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
            'total-peserta' => 'required|int',
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
        $jawabanUsers = $event->jawabans();

        $userSudah = $jawabanUsers->where('progress', 'selesai')->get();
        $userBelum = $jawabanUsers->where('progress', '!=', 'selesai')->get();
        //cek apa pakai _ di orm

        // Gender Category = ['Laki-laki', 'Perempuan']
        $usersGender = EventStatHelper::calculateGenderDispersion($jawabanUsers);
        // Age Category = [<15, '15-20', '20-30', '30-40', '40-50', '50>']
        $usersAge = EventStatHelper::calculateAgeDispersion($jawabanUsers);
        // Age Category = [<15, '15-20', '20-30', '30-40', '40-50', '50>']

        return view('', [
            'event' => $event,
            'progress' => [$userSudah->count, $userBelum->count],
            'kelamin' => [$usersGender[0], $usersGender[1]],
            'usia' => [$usersAge[0], $usersAge[1], $usersAge[2], $usersAge[3], $usersAge[4]],
            'pendidikan' => ['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 'd4', 's1', 's2', 's3'],
            'domisili' => 1,
            'penyebaran8D' => ['pelopor', 'penggerak', 'afirmasi', 'inklusif', 'rendahhati', 'pemikir', 'tegas', 'berwibawa'],
            'daftarUser' => [
                'selesai' => 1,
                'mengerjakan' => 2,
            ],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
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
            'total_peserta' => 'required|int',
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
}
