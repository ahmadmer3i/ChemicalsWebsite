@php
    $video_section = \App\Models\HomeVideo::find(1);
@endphp
<section class="bg-center bg-cover"
         style="background: url({{ !empty($video_section->image) ? asset($video_section->image) : asset('backend/assets/img/1000x500.png') }}) fixed">
    <div class="dark-overlay-0 py-5">
        <div class="overlay-content text-white">
            <div class="container py-5">
                <header class="text-center">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <button class="video-btn mb-5" type="button"
                                    data-video-id="{{$video_section->video}}"><i
                                    class="fas fa-play"></i></button>
                            <p class="h6 mb-1 text-uppercase text-primary mb-3">{{$video_section->section_title}}</p>
                            <h2 class="h1 mb-5">{{$video_section->title}}</h2><a
                                class="btn btn-primary" href="{{ route('products') }}">View our products</a>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</section>
