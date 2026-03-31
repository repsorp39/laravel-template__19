<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen pratique</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- @auth
        auth()->user()->email
    @endauth --}}
   
    @if (session('success'))
        <p class="alert alert-success">
            {{ session("success") }}
        </p>
    @endif

    @if (session('error'))
        <p class="alert alert-danger">
            {{ session("error") }}
        </p>
    @endif

    @yield('content')
</body>

</html>
