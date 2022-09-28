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
            <small>Showing results 1-{{ $count }} of {{ $count }}</small>
        </div>

        {{-- {{ route('driver', ['dvr_id' => $driver->dvr_id]) }} --}}

        @foreach ($drivers as $driver)

        <a href="{{ route('driver', ['id' => $driver->dvr_id]) }}" class="list-info  
            @if ( $driver->dvr_id == $dvr->dvr_id ) active @endif">

            <input type="checkbox" name="" id="{{ $driver->username }}">

            <label for="{{ $driver->dvr_un }}">

                <img class="lbl-img" src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">

                <div class="label-txt">
                    <h4>{{ $driver->fname}} {{ $driver->lname}}</h4>
                    <p>{{ $driver->email }}</p>
                </div>

            </label>

        </a>

        @endforeach


        <div class="pagination">
            <ul class="pagenum">
                <li class="page-item arrow"><a href=""><span class="iconify"
                            data-icon="ic:round-keyboard-double-arrow-left" data-width="25" data-height="25"></span></a>
                </li>
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
    
    <div class="flash-message" id="flash">
        {{-- view details --}}
        @if (session()->has('success'))
        <div class="success-msg msg">
            <div class="msg-txt">
                <iconify-icon inline icon="bi:check-circle" width="17" height="17"></iconify-icon>
                <span class>{{ session('success') }}</span>
            </div>
                <iconify-icon icon="akar-icons:circle-x" class="dismiss" onclick="closeMsg()" width="19" height="19"></iconify-icon>
        </div>
        @endif
    </div>


    <div class="content-head">

        <h2 class="text-details">Driver Details</h2>

        <div class="action">

            <i class='bx bxs-edit'></i>
            <a onclick="Livewire.emit('openModal', 'driver.create')"><i class='bx bx-plus-circle'></i></a>
            {{-- <form action="{{ route('driver', ['id' => $dvr->dvr_id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form> --}}

        </div>

    </div>

    <div class="content-body">

        <div class="driver-personal">

            <div class="driver-avatar">
                <img src="{{ asset('assets/driver-pic.png') }}" width=100 height=100 alt="">
            </div>

            <div class="driver-basicinfo">

                <h3 class="name-username">{{ $dvr->fname }} {{ $dvr->lname }} • <span title="Username"
                        class="username">{{ $dvr->username}}</span></h3>

                <div class="driver-identity">

                    <div class="driver-id ">
                        <p class="driver-lbl">Driver ID</p>
                        <small class="driver-txt">
                            <iconify-icon inline icon="fa6-solid:user-large" width="15" height="15"></iconify-icon>{{
                            $dvr->dvr_id }}
                        </small>
                    </div>

                    <div class="driver-contact">
                        <p class="driver-lbl">Contact Info</p>
                        <small class="driver-txt">
                            <iconify-icon inline icon="ant-design:phone-filled" width="18" height="18"></iconify-icon>{{
                            $dvr->phone }} @empty($dvr->phone) N/A @endempty
                        </small>
                        <small class="driver-txt">
                            <iconify-icon inline icon="ic:baseline-email" width="18" height="18"></iconify-icon>{{
                            $dvr->email }}
                        </small>
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
                    <small class="driver-txt">{{ $dvr->accName }}</small>
                    <p class="driver-lbl">Account Number</p>
                    <small class="driver-txt">{{ $dvr->accNumber }}</small>
                </div>

            </div>

        </div>


    </div>

</div>

<script type="text/javascript">
    function closeMsg() {
        document.getElementById("flash").style.display = "none";
    }
</script>

@endsection