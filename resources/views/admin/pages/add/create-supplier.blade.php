@extends('admin.layouts.master')
@section('title', 'Create Supplier')
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
		    <h4 class="page-title">Create Supplier</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item"><a href="{{route('suppliers')}}">Suppliers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Supplier</li>
         </ol>
	   </div>
   </div>
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                 <form  action="{{ route('create-supplier') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                  Create Supplier Form
                </h4>
                 <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom01">Full Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter Full Name"  value="{{old('name')}}" required="">
                           <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom02">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Enter Email"  value="{{old('email')}}" required="">
                           <span class="text-danger">{{ $errors->first('email') }}</span>
                       </div>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                         <label for="validationCustom3">Mobile Number</label>
                          <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" value="{{old('mobile_number')}}" required="">
                           <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                      </div>
                  </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{ old('password') }}" >
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword">Location</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" placeholder="Enter Location" name="location" required value="{{ old('location') }}" >
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword">Upload Document</label>
                                <div class="position-relative">
                                    <input type="file" class="form-control input-shadow" name="document" required value="{{ old('document') }}" >

                                    <span class="text-danger">{{ $errors->first('document') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword" class="">Company Details</label>
                                 <div class="position-relative">
                                   <textarea rows="4" class="form-control" name="company_details">{{ old('company_details') }}
                                   </textarea>

                                    <span class="text-danger">{{ $errors->first('company_details') }}</span>
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
