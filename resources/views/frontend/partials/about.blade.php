@extends('frontend.master')
@section('content')
    <div id="banner-area" class="banner-area"
         style="background-image:url({{asset($about_header->image)}}); background-position: center">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">{{$about_header->title}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">{{$quality_policy->section_title}}</h2>
                    <h3 class="column-title">{{$quality_policy->title}}</h3>
                    <p>{{$quality_policy->description}}</p>
                    <blockquote>
                        <ul class="list-check list-unstyled row px-3 gy-2 mb-4">
                            @foreach($quality_policy->quality_item as $item)
                                <li class="text-sm text-muted col-lg-12">
                                    {{$item->item}}.
                                </li>

                            @endforeach
                        </ul>
                    </blockquote>
                    {{-- <p>He lay on his armour-like back, and if he lifted. ultrices ultrices sapien, nec tincidunt nunc
                         posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. If you are going to use a
                         passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing.</p>--}}

                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0">

                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item"
                             style="background-image:url({{asset($quality_policy->image)}});background-position: center; background-size: contain; background-repeat: no-repeat">
                            <div class="container">
                                {{--<div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title"></h2>
                                    </div>
                                </div>--}}
                            </div>
                        </div><!-- Item 1 end -->
                        <!-- Item 1 end -->
                    </div><!-- Page slider end-->


                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    @include('frontend.partials.counter')
    <!-- Facts end -->
    <section id="ts-team" class="ts-team">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="section-title">{{$about_reliable->section_title}}</h2>
                    <h3 class="section-sub-title">{{$about_reliable->title}}</h3>
                </div>
            </div><!--/ Title row end -->

            <div class="row align-items-stretch gy-4">


                <!-- Team 1 end -->

                @foreach($about_reliable->reliable_item as $reliable)
                    <div class="col-lg-4 col-md-12 col-sm-12 pb-2">
                        <div class="bg-white h-100">
                            <div class="bg-primary px-4 py-3 d-inline-block">
                                <svg class="svg-icon text-white">
                                    <use xlink:href="{{$reliable->icon}}"></use>
                                </svg>
                            </div>
                            <div class="px-5 pt-0 pb-5 bg-white text-center">
                                <h2 class="h4 mb-3 text-capitalize">{{$reliable->title}}</h2>
                                <div
                                    class="text-muted text-sm mb-0 text-justify">{!! $reliable->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div><!--/ Container end -->
    </section>
@endsection
