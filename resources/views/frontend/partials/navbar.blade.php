<nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm" id="navbar_top">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="" width="200"></a>
        <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item mx-2">
                    <!-- Link--><a class="nav-link text-uppercase active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <!-- Link--><a class="nav-link text-uppercase" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item mx-2">
                    <!-- Link-->
                    <a class="nav-link text-uppercase" href="{{ route('products') }}">Products</a>
                </li>

{{--                <li class="nav-item ms-2 dropdown"><a class="nav-link text-uppercase dropdown-toggle pe-0" id="navbarDropdownMenuLink" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>--}}
{{--                    <div class="dropdown-menu mt-lg-4 text-sm" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="{{ route('products') }}">All Products</a>--}}
{{--                        <a class="dropdown-item" href="#">Chemicals</a>--}}
{{--                        <a class="dropdown-item" href="#">Construction Chemicals</a>--}}
{{--                        <a class="dropdown-item" href="#">PH Adjustment Chemicals</a>--}}
{{--                        <a class="dropdown-item" href="#">Mining</a>--}}
{{--                        <a class="dropdown-item" href="#">Animal Feed Additives</a>--}}
{{--                        <a class="dropdown-item" href="#">Food ingredients</a>--}}
{{--                        <a class="dropdown-item" href="#">Filler</a>--}}
{{--                        <a class="dropdown-item" href="#">Coloring</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
<!--                <li class="nav-item mx-2">-->
<!--                    -->
<!--                    <a class="nav-link text-uppercase" href="contact.html">News & Media</a>-->
<!--                </li>-->
<!--                <li class="nav-item mx-2">-->
<!--                   <a class="nav-link text-uppercase" href="#">Careers</a>-->
<!--                </li>-->
                <li class="nav-item mx-2">
                    <a class="nav-link text-uppercase" href="{{ route('contacts') }}">Contact</a>
                </li>

{{--                <li class="nav-item ms-lg-3 ps-lg-3"><a class="btn btn-outline-primary btn-sm" href="contact.html">Request a quote</a></li>--}}
            </ul>
        </div>
    </div>
</nav>

