@extends('admin.layouts.master')
@section('title', 'Supplier Manage')
@push('page-style')
 <!--Data Tables -->

  <link href="{{asset('admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
   <!--Switchery-->
  <link href="{{asset('admin/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
  
  <link href="{{asset('admin/plugins/bootstrap-switch/bootstrap-switch.min.css')}}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
            <a href="{{route('create-supplier')}}"  class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>Create Supplier</a>
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
                        <th>Details</th>
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
                        <td>{{ Str::limit($supplier->company_details, 30)}}</td>
                        <td>{{ $supplier->created_at->diffForHumans() }}</td>
                      
                         <td><input data-id="{{$supplier->id}}" class="js-switch" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" data-color="#14b6ff" {{ $supplier->status ? 'checked' : '' }} ></td>
                       
                        <td>
                          <a href="{{route('edit-supplier/{id}',['id'=>Crypt::encrypt($supplier->id)])}}" title="Edit" class="btn btn-success"><i class="icon-pencil"></i></a>
                          <a href="{{route('delete-supplier/{id}',['id'=>Crypt::encrypt($supplier->id)])}}"  title="Delete" class="btn btn-danger"><i class="icon-trash"></i></a>
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
 <!--Switchery Js-->
    <script src="{{asset('admin/plugins/switchery/js/switchery.min.js')}}"></script>
    <script>
      var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
      $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
       });
    </script>

    <!--Bootstrap Switch Buttons-->
    <script src="assets/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
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
    <script>
  $(function() {
      toastr.options = {
          "closeButton": true,
          "newestOnTop": true,
          "positionClass": "toast-top-right"
        };
    $('.js-switch').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
             
              location.reload();
            }
        });
    })
  })
</script>
@endpush
