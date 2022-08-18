@extends('layouts.app')
@extends('layouts.sidebar')



@section('content')


    <div class="driver-container">

        <div class="search-bar">
            <input type="text" placeholder="Search driver" id="search" autocomplete="off">
        </div>

        <div class="select-all">

            <div class="checkbox">
                <input type="checkbox" name="" id="select">
                <label for="select">Select all</label>
            </div>

            <span class="iconify" data-icon="charm:menu-kebab"></span>

        </div>

        <div class="driver-list">

            <small>Showing results 1-50 of 250</small>

            <br><br>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver">

                <label for="select-driver">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="driver-info">

                <input type="checkbox" name="" id="select-driver1">

                <label for="select-driver1">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="driver-nameid">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </div>

            <div class="pagination">
                123231432
            </div>

        </div>



    </div>

    <div class="driver-details">

        {{-- @include('layouts.profile') --}}

        <h2>Driver Details</h2>
    </div>

@endsection