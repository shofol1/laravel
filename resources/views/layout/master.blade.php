<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @yield('style')
</head>
<body>
   <div class="container">
    <ul>
        <li><a href="{{route('homepage')}}">home</a></li>
        <li><a href="{{ route('contactpage') }}">contact</a></li>
        <li><a href="{{ route('aboutpage') }}">about</a></li>
    </ul>

    @yield('content')

    @section('extra')
<p>lorem</p>
    @show
   </div>
</body>
</html>