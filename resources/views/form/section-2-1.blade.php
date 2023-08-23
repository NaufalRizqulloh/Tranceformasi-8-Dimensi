@extends('templates.default')

@section('content')

<div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="my-4 md:my-10 text-xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
</div>
<div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="mt-8 text-center font-bold text-xl md:text-2xl">INSTRUKSI PENGERJAAN</h1>
    <h1 class="ml-12 mr-12 text-sm md:text-lg mt-6">1. Jawablah dengan jujur berdasarkan parameter yang disediakan</h1>
    <h1 class="ml-12 mr-12 text-sm md:text-lg mt-4">2. Sesuaikan dengan karakter dan pengalaman pribadi anda</h1>
    <h1 class="ml-12 mr-12 mb-8 text-sm md:text-lg mt-4">3. Pilihlah jawaban yang paling mendekati kecendrungan anda <br>(1 : Sangat tidak setuju, 6 : Sangat setuju)</h1>
</div>

<form action="">

<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        1
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
            Saya cenderung lebih fokus pada tujuan yang ingin dicapai daripada <br> menghindari hal-hal yang tidak diinginkan.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        2
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
            Saya lebih termotivasi oleh kesuksesan dan <br> pencapaian dari pada menghindari kegagalan
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="2-1" class="peer/2-1 hidden single-checkbox2"/>
            <label for="2-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/2-1:bg-red-700 peer-checked/2-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/2-1:text-white">
                1
            </label>
        <input type="checkbox" id="2-2" class="peer/2-2 hidden single-checkbox2"/>
            <label for="2-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/2-1:bg-red-500 peer-checked/2-1:border-transparent peer-checked/2-2:bg-red-500 peer-checked/2-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/2-1:text-white peer-checked/2-2:text-white">
                2
            </label>
        <input type="checkbox" id="2-3" class="peer/2-3 hidden single-checkbox2"/>
            <label for="2-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/2-1:bg-red-400 peer-checked/2-1:border-transparent peer-checked/2-2:bg-red-400 peer-checked/2-2:border-transparent peer-checked/2-3:bg-red-400 peer-checked/2-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/2-1:text-white peer-checked/2-2:text-white peer-checked/2-3:text-white">
                3
            </label>

        <input type="checkbox" id="2-6" class="peer/2-6 hidden single-checkbox2"/>
        <input type="checkbox" id="2-5" class="peer/2-5 hidden single-checkbox2"/>
        <input type="checkbox" id="2-4" class="peer/2-4 hidden single-checkbox2"/>
            <label for="2-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/2-4:bg-green-400 peer-checked/2-4:border-transparent peer-checked/2-5:bg-green-400 peer-checked/2-5:border-transparent peer-checked/2-6:bg-green-400 peer-checked/2-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/2-6:text-white peer-checked/2-5:text-white peer-checked/2-4:text-white">
                4
            </label>
            <label for="2-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/2-5:bg-green-500 peer-checked/2-5:border-transparent peer-checked/2-6:bg-green-500 peer-checked/2-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/2-6:text-white peer-checked/2-5:text-white">
                5
            </label>
            <label for="2-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/2-6:bg-green-600 peer-checked/2-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/2-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        3
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
            Saya lebih suka beroikir hal-hal positif yang saya <br> capai dari pada memikirkan hal-hal yang saya hindari
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="3-1" class="peer/3-1 hidden single-checkbox3"/>
            <label for="3-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/3-1:bg-red-700 peer-checked/3-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/3-1:text-white">
                1
            </label>
        <input type="checkbox" id="3-2" class="peer/3-2 hidden single-checkbox3"/>
            <label for="3-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/3-1:bg-red-500 peer-checked/3-1:border-transparent peer-checked/3-2:bg-red-500 peer-checked/3-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/3-1:text-white peer-checked/3-2:text-white">
                2
            </label>
        <input type="checkbox" id="3-3" class="peer/3-3 hidden single-checkbox3"/>
            <label for="3-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/3-1:bg-red-400 peer-checked/3-1:border-transparent peer-checked/3-2:bg-red-400 peer-checked/3-2:border-transparent peer-checked/3-3:bg-red-400 peer-checked/3-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/3-1:text-white peer-checked/3-2:text-white peer-checked/3-3:text-white">
                3
            </label>

        <input type="checkbox" id="3-6" class="peer/3-6 hidden single-checkbox3"/>
        <input type="checkbox" id="3-5" class="peer/3-5 hidden single-checkbox3"/>
        <input type="checkbox" id="3-4" class="peer/3-4 hidden single-checkbox3"/>
            <label for="3-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/3-4:bg-green-400 peer-checked/3-4:border-transparent peer-checked/3-5:bg-green-400 peer-checked/3-5:border-transparent 
            peer-checked/3-6:bg-green-400 peer-checked/3-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/3-6:text-white peer-checked/3-5:text-white peer-checked/3-4:text-white">
                4
            </label>
            <label for="3-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/3-5:bg-green-500 peer-checked/3-5:border-transparent peer-checked/3-6:bg-green-500 peer-checked/3-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/3-6:text-white peer-checked/3-5:text-white">
                5
            </label>
            <label for="3-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/3-6:bg-green-600 peer-checked/3-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/3-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        4
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya lebih memilih memikirkan langkah-langkah yang perlu <br> diambil untuk mencapai tujuan daripada memikirkan hal-hal 
yang perlu dihindari.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        5
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya cenderung mencari jawaban atau solusi dari <br> dalam diri saya sendiri.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        6
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya lebih mengandalkan pemikiran dan pengalaman <br>  pribadi dalam mengambil keputusan.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        7
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya lebih suka mencari masukan dan pandangan dari orang lain <br>  sebelum mengambil keputusan.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        8
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya merasa lebih yakin dengan keputusan yang dibuat setelah <br> mempertimbangkan masukan dari orang lain.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        9
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya cenderung melihat kesamaan dan pola yang serupa <br> dalam situasi atau orang.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        10
    </h1>
    <div class="ml-3 mr-3">
        <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
        Saya lebih tertarik pada perbedaan dan keunikan dalam <br> situasi atau orang.
        </h1>
    </div>
    <div class="flex h-fit w-fit mx-auto">
        <div class="w-8 sm:w-12 mt-10 sm:mt-9">
            <img src="dist/thumbdown.png" alt="">
        </div>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox1"/>
            <label for="1-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white">
                1
            </label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox1"/>
            <label for="1-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white">
                2
            </label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox1"/>
            <label for="1-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-1:text-white peer-checked/1-2:text-white peer-checked/1-3:text-white">
                3
            </label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox1"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox1"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox1"/>
            <label for="1-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white peer-checked/1-4:text-white">
                4
            </label>
            <label for="1-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-500 peer-checked/1-6:border-transparent  mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white peer-checked/1-5:text-white">
                5
            </label>
            <label for="1-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/1-6:text-white">
                6
            </label>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>
        <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
            <img src="dist/thumbup.png" alt="">
        </div>
    </div>
    <div class="mb-12">

    </div>

</div>

</form>

@endsection