@extends('layouts.sidebar')

@section('content')

<div class="van">

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



            @foreach ($vans as $vh)

            <a href="{{ route('van', ['id' => $vh->id]) }}"
                class="list-info @if ( $vh->id == $vhcl->id ) active @endif">

                <input type="checkbox" name="" id="{{ $vh->id }}">

                <label for="{{ $vh->id }}">

                    <div class="label-img">
                        <img src="{{ asset('assets/van-pic.png') }}" width=50 height="50" alt="">
                    </div>

                    <div class="label-txt">
                        <h4>{{$vh->brand}} {{ $vh->model }}</h4>
                        <p>{{ $vh->plateNo }}</p>
                    </div>

                </label>

            </a>

            @endforeach

            <div class="pagination">
                <ul class="pagenum">
                    <li class="page-item arrow"><a href=""><span class="iconify"
                                data-icon="ic:round-keyboard-double-arrow-left" data-width="25"
                                data-height="25"></span></a></li>
                    <li class="page-item num"><a href="">1</a></li>
                    <li class="page-item num"><a href="">2</a></li>
                    <li class="page-item num"><a href="">3</a></li>
                    <li class="page-item num"><a href="">4</a></li>
                    <li class="page-item num"><a href="">5</a></li>
                    <li class="page-item num"><a href="">6</a></li>
                    <li class="page-item arrow"><a href=""><span class="iconify"
                                data-icon="ic:round-keyboard-double-arrow-right" data-width="25"
                                data-height="25"></span></a></li>
                </ul>
            </div>

        </div>


    </div>

    @include('layouts.profile')

    <div class="content-details">

        {{-- view details --}}


        <div class="content-head">

            <h2 class="text-details">Van Details</h2>

            <div class="action">

                <a href=""><i class='bx bxs-edit'></i></a>
                <a onclick='Livewire.emit("openModal", "van.create")'><i class='bx bx-plus-circle'></i></a>
            </div>

        </div>

        <div class="content-body">

            <div class="van-details">

                <div class="van-gallery">

                    <div class="van-photo photo-main">
                        <img src="{{ asset('assets/toyota-hiace.jpg') }}">
                    </div>

                    <div class="van-photo photo-main">
                        <img src="{{ asset('assets/toyota-hiace2.jpg') }}">
                    </div>

                    <div class="van-photo photo-main">
                        <img src="{{ asset('assets/toyota-hiace3.jpg') }}">
                    </div>

                    <div class="van-photo photo-main">
                        <img src="{{ asset('assets/toyota-hiace4.jpg') }}">
                    </div>

                    <div class="thumbnail">

                        <div class="column">
                            <img class="demo cursor" src="{{ asset('assets/toyota-hiace.jpg') }}" style="width:100%"
                                onclick="currentSlide(1)" alt="The Woods">
                        </div>

                        <div class="column">
                            <img class="demo cursor" src="{{ asset('assets/toyota-hiace2.jpg') }}" style="width:100%"
                                onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>

                        <div class="column">
                            <img class="demo cursor" src="{{ asset('assets/toyota-hiace3.jpg') }}" style="width:100%"
                                onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>

                        <div class="column last">
                            <img class="demo cursor" src="{{ asset('assets/toyota-hiace4.jpg') }}" style="width:100%"
                                onclick="currentSlide(4)" alt="Northern Lights">
                        </div>

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


                    {{-- dummy data --}}

                    @for ($i = 0; $i < 6; $i++) <tr class="table-data" onclick="">
                        {{-- <td>12345678{{$i}}</td> --}}
                        <td>Tuguegarao to Kalinga</td>
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