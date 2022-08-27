@extends('frontend.master')
@section('content')
    @php
        $about_header = \App\Models\AboutHeader::find(1);
        $quality = \App\Models\QualityPolicy::find(1);
        $reliable = \App\Models\AboutReliable::find(1);
    @endphp
        <!-- Hero Slider -->
    <section class="hero bg-cover bg-position py-4"
             style="background: url({{!empty($about_header->image) ? asset($about_header->image) : asset('backend/assets/img/1280x720.png') }})">
        <div class="container py-5 index-forward text-white">
            <h1>{{$about_header->title}}</h1>
            <!-- Breadcrumb-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-none mb-0 p-0">
                    <li class="breadcrumb-item ps-0"><a href="{{ route('home') }}"> <i class="fas fa-home me-2"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="pt-1 bg-primary">
                        <img class="img-fluid"
                             src="{{ !empty($quality->image) ? asset($quality->image) : asset('backend/assets/img/810x755.png') }}"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="h6 mb-1 text-uppercase text-primary mb-3">{{$quality->section_title}}</p>
                    <h2 class="mb-4">{{$quality->title}}</h2>
                    <p class="text-sm text-muted">{{ $quality->description }}</p>
                    <ul class="list-check list-unstyled row px-3 gy-2 mb-4">
                        @foreach($quality->quality_item as $item)
                            <li class="text-sm text-muted col-lg-12">
                                {{ $item->item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container py-5">
            <header class="mb-5 text-center">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <p class="h6 text-uppercase text-primary">{{$reliable->section_title}}</p>
                        <h2>{{$reliable->title}}</h2>
                        {{--                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                        {{--                            tempor incididunt ut labore et dolore</p>--}}
                    </div>
                </div>
            </header>
            <div class="row align-items-stretch gy-4">
                @foreach($reliable->reliable_item as $item)
                    <div class="col-lg-4">
                        <div class="bg-white h-100">
                            <div class="bg-primary px-4 py-3 d-inline-block">
                                <svg class="svg-icon text-white">
                                    <use xlink:href="{{$item->icon}}"></use>
                                </svg>
                            </div>
                            <div class="px-5 pt-0 pb-5 bg-white text-center">
                                <h2 class="h4 mb-3 text-capitalize">{{$item->title}}</h2>
                                <div class="text-muted text-sm mb-0 justify-center">{!! $item->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
