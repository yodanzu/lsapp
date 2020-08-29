@extends('layouts.root')



@section('title', 'User | Edit')


@section('content-header')


<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
    	<h5 class="page-header" style="color: #09C;font-size: 16px;">
	      <i class="fa fa-paste fa-fw"></i>  User Maintenance &nbsp;&nbsp;
	        <font style="color: #09C;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder fa-fw"></i> User </font>
	         <font style="color: #000;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Edit </font>
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
							  Edit
							</a>
						</li>
					</ul>
				</div>
				<div class="card-body" style="overflow: auto">
					@include('include.success_message')
					<form action="{{ route('user.update', Crypt::encrypt($data->id)) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="card-header">
							<div class="card-title">
									<i class="fa fa-info-circle fa-fw"></i>
								USER INFORMATION
							</div>
						</div>
							<div class="card-body">	
								<div class="row">
									<div class="col-12 col-lg-12">
										<div class="form-group">
											<label>First name</label>
											<input type="text" name="firstName" class="form-control {{ $errors->has('firstName') ? 'has-errors' : '' }}" data-toggle="tootlip" data-placement="required" title="Required" autocomplete="off" required="on" value="{{ $data->firstName }}">
											<div class="mt-6">
											@if($errors->has('firstName'))
												<span class="alert alert-danger">
													<strong>
														<i class="fas fa-exclamation-circle"></i>
														{{ $errors->first('firstName')}}
													</strong>
												</span>
											@endif
											</div>
										</div>
									
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="lastName" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('lastName') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->lastName }}">
											<div class="mt-6">
											@if($errors->has('lastName'))
												<span class="alert alert-danger">
													<strong>
														<i class="fas fa-exclamation-circle"></i>
														{{ $errors->first('lastName')}}
													</strong>
												</span>
											@endif
											</div>
										</div>

										<div class="form-group">
											<label>Birth Date</label>
											<input type="date" name="birthDate" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('birthDate') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->birthDate }}">
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
											<label>Phone Number</label>
											<input type="number" name="phoneNumber" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('phoneNumber') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->phoneNumber }}">
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
											<input type="number" name="userType" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('userType') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->userType }}">
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
											<input type="text" name="email" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('email') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->email }}">
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