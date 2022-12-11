@extends('layouts.sidebar')



@section('content')

    <div class="route">

        @livewire('search-list', ['rt' => $rt, 'routeName' => Route::currentRouteName()])

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
                                <td>{{ $trip->pivot->returnDate }} @if ($trip->pivot->returnDate == null) None @endif </td>
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