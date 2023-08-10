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

<div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-[440px] border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
    <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
        1
    </h1>
    <h1 class="w-max block mx-auto text-center text-xl mb-12">
        Saya cenderung lebih fokus pada tujuan yang ingin dicapai daripada <br> menghindari hal-hal yang tidak diinginkan.
    </h1>
    <div class="w-auto mx-auto">
        <input type="checkbox" id="1-1" class="peer/1-1 hidden single-checkbox check1"/>
            <label for="1-1" class="mt-8 ml-3 md:ml-6 lg:ml-[3rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-700 peer-checked/1-1:border-transparent mr-1"></label>
        <input type="checkbox" id="1-2" class="peer/1-2 hidden single-checkbox check1"/>
            <label for="1-2" class="mt-8 ml-3 md:ml-6 lg:ml-[3rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-500 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-500 peer-checked/1-2:border-transparent mr-1"></label>
        <input type="checkbox" id="1-3" class="peer/1-3 hidden single-checkbox check1"/>
            <label for="1-3" class="mt-8 ml-3 md:ml-6 lg:ml-[3rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-1:bg-red-400 peer-checked/1-1:border-transparent peer-checked/1-2:bg-red-400 peer-checked/1-2:border-transparent peer-checked/1-3:bg-red-400 peer-checked/1-3:border-transparent mr-1"></label>
        <input type="checkbox" id="1-4" class="peer/1-4 hidden single-checkbox check1"/>
            <label for="1-4" class="mt-8 ml-3 md:ml-6 lg:ml-[3rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-4:bg-green-400 peer-checked/1-4:border-transparent peer-checked/1-5:bg-green-400 peer-checked/1-5:border-transparent 
            peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent mr-1"></label>
        <input type="checkbox" id="1-5" class="peer/1-5 hidden single-checkbox check1"/>
            <label for="1-5" class="mt-8 ml-3 md:ml-6 lg:ml-[3rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-5:bg-green-500 peer-checked/1-5:border-transparent peer-checked/1-6:bg-green-400 peer-checked/1-6:border-transparent  mr-1"></label>
        <input type="checkbox" id="1-6" class="peer/1-6 hidden single-checkbox check1"/>
            <label for="1-6" class="mt-8 ml-3 md:ml-6 lg:ml-[3rem] select-none cursor-pointer rounded-full border-2 border-slate-400 py-[10px] px-5 transition-colors duration-200 ease-in-out peer-checked/1-6:bg-green-700 peer-checked/1-6:border-transparent mr-1"></label>
    </div>

</div>

</form>

@endsection