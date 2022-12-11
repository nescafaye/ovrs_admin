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

        <div class="results">
            <small>Showing results {{ $drivers->firstItem() }}-{{ $drivers->lastItem() }} of {{ $drivers->total() }}</small>
        </div>

        <div class="pagination">
            <div wire:loading class="loading"><iconify-icon icon="eos-icons:loading" width="30" height="30"></iconify-icon></div>
            {{ $drivers->links() }}
        </div>

        @switch($routeName)

            @case('driver')

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
            

            @default
                
        @endswitch

        <div class="pagination">
            {{-- {{ $drivers->links('pagination::simple-tailwind') }} --}}
        </div>

    </div>

</div>