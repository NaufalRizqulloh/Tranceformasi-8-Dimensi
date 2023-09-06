<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div>
    <p> progress {{ var_dump($progress) }}</p>
    <p> kelamin {{ var_dump($kelamin) }}</p>
    <p>{{ var_dump($usia) }}</p>
    <p>{{ var_dump($pendidikan) }}</p>
    <p>{{ var_dump($domisili) }}</p>
    <p>{{ var_dump($penyebaran8D) }}</p>
</div>

<!-- progress kelamin usia pendidikan domisili penyebaran8D -->

<!-- Penyebaran 8D -->
<canvas id="radarChart" style="width:100%;max-width:600px;height:100%;max-height:500px" class="border-2"></canvas>

<!-- Jenis Kelamin -->
<canvas id="pieChart" style="width:100%;max-width:600px;height:100%;max-height:500px"></canvas>
<script>
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
        scales:{
          r: {
            beginAtZero: true,
            // suggestedMax : 10
          }
        },
        plugins: {
          legend : {
            display : false
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


</script>