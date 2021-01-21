@extends('supplier.layouts.login_master')
@section('title','Reset Password')
@section('content')
<div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card card-authentication1 mb-0">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="card-title text-uppercase pb-2">Reset Password</div>
		    <p class="pb-2">Please enter your email address. You will receive a link to create a new password via email.</p>
		    <form  action="{{route('supplier-forget-password')}}" method="post" enctype="multipart/form-data">
		    	@csrf
			  <div class="form-group">
			  <label for="exampleInputEmailAddress" class="">Email Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputEmailAddress" name="email" class="form-control input-shadow" placeholder="Email Address">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			     <span class="text-danger">{{ $errors->first('email') }}</span>
			  </div>
			 
			  <button type="submit" class="btn btn-light btn-block mt-3">Reset Password</button>
			 </form>
		   </div>
		  </div>
		   <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Return to the <a href="{{route('supplier-login')}}"> Login Page</a></p>
		  </div>
	     </div>
	     </div>
@endsection