<script>
  $(document).ready(function() {
    for (let i = 1; i <= 20; i++) {
      $('.single-checkbox-section2-' + i).on('change', function() {
        $('.single-checkbox-section2-' + i).not(this).prop('checked', false);
      });
    }
  });

  $(document).ready(function() {
    for (let i = 1; i <= 24; i++) {
      for (let j = 1; j <= 2; j++) {
        $('.single-checkbox' + i + j).on('change', function() {
          $('.single-checkbox' + i + j).not(this).prop('checked', false);
        });
      }
    }
  });

  $(document).ready(function() {
    for (let i = 1; i <= 24; i++) {
      for (let j = 1; j <= 4; j++) {
        $('.check' + i + j).on('change', function() {
          $('.check' + i + j).not(this).prop('checked', false);
        });
      }
    }
  });

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