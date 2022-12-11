@extends('layouts.sidebar')

@section('content')

@if ($count == 0)

    <x-no-record/>
    
@else

    <div class="transaction">

        @livewire('search-list', ['transact' => $transact, 'routeName' => Route::currentRouteName()])

        @include('layouts.profile')

        <div class="content-details">

            <div class="content-head">

                <h2 class="text-details">Transaction Details</h2>
                
    
            </div>

            <div class="content-body">

                <div class="transact-head">

                    <div class="transact-status">
                        @if ($dateNow > $transact->departureTime)
                            Upcoming
                        @else
                            Completed
                        @endif
                    </div>

                    <div class="transact-title">
                        <p class="transact-route">{{ $transact->route }}</p>
                        <small class="transact-time">{{ $transact->transactionTime }}</small>
                    </div>

                </div>

                <div class="transact-body">
                    
                    <div class="reserve-details">
                        <h4 class="driver-title transact-txt"> <iconify-icon inline icon="fluent:ticket-horizontal-20-regular" class="tix" width="25" height="25"></iconify-icon> Reservation Details</h4>

                            <div class="reserve-row">

                                <div class="trans-no">
                                    <p class="driver-lbl">Transaction Number</p>
                                    <small class="driver-txt">{{ $transact->transactionNo }}</small>
                                </div>
        
                                <div class="seat-no">
                                    <p class="driver-lbl">Seat</p>
                                    <small class="driver-txt">{{ $transact->seatsTaken }}</small>
                                </div>
    
                                <div class="seat-no">
                                    <p class="driver-lbl">Type</p>
                                    <small class="driver-txt">Roundtrip</small>
                                </div>

                            </div>

                            <div class="reserve-row">

                                <div class="depart-date">
                                    <p class="driver-lbl">Departure Date</p>
                                    {{-- <small class="driver-txt">March 21 2022, 11:00 AM</small> --}}
                                    <small class="driver-txt">{{ date('Y-m-d', strtotime($transact->departureDate)) }}</small>
                                </div>
    
                                <div class="return-date">
                                    <p class="driver-lbl">Return Date</p>
                                    <small class="driver-txt">{{ date('Y-m-d', strtotime($transact->returnDate)) }}</small>
                                </div>
    
                                <div class="fare">
                                    <p class="driver-lbl">Fare</p>
                                    <small class="driver-txt">{{ $transact->fare }} PHP</small>
                                </div>

                            </div>

                    </div>

                    <div class="passenger-details">
                        <h4 class="driver-title transact-txt"> <iconify-icon inline icon="icons8:gender-neutral-user" width="26" height="26"></iconify-icon> Passenger Details</h4>
                        
                        <div class="passenger-cont">

                            <div class="name-pass">
                                <p class="driver-lbl">Passenger Name</p>
                                <small class="driver-txt">{{ $transact->commuterName }}</small>
                            </div>


                            {{-- <div class="other-pass">
                                <p class="driver-lbl">Other Passengers</p>
                                <ul class="others">
                                    <li><small class="driver-txt">Faye Diane Talay (Adult, 20, F)</small></li>
                                    <li><small class="driver-txt">Graziel Sorita (Adult, 21, F)</small></li>
                                    <li><small class="driver-txt">Kathleen Jean Viernes (Adult, 21, F)</small></li>
                                </ul>
                            </div> --}}

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
                                <small class="driver-txt">{{ $transact->paymentMethod }}</small>
                            </div>

                            <div class="total-amt">
                                <p class="driver-lbl">Total Amount</p>
                                <small class="driver-txt">{{ $transact->totalAmount }} PHP</small>
                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>

        </div>


        

    </div>

@endif

@endsection