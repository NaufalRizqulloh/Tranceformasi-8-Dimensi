<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($latestEvents as $event)
    <h1>{{$event->nama}}</h1>
    @endforeach
    <br>
    @foreach ($expiredEvents as $event)
    <h1>{{$event->nama}}</h1>
    @endforeach
</body>
</html>