@extends('supplier.layouts.login_master')
@section('title','Supplier Signup ')
@section('content')
<div class="d-flex align-items-center justify-content-center pt-4 pb-4">
    <div class="card card-authentication2 mb-0">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="{{asset('storage/logo/logo.png')}}" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Supplier Sign Up</div>
                <form novalidate action="{{URL::route('signup')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername">Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" placeholder="Enter Name" name="name" required value="{{ old('name') }}">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername">Email</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" placeholder="Enter Email" name="email" required value="{{ old('email') }}" >
                                    <div class="form-control-position">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername">Mobile Number</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" placeholder="Enter mobile number" name="mobile_number" required value="{{ old('mobile_number') }}" >
                                    <div class="form-control-position">
                                        <i class="icon-phone icons"></i>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleInputUsername">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="password" class="form-control input-shadow" placeholder="Enter Password" name="password" required value="{{ old('password') }}" >
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword">Location</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" placeholder="Enter Location" name="location" required value="{{ old('location') }}" >
                                    <div class="form-control-position">
                                        <i class="icon-map icons"></i>
                                    </div>
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
                                   <textarea rows="4" class="form-control" name="company_details"  id="basic-textarea">
                                       {{ old('company_details') }}
                                   </textarea>

                                    <span class="text-danger">{{ $errors->first('company_details') }}</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-light btn-block" value="Sign In" />
                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Do have already account? <a href="{{route('supplier-login')}}"> Sign In here</a></p>
        </div>
    </div>
</div>
@endsection
