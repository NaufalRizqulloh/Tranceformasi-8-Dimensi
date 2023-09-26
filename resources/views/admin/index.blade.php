@extends('templates.default')

@section('content')

<div class="mt-20"></div>

<div class="flex relative w-full mb-12">
    <h1 class="ml-12 text-2xl font-montserrat">Selamat datang, Admin (nama) <br><span class="text-base font-light">Berikut rekaman event yang sedang berlangsung</span></h1>
    <div class="absolute right-0 flex mr-12">
        <button id="buatEventbtn" class="bg-primary rounded-3xl w-40 h-24 mr-12">
            <h1 class="text-secondary font-bold font-montserrat">Buat Event</h1>
            <img src="/dist/pluswborder.png" alt="" class="w-8 mx-auto">
        </button>
        <div class="bg-primary rounded-3xl w-40 h-fit mr-12">
            <div class="my-5">
                <h1 class="text-secondary font-bold text-center font-montserrat">Total Event</h1>
                <h1 class="text-white text-2xl font-bold font-montserrat text-center">3</h1>
            </div>
        </div>
        <div class="bg-primary rounded-3xl w-40 h-fit">
            <div class="my-5">
                <h1 class="text-secondary font-bold text-center font-montserrat">Total Peserta</h1>
                <h1 class="text-white text-2xl font-bold font-montserrat text-center">123</h1>
            </div>
        </div>
    </div>
</div>

<h1 class="ml-12 font-montserrat">Event yang sedang berlangsung</h1>
<hr class="mx-12 mb-5 border-black">

<div class="bg-primary w-[93%] h-14 ml-12 mb-2 rounded-full relative flex">
    <div class="bg-secondary ml-3 w-auto h-auto my-auto rounded-full">
        <h1 class="text-primary font-bold font-montserrat text-center my-2 mx-4">1</h1>
    </div>
    <h1 class="text-secondary font-semibold font-montserrat ml-3 mt-4">SMK Telkom Sidoarjo - 29 Juni 2023</h1>
    <div class="absolute right-0 mr-4 flex">
        <button class="bg-white w-fit h-fit mt-2 mr-4 rounded-full flex">
            <img src="/dist/data.png" alt="" class="ml-4 mt-1">
            <h1 class="text-black font-montserrat font-semibold mx-4 my-2">Lihat Data</h1>
        </button>
        <button class="bg-white w-fit h-fit mt-2 rounded-full flex">
            <img src="/dist/editEvent.png" alt="" class="ml-4 mt-1">
            <h1 class="text-black font-montserrat font-semibold mx-4 my-2">Edit Event</h1>
        </button>
    </div>
</div>

<div class="bg-primary w-[93%] h-14 ml-12 mb-2 rounded-full relative flex">
    <div class="bg-secondary ml-3 w-auto h-auto my-auto rounded-full">
        <h1 class="text-primary font-bold font-montserrat text-center my-2 mx-4">2</h1>
    </div>
    <h1 class="text-secondary font-semibold font-montserrat ml-3 mt-4">ITTS - 8 Agustus 2023</h1>
    <div class="absolute right-0 mr-4 flex">
        <button class="bg-white w-fit h-fit mt-2 mr-4 rounded-full flex">
            <img src="/dist/data.png" alt="" class="ml-4 mt-1">
            <h1 class="text-black font-montserrat font-semibold mx-4 my-2">Lihat Data</h1>
        </button>
        <button class="bg-white w-fit h-fit mt-2 rounded-full flex">
            <img src="/dist/editEvent.png" alt="" class="ml-4 mt-1">
            <h1 class="text-black font-montserrat font-semibold mx-4 my-2">Edit Event</h1>
        </button>
    </div>
</div>

