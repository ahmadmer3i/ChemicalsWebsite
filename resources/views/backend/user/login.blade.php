<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <title>Chemicals Sign In</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free."/>
    <meta name="keywords"
          content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('backend/assets/plugins/global/plugins.bundle.cs')}}s" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-body">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url({{asset('backend/assets/media/illustrations/sketchy-1/14.png')}}">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="#" class="mb-12">
                <img alt="Logo" src="{{asset('frontend/images/logo/logo.png')}}" class="h-70px"/>
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}"
                      method="post">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Sign In </h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">To
                            <div
                                class="link-danger fw-bolder">Chemicals Dashboard
                            </div>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg form-control-solid" type="text" id="username"
                               name="username"
                               autocomplete="off"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            <a href="../../demo1/dist/authentication/layouts/basic/password-reset.html"
                               class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg form-control-solid" type="password" id="password"
                               name="password"
                               autocomplete="off"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                            <span class="indicator-label">Continue</span>
                            <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Submit button-->
                        <!--begin::Separator-->
                        <!--end::Google link-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="{{route('about')}}" class="text-muted text-hover-primary px-2">About</a>
                <a href="mailto:a.merie@al-behar.com" class="text-muted text-hover-primary px-2">Contact</a>
                <a href="{{route('contacts')}}" class="text-muted text-hover-primary px-2">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('backend/assets/js/custom/authentication/sign-in/general.js')}}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>

{{--
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

        --}}
{{--        <div class="col-md-12">--}}{{--

        --}}
{{--            <div class="login-text text-center">--}}{{--

        --}}
{{--                <p class="mt-3 text-white">New Here? <a href="user_register_2.html" class="">Register </a> a new user !--}}{{--

        --}}
{{--                </p>--}}{{--

        --}}
{{--            </div>--}}{{--

        --}}
{{--        </div>--}}{{--


    </div>
</form>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
--}}
