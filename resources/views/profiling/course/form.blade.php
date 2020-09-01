	






<div class="row">
	<div class="col-12 col-lg-12">
		<div class="form-group">
			<label>Course</label>
			<select name="status" class="form-control {{ $errors->has('status') ? 'has-errors' : '' }}" required="on">
				<option selected disabled>--- Select ---</option>
				<option value="stcw">STCW</option>
				<option value="in-house">IN-HOUSE</option>
			</select>
			@if($errors->has('status'))
				<span class="alert alert-danger">
					<strong>
						<i class="fas fa-exclamation-circle"></i>
						{{ $errors->first('status')}}
					</strong>
				</span>
			@endif
		</div>
		<div class="form-group">
			<label>Subject Code</label>
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
			<label>Subject Description</label>
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

