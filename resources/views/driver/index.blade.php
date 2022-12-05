@extends('layouts.sidebar')


@section('content')


<div class="list-container">
    

    <div class="search-bar">
        <input type="text" placeholder="Search Driver" id="search" autocomplete="off">
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
            <small>Showing results {{ $drivers->firstItem() }}-{{ $drivers->lastItem() }} of {{ $drivers->total() }}</small>
        </div>

        <div class="pagination">
            {{ $drivers->links() }}
        </div>

        @foreach ($drivers as $driver)

        <a href="{{ route('driver', ['id' => $driver->dvr_id, $drivers->getPageName() => $drivers->currentPage()]) }}" class="list-info  
            @if ( $driver->dvr_id == $dvr->dvr_id ) active @endif">

            <input type="checkbox" name="" id="{{ $driver->username }}">

            <label for="{{ $driver->dvr_un }}">

                <img class="lbl-img" src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">

                <div class="label-txt" id="{{ $driver->dvr_id }}">
                    <h4>{{ $driver->fname}} {{ $driver->lname}}</h4>
                    <p>{{ $driver->email }}</p>
                </div>

            </label>

        </a>

        @endforeach

        <div class="pagination">
            {{ $drivers->links() }}
        </div>

    </div>

</div>

@include('layouts.profile')

<div class="content-details">

    <x-flash-message/>

    <div class="content-head">

        <h2 class="text-details">Driver Details</h2>

        <div class="action">

            <a onclick='Livewire.emit("openModal", "driver.create")'><i class='bx bx-plus-circle'></i></a>
            <a onclick='Livewire.emit("openModal", "driver.edit",  {{ json_encode($dvr) }})'><i class='bx bxs-edit'></i></a>
            {{-- <a href="{{ route('driver.destroy', ['id' => $dvr->dvr_id]) }}"><i class='bx bx-trash'></i></a> --}}
            <a onclick='Livewire.emit("openModal", "confirm", {{ json_encode(["id" => $dvr->dvr_id, "routeName" => Route::currentRouteName()]) }})'><i class='bx bx-trash'></i></a>
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
                        &nbsp;
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

                <h4 class="driver-title">Other information</h4>

                <div class="driver-van">


                    <div class="driver-van-detail">

                        <p class="driver-lbl">Gender</p>
                        <small class="driver-txt">{{ $dvr->gender }} @empty($dvr->gender) N/A @endempty</small>

                        <p class="driver-lbl">Assigned Van</p>

                        {{-- @foreach ($assigned as $ass)
                            <small class="driver-txt link">
                                <a href="{{ route('van', ['id' => $ass->id]) }}">{{ $ass->brand }} {{ $ass->model }}</a>
                            </small>
                        @endforeach --}}

                    </div>

                </div>
            </div>

            <div class="driver-gcash col">

                <h4 class="driver-title">GCash Details</h4>

                <div class="driver-gcash-detail">
                    <p class="driver-lbl">Account Name</p>
                    <small class="driver-txt">{{ $dvr->accName }} @empty($dvr->accName) N/A @endempty</small>
                    <p class="driver-lbl">Account Number</p>
                    <small class="driver-txt">{{ $dvr->accNumber }} @empty($dvr->accNumber) N/A @endempty</small>
                </div>

            </div>

        </div>


    </div>

</div>

@endsection