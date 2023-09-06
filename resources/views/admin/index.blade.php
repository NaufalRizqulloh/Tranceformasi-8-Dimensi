<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($latestEvents as $event)
    <a href="admin/event?event={{ $event->id }}">{{$event->nama}}</a>
    @endforeach
    <br>
    <h1>EXPIRED</h1>
    <br>
    @foreach ($expiredEvents as $event)
    <a href="admin/event?event={{ $event->id }}">{{$event->nama}}</a>
    @endforeach
    
</body>
</html>