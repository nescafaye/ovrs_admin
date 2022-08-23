@extends('layouts.sidebar')

@section('content')

    {{-- <div class="commuter">

        @foreach($drivers as $driver)

        <p>{{ $driver->dvr_fname }}</p>
        <p>{{ $driver->dvr_mail }}</p>
        <p>{{ $driver->dvr_un }}</p>
        <br>
        @endforeach

        

    </div> --}}

    <div class="list-container">

        <div class="search-bar">
            <input type="text" placeholder="Search Commuter" id="search" autocomplete="off">
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
                <small>Showing results 1-50 of 250</small>
            </div>

            {{--  --}}

           @foreach ($commuters as $commuter)
               
            <a href="{{ route('commuter', ['comm_id' => $commuter->comm_id]) }}" class="list-info {{ (request()->is('commuter')) ? 'active' : '' }}">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>{{$commuter->comm_fname}} {{$commuter->comm_lname}}</h4>
                        <p>{{$commuter->comm_mail}}</p>
                    </div>

                </label>

            </a>

            @endforeach

            <div class="pagination">
                <ul class="pagenum">
                    <li class="page-item arrow"><a href=""><span class="iconify" data-icon="ic:round-keyboard-double-arrow-left" data-width="25" data-height="25"></span></a></li>
                    <li class="page-item num"><a href="">1</a></li>
                    <li class="page-item num"><a href="">2</a></li>
                    <li class="page-item num"><a href="">3</a></li>
                    <li class="page-item num"><a href="">4</a></li>
                    <li class="page-item num"><a href="">5</a></li>
                    <li class="page-item num"><a href="">6</a></li>
                    <li class="page-item arrow"><a href=""><span class="iconify" data-icon="ic:round-keyboard-double-arrow-right" data-width="25" data-height="25"></span></a></li>
                </ul>
            </div>

        </div>


    </div>

        @include('layouts.profile')

    <div class="content-details comm">

        {{-- view details  --}}

        <div class="content-head">

            <h2 class="text-details">Commuter Details</h2>
            
            <div class="action">

                <i class='bx bxs-edit'></i>
                <i class='bx bx-plus-circle' ></i>

            </div>

        </div>

            
        <div class="content-body">
                
        <div class="driver-personal">

            <div class="driver-avatar">
                    <img src="{{ asset('assets/driver-pic.png') }}" width=100 height=100 alt="">
            </div>

            <div class="driver-basicinfo">

                {{-- @foreach($comm->commuterItem as $c)
                <td>{{ $c->comm_fname }}</td> 
                @endforeach  --}}

                {{-- {{ route('commuter', ['commuter_id' => $commuter->commuter_id]) }} --}}

                <h3 class="name-username">{{ $commuter->comm_fname }} {{ $commuter->comm_lname }} •  <span class="username">{{ $commuter->comm_un }}</span></h3>

            </div>

        </div>

        <div class="driver-personal-2">

            <div class="driver-assigned col">

                <h4 class="driver-title">Personal Information</h4>

                <div class="driver-van">


                    <div class="driver-van-detail">

                        <p class="driver-lbl">Phone Number</p>
                        <small class="driver-txt">{{ $commuter->comm_phone }}</small>
                        <p class="driver-lbl">Email</p>
                        <small class="driver-txt">{{ $commuter->comm_mail }}</small>
                        <p class="driver-lbl">Birthdate</p>
                        <small class="driver-txt">{{ $commuter->birthdate }}</small>

                    </div>

                    <div class="driver-van-detail">

                        <p class="driver-lbl">Gender</p>
                        <small class="driver-txt">{{ $commuter->gender }}</small>

                    </div>


                </div>
            </div>

            <div class="driver-gcash col">

                <h4 class="driver-title">GCash Details</h4>
                
                <div class="driver-gcash-detail">
                    <p class="driver-lbl">Account Name</p>
                    <small class="driver-txt">Kathleen Jean Vierness</small>
                    <p class="driver-lbl">Account Number</p>
                    <small class="driver-txt">099710090522</small>
                </div>

            </div>

        </div>


        </div>

        <div class="list-table">

            <h4 class="driver-title">All Transactions</h4>

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
                            <option value="Transaction No">Transaction No</option>
                            <option value="Route">Route</option>
                            <option value="Departure Date">Departure Date</option>
                            <option value="Return Date">Return Date</option>
                            <option value="Seats">Seats</option>
                            <option value="Fare">Fare</option>
                            <option value="Transaction Time">Transaction Time</option>
                        </select>
    
                    </div>

                </div>

                <div class="add-btn">
                    <button class="btn">Add booking<span class="iconify-inline" data-icon="akar-icons:plus"></span></button>
                </div>

            </div>

            <div class="table">

                <table>
                    <tr class="table-head">
                        <th>Transaction  No</th>
                        <th>Route</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Seats</th>
                        <th>Fare</th>
                        <th>Transaction time</th>
                    </tr>


                    {{-- dummy data --}}

                    @for ($i = 0; $i < 6; $i++)


                        <tr class="table-data" onclick="">
                            <td>12345678{{$i}}</td>
                            <td>Tuguegarao to Kalinga</td>
                            <td>March 2{{$i}} 2022</td>
                            <td>March 2{{$i+1}} 2022</td>
                            <td>B{{$i+1}}</td>
                            <td>150.00</td>
                            <td>{{$i+1}}:{{$i}}{{$i+2}} PM Mar 1{{$i}}</td>
                        </tr>

                    @endfor


                </table>


            </div>

        </div>



        

    </div>


@endsection