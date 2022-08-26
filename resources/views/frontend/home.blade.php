@extends('frontend.master')

@section('content')

    <!-- Hero Slider -->
    @include('frontend.partials.slider')
    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <p class="h6 mb-1 text-uppercase text-primary mb-3">Global Precence</p>
                    <h2 class="mb-4">ALBEHAR CHEMICALS in Jordan, Egypt and Yemen are active in more than 24 countries
                        globally.</h2>
                    <p class="text-sm text-muted">We are strongly present mainly in the MENA region.
                        We are connected to key producers and customers throughout the whole supply chain in the
                        following countries:</p>
                    <ul class="list-unstyled row px-3 mb-4 gy-2">
                        <div class="col-6">
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6"><b>ASIA</b></li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">JORDAN</li>
                            <li class="text-sm text-muted col-lg-12 col-md-12 col-sm-12 col-12">UNITED ARAB EMIRATES
                            </li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">YEMEN</li>
                            <li class="text-sm text-muted col-lg-12 col-md-12 col-sm-12 col-12">KINGDOM SAUDI ARABIA
                            </li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">SYRIA</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">LEBANON</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">QATAR</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">IRAN</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">PALESTINE</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">OMAN</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">IRAQ</li>
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">TURKEY</li>
                        </div>
                        <div class="col-6">
                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6"><b>AFRICA</b></li>


                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">EGYPT</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">IVORY COAST</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">NIGERIA</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">CONGO (DRC)</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">MOROCCO</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">TUNISIA</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">ETHIOPIA</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">TOGO</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">SENEGAL</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">GHANA</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">GABON</li>

                            <li class="text-sm text-muted col-lg-6 col-md-6 col-sm-6 col-6">SUDAN</li>
                        </div>


                    </ul>
                    {{--                <ul class="list-inline py-4 border-top border-bottom d-flex align-items-center">--}}
                    {{--                    <li class="list-inline-item pr-4 mr-0"><img src="{{ asset('frontend/img/afriqa.png') }}" alt="" width="80"></li>--}}
                    {{--                    <li class="list-inline-item px-4 mr-0 border-left">--}}
                    {{--                        <h5 class="mb-0">Jack Foxx</h5>--}}
                    {{--                        <p class="small font-weight-normal text-muted mb-0">Chairnan and founder </p>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="list-inline-item pl-4 border-left">--}}
                    {{--                        <h5 class="mb-0">+420 754 6545 6564</h5>--}}
                    {{--                        <p class="small font-weight-normal text-muted mb-0">Call to ask any question</p>--}}
                    {{--                    </li>--}}
                    {{--                </ul>--}}
                </div>
                <div class="col-lg-6 mt-5 mb-4 mt-lg-6 mb-lg-0 order-1 order-lg-2">
                    <div class=""><img class="img-fluid" src="{{ asset('frontend/img/afriqa.png') }}" alt=""></div>
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
                        <p class="h6 text-uppercase text-primary mb-0">General Info</p>
                        <h2>We Creating Solutions For Your Business</h2>
                    </div>
                </div>
            </header>
            <div class="row align-items-stretch gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/market.png') }}" alt="" class="card-img mb-4"
                             height="200">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#laptop-screen-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Leading Supplier</h3>
                        <p class="text-sm mb-0 text-muted justify-center">Al-Behar Chemicals is a leading supplier of
                            oleo, functional and specialty chemicals, currently servicing different industries in our
                            region; covering markets of across 24 countries in the Middle East and Africa.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 justify-content-center">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/business.png') }}" alt="" class="card-img mb-4"
                             height="200">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#quality-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Strong Business</h3>
                        <p class="text-sm mb-0 text-muted justify-center">Our Company maintains strong business
                            relations with key producers and manufacturers around the globe ,and ensures a consistent
                            and steady supply of high-quality products ,that meets customer’s specifications, market
                            trends and consumer preferences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 justify-content-center">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/supplier.png') }}" alt="" class="card-img mb-4"
                             height="200">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#survey-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5 text-capitalize">supply chain</h3>
                        <p class="text-sm mb-0 text-muted justify-center">As a corner stone in supply chain, Al-Behar
                            Chemicals covers a wide-spread product portfolio ; some of which includes, chemical raw
                            materials, food ingredients and animal feed additives ,that are used in most industries such
                            as cosmetics, detergents, pharmaceuticals, tobacco & molasses, poultry and dairy farms
                            etc..</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 justify-content-center">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/wilmar.png') }}" alt="" class="card-img mb-4"
                             height="200">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#pie-chart-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Leading Companies</h3>
                        <p class="text-sm mb-0 text-muted justify-center">We are the sole representative of WILMAR (One
                            of the world’s leading companies in agribusiness and merchandiser of oleo chemicals) and
                            Volac-Wilmar (Pioneers in feed additives) in the Middle East and Africa.</p>
                    </div>
                </div>
                {{--            <div class="col-lg-4 col-md-6 justify-content-center">--}}
                {{--                <div class="px-4 py-5 border border-2 border-dash h-100">--}}
                {{--                    <img src="{{ asset('frontend/img/presence/sabic.png') }}" alt="" class="card-img mb-4" height="200">--}}
                {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                {{--                        <use xlink:href="#pay-1"> </use>--}}
                {{--                    </svg>--}}
                {{--                    <h3 class="h5">Capital Markets</h3>--}}
                {{--                    <p class="text-sm mb-0 text-muted justify-center">In addition ,we are a distributor of SABIC functional chemicals (ranked sixth among the world’s largest petrochemicals manufacturers) in Jordan, and a distributor of SUNAR (The leading company of Turkish starch & starch derivatives).</p>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="col-lg-4 col-md-6 justify-content-center">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/pench.png') }}" alt="" class="card-img mb-4"
                             height="200">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#stack-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Best Suppliers</h3>
                        <p class="text-sm mb-0 text-muted justify-center">
                            We also represent PANCHEM International Trading and Industrial Co. Ltd. (one of the largest
                            chemical industrial groups in China and a recognizable manufacturer of STPP).
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/guangzhou.jpg') }}" alt="" class="card-img mb-4"
                             height="200">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#laptop-screen-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Far East</h3>
                        <p class="text-sm mb-0 text-muted justify-center">We are also currently distributing products of
                            GUANGZHOU Chemical Import and Export Co., Ltd, which is a leading Chinese exporter of
                            detergents raw materials. Moreover, we represent National Co. for maize products (The
                            leading company of Egyptian starch & starch derivatives).</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/Clariant.jpg') }}" alt="" class="card-img mb-4"
                             height="200" width="50">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#laptop-screen-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Raw Materials</h3>
                        <p class="text-sm mb-0 text-muted justify-center">Last but not least, we are agents of Clariant
                            mining solutions in Jordan. Clariant is a world’s leading specialty chemicals company which
                            offers customized solutions for the end-to-end mining process.
                            Al-Behar Chemicals is supplying the biggest mining firms in Jordan with anticaking,
                            defoamers, colorants and mud depressants etc…
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="px-4 py-5 border border-2 border-dash h-100">
                        <img src="{{ asset('frontend/img/presence/taiko.png') }}" alt="" class="card-img mb-4"
                             height="200" width="50">
                        {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}
                        {{--                        <use xlink:href="#laptop-screen-1"> </use>--}}
                        {{--                    </svg>--}}
                        <h3 class="h5">Takio Group</h3>
                        <p class="text-sm mb-0 text-muted justify-center">Taiko Clay is a Malaysia based company which
                            has been actively engaging in the Bleaching Earth manufacturing business and Edible Oil
                            Industry for more than 30 years. We are also the biggest global partner of Wilmar edible
                            oil. Today, we have established 6 manufacturing plants in 2 countries (Malaysia and
                            Indonesia) with a total production capacity of half a million tonnes per annum.
                        </p>
                    </div>
                </div>
                <!--            <div class="col-lg-4 col-md-6">-->
                <!--                <div class="px-4 py-5 border border-2 border-dash h-100">-->
                <!--                    <img src="{{ asset('frontend/img/presence/market.png') }}" alt="" class="card-img mb-4" height="200">-->
                <!--                    {{--                    <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">--}}-->
                <!--                    {{--                        <use xlink:href="#laptop-screen-1"> </use>--}}-->
                <!--                    {{--                    </svg>--}}-->
                <!--                    <h3 class="h5">Leading Supplier</h3>-->
                <!--                    <p class="text-sm mb-0 text-muted justify-center">Al-Behar Chemicals is a leading supplier of oleo, functional and specialty chemicals, currently servicing different industries in our region; covering markets of across 24 countries in the Middle East and Africa.</p>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>
    </section>
    <!-- Divider Section -->
    <section class="bg-cover bg-center"
             style="background: url({{ asset('frontend/img/sections/generalbg.jpeg') }}) fixed ">
        <div class=" py-5">
            <div class="overlay-content">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-7 text-center text-lg-start">
                            <h2 class="text-white mb-2">You Always Get the Best Guidance</h2>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                    <div class="bg-primary pe-lg-3"><img class="img-fluid w-100"
                                                         src="{{ asset('frontend/img/sections/info-section-chemicas.png') }}"
                                                         alt=""></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-4 p-md-5 shadow bg-white">
                        <p class="h6 mb-1 text-uppercase text-primary mb-3">Why choose us</p>
                        <h2 class="mb-5">We Provide Experts To Create A Great Value For Your Business</h2>
                        <div class="row">
                            <div class="col-lg-9">
                                <ol class="list-numbers mb-0">
                                    <li class="mb-4">
                                        <h5 class="text-capitalize">high quality products</h5>
                                        <p class="text-sm text-muted">Distribute high quality products and providing
                                            high quality services</p>
                                    </li>
                                    <li class="mb-4">
                                        <h5 class="text-capitalize">Compliance with requirements</h5>
                                        <p class="text-sm text-muted">Compliance with requirements</p>
                                    </li>
                                    <li class="mb-4">
                                        <h5 class="text-capitalize">quality management system.</h5>
                                        <p class="text-sm text-muted">Regular review of effectiveness of our
                                            ISO9001:2015 compliant quality management system. </p>
                                    </li>
                                    <li>
                                        <h5 class="text-capitalize">Continual improvement</h5>
                                        <p class="text-sm text-muted">Continual improvement of our systems and
                                            operations. </p>
                                    </li>
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

    {{--<button class="btn btn-primary btn-sm d-none d-lg-inline-block" type="button" data-bs-toggle="collapse" data-bs-target="#style-switch" id="style-switch-button"><i class="fa fa-cog fa-2x"></i></button>--}}
    {{--<div class="collapse" id="style-switch">--}}
    {{--    <h5>Select theme colour</h5>--}}
    {{--    <form class="mb-3">--}}
    {{--        <select class="form-select" name="colour" id="colour">--}}
    {{--            <option value="">select colour variant</option>--}}
    {{--            <option value="css/style.default.css">red</option>--}}
    {{--            <option value="css/style.pink.css">pink</option>--}}
    {{--            <option value="css/style.green.css">green</option>--}}
    {{--            <option value="css/style.violet.css">violet</option>--}}
    {{--            <option value="css/style.sea.css">sea</option>--}}
    {{--            <option value="css/style.blue.css">blue</option>--}}
    {{--        </select>--}}
    {{--    </form>--}}
    {{--    <p><img class="img-fluid" src="{{ asset('frontend/img/template-mac.png') }}" alt=""></p>--}}
    {{--    <p class="text-muted text-sm">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>--}}
    {{--</div>--}}
    @include('frontend.partials.product')
@endsection
