<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="{{url('/')}}">
                            <img loading="lazy" src="{{asset('frontend/images/logo/logo.png')}}"
                                 alt="Al Behar Chemicals">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle">(+962)-6-5811-799</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email Us</p>
                                        <p class="info-box-subtitle">chemicals@al-behar.com</p>
                                    </div>
                                </div>
                            </li>
                            <li class="last">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Global Certificate</p>
                                        <p class="info-box-subtitle">ISO 9001:2015</p>
                                    </div>
                                </div>
                            </li>
                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                            </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <div class="logo logo-default mr-5 py-2"><img
                                    src="{{asset('frontend/images/logo/logo.png')}}" alt=""
                                    class="hidden header-logo"
                                    width="200"></div>
                            <ul class="nav navbar-nav mr-auto">

                                <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                                    <a href="{{url('/')}}" class="nav-link">Home</a>
                                    {{-- <ul class="dropdown-menu" role="menu">
                                         <li class="active"><a href="index.html">Home One</a></li>
                                         <li><a href="index-2.html">Home Two</a></li>
                                     </ul>--}}
                                </li>

                                <li class="nav-item {{request()->is('about') ? 'active' : ''}}">
                                    <a href="{{route('about')}}"
                                       class="nav-link">
                                        About
                                    </a>
                                    {{--<ul class="dropdown-menu" role="menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Our People</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>--}}
                                </li>

                                <li class="nav-item {{request()->is('products') ? 'active' : ''}}">
                                    <a href="{{route('products')}}"
                                       class="nav-link ">Products</a>
                                    {{--                                    <ul class="dropdown-menu" role="menu">--}}
                                    {{--                                        <li><a href="projects.html">Projects All</a></li>--}}
                                    {{--                                        <li><a href="projects-single.html">Projects Single</a></li>--}}
                                    {{--                                    </ul>--}}
                                </li>

                                {{-- <li class="nav-item dropdown">
                                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i
                                             class="fa fa-angle-down"></i></a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a href="services.html">Services All</a></li>
                                         <li><a href="service-single.html">Services Single</a></li>
                                     </ul>
                                 </li>--}}

                                {{--<li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent
                                                Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">Child Menu 1</a></li>
                                                <li><a href="#!">Child Menu 2</a></li>
                                                <li><a href="#!">Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>--}}

                                <li class="nav-item {{request()->is('news') ? 'active' : ''}}">
                                    <a href="{{route('news')}}" class="nav-link">News</a>
                                    {{--<ul class="dropdown-menu" role="menu">
                                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                        <li><a href="news-single.html">News Single</a></li>
                                    </ul>--}}
                                </li>

                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                    <input type="text" class="form-control" id="search-field"
                           placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>

{{--<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 text-center text-lg-left">
                    <a class="text-color mr-3" href="tel:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                                             href="https://facebook.com/themefisher/"><i
                                    class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                                             href="https://twitter.com/themefisher"><i
                                    class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                                             href="https://github.com/themefisher"><i
                                    class="ti-github"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                                             href="https://instagram.com/themefisher/"><i
                                    class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a>
                        </li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a>
                        </li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                href="scholarship.html">SCHOLARSHIP</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal"
                                data-toggle="modal" data-target="#loginModal">login</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal"
                                data-toggle="modal" data-target="#signupModal">register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/images/logo/logo.png')}}"
                                                               alt="logo" width="260"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item @@about">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item @@courses">
                            <a class="nav-link" href="courses.html">COURSES</a>
                        </li>
                        <li class="nav-item @@events">
                            <a class="nav-link" href="events.html">EVENTS</a>
                        </li>
                        <li class="nav-item @@blog">
                            <a class="nav-link" href="blog.html">BLOG</a>
                        </li>
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="teacher.html">Teacher</a></li>
                                <li><a class="dropdown-item" href="teacher-single.html">Teacher Single</a></li>
                                <li><a class="dropdown-item" href="notice.html">Notice</a></li>
                                <li><a class="dropdown-item" href="notice-single.html">Notice Details</a></li>
                                <li><a class="dropdown-item" href="research.html">Research</a></li>
                                <li><a class="dropdown-item" href="scholarship.html">Scholarship</a></li>
                                <li><a class="dropdown-item" href="course-single.html">Course Details</a></li>
                                <li><a class="dropdown-item" href="event-single.html">Event Details</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Details</a></li>

                                <li class="dropdown-item dropdown dropleft">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdownSubmenu" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sub Menu
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownSubmenu">
                                        <li><a class="dropdown-item" href="#!">Sub Menu 01</a></li>
                                        <li><a class="dropdown-item" href="#!">Sub Menu 02</a></li>
                                        <li><a class="dropdown-item" href="#!">Sub Menu 03</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="contact.html">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>--}}

{{--
<header class="header fixed">
    <div class="top-bar bg-dark text-white">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 bg-primary py-2 text-center text-lg-start d-none d-lg-flex align-items-center">
                    <p class="mb-0 text-sm"><i class="fas fa-clock me-2"></i>Opening hours: Sat - Thu 9:00 - 18:00</p>
                </div>
                <div class="col-lg-8 text-end py-2 text-center text-lg-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="fw-normal text-sm reset-anchor" href="#!"><i class="fas fa-mobile me-2"></i>+962 6 5811 799</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item"><a class="fw-normal text-sm reset-anchor" href="#!"><i class="fas fa-envelope me-2"></i>info@al-behar.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>
--}}
