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

                        <div class="ongoing-list">
                            
                            <p class="route-name">Tuguegarao to Alcala</p>

                            <div class="info">
                                <p><span class="iconify-inline" data-icon="mdi:car-seat" data-width="20" data-height="20"></span>10/15 Seats</p>
                                <p><span class="iconify-inline" data-icon="akar-icons:schedule" data-width="20" data-height="20"></span>Mar 21 2022, 1:00 PM</p>    
                            </div>

                        </div>

                        <div class="ongoing-list">
                            
                            <p class="route-name">Tuguegarao to Alcala</p>

                            <div class="info">
                                <p><span class="iconify-inline" data-icon="mdi:car-seat" data-width="20" data-height="20"></span>10/15 Seats</p>
                                <p><span class="iconify-inline" data-icon="akar-icons:schedule" data-width="20" data-height="20"></span>Mar 21 2022, 1:00 PM</p>    
                            </div>

                        </div>

                        <div class="ongoing-list">
                            
                            <p class="route-name">Tuguegarao to Alcala</p>

                            <div class="info">
                                <p><span class="iconify-inline" data-icon="mdi:car-seat" data-width="20" data-height="20"></span>10/15 Seats</p>
                                <p><span class="iconify-inline" data-icon="akar-icons:schedule" data-width="20" data-height="20"></span>Mar 21 2022, 1:00 PM</p>    
                            </div>

                        </div>

                        <div class="ongoing-list">
                            
                            <p class="route-name">Tuguegarao to Alcala</p>

                            <div class="info">
                                <p><span class="iconify-inline" data-icon="mdi:car-seat" data-width="20" data-height="20"></span>10/15 Seats</p>
                                <p><span class="iconify-inline" data-icon="akar-icons:schedule" data-width="20" data-height="20"></span>Mar 21 2022, 1:00 PM</p>    
                            </div>

                        </div>

                        <div class="ongoing-list">
                            
                            <p class="route-name">Tuguegarao to Alcala</p>

                            <div class="info">
                                <p><span class="iconify-inline" data-icon="mdi:car-seat" data-width="20" data-height="20"></span>10/15 Seats</p>
                                <p><span class="iconify-inline" data-icon="akar-icons:schedule" data-width="20" data-height="20"></span>Mar 21 2022, 1:00 PM</p>    
                            </div>

                        </div>

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

@endsection
