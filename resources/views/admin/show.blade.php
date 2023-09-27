@extends('templates.default')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="mb-16"></div>

<div class="bg-primary w-[90%] h-fit ml-12 mb-6 rounded-full relative flex">
    <h1 class="w-full text-secondary text-2xl font-bold text-center py-4">Data Tes : {{ $event->nama }}</h1>
</div>

<div class="w-[90%] grid grid-cols-12 gap-6 ml-12 mb-12">
    <div class="bg-primary col-span-9 h-fit rounded-xl flex px-8 py-16">
        <h1 class="w-56 text-white">Total Peserta<br>Tanggal Pengerjaan<br>Kode Akses<br>Institusi<br>Deskripsi</h1>
        <h1 class="w-fit text-white ml-6">:<br>:<br>:<br>:<br>:</h1>
        <h1 class="w-fit text-white ml-6">{{ $user }}<br>{{ $event->tanggal_mulai }} - {{ $event->tanggal_selesai }}<br>{{ $event->kode_akses }}<br>{{ $event->institusi }}<br>{{ $event->deskripsi }}</h1>
    </div>
    <div class="bg-primary h-full col-span-3 rounded-xl px-6 py-4">
        <h1 class="w-full text-white text-lg text-center font-bold mb-2">View</h1>
        <hr class="w-3/4 mx-auto border-white mb-6">
        <a href="#" class="text-white mb-2 hover:underline">- Progres</a> <br>
        <a href="#" class="text-white mb-2 hover:underline">- Jenis Kelamin</a> <br>
        <a href="#" class="text-white mb-2 hover:underline">- Usia/Pendidikan</a> <br>
        <a href="#" class="text-white mb-2 hover:underline">- Penyebaran8D</a> <br>
        <a href="#" class="text-white mb-2 hover:underline">- Data Individual</a>
    </div>
</div>

<h1 class="text-black text-3xl font-bold text-center">Progres Keseluruhan</h1>
<canvas id="progressBar" class="mx-auto" style="width:100%;max-width:600px;height:100%;max-height:100px"></canvas>
<canvas id="pieChart" class="mx-auto mb-6 " style="width:100%;max-width:400px;height:100%;max-height:300px"></canvas>

<div>
  <p> kelamin {{ var_dump($kelamin) }}</p>
  <p>{{ var_dump($usia) }}</p>
  <p>{{ var_dump($pendidikan) }}</p>
  <p>{{ var_dump($domisili) }}</p>
  <p>{{ var_dump($penyebaran8D) }}</p>
</div>

<label class="relative inline-flex items-center mr-5 cursor-pointer">
  <input id="holdSwitch" type="checkbox" class="sr-only peer">
  <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Purple</span>
</label>

<!-- progress kelamin usia pendidikan domisili penyebaran8D -->

<!-- Penyebaran 8D -->
<canvas id="radarChart" style="width:100%;max-width:600px;height:100%;max-height:500px" class="border-2"></canvas>

<!-- Jenis Kelamin -->
<canvas id="pieChart" style="width:100%;max-width:600px;height:100%;max-height:500px"></canvas>

<script>
  const holdSwitch = document.getElementById('holdSwitch');
  const holdRoute = "{{ route('update.event.on-hold', ['event' => $event]) }}";

  holdSwitch.addEventListener('click', () => {
    const value = holdSwitch.checked ? 1 : 0;
    const extendedUrl = `${holdRoute}?value=${encodeURIComponent(value)}`;

    fetch(extendedUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error('Response tidak diterima dari server');
        }
        return response.json();
      })
      .then(data => {
        alert(data['on-hold']);
        if (data['on-hold'] == 1) {
          alert('Hasil jawaban event ini ditahan');
        } else if (data['on-hold'] == 0){
          alert('Hasil jawaban event ini dibuka');
        } else {
          throw new Error('Response tidak dikenali : ' + data);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('error:' + error);
      });
  });

  // radarChart

  var dimensionData = @json($penyebaran8D);

  new Chart("radarChart", {
    type: "radar",
    data: {
      labels: [
        'Pelopor',
        'Penggerak',
        'Afirmasi',
        'Inklusif',
        'Rendah Hati',
        'Pemikir',
        'Tegas',
        'Berwibawa',
      ],
      datasets: [{
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        data: dimensionData,
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
      scales: {
        r: {
          beginAtZero: true,
          // suggestedMax : 10
        }
      },
      plugins: {
        legend: {
          display: false
        }
      }
    }
  });

  var xValues = ["Laki", "Perempuan"];
  var yValues = @json($kelamin);
  var barColors = [
    "#4C32EA",
    "#CC00CC",
  ];

  new Chart("pieChart", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "Jenis Kelamin"
      }
    }
  });

  var progress2 = document.getElementById("progressBar").getContext('2d');

    let done = {{ $finishedUser }};
    let total = {{ $user }};
    let donePercent = done / total * 100;
    let totalPercent = (total - done) / total * 100;

    var myChart = new Chart(progress2, {
      type: 'bar',
      data: {
        labels: [""],
        datasets: [{
            label: 'Sudah Mengerjakan (%)',
            backgroundColor: "#8404F4",
            data: [donePercent],
            barThickness: 50,
          },
          {
            label: 'Belum Mengerjakan (%)',
            backgroundColor: "#B984FF",
            data: [totalPercent],
            barThickness: 50,
          },
        ],
      },
      options: {
        border: {
          color: "red"
        },
        indexAxis: 'y',
        scales: {
          x: {
            stacked: true,
            grid: {
              display: false
            }
          },
          y: {
            stacked: true,
            grid: {
              display: false
            }
          }
        },
        plugins: {
            legend: {
                position: 'bottom',
            }
        },
        responsive: true
      }
    });

    var JKelamin = ["Laki", "Perempuan"];
    var dataJKelamin = [
      {{ $kelamin[0] }},
      {{ $kelamin[1] }}
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
            }
        },
        responsive: true,
      }
    });

</script>

@endsection