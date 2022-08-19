<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts and Iconss -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/circular-std" rel="stylesheet">

	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- UI -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />

    <!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/login.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">

        <main class="">
            @yield('auth')
        </main>

    </div>
</body>
</html>
