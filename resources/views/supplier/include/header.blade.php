    <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top ">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();"><i class="icon-menu menu-icon"></i></a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input class="form-control" placeholder="Enter keywords" type="text"> <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                         <li class="nav-item dropdown-lg">
                        <a href="#!" class="nav-link" onclick="toggleFullScreen()">
                          <i class="fa fa-arrows-alt"></i>
                        </a>
                     
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">You have 12 new messages <span class="badge badge-light">12</span></li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img alt="user avatar" class="align-self-start mr-3" src="{{asset('admin/images/avatars/avatar-5.png')}}"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p><small>Today, 4:10 PM</small>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img alt="user avatar" class="align-self-start mr-3" src="{{asset('admin/images/avatars/avatar-6.png')}}"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Sara Jen</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p><small>Yesterday, 8:30 AM</small>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img alt="user avatar" class="align-self-start mr-3" src="{{asset('admin/images/avatars/avatar-7.png')}}"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p><small>5/11/2018, 2:50 PM</small>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img alt="user avatar" class="align-self-start mr-3" src="{{asset('admin/images/avatars/avatar-8.png')}}"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet.</p><small>1/11/2018, 2:50 PM</small>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item text-center">
                                    <a href="javaScript:void();">See All Messages</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">You have 14 Notifications <span class="badge badge-info">14</span></li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Registered Users</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Received Orders</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                    <div class="media">
                                        <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Updates</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div></a>
                                </li>
                                <li class="list-group-item text-center">
                                    <a href="javaScript:void();">See All Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"><i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"><i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"><i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"><i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#"><span class="user-profile"><img alt="user avatar" class="img-circle" src="@if(Auth::guard('supplier')->user()->image){{asset('images/supplier/'.Auth::guard('supplier')->user()->image)}} @else {{asset('admin/images/avatars/avatar-13.png')}}@endif"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="{{route('supplier-profile')}}">
                                <div class="media">
                                    <div class="avatar"><img alt="user avatar" class="align-self-start mr-3" src="@if(Auth::guard('supplier')->user()->image){{asset('images/supplier/'.Auth::guard('supplier')->user()->image)}} @else {{asset('admin/images/avatars/avatar-13.png')}}@endif"></div>
                                  
                                    <div class="media-body">
                                        <p class="user-subtitle">Supplier</p>
                                        <h6 class="mt-2 user-title">{{ Auth::guard('supplier')->user()->name }}</h6>
                                        <p class="user-subtitle">{{ Auth::guard('supplier')->user()->email }}</p>
                                    </div>
                                </div></a>
                            </li>
                            <li class="dropdown-divider"></li>
                       
                            <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="{{route('supplier-logout')}}"> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header><!--End topbar header-->