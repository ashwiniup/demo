@extends('admin.layouts.master')
@section('title', 'Edit Supplier')
@section('content')
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Edit Suppliers</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item"><a href="{{route('suppliers')}}" >Supplier Manage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Supplier</li>
         </ol>
     </div>
   </div>
   <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <form id="signupForm" action="{{URL::route('edit-supplier')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   Edit Supplier
                </h4>
          
                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Full Name<span class="text-danger font-weight-bold"> *</span></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Enter Full Name"  value="{{$getResult->name}}"  id="input-10" name="name">
                         <span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">Email<span class="text-danger font-weight-bold"> *</span></label>
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
                    <input type="password" class="form-control"  placeholder="Enter Password" name="password" value="{{$getResult->password}}" id="input-13">
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                  </div>
                </div>
          
                  <div class="form-group row">
                  <label for="input-12" class="col-sm-2 col-form-label">Location<span class="text-danger font-weight-bold"> *</span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Location" name="location" required value="{{$getResult->location}}"  id="input-12">
                      <span class="text-danger">{{ $errors->first('location') }}</span>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-17" class="col-sm-2 col-form-label">Company Details<span class="text-danger font-weight-bold"> *</span></label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="company_details" rows="4" id="input-17">{{$getResult->company_details}}
                    </textarea>
                      <span class="text-danger">{{ $errors->first('company_details') }}</span>
                       <input type="hidden" name="id" value="{{Crypt::encrypt($getResult->id)}}">
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

    <!-- End Breadcrumb-->
     
<!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->

@endsection
