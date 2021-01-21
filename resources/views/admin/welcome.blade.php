@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="clearfix"></div>
		<div class="content-wrapper">
			<div class="container-fluid">
				<h4 class=" ">【 {{ $greetings }} {{ $name }} 】</h4>
				<!-- @if(Auth::guard('admin')->user()->id==1)
				    <p>Id = 1</p>
				@else
				 <p>Not Match</p>
				@endif -->
				<div class="row mt-3">
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="w-icon">
										<i class="fa fa-comments-o text-white"></i>
									</div>
									<div class="media-body ml-3 border-left-xs border-light-3">
										<h4 class="mb-0 ml-3">85.2%</h4>
										<p class="mb-0 ml-3 extra-small-font">Requests </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="w-icon">
										<i class="fa fa-question-circle-o text-white"></i>
									</div>
									<div class="media-body ml-3 border-left-xs border-light-3">
										<h4 class="mb-0 ml-3">87254</h4>
										<p class="mb-0 ml-3 extra-small-font">Total Requests</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="w-icon">
										<i class="fa fa-bar-chart text-white"></i>
									</div>
									<div class="media-body ml-3 border-left-xs border-light-3">
										<h4 class="mb-0 ml-3">$9,856</h4>
										<p class="mb-0 ml-3 extra-small-font">Total Revenue</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="w-icon">
										<i class="fa fa-money text-white"></i>
									</div>
									<div class="media-body ml-3 border-left-xs border-light-3">
										<h4 class="mb-0 ml-3">23.5%</h4>
										<p class="mb-0 ml-3 extra-small-font">Support Costs</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--End Row-->
				<div class="row">
					<div class="col-12 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-header">
								Revenue And % of Support Costs To Revenue
								<div class="card-action">
									<div class="dropdown">
										<a class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javascript:void();"><i class="icon-options"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a> <a class="dropdown-item" href="javascript:void();">Another action</a> <a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-container-8">
									<canvas id="chart1"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-header">
								Request Volume Vs. Service Level
								<div class="card-action">
									<div class="dropdown">
										<a class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javascript:void();"><i class="icon-options"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a> <a class="dropdown-item" href="javascript:void();">Another action</a> <a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-container-8">
									<canvas id="chart2"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div><!--End Row-->
				<div class="row">
					<div class="col-12 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								Customer Satisfaction 2018
								<div class="card-action">
									<div class="dropdown">
										<a class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javascript:void();"><i class="icon-options"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a> <a class="dropdown-item" href="javascript:void();">Another action</a> <a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row row-group m-0">
									<div class="col-12 col-xl-6">
										<div class="text-center">
											<span class="pie" data-peity='{ "fill": ["#ffffff", "rgba(255, 255, 255, 0.14)"]}'>3/5</span>
										</div>
										<hr>
										<p class="mb-0"><i class="fa fa-circle text-white"></i> Satisfied : <span class="badge badge-pill badge-light float-right">65%</span></p>
										<p class="mb-0"><i class="fa fa-circle text-light-3"></i> Unsatisfied : <span class="badge badge-pill badge-light float-right">35%</span></p>
									</div>
									<div class="col-12 col-xl-6">
										<div class="text-center">
											<span class="donut" data-peity='{ "fill": ["#ffffff", "rgba(255, 255, 255, 0.14)"]}'>3/5</span>
										</div>
										<hr>
										<p class="mb-0"><i class="fa fa-circle text-white"></i> Very Satisfied : <span class="badge badge-pill badge-light float-right">65%</span></p>
										<p class="mb-0"><i class="fa fa-circle text-light-3"></i> Very Unsatisfied : <span class="badge badge-pill badge-light float-right">35%</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card">
							<div class="card-header">
								Avg Time To Solve An Issue
								<div class="card-action">
									<div class="dropdown">
										<a class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javascript:void();"><i class="icon-options"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a> <a class="dropdown-item" href="javascript:void();">Another action</a> <a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="progress-wrapper mb-4">
									<p>Less than 1 Hour<span class="float-right">80%</span></p>
									<div class="progress" style="height:7px;">
										<div class="progress-bar" style="width:70%"></div>
									</div>
								</div>
								<div class="progress-wrapper mb-4">
									<p>1-2 Hours<span class="float-right">60%</span></p>
									<div class="progress" style="height:7px;">
										<div class="progress-bar" style="width:60%"></div>
									</div>
								</div>
								<div class="progress-wrapper mb-4">
									<p>More Then 2 Hours <span class="float-right">40%</span></p>
									<div class="progress" style="height:7px;">
										<div class="progress-bar" style="width:40%"></div>
									</div>
								</div>
								<div class="progress-wrapper">
									<p>More Then 5 Hours <span class="float-right">20%</span></p>
									<div class="progress" style="height:7px;">
										<div class="progress-bar" style="width:20%"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--End Row-->
				<!--start overlay-->
				<div class="overlay toggle-menu"></div><!--end overlay-->
			</div><!-- End container-fluid-->
		</div><!--End content-wrapper-->

@endsection
@push('page-script')
{{-- page js files --}}
    <script src="{{asset('admin/plugins/Chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/js/dashboard-service-support.js')}}"></script>
@endpush