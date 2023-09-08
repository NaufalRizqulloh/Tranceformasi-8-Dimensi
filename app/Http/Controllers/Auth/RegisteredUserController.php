<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Carbon;
use GuzzleHttp\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use PhpParser\Node\Expr\Cast\Bool_;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $client = new Client();


        return view('testing.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        dd('masuk');
        $request->validate([
            'name' => ['required', 'string'],
            'tanggal_lahir' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'notelp' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pendidikan_terakhir' => ['required', 'string'],
            // 'domisili' => ['required', 'string'],
            'status' => ['required', 'in:1,2'],

            'institusi' => ['required_if:status,1', 'string'],
            'jurusan' => ['required_if:status,1', 'string'],

            'perusahaan' => ['required_if:status,2', 'string'],
            'jabatan' => ['required_if:status,2', 'string'],
            'masa_kerja' => ['required_if:status,2', 'integer'],
        ]);

        // $tanggalLahir = DateTime::createFromFormat('Y-m-d', $request->tanggal_lahir);
        $tanggalLahir = Carbon::parse($request->tanggal_lahir)->setTimezone('Asia/Jakarta');
        $usia = $tanggalLahir->age;
        dd($usia, $tanggalLahir, $request->tanggal_lahir);
        
        $user = User::create([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin1' => $request->jenis_kelamin1,
            'email' => $request->email,
            'usia' => $usia,
            // 'domisili' => $request->domisili,
            'notelp' => $request->notelp,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'status' => $request->status,
            'institusi' => $request->institusi,
            'jurusan' => $request->jurusan,
            'perusahaan' => $request->perusahaan,
            'jabatan' => $request->jabatan,
            'masa_kerja' => $request->masa_kerja,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
