@extends('admin.layouts.master')
@section('title', 'Setting')
@push('page-style')
{{-- Page css files --}}
<!--Switchery-->
<link href="{{asset('admin/plugins/bootstrap-switch/bootstrap-switch.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Setting</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb-->
  <form action="{{route('appsetting')}}" method="post" enctype="multipart/form-data">   
    @csrf
    <div class="card">
      <div class="card-header text-uppercase">Application Settings
        <span class="float-right"><input type="submit"  value="save" class="btn btn-primary"></span>
      </div>
       <div class="card-body">
      
          <div class="row">
            <div class="col-12 col-lg-4 col-xl-4">
              <div class="form-group">
               <label for="input-11">Logo [.png ] [ 250 X 60 & 1MB ]</label>
               <div class="custom-file">
               <input type="file" name="logo" class="custom-file-input"  id="customFile">
               <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
               <span class="text-danger">{{ $errors->first('logo') }}</span>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4">
              <div class="form-group">
               <label for="input-11">Logo Small [.png ] [ 250 X 60 & 1MB ] </label>
                <div class="custom-file">
               <input type="file" name="small_logo" class="custom-file-input" id="customFile">
               <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
               <span class="text-danger">{{ $errors->first('small_logo') }}</span>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4">
              <div class="form-group">
               <label for="input-11">Favicon [.png ] [32 X 32 & 512KB]</label>
                <div class="custom-file">
               <input type="file" name="favicon" class="custom-file-input" id="customFile">
               <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
               <span class="text-danger">{{ $errors->first('favicon') }}</span>
              </div>
            </div>
          </div><!--end row-->

     
       </div>
     </div>  
     </form> 
        <!-- ---------- -->
        <div class="row">
            <div class="col-12">
                 <form method="post" action="{{route('setting')}}">
                            @csrf
                <div class="card">
                    <div class="card-header text-uppercase">Dashboard Themes
                     <span class="float-right"><input type="submit" name="submit" value="save" class="btn btn-primary"></span>
                    </div>
                    <div class="card-body">
                            <div class="mt-3 bt-switch">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme1"  class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme1">Theme 1 </label>
                                            <input id="theme1" checked="" type="radio" name="radiobt"  value="bg-theme1" class="radio-switch "> </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme2" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme2">Theme 2 </label>
                                            <input id="theme2" type="radio" name="radiobt" value="bg-theme2" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme3" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme3">Theme 3 </label>
                                            <input id="theme3" type="radio" name="radiobt" value="bg-theme3" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme4" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme4">Theme 4 </label>
                                            <input id="theme4" type="radio" name="radiobt" value="bg-theme4" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme5" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme5">Theme 5 </label>
                                            <input id="theme5"  type="radio" name="radiobt" value="bg-theme5" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme6" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme6">Theme 6 </label>
                                            <input id="theme6" type="radio" name="radiobt" value="bg-theme6" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme7" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme7">Theme 7 </label>
                                            <input id="theme7" type="radio" name="radiobt" value="bg-theme7" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme8" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme8">Theme 8 </label>
                                            <input id="theme8" type="radio" name="radiobt" value="bg-theme8" class="radio-switch"> </div>
                                    </div>
                                     <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme9" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme9">Theme 9 </label>
                                            <input id="theme9"  type="radio" name="radiobt" value="bg-theme9" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme10" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme10">Theme 10 </label>
                                            <input id="theme10" type="radio" name="radiobt" value="bg-theme10" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme11" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme11">Theme 11 </label>
                                            <input id="theme11" type="radio" name="radiobt" value="bg-theme11" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme12" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme12">Theme 12 </label>
                                            <input id="theme12" type="radio" name="radiobt" value="bg-theme12" class="radio-switch"> </div>
                                    </div>
                                       <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme13" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme13">Theme 13 </label>
                                            <input id="theme13" type="radio" name="radiobt" value="bg-theme13" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme14" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme14">Theme 14 </label>
                                            <input id="theme14" type="radio" name="radiobt" value="bg-theme14" class="radio-switch"> </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme15" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme15">Theme 15 </label>
                                            <input id="theme15" type="radio" name="radiobt" value="bg-theme15" class="radio-switch"> </div>
                                    </div>
                                      <div class="col-md-6 col-lg-3 col-xl-3">
                                        <div id="theme16" class="lightbox-thumb img-thumbnail"></div>
                                        <div class="form-group text-center">
                                            <label for="theme16">Theme 16 </label>
                                            <input id="theme16" type="radio" name="radiobt" value="bg-theme16" class="radio-switch"> </div>
                                    </div>
            
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->
    </div> <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
@endsection
@push('page-script')
{{-- Page js files --}}
<!--Bootstrap Switch Buttons-->
<script src="{{asset('admin/plugins/bootstrap-switch/bootstrap-switch.min.js')}}"></script>
<script>
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });

</script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endpush
