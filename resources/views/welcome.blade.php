<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<div
    class="relative flex flex-col items-top justify-center min-h-screen bg-black sm:items-center sm:pt-0">
    <div class="content">
        <h3 class="uppercase text-white text-2xl">
            COMP 4515 midterm
        </h3>
    </div>

    <div class="links mt-10">
        @auth
            <a href="{{ url('/home') }}" class="text-lg text-white underline hover:text-yellow-300">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-lg text-white underline hover:text-yellow-300">Login</a>

            <a href="{{ url("/register") }}" class="ml-4 text-lg text-white underline  hover:text-red-300">Register</a>

        @endauth
    </div>


</div>
</body>
</html>
