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

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
    var notificationsWrapper   = $('.dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('ul.dropdown-menu');


    // Enable pusher logging - don't include this in production
     Pusher.logToConsole = true;

    var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
        cluster: 'ap1',
        encrypted: true
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('Notify');

    // Bind a function to a Event (the full Laravel class)
    channel.bind('send-message', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.title+`</strong>
                  <p class="notification-desc">`+data.content+`</p>
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
</script>

</html>