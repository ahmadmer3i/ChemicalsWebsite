@extends('frontend.master')
@section('content')
    <div id="banner-area" class="banner-area"
         style="background-image:url({{asset('frontend/images/banner/banner1.jpg')}})">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">News</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="#">News</a></li>
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

                <div class="col-lg-4 order-1 order-lg-0">

                    <div class="sidebar sidebar-left">
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Recent News</h3>
                            <ul class="list-unstyled">
                                @foreach($news as $news_item)
                                    <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            <a href="{{route('news.news-details', $news_item->id)}}"><img loading="lazy"
                                                                                                          alt="img"
                                                                                                          src="{{asset($news_item->image)}}"></a>
                                        </div>
                                        <div class="post-info">
                                            <h4 class="entry-title">
                                                <a href="#">{{ $news_item->title }}</a>
                                            </h4>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                        </div><!-- Recent post end -->

                        {{-- <div class="widget">
                             <h3 class="widget-title">Categories</h3>
                             <ul class="arrow nav nav-tabs">
                                 <li><a href="#">Construction</a></li>
                                 <li><a href="#">Commercial</a></li>
                                 <li><a href="#">Building</a></li>
                                 <li><a href="#">Safety</a></li>
                                 <li><a href="#">Structure</a></li>
                             </ul>
                         </div>--}}<!-- Categories end -->

                        {{--<div class="widget">
                            <h3 class="widget-title">Archives </h3>
                            <ul class="arrow nav nav-tabs">
                                <li><a href="#">Feburay 2016</a></li>
                                <li><a href="#">January 2016</a></li>
                                <li><a href="#">December 2015</a></li>
                                <li><a href="#">November 2015</a></li>
                                <li><a href="#">October 2015</a></li>
                            </ul>
                        </div>--}}<!-- Archives end -->

                        {{--<div class="widget widget-tags">
                            <h3 class="widget-title">Tags </h3>

                            <ul class="list-unstyled">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Building</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Safety</a></li>
                                <li><a href="#">Contracting</a></li>
                                <li><a href="#">Planning</a></li>
                            </ul>
                        </div>--}}<!-- Tags end -->


                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

                <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">

                    @foreach($news as $item)

                        <div class="post">
                            <div class="post-media post-image">
                                <img loading="lazy" src="{{asset($item->image)}}" class="img-fluid" alt="post-image">
                                <div class="row post">
                                    @foreach($item->news_images as $image)
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 px-0 mx-0  post-media post-image">
                                            <a class="gallery-popup"
                                               href="{{asset($image->image)}}">
                                                <img
                                                    src="{{asset($image->image)}}"
                                                    class="img-thumbnail ">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">

                                        <span class="post-meta-date"><i
                                                class="far fa-calendar"></i> {{\Illuminate\Support\Carbon::parse($item->created_at)->format('d M Y')}}
                                        </span>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('news.news-details', $item->id)}}">{{$item->title}}</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    @php
                                        $description = mb_strimwidth($item->description, 0, 345, '...')
                                    @endphp {!! $description !!}</p>
                                </div>

                                <div class="post-footer">
                                    <a href="{{route('news.news-details', $item->id)}}" class="btn btn-primary">Continue
                                        Reading</a>
                                </div>

                            </div><!-- post-body end -->
                        </div>
                    @endforeach
                    <!-- 3rd post end -->

                    {{$news->links()}}

                </div><!-- Content Col end -->

            </div><!-- Main row end -->

        </div><!-- Container end -->
    </section>
@endsection
