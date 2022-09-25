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
    @vite(['resources/sass/profile.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="profile-container">

        <div class="sticky-profile">

            <span class="iconify notif" data-icon="ic:baseline-notifications-none" data-width="26" data-height="26"></span>

            @foreach($profile as $p)

            <div class="profile">
                <span class="name"> {{ $p->username }} </span>
                <img class= "prof-pic" src="{{ asset('assets/prof-pic.png') }}" alt="">
            </div>

            @endforeach
    
        </div>
        
    </div>


</body>
</html>