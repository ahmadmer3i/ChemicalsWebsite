@php
    $total_countries = \App\Models\AsiaCountry::count() + \App\Models\AfricanCountry::count();
    $total_products = \App\Models\ProductSubCategory::count();
@endphp
<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="facts-wrapper">
            <div class="row">
                <div class="col-md-3 col-sm-6 ts-facts">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{asset('frontend/images/icon-image/fact1.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$total_products}}">0</span>
                        </h2>
                        <h3 class="ts-facts-title">Total Products</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{asset('frontend/images/icon-image/fact2.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                        <h3 class="ts-facts-title">Staff Members</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{asset('frontend/images/icon-image/fact3.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                        <h3 class="ts-facts-title">Hours of Work</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{asset('frontend/images/icon-image/fact4.png')}}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$total_countries}}">0</span>
                        </h2>
                        <h3 class="ts-facts-title">Countries Experience</h3>
                    </div>
                </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
