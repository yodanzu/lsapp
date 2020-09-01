
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition login-page">
<div class="login-box">
   <div class="container-fluid">
        <div class="card">
            <div class="card-heading">
                <center>
                     <font style="font-size: 30px; ">
                    Login
                    </font>
                </center>
            </div>
            <div class="card-body login-card-body">
                <form action=" {{ route('login') }} " method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="input-group mb-3 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" required autofocus value=" {{ old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope" >
                                </span>
                            </div>
                        </div>
                        
                        @if( $errors->has('email'))
                            <span class="help-block  alert alert-danger mt-2" role="alert" >
                                <i class="fas fa-exclamation-triangle"> </i>
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="off">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                              </div>

                        @if ($errors->has('password'))
                            <span class="alert alert-danger help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                      <div class="row">
                          <div class="col-8">
                            <div class="icheck-primary">
                              <input type="checkbox" id="remember" name="remember" value="{{ old('remember') ? 'has-error' : '' }}">
                              <label for="remember">
                                Remember Me
                              </label>
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                          </div>
                          <!-- /.col -->
                        </div>

                        <div  class="mb-1 pt-4">
                            <center>
                                <p class="mb-1">
                                    <a class="btn btn-link"  href="{{ route('password.request') }}">Forgot Your Password</a>
                                </p>
                            </center>
                        </div>
                </form>
            </div>
        </div>
    </div>    
 </div>

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js')}}"></script>
</body>
</html>