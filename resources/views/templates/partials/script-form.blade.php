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
  
  // button logic

  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("form");
    const nextButton = document.getElementById("to-next-button");
    const previousButton = document.getElementById("to-previous-button");

    const nextRoute = "{{ route('user.form.update', ['jawaban' => $jawaban, 'destination' => $nextDestination]) }}";
    const previousRoute = "{{ route('user.form.update.back', ['jawaban' => $jawaban, 'destination' => $previousDestination]) }}";

    nextButton.addEventListener("click", function() {
      form.setAttribute("action", nextRoute);
      form.submit();
    });

    previousButton.addEventListener("click", function() {
      form.setAttribute("action", previousRoute);
      form.submit();
    });
  });
</script>
