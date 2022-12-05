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
    
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.0/dist/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- Livewire reqs -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite([
    'resources/sass/sidebar.scss', 
    'resources/sass/home.scss', 
    'resources/sass/driver.scss', 
    'resources/sass/commuter.scss', 
    'resources/sass/van.scss', 
    'resources/sass/transaction.scss', 
    'resources/sass/route.scss',
    'resources/sass/settings.scss', 
    'resources/sass/no-record.scss',
    'resources/js/app.js'
    
    ])
    

    @livewire('livewire-ui-modal')

    @livewireStyles

</head>
<body>

      <x-sidebar/>

      <section class="home-section">

        @yield('content')

      </section>

    
    @livewireScripts
    
    
</body>
</html>