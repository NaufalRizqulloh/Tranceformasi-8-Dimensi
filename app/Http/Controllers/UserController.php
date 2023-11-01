<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Helpers\Validation\Validation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('testing/halaman', [
            'user' => auth()->user(),
            'isAdmin' => Validation::isAdmin(auth()->user()->email),
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
