<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Helpers\Validation\Validation;
use Helpers\Data\DiscHelper;
use Helpers\Data\SectionTwoHelper;

class FormController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

        $user = auth()->user();
        $accessCode = $request->input('kode-akses');
        $event = Event::getEvent($accessCode);

        try {
            if (!$event) {
                throw new Exception('Kode akses invalid');
            }
            if ($event->is_expired == true) {
                throw new Exception('Event yang anda masuki sudah berakhir');
            }

            $answer = Jawaban::where('event_id', '=', $event->id)
                ->where('user_id', '=', $user->id)
                ->first();

            if ($answer) {
                if ($answer->progress != 'selesai') {
                    return redirect()->route('user.form.show', [
                        'jawaban' => $answer,
                        'destination' => 'section-1-1'
                    ]);
                    // return redirect('user/form/'.$answer->id.'?destination=section-1-1');
                }
                if ($answer->progress == 'selesai') {
                    throw new Exception('Anda sudah mengisi');
                }

                throw new Exception('Terjadi kesalahan sistem');
            }
        } catch (Exception $e) {
            // return response()->with('error', 'Terjadi kesalahan : ' . $e->getMessage());
            return dd($e->getMessage());
        }

        Jawaban::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'progress' => 'section-1-1'
        ]);


        $newAnswer = Jawaban::where('event_id', '=', $event->id)
            ->where('user_id', '=', $user->id)
            ->first();

        // $sessionKey = 'answers-' . $newAnswer->id;
        // session([$sessionKey => []]);

        return redirect()->route('user.form.show', [
            'jawaban' => $newAnswer,
            'destination' => 'section-1-1'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jawaban $jawaban)
    {
        $destination = strtolower(request('destination'));
        $destination = str_replace(array(" ", "\t", "\n", "\r"), "", $destination);
        $questions = "";
        $pageSection = 0;
        $nextDestination = "";
        $previousDestination = "";

        switch ($destination) {
            case "section-1-1":
                $questions = config('form-section1-1.content');
                $pageSection = 1;
                $nextDestination = 'section-1-2';
                $previousDestination = 'go-dashboard';
                break;
            case "section-1-2":
                $questions = config('form-section1-2.content');
                $pageSection = 1;
                $nextDestination = 'section-1-3';
                $previousDestination = 'section-1-1';
                break;
            case "section-1-3":
                $questions = config('form-section1-3.content');
                $pageSection = 1;
                $nextDestination = 'section-wait';
                $previousDestination = 'section-1-2';
                break;
            case "section-2-1":
                $questions = config('form-section2-1.content');
                $pageSection = 2;
                $nextDestination = 'section-2-2';
                $previousDestination = 'section-1-3';
                break;
            case "section-2-2":
                $questions = config('form-section2-2.content');
                $pageSection = 2;
                $nextDestination = 'go-form-submit';
                $previousDestination = 'section-2-1';
                break;
            case "section-wait":
                return view('alt-form/section-wait', [
                    'nextDestination' => 'section-2-1',
                    'jawaban' => $jawaban
                ]);
            default:
                dd('idk', $destination);
        }

        $viewName = '';
        $answers = [];

        $sessionData = session('answers-' . $jawaban->id, ['checkbox' => [], 'range' => []]);

        if ($pageSection == 1) {
            $viewName = 'alt-form/section-1';
            $answers = $sessionData['checkbox'];
        } else if ($pageSection == 2) {
            $viewName = 'alt-form/section-2';
            $answers = $sessionData['range'];
        } else {
            abort(404);
        }

        return view($viewName, [
            'jawaban' => $jawaban,
            'questions' => $questions,
            'answers' => $answers,
            'nextDestination' => $nextDestination,
            'previousDestination' => $previousDestination
        ]);
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
        request()->validate([
            'destination' => 'required',
            'checkbox' => 'sometimes|array|required_array_keys:p,t|size:2',
            'checkbox.p' => 'array|size:8',
            'checkbox.t' => 'array|size:8',
            'range' => 'required_without:checkbox|array|size:10'
        ]);

        $destination = $request->input('destination');
        $user = User::with('jawabans')->find(auth()->id());

        $userAnswer = $user->jawabans()->latest()->first();
        $userAnswer->progress = $destination;
        $userAnswer->save();

        //pembatas

        $sessionKey = 'answers-' . $jawaban->id;
        $sessionData = session($sessionKey, ['checkbox' => [], 'range' => []]);

        if ($request->checkbox) {
            $checkboxAnswers = $request->input('checkbox');
            $sessionData['checkbox']['p'] = $checkboxAnswers['p'] + $sessionData['checkbox']['p'];
            $sessionData['checkbox']['t'] = $checkboxAnswers['t'] + $sessionData['checkbox']['t'];
        } else if ($request->range) {
            $rangeAnswers = $request->input('range');
            $sessionData['range'] =  $rangeAnswers + $sessionData['range'];
        }

        session([$sessionKey => $sessionData]);

        return redirect()->route('user.form.show', [
            'jawaban' => $jawaban,
            'destination' => $destination
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        $jawaban->delete();
        redirect()->response()->with('success', 'Data jawaban berhasil dihapus');
    }

    public function submit(Jawaban $jawaban)
    {
        $answerSection1Col1 = session('answers-' . $jawaban->id)['p'];
        $answerSection1Col2 = session('answers-' . $jawaban->id)['t'];
        $answerSection2 = ['E'];

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

    public function updateProgress(Request $request, Jawaban $jawaban)
    {
        request()->validate([
            'destination' => 'required',
        ]);

        $currentPath = $request->input('destination');
        $user = User::with('jawabans')->find(auth()->id());

        $userAnswer = $user->jawabans()->latest()->first();
        $userAnswer->progress = $currentPath;
        $userAnswer->save();

        return redirect()->route('user.form.show', [
            'jawaban' => $jawaban,
            'destination' => 'section-1-1'
        ]);
    }

    public function saveAnswer(Jawaban $jawaban)
    {
        request()->validate([
            'answers' => 'required'
        ]);

        $answers = request()->answers;
        $sessionKey = 'answers-' . $jawaban->id;

        if ($answers) {
            session([$sessionKey => $answers]);
            return response()->noContent();
        }

        dd('error');
    }
}
