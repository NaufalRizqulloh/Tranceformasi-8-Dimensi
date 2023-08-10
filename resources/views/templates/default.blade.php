<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/public/dist/output.css" rel="stylesheet"> -->
    @include('templates.partials.head')

    <title>Tranceformasi - Beranda</title>
 
<body class="bg-[#F7F1F1]">
    @include('templates.partials.navigation')

    @yield('content')

    @include('templates.partials.footer')
    @include('templates.partials.script')
</body>
</html>