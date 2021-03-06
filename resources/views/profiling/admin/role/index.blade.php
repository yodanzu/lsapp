@extends('layouts.root')





@section('title', 'Role')





@section('extralink-css')
 <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection




@section('content-header')


<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
    	<h5 class="page-header" style="color: #09C;font-size: 16px;">
	      <i class="fa fa-paste fa-fw"></i>  User Maintenance &nbsp;&nbsp;
	        <font style="color: #000;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Role</font>

    	</h5>
	</div>
</div>
@endsection


@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card card-tabs">
				<div class="card-header">
					<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
						<li class="nav-item">
						  	<a class="nav-link active" id="role-list"  href="{{ route('view.role.index') }}" role="tab" aria-controls="role-list" aria-selected="true" >
							<i class="fas fa-bars"></i>
							  Listing
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="role-list"  href="{{ route('view.role.create') }}" role="tab" aria-controls="role-list" aria-selected="true" >
							<i class="fas fa-plus-square"></i>
							  Create
							</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					 <table id="table_role_list" class="table table-bordered table-striped " style="width: 100%;" cellspacing="0">
					 	<thead>
					 		<tr style="font-size: 15px; text-transform: uppercase;">
						 		@php $arr_header = ['#','Role','Action'];
						 		@endphp
						 		@for( $num = 0; $num <(count($arr_header)); $num++ )
									<th class="text-center">
										<i class="fa fa-angle-double-down fa-fw"></i>
										{{ $arr_header[$num] }}
									</th>
						 		@endfor
					 		</tr>
						 </thead>
						 
						 <tbody>
					 		@foreach($data as $key => $role)
					 		<tr>
					 			<td>{{ $key+1 }}</td>
					 			<td>{{ $role->name }}</td>
					 			<td>
					 				
					 			</td>
					 			<td>
					 				<a href="{{ route('view.role.edit', Crypt::encrypt($role->id)) }}" class="btn btn-primary">
					 					Edit
					 				</a>
					 				<a href="#" class="btn btn-danger">
					 					Delete
					 				</a>
					 			</td>
					 		</tr>
					 		@endforeach
					 	</tbody>
						
					 </table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('extra-script')
<!-- DataTables -->

<script src="{{ asset('/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {

	$('#table_role_list').DataTable({
		"autoWidth": false,

	});
});
</script>


@endsection