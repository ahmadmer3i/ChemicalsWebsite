@extends('frontend.master')
@section('content')
    @php
        $contact = \App\Models\ContactUs::find(1);
    @endphp
    <div id="banner-area" class="banner-area"
         style="background-image:url({{asset('frontend/images/banner/banner1.jpg')}})">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">{{$contact->page_title}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">{{$contact->section_subtitle}}</h2>
                    <h3 class="section-sub-title">{{$contact->section_title}}</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
                        <div class="ts-service-box-content">
                            <h4>{{$contact->address_title}}</h4>
                            <p>{{$contact->address}}</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
                        <div class="ts-service-box-content">
                            <h4>{{$contact->emial_title}}</h4>
                            <p>{{$contact->email}}</p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
                        <div class="ts-service-box-content">
                            <h4>{{$contact->phone_title}}</h4>
                            <p>{{$contact->phone}}</p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <div class="google-map">
                <div id="map" class="map" data-latitude="{{$contact->lat}}" data-longitude="{{$contact->long}}"
                     data-marker="{{asset('frontend/images/marker.png')}}" data-marker-name="Al Behar Chemicals"></div>
            </div>

            <div class="gap-40"></div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="column-title">{{$contact->form_title}}</h3>
                    <!-- contact form works with formspree.io  -->
                    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                    <form id="contact-form" action="#" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder=""
                                           type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                           placeholder="" type="email"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject"
                                           placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message"
                                      placeholder="" rows="10"
                                      required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->
        </div><!-- Conatiner end -->
    </section>
@endsection
