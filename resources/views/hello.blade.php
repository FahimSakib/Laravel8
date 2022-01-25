<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade File</title>
</head>

<body>
    <h1>Hello World::Blade File</h1>

    {{ $name }}
    <br>
    {{ $age }}

    @if ($name)
    {{ $name }} {!! '<br>' !!}
    @else
    {{ $age }}
    @endif

    @foreach ($data as $item)
    {{ $item }} {!! '<br>' !!}
    @endforeach
</body>

</html>
