  @extends('templates.default')

  @section('content')
  <div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
      <h1 class="my-4 md:my-10 text-2xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
  </div>
  <div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
      <h1 class="mt-8 text-center font-bold text-2xl">INSTRUKSI PENGERJAAN</h1>

      @foreach(config('form-rules.rules-section1') as $index => $rules)
      <h4 class="ml-12 mr-12 text-1xl mt-4">{{ $index . ". ". $rules }}</h4>
      @endforeach

      <div class="mt-0 mb-8"></div>
  </div>

  <form action="/hasil" method="GET">
      @csrf
      @foreach(config('form-section1-1.content') as $index => $quest)
      <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
          <div class="flex">
              <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
              <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                  {{ $index + 1 }}
              </div>
              <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
          </div>
          <ul>
              @for ($i = 1; $i <= 4; $i++) <li class="flex h-auto">
                  <input type="checkbox" id="{{ ($index + 1) . '-1-' . $i }}" class="peer/{{ ($index + 1) . '-1-' . $i }} hidden single-checkbox{{ $index + 1 }}1 check{{ ($index + 1) . $i }}" name="{{ 'checkbox[p][' . ($index + 1) . ']' }}" value="{{ $quest['value-p'][($i - 1)] }}" {{ (isset($answer['P'][$index + 1]) && $answer['P'][$index + 1] == $quest['value-p'][$i - 1]) ? 'checked' : ''}}/>
                  <label for="{{ ($index + 1) . '-1-' . $i }}" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/{{ ($index + 1) . '-1-' . $i }}:bg-green-500 peer-checked/{{ ($index + 1) . '-1-' . $i }}:border-transparent mr-1"></label>
                  <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                      <h1 class="mt-[6px]">{{ $quest['question'][($i - 1)] }}</h1>
                  </div>
                  <input type="checkbox" id="{{ ($index + 1) . '-2-' . $i }}" class="peer/{{ ($index + 1) . '-2-' . $i }} hidden single-checkbox{{ $index + 1 }}2 check{{ ($index + 1) . $i }}" name="{{ 'checkbox[t][' . ($index + 1) . ']' }}" value="{{ $quest['value-t'][($i - 1)] }}" />
                  <label for="{{ ($index + 1) . '-2-' . $i }}" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/{{ ($index + 1) . '-2-' . $i }}:bg-green-500 peer-checked/{{ ($index + 1) . '-2-' . $i }}:border-transparent"></label>
                  </li>
                  <br>
                  {{ $quest['value-p'][$i - 1] }}
                  <br>
                  {{ $quest['value-t'][$i - 1] }}
                  @endfor
          </ul>
          <div class="mt-0 mb-12"></div>
      </div>
      @endforeach
      <div class="mx-auto w-fit space-x-8 md:space-x-16">
        <button class="mt-8 text-lg md:text-xl py-2 w-[150px] md:w-[200px] h-93 border-2 rounded-full bg-[#ffffff] text-center">
            Kembali
        </button>
        <button type="submit" class="mt-8 text-lg md:text-xl py-2 w-[150px] md:w-[200px] h-93 border-2 rounded-full bg-[#ffffff] text-center">
            Selanjutnya
        </button>
    </div>
  </form>