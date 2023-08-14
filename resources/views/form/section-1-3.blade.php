@extends

@section('content')
<div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%]  sm:h-[66px] md:h-[125px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
        <h1 class="my-4 md:my-10 text-2xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
    </div>
    <div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[277px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
        <h1 class="mt-8 text-center font-bold text-2xl">INSTRUKSI PENGERJAAN</h1>
        <h4 class="ml-12 text-1xl mt-4">1. Setiap soal harus memiliki satu jawaban P(aling) dan satu jawaban T(idak)</h4>
        <h4 class="ml-12 text-1xl mt-4">2. Jawaban yang sudah dipilih di baris P tidak boleh dipilih kembali di baris T, maupun sebaliknya </h4>
        <h4 class="ml-12 text-1xl mt-4">3. Pilihlah  jawaban yang sesuai dengan karakter anda</h4>
    </div>
    <form action=""> 
        @csrf      
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    17
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Pendidikan, kebudayaan</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Prestasi, penghargaan</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Keselamatan, keamanan</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Sosial, pertemuan kelompok</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                  <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    18
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mengambil kendali, bersikap langsung/direct</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Suka bergaul, antusias</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mudah ditebak, konsisten</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Waspada, berhati-hati</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    19
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Sulit dikalahkan, dituduhkan</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Melakukan sesuai perintah</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Bersemangat, riang</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Ingin keteraturan, rapi</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    20
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Saya akan pimpin mereka</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Saya akan ikut/mengikuti</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Saya akan pengaruhi/bujuk mereka</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Saya akan mendapatkan fakta-faktanya</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    21
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Memikirkan orang lain dulu</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Suka bersaing/kompetitif, suka tantangan</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Optimis, berfikir positif</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Sistematis, berfikir logis</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>
        
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    22
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Menyenangkan orang lain, ramah, penurut</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Tertawa lepas, hidup</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Pemberani, tegas</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Pendiam, tertutup, tenang</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    23
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Ingin wewenang/kekuasaan lebih</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Ingin kesempata baru</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Menghindari perselisihan/konflik apapun</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Ingin arahan yang jelas</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>  
        <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
            <div class="flex">
                <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
                <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                    24 
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Dapat dipercaya dan diandalkan</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Kreatif, unik</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Beriorentiasi pada hasil/profit/untung</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Memegang tugas standar yang tinggi, akurat</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>  
    </form>
    <div class="w-full mx-auto flex">
        <button class="mt-8 ml-32 text-xl w-[250px] h-93 border-2 rounded-full bg-[#ffffff] text-center">
            Kembali
        </button>
        <button class="mt-8 mr-32 text-xl w-[250px] h-93 border-2 rounded-full bg-[#ffffff] text-center">
            Selanjutnya
        </button>
    </div>
@endsection