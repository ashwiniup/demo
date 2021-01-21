@extends('supplier.layouts.login_master')
@section('title','Reset Password')
@section('content')
 <div class="height-100v d-flex align-items-center justify-content-center">
    <div class="card card-authentication1 mb-0">
        <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
              <p></p>
            </div>
          <div class="card-title text-uppercase text-center py-3">Reset Password</div>
            <form novalidate id="resetForm" action="{{URL::Route('reset', $token)}}" method="post" enctype="multipart/form-data">
                  @csrf
                <input type="hidden" name="token" value="{{$token}}">   
              <div class="form-group">
              <label for="exampleInputUsername" class="sr-only">Email</label>
               <div class="position-relative has-icon-right">
                  <input type="text" id="exampleInputUsername" name="email" class="form-control input-shadow" placeholder="Enter Email">
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
               </div>
                <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>
              <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">Password</label>
               <div class="position-relative has-icon-right">
                  <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
                <span class="text-danger">{{ $errors->first('password') }}</span>
              </div>
             <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">Confirm Password</label>
               <div class="position-relative has-icon-right">
                  <input type="password" id="exampleInputPassword" name="password_confirmation" class="form-control input-shadow" placeholder="Enter Confirm Password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
                 <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
              </div>
             <button type="submit" class="btn btn-light btn-block">Sign In</button>
             </form>
           </div>
          </div>
          <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Do You have an account? <a href="{{route('lv_admin')}}"> Sign In here</a></p>
          </div>
         </div>
       </div>

<!-- -------- -->
 
   @endsection 