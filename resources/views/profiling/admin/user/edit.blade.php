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
					<form action="{{ route('users.update', Crypt::encrypt($data->id)) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="card-header">
							<div class="card-title">
									<i class="fa fa-info-circle fa-fw"></i>
								USER INFORMATION
							</div>
						</div>
							<div class="card-body">	
								@include('profiling.admin.user.form')
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