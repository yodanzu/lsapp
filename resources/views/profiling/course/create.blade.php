@extends('layouts.root')



@section('title', 'Course | Create')












@section('content-header')


<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
    	<h5 class="page-header" style="color: #09C;font-size: 16px;">
	      <i class="fa fa-paste fa-fw"></i>  Table & Maintenance &nbsp;&nbsp;
	        <font style="color: #09C;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder fa-fw"></i> Course </font>
	         <font style="color: #000;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Create </font>
	
    	</h5>
	</div>
</div>
@endsection


@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card card-default card-tabs">
				<div class="card-header">
					<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
						<li class="nav-item">
						  	<a class="nav-link" id="course-list"  href="{{ route('view.course.index') }}" role="tab" aria-controls="course-list" aria-selected="true" >
							<i class="fas fa-bars"></i>
							  Listing
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="course-list"  href="{{ route('view.course.create') }}" role="tab" aria-controls="course-list" aria-selected="true" >
							<i class="fas fa-plus-square"></i>
							  Create
							</a>
						</li>
					</ul>
				</div>
				<div class="card-body" style="overflow: auto">
					@include('include.success_message')
					<form action="{{ route('course.store') }}" method="POST">
						@csrf
						<div class="card-header">
							<div class="card-title">
									<i class="fa fa-info-circle fa-fw"></i>
								COURSE INFORMATION
							</div>
						</div>
						<div class="card-body">
								<div class="form-group">
									<label>Course Code</label>
									<input type="text" name="course_code" class="form-control {{ $errors->has('course_code') ? 'has-errors' : '' }}" data-toggle="tootlip" data-placement="required" title="Required" autocomplete="off" required="on">

									<div class="mt-6">
									@if($errors->has('course_code'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('course_code')}}
											</strong>
										</span>
									@endif
									</div>
								</div>
							
								<div class="form-group">
									<label>Course Description</label>
									<input type="text" name="course_description" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('course_description') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6">
									@if($errors->has('course_description'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('course_description')}}
											</strong>
										</span>
									@endif
									</div>
									
								</div>
							
								<div class="form-group">
									<center>
										<button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Are you sure you filled-up all required fields?">
											Submit
										</button>	
										<button  type="reset" class="btn btn-danger ">
											Clear
										</button>
									</center>
								</div>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection