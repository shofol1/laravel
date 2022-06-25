<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <ul>
        <li><a href="{{route('homepage')}}">home</a></li>
        <li><a href="{{ route('contactpage') }}">contact</a></li>
        <li><a href="{{ route('aboutpage') }}">about</a></li>
    </ul>

    @yield('content');
</body>
</html>