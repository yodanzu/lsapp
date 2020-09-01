@extends('layouts.root')





@section('title', 'Course')


@section('content-header')


<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
    	<h5 class="page-header" style="color: #09C;font-size: 16px;">
	      <i class="fa fa-paste fa-fw"></i>  Table & Maintenance &nbsp;&nbsp;
	        <font style="color: #000;">
	        <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Course </font>

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
						  	<a class="nav-link active" id="course-list"  href="{{ route('course.index') }}" role="tab" aria-controls="course-list" aria-selected="true" >
							<i class="fas fa-bars"></i>
							  Listing
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="course-list"  href="{{ route('course.create') }}" role="tab" aria-controls="course-list" aria-selected="true" >
							<i class="fas fa-plus-square"></i>
							  Create
							</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					 <table id="table_course_list" class="table table-bordered table-striped " style="width: 100%;" cellspacing="0">
					 	<thead>
					 		<tr style="font-size: 15px; text-transform: uppercase;">
						 		@php $arr_header = ['#','Course Code', 'Subject Code','Subject Description','Date Created', 'Action'];
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
					 		@foreach($data as $key => $course)
					 		<tr>
					 			<td>{{ $key+1 }}</td>
					 			<td>{{ $course->status }}</td>
					 			<td>{{ $course->course_code}}</td>
					 			<td>{{ $course->course_description }}</td>
					 			<td>
					 				{{ date('m-d-Y', strtotime($course->created_at)) }}  
					 			</td>
					 			<td>
					 				<a href="{{ route('course.edit', Crypt::encrypt($course->id)) }}" class="btn btn-primary">
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

<script type="text/javascript">
$(document).ready(function() {

	$('#table_course_list').DataTable({
		"autoWidth": false,

	});
});
</script>


@endsection