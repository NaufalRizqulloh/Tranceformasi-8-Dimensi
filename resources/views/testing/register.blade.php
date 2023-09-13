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
             <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="mb-2 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent @error('name')  placeholder-shown:border-red-500 @enderror" value="{{ old('name') }}" />
             @error('name')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <h1 class="ml-1 mb-1">Tanggal Lahir</h1>
         <label for="tanggal_lahir" id="">
             <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Nama Lengkap" onfocus="this.showPicker()" class="mb-2 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('tanggal_lahir') }}" />
             @error('tanggal_lahir')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <h1 class="ml-1 mb-1">Jenis Kelamin</h1>
         <label for="jeniskelamin" id="" class="flex mb-5">
             <ul class="flex mt-1">
                 <li>
                     <input type="checkbox" name="jenis_kelamin" id="jenis_kelamin1" class="peer/laki hidden single-check" value="laki" @if(old('jenis_kelamin')=='laki' ) checked @endif />
                     <label for="jenis_kelamin1" class="select-none cursor-pointer rounded-lg border-2 border-sky-500 py-[6px] px-[61px] font-bold text-sky-500 transition-colors duration-200 ease-in-out peer-checked/laki:bg-sky-500 peer-checked/laki:text-[#F7F1F1] peer-checked/laki:border-[#F7F1F1] mr-1"> Laki-laki </label>
                 </li>
                 <li>
                     <input type="checkbox" name="jenis_kelamin" id="jenis_kelamin2" class="peer/perempuan hidden single-check" value="perempuan" @if(old('jenis_kelamin')=='perempuan' ) checked @endif />
                     <label for="jenis_kelamin2" class="select-none cursor-pointer rounded-lg border-2 border-pink-500 py-[6px] px-[50px] font-bold text-pink-500 transition-colors duration-200 ease-in-out peer-checked/perempuan:bg-pink-500 peer-checked/perempuan:text-[#F7F1F1] peer-checked/perempuan:border-[#F7F1F1]"> Perempuan </label>
                 </li>
             </ul>
             @error('jenis_kelamin')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <label for="email" id="">
             <input type="email" name="email" id="email" placeholder="Alamat Email" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent placeholder-shown:border-red-500" value="{{ old('email') }}" />
             @error('email')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <label for="notelp" id="">
             <input type="number" name="notelp" id="notelp" placeholder="Nomor Telepon" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent placeholder-shown:border-red-500" value="{{ old('notelp') }}" />
             @error('notelp')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <label for="domisili" id="">
             <input type="text" name="domisili" id="domisili" placeholder="Domisili" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent placeholder-shown:border-red-500" value="{{ old('domisili') }}" />
             @error('domisili')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <label for="pendidikan_terakhir" id="">
             <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir (SMA/D3/S1/S2/dsb)" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent placeholder-shown:border-red-500" value="{{ old('pendidikan_terakhir') }}" />
             @error('pendidikan_terakhir')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <label for="status" id="">
             <!-- <input type="number" name="status" id="statuss" placeholder="Status" value="" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" /> -->
             <select name="status" id="status" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent">
                 <option value="0" @if(old('status')=='0' ) selected @endif>-- Pilih Status --</option>
                 <option value="1" @if(old('status')=='1' ) selected @endif>Pelajar</option>
                 <option value="2" @if(old('status')=='2' ) selected @endif>Pekerja</option>
             </select>
             @error('status')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <div id="div-pelajar" class="hidden">
             <label for="jurusan" id="">
                 <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('jurusan') }}" />
                 @error('jurusan')
                 <h1 class="text-red-600">{{ $message }}</h1>
                 @enderror
             </label>
             <label for="institusi" id="">
                 @error('institusi')
                 <h1 class="text-red-600">{{ $message }}</h1>
                 @enderror<input type="text" name="institusi" id="institusi" placeholder="Institusi" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('institusi') }}" />
             </label>
         </div>
         <div id="div-pekerja" class="hidden">
             <label for="perusahaan" id="">
                 <input type="text" name="perusahaan" id="perusahaan" placeholder="Perusahaan" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('perusahaan') }}" />
                 @error('perusahaan')
                 <h1 class="text-red-600">{{ $message }}</h1>
                 @enderror
             </label>
             <label for="jabatan" id="">
                 <input type="text" name="jabatan" id="jabatan" placeholder="Jabatan dalam perusahaan" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('jabatan') }}" />
                 @error('jabatan')
                 <h1 class="text-red-600">{{ $message }}</h1>
                 @enderror
             </label>
             <label for="masa_kerja" id="">
                 <input type="number" name="masa_kerja" id="masa_kerja" placeholder="Masa Kerja" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('masa_kerja') }}" />
                 @error('masa_kerja')
                 <h1 class="text-red-600">{{ $message }}</h1>
                 @enderror
             </label>
         </div>
         <label for="password" id="">
             <input type="password" name="password" id="password" placeholder="Password" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('password') }}" />
             @error('password')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
         </label>
         <label for="confirmpassword" id="">
             <input type="password" name="password_confirmation" id="confirmpassword" placeholder="Konfirmasi Password" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent" value="{{ old('password_confirmation') }}" />
             @error('password_confirmation')
             <h1 class="text-red-600">{{ $message }}</h1>
             @enderror
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
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
         $(document).ready(function() {
             $('.single-check').on('change', function() {
                 $('.single-check').not(this).prop('checked', false);
             });
         });

         const status = document.getElementById("status");
         const hidden1 = document.getElementById("div-pelajar");
         const hidden2 = document.getElementById("div-pekerja");

         const jurusan = document.getElementById("jurusan");
         const institusi = document.getElementById("institusi");

         const perusahaan = document.getElementById('perusahaan');
         const jabatan = document.getElementById('jabatan');
         const masaKerja = document.getElementById('masa_kerja');

         status.addEventListener("change", function() {
             if (status.value == 1) {
                 hidden1.classList.remove("hidden");
                 hidden2.classList.add("hidden");
                 jabatan.value = "";
                 masaKerja.value = "";
                 perusahaan.value = "";

             } else if (status.value == 2) {
                 hidden2.classList.remove("hidden");
                 hidden1.classList.add("hidden");
                 jurusan.value = "";
                 institusi.value = "";

             } else {
                 hidden1.classList.add("hidden");
                 hidden2.classList.add("hidden");
                 jurusan.value = "";
                 institusi.value = "";
                 jabatan.value = "";
                 masaKerja.value = "";
                 perusahaan.value = "";
             }
         });
     </script>
 </body>

 </html>