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
                <input type="text" name="phoneNumber" data-toggle="tooltip" maxlength="11" data-placement="left" title="Required" class="form-control {{ $errors->has('phoneNumber') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->phoneNumber }}">
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
                <input type="text" name="userType" data-toggle="tooltip" data-placement="left" title="Required" class="form-control {{ $errors->has('userType') ? 'has-errors' : '' }}" autocomplete="off" required="on" value="{{ $data->userType }}">
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