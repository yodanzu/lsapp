@extends('layouts.root')



@section('title', 'User | Create')












@section('content-header')


<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
    	<h5 class="page-header" style="color: #09C;font-size: 16px;">
	      <i class="fa fa-paste fa-fw"></i>  User Maintenance &nbsp;&nbsp;
	        <font style="color: #09C;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder fa-fw"></i> User  </font>
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
						  	<a class="nav-link" id="user-list"  href="{{ route('view.user.index') }}" role="tab" aria-controls="user-list" aria-selected="true" >
							<i class="fas fa-bars"></i>
							  Listing
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="user-list"  href="{{ route('view.user.create') }}" role="tab" aria-controls="user-list" aria-selected="true" >
							<i class="fas fa-plus-square"></i>
							  Create
							</a>
						</li>
					</ul>
				</div>
				<div class="card-body" style="overflow: auto">
					@include('include.success_message')
					<form action="{{ route('user.store') }}" method="POST">
						@csrf
						<div class="card-header">
							<div class="card-title">
									<i class="fa fa-info-circle fa-fw"></i>
								USER INFORMATION
							</div>
						</div>
						<div class="card-body">
								<div class="form-group">
									<label>Employee ID</label>
									<input type="text" name="employeeId" class="form-control {{ $errors->has('employeeId') ? 'has-errors' : '' }}" data-toggle="tootlip" data-placement="required" title="Required" autocomplete="off" required="on">

									<div class="mt-6">
									@if($errors->has('employeeId'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('employeeId')}}
											</strong>
										</span>
									@endif
									</div>
								</div>
							
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" name="fullName" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('fullName') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('course_description'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('fullName')}}
											</strong>
										</span>
									@endif
									</div>
                                </div>
                                
                                <div class="form-group">
									<label>Birth Date</label>
									<input type="date" name="birthDate" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('birthDate') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('birthDate'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('birthDate')}}
											</strong>
										</span>
									@endif
									</div>
                                </div>
                                
                                <div class="form-group">
									<label>Address</label>
									<input type="text" name="address" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('address') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('address'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('address')}}
											</strong>
										</span>
									@endif
									</div>
                                </div>
                                
                                <div class="form-group">
									<label>Phone Number</label>
									<input type="number" name="phoneNumber" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('phoneNumber') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('phoneNumber'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('phoneNumber')}}
											</strong>
										</span>
									@endif
									</div>
                                </div>
                                
                                <div class="form-group">
									<label>User Type</label>
									<input type="text" name="userType" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('userType') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('userType'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('userType')}}
											</strong>
										</span>
									@endif
									</div>
                                </div>

                                <div class="form-group">
									<label>Email</label>
									<input type="email" name="email" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('email') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('email'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('email')}}
											</strong>
										</span>
									@endif
									</div>
                                </div>

                                <div class="form-group">
									<label>Password</label>
									<input type="password" name="password" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('password') ? 'has-errors' : '' }}" autocomplete="off" required="on">
									<div class="mt-6"> 
									@if($errors->has('password'))
										<span class="alert alert-danger">
											<strong>
												<i class="fas fa-exclamation-circle"></i>
												{{ $errors->first('password')}}
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