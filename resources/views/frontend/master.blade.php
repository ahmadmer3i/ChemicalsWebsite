<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--    <title>Al - Behar Chemicals</title>--}}
    <meta name="description" content="">
    <meta name="robots" content="all,follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap">
    <!-- Modal Video-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/modal-video/css/modal-video.min.css') }}">
    <!-- Leaflet-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.green.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/timeline.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    @yield('style')
</head>
<body>
<div id="app">
    @include('frontend.partials.header')
    @include('frontend.partials.navbar')

    <main class="">

        @yield('content')

    </main>
    @include('frontend.partials.footer')
</div>
<!-- JavaScript files-->
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/modal-video/js/modal-video.js') }}"></script>
<script src="{{ asset('frontend/vendor/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('frontend/js/front.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite -
    //   see more here
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
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

    // this is set to BootstrapTemple website as you cannot
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

</script>

<script>


    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });


</script>

@yield('script')
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>