<div class="bg-primary w-[93%] h-14 ml-12 mb-12 rounded-full relative flex">
    <div class="bg-secondary ml-3 w-auto h-auto my-auto rounded-full">
        <h1 class="text-primary font-bold font-montserrat text-center my-2 mx-4">3</h1>
    </div>
    <h1 class="text-secondary font-semibold font-montserrat ml-3 mt-4">ITTB - 16 November 2023</h1>
    <div class="absolute right-0 mr-4 flex">
        <button class="bg-white w-fit h-fit mt-2 mr-4 rounded-full flex">
            <img src="/dist/data.png" alt="" class="ml-4 mt-1">
            <h1 class="text-black font-montserrat font-semibold mx-4 my-2">Lihat Data</h1>
        </button>
        <button class="bg-white w-fit h-fit mt-2 rounded-full flex">
            <img src="/dist/editEvent.png" alt="" class="ml-4 mt-1">
            <h1 class="text-black font-montserrat font-semibold mx-4 my-2">Edit Event</h1>
        </button>
    </div>
</div>

<h1 class="ml-12 font-montserrat">Event yang sudah berlalu</h1>
<hr class="mx-12 mb-5 border-black">
<div class="mb-12"></div>

<div class="w-fit mx-auto flex mb-12">
    <div class="bg-black w-4 h-4 mx-2 rounded-full"></div>
    <div class="bg-black w-4 h-4 mx-2 rounded-full"></div>
    <div class="bg-black w-4 h-4 mx-2 rounded-full"></div>
</div>

<h1 class="ml-12 font-montserrat">Data Keseluruhan</h1>
<hr class="mx-12 mb-5 border-black">

<div class="w-fit h-fit mx-auto mb-12 drop-shadow-2xl border-4 border-primary rounded-3xl">
    <h1 class="text-2xl font-bold text-center px-56 mt-4 mb-6">Jenis Kelamin</h1>
    <canvas id="pieChart" class="mx-auto mb-6 " style="width:100%;max-width:400px;height:100%;max-height:300px"></canvas>
</div>

<div class="w-fit mx-auto flex space-x-12">
    <canvas id="rentangUsiaChart" class="border-4 border-primary rounded-3xl p-4" style="width:100%;max-width:500px;height:100%;max-height:300px"></canvas>
    <canvas id="PendidikanChart" class="border-4 border-primary rounded-3xl p-4" style="width:100%;max-width:500px;height:100%;max-height:300px"></canvas>
</div>

<br>

<form method="POST" action="{{ route('logout') }}" class="w-fit mx-auto">
@csrf
<button type="submit" class="w-fit h-fit border-2 border-black rounded-full">
    <h1 class="mx-8 my-2 text-black">Log Out</h1>
</button>
</form>

<!-- Overlay buatEvent -->

<div id="buatEvent" class="top-0 left-1/4 w-1/2 h-[500px] mt-12 rounded-xl bg-white z-30 flex overflow-y-scroll overflow-hidden">
    <div class="w-full flex bg-primary mb-5 drop-shadow-2xl z-40 top-0 rounded-tl-xl items-center absolute">
        <h1 class="py-3 pl-5 text-secondary text-xl">Delapan Dimensi Kepemimpinan</h1>
    </div>

    <h1 class="text-4xl text-black text-center font-bold mt-20 mb-4">Daftarkan Event Baru</h1>
    <hr class="border-black w-3/4 mx-auto mb-4">

    <form action="">
        <label for="eName" id="" class="ml-14 mb-6 text-black text-xl">- Nama</label>
        <input type="text" name="eName" id="eName" class="mx-auto mb-4 w-10/12 rounded-md text-black border-black ring-black px-3 py-2 border shadow block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 value="{{ old('eName') }}" placeholder="Nama Event" required/>
        @error('eName')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror
        <label for="eLokasi" id="" class="ml-14 mb-6 text-black text-xl">- Lokasi</label>
        <input type="text" name="eLokasi" id="eLokasi" class="mx-auto mb-4 w-10/12 rounded-md text-black border-black ring-black px-3 py-2 border shadow block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 " value="{{ old('eLokasi') }}" placeholder="Lokasi Event Dijalankan" required/>
        @error('eLokasi')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror
        <label for="eInstitusi" id="" class="ml-14 mb-6 text-black text-xl">- Institusi</label>
        <input type="text" name="eInstitusi" id="eInstitusi" class="mx-auto mb-4 w-10/12 rounded-md text-black border-black ring-black px-3 py-2 border shadow block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 " value="{{ old('eInstitusi') }}" placeholder="Institusi/Perusahaan Peserta Event" required/>
        @error('eInstitusi')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror
        <label for="eTanggalMulai" id="" class="ml-14 mb-6 text-black text-xl">- Tanggal Dimulai Event</label>
        <input type="date" name="eTanggalMulai" id="eTanggalMulai" placeholder="Nama Lengkap" onfocus="this.showPicker()" class="mb-4 rounded-md text-black border-black ring-black mx-auto px-3 py-2 border shadow rounder w-10/12 block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 @if($errors->has('eTanggalMulai')) border-red-500 @endif" value="{{ old('eTanggalMulai') }}" oninput="removeRedBorder(this)" required/>
        @error('eTanggalMulai')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror
        <label for="eTanggalAkhir" id="" class="ml-14 mb-6 text-black text-xl">- Tanggal Berakhir Event</label>
        <input type="date" name="eTanggalAkhir" id="eTanggalAkhir" placeholder="Nama Lengkap" onfocus="this.showPicker()" class="mb-4 rounded-md text-black border-black ring-black mx-auto px-3 py-2 border shadow rounder w-10/12 block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 @if($errors->has('eTanggalAkhir')) border-red-500 @endif" value="{{ old('eTanggalAkhir') }}" oninput="removeRedBorder(this)" required/>
        @error('eTanggalAkhir')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror
        <label for="eDeskripsi" id="" class="ml-14 mb-6 text-black text-xl">- Deskripsi Event</label>
        <input type="text" name="eDeskripsi" id="eDeskripsi" class="mx-auto mb-4 w-10/12 rounded-md text-black border-black ring-black px-3 py-2 border shadow block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 " value="{{ old('eDeskripsi') }}" placeholder="Deskripsi Event Anda" required/>
        @error('eDeskripsi')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror
        <label for="eDeskripsi" id="" class="ml-14 mb-6 text-black text-xl">- Kode Akses</label>
        <input type="text" name="eDeskripsi" id="eDeskripsi" class="mx-auto mb-12 w-10/12 rounded-md text-black border-black ring-black px-3 py-2 border shadow block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 " value="{{ old('eDeskripsi') }}" placeholder="Kode Akses untuk Event Anda (Harus berupa angka atau huruf sejumlah 6)" onkeyup="
        var start = this.selectionStart;
        var end = this.selectionEnd;
        this.value = this.value.toUpperCase();
        this.setSelectionRange(start, end);" pattern=".{6,6}" maxlength="6" required />
        @error('eDeskripsi')
        <h1 class="text-red-600 -mt-2">{{ $message }}</h1>
        @enderror

        <button type="submit" class="block w-fit h-fit px-6 py-2 mx-auto mb-12 border-2 border-black rounded-full text-black text-lg">Submit</button>
    </form>
    
</div>

<!-- end Overlay buatEvent -->

<!-- @foreach ($latestEvents as $event)
<a href="admin/event?event={{ $event->id }}">{{$event->nama}}</a>
@endforeach
<br>
<h1>EXPIRED</h1>
<br>
@foreach ($expiredEvents as $event)
<a href="admin/event?event={{ $event->id }}">{{$event->nama}}</a>
@endforeach
<br> <br>

<button id="fetchButton">Update City</button>
<br>
<div id="city-notification" class="" hidden>
    Data domisili sudah
</div>
<div id="error-notification" class="" hidden>
</div>

<label class="relative inline-flex items-center mr-5 cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer">
    <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></div>
    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Purple</span>
</label>

<ul>
    @foreach ($counts as $data)
        <li>
            Age Range: {{ $data['range']['min'] }} - {{ $data['range']['max'] }}
            Count: {{ $data['count'] }}
        </li>
    @endforeach
</ul>


{{$sd}}
{{$smp}}
{{$smak}}
{{$d1}}
{{$d2}}
{{$d3}}
{{$d4}}
{{$s1}}
{{$s2}}
{{$s3}} -->

<script>


    var JKelamin = ["Laki", "Perempuan"];
    var dataJKelamin = [
      {{ $laki }},
      {{ $perempuan }}
    ];
    var barColors = [
      "#4C32EA",
      "#CC00CC",
    ];

    new Chart("pieChart", {
      type: "pie",
      data: {
        labels: JKelamin,
        datasets: [{
          backgroundColor: barColors,
          data: dataJKelamin
        }]
      },
      options: {
        title: {
          display: true,
          text: "Jenis Kelamin"
        },
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    font: {
                        size: 16
                    }
                }
            }
        }
      }
    });

    // rentangUsiaChart rentangUsia

    
    var rentangUsia = ["<15", "15-20", "21-30", "31-40", "41-50", ">51"];
    var dataRUsia = [
        @foreach ($counts as $data)
        {{ $data['count'] }},
        @endforeach
    ];
    var barColors = "#8404F4";

    new Chart("rentangUsiaChart", {
      type: "bar",
      data: {
        labels: rentangUsia,
        datasets: [{
          backgroundColor: barColors,
          data: dataRUsia,
          barThickness: 20,
          clip: {
            left: 5,
            top: 0,
            right: 10,
            bottom: 2,
          },
        }]
      },
      options: {
        plugins: {
            legend: {
              display: false
            },
            title: {
                display: true,
                text: "Rentang Usia",
                color: 'black',
                font: {
                    size: 16,
                }
            },
        },
        scales: {
            x: {
                grid:{
                    display: false
                }
            },
            y: {
              suggestedMin: 0,
              suggestedMax: 10,
            }
        }
      }
    });

    // PendidikanChart PendidikanChart

    
    var pendidikan = ["SD", "SMP", "SMA/K", "D1", "D2", "D3", "D4", "S1", "S2", "S3"];
    var dataPendidikan = [
        {{$sd}},
        {{$smp}},
        {{$smak}},
        {{$d1}},
        {{$d2}},
        {{$d3}},
        {{$d4}},
        {{$s1}},
        {{$s2}},
        {{$s3}},
    ];
    var barColors = "#8404F4";

    new Chart("PendidikanChart", {
      type: "bar",
      data: {
        labels: pendidikan,
        datasets: [{
          backgroundColor: barColors,
          data: dataPendidikan,
          barThickness: 20,
          clip: {
            left: 5,
            top: 0,
            right: 10,
            bottom: 2,
          },
        }]
      },
      options: {
        plugins: {
            legend: {
              display: false
            },
            title: {
                display: true,
                text: "Rata - Rata Pendidikan",
                color: 'black',
                font: {
                    size: 16,
                }
            },
        },
        scales: {
            x: {
                grid:{
                    display: false
                }
            },
            y: {
                suggestedMin: 0,
                suggestedMax: 5,
            }
        }
      }
    });

    const cityRoute = "{{ route('update.city-api') }}";
    const cityNotification = document.getElementById('city-notification')
    const errorNotification = document.getElementById('error-notification')

    document.getElementById('fetchButton').addEventListener('click', () => {
        fetch(cityRoute)
            .then(response => {
                console.log('Response status code:', response.status);
                if (!response.ok) {
                    throw new Error('Response tidak diterima dari server');
                }
                return response.json();
            })
            .then(data => {
                if (data['city-update'] == 'success') {
                    cityNotification.removeAttribute('hidden');
                } else {
                    throw new Error('Response tidak dikenali : ' + data)
                }
            })
            .catch(error => {
                console.error('Error:', error);
                errorNotification.textContent = error;
                errorNotification.removeAttribute('hidden');
            });
    });

    function fetchCityData(route) {
        fetch(route)
            .then(response => {
                console.log('Response status code:', response.status);
                if (!response.ok) {
                    throw new Error('Response tidak diterima dari server');
                }
                return response.json();
            })
            .then(data => {
                if (data['city-update'] == 'success') {
                    cityNotification.removeAttribute('hidden');
                } else {
                    throw new Error('Response tidak dikenali : ' + data)
                }
            })
            .catch(error => {
                console.error('Error:', error);
                errorNotification.textContent = error;
                errorNotification.removeAttribute('hidden');
            });
    }
</script>

@endsection