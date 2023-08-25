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

  function onoverlay() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("overlay1").style.display = "block";
  }

  function offoverlay() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("overlay1").style.display = "none";
  }


  const checkbox = document.querySelector('#toggle');
  const html = document.querySelector('html');

  checkbox.addEventListener('click', function() {
    checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
  });

  //Nabar Fixed

  window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector('#to-top')

    if (window.pageYOffset > fixedNav) {
      header.classList.add('navbar-fixed')
      toTop.classList.remove('hidden');
      toTop.classList.add('flex');
    } else {
      header.classList.remove('navbar-fixed')
      toTop.classList.remove('flex');
      toTop.classList.add('hidden');
    }
  }

  // button logic

  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');
    const previousButton = document.getElementById('previous-button');
    const nextButton = document.getElementById('next-button');

    previousButton.addEventListener('click', function() {
      // Assuming you have form validation here
      form.submit();
      redirectToPreviousRoute();
    });

    nextButton.addEventListener('click', function() {
      // Assuming you have form validation here
      form.submit();
      redirectToNextRoute();
    });

    function redirectToPreviousRoute() {
      // Perform any additional actions if needed
      window.location.href = $previousDestination; // Replace with the actual route
    }

    function redirectToNextRoute() {
      // Perform any additional actions if needed
      window.location.href = $nextDestination; // Replace with the actual route
    }
  });
</script>