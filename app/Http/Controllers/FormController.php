<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Validation;
use Helpers\Data\DiscHelper;
use Helpers\Data\SectionTwoHelper;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('destination')) {
            $destination = request('destination');
            $progress = [
                '1.1' => 'd',
                '1.2' => 's',
                '1.3' => 'c'
            ];

            switch ($destination) {
                case "section-1-1":
                    return view('form/section-1-1', ['question' => $progress]);
                case "section-1-2":
                    return view('form/section-1-2', ['question' => $progress]);
                case "section-1-3":
                    return view('form/section-1-3', ['question' => $progress]);
                case "section-2-1":
                    return view('form/section-2-1', ['question' => $progress]);
                case "section-2-2":
                    return view('form/section-2-2', ['question' => $progress]);
                case "section-wait":
                    return view('form/section-wait');
                default:
                    abort(404);
            }
        }

        return abort(404);
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
            'kode-akses' => 'required'
        ]);

        try {
            $user = auth()->user();
            $accessCode = $request->input('kode-akses');
            $event = Event::all()->firstWhere('kode_akses', $accessCode);

            Validation::validateUserExistInEvent($user->id, $event->id);

            Jawaban::create([
                'user_id' => $user->id,
                'event_id' => $event->id,
                'progress' => 'Section 1-1'
            ]);

            return redirect()->route('user.form.get', [
                'destination' => 'Section-1-1'
            ]);
        } catch (Exception $e) {
            return response()->with('error', 'Terjadi kesalahan : ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jawaban $jawaban)
    {

        $updatePath = $request->input('destination');

        $answerSection1Col1 = $request->input('checkbox');
        $answerSection1Col2 = $request->input('checkbox1');
        $answerSection2 = $request->input('idk');

        if ($updatePath) {
            $currentPath = $request->input('destination');
            $user = User::with('jawabans')->find(auth()->id());

            $userAnswer = $user->jawabans()->latest()->first();
            $userAnswer->progress = $currentPath;
            $userAnswer->save();

            return redirect()->route('user.form.get', [
                'destination' => $currentPath
            ]);
        } else if ($answerSection1Col1 || $answerSection1Col2 || $answerSection2) {
            $mostValue = DiscHelper::normalizeDiscValue($answerSection1Col1);
            $leastValue = DiscHelper::normalizeDiscValue($answerSection1Col2);
            $changeValue = DiscHelper::getChangeValue($mostValue,  $leastValue);

            $answerSection2 = SectionTwoHelper::normalizeData($answerSection2);

            $jawaban->type1_formatted_value = json_encode([
                'most_value' => $mostValue,
                'least_value' => $leastValue,
                'change_value' => $changeValue
            ]);
            $jawaban->type2_formatted_value = json_encode([
                'value' => $answerSection2
            ]);

            $jawaban->progress = 'selesai';
            $jawaban->save();

            return redirect()->route('user.form.done');
        }

        response()->with('error', 'Terjadi kesalahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }

    public function saveProgress(Request $request)
    {
        $progress = $request->progress;
        $userId = auth()->user()->id;

        if ($progress) {
            $request->session()->put('progress-' . $userId, $progress);
            return response()->noContent();
        }

        dd('error');
    }
}
