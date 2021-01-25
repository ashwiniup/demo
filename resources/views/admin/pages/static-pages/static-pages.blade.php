@extends('admin.layouts.master')
@section('title', 'Static Pages')
@push('page-style')
 <!--Data Tables -->
  <link href="{{asset('admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  @endpush
@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->

      <!--Primary Modal -->
                <div class="modal fade" id="primarymodal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-primary">
                      <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white">Your modal title here</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
                      </div>
                    </div>
                  </div>
                </div><!--End Modal -->


     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Static Pages</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Contant Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Static Pages</li>
         </ol>
     </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
            <!-- Large Size Modal -->
            <a href="{{route('create-page')}}"  class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>Create New Page</a>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Static Pages</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Page Name</th>
                        <th>Slug</th>
                        <th>Page Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($Staticpages as $Staticpage)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Staticpage->page_name}}</td>
                        <td>{{ $Staticpage->slug }}</td>
                        <td>{{ Str::limit(strip_tags($Staticpage->page_description),30) }}</td>
                        <td>
                           <button title="View" class="btn btn-info" data-toggle="modal" data-target="#primarymodal"><i class="icon-eye"></i></button>
                         
                          <a href="{{route('edit-page/{id}',['id'=>Crypt::encrypt($Staticpage->id)])}}" title="Edit" class="btn btn-success"><i class="icon-pencil"></i></a>
                          <a href="{{route('delete-page/{id}',['id'=>Crypt::encrypt($Staticpage->id)])}}"  title="Delete" class="btn btn-danger"><i class="icon-trash"></i></a>
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
