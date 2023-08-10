<!DOCTYPE html>
<html lang="en">
<head>
<!-- primary: '#8404F4',
                        secondary: '#FCF304',
                        bgcolor: '#F7F1F1', -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tranceformasi - Register</title>
</head>
<body class="bg-[#F7F1F1]">
    <h1 class="mt-10 block text-center text-6xl font-bold">
        Daftar
    </h1>
    <h1 class="mt-2 mb-5 block text-center text-xl">
        Cepat dan Mudah
    </h1>
    <form method="POST" action="{{ route('register') }}" class="max-w-sm mx-auto">
        @csrf
        <h1 class="ml-1 mb-1">Isi Data Dirimu</h1>
        <label for="name" id="">
            <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="mb-2 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <h1 class="ml-1 mb-1">Tanggal Lahir</h1>
        <label for="tanggallahir" id="">
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Nama Lengkap" class="mb-2 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <h1 class="ml-1 mb-1">Jenis Kelamin</h1>
        <label for="jeniskelamin" id="" class="flex mb-5">
            <ul class="flex mt-1">
                <li>
                <input type="checkbox" name="jenis_kelamin" id="jenis_kelamin1" class="peer/laki hidden single-check" value="Laki-Laki" />
                    <label for="jenis_kelamin1" class="select-none cursor-pointer rounded-lg border-2 border-sky-500 py-[6px] px-[61px] font-bold text-sky-500 transition-colors duration-200 ease-in-out peer-checked/laki:bg-sky-500 peer-checked/laki:text-[#F7F1F1] peer-checked/laki:border-[#F7F1F1] mr-1"> Laki-laki </label>
                </li>
                <li>
                <input type="checkbox" name="jenis_kelamin" id="jenis_kelamin2" class="peer/perempuan hidden single-check" value="Perempuan" />
                    <label for="jenis_kelamin2" class="select-none cursor-pointer rounded-lg border-2 border-pink-500 py-[6px] px-[50px] font-bold text-pink-500 transition-colors duration-200 ease-in-out peer-checked/perempuan:bg-pink-500 peer-checked/perempuan:text-[#F7F1F1] peer-checked/perempuan:border-[#F7F1F1]"> Perempuan </label>
                </li>
            </ul>
        </label>
        <label for="email" id="">
            <input type="email" name="email" id="email" placeholder="Alamat Email" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="telepon" id="">
            <input type="text" name="notelp" id="notelp" placeholder="Nomor Telepon" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="pendidikanterkahir" id="">
            <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir (SMA/D3/S1/S2/dsb)" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="Jurusan" id="">
            <input type="text" name="jurusan" id="Jurusan" placeholder="Jurusan" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="institusi" id="">
            <input type="text" name="institusi" id="institusi" placeholder="Institusi" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="Perusahaan" id="">
            <input type="text" name="perusahaan" id="Perusahaan" placeholder="Perusahaan" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="status" id="">
            <input type="text" name="status" id="status" placeholder="Status" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="jabatan" id="">
            <input type="text" name="jabatan" id="jabatan" placeholder="Jabatan dalam perusahaan" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="masa_kerja" id="">
            <input type="text" name="masa_kerja" id="masa_kerja" placeholder="Masa Kerja" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="password" id="">
            <input type="password" name="password" placeholder="Password" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="confirmpassword" id="">
            <input type="password" name="password" placeholder="Konfirmasi Password" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <div class="flex mt-12 mb-36 w-full space-x-28">
            <button type="submit" class="w-32 border-solid rounded-lg border-4 bg-[#8404F4] hover:border-indigo-800 hover:border-4 transition-colors duration-200 ease-in-out">
                <h1 class="text-[#F7F1F1] text-center font-semibold italic m-1">Daftar</h1>
            </button>
            <a href="" class="underline justify-self-end m-1 hover:text-sky-500">
                Sudah Punya Akun?
            </a>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>x
    <script>
        $(document).ready(function() {
            $('.single-check').on('change', function() {
                $('.single-check').not(this).prop('checked', false);
            });
        });
    </script>
</body>
</html>