@extends('layouts.sidebar')

@section('content')

    <div class="transaction">

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
                            <p>Michelle Baui</p>
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

                <h2 class="text-details">Transaction Details</h2>
                
                <div class="action">
    
                    {{-- <i class='bx bxs-edit'></i>
                    <a href=""><i class='bx bx-plus-circle' ></i></a> --}}
    
                </div>
    
            </div>

            <div class="content-body">

                <div class="transact-head">

                    <div class="transact-status">
                        Upcoming
                    </div>

                    <div class="transact-title">
                        <p class="transact-route">Piat to Tuguegarao</p>
                        <small class="transact-time">Transaction Time: 11:00 AM, Mar 19</small>
                    </div>

                </div>

                <div class="transact-body">
                    
                    <div class="reserve-details">
                        <h4 class="driver-title transact-txt"> <iconify-icon inline icon="fluent:ticket-horizontal-20-regular" class="tix" width="25" height="25"></iconify-icon> Reservation Details</h4>

                            <div class="reserve-row">

                                <div class="trans-no">
                                    <p class="driver-lbl">Transaction Number</p>
                                    <small class="driver-txt">1234</small>
                                </div>
        
                                <div class="seat-no">
                                    <p class="driver-lbl">Seat</p>
                                    <small class="driver-txt">A1, A2, B4</small>
                                </div>
    
                                <div class="seat-no">
                                    <p class="driver-lbl">Type</p>
                                    <small class="driver-txt">Roundtrip</small>
                                </div>

                            </div>

                            <div class="reserve-row">

                                <div class="depart-date">
                                    <p class="driver-lbl">Departure Date</p>
                                    <small class="driver-txt">March 21 2022, 11:00 AM</small>
                                </div>
    
                                <div class="return-date">
                                    <p class="driver-lbl">Return Date</p>
                                    <small class="driver-txt">March 22 2022, 12:00 PM</small>
                                </div>
    
                                <div class="fare">
                                    <p class="driver-lbl">Fare</p>
                                    <small class="driver-txt">780 PHP</small>
                                </div>

                            </div>

                    </div>

                    <div class="passenger-details">
                        <h4 class="driver-title transact-txt"> <iconify-icon inline icon="icons8:gender-neutral-user" width="26" height="26"></iconify-icon> Passenger Details</h4>
                        
                        <div class="passenger-cont">

                            <div class="name-pass">
                                <p class="driver-lbl">Passenger Name</p>
                                <small class="driver-txt">Michelle Baui</small>
                            </div>


                            <div class="other-pass">
                                <p class="driver-lbl">Other Passengers</p>
                                <ul class="others">
                                    <li><small class="driver-txt">Faye Diane Talay (Adult, 20, F)</small></li>
                                    <li><small class="driver-txt">Graziel Sorita (Adult, 21, F)</small></li>
                                    <li><small class="driver-txt">Kathleen Jean Viernes (Adult, 21, F)</small></li>
                                </ul>
                            </div>

                            <div class="contact-pass">
                                <p class="driver-lbl">Contact Information</p>
                                <small class="driver-txt">michellebaui@gmail.com</small> <br>
                                <small class="driver-txt">092111072022</small>
                            </div>
                            
                    
                        </div>

                    </div>

                    <div class="payment-details">
                        <h4 class="driver-title transact-txt"> <iconify-icon inline icon="fluent:payment-24-regular" width="26" height="26"></iconify-icon>Payment Details</h4>

                        <div class="payment-cont">

                            <div class="payment-mode">
                                <p class="driver-lbl">Mode of Payment</p>
                                <small class="driver-txt">GCash</small>
                            </div>

                            <div class="total-amt">
                                <p class="driver-lbl">Total Amount</p>
                                <small class="driver-txt">780 PHP</small>
                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>

        </div>


        

    </div>

@endsection