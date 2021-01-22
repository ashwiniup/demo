@extends('admin.layouts.master')
@section('title', 'Edit Customer')
@section('content')
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Edit Customer</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item"><a href="{{route('suppliers')}}" >Customer Manage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Customer</li>
         </ol>
     </div>
     <div class="col-md-12">
       <div class="btn-group float-sm-right">
               <form  action="{{ route('edit-customer') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom01">Full Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter Full Name"  value="{{$getResult->name}}">
                           <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom02">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Enter Email"  value="{{$getResult->email}}">
                           <span class="text-danger">{{ $errors->first('email') }}</span>
                       </div>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                         <label for="validationCustom3">Mobile Number</label>
                          <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" value="{{$getResult->mobile_number}}">
                           <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                      </div>
                  </div>
                       <div class="col-md-6">
                      <div class="form-group">
                        <label for="validationCustom4">Password</label>
                          <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{$getResult->password}}">
                           <span class="text-danger">{{ $errors->first('password') }}</span>
                      </div>
                  </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="validationCustom6">Date Of Birth</label>
                          <input type="date" class="form-control" name="dob" value="{{$getResult->dob}}">
                           <span class="text-danger">{{ $errors->first('dob') }}</span>
                      </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group">
                       <label for="">Gender</label><br>
                      <div class="icheck-material-primary icheck-inline">
                            <input type="radio" id="male" name="gender"  value="male" checked />
                            <label for="male">Male</label>
                          </div>
                          <div class="icheck-material-primary icheck-inline">
                            <input type="radio" id="female" name="gender" value="female" />
                            <label for="female">Female</label>
                          </div>
                          <div class="icheck-material-primary icheck-inline">
                            <input type="radio" id="other" name="gender" value="other" />
                            <label for="other">Other</label>
                             <span class="text-danger">{{ $errors->first('gender') }}</span>
                          </div>
                      </div>
                  </div>
               <input type="hidden" name="id" value="{{Crypt::encrypt($getResult->id)}}">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-white"><i class="fa fa-check-square-o"></i> Create Customer</button>
                      </div>
                        </form>
                    </div>
                  </div>
                </div>
      
    <!-- End Breadcrumb-->
     
<!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->

@endsection
