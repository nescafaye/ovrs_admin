{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar')

@section('content')

    @include('layouts.navbar')
    
    <div class="dashboard-container">

        <div class="dashboard">

            @foreach ($admin as $ad)

                <h2 class="welcome">Welcome, <span style="color: #088; font-weight: 600;">{{ $ad->fname }} {{ $ad->lname }}!</span></h2>
                
            @endforeach

            <div class="performance">
                <div class="stats reserves">
                    <h1 class="num">{{107}}</h1>
                    <p class="label">Online Reservations</p>
                </div>

                <div class="stats rents">
                    <h1 class="num">{{70}}</h1>
                    <p class="label">Vehicle Rents</p>
                </div>
                    
                <div class="stats earnings">
                    <h1 class="num">₱{{"100,702"}}</h1>
                    <p class="label">Monthly Earnings</p>
                </div>
            </div>

            <div class="perf-2">

                <div class="col ongoing-container">
                    <h3>En route</h3>
                    
                    <div class="ongoing">

                        @for ($i = 1; $i < 6; $i++)

                        <div class="ongoing-list">
                            
                            <p class="route-name">Tuguegarao to Alcala</p>

                            <div class="info">
                                <p><iconify-icon inline icon="mdi:car-seat" width="20" height="20"></iconify-icon>10/15 Seats</p>
                                <p><iconify-icon inline icon="fluent:calendar-clock-20-filled" width="20" height="20"></iconify-icon>Mar 21 2022, {{$i}}:00 PM</p>    
                            </div>

                        </div>

                        @endfor

                    </div>

                </div>

                <div class="col recent-container">
                    <h3>Recent Activity</h3>

                    <div class="recent">

                        <div class="recent-list">
                            <img src="{{ asset('assets/reserve-seat.svg') }}" width=50 height="50" alt="">
                            <div class="activity">
                                <p class="trans">Received booking</p>
                                <p class="trans-no">1234</p>
                                <small>{{5}} minutes ago</small>
                            </div>

                        </div>

                        <div class="recent-list">
                            <img src="{{ asset('assets/rent-van.svg') }}" width=50 height="50" alt="">
                            <div class="activity">
                                <p class="trans">Received booking</p>
                                <p class="trans-no">1234</p>
                                <small>{{8}} minutes ago</small>
                            </div>
                        </div>

                        <div class="recent-list">
                            <img src="{{ asset('assets/cancelled.svg') }}" width=50 height="50" alt="">
                            <div class="activity">
                                <p class="trans">Cancelled booking</p>
                                <p class="trans-no">1234</p>
                                <small>{{10}} minutes ago</small>
                            </div>
                        </div>

                        <div class="recent-list">
                            <img src="{{ asset('assets/rent-van.svg') }}" width=50 height="50" alt="">
                            <div class="activity">
                                <p class="trans">Received booking</p>
                                <p class="trans-no">1234</p>
                                <small>{{8}} minutes ago</small>
                            </div>
                        </div>

                        <div class="recent-list">
                            <img src="{{ asset('assets/reserve-seat.svg') }}" width=50 height="50" alt="">
                            <div class="activity">
                                <p class="trans">Received booking</p>
                                <p class="trans-no">1234</p>
                                <small>{{10}} minutes ago</small>
                            </div>
                        </div>
    
                    </div>

                </div>
            </div>


        </div>

        @include('layouts.profile')

        <div class="schedule">
            
                
            <div class="sched-container">
                
                <h3>Schedule</h3>

                <div class="sched-list">

                    <h4 class="date">April 12, 2022</h4>

                    <div class="sched-info">
                        <p class="time">9:00 AM</p>
                        <p class="route-title">TUG — ALC</p>
                    </div>

                    <div class="sched-info">
                        <p class="time">3:30 PM</p>
                        <p class="route-title"><span>Hi-ace <br></span> Super Grandia</p> 
                    </div>

                    <div class="sched-info">
                        <p class="time">10:30 AM</p>
                        <p class="route-title">TUG — ALC</p>
                    </div>

                    <div class="sched-info">
                        <p class="time">3:30 PM</p>
                        <p class="route-title"><span>Hi-ace <br></span> Super Grandia</p> 
                    </div>

                    <div class="sched-info">
                        <p class="time">9:00 AM</p>
                        <p class="route-title">TUG — ALC</p>
                    </div>

                </div>

                <div class="sched-list">

                    <h4 class="date">April 12, 2022</h4>

                    <div class="sched-info">
                        <p class="time">9:00 AM</p>
                        <p class="route-title">TUG — ALC</p>
                    </div>

                    <div class="sched-info">
                        <p class="time">3:30 PM</p>
                        <p class="route-title"><span>Hi-ace <br></span> Super Grandia</p> 
                    </div>

                    <div class="sched-info">
                        <p class="time">10:30 AM</p>
                        <p class="route-title">TUG — ALC</p>
                    </div>

                    <div class="sched-info">
                        <p class="time">3:30 PM</p>
                        <p class="route-title"><span>Hi-ace <br></span> Super Grandia</p> 
                    </div>

                    <div class="sched-info">
                        <p class="time">9:00 AM</p>
                        <p class="route-title">TUG — ALC</p>
                    </div>

                </div>

            </div>
        </div>

    </div>


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

@endsection
