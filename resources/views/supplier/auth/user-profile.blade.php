@extends('supplier.layouts.master')
@section('title', 'User Profile')
@section('content')
<div class="clearfix"></div>
    
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">User Profile</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
         </ol>
       </div>
     </div>
    <!-- End Breadcrumb-->


    <div class="row">
      <div class="col-lg-6">
         <div class="card">
          <div class="card-header">Profile Edit</div>
           <div class="card-body">
           <form method="post" action="{{route('supplier-change-profile')}}" enctype="multipart/form-data">
            @csrf
           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" name="name" id="input-1">
             <span class="text-danger">{{ $errors->first('name') }}</span>
           </div>
           <div class="form-group">
            <label for="input-2">Email</label>
            <input type="text" class="form-control" name="email" id="input-2">
             <span class="text-danger">{{ $errors->first('email') }}</span>
           </div>
           <div class="form-group">
            <label for="input-3">Choose Image</label>
            <input type="file" class="form-control" name="image" id="input-3">
             <span class="text-danger">{{ $errors->first('image') }}</span>
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
             <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    <div class="col-lg-6">
        <div class="card">
          <div class="card-header">Change Password</div>
           <div class="card-body">
            <form method="post" action="{{route('supplier-changePassword')}}" enctype="multipart/form-data">
                @csrf
           <div class="form-group">
            <label for="input-14">Old Password</label>
            <input type="text" class="form-control form-control-square" name="old_password" id="input-14">
             <span class="text-danger">{{ $errors->first('old_password') }}</span>
           </div>
           <div class="form-group">
            <label for="input-14">Password</label>
            <input type="text" class="form-control form-control-square" name="password" id="input-14">
            <span class="text-danger">{{ $errors->first('password') }}</span>
           </div>
           <div class="form-group">
            <label for="input-15">Confirm Password</label>
            <input type="text" class="form-control form-control-square" name="password_confirmation" id="input-15">
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
           </div>
           <div class="form-group">
            <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->
<!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
@endsection