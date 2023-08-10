<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use DateTime;
use Exception;
use Helpers\Data\AgeHelper;
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
        return view('testing.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'tanggal_lahir' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'notelp' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pendidikan_terakhir' => 'required',
            'status' => 'required',
        ]);

        $usia = AgeHelper::getUsia($request->tanggal_lahir, new DateTime());

        $user = User::create([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin1' => $request->jenis_kelamin1,
            'email' => $request->email,
            'usia' => $usia,
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

        return redirect(RouteServiceProvider::HOME)->with('success', 'Registrasi sukses!, silahkan logi');
    }

}
