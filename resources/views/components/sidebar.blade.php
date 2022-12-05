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
    <a href="{{ url('driver/?id='.$driver_id) }}" class="{{ (request()->is('driver')) ? 'active' : '' }}">
      <span class="iconify" data-icon="ri:steering-2-fill"></span>
      <span class="links_name">Driver</span>
    </a>
    <span class="tooltip">Driver</span>
  </li>
  <li>
    <a href="{{ url('commuter/?id='.$commuter_id) }}" class="{{ (request()->is('commuter')) ? 'active' : '' }}">
      <i class='bx bxs-user'></i>
      <span class="links_name">Commuter</span>
    </a>
    <span class="tooltip">Commuter</span>
  </li>
  <li>
    <a href="{{ url('van/?id='.$vehicle_id) }}" class="{{ (request()->is('van')) ? 'active' : '' }}">
      <span class="iconify" data-icon="fa6-solid:van-shuttle"></span>
      <span class="links_name">Van</span>
    </a>
    <span class="tooltip">Van</span>
  </li>
  
  <li>
    <a href="{{ url('transaction/?id='.$transaction_id) }}" class="{{ (request()->is('transaction')) ? 'active' : '' }}">
      <span class="iconify" data-icon="fontisto:ticket"></span>
      <span class="links_name">Transaction</span>
    </a>
    <span class="tooltip">Transaction</span>
  </li>
  <li>
    <a href="{{ url('route/?id='.$route_id) }}" class=" routes {{ (request()->is('route')) ? 'active' : '' }}">
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

<script lang="javascript">
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