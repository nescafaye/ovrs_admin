@extends('layouts.sidebar')

@section('content')

@if ($count == 0)

    <x-no-record/>
    
@else

<div class="list-container">

    <div class="search-bar">
        <input type="text" placeholder="Search Commuter" id="search" autocomplete="off">
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
            <small>Showing results {{ $commuters->firstItem() }}-{{ $commuters->lastItem() }} of {{ $commuters->total() }}</small>
        </div>

        <div class="pagination">
            {{ $commuters->links() }}
        </div>

        @foreach ($commuters as $commuter)

        <a href="{{ route('commuter', ['id' => $commuter->comm_id, $commuters->getPageName() => $commuters->currentPage()]) }}"
            class="list-info @if ( $commuter->comm_id == $c->comm_id ) active @endif">

            <input type="checkbox" name="" id="{{ $commuter->comm_id }}">

            <label for="{{ $commuter->comm_id }}">

                <img class="lbl-img" src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">

                <div class="label-txt">
                    <h4>{{$commuter->fname}} {{$commuter->lname}}</h4>
                    <p>{{$commuter->email}}</p>
                </div>

            </label>

        </a>

        @endforeach

        <div class="pagination">
            {{ $commuters->links() }}
        </div>

    </div>


</div>

@include('layouts.profile')

<div class="content-details comm">

    <x-flash-message/>

    <div class="content-head">

        <h2 class="text-details">Commuter Details</h2>

        <div class="action">

            <a onclick='Livewire.emit("openModal", "commuter.edit",  {{ json_encode($c) }})'><i class='bx bxs-edit'></i></a>

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
                @endforeach --}}

                {{-- {{ route('commuter', ['commuter_id' => $commuter->commuter_id]) }} --}}

                <h3 class="name-username">{{ $c->fname }} {{ $c->lname }} • <span class="username">{{ $c->username
                        }}</span></h3>

            </div>

        </div>

        <div class="driver-personal-2">

            <div class="driver-assigned col">

                <h4 class="driver-title">Personal Information</h4>

                <div class="driver-van">


                    <div class="driver-van-detail">

                        <p class="driver-lbl">Phone Number</p>
                        <small class="driver-txt">{{ $c->phone }}</small>
                        <p class="driver-lbl">Email</p>
                        <small class="driver-txt">{{ $c->email }}</small>
                        {{-- <p class="driver-lbl">Birthdate</p>
                        <small class="driver-txt">{{ $c->birthdate }}</small> --}}

                    </div>

                    <div class="driver-van-detail">

                        <p class="driver-lbl">Gender</p>
                        <small class="driver-txt">{{ $c->gender }} @empty($c->gender) N/A @endempty</small>

                    </div>


                </div>
            </div>

            <div class="driver-gcash col">

                <h4 class="driver-title">GCash Details</h4>

                <div class="driver-gcash-detail">
                    <p class="driver-lbl">Account Name</p>
                    <small class="driver-txt">{{ $c->accName }} @empty($c->accName) N/A @endempty</small>
                    <p class="driver-lbl">Account Number</p>
                    <small class="driver-txt">{{ $c->accNumber }} @empty($c->accNumber) N/A @endempty</small>
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

            {{-- <div class="add-btn">
                <button class="btn">
                    <iconify-icon inline icon="akar-icons:plus" width="16" height="16"></iconify-icon>&nbsp; Add booking
                </button>
            </div> --}}

        </div>

        <div class="table">

            <table>
                <tr class="table-head">
                    <th>Transaction No</th>
                    <th>Route</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Seats</th>
                    <th>Fare</th>
                    <th>Transaction time</th>
                </tr>


                {{-- dummy data --}}

                @for ($i = 0; $i < 6; $i++) <tr class="table-data" onclick="">
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
    
@endif


@endsection