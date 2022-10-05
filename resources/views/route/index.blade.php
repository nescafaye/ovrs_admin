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
                    <small>Showing results 1-50 of 250</small>
                </div>
    
                {{--  --}}
    
               {{-- @foreach ($commuters as $commuter) --}}
                   
                <a href="" class="list-info {{ (request()->is('commuter.*')) ? 'active' : '' }}">
    
                    <input type="checkbox" name="" id="select-list">
    
                    <label for="select-list">
                        
                        {{-- <div class="label-img">
                            <img src="{{ asset('assets/van-pic.png') }}" width=50 height="50" alt="">
                        </div> --}}
                    
                        <div class="label-txt">
                            <h4>Piat to Tuguegarao</h4>
                            <p>34084</p>
                        </div>
    
                    </label>
    
                </a>
    
                {{-- @endforeach --}}
    
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

        <div class="content-details">

            <div class="content-head">

                <h2 class="text-details"> Route Details</h2>
                
                <div class="action">
    
                    <i class='bx bxs-edit'></i>
                    <a href=""><i class='bx bx-plus-circle' ></i></a>
    
                </div>
    
            </div>

            <div class="content-body">

                <div class="route-details">

                    <div class="route-no">
                        <p class="driver-lbl">Route Number</p>
                        <small class="driver-txt">34084</small>
                    </div>

                    <div class="price">
                        <p class="driver-lbl">Price</p>
                        <small class="driver-txt">300 PHP</small>
                    </div>

                    <div class="origin">
                        <p class="driver-lbl">Origin</p>
                        <small class="driver-txt">Piat</small>
                    </div>

                    <div class="destination">
                        <p class="driver-lbl">Destination</p>
                        <small class="driver-txt">Tuguegarao</small>
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
                            <th>Status</th>
                            <th>Departure Date</th>
                            <th>Return Date</th>
                            {{-- <th>Seats</th>
                            <th>Fare</th>
                            <th>Transaction time</th> --}}
                        </tr>
    
    
                        {{-- dummy data --}}
    
                        @for ($i = 0; $i < 6; $i++)
    
    
                            <tr class="table-data" onclick="">
                                {{-- <td>12345678{{$i}}</td> --}}
                                <td>Completed</td>
                                <td>March 2{{$i}} 2022</td>
                                <td>March 2{{$i+1}} 2022</td>
                                {{-- <td>B{{$i+1}}</td>
                                <td>150.00</td>
                                <td>{{$i+1}}:{{$i}}{{$i+2}} PM Mar 1{{$i}}</td> --}}
                            </tr>
    
                        @endfor
    
    
                    </table>
    
    
                </div>
    
            </div>


        </div>

        

    </div>

@endsection