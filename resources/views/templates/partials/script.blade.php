<script>
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

  // document.addEventListener("DOMContentLoaded", function() {
  //   const submitConfirmation = document.getElementById("submitConfirmation");
  //   const confirmationDiv = document.getElementById("confirmationDiv");
  //   const confirmButton = document.getElementById("confirmButton");

  //   submitConfirmation.addEventListener("click", function() {
  //     confirmationDiv.classList.remove("hidden");
  //   });

  //   submitConfirmation.addEventListener("click", function() {
  //     confirmationDiv.classList.add("hidden");
  //   });

  //   confirmButton.addEventListener("click", function() {
  //     // Make an AJAX request to the server
  //     // Replace 'your_server_endpoint' with the actual endpoint URL
  //     fetch('your_server_endpoint')
  //       .then(response => response.json())
  //       .then(data => {
  //         if (data.shouldShowConfirmation) {
  //           confirmationDiv.classList.add("hidden");
  //         }
  //       })
  //       .catch(error => {
  //         console.error('Error:', error);
  //       });
  //   });
  // });
</script>