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

            <details class="dropdown">
                <summary class="notifications">
                    <span class="iconify notif" data-icon="ic:baseline-notifications-none" data-width="26" data-height="26"></span>
                </summary>

                <div class="notif-body">
                    <div class="notif-title">
                        Notifications
                    </div>

                    <hr>

                    <div class="notif-list">
                        <iconify-icon icon="mdi:information-outline" class="notif-icon" width="30" height="30"></iconify-icon>
                        <div class="notif-text">No notifications yet</div>
                        <div class="notif-subtext">When you get notifications, they'll show up here</div>
                    </div>
                </div>

            </details>

            @foreach($profile as $p)

            <details class="dropdown">

                <summary class="profile">
                    <span class="name"> {{ $p->username }} </span>
                    <img class= "prof-pic" src="{{ asset('assets/prof-pic.png') }}" alt="">
                </summary>

                <ul class="options">
                    <li class="option-item"><a href="{{ route('settings') }}"><i class='bx bxs-cog'></i>Settings</a></li>
                    <li class="option-item logout"><a href="{{ route('logout') }}"><i class='bx bx-log-out' id="log_out" ></i>Logout</a></li>
                </ul>

            </details>

            @endforeach
    
        </div>
        
    </div>


</body>

<script>

    // close dropdown when outside is clicked

    var details = [...document.querySelectorAll('details')];
    document.addEventListener('click', function(e) {
        if (!details.some(f => f.contains(e.target))) {
            details.forEach(f => f.removeAttribute('open'));
        } else {
            details.forEach(f => !f.contains(e.target) ? f.removeAttribute('open') : '');
        }
    })
    
</script>

</html>