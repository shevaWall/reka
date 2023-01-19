<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>
    <body>
        <div class="container-fluid">
            <x-menu.header-menu></x-menu.header-menu>
        </div>

        <!-- Page Content -->
        <main class="container">
            {{ $slot }}
        </main>

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
