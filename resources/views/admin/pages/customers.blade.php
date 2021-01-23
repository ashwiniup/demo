@extends('admin.layouts.master')
@section('title', 'Customer Manage')
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
        <div class="col-sm-9">
		    <h4 class="page-title">Customers</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customers</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
            <!-- Large Size Modal -->
            <a href="{{route('create-customer')}}"  class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>Create Customer</a>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Customer Data</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->name}}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->mobile_number }}</td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->gender }}</td>
                        <td>{{ $customer->created_at->diffForHumans() }}</td>
                        <td>
                          <a href="{{route('edit-customer/{id}',['id'=>Crypt::encrypt($customer->id)])}}" title="Edit" class="btn btn-success"><i class="icon-pencil"></i></a>
                          <a href="{{route('delete-customer/{id}',['id'=>Crypt::encrypt($customer->id)])}}"  title="Delete" class="btn btn-danger"><i class="icon-trash"></i></a>
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
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
@endpush
