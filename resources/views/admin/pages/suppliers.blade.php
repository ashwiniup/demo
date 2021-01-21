@extends('admin.layouts.master')
@section('title', 'Supplier Manage')
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
        <h4 class="page-title">Suppliers</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Supplier Manage</li>
         </ol>
     </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
            <!-- Large Size Modal -->
        <button type="button"  data-toggle="modal" data-target="#largesizemodal" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Create Supplier</button> 
              <!-- Modal -->
                <div class="modal fade" id="largesizemodal">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Create Supplier Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                <form  action="{{URL::route('supplier')}}" method="post" enctype="multipart/form-data">
                    @csrf
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
                                   <textarea rows="4" class="form-control" name="company_details"  id="basic-textarea">
                                       {{ old('company_details') }}
                                   </textarea>

                                    <span class="text-danger">{{ $errors->first('company_details') }}</span>
                                </div>
                                
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-white"><i class="fa fa-check-square-o"></i> Create Supplier</button>
                      </div>
                        </form>
                    </div>
                  </div>
                </div>
           </div>
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
                        <th>Document</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Location</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a target="blank" href="{{url('/supplier/document')}}/{{$supplier->document}}"><img src="{{asset('admin/images/icon/document.png')}}" /></a></td>
                        <td>{{ $supplier->name}}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->mobile_number }}</td>
                        <td>{{ $supplier->location }}</td>
                        <td>{{ $supplier->created_at->diffForHumans() }}</td>
               
                           @if($supplier->status==0)
                          <td class="align-middle text-center">Inactive</td>
                          @elseif($supplier->status==1)
                           <td class="align-middle text-center">Active</td>
                          @else
                          <td class="align-middle text-center">No Data</td>
                          @endif
                 
                        <td>
                          <a href="" title="View" class="btn btn-primary"><i class="icon-eye"></i></a>
                          <a href="" title="Edit" class="btn btn-success"><i class="icon-pencil"></i></a>
                          <a href=""  title="Delete" class="btn btn-danger"><i class="icon-trash"></i></a>
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