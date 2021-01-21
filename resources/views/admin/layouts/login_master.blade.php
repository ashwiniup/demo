<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
  <!-- loader-->
  <link rel="icon" href="{{asset('storage/logo/favicon.png')}}" type="image/x-icon">
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/css/app-style.css')}}" rel="stylesheet"/>
  @notifyCss
</head>
 <?php
        $theme_names=DB::table('setting')->select('theme_name')->get();
    ?>         
       @foreach($theme_names as $theme_name)
<body class="bg-theme {{$theme_name->theme_name}}" >
  @endforeach

   @include('notify::messages')
<!-- Start wrapper-->
 <div id="wrapper">
    @yield('content')
    
  </div>
  <!--End wrapper-->
  <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/js/sidebar-menu.js')}}"></script>
  <script src="{{asset('admin/js/app-script.js')}}"></script>
  @notifyJs
</body>
</html>
