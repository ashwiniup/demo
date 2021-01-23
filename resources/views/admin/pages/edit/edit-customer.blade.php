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
   </div>
   <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <form id="signupForm" action="{{URL::route('edit-customer')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   Edit Customer
                </h4>
          
                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Full Name <span class="text-danger font-weight-bold">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Enter Full Name"  value="{{$getResult->name}}"  id="input-10" name="name">
                         <span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">Email<span class="text-danger font-weight-bold">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Enter Email"  value="{{$getResult->email}}" id="input-11" name="email">
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  </div>
                </div>
            
                <div class="form-group row">
                  <label for="input-12" class="col-sm-2 col-form-label">Mobile Number<span class="text-danger font-weight-bold"> *</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" value="{{$getResult->mobile_number}}" id="input-12">
                       <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                  </div>
                  <label for="input-13" class="col-sm-2 col-form-label">Password<span class="text-danger font-weight-bold"> *</span></label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control"  placeholder="Enter Password" name="password" value="{{ $getResult->password }}" id="input-13">
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                  </div>
                </div>
    
                  <div class="form-group row">
                  <label for="input-12" class="col-sm-2 col-form-label">Date Of Birth<span class="text-danger font-weight-bold"> *</span></label>
                  <div class="col-sm-4">
                  <input type="date" class="form-control" name="dob" value="{{$getResult->dob}}">
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                  </div>
                   <label for="input-12" class="col-sm-2 col-form-label">Gender<span class="text-danger font-weight-bold"> *</span></label>
                     <div class="col-sm-4">
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
                
                <div class="form-group row">
                     <input type="hidden" name="id" value="{{Crypt::encrypt($getResult->id)}}">
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success float-right"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
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
