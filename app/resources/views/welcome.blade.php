<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>
<body>

<div class="container-fluid">
    <x-menu.header-menu></x-menu.header-menu>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center h1"><span class="badge bg-secondary">{{$users}}</span> users already registered</div>
    </div>
</div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
