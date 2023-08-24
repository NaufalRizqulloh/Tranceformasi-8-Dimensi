<script src="https://cdn.tailwindcss.com"></script>
<script type="text/tailwindcss"></script>
<script>
    tailwind.config = {
        darkMode: 'class',
    }
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="/dist/output.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#domisili').select2();
    });
</script>
<style type="text/tailwindcss">
html{
    scroll-behavior: smooth;
}

#overlay, #overlay1 {
  position: fixed;
  display: none;
}
</style>