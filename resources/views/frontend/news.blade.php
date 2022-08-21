@extends('frontend.master')
@section('content')

    <!-- Hero Slider -->
    <section class="hero bg-cover bg-position py-4" style="background: url({{ asset('frontend/img/about.jpeg') }})">
        <div class="container py-5 index-forward text-white">
            <h1>News & Media</h1>
            <!-- Breadcrumb-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-none mb-0 p-0">
                    <li class="breadcrumb-item ps-0"><a href="{{ route('home') }}"> <i class="fas fa-home me-2"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">News & Media</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-4">
                            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                                 data-mdb-ripple-color="light">
                                <img src="{{asset('frontend/img/warehouse.png')}}" class="img-fluid"/>
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                            <h4><strong>Behar Chemicals New Warehouse</strong></h4>
                            <p class="text-muted">
                                Emerging from our beliefs in reaching a wider retail customer base and transforming our
                                warehouse in Jordan into a new retail sales center, a new warehouse, laying over a 3200
                                m2 land area, has been established in Sahab, Rujm al-Shami area. The new warehouse will
                                assist in expanding our product portfolio to serve a wider range of customers.
                            </p>
                            {{--                            <button type="button" class="btn btn-primary">Read more</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="py-5 bg-light">
        <div class="container py-5">
            <header class="mb-5 text-center">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <p class="h6 text-uppercase text-primary">Reliable &amp; Trustworthy</p>
                        <h2>We're looking for specific approach to each cases</h2>
                        {{--                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                        {{--                            tempor incididunt ut labore et dolore</p>--}}
                    </div>
                </div>
            </header>
            <div class="row align-items-stretch gy-4">
                <div class="col-lg-4">
                    <div class="bg-white h-100">
                        <div class="bg-primary px-4 py-3 d-inline-block">
                            <svg class="svg-icon text-white">
                                <use xlink:href="#arrow-target-1"></use>
                            </svg>
                        </div>
                        <div class="px-5 pt-0 pb-5 bg-white text-center">
                            <h2 class="h4 mb-3 text-capitalize">Our mission</h2>
                            <p class="text-muted text-sm mb-0 justify-center">Partner up with both suppliers and
                                customers to supply the Middle East, North & West African region adequately,
                                consistently and on timely manner; through horizontal integration and wide-spread
                                product portfolio.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white h-100">
                        <div class="bg-primary px-4 py-3 d-inline-block">
                            <svg class="svg-icon text-white">
                                <use xlink:href="#stack-1"></use>
                            </svg>
                        </div>
                        <div class="px-5 pt-0 pb-5 bg-white text-center">
                            <h2 class="h4 mb-3 text-capitalize">Our vision</h2>
                            <p class="text-muted text-sm mb-0 justify-center">Contributing to the industrial and
                                economic development of the region by playing a vital role as a trader in the supply
                                chain.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white h-100">
                        <div class="bg-primary px-4 py-3 d-inline-block">
                            <svg class="svg-icon text-white">
                                <use xlink:href="#sales-up-1"></use>
                            </svg>
                        </div>
                        <div class="px-5 pt-0 pb-5 bg-white text-center">
                            <h2 class="h4 mb-3 text-capitalize">Our Core Values</h2>
                            <p class="text-muted text-sm mb-0 justify-center">Our firm insists on the highest standards
                                of quality and performance. It is through attention to detail that this can be achieved.
                                Serving our customers with transparency, and our ability to accommodate and empathize
                                with the situations that our customers and stakeholders face, made it possible for us to
                                achieve long-term relationships with them. <br><br>We believe in the necessity of
                                complying to standards through our code of conduct and code of ethics, in addition to
                                our strong belief in investing in human resources and building trust with them, which is
                                leading us to continuous improvement and success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-5">
         <div class="container py-5">
             <h2>Frequently asked questions</h2>
             <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
             <div class="row gy-5">
                 <div class="col-lg-6">
                     <div class="accordion" id="accordionExample">
                         <div class="accordion-item border-0 mb-1">
                             <div class="accordion-header p-0 border-0 bg-white" id="headingOne">
                                 <h6 class="mb-0">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What
                                         is the procedure to join with your company?

                                     </button>
                                 </h6>
                             </div>
                             <div class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"
                                 id="collapseOne">
                                 <div class="p-4">
                                     <p class="text-sm text-muted mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high
                                         life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                         skateboard dolor brunch.</p>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item border-0 mb-1">
                             <div class="accordion-header p-0 border-0 bg-white" id="headingTwo">
                                 <h6 class="mb-0">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Do
                                         you give any offer for premium customer?

                                     </button>
                                 </h6>
                             </div>
                             <div class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample"
                                 id="collapseTwo">
                                 <div class="p-4">
                                     <p class="text-sm text-muted mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high
                                         life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                         skateboard dolor brunch.</p>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item border-0 mb-1">
                             <div class="accordion-header p-0 border-0 bg-white" id="headingThree">
                                 <h6 class="mb-0">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapseThree" aria-expanded="false"
                                         aria-controls="collapseThree">What makes you special from others?

                                     </button>
                                 </h6>
                             </div>
                             <div class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample"
                                 id="collapseThree">
                                 <div class="p-4">
                                     <p class="text-sm text-muted mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high
                                         life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                         skateboard dolor brunch.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <ul class="list-unstyled">
                         <li class="d-flex">
                             <svg class="svg-icon text-primary">
                                 <use xlink:href="#sales-up-1"> </use>
                             </svg>
                             <div class="ms-3">
                                 <h5>Talent &amp; HR Analytics</h5>
                                 <p class="text-sm text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                     cillum dolore eu fugiat. </p>
                             </div>
                         </li>
                         <li class="d-flex">
                             <svg class="svg-icon text-primary">
                                 <use xlink:href="#shield-security-1"> </use>
                             </svg>
                             <div class="ms-3">
                                 <h5>Fraud &amp; Risk Analytics</h5>
                                 <p class="text-sm text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                     cillum dolore eu fugiat. </p>
                             </div>
                         </li>
                         <li class="d-flex">
                             <svg class="svg-icon text-primary">
                                 <use xlink:href="#pie-chart-1"> </use>
                             </svg>
                             <div class="ms-3">
                                 <h5>Marketing Analytics.</h5>
                                 <p class="text-sm text-muted">Duis aute irure dolor in reprehenderit in voluptate velit
                                     esse cillum dolore eu fugiat. </p>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>--}}
@endsection
@section('script')

@endsection
