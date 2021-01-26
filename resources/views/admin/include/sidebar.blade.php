	<!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo ">
      <a href="{{route('dashboard')}}">
       <img src="{{asset('storage/logo/small_logo.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text"> Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu">
       
      <li class="sidebar-header">ADMIN NAVIGATION</li>
         <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="#"><i class="zmdi zmdi-forward"></i> Admin</a></li>
      <li><a href="#"><i class="zmdi zmdi-forward"></i> Supplier</a></li> 
    </ul>
      </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Categories Management</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('categories')}}"><i class="zmdi zmdi-forward"></i> Categories & Product</a></li>
        </ul>
       </li>
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>User Management</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('customers')}}"><i class="zmdi zmdi-forward"></i> Customers</a></li>
          <li><a href="{{route('suppliers')}}"><i class="zmdi zmdi-forward"></i> Suppliers</a></li>
        </ul>
       </li>
        <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Supplier Management</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Commissions Settings</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Create Vouchers</a></li>
        </ul>
       </li>
         <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Voucher Management</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Managing banners </a></li>
        </ul>
       </li>
        <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Reports</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Sales Reports</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Suppliers Sales Reports</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Voucher Reports</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Withdrawals Reports</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Suppliers Statements</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Abounded Carts Report</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Vouchers View Analytics</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Conversions Report</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Places Reports</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Customer traffic Analysis</a></li>
        </ul>
       </li>
        <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Promotional Module</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Time based Promotions </a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Create Promotion Banners</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> location based Promotions</a></li>
          <li><a href="#"><i class="zmdi zmdi-forward"></i> Discounts and Promo</a></li>
        </ul>
       </li>
       <li class="sidebar-header">HOME NAVIGATION</li>
         <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Home Management</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="#"><i class="zmdi zmdi-forward"></i> Demo1</a></li>
      <li><a href="#"><i class="zmdi zmdi-forward"></i> Demo2</a></li> 
    </ul>
      </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Content Management</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('static-pages')}}"><i class="zmdi zmdi-forward"></i> Static Pages</a></li>
    </ul>
      </li>



    </ul>
   
   </div>
   <!--End sidebar-wrapper-->