<script>
  $(document).ready(function() {
    for (let i = 1; i <= 20; i++) {
      $('.single-checkbox-section2-' + i).on('change', function() {
        $('.single-checkbox-section2-' + i).not(this).prop('checked', false);
      });
    }
  });

  
  $(document).ready(function() {

    // Top to Bottom

    for (let i = 1; i <= 24; i++) {
      for (let j = 1; j <= 2; j++) {
        $('.single-checkbox' + i + j).on('change', function() {
          $('.single-checkbox' + i + j).not(this).prop('checked', false);
        });
      }
    }
    
    // Left and Right

    for (let i = 1; i <= 24; i++) {
      for (let j = 1; j <= 4; j++) {
        $('.check' + i + j).on('change', function() {
          $('.check' + i + j).not(this).prop('checked', false);
          if ($('.check' + i + j).prop('checked') && $('.single-checkbox' + i + '1').prop('checked')) {
            const left = document.getElementById(i + '-1-' + j + 'l');
            left.classList.add('bg-green-500', 'border-transparent') ;
          }
          if ($('.check' + i + j).prop('checked') && $('.single-checkbox' + i + '2').prop('checked')) {
            const right = document.getElementById(i + '-2-' + j + 'r');
            right.classList.add('bg-green-500');
          }
        });
      }
    }

  });




  for (let i = 1; i<=20; i++){
    var slider = document.getElementById("slider" + i);
    var output = document.getElementById("rangevalue" + i);
    output.innerHTML = slider.value;
    slider.oninput = function() {
      output.innerHTML = this.value;
      output.innerHTML = Math.round(output.innerHTML);
      
      const satu = document.getElementById("labelSlider" + i + "1");
      const dua = document.getElementById("labelSlider" + i + "2");
      const tiga = document.getElementById("labelSlider" + i + "3");
      const empat = document.getElementById("labelSlider" + i + "4");
      const lima = document.getElementById("labelSlider" + i + "5");
      const enam = document.getElementById("labelSlider" + i + "6");
      if (output.innerHTML == 1) {
        satu.classList.add('bg-red-600', 'border-slate-300', 'text-slate-300');
        satu.classList.remove('border-slate-500', 'text-slate-500');
      } else {
        satu.classList.remove('bg-red-600', 'border-slate-300', 'text-slate-300');
        satu.classList.add('border-slate-500', 'text-slate-500');
      }
      if (output.innerHTML == 2) {
        dua.classList.add('bg-red-600', 'border-slate-300', 'text-slate-300');
        dua.classList.remove('border-slate-500', 'text-slate-500');
      } else {
        dua.classList.remove('bg-red-600', 'border-slate-300', 'text-slate-300');
        dua.classList.add('border-slate-500', 'text-slate-500');
      }
      if (output.innerHTML == 3) {
        tiga.classList.add('bg-red-600', 'border-slate-300', 'text-slate-300');
        tiga.classList.remove('border-slate-500', 'text-slate-500');
      } else {
        tiga.classList.remove('bg-red-600', 'border-slate-300', 'text-slate-300');
        tiga.classList.add('border-slate-500', 'text-slate-500');
      }
      if (output.innerHTML == 4) {
        empat.classList.add('bg-green-600', 'border-slate-300', 'text-slate-300');
        empat.classList.remove('border-slate-500', 'text-slate-500');
      } else {
        empat.classList.remove('bg-green-600', 'border-slate-300', 'text-slate-300');
        empat.classList.add('border-slate-500', 'text-slate-500');
      }
      if (output.innerHTML == 5) {
        lima.classList.add('bg-green-600', 'border-slate-300', 'text-slate-300');
        lima.classList.remove('border-slate-500', 'text-slate-500');
      } else {
        lima.classList.remove('bg-green-600', 'border-slate-300', 'text-slate-300');
        lima.classList.add('border-slate-500', 'text-slate-500');
      }
      if (output.innerHTML == 6) {
        enam.classList.add('bg-green-600', 'border-slate-300', 'text-slate-300');
        enam.classList.remove('border-slate-500', 'text-slate-500');
      } else {
        enam.classList.remove('bg-green-600', 'border-slate-300', 'text-slate-300');
        enam.classList.add('border-slate-500', 'text-slate-500');
      }
    }
  
    // snapping position
    let years = [1, 2, 3, 4, 5, 6];
    function getClosest(arr, val) {
      return arr.reduce(function(prev, curr) {
        return (Math.abs(curr - val) < Math.abs(prev - val) ? curr : prev);
      });
    }
    
    slider.addEventListener("change", function() {
      let closest = getClosest(years, this.value);
      this.value = document.querySelector("#rangevalue" + i ).value = closest;
    });
  }


  const form = document.getElementById("form")

  // button logic
  const nextRoute = "{{ route('user.form.update', ['jawaban' => $jawaban, 'destination' => $nextDestination]) }}";
  const previousRoute = "{{ route('user.form.update.back', ['jawaban' => $jawaban, 'destination' => $previousDestination]) }}";
  const submitRoute = "{{ route('user.form.update.submit', ['jawaban' => $jawaban]) }}";

  function toNext() {
    form.setAttribute("action", nextRoute);
    form.submit();
  }

  function toPrevious() {
    form.setAttribute("action", previousRoute);
    form.submit();
  }

  function submit() {
    form.setAttribute("action", submitRoute);
    form.submit();
  }

  function confirmSubmit() {
    alert('tes');
    let text = "Apakah Anda Yakin?\nPencet tombol OK/Cancel.";
    if (confirm(text) == true) {
      submit();
    } else {

    }
  }

document.getElementById("submit-button").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("confirm-element").style.display = "block";
});

document.getElementById("close-button").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("confirm-element").style.display = "none";
});

document.getElementById("overlay").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("confirm-element").style.display = "none";
});

  function offoverlay() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("confirm-element").style.display = "none";
  }

  function confirm() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("confirm-element").style.display = "block";
  }
</script>