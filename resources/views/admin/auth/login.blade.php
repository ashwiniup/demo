@extends('admin.layouts.login_master')
@section('title','Admin Login ')
@section('content')
<div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card card-authentication1 mb-0">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{asset('storage/logo/small_logo.png')}}" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Admin Sign In</div>
		    <form novalidate  action="{{URL::route('login')}}" method="post" enctype="multipart/form-data">
		    	@csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  class="form-control input-shadow" placeholder="Enter Username" name="email" required >
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
				   <span class="text-danger">{{ $errors->first('email') }}</span>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" class="form-control input-shadow" placeholder="Enter Password" name="password" required >
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
				  <span class="text-danger">{{ $errors->first('password') }}</span>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" name="remember" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			</div>
			 <input type="submit" class="btn btn-light btn-block" value="Sign In" />
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Back To Home Page<a href="{{url::to('/')}}"> Home</a></p>
		  </div>
	     </div>
	   </div>
@endsection