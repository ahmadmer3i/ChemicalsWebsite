@extends('frontend.master')
@section('content')
    <div id="banner-area" class="banner-area overlay sm-overlay"
         style="background-image:url({{asset($category->image)}}); background-attachment: fixed;">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">{{$category->name}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('products')}}">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-3 col-lg-4 col-sm-12">
                    <div class="sidebar sidebar-left">
                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="nav service-menu">
                                <div class="col-lg-12 col-md-4 col-sm-4">
                                    @foreach($category->product_subcategory as $subcategory)
                                        <li>
                                            <a href="{{route('product-subcategory-details', $subcategory->id)}}">{{ $subcategory->name }}</a>
                                        </li>
                                    @endforeach
                                </div>
                            </ul>
                        </div><!-- Widget end -->

                        {{--<div class="widget">
                            <div class="quote-item quote-border">
                                <div class="quote-text-border">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid.
                                </div>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png"
                                         alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Weldon Cash</h3>
                                        <span class="quote-subtext">CEO, First Choice Group</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->

                        </div>--}}<!-- Widget end -->

                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

                <div class="col-xl-8 col-lg-8">
                    <div class="container">
                        <div class="content-inner-page">

                            <h2 class="column-title mrt-0">{{$category->name}}</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    {!! $category->description !!}
                                </div><!-- col end -->
                            </div><!-- 1st row end-->

                            <div class="gap-40"></div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div id="page-slider" class="page-slider">
                                        @foreach($category->product_subcategory as $subcategory)
                                            <div class="item">
                                                <img loading="lazy" class="img-fluid" width="100%"
                                                     src="{{asset($subcategory->image)}}"
                                                     alt="project-slider-image"/>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div><!-- Page slider end -->

                            <div class="gap-40"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="column-title-small">{{$category->details_title}}</h3>
                                    {!! $category->details !!}
                                </div>

                                <div class="col-md-6 mt-5 mt-md-0">
                                    <h3 class="column-title-small">{{$category->questions_title}}</h3>

                                    <div class="accordion accordion-group accordion-classic"
                                         id="construction-accordion">
                                        @foreach($category->product_questions as $question)
                                            <div class="card">
                                                <div class="card-header p-0 bg-transparent" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                                data-toggle="collapse"
                                                                data-target="#collapse{{$question->id}}"
                                                                aria-expanded="false"
                                                                aria-controls="collapse{{$question->id}}">
                                                            {{$question->question}}
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse{{$question->id}}"
                                                     class="collapse @if($loop->first) show @endif"
                                                     aria-labelledby="headingOne"
                                                     data-parent="#construction-accordion">
                                                    <div class="card-body">
                                                        {!! $question->answer !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{--<div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                            data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                        What are the first aid requirements for sites?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                 data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea com modo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu fugiat nulla
                                                    pariatur.
                                                    Excepteur sint occaecat cupid henderit in voluptate velit esse cillu
                                                    oris nisi ut aliquip ex ea
                                                    com
                                                    matat.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                            data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                        What is an appointed person?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                 data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been
                                                    the
                                                    industry’s standard dummy text ever since the 1500s, when an unknown
                                                    printer took a galley of type
                                                    and
                                                    scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class="gap-40"></div>

                            <div class="call-to-action classic">
                                <div class="row align-items-center">
                                    <div class="col-md-8 text-center text-md-left">
                                        <div class="call-to-action-text">
                                            <h3 class="action-title">Interested with this product.</h3>
                                        </div>
                                    </div><!-- Col end -->
                                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                        <div class="call-to-action-btn">
                                            <a class="btn btn-primary" href="{{route('contacts')}}">Get a Quote</a>
                                        </div>
                                    </div><!-- col end -->
                                </div><!-- row end -->
                            </div><!-- Action end -->

                        </div>
                    </div> <!-- Content inner end -->
                </div><!-- Content Col end -->


            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section>
@endsection
