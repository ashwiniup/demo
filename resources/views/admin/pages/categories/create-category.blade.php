@extends('admin.layouts.master')
@section('title', 'Create category')
@push('page-style')
 <!--text editor-->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/dist/summernote-bs4.css')}}"/> 
@endpush
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
		    <h4 class="page-title">Create category</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Categories Management</a></li>
            <li class="breadcrumb-item"><a href="{{route('categories')}}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create category</li>
         </ol>
	   </div>
   </div>
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                 <form  action="{{ route('create-category') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                  Create New category
                </h4>
             <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom01">Categories</label>
                          <input type="text" name="categories" class="form-control" placeholder="Enter Title "  value="{{old('categories')}}">
                           <span class="text-danger">{{ $errors->first('categories') }}</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom01">Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Title "  value="{{old('title')}}">
                           <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="validationCustom02">Slug</label>
                          <input type="text" name="slug" class="form-control" placeholder="Enter Slug"  value="{{old('slug')}}">
                           <span class="text-danger">{{ $errors->first('slug') }}</span>
                       </div>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                         <label for="validationCustom3">Meta Keywords</label>
                          <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="m_keywords" value="{{old('m_keywords')}}">
                           <span class="text-danger">{{ $errors->first('m_keywords') }}</span>
                      </div>
                  </div>
                       <div class="col-md-12">
                      <div class="form-group">
                        <label for="validationCustom4">Meta Description</label>
                          <input type="text" class="form-control" placeholder="Enter Meta Description" name="m_description" value="{{old('m_description')}}">
                           <span class="text-danger">{{ $errors->first('m_description') }}</span>
                      </div>
                  </div>
                   <div class="col-md-12">
                      <div class="form-group">
                        <label for="validationCustom4">Page Description</label>
                          <textarea id="summernoteEditor" name="p_data"  class="form-control" >{{old('p_data')}}</textarea>
                           <span class="text-danger">{{ $errors->first('p_data') }}</span>
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
@push('page-script')
  <script src="{{asset('admin/plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
  <script>
     $('#summernoteEditor').summernote({
        height: 400,
        tabsize: 2
      });
   </script>
@endpush
