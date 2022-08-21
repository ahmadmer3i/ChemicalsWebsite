@extends('frontend.master')
@section('content')
    <!-- Hero Slider -->
    <section class="hero bg-cover bg-position py-4" style="background: url({{ asset('frontend/img/sections/contact.jpg') }})">
        <div class="container py-5 index-forward text-white">
            <h1>Contact Us</h1>
            <!-- Breadcrumb-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-none mb-0 p-0">
                    <li class="breadcrumb-item ps-0"><a href="{{ route('home') }}"> <i class="fas fa-home me-2"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="py-5 shadow-sm z-index-20 position-relative">
        <div class="container py-5">
            <header class="pb-5">
                <h2>Request a <span class="text-primary">Call </span>Back</h2>

            </header>
            <div class="row gy-5">
                <div class="col-lg-7">
                    <div class="pt-1 bg-primary">
                        <div class="p-4 p-lg-5 bg-white shadow-sm">
                            <form action="#">
                                <div class="row gy-3">
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" name="firstname" placeholder="First name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" name="lastname" placeholder="Last name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="tel" name="phone" placeholder="Phone number">
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12">
                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Leave your message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-outline-primary" type="submit">Submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Have a quesion?</h3>
                    <p class="text-muted mb-5">If you got any questions please do not hesitate to send us a message.</p>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3">
                            <div class="icon bg-primary flex-shrink-0"><i class="fas text-white fa-fw fa-map-marker-alt"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-0">Address</h5>
                                <p class="text-muted text-sm">Abdullah Ghousheh 75 Amman Jordan</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <div class="icon bg-primary flex-shrink-0"><i class="fas text-white fa-fw fa-envelope"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-0">Email</h5>
                                <p class="text-muted text-sm">info@al-behar.com</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <div class="icon bg-primary flex-shrink-0"><i class="fas text-white fa-fw fa-mobile"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-0">Phone</h5>
                                <p class="text-muted text-sm">+962 6 5811 799</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section -->
    <section class="gmap" id="map">

    </section>
@endsection
@section('script')
    <script src="{{ asset('frontend/js/leaflet.js') }}"></script>
@endsection
