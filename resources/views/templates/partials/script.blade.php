<script>
  function onoverlay() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("overlay1").style.display = "block";
  }
  
  function offoverlay() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("overlay1").style.display = "none";
    document.getElementById("kodeAkses").style.display = "none";
    document.getElementById("confirm-element").style.display = "none";
  }
  
  function kodeAkses() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("kodeAkses").style.display = "block";
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
      header.classList.add('navbar-fixed','fixed','z-10','bg-opacity-80')
      header.classList.remove('absolute')
      toTop.classList.remove('hidden');
      toTop.classList.add('flex');
    } else {
      header.classList.remove('navbar-fixed','fixed','z-10','bg-opacity-80')
      header.classList.add('absolute')
      toTop.classList.remove('flex');
      toTop.classList.add('hidden');
    }
  }
</script>