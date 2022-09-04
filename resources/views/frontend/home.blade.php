@extends('frontend.master')
@section('content')
    @include('frontend.partials.slider')
    @php
        $global_precence =  \App\Models\GlobalPrecence::find(1);
        $general_info = \App\Models\GeneralInfo::find(1);
        $why_choose = \App\Models\WhyChoose::find(1);
        $video_section = \App\Models\HomeVideo::find(1);
    @endphp
    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h2 class="action-title">We understand your needs on chemicals</h2>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" href="contact.html">Request Quote</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features pb-2">
        <div class="container">
            <div class="dark-overlay-0 py-5">
                <div class="overlay-content text-white">
                    <div class="container py-5">
                        <header class="text-center">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                    <div class="post-media post-video pb-3">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <!-- Change the url -->
                                            <video width="320" height="240" autoplay="true" controls>
                                                <source src="{{asset($video_section->video)}}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <h2 class="section-title">{{$video_section->section_title}}</h2>
                                    <h2 class="h1 mb-5">{{$video_section->title}}</h2><a
                                        class="btn btn-primary" href="{{ route('products') }}">View our products</a>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service1.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon"/>
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="service-single.html">Zero Harm Everyday</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking
                                    team looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="service-single.html"
                                   aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service2.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon"/>
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="service-single.html">Virtual Construction</a>
                                </h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking
                                    team looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="service-single.html"
                                   aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service2 end -->
                </div><!-- Col 2 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service3.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon3.png" alt="service-icon"/>
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="service-single.html">Build To Last</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking
                                    team looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="service-single.html"
                                   aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 3 end -->
            </div>--}}<!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->

    @include('frontend.partials.counter')<!-- Facts end -->

    <section class="py-5 ts-service-area">
        <div class="container py-5">
            <h3 class="section-title">{{$why_choose->title}}</h3>
            <h2 class="mb-5">{{$why_choose->subtitle}}</h2>
            <div class="row align-items-center gx-lg-0">
                <div class="col-lg-5">
                    <div class="bg-primary pe-lg-3">
                        <img class="img-fluid w-100"
                             src="{{ !empty($why_choose->image) ? asset($why_choose->image) : asset('backend/assets/img/570x590.png') }}"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-4 p-md-5 shadow bg-white">

                        <div class="row">
                            <div class="col-lg-9">
                                <ol class="list-numbers mb-0">
                                    @foreach($why_choose->why_choose_list as $why)
                                        <li class="mb-4">
                                            <h5 class="text-capitalize">{{$why->title}}</h5>
                                            <p class="text-sm text-muted">
                                                {{$why->description}}
                                            </p>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="section-title">Work of Excellence</h2>
                    <h3 class="section-sub-title">Our Products</h3>
                </div>
            </div>
            <!--/ Title row end -->

            @include('frontend.partials.product_section')<!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Project area end -->

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title">{{$global_precence->section_title}}</h2>
                    <div class="">
                        <h4 class="section-sub-title">{{$global_precence->title}}</h4>
                        <p class="text-sm text-muted">{{$global_precence->description}}</p>
                        <ul class="list-unstyled row px-3 mb-4 gy-2">
                            <div class="col-6">
                                <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6 text-uppercase">
                                    <b>{{$global_precence->asia_title}}</b></li>
                                @foreach($global_precence->asia_country as $asia)
                                    <li class="text-sm text-muted col-lg-12 col-md-12 col-sm-12 col-12">{{$asia->country}}</li>
                                @endforeach
                                <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6"></li>
                            </div>
                            <div class="col-6">
                                <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6 text-uppercase">
                                    <b>{{$global_precence->africa_title}}</b></li>
                                @foreach($global_precence->africa_country as $africa)
                                    <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">{{$africa->country}}</li>
                                @endforeach
                            </div>


                        </ul>
                    </div>

                    <!--/ Testimonial carousel end-->
                </div><!-- Col end -->

                <div class="col-lg-4 mt-5 mt-lg-50">

                    <img src="{{asset($global_precence->image)}}" alt="" width="700">

                </div>

            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Content end -->

    <section class="subscribe no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="subscribe-call-to-acton">
                        <h3>Can We Help?</h3>
                        <h4>(+9) 847-291-4353</h4>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-8">
                    <div class="ts-newsletter row align-items-center">
                        <div class="col-md-5 newsletter-introtext">
                            <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                            <p class="text-white">Latest updates and news</p>
                        </div>

                        <div class="col-md-7 newsletter-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                    <input type="email" name="email" id="newsletter-email"
                                           class="form-control form-control-lg"
                                           placeholder="Your your email and hit enter" autocomplete="off">
                                </div>
                            </form>
                        </div>
                    </div><!-- Newsletter end -->
                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--/ subscribe end -->
    <section class="py-5">
        <div class="container py-5 text-center">
            <header class="mb-5">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <p class="h6 text-uppercase text-primary mb-0">{{$general_info->section_title}}</p>
                        <h2>{{$general_info->title}}</h2>
                    </div>
                </div>
            </header>
            <div class="row align-items-stretch gy-4">
                @foreach($general_info->general_info_card as $card)
                    <div class="col-lg-4 col-md-6 pt-2">
                        <div class="px-4 py-5 border border-2 border-dash h-100">
                            <img
                                src="{{ !empty($card->image) ? asset($card->image) : asset('backend/assets/img/1280x800.png') }}"
                                alt="" class="card-img mb-4"
                                height="200">
                            {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                                                    <use xlink:href="#laptop-screen-1"> </use>
                                                </svg>--}}
                            <h3 class="h5">{{$card->title}}</h3>
                            <p class="text-sm mb-0 text-muted text-justify">{{$card->description}}</p>
                        </div>
                    </div>
                @endforeach
                {{--  --}}{{--            <div class="col-lg-4 col-md-6 justify-content-center">--}}{{--
                  --}}{{--                <div class="px-4 py-5 border border-2 border-dash h-100">--}}{{--
                  --}}{{--                    <img src="{{ asset('frontend/img/presence/sabic.png') }}" alt="" class="card-img mb-4" height="200">--}}{{--
                  --}}{{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}{{--
                  --}}{{--                        <use xlink:href="#pay-1"> </use>--}}{{--
                  --}}{{--                    </svg>--}}{{--
                  --}}{{--                    <h3 class="h5">Capital Markets</h3>--}}{{--
                  --}}{{--                    <p class="text-sm mb-0 text-muted justify-center">In addition ,we are a distributor of SABIC functional chemicals (ranked sixth among the world’s largest petrochemicals manufacturers) in Jordan, and a distributor of SUNAR (The leading company of Turkish starch & starch derivatives).</p>--}}{{--
                  --}}{{--                </div>--}}{{--
                  --}}{{--            </div>--}}{{--
                  <!--            <div class="col-lg-4 col-md-6">-->
                  <!--                <div class="px-4 py-5 border border-2 border-dash h-100">-->
                  <!--                    <img src="{{ asset('frontend/img/presence/market.png') }}" alt="" class="card-img mb-4" height="200">-->
                  <!--                    --}}{{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}{{---->
                  <!--                    --}}{{--                        <use xlink:href="#laptop-screen-1"> </use>--}}{{---->
                  <!--                    --}}{{--                    </svg>--}}{{---->
                  <!--                    <h3 class="h5">Leading Supplier</h3>-->
                  <!--                    <p class="text-sm mb-0 text-muted justify-center">Al-Behar Chemicals is a leading supplier of oleo, functional and specialty chemicals, currently servicing different industries in our region; covering markets of across 24 countries in the Middle East and Africa.</p>-->
                  <!--                </div>-->
                  <!--            </div>-->--}}
            </div>
        </div>
    </section>
    {{--    <section id="news" class="news">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row text-center">--}}
    {{--                <div class="col-12">--}}
    {{--                    <h2 class="section-title">Work of Excellence</h2>--}}
    {{--                    <h3 class="section-sub-title">Recent Projects</h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!--/ Title row end -->--}}

    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 col-md-6 mb-4">--}}
    {{--                    <div class="latest-post">--}}
    {{--                        <div class="latest-post-media">--}}
    {{--                            <a href="news-single.html" class="latest-post-img">--}}
    {{--                                <img loading="lazy" class="img-fluid" src="images/news/news1.jpg" alt="img">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="post-body">--}}
    {{--                            <h4 class="post-title">--}}
    {{--                                <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million--}}
    {{--                                    Medical Clinic in Mid-Missouri</a>--}}
    {{--                            </h4>--}}
    {{--                            <div class="latest-post-meta">--}}
    {{--                        <span class="post-item-date">--}}
    {{--                          <i class="fa fa-clock-o"></i> July 20, 2017--}}
    {{--                        </span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div><!-- Latest post end -->--}}
    {{--                </div><!-- 1st post col end -->--}}

    {{--                <div class="col-lg-4 col-md-6 mb-4">--}}
    {{--                    <div class="latest-post">--}}
    {{--                        <div class="latest-post-media">--}}
    {{--                            <a href="news-single.html" class="latest-post-img">--}}
    {{--                                <img loading="lazy" class="img-fluid" src="images/news/news2.jpg" alt="img">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="post-body">--}}
    {{--                            <h4 class="post-title">--}}
    {{--                                <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation--}}
    {{--                                    Facility Expansion Project Named</a>--}}
    {{--                            </h4>--}}
    {{--                            <div class="latest-post-meta">--}}
    {{--                        <span class="post-item-date">--}}
    {{--                          <i class="fa fa-clock-o"></i> June 17, 2017--}}
    {{--                        </span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div><!-- Latest post end -->--}}
    {{--                </div><!-- 2nd post col end -->--}}

    {{--                <div class="col-lg-4 col-md-6 mb-4">--}}
    {{--                    <div class="latest-post">--}}
    {{--                        <div class="latest-post-media">--}}
    {{--                            <a href="news-single.html" class="latest-post-img">--}}
    {{--                                <img loading="lazy" class="img-fluid" src="images/news/news3.jpg" alt="img">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="post-body">--}}
    {{--                            <h4 class="post-title">--}}
    {{--                                <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin--}}
    {{--                                    Construction Solar Facilities</a>--}}
    {{--                            </h4>--}}
    {{--                            <div class="latest-post-meta">--}}
    {{--                        <span class="post-item-date">--}}
    {{--                          <i class="fa fa-clock-o"></i> Aug 13, 2017--}}
    {{--                        </span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div><!-- Latest post end -->--}}
    {{--                </div><!-- 3rd post col end -->--}}
    {{--            </div>--}}
    {{--            <!--/ Content row end -->--}}

    {{--            <div class="general-btn text-center mt-4">--}}
    {{--                <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <!--/ Container end -->--}}
    {{--    </section>--}}
@endsection

{{--

@extends('frontend.master')
@section('content')
    <!-- Hero Slider -->
    @include('frontend.partials.slider')
    @php
        $global_precences= \App\Models\GlobalPrecence::find(1);
        $general_info = \App\Models\GeneralInfo::find(1);
        $home_contact = \App\Models\HomeContact::find(1);
        $why_choose = \App\Models\WhyChoose::find(1);
    @endphp
        <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <p class="h6 mb-1 text-uppercase text-primary mb-3">{{$global_precences->section_title}}</p>
                    <h2 class="mb-4">{{$global_precences->title}}</h2>
                    <p class="text-sm text-muted">{{$global_precences->description}}</p>
                    <ul class="list-unstyled row px-3 mb-4 gy-2">
                        <div class="col-6">
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6 text-uppercase">
                                <b>{{$global_precences->asia_title}}</b></li>
                            @foreach($global_precences->asia_country as $asia)
                                <li class="text-sm text-muted col-lg-12 col-md-12 col-sm-12 col-12">{{$asia->country}}</li>
                            @endforeach
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6"></li>
                        </div>
                        <div class="col-6">
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6 text-uppercase">
                                <b>{{$global_precences->africa_title}}</b></li>
                            @foreach($global_precences->africa_country as $africa)
                                <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">{{$africa->country}}</li>
                            @endforeach
                        </div>


                    </ul>
                 <ul class="list-inline py-4 border-top border-bottom d-flex align-items-center">
                                         <li class="list-inline-item pr-4 mr-0"><img src="{{ asset('frontend/img/afriqa.png') }}" alt="" width="80"></li>
                                         <li class="list-inline-item px-4 mr-0 border-left">
                                             <h5 class="mb-0">Jack Foxx</h5>
                                             <p class="small font-weight-normal text-muted mb-0">Chairnan and founder </p>
                                         </li>
                                         <li class="list-inline-item pl-4 border-left">
                                             <h5 class="mb-0">+420 754 6545 6564</h5>
                                             <p class="small font-weight-normal text-muted mb-0">Call to ask any question</p>
                                         </li>
                                     </ul>

                </div>
                <div class="col-lg-6 mt-5 mb-4 mt-lg-6 mb-lg-0 order-1 order-lg-2">
                    <div class="">
                        <img class="img-fluid"
                             src="{{!empty($global_precences->image) ? asset($global_precences->image) : asset('backend/assets/img/1200x994.png') }}"
                             alt=""
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="py-5">
        <div class="container py-5 text-center">
            <header class="mb-5">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <p class="h6 text-uppercase text-primary mb-0">{{$general_info->section_title}}</p>
                        <h2>{{$general_info->title}}</h2>
                    </div>
                </div>
            </header>
            <div class="row align-items-stretch gy-4">
                @foreach($general_info->general_info_card as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="px-4 py-5 border border-2 border-dash h-100">
                            <img
                                src="{{ !empty($card->image) ? asset($card->image) : asset('backend/assets/img/1280x800.png') }}"
                                alt="" class="card-img mb-4"
                                height="200">
                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                                                    <use xlink:href="#laptop-screen-1"> </use>
                                                </svg>

                            <h3 class="h5">{{$card->title}}</h3>
                            <p class="text-sm mb-0 text-muted justify-center">{{$card->description}}</p>
                        </div>
                    </div>
                @endforeach

            <div class="col-lg-4 col-md-6 justify-content-center">

                <div class="px-4 py-5 border border-2 border-dash h-100">

                    <img src="{{ asset('frontend/img/presence/sabic.png') }}" alt="" class="card-img mb-4" height="200">

                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">

                        <use xlink:href="#pay-1"> </use>

                    </svg>

                    <h3 class="h5">Capital Markets</h3>

                    <p class="text-sm mb-0 text-muted justify-center">In addition ,we are a distributor of SABIC functional chemicals (ranked sixth among the world’s largest petrochemicals manufacturers) in Jordan, and a distributor of SUNAR (The leading company of Turkish starch & starch derivatives).</p>

                </div>

            </div>
                  <!--            <div class="col-lg-4 col-md-6">-->
                  <!--                <div class="px-4 py-5 border border-2 border-dash h-100">-->
                  <!--                    <img src="{{ asset('frontend/img/presence/market.png') }}" alt="" class="card-img mb-4" height="200">-->
                  <!--
                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
-->
                  <!--
                        <use xlink:href="#laptop-screen-1"> </use>
-->
                  <!--
                    </svg>
-->
                  <!--                    <h3 class="h5">Leading Supplier</h3>-->
                  <!--                    <p class="text-sm mb-0 text-muted justify-center">Al-Behar Chemicals is a leading supplier of oleo, functional and specialty chemicals, currently servicing different industries in our region; covering markets of across 24 countries in the Middle East and Africa.</p>-->
                  <!--                </div>-->
                  <!--            </div>-->

            </div>
        </div>
    </section>
    <!-- Divider Section -->
    <section class="bg-cover bg-center"
             style="background: url({{!empty($home_contact->image) ?  asset($home_contact->image) : asset('backend/assets/img/1000x667.png') }}) fixed ">
        <div class=" py-5">
            <div class="overlay-content">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-7 text-center text-lg-start">
                            <h2 class="text-white mb-2">{{$home_contact->title}}</h2>
                            <p class="text-white mb-0">{{$home_contact->description}}</p>
                        </div>
                        <div class="col-lg-3 ms-auto text-center text-lg-end"><a class="btn btn-outline-light"
                                                                                 href="{{ route('contacts') }}">Contact
                                Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center gx-lg-0">
                <div class="col-lg-5">
                    <div class="bg-primary pe-lg-3">
                        <img class="img-fluid w-100"
                             src="{{ !empty($why_choose->image) ? asset($why_choose->image) : asset('backend/assets/img/570x590.png') }}"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-4 p-md-5 shadow bg-white">
                        <p class="h6 mb-1 text-uppercase text-primary mb-3">{{$why_choose->title}}</p>
                        <h2 class="mb-5">{{$why_choose->subtitle}}</h2>
                        <div class="row">
                            <div class="col-lg-9">
                                <ol class="list-numbers mb-0">
                                    @foreach($why_choose->why_choose_list as $why)
                                        <li class="mb-4">
                                            <h5 class="text-capitalize">{{$why->title}}</h5>
                                            <p class="text-sm text-muted">
                                                {{$why->description}}
                                            </p>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section -->
    @include('frontend.partials.video')

<button class="btn btn-primary btn-sm d-none d-lg-inline-block" type="button" data-bs-toggle="collapse" data-bs-target="#style-switch" id="style-switch-button"><i class="fa fa-cog fa-2x"></i></button>
    <div class="collapse" id="style-switch">
        <h5>Select theme colour</h5>
        <form class="mb-3">
            <select class="form-select" name="colour" id="colour">
                <option value="">select colour variant</option>
                <option value="css/style.default.css">red</option>
                <option value="css/style.pink.css">pink</option>
                <option value="css/style.green.css">green</option>
                <option value="css/style.violet.css">violet</option>
                <option value="css/style.sea.css">sea</option>
                <option value="css/style.blue.css">blue</option>
            </select>
        </form>
        <p><img class="img-fluid" src="{{ asset('frontend/img/template-mac.png') }}" alt=""></p>
        <p class="text-muted text-sm">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>

    @include('frontend.partials.product')
@endsection
--}}
