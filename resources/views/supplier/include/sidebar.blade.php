	<!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo ">
      <a href="{{route('dashboard')}}">
       <img src="{{asset('storage/logo/small_logo.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text"> Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="{{route('dashboard')}}" class="waves-effect ">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->