@extends('templates.default')

@section('content')

<div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="my-4 md:my-10 text-xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
</div>
<div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="mt-8 text-center font-bold text-xl md:text-2xl">INSTRUKSI PENGERJAAN</h1>
    <h1 class="ml-12 mr-12 text-sm md:text-lg mt-6">1. Jawablah dengan jujur berdasarkan parameter yang disediakan</h1>
    <h1 class="ml-12 mr-12 text-sm md:text-lg mt-4">2. Sesuaikan dengan karakter dan pengalaman pribadi anda</h1>
    <h1 class="ml-12 mr-12 mb-8 text-sm md:text-lg mt-4">3. Pilihlah jawaban yang paling mendekati kecendrungan anda</h1>
</div>

<form action="">

<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        1
    </h1>
    <h1 class="w-fit mx-auto block text-center text-xl mb-24">
        Saya cenderung lebih fokus pada tujuan yang ingin dicapai daripada <br> menghindari hal-hal yang tidak diinginkan.
    </h1>
    <div class="flex-row w-fit mx-auto block">
        <span class="ml-9 mr-5">Sangat Tidak Setuju</span>
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox"/>
            <label for="1-1" class="mt-8 ml-3 md:ml-6 lg:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1"></label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox"/>
            <label for="1-2" class="mt-8 ml-3 md:ml-6 lg:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 py-[7px] px-[17px] transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1"></label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox"/>
            <label for="1-3" class="mt-8 ml-3 md:ml-6 lg:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 py-[3px] px-[13px] transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1"></label>

        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox"/>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox"/>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox"/>
            <label for="1-4" class="mt-8 ml-3 md:ml-6 lg:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 py-[3px] px-[13px] transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1"></label>
            <label for="1-5" class="mt-8 ml-3 md:ml-6 lg:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 py-[7px] px-[17px] transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent  mr-1"></label>
            <label for="1-6" class="mt-8 ml-3 md:ml-6 lg:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-600 peer-checked/1-6:border-transparent mr-1"></label>
        <span class="ml-11">Sangat setuju</span>
    </div>

</div>

</form>

@endsection