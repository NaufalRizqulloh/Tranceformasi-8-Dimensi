@extends('templates.default')

@section('content')
<div class="mt-16 md:mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[30px] lg:rounded-[50px] bg-[#FFFFFF] dark:bg-slate-700 dark:border-transparent">
    <h1 class="my-2 md:my-10 text-2xl md:text-4xl font-bold md:font-black text-center text-black dark:text-bgcolor">PERSON ANALYSIS RESPONSE</h1>
</div>
<div class="mt-4 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[30px] lg:rounded-[50px] bg-[#FFFFFF] dark:bg-slate-700 dark:border-transparent">
    <h1 class="mt-4 md:mt-8 text-center text-black dark:text-bgcolor font-bold text-2xl">INSTRUKSI PENGERJAAN</h1>

    @foreach(config('form-rules.rules-section2') as $index => $rules)
    <h4 class="ml-4 mr-4 md:ml-12 md:mr-12 mt-2 text-sm md:text-md text-black dark:text-bgcolor">{!! $index . ". ". $rules !!}</h4>
    @endforeach

    <div class="mt-0 mb-8"></div>
</div>
<form id="form" method="POST" action="{{ route('user.form.update.submit', ['jawaban' => $jawaban->id]) }}">
    @method('PATCH')
    @csrf
    @foreach($questions as $index => $quest)
    <div class="mt-4 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[30px] lg:rounded-[50px] bg-white dark:bg-slate-700 dark:border-transparent">        
        <div class="flex mt-10 mx-auto w-12 h-12 text-sm md:text-lg text-black dark:text-bgcolor justify-center items-center rounded-full border-2 border-slate-500 dark:border-white">
            {{ $index }}
        </div>
        <div class="ml-3 mr-3">
            <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
                {{ $quest['question'] }}
            </h1>
        </div>
        <div class="flex h-fit w-fit mx-auto">
            <div class="w-8 mt-10 max-md:hidden">
                <img src="/dist/thumbdown.png" alt="a">
            </div>
            <input type="checkbox" id="{{ $index }}-1" class="hidden peer/{{ $index }}-1 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="1" {{ (isset($answers[$index]) && $answers[$index] == "1") ? 'checked' : '' }} />
            <label for="{{ $index }}-1" class="mt-8 md:ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-red-700 dark:border-red-700 text-black dark:text-bgcolor h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-1:bg-red-700 peer-checked/{{ $index }}-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-1:text-white">
                1
            </label>
            <input type="checkbox" id="{{ $index }}-2" class="hidden peer/{{ $index }}-2 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="2" {{ (isset($answers[$index]) && $answers[$index] == "2") ? 'checked' : '' }} />
            <label for="{{ $index }}-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-red-500 dark:border-red-500 text-black dark:text-bgcolor h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-1:bg-red-500 peer-checked/{{ $index }}-1:border-transparent peer-checked/{{ $index }}-2:bg-red-500 peer-checked/{{ $index }}-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-1:text-white peer-checked/{{ $index }}-2:text-white">
                2
            </label>
            <input type="checkbox" id="{{ $index }}-3" class="hidden peer/{{ $index }}-3 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="3" {{ (isset($answers[$index]) && $answers[$index] == "3") ? 'checked' : '' }} />
            <label for="{{ $index }}-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-red-400 dark:border-red-400 text-black dark:text-bgcolor h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-1:bg-red-400 peer-checked/{{ $index }}-1:border-transparent peer-checked/{{ $index }}-3:bg-red-400 peer-checked/{{ $index }}-2:bg-red-400 peer-checked/{{ $index }}-2:border-transparent peer-checked/{{ $index }}-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-1:text-white peer-checked/{{ $index }}-2:text-white peer-checked/{{ $index }}-3:text-white">
                3
            </label>

            <input type="checkbox" id="{{ $index }}-4" class="hidden peer/{{ $index }}-4 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="4" {{ (isset($answers[$index]) && $answers[$index] == "4") ? 'checked' : '' }} />
            <input type="checkbox" id="{{ $index }}-5" class="hidden peer/{{ $index }}-5 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="5" {{ (isset($answers[$index]) && $answers[$index] == "5") ? 'checked' : '' }} />
            <input type="checkbox" id="{{ $index }}-6" class="hidden peer/{{ $index }}-6 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="6" {{ (isset($answers[$index]) && $answers[$index] == "6") ? 'checked' : '' }} />
            <label for="{{ $index }}-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-green-400 dark:border-green-400 text-black dark:text-bgcolor h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-6:bg-green-400 peer-checked/{{ $index }}-6:border-transparent peer-checked/{{ $index }}-5:bg-green-400 peer-checked/{{ $index }}-5:border-transparent peer-checked/{{ $index }}-4:bg-green-400 peer-checked/{{ $index }}-4:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-6:text-white peer-checked/{{ $index }}-5:text-white peer-checked/{{ $index }}-4:text-white">
                4
            </label>
            <label for="{{ $index }}-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-green-500 dark:border-green-500 text-black dark:text-bgcolor h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-6:bg-green-500 peer-checked/{{ $index }}-6:border-transparent peer-checked/{{ $index }}-5:bg-green-500 peer-checked/{{ $index }}-5:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-6:text-white peer-checked/{{ $index }}-5:text-white">
                5
            </label>
            <label for="{{ $index }}-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-green-700 dark:border-green-700 text-black dark:text-bgcolor h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-6:bg-green-700 peer-checked/{{ $index }}-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-6:text-white">
                6
            </label>
            
            <div class="w-8 mt-7 ml-4 max-md:hidden">
                <img src="/dist/thumbup.png" alt="Setuju">
            </div>
        </div>
        <div class="mb-12">

        </div>

    </div>
    @endforeach

    
    {{-- kalau error --}}
    <div>
        @foreach(['checkbox', 'checkbox.p', 'checkbox.t', 'range'] as $field)
        @error($field)
        <h1 class="text-red-600">{{ $message }}</h1>
        @enderror
        @endforeach
    </div>

    {{-- previous or next button --}}
    <div class="flex w-fit space-x-8 md:space-x-12 mx-auto">
        <button onclick="toPrevious()" class="mt-8 w-40 h-12 text-base md:text-xl border-2 rounded-full bg-white dark:bg-slate-700 border-slate-500 text-black dark:text-bgcolor text-center">
            Kembali
        </button>
        
        @if($nextDestination == 'submit')
        <div class="flex mt-8 w-40 h-12 text-base md:text-xl justify-center items-center border-2 rounded-full bg-white dark:bg-slate-700 border-slate-500 text-black dark:text-bgcolor text-center">
            <a id="submit-button" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center cursor-pointer">
                Submit
            </a>
        </div>
        @else
        <button onclick="toNext()" class="mt-8 w-40 h-12 text-base md:text-xl border-2 rounded-full bg-white dark:bg-slate-700 border-slate-500 text-black dark:text-bgcolor text-center">
            Selanjutnya
        </button>
        @endif
    </div>
    
    <div>
        <h1>{{ var_dump($answers) }}</h1>
    </div>
    <div>
        <br>
        <h1>{{ $nextDestination }}</h1>
        <br>
        <h1>{{ $previousDestination }}</h1>
        <br>
    </div>
    
    <!-- overlaySubmit -->
    
    <div id="confirm-element" class="top-1/4 left-1/4 w-1/2 h-fit rounded-3xl bg-white z-30 flex">
        <div class="w-full flex bg-primary mb-5 z-40 top-0 rounded-t-3xl items-center">
            <h1 class="py-3 text-secondary text-xl mx-auto">Delapan Dimensi Kepemimpinan</h1>
        </div>
        <h1 class="text-2xl text-black font-bold text-center mb-5">Apakah Anda yakin dengan jawaban anda?</h1>
        <h1 class="text-lg text-black text-center mb-4">Klik "Lanjutkan" untuk menyelesaikan sesi ini</h1>
        <ul class="inline-flex w-full justify-center mx-auto">
                <li>
                    <a href="" class="flex w-[200px] h-8 border-2 border-slate-300 rounded-full mx-auto mb-8 items-center justify-center italic mr-4" onclick="offoverlay()">
                        Kembali
                    </a>
                </li>
                <li>
                    <button onclick="submit()" class="flex w-[200px] h-8 border-2 border-slate-300 rounded-full mx-auto mb-8 items-center justify-center">
                        <h1 class="text-center text-md ml-4 mr-3 italic">Lanjutkan</h1>
                    </button> 
                </li>
            </ul>
            <button type="button" id="close-button" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-lg">Close</button>
    </div>
    
    <!-- End overlaySubmit -->

</form>

<button onclick="alertme()">test</button>

@include('templates.partials.script-form')
@endsection