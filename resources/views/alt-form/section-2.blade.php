@extends('templates.default')

@section('content')
<div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="my-4 md:my-10 text-2xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
</div>
<div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="mt-8 mb-8 text-center font-bold text-2xl">INSTRUKSI PENGERJAAN</h1>

    @foreach(config('form-rules.rules-section2') as $index => $rules)
    <h4 class="ml-12 mr-12 text-1xl mt-2">{!! $index . ". ". $rules !!}</h4>
    @endforeach

    <div class="mt-0 mb-8"></div>
</div>
<form id="form" method="POST" action="{{ route('user.form.update.submit', ['jawaban' => $jawaban->id]) }}">
    @method('PATCH')
    @csrf
    @foreach($questions as $index => $quest)
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">
            {{ $index }}
        </h1>
        <div class="ml-3 mr-3">
            <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">
                {{ $quest['question'] }}
            </h1>
        </div>
        <div class="flex h-fit w-fit mx-auto">
            <div class="w-8 sm:w-12 mt-10 sm:mt-9">
                <img src="dist/thumbdown.png" alt="Tidak Setuju">
            </div>
            <input type="checkbox" id="{{ $index }}-1" class="peer/{{ $index }}-1 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="1" {{ (isset($answers[$index]) && $answers[$index] == "1") ? 'checked' : '' }} />
            <label for="{{ $index }}-1" class="mt-8 ml-4 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-1:bg-red-700 peer-checked/{{ $index }}-1:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-1:text-white">
                1
            </label>
            <input type="checkbox" id="{{ $index }}-2" class="peer/{{ $index }}-2 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="2" {{ (isset($answers[$index]) && $answers[$index] == "2") ? 'checked' : '' }} />
            <label for="{{ $index }}-2" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-2:bg-red-500 peer-checked/{{ $index }}-2:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-2:text-white">
                2
            </label>
            <input type="checkbox" id="{{ $index }}-3" class="peer/{{ $index }}-3 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="3" {{ (isset($answers[$index]) && $answers[$index] == "3") ? 'checked' : '' }} />
            <label for="{{ $index }}-3" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-3:bg-red-400 peer-checked/{{ $index }}-3:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-3:text-white">
                3
            </label>

            <input type="checkbox" id="{{ $index }}-4" class="peer/{{ $index }}-4 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="4" {{ (isset($answers[$index]) && $answers[$index] == "4") ? 'checked' : '' }} />
            <input type="checkbox" id="{{ $index }}-5" class="peer/{{ $index }}-5 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="5" {{ (isset($answers[$index]) && $answers[$index] == "5") ? 'checked' : '' }} />
            <input type="checkbox" id="{{ $index }}-6" class="peer/{{ $index }}-6 single-checkbox-section2-{{ $index }}" name="range[{{ $index }}]" value="6" {{ (isset($answers[$index]) && $answers[$index] == "6") ? 'checked' : '' }} />
            <label for="{{ $index }}-4" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-4:bg-green-400 peer-checked/{{ $index }}-4:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-4:text-white">
                4
            </label>
            <label for="{{ $index }}-5" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-5:bg-green-500 peer-checked/{{ $index }}-5:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-5:text-white">
                5
            </label>
            <label for="{{ $index }}-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/{{ $index }}-6:bg-green-600 peer-checked/{{ $index }}-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/{{ $index }}-6:text-white">
                6
            </label>
            <!-- <input id="yearslider" class="" type="range" min="1" value="1" max="6" step="0.01" list="ticks">
            <datalist id="ticks">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </datalist>
            <output id="rangevalue"></output> -->
            <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
                <img src="dist/thumbup.png" alt="Setuju">
            </div>
        </div>
        <div class="mb-12">

        </div>

    </div>
    @endforeach

    <div>
        <h1>{{ var_dump($answers) }}</h1>
    </div>

    {{-- kalau error --}}
    <div>
        @foreach(['checkbox', 'checkbox.p', 'checkbox.t', 'range'] as $field)
        @error($field)
        <h1 class="text-red-600">{{ $message }}</h1>
        @enderror
        @endforeach
    </div>

    <div>
        <br>
        <h1>{{ $nextDestination }}</h1>
        <br>
        <h1>{{ $previousDestination }}</h1>
        <br>
    </div>
    {{-- previous or next button --}}
    <div>
        <button onclick="toPrevious()" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center">
            Kembali
        </button>
        
        @if($nextDestination == 'submit')
        <button onclick="submit()" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center cursor-pointer">
            Submit
        </button>
        @else
        <button onclick="toNext()" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center">
            Selanjutnya
        </button>
        @endif
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
    </div>
    
    <!-- End overlaySubmit -->

</form>

<button onclick="alertme()">test</button>

@include('templates.partials.script-form')
@endsection