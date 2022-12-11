{{-- @extends('layouts.app') --}}

@extends('layouts.sidebar')

@section('content')

@include('layouts.navbar')

<div class="dashboard-container">

    <div class="dashboard driver-admin">

        <h2 class="welcome">Driver Dashboard</h2>

        <!-- ROUTE INFORMATION -->
        <div class="recent-route-container">
            <div class="recent-route-title">Recent Route</div>
            <div class="route-details-container">
                <div class="your-route-container dashboard-bx">
                    <div class="route-subtitle">
                        <span class="your-route-subtitle">Your Route</span>
                    </div>
                    <div class="route-details-driver">
                        <span class="driver-route-title">Tuguegarao</span>
                        <span class="iconify line" data-icon="tabler:line-dotted" data-width="20" data-height="20"></span>
                        <span class="driver-route-title">Aparri</span>
                    </div>
                </div>
                <div class="vehicle-assigned-container dashboard-bx">
                    <div class="vehicle-assigned-subtitle">
                        <span class="vehicle-subtitle">Vehicle Assigned</span>
                    </div>
                    <div class="vehicle-driver">
                        <span class="vehicle-name">Commuter Van</span>
                        <span class="vehicle-number">SV30-0169266</span>
                    </div>
                </div>
                <div class="taken-seats-container dashboard-bx">
                    <div class="taken-seats-subtitle">
                        
                        <span class="seats-subtitle ">Seats Taken</span>
                    </div>
                    <div class="taken-seats">
                        <span class="seats-number">12</span>
                    </div>
                    <button class="view">
                         <a href="#modalViewSeatTaken" class="view-button">View</a>
                    </button>
                    
                </div>
                <div class="total-passengers-container dashboard-bx">
                    <div class="total-passengers-subtitle">
                        
                        <span class="total-substitle">Total Passenger</span>
                    </div>
                    <div class="total-passengers">
                        <span class="passenger-number">10</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROUTE HISTORY -->
        <div class="route-history-container">
            <div class="history-route-title">Routes History</div>
            
            <div class="route-history-table">
                <table class="styled-table">
                    <thead>
                        <tr class="table-header">
                            <th>Departure Date</th>
                            <th>Return Date</th>
                            <th>Seats</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="first-route">
                            <td>Mar 31, 2022 1:00 PM </td>
                            <td>Mar 31, 2022 5:00 PM </td>
                            <td>12</td>
                            <td>150</td>
                            <td><button class="view-button-table">View</button></td>
                        </tr>
                        <tr class="second-route">
                            <td>April 1, 2022 3:00 PM </td>
                            <td>April 1, 2022 6:00 PM </td>
                            <td>12</td>
                            <td>150</td>
                            <td><button class="view-button-table">View</button></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

    </div>

</div>


{{-- <a href="{{ route('logout') }}"><i class='bx bx-log-out' id="log_out" ></i></a> --}}

@endsection
