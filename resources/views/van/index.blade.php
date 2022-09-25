@extends('layouts.sidebar')



@section('content')

    <div class="van">

        <div class="list-container">

            <div class="search-bar">
                <input type="text" placeholder="Search {{ $placeholder }}" id="search" autocomplete="off">
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
                        
                        <div class="label-img">
                            <img src="{{ asset('assets/van-pic.png') }}" width=50 height="50" alt="">
                        </div>
                    
                        <div class="label-txt">
                            <h4>Super Grandia</h4>
                            <p>SV30-0169</p>
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
    
            {{-- view details  --}}
    
    
            <div class="content-head">

                <h2 class="text-details">Van Details</h2>
                
                <div class="action">
    
                    <i class='bx bxs-edit'></i>
                    <a href=""><i class='bx bx-plus-circle' ></i></a>
    
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
                                <img class="demo cursor" src="{{ asset('assets/toyota-hiace.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                            </div>

                            <div class="column">
                                <img class="demo cursor" src="{{ asset('assets/toyota-hiace2.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                            </div>

                            <div class="column">
                                <img class="demo cursor" src="{{ asset('assets/toyota-hiace3.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                            </div>

                            <div class="column last">
                                <img class="demo cursor" src="{{ asset('assets/toyota-hiace4.jpg') }}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                            </div>

                        </div>

                    </div>

                    <div class="van-info">

                        <div class="info-model">
                            <small class="driver-txt">Model</small>
                            <p class="driver-lbl van-lbl">Super Grandia</p>
                        </div>

                        <div class="info-price">
                            <small class="driver-txt">Rental Price</small>
                            <p class="driver-lbl van-lbl">2,800 PHP</p>
                        </div>

                        <div class="info-num">

                            <div>
                                <small class="driver-txt">Brand</small>
                                <p class="driver-lbl">Toyota</p>
                            </div>

                            <div>
                                <small class="driver-txt">Chassis No</small>
                                <p class="driver-lbl">SV30-0169266</p>
                            </div>

                            <div>
                                <small class="driver-txt">Vehicle Plate No</small>
                                <p class="driver-lbl">AOA-1234</p>
                            </div>
                            
                        </div>

                        <div class="info-amenities">
                            <small class="driver-txt">Amenities</small>
                            <p class="driver-lbl">Luggage, Mutimedia, WiFi, Child Seat</p>
                        </div>

                    </div>

                    <div class="van-specs">

                        <h4 class="driver-title">Specifications</h4>

                        <div class="van-specs-details">

                            <div>
                                <small class="driver-txt">Color</small>
                                <p class="driver-lbl">Black</p>
                            </div>

                            <div>
                                <small class="driver-txt">Transmission</small>
                                <p class="driver-lbl">Automatic</p>
                            </div>

                            <div>
                                <small class="driver-txt">Luggage</small>
                                <p class="driver-lbl">5</p>
                            </div>

                            <div>
                                <small class="driver-txt">Seating Capacity</small>
                                <p class="driver-lbl">12</p>
                            </div>

                        </div>

                    </div>

                    <div class="van-desc">

                        <h4 class="driver-title">Description</h4>
                        <p class="driver-lbl desc">Choose this car rental if you want to have a family trip with a great fuel savings.</p>

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
                        <button class="btn">Add route<span class="iconify-inline" data-icon="akar-icons:plus"></span></button>
                    </div>
    
                </div>
    
                <div class="table">
    
                    <table>
                        <tr class="table-head">
                            {{-- <th>Transaction  No</th> --}}
                            <th>Route Name</th>
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