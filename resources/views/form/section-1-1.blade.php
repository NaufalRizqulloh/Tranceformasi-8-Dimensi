@extends('templates.default')

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
                    1
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mudah bergaul, ramah, mudah setuju</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Mempercayai, percaya pada orang lain</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Petualang, suka mengambil resiko</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Penuh toleransi, menghormati orang lain</h1>
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
                    1
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mudah bergaul, ramah, mudah setuju</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Mempercayai, percaya pada orang lain</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Petualang, suka mengambil resiko</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Penuh toleransi, menghormati orang lain</h1>
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
                    1
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mudah bergaul, ramah, mudah setuju</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Mempercayai, percaya pada orang lain</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Petualang, suka mengambil resiko</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Penuh toleransi, menghormati orang lain</h1>
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
                    1
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mudah bergaul, ramah, mudah setuju</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Mempercayai, percaya pada orang lain</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Petualang, suka mengambil resiko</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Penuh toleransi, menghormati orang lain</h1>
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
                    1
                </div>
                <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
            </div>
            <ul>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1"/>
                        <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Mudah bergaul, ramah, mudah setuju</h1>
                        </div>
                    <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1"/>
                        <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2"/>
                        <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                    <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                        <h1 class="mt-[6px]">Mempercayai, percaya pada orang lain</h1>
                    </div>    
                    <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2"/>
                        <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3"/>
                        <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Petualang, suka mengambil resiko</h1>
                        </div>
                    <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3"/>
                        <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
                </li>
                <li class="flex h-auto">
                    <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4"/>
                        <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                        <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                            <h1 class="mt-[6px]">Penuh toleransi, menghormati orang lain</h1>
                        </div>
                    <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4"/>
                        <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[19px] px-[19px] transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
                </li>
            </ul>
        </div>  
    </form>


    <a href="{{route('user.form.get', ['destination' => 'Section-1-2'])}}">test</a>
    <label for="domisili">Pilih Domisili:</label>
<select id="domisili" name="domisili">
    <option value="jakarta">Jakarta</option>
    <option value="bandung">Bandung</option>
    <option value="surabaya">Surabaya</option>
    <option value="yogyakarta">Yogyakarta</option>
    <option value="medan">Medan</option>
    <!-- Tambahkan lebih banyak pilihan domisili di sini -->
</select>

<label for="domisili">Pilih Domisili:</label>
<input type="text" id="domisiliInput" list="domisiliList" name="domisili">
<datalist id="domisiliList">
    <option value="Jakarta">
    <option value="Bandung">
    <option value="Surabaya">
    <option value="Yogyakarta">
    <option value="Medan">
    <!-- Tambahkan lebih banyak pilihan domisili di sini -->
</datalist>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection