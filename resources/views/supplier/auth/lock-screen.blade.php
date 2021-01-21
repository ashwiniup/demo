@extends('supplier.layouts.login_master')
@section('title','Lock Screen')
@section('content')
<div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card card-authentication1 animated bounceInDown mb-0">
		<div class="user-lock rounded-top bg-dark-light">
              <div class="user-lock-img">
                  <img src="@if(Auth::guard('admin')->user()->image){{asset('admin/images/user/'.Auth::guard('admin')->user()->image)}} @else {{asset('admin/images/avatars/avatar-13.png')}}@endif" alt="user avatar">
              </div>
           </div>
          <div class="card-body">
             <h4 class="text-center mt-5 py-2">{{$name}}</h4>
            <form class="mt-3 mb-1" action="{{URL::route('login')}}" method="post" enctype="multipart/form-data">
          
              <div class="form-group">
                  <input  type="hidden" class="form-control" name="email" value="{{$email}}">
              	<label for="exampleInputpassword" class="sr-only">Enter Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputpassword" placeholder="Enter your password">
                 <span class="text-danger font-weight-bold">{{ $errors->first('password') }}</span>
                    @csrf
                
              </div>
              <button type="submit"  class="btn btn-light btn-block waves-effect waves-light mt-2"><i class="icon-lock-open"></i> Unlock </button>
            </form>
          </div>
	     </div>
	</div>
@endsection
