  <x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
      </h2>
    </x-slot>

    <div>
      <form action="{{ route('user.form.store', ['kode-akses' => '%`$]6n']) }}" method="POST">
        @csrf
        <button type="submit" class="text-secondary font-montserrat text-9xl">aaaaaaa</button>
      </form>
      <button onclick="alertFunction()" class="border-2 border-black text-white bg-slate-700 ml-20">testing tombol alert</button>
    </div>

    <div class="py-12">
      <div class="max$table->foreignId('jawaban_id');-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-primary dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            {{ __("You're logged in!") }}
          </div>
        </div>
      </div>
    </div>
    <div class="checkboxes">
      <form action="{{route('checkbox.store')}}" method="post">
        @csrf
        <!-- <label for="checkbox1">Checkbox 1</label>
    <input type="checkbox" id="" name="checkboxes" value="d"> -->
        <div class="row-1 inline-flex">
          <input type="checkbox" name="checkboxes" class="single-checkbox check1 peer hidden" id="choose me" value="d">
          <label for="choose me" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <br>
          <input type="checkbox" name="checkboxes" class="single-checkbox check2 peer hidden" id="choose me1" value="i">
          <label for="choose me1" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <br>
          <input type="checkbox" name="checkboxes" class="single-checkbox check3 peer hidden" id="choose me2" value="s">
          <label for="choose me2" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <br>
          <label>
            <input type="checkbox" name="checkboxes" class="single-checkbox check4 peer hidden" id="choose me3" value="c">
            </labe for="choose me3" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
            <br>
        </div>
        <div class="row-2 inline-flex">
          <input type="checkbox" name="checkboxes1" class="single-checkbox1 check1 peer hidden" id="choose me4" value="d">
          <label for="choose me4" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <br>
          <input type="checkbox" name="checkboxes1" class="single-checkbox1 check2 peer hidden" id="choose me5" value="i">
          <label for="choose me5" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <br>
          <input type="checkbox" name="checkboxes1" class="single-checkbox1 check3 peer hidden" id="choose me6" value="s">
          <label for="choose me6" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <br>
          <input type="checkbox" name="checkboxes1" class="single-checkbox1 check4 peer hidden" id="choose me7" value="c">
          <label for="choose me7" class="ml-12 p-4 border-2 border-black rounded-full peer-checked:bg-green-500 peer-checked:border-transparent">
          </label>
          <input type="checkbox" name="checkboxes1" class="single-checkbox1 check4 peer/1 hidden" id="choose m" value="c">
          <label for="choose m" class="ml-12 p-4 border-2 border-black rounded-full peer-checked/1:bg-green-500 peer-checked/1:border-transparent">
          </label>
          <br>
        </div>

        <!-- Add more checkboxes as needed -->
        <button type="submit">Submit</button>
      </form>
      <form action="{{ route('user.form.store', ['kode-akses' => '0qAt+1']) }}" method="POST">
        @csrf
        <button type="submit">Submit</button>
      </form>
    </div> 
    

                                        <input type="checkbox" id="7-6" class="peer/7-6 single-checkbox-section2-7" name="range[7]" value="6">
    <label for="7-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/7-6:bg-green-600 peer-checked/7-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/7-6:text-white">
                5
            </label>
    <input type="checkbox" id="8-6" class="peer/8-6 single-checkbox-section2-8" name="range[8]" value="6">
    <label for="8-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/8-6:bg-green-600 peer-checked/8-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/8-6:text-white">
                5
            </label>
    <input type="checkbox" id="9-6" class="peer/9-6 single-checkbox-section2-9" name="range[9]" value="6">
    <label for="9-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/9-6:bg-green-600 peer-checked/9-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/9-6:text-white">
                5
            </label>
    <input type="checkbox" id="10-6" class="peer/10-6 single-checkbox-section2-10" name="range[10]" value="6">
    <label for="10-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/10-6:bg-green-600 peer-checked/10-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/10-6:text-white">
                5
            </label>
    <input type="checkbox" id="11-6" class="peer/11-6 single-checkbox-section2-11" name="range[11]" value="6">
    <label for="11-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-11 w-11 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/11-6:bg-green-600 peer-checked/11-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/11-6:text-white">
                5
            </label>
    <input type="checkbox" id="12-6" class="peer/12-6 single-checkbox-section2-12" name="range[12]" value="6">
    <label for="12-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-12 w-12 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/12-6:bg-green-600 peer-checked/12-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/12-6:text-white">
                5
            </label>
    <input type="checkbox" id="13-6" class="peer/13-6 single-checkbox-section2-13" name="range[13]" value="6">
    <label for="13-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-13 w-13 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/13-6:bg-green-600 peer-checked/13-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/13-6:text-white">
                5
            </label>
    <input type="checkbox" id="14-6" class="peer/14-6 single-checkbox-section2-14" name="range[14]" value="6">
    <label for="14-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-14 w-14 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/14-6:bg-green-600 peer-checked/14-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/14-6:text-white">
                5
            </label>
    <input type="checkbox" id="15-6" class="peer/15-6 single-checkbox-section2-15" name="range[15]" value="6">
    <label for="15-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-15 w-15 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/15-6:bg-green-600 peer-checked/15-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/15-6:text-white">
                5
            </label>
    <input type="checkbox" id="16-6" class="peer/16-6 single-checkbox-section2-16" name="range[16]" value="6">
    <label for="16-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-16 w-16 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/16-6:bg-green-600 peer-checked/16-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/16-6:text-white">
                5
            </label>
    <input type="checkbox" id="17-6" class="peer/17-6 single-checkbox-section2-17" name="range[17]" value="6">
    <label for="17-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-17 w-17 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/17-6:bg-green-600 peer-checked/17-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/17-6:text-white">
                5
            </label>
    <input type="checkbox" id="18-6" class="peer/18-6 single-checkbox-section2-18" name="range[18]" value="6">
    <label for="18-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-18 w-18 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/18-6:bg-green-600 peer-checked/18-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/18-6:text-white">
                5
            </label>
    <input type="checkbox" id="19-6" class="peer/19-6 single-checkbox-section2-19" name="range[19]" value="6">
    <label for="19-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-19 w-19 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/19-6:bg-green-600 peer-checked/19-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/19-6:text-white">
                5
            </label>
    <input type="checkbox" id="20-6" class="peer/20-6 single-checkbox-section2-20" name="range[20]" value="6">
    <label for="20-6" class="mt-8 ml-2 sm:ml-6 select-none cursor-pointer rounded-full border-2 border-slate-400 h-20 w-20 sm:h-12 sm:w-12 transition-colors duration-200 ease-in-out peer-checked/20-6:bg-green-600 peer-checked/20-6:border-transparent mr-1 text-center text-xs sm:text-base pt-[10px] peer-checked/20-6:text-white">
                5
            </label>


  </x-app-layout>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.single-checkbox').on('change', function() {
        $('.single-checkbox').not(this).prop('checked', false);
      });
    });

    $(document).ready(function() {
      $('.single-checkbox1').on('change', function() {
        $('.single-checkbox1').not(this).prop('checked', false);
      });
    });

    $(document).ready(function() {
      $('.check1').on('change', function() {
        $('.check1').not(this).prop('checked', false);
      });
    });
    $(document).ready(function() {
      $('.check2').on('change', function() {
        $('.check2').not(this).prop('checked', false);
      });
    });
    $(document).ready(function() {
      $('.check3').on('change', function() {
        $('.check3').not(this).prop('checked', false);
      });
    });
    $(document).ready(function() {
      $('.check4').on('change', function() {
        $('.check4').not(this).prop('checked', false);
      });
    });
    $(document).ready(function() {
      $('.check5').on('change', function() {
        $('.check5').not(this).prop('checked', false);
      });
    });
  </script>