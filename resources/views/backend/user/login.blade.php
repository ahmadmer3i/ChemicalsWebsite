<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Chemicals | Login</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/users/login-2.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body class="login">

<form class="form-login" action="{{ route('login') }}" method="post">
    @csrf
    <div class="row">

        <div class="col-md-12 text-center mb-4">
            <img alt="logo" src="{{asset('frontend/img/logo/logo.png')}}" class="theme-logo" width="200">
        </div>

        <div class="col-md-12">

            <label for="username" class="sr-only">Username</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-user-7"></i> </span>
                </div>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username"
                       aria-describedby="username" required>
            </div>

            <label for="password" class="sr-only">Password</label>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                </div>
                <input type="password" id="password" class="form-control" placeholder="Password"
                       aria-describedby="inputPassword" name="password" required>
            </div>

            <div class="checkbox d-flex justify-content-center mt-3">
                <div class="custom-control custom-checkbox mr-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
            </div>

            <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>

            <div class="forgot-pass text-center">
                <a href="user_pass_recovery_2.html">Forgot Password ?</a>
            </div>

        </div>

        {{--        <div class="col-md-12">--}}
        {{--            <div class="login-text text-center">--}}
        {{--                <p class="mt-3 text-white">New Here? <a href="user_register_2.html" class="">Register </a> a new user !--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </div>
</form>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
