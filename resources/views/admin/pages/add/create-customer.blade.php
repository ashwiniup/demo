@extends('admin.layouts.master')
@section('title', 'Create Customer')
@push('page-style')
 <!--Data Tables -->
  <link href="{{asset('admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  @endpush
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
		    <h4 class="page-title">Create Customer</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item"><a href="{{route('customers')}}">Customers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Customer</li>
         </ol>
	   </div>
   </div>
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                 <form  action="{{ route('create-customer') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                  Create Customer Form
                </h4>
             <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom01">Full Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter Full Name"  value="{{old('name')}}">
                           <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom02">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Enter Email"  value="{{old('email')}}">
                           <span class="text-danger">{{ $errors->first('email') }}</span>
                       </div>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                         <label for="validationCustom3">Mobile Number</label>
                          <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" value="{{old('mobile_number')}}">
                           <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                      </div>
                  </div>
                       <div class="col-md-6">
                      <div class="form-group">
                        <label for="validationCustom4">Password</label>
                          <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                           <span class="text-danger">{{ $errors->first('password') }}</span>
                      </div>
                  </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="validationCustom6">Date Of Birth</label>
                          <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
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
              
                      </div>
              
          
                <div class="form-footer">
                    <button type="submit" class="btn btn-success float-right"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>


     </div>
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->

@endsection
