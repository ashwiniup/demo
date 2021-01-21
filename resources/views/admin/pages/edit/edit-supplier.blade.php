@extends('admin.layouts.master')
@section('title', 'Edit Supplier')
@section('content')
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Edit Suppliers</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item"><a href="{{route('suppliers')}}" >Supplier Manage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Supplier</li>
         </ol>
     </div>
     <div class="col-md-12">
       <div class="btn-group float-sm-right">
                <form  action="{{URL::route('edit-supplier')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom01">Full Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter Full Name"  value="{{$getResult->name}}" required="">
                           <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom02">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Enter Email"  value="{{$getResult->email}}" required="">
                           <span class="text-danger">{{ $errors->first('email') }}</span>
                       </div>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                         <label for="validationCustom3">Mobile Number</label>
                          <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" value="{{$getResult->mobile_number}}" required="">
                           <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                      </div>
                  </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control" placeholder="Enter Password" name="password" value="{{$getResult->password}}" >
                                  
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword">Location</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" placeholder="Enter Location" name="location" required value="{{$getResult->location}}" >
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                </div>
                            </div>
                        </div>
                     
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword" class="">Company Details</label>
                                 <div class="position-relative">
                                   <textarea rows="4" class="form-control" name="company_details"  id="basic-textarea">
                                      {{$getResult->company_details}}
                                   </textarea>

                                    <span class="text-danger">{{ $errors->first('company_details') }}</span>
                                </div>
                                   <input type="hidden" name="id" value="{{Crypt::encrypt($getResult->id)}}">
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-white"><i class="fa fa-check-square-o"></i> Create Supplier</button>
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
