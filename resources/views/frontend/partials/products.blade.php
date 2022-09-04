@extends('frontend.master')
@section('content')

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="section-title">Work of Excellence</h2>
                        <h3 class="section-sub-title">Our Products</h3>
                    </div>
                </div>
            </div>
            @include('frontend.partials.product_section')<!-- Content row end -->

        </div><!-- Conatiner end -->
    </section>
@endsection
