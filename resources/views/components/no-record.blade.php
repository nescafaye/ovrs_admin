@include('layouts.profile')

<div class="no-records">

  <div class="no-record-img">
    <img src="{{ asset('assets/empty-records.svg') }}" width="350" height="350" alt="">
  </div>

<div class="no-record-txt">

    <div class="no-record-title">
        No records found :-<
    </div>
      
      {{-- change buttons based on the route/url --}}

      @switch(Route::currentRouteName())
        @case('driver')
          <div class="no-record-subtitle">
            No drivers have been recorded.
          </div>
        @break
        
        @case('commuter')
          <div class="no-record-subtitle">
            There are no registered users in your system yet.
          </div>
        @break

        @case('van')
          <div class="no-record-subtitle">
            No vans have been recorded.
          </div>
        @break

        @case('transaction')
          <div class="no-record-subtitle">
            No transactions have been recorded.
          </div>
        @break

        @case('route')
          <div class="no-record-subtitle">
            No routes have been recorded.
          </div>
        @break 
          
      @endswitch

    </div>

</div>