@extends('admin.layouts.master')
@section('title', 'Categories Pages')
@push('page-style')
 <!--Data Tables -->
  <link href="{{asset('admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  @endpush
@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Categories</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Categories Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
         </ol>
     </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
            <!-- Large Size Modal -->
            <a href="{{route('create-category')}}"  class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>Create New Categorie</a>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Categories</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Categories</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($Categories as $Categorie)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Categorie->categories}}</td>
                        <td>{{ Str::limit(strip_tags($Categorie->title),30) }}</td>
                        <td>{{ $Categorie->slug }}</td>
                        <td>
                          <a href="{{route('edit-category/{id}',['id'=>Crypt::encrypt($Categorie->id)])}}" title="Edit" class="btn btn-success"><i class="icon-pencil"></i></a>
                          <a href="{{route('delete-category/{id}',['id'=>Crypt::encrypt($Categorie->id)])}}"  title="Delete" class="btn btn-danger"><i class="icon-trash"></i></a>
                        </td>
                       
                    </tr>
                   @endforeach
                </tbody>
            
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
<!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->

@endsection
@push('page-script')
        <!--Data Tables js-->
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>


    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();
      
      } );

    </script>
@endpush
