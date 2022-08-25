<section>
    @php
        $sliders = \App\Models\Slider::all();
    @endphp
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <!-- Hero Slide-->
            @foreach($sliders as $slider)
                <div class="swiper-slide hero-slide bg-size bg-center py-5"
                     style="background: url( {{ asset($slider->image) }})">
                    <div class="container text-white py-5 index-forward">
                        <div class="row">
                            <div class="col-lg-7">
                                <h1>{{$slider->title}}</h1>
                                <p class="lead">{{$slider->description}}</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item me-0"><a class="btn btn-primary"
                                                                         href="{{route('contacts')}}">Contact Us</a>
                                    </li>
                                    <li class="list-inline-item"></li>
                                    <a class="btn btn-outline-light" href="{{route('about')}}">About Us</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            <!-- Hero Slide-->
            {{--  <div class="swiper-slide hero-slide bg-size bg-center py-5"
                   style="background: url({{ asset('frontend/img/slider/slider2.jpg') }})">
                  <div class="container text-white py-5 index-forward">
                      <div class="row">
                          <div class="col-lg-7">
                              <h1>We will help you to grow your business</h1>
                              <p class="lead">Our Company maintains strong business relations with
                                  key producers and manufacturers around the globe and
                                  ensures a consistent and steady supply of high-quality
                                  products, that meets customer's specifications, market
                                  trends and consumer preferences.</p>
                              <ul class="list-inline">
                                  <li class="list-inline-item me-0"><a class="btn btn-primary" href="#!">Read More</a>
                                  </li>
                                  <li class="list-inline-item"></li>
                                  <a class="btn btn-outline-light" href="#!">Our company</a>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Hero Slide-->
              <div class="swiper-slide hero-slide bg-size bg-center py-5"
                   style="background: url({{ asset('frontend/img/slider/slider3.jpeg') }})">
                  <div class="container text-white py-5 index-forward">
                      <div class="row">
                          <div class="col-lg-7">
                              <h1>You always get the best guidance</h1>
                              <p class="lead">Al-Behar Chemicals is a leading supplier of oleo,
                                  functional and specialty chemicals, currently servicing
                                  different industries in our region; covering markets of
                                  across 24 countries in the Middle East and Africa.</p>
                              <ul class="list-inline">
                                  <li class="list-inline-item me-0"><a class="btn btn-primary" href="#!">Read More</a>
                                  </li>
                                  <li class="list-inline-item"></li>
                                  <a class="btn btn-outline-light" href="#!">Our company</a>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>--}}
        </div>
        <div class="swiper-button-next swiper-nav-custom d-none d-lg-block"></div>
        <div class="swiper-button-prev swiper-nav-custom d-none d-lg-block"></div>
        <div class="swiper-pagination py-3 d-block d-lg-none"></div>
    </div>
</section>
