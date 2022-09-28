@extends('layouts.app')

@section('auth')

<div class="container-fluid">

    <div class="form-container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <!-- <img src="../assets/vango-logo.png" width="90" height="60" class="logo-head rounded mx-auto d-block" alt="VanGo logo"> -->

        @livewire('login-validate')
        
    </div>

</div>


@endsection
