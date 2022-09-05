<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Al Behar Chemicals</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Ahmad Merie">
    <meta name=generator content="Ahmad Merie">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/animate-css/animate.css')}}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick-theme.css')}}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/colorbox/colorbox.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/icons/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/modal-video/css/modal-video.min.css')}}">


</head>
<body>
<div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="top-info text-center text-md-left">
                        <li><i class="fas fa-map-marker-alt"></i>
                            <p class="info-text">Al Behar Group, Amman - Jordan</p>
                        </li>
                    </ul>
                </div>
                <!--/ Top info end -->

                <div class="col-lg-4 col-md-4 col-sm-12 top-social text-center text-md-right">
                    <ul class="list-unstyled">
                        <li>
                            <a title="Facebook" href="#">
                                <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a title="Twitter" href="#">
                                <span class="social-icon"><i class="fab fa-twitter"></i></span>
                            </a>
                            <a title="Instagram" href="#">
                                <span class="social-icon"><i class="fab fa-instagram"></i></span>
                            </a>
                            <a title="Linkdin" href="#">
                                <span class="social-icon"><i class="fab fa-github"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/ Top social end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->

    <!--/ Header end -->
    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')<!-- Footer end -->


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="{{asset('frontend/plugins/jQuery/jquery.min.js')}}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{asset('frontend/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{asset('frontend/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/slick/slick-animation.min.js')}}"></script>
    <!-- Color box -->
    <script src="{{asset('frontend/plugins/colorbox/jquery.colorbox.js')}}"></script>
    <!-- shuffle -->
    <script src="{{asset('frontend/plugins/shuffle/shuffle.min.js')}}" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhcKBSzpWtBiRNjzaPDzzzmAEKSDuRjZ8" defer></script>
    <!-- Google Map Plugin-->
    <script src="{{asset('frontend/plugins/google-map/map.js')}}" defer></script>

    <!-- Template custom -->
    <script src="{{asset('frontend/js/script.js')}}"></script>
    <script src="{{asset('frontend/plugins/modal-video/js/jquery-modal-video.js')}}"></script>
    <script>
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function (e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }

        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>

</div><!-- Body inner end -->
</body>

</html>
