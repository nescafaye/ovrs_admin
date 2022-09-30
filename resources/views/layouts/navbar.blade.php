<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/vango-logo.svg') }}" type="image/x-icon">

    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/sass/navbar.scss', 'resources/js/app.js'])
</head>
<body>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <div class="navbar">

        <input type="text" placeholder="Search transaction, driver, commuter, van" id="search" autocomplete="off">

        <div class="add-btns">
            <button class="btn-add"><a href="" class="add add-driver">Add driver</a></button>
            <button class="btn-add"><a href="" class="add add-van">Add van</a></button>
        </div>

    </div>
    
</body>
</html>