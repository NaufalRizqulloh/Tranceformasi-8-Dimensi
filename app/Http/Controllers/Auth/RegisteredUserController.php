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
use Illuminate\Support\Facades\Validator;
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
        $response = $client->get('https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => '1d168db07423b0d975eb96d96b1d5bea'
            ],
        ]);

        $datas = json_decode($response->getBody(), true);

        $finalData = [];
        
        foreach ($datas['rajaongkir']['results'] as $data) {
            $finalData[] = $data['city_name'] . ', ' . $data['province'];
        }
         return view('testing.register', ['domisilis' => $finalData]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = [
            'name.required' => 'Mohon bagian ini diisi.',
            'tanggal_lahir.required' => 'Mohon masukkan tanggal lahir.',
            'jenis_kelamin.required' => 'Mohon pilih salah satu.',
            'email.required' => 'Mohon bagian ini diisi.',
            'email.email' => 'Format Email Salah.',
            'notelp.required' => 'Mohon bagian ini diisi.',
            'domisili.required' => 'Mohon bagian ini diisi.',
            'pendidikan_terakhir.required' => 'Mohon bagian ini diisi.',
            'status.required' => 'Mohon pilih salah satu.',
            'status.in' => 'Status yang dipilih tidak valid.',

            'institusi.required' => 'Mohon bagian ini diisi.',
            'jurusan.required' => 'Mohon bagian ini diisi.',
            
            'perusahaan.required' => 'Mohon bagian ini diisi.',
            'jabatan.required' => 'Mohon bagian ini diisi.',
            'masa_kerja.required' => 'Mohon bagian ini diisi.',
            
            'password.required' => 'Mohon bagian ini diisi.',
            'password.confirmed' => 'Konfirmasi Password tidak sama.',
            // Add custom messages for other rules here if needed
        ];

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'notelp' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pendidikan_terakhir' => ['required', 'string'],
            'domisili' => ['required', 'string'],
            'status' => ['required', 'in:1,2'],

            'institusi' => ['required_if:status,1'],
            'jurusan' => ['required_if:status,1'],

            'perusahaan' => ['required_if:status,2'],
            'jabatan' => ['required_if:status,2'],
            'masa_kerja' => ['required_if:status,2'],
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // $tanggalLahir = DateTime::createFromFormat('Y-m-d', $request->tanggal_lahir);
        $tanggalLahir = Carbon::parse($request->tanggal_lahir)->setTimezone('Asia/Jakarta');
        $usia = $tanggalLahir->age;

        // dd('berhasil');
        // dd(
        //     $usia,
        //     $request->jenis_kelamin,
        //     $request->name,
        //     $request->email,
        //     $request->notelp,
        //     $request->password,
        //     $request->pendidikan_terakhir,
        //     $request->domisili,
        //     $request->status,
        //     $request->institusi,
        //     $request->jurusan,
        //     $request->perusahaan,
        //     $request->jabatan,
        //     $request->masa_kerja,
        // );
        
        $user = User::create([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'usia' => $usia,
            'domisili' => $request->domisili,
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
