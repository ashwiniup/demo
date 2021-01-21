@extends('admin.layouts.login_master')
@section('title', '404 Error')
@section('content')
 <div class="height-100v d-flex align-items-center justify-content-center">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 class="error-title text-white"> 404</h1>
                        <h2 class="error-sub-title text-white">404 not found</h2>

                        <p class="error-message text-white text-uppercase">Sorry, an error has occured, Requested page not found!</p>
                        
                        <div class="mt-4">
                          <a href="{{route('dashboard')}}" class="btn btn-light btn-round m-1">Go To Home </a>
                          <a href="javascript:void();" class="btn btn-light btn-round m-1">Previous Page </a>
                        </div>

                        <div class="mt-4">
                            <p class="text-white">Copyright © 2020 {{ env('APP_NAME') }} | All rights reserved.</p>
                        </div>
                           <hr class="w-50 border-light">
                        <div class="mt-2">
                            <a href="javascript:void()" class="btn-social btn-social-circle waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle waves-effect waves-light m-1"><i class="fa fa-behance"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle waves-effect waves-light m-1"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </div>

@endsection