{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar') 



@section('content')



    <div class="list-container">

        <div class="search-bar">
            <input type="text" placeholder="Search Driver" id="search" autocomplete="off">
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

            {{-- {{ route('driver', ['dvr_id' => $driver->dvr_id]) }} --}}

            <a href="" class="list-info active">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

            {{-- active url by id --}}

            <a href="{{ route('commuter') }}" class="list-info">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    <img src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
                
                    <div class="label-txt">
                        <h4>Emerson Cardenas</h4>
                        <p>1141381081014</p>
                    </div>

                </label>

            </a>

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

            <h2 class="text-details">Driver Details</h2>
            
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

                    <h3 class="name-username">Emerson Cardenas  •  <span class="username">soncardenas</span></h3>

                    <div class="driver-identity">

                        <div class="driver-id">
                            <p class="driver-lbl">Driver ID</p>
                            <small class="driver-txt"><span class="iconify-inline" data-icon="fa6-solid:user-large" data-width="14" data-height="14"></span>1141381081014</small>
                        </div>

                        <div class="driver-contact">
                            <p class="driver-lbl">Contact Info</p>
                            <small class="driver-txt"><span class="iconify-inline" data-icon="ant-design:phone-filled" data-width="16" data-height="16"></span>091141382022</small>
                            <small class="driver-txt"><span class="iconify-inline" data-icon="eva:email-fill" data-width="17" data-height="17"></span>emerson@gmail.com</small>
                        </div>

                    </div>

                </div>

            </div>

            <div class="driver-personal-2">

                <div class="driver-assigned col">

                    <h4 class="driver-title">Assigned to</h4>

                    <div class="driver-van">

                        <div class="driver-van-img">
                            <img src="{{ asset('assets/van-pic.png')}}" alt="">
                        </div>

                        <div class="driver-van-detail">

                            <p class="driver-lbl">Model</p>
                            <small class="driver-txt">Commuter Bus</small>
                            <p class="driver-lbl">Plate Number</p>
                            <small class="driver-txt">SV30-0169266</small>
    
                        </div>

                    </div>
                </div>

                <div class="driver-gcash col">

                    <h4 class="driver-title">GCash Details</h4>
                    
                    <div class="driver-gcash-detail">
                        <p class="driver-lbl">Account Name</p>
                        <small class="driver-txt">Emerson Cardenas</small>
                        <p class="driver-lbl">Account Number</p>
                        <small class="driver-txt">099710090522</small>
                    </div>

                </div>

            </div>


        </div>

    </div>

@endsection