@extends('layouts.sidebar')



@section('content')
    //try lang mag comment
    <div class="container">

        @foreach($drivers as $driver)
        <p>{{ $driver->dvr_fname }}</p>
        <p>{{ $driver->dvr_mail }}</p>
        <p>{{ $driver->dvr_un }}</p>
        <br>
        @endforeach

    </div>

@endsection