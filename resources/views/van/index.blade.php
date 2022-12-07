@extends('layouts.sidebar')

@section('content')

@if ($count == 0)

    <x-no-record/>
    
@else

<div class="van">

    <div class="list-container">

        <div class="search-bar">
            <input type="text" placeholder="Search {{ $placeholder }}" id="search" autocomplete="off">
            <iconify-icon icon="bi:filter-right" width="25" height="25"></iconify-icon>
        </div>

        <div class="select">

            <div class="checkbox">
                <input type="checkbox" name="" id="select">
                <label for="select">Select all</label>
            </div>
    
            <x-option/>
    
        </div>

        <div class="list">

            <div class="results">
                <small>Showing results {{ $vans->firstItem() }}-{{ $vans->lastItem() }} of {{ $vans->total() }}</small>
            </div>
    
            <div class="pagination">
                {{ $vans->links() }}
            </div>

            @foreach ($vans as $vh)

            <a href="{{ route('van', ['id' => $vh->id, $vans->getPageName() => $vans->currentPage()]) }}"
                class="list-info @if ( $vh->id == $vhcl->id ) active @endif">

                <input type="checkbox" name="" id="{{ $vh->id }}">

                <label for="{{ $vh->id }}">

                    @php
                        $images = explode('|', $vh->vanImages);
                    @endphp

                    @foreach ($images as $vanImage)

                        <div class="label-img">
                            <img src="{{ asset('storage/images/'. $vanImage) }}" alt="">
                        </div>

                        @break

                    @endforeach

                    <div class="label-txt">
                        <h4>{{$vh->brand}} {{ $vh->model }}</h4>
                        <p>{{ $vh->plateNo }}</p>
                    </div>

                </label>

            </a>

            @endforeach

            <div class="pagination">
                {{ $vans->links() }}
            </div>

        </div>


    </div>

    @include('layouts.profile')

    <div class="content-details">

        <x-flash-message/>

        <div class="content-head">

            <h2 class="text-details">Van Details</h2>

            <div class="action">

                <a onclick='Livewire.emit("openModal", "van.create")'><i class='bx bx-plus-circle'></i></a>
                <a onclick='Livewire.emit("openModal", "van.edit", {{ json_encode($vhcl) }})'><i class='bx bxs-edit'></i></a>
                {{-- <a href="{{ route('van.destroy', ['id' => $vhcl->id]) }}"><i class='bx bx-trash'></i></a> --}}
                <a onclick='Livewire.emit("openModal", "confirm", {{ json_encode(["id" => $vhcl->id, "routeName" => Route::currentRouteName()]) }})'><i class='bx bx-trash'></i></a>


            </div>

        </div>

        <div class="content-body">

            <div class="van-details">

                <div class="van-gallery">

                    @php
                        $images = explode('|', $vhcl->vanImages);
                    @endphp

                    @foreach ($images as $vanImage)

                        <div class="van-photo photo-main">
                            <img src="{{ asset('storage/images/'. $vanImage) }}">
                        </div>

                    @endforeach

                    <div class="thumbnail">

                        @foreach ($images as $vanImage)

                            <div class="column">
                                <img class="demo cursor" src="{{ asset('storage/images/'. $vanImage) }}" style="width:100%"
                                    onclick="currentSlide({{ $loop->iteration }})" alt="{{ $vhcl->model }}">
                            </div>               

                        @endforeach

                    </div>

                </div>

                <div class="van-info">

                    <div class="info-model">
                        <small class="driver-txt">Model</small>
                        <p class="driver-lbl van-lbl">{{ $vhcl->model }}</p>
                    </div>

                    <div class="info-price">
                        <small class="driver-txt">Assigned Driver</small>

                        @foreach ($assigned as $ass)
                        <p class="driver-lbl link"><a href="{{ route('driver', ['id' => $ass->dvr_id]) }}">{{
                                $ass->fname }} {{ $ass->lname }}</a></p>
                        @endforeach

                    </div>

                    <div class="info-num">

                        <div>
                            <small class="driver-txt">Rental Price</small>
                            <p class="driver-lbl van-lbl">{{ $vhcl->rentalPrice }} PHP</p>
                        </div>

                        <div>
                            <small class="driver-txt">Brand</small>
                            <p class="driver-lbl">{{ $vhcl->brand }}</p>
                        </div>

                        <div>
                            <small class="driver-txt">Vehicle Plate No</small>
                            <p class="driver-lbl">{{ $vhcl->plateNo }}</p>
                        </div>

                    </div>

                    <div class="info-amenities">
                        <small class="driver-txt">Amenities</small>
                        <p class="driver-lbl">{{ $vhcl->amenities }} @empty($vhcl->amenities) None @endempty</p>
                    </div>

                </div>

                <div class="van-specs">

                    <h4 class="driver-title">Specifications</h4>

                    <div class="van-specs-details">

                        <div>
                            <small class="driver-txt">Color</small>
                            <p class="driver-lbl">{{ $vhcl->color }}</p>
                        </div>

                        <div>
                            <small class="driver-txt">Transmission</small>
                            <p class="driver-lbl">{{ $vhcl->transmissionType }}</p>
                        </div>

                        <div>
                            <small class="driver-txt">Seating Capacity</small>
                            <p class="driver-lbl">{{ $vhcl->seatCapacity }}</p>
                        </div>

                    </div>

                </div>

                <div class="van-desc">

                    <h4 class="driver-title">Description</h4>
                    <p class="driver-lbl desc">{{ $vhcl->desc }}</p>

                </div>

            </div>


        </div>

        <div class="list-table">

            <h4 class="driver-title">Routes</h4>

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
                            <option value="Route">Route Name</option>
                            <option value="Departure Date">Departure Date</option>
                            <option value="Return Date">Return Date</option>
                            {{-- <option value="Seats">Seats</option>
                            <option value="Fare">Fare</option>
                            <option value="Transaction Time">Transaction Time</option> --}}
                        </select>

                    </div>

                </div>

                <div class="add-btn">
                    <button class="btn">
                        <iconify-icon inline icon="akar-icons:plus" width="16" height="16"></iconify-icon>&nbsp;Add
                        route
                    </button>
                </div>

            </div>

            <div class="table">


                <table>
                    <tr class="table-head">
                        {{-- <th>Transaction No</th> --}}
                        <th>Route Name</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        {{-- <th>Seats</th>
                        <th>Fare</th>
                        <th>Transaction time</th> --}}
                    </tr>


                    @foreach ($vhcl->routes as $route)
                    
                        <tr class="table-data">
                        {{-- <td>12345678{{$i}}</td> --}}
                        <td>{{ $route->routeTitle }}</td>
                        <td>{{ $route->pivot->departureDate }}</td>
                        <td>{{ $route->pivot->returnDate }} @empty($route->pivot->returnDate) None @endempty </td>
                        <td style="color: #008080"><a href="{{ route('route', ['id' => $route->id]) }}">Show</a></td>
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

@endif

<script>

    // Image slider

    let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }
        
        function showSlides(n) {

        let i;
        let slides = document.getElementsByClassName("van-photo");
        let dots = document.getElementsByClassName("demo");
        //   let captionText = document.getElementById("caption");

        if (n > slides.length) {
            slideIndex = 1
            }

        if (n < 1) {
            slideIndex = slides.length
            }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace("active", "");
        }

        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }

</script>


@endsection