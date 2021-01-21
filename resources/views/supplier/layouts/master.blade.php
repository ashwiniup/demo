<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link href="{{asset('storage/logo/favicon.png')}}" rel="icon" type="image/x-icon">
    @include('supplier.include.style')
    @stack('page-style')
    @notifyCss
</head>
 <?php
        $theme_names=DB::table('setting')->select('theme_name')->get();
    ?>         
       @foreach($theme_names as $theme_name)
<body class="bg-theme {{$theme_name->theme_name}}" >
  @endforeach

    @include('notify::messages')
<!-- ============================================== -->
<!--Start wrapper-->
<div id="wrapper">
 
    <!-- sidebar-wrapper-->
    @include('supplier.include.sidebar')
    <!-- topbar header-->
    @include('supplier.include.header')
    <!-- content-wrapper-->
    @yield('content')
    <!--Start Back To Top Button-->
    <a class="back-to-top" href="javaScript:void();"><i class="fa fa-angle-double-up"></i></a>
    <!--End Back To Top Button-->
    <!-- topbar header-->
    @include('supplier.include.footer')
</div><!--End wrapper-->
<!-- ================JS All File==================== -->
   @include('supplier.include.script')
    @stack('page-script')
  @include('supplier.include.full-screen')   
    @notifyJs
</body>
</html>