	@if(Session::has('success_message'))
		<div class="alert alert-success">
			<i class="fas fa-check-square"></i>
			{{ Session::get('success_message') }}
		</div>
	@endif
