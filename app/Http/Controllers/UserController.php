<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'user' => auth()->user()
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
