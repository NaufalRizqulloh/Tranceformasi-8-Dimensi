 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(document).ready(function() {
        $('#domisili').select2();
    });
</script>
<style type="">
html{
    scroll-behavior: smooth;
}

#overlay, #overlay1, #kodeAkses, #confirm-element, #buatEvent, #editEvent {
  position: fixed;
  display: none;
}

.navbar-fixed{
    backdrop-filter: blur(5px);
    box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
}

.navbar-fixed:target{
    top: 0;
    right: 4;
}

h1{
    font-family: 'Montserrat', 'sans';
    color: black;
}


</style>