<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/vango-logo.svg') }}" type="image/x-icon">

    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.0/dist/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- Livewire reqs -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite([
    'resources/sass/sidebar.scss', 
    'resources/sass/home.scss', 
    'resources/sass/driver.scss', 
    'resources/sass/commuter.scss', 
    'resources/sass/van.scss', 
    'resources/sass/transaction.scss', 
    'resources/sass/route.scss',
    'resources/sass/settings.scss', 
    'resources/js/app.js'
    
    ])
    

    @livewire('livewire-ui-modal')

    @livewireStyles

</head>
<body>

    <div class="sidebar">
        <div class="logo-details">
            <img src="{{ asset('assets/vango-logo.svg') }}" class="icon" alt="VanGo Logo">
            
            <i class='bx bxs-arrow-to-right' id="btn" ></i>
        </div>
        <ul class="nav-list">
          {{-- <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li> --}}
          <li>
            <a href="{{ route('home') }}" class="{{ (request()->is('home')) ? 'active' : '' }}">
              <i class='bx bxs-dashboard'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
          <li>
           <a href="{{ url('driver/?id=1') }}" class="{{ (request()->is('driver')) ? 'active' : '' }}">
             <span class="iconify" data-icon="ri:steering-2-fill"></span>
             <span class="links_name">Driver</span>
           </a>
           <span class="tooltip">Driver</span>
         </li>
         <li>
           <a href="{{ url('commuter/?id=1') }}" class="{{ (request()->is('commuter')) ? 'active' : '' }}">
            <i class='bx bxs-user'></i>
             <span class="links_name">Commuter</span>
           </a>
           <span class="tooltip">Commuter</span>
         </li>
         <li>
           <a href="{{ url('van/?id=2') }}" class="{{ (request()->is('van')) ? 'active' : '' }}">
             <span class="iconify" data-icon="fa6-solid:van-shuttle"></span>
             <span class="links_name">Van</span>
           </a>
           <span class="tooltip">Van</span>
         </li>
         
         <li>
           <a href="{{ route('transaction') }}" class="{{ (request()->is('transaction')) ? 'active' : '' }}">
             <span class="iconify" data-icon="fontisto:ticket"></span>
             <span class="links_name">Transaction</span>
           </a>
           <span class="tooltip">Transaction</span>
         </li>
         <li>
           <a href="{{ url('route/?id=1') }}" class=" routes {{ (request()->is('route')) ? 'active' : '' }}">
             <span class="iconify loc" data-icon="ci:location"></span>
             <span class="links_name">Route</span>
           </a>
           <span class="tooltip">Route</span>
         </li>
         
         <li>
           <a href="{{ route('settings') }}" class="{{ (request()->is('settings')) ? 'active' : '' }}">
             <span class="iconify" data-icon="ci:settings-filled"></span>
             <span class="links_name">Settings</span>
           </a>
           <span class="tooltip">Settings</span>
         </li>
         
        
         {{-- <li>
           <a href="#">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Setting</span>
           </a>
           <span class="tooltip">Setting</span>
         </li> --}}
         <li class="profile">
             <div class="profile-details">
               
             </div>
             <a href="{{ route('logout') }}"><i class='bx bx-log-out' id="log_out" ></i></a>
         </li>
        </ul>
      </div>

      <section class="home-section">

        @yield('content')

      </section>

      <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
    
      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
      });
    
      // searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
      //   sidebar.classList.toggle("open");
      //   menuBtnChange(); //calling the function(optional)
      // });
    
      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
       if(sidebar.classList.contains("open")){
         closeBtn.classList.replace("bxs-arrow-to-right", "bxs-arrow-to-left");//replacing the iocns class
       }else {
         closeBtn.classList.replace("bxs-arrow-to-left","bxs-arrow-to-right");//replacing the iocns class
       }
      }
      </script>

      
    
    @livewireScripts
    
    
</body>
</html>