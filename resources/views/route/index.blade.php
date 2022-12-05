@extends('layouts.sidebar')



@section('content')

    <div class="route">

        <div class="list-container">

            <div class="search-bar">
                <input type="text" placeholder="Search {{ $placeholder }}" id="search" autocomplete="off">
                <iconify-icon icon="bi:filter-right" width="25" height="25"></iconify-icon>
            </div>
    
            <div class="select-all">
    
                <div class="checkbox">
                    <input type="checkbox" name="" id="select">
                    <label for="select">Select all</label>
                </div>
    
                <span class="iconify" data-icon="charm:menu-kebab"></span>
    
            </div>
    
            <div class="list">
    
                <div class="results">
                    <small>Showing results {{ $routes->firstItem() }}-{{ $routes->lastItem() }} of {{ $routes->total() }}</small>
                </div>
        
                <div class="pagination">
                    {{ $routes->links() }}
                </div>
    
               @foreach ($routes as $route)
                   
               <a href="{{ route('route', ['id' => $route->id, $routes->getPageName() => $routes->currentPage()]) }}"
                class="list-info @if ( $route->id == $rt->id ) active @endif">
    
                    <input type="checkbox" name="" id="select-list">
    
                    <label for="select-list">
                        
                        {{-- <div class="label-img">
                            <img src="{{ asset('assets/van-pic.png') }}" width=50 height="50" alt="">
                        </div> --}}
                    
                        <div class="label-txt">
                            <h4>{{ $route->routeTitle }}</h4>
                            <p>{{ $route->routeNo }}</p>
                        </div>
    
                    </label>
    
                </a>
    
                @endforeach
    
                <div class="pagination">
                    {{ $routes->links() }}
                </div>
    
            </div>
    
    
        </div>

        @include('layouts.profile')

        <div class="content-details">

            <x-flash-message/>

            <div class="content-head">

                <h2 class="text-details"> Route Details</h2>
                
                <div class="action">
    
                    <a onclick='Livewire.emit("openModal", "route.create")'><i class='bx bx-plus-circle' ></i></a>
                    <a onclick='Livewire.emit("openModal", "route.edit", {{ json_encode($rt) }})'><i class='bx bxs-edit'></i></i></a>
                    {{-- <a href="{{ route('route.destroy', ['id' => $rt->id]) }}"><i class='bx bx-trash'></i></a> --}}
                    <a onclick='Livewire.emit("openModal", "confirm", {{ json_encode(["id" => $rt->id, "routeName" => Route::currentRouteName()]) }})'><i class='bx bx-trash'></i></a>
                </div>
    
            </div>

            <div class="content-body">


                <div class="route-details">

                    <div class="route-title">
                        <p class="driver-lbl">Route Title</p>
                        <small class="driver-txt">{{ $rt->routeTitle }}</small>
                    </div>

                    <div class="route-no">
                        <p class="driver-lbl">Route Number</p>
                        <small class="driver-txt">{{ $rt->routeNo }}</small>
                    </div>

                    {{-- <div class="price">
                        <p class="driver-lbl">Price</p>
                        <small class="driver-txt">300 PHP</small>
                    </div> --}}

                    <div class="origin">
                        <p class="driver-lbl">Origin</p>
                        <small class="driver-txt">{{ $rt->origin }}</small>
                    </div>

                    <div class="destination">
                        <p class="driver-lbl">Destination</p>
                        <small class="driver-txt">{{ $rt->destination }}</small>
                    </div>
                </div>

            </div>

            <div class="list-table">

                <h4 class="driver-title">Trip Schedule</h4>
    
                <div class="sort">
    
                    <div class="sort-dropdown">
    
                        <div class="sort-type">
    
                            <label for="transact">Type:</label>
        
                            <select name="transact" id="transact">
                                <option value="Reserve">Reserve</option>
                                <option value="Rent">Rent</option>
                            </select>
        
                        </div>
        
                        <div class="sort-by">
        
                            <label for="cars">Sort-by:</label>
        
                            <select name="attr" id="attr">
                                {{-- <option value="Transaction No">Transaction No</option> --}}
                                <option value="Status">Status</option>
                                <option value="Departure Date">Departure Date</option>
                                <option value="Return Date">Return Date</option>
                                {{-- <option value="Seats">Seats</option>
                                <option value="Fare">Fare</option>
                                <option value="Transaction Time">Transaction Time</option> --}}
                            </select>
        
                        </div>
    
                    </div>
    
                    <div class="add-btn">
                        <button class="btn"><iconify-icon inline icon="akar-icons:plus" width="16" height="16"></iconify-icon>&nbsp;Add schedule</button>
                    </div>
    
                </div>
    
                <div class="table">
    
                    <table>
                        <tr class="table-head">
                            {{-- <th>Transaction  No</th> --}}
                            {{-- <th>Status</th> --}}
                            <th>Vehicle No</th>
                            <th>Departure Date</th>
                            <th>Departure Time</th>
                            <th>Return Date</th>
                            {{-- <th>Seats</th> --}}
                            <th>Fare</th>
                            {{-- <th>Transaction time</th> --}}
                        </tr>
    
    
    
                        @foreach ($rt->trips as $trip)
    
                            <tr class="table-data" onclick="">
                                {{-- <td>12345678{{$i}}</td> --}}
                                <td>{{ $trip->plateNo }}</td>
                                <td>{{ $trip->pivot->departureDate }}</td>
                                <td>{{ $trip->pivot->departureTime }}</td>
                                <td>{{ $trip->pivot->returnDate }} @empty($route->pivot->returnDate) None @endempty </td>
                                <td>{{ $trip->pivot->fare }}</td>
                                
                                {{-- <td>B{{$i+1}}</td>
                                <td>150.00</td>
                                <td>{{$i+1}}:{{$i}}{{$i+2}} PM Mar 1{{$i}}</td> --}}
                            </tr>
    
                        @endforeach
    
    
                    </table>
    
    
                </div>
    
            </div>


        </div>

        

    </div>

@endsection