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

  <input type="range" min="1" max="6" value="1" step="0.1" id="myRange" list="dataList">
  <datalist id="dataList">
    <option value="1"></option>
    <option value="2"></option>
    <option value="3"></option>
    <option value="4"></option>
    <option value="5"></option>
    <option value="6"></option>
  </datalist>
    <p>Value: <span id="demo"></span></p>


    <!-- <button id="play">Play</button>

<input id="yearslider" class="" type="range" min="1" value="1" max="6" step="0.01" list="ticks">
<datalist id="ticks">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
</datalist>
<output id="rangevalue"></output> -->
  </x-app-layout>

  <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <h1 class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-2 border-slate-500 py-3 px-5">           
            1
        </h1>
        <div class="ml-3 mr-3">
            <h1 class="w-fit mx-auto block text-center text-lg sm:text-xl mb-2 md:mb-4">               
                pertanyaan
            </h1>
        </div>
        <div class="flex h-fit w-fit mx-auto">
            <div class="w-8 sm:w-12 mt-10 sm:mt-9">
                <img src="dist/thumbdown.png" alt="Tidak Setuju">
            </div>
            <input id="yearslider" class="" type="range" min="1" value="1" max="6" step="0.001" list="ticks">
            <datalist id="ticks">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </datalist>
            <output id="rangevalue"></output>
            <div class="w-8 sm:w-12 mt-7 sm:mt-4 ml-4 sm:ml-5">
                <img src="dist/thumbup.png" alt="Setuju">
            </div>
            <div class="container flex">
              <h1 id="labelSlider1" class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-transparet text-transparent py-3 px-5">           
                1
              </h1>
              <h1 id="labelSlider2" class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-transparet text-transparent py-3 px-5">           
                2
              </h1>
              <h1 id="labelSlider3" class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-transparet text-transparent py-3 px-5">           
                3
              </h1>
              <h1 id="labelSlider4" class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-transparet text-transparent py-3 px-5">           
                4
              </h1>
              <h1 id="labelSlider5" class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-transparet text-transparent py-3 px-5">           
                5
              </h1>
              <h1 id="labelSlider6" class="mt-10 mb-6 w-max block mx-auto text-center rounded-full border-transparet text-transparent py-3 px-5">           
                6
              </h1>
            </div>
          </div>
        <div class="mb-12">

        </div>

    </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var slider = document.getElementById("yearslider");
    var output = document.getElementById("rangevalue");
    output.innerHTML = slider.value;
    
    slider.oninput = function() {
      output.innerHTML = this.value;
      output.innerHTML = Math.round(output.innerHTML);

      const satu = document.getElementById("labelSlider1")
      const dua = document.getElementById("labelSlider2")
      const tiga = document.getElementById("labelSlider3")
      const empat = document.getElementById("labelSlider4")
      const lima = document.getElementById("labelSlider5")
      const enam = document.getElementById("labelSlider6")
      if(output.innerHTML == 1){
        satu.classList.add('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        satu.classList.remove('border-transparent','text-transparent');
      }
      else{
        satu.classList.remove('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        satu.classList.add('border-transparent','text-transparent');
      }
      if(output.innerHTML == 2){
        dua.classList.add('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        dua.classList.remove('border-transparent', 'text-transparent');
      }
      else{
        dua.classList.remove('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        dua.classList.add('border-transparent', 'text-transparent');
      }
      if(output.innerHTML == 3){
        tiga.classList.add('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        tiga.classList.remove('border-transparent', 'text-transparent');
      }
      else{
        tiga.classList.remove('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        tiga.classList.add('border-transparent', 'text-transparent');
      }
      if(output.innerHTML == 4){
        empat.classList.add('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        empat.classList.remove('border-transparent', 'text-transparent');
      }
      else{
        empat.classList.remove('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        empat.classList.add('border-transparent', 'text-transparent');
      }
      if(output.innerHTML == 5){
        lima.classList.add('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        lima.classList.add('border-transparent', 'text-transparent');
      }
      else{
        lima.classList.remove('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        lima.classList.add('border-transparent', 'text-transparent');
      }
      if(output.innerHTML == 6){
        enam.classList.add('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        enam.classList.remove('border-transparent', 'text-transparent');
      }
      else{
        enam.classList.remove('bg-primary', 'border-slate-500', 'border-2', 'text-slate-300');
        enam.classList.add('border-transparent', 'text-transparent');
      }
    } 


    // snapping position
    let years = [1,2,3,4,5,6];

function getClosest(arr, val) {
	return arr.reduce(function (prev, curr) {
    return (Math.abs(curr - val) < Math.abs(prev - val) ? curr : prev);
  });
}

document.querySelector("#yearslider").addEventListener("change", function() {
	let closest = getClosest(years, this.value);
  this.value = document.querySelector("#rangevalue").value = closest;
});

document.querySelector("#play").addEventListener("click", function() {
	let yearslider = document.querySelector("#yearslider");
  let output = document.querySelector("#rangevalue");
  years.forEach(function(item, index, array) {
    // set a timeout so each second one button gets clicked
    setTimeout( (function( index ) {
        return function() {
            yearslider.value = output.value = array[index]; 
        };
    }( index )), (2000 * index) );
}); 
});



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