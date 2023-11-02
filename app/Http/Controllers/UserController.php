<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Helpers\Data\StringHelper;
use Helpers\Validation\Validation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $jawaban = auth()->user()->jawabans->first();
        return view('testing/halaman', [
            'user' => auth()->user(),
            'isAdmin' => Validation::isAdmin(auth()->user()->email),
            'jawaban' => $jawaban,
            'testDate' => StringHelper::replaceDate(Carbon::parse($jawaban->updated_at)->format('j F Y'))
        ]);
    }

    public function downloadHasil(User $user)
    {
        $currentSection = $user->jawabans()->latest()->first()->hasilPDF();
    }
    
    public function storeFinalAnswer(User $user)
    {
        $currentSection = $user->jawabans()->latest()->first()->hasilPDF();

        
    }
}
