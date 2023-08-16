  <x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
      </h2>
    </x-slot>

    <div class="py-12">
      <div class="max$table->foreignId('jawaban_id');-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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