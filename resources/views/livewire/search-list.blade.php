<div class="list-container">

    <div class="search-bar">
        <input type="text" wire:model="search" placeholder="Search {{ $routeName }}" id="search" autocomplete="off">
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

        @switch($routeName)

            @case('driver')

            <div class="results">
                <small>Showing results {{ $drivers->firstItem() }}-{{ $drivers->lastItem() }} of {{ $drivers->total() }}</small>
            </div>
    
            <div class="pagination">
                <div wire:loading.delay class="loading"><iconify-icon icon="eos-icons:loading" width="30" height="30"></iconify-icon></div>
                {{ $drivers->links() }}
            </div>

            @foreach ($drivers as $driver)

            <a href="{{ route('driver', ['id' => $driver->dvr_id, $drivers->getPageName() => $drivers->currentPage(), 'search' => $search]) }}" class="list-info  
                @if ( $driver->dvr_id == $dvr->dvr_id ) active @endif">
    
                <input type="checkbox" name="" id="{{ $driver->username }}">
    
                <label for="{{ $driver->username }}">
    
                    <img class="lbl-img" src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
    
                    <div class="label-txt" id="{{ $driver->dvr_id }}">
                        <h4>{{ $driver->fname}} {{ $driver->lname}}</h4>
                        <p>{{ $driver->email }}</p>
                    </div>
    
                </label>
    
            </a>
    
            @endforeach
                
            @break

            @case('commuter')

            <div class="results">
                <small>Showing results {{ $commuters->firstItem() }}-{{ $commuters->lastItem() }} of {{ $commuters->total() }}</small>
            </div>
    
            <div class="pagination">
                <div wire:loading class="loading"><iconify-icon icon="eos-icons:loading" width="30" height="30"></iconify-icon></div>
                {{ $commuters->links() }}
            </div>

            @foreach ($commuters as $commuter)

            <a href="{{ route('commuter', ['id' => $commuter->comm_id, $commuters->getPageName() => $commuters->currentPage()]) }}"
            class="list-info @if ( $commuter->comm_id == $comm->comm_id ) active @endif">

            <input type="checkbox" name="" id="{{ $commuter->comm_id }}">

            <label for="{{ $commuter->comm_id }}">

                <img class="lbl-img" src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">

                <div class="label-txt">
                    <h4>{{$commuter->fname}} {{$commuter->lname}}</h4>
                    <p>{{$commuter->email}}</p>
                </div>

            </label>

            </a>

            @endforeach
                
            @break

            @case('van')

            <div class="results">
                <small>Showing results {{ $vans->firstItem() }}-{{ $vans->lastItem() }} of {{ $vans->total() }}</small>
            </div>
    
            <div class="pagination">
                <div wire:loading class="loading"><iconify-icon icon="eos-icons:loading" width="30" height="30"></iconify-icon></div>
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
                
            @break

            @case('transaction')

            <div class="results">
                <small>Showing results {{ $transactions->firstItem() }}-{{ $transactions->lastItem() }} of {{ $transactions->total() }}</small>
            </div>
    
            <div class="pagination">
                {{ $transactions->links() }}
            </div>
            
            @foreach ($transactions as $transaction)

            <a href="{{ route('transaction', ['id' => $transaction->id, $transactions->getPageName() => $transactions->currentPage()]) }}" class="list-info  
                @if ( $transaction->id == $transact->id ) active @endif">
    
                <input type="checkbox" name="" id="{{ $transaction->transactionNo }}">
    
                <label for="{{ $transaction->transactionNo }}">
    
                    <img class="lbl-img" src="{{ asset('assets/driver-pic.png') }}" width=50 height="50" alt="">
    
                    <div class="label-txt">
                        {{-- routeNo --}}
                        <h4>{{ $transaction->commuterName}}</h4> 
                        <p>{{ $transaction->transactionNo }}</p>
                    </div>
    
                </label>
    
            </a>
    
            @endforeach
                
            @break

            @case('route')

            <div class="results">
                <small>Showing results {{ $routes->firstItem() }}-{{ $routes->lastItem() }} of {{ $routes->total() }}</small>
            </div>
    
            <div class="pagination">
                {{ $routes->links() }}
            </div>

           @foreach ($routes as $route)
               
           <a href="{{ route('route', ['id' => $route->id, $routes->getPageName() => $routes->currentPage()]) }}"
            class="list-info @if ( $route->id == $rt->id ) active @endif">

                <input type="checkbox" name="" id="select-list">

                <label for="select-list">
                    
                    {{-- <div class="label-img">
                        <img src="{{ asset('assets/van-pic.png') }}" width=50 height="50" alt="">
                    </div> --}}
                
                    <div class="label-txt">
                        <h4>{{ $route->routeTitle }}</h4>
                        <p>{{ $route->routeNo }}</p>
                    </div>

                </label>

            </a>

            @endforeach
                
            @break
            

            @default
                
        @endswitch

        <div class="pagination">
            {{-- {{ $drivers->links('pagination::simple-tailwind') }} --}}
        </div>

    </div>

</div>

