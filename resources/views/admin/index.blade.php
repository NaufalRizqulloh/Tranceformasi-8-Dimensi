@extends('templates.default')

@section('content')

<div class="mt-20"></div>

<div class="flex relative w-full mb-12">
    <h1 class="ml-12 text-2xl font-montserrat">Selamat datang, Admin (nama) <br><span class="text-base font-light">Berikut rekaman event yang sedang berlangsung</span></h1>
    <div class="absolute right-0 flex mr-12">
        <button class="bg-primary rounded-3xl w-40 h-24 mr-12">
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

<div class="w-fit mx-auto flex mb-12">
    <div class="bg-black w-4 h-4 mx-2 rounded-full"></div>
    <div class="bg-black w-4 h-4 mx-2 rounded-full"></div>
    <div class="bg-black w-4 h-4 mx-2 rounded-full"></div>
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

@foreach ($latestEvents as $event)
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

<script>
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