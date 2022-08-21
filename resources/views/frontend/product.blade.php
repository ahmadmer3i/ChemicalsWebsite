@extends('frontend.master')
@section('content')
    <section class="hero bg-cover bg-position py-4" style="background: url({{ asset('frontend/img/sections/section1bk.jpeg') }})">
        <div class="container py-5 index-forward text-white">
            <h1>Our Products</h1>
            <!-- Breadcrumb-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-none mb-0 p-0">
                    <li class="breadcrumb-item ps-0"><a href="{{ route('home') }}"> <i class="fas fa-home me-2"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <p class="h6 mb-1 text-uppercase text-primary mb-3">Our Products</p>
            <div class="row mb-5">
                <div class="col-lg-7">
                    <h2 class="mb-5">The Best Solutions For Developing Your Business</h2>
                </div>
                <div class="col-lg-5 ">
                    <img src="{{ asset('frontend/img/info.jpeg') }}" alt="" class="img-fluid">
{{--                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                </div>
            </div>
        </div>
        <section class="bg-cover bg-center dark-overlay" style="background: url({{ asset('frontend/img/product-h1.jpg') }}) fixed">
            <div class=" py-5">
                <div class="overlay-content">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-7 text-center text-lg-start">
                                <h2 class="text-white mb-2">Chemicals</h2>

                            </div>
                            <div class="col-lg-3 ms-auto text-center text-lg-end"><a class="btn btn-outline-light" href="{{ route('contacts') }}">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm radius-btn">
                        <div class="row">
                            <div class="col-4">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/ole.png') }}"  alt="">
                                </div>
                            </div>
                            <div class="col-8 pt-4 pb-0">
                                <div class=" align-items-center">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Oleochemicals</h5>
{{--                                        <p class="small text-muted mb-1">Chemicals</p>--}}
                                        <div class="pt-0">
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}

                                           <div class="row">
                                                <div class="col-4">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>
                                                            Refined Glycerin 99.7%
                                                        </li>
                                                        <li>Technical/Yellow glycerin 95%</li>
                                                        <li>Stearic acid Triple pressed</li>
                                                        <li>Soap noodles</li>
                                                        <li>Iso Propyl Palmitate IPP</li>
                                                        <li>Iso Propyl Myristate IPM</li>
                                                        <li>Stearyl alcohol C-18</li>
                                                        <li>Dimer acid (Trimer Acid)</li>
                                                        <li>Glycerol mono stearate GMS</li>
                                                        <li>Parrafin Oil</li>
                                                    </ul>
                                                </div>

                                                <div class="col-4">
                                                    <ul class="text-decoration-none list-unstyled text-muted text-capitalize list-text">
                                                        <li>Fractioned fatty acid</li>
                                                        <li>Fractioned Methyl Ester</li>
                                                        <li>Methyl Ester Sulphonate</li>
                                                        <li>Cetyl alcohol C-1</li>
                                                        <li> Iso Propyl Myristate IPM</li>
                                                        <li>Stearyl alcohol C-18</li>
                                                        <li>Coconut diethanol amide (CDE)</li>
                                                        <li>Monomer Acid</li>
                                                        <li>Distilled mono glyceride DMG</li>
                                                        <li>polysorbate</li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Fractioned fatty acid</li>
                                                        <li>Cocamidopropyl Betaine 30% & 45%</li>
                                                        <li>Technical/Yellow glycerin 95%</li>
                                                        <li>Stearic acid Triple pressed</li>
                                                        <li>Soap noodles</li>
                                                        <li>Distilled fatty acid</li>
                                                        <li>Cetostearyl alcohol (30%-70%)</li>
                                                        <li> Mixed Soap Powder</li>
                                                        <li>Calcium Soap</li>
                                                        <li>Oleic acid</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-4">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ole.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-8 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}

{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3">Ole</h5>--}}
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-4">--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
                <div class=" col-12 col-lg-12 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-4">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/functional.png') }}"  alt="">
                                </div>
                            </div>
                            <div class="col-8 pt-4 pb-0">
                                <div class="align-items-center">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Functional Chemicals</h5>
{{--                                        <p class="small text-muted">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Polyethylene Glycol (200,400,600,1500)</li>
                                                        <li>Monoethanol amine (MEA)</li>
                                                        <li>Diethanol amine (DEA)</li>
                                                        <li>Triethanol amine (TEA) & (TEA S)</li>
                                                        <li>Fatty alcohol ethoxylates 2,3,7,9 EO</li>
                                                        <li>Monoethylene Glycol MEG</li>
                                                        <li>Diethylene Glycol DEG</li>
                                                        <li>Fatty Alcohol Ethoxylate (LS3)</li>
                                                        <li>Fatty Alcohol Ethoxylate (LS7)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Mono Ethanolamine (MEA)</li>
                                                        <li>Poly-Ethylene Glycol 400</li>
                                                        <li>Acetone</li>
                                                        <li>MEG</li>
                                                        <li>MPG</li>
                                                        <li>Triethanolamine (TEA)</li>
                                                        <li>IPA</li>
                                                        <li>DEG</li>
                                                        <li>Poly-Ethylene Glycol 200</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                            <p class="text-muted text-sm">

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/surfactant.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class=" align-items-center mb-1">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Surfactant</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Linear alkylbenzene sulfonic acid</li>
                                                        <li>Benzyl Konium Chloride (BKC)</li>
                                                        <li>Polyquaternium-7</li>
                                                        <li>SLES</li>

                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">

                                                        <li>SLES 70%</li>
                                                        <li>SLS (Sodium Lauryl Sulphate)</li>
                                                        <li>Linear alkylbenzene sulfonic acid</li>
                                                        <li>Detergents powder</li>
                                                    </ul>
                                                </div>
                                                </div>
                                            <p class="text-muted text-sm mb-0">

                                            </p>
{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/polymer.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Polymers</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/theckenrs.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Thickeners</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>SCMC</li>
                                                        <li>Xanthan Gum</li>
                                                        <li>CMC</li>
                                                        <li>HPMC</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">




                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/solvents.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Solvent</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Ethanol</li>
                                                        <li>Butyl Glycol</li>
                                                        <li>Triacetin</li>
                                                        <li>Ethyl acetate</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">

                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/oxidizing.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Oxidizing agent</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Optical Brightner</li>
                                                        <li>Sodium Percarbonate coated</li>
                                                        <li>Sodium Perporate Monohydrate/ Tetrahydrate</li>
                                                        <li>Bleaching Earth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">

                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/disinfectant.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-3">
                                <div class="align-items-center mb-0">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Disinfectant</h5>
{{--                                        <p class="small text-muted mb-0 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Trichloroisocyanuric acid 90</li>
                                                        <li>TCCA 200</li>
                                                        <li>Sodium Dichloroisocyanurate 60</li>
                                                        <li>Boric acid</li>
                                                        <li>TCCA 90% Granular & Tablet</li>
                                                        <li>SDIC 60% Granular</li>
                                                        <li>Pine Oil 85% & 65%</li>
                                                        <li>PCMX</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/fillers.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-0">

                                    <div class="ms-4">
                                        <h5 class="mb-1">Filler</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text pb-0">
                                                        <li>Soda Ash light & dense</li>
                                                        <li>Speckles (Sulphate & Soap)</li>
                                                        <li>Zeolite 4A</li>
                                                        <li>TAED</li>
                                                        <li>TALC powder</li>
                                                        <li>Sodium Sulphate Anhydrous (SSA)</li>
                                                        <li>Soda Ash Light</li>
                                                        <li>Urea</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/coloring.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Coloring</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
{{--                                            <p class="text-muted text-sm mb-0">--}}
{{--                                                Soda Ash light & dense,--}}
{{--                                                Speckles (Sulphate & Soap),--}}
{{--                                                Zeolite 4A,--}}
{{--                                                TAED,--}}
{{--                                                TALC powder,--}}
{{--                                                Sodium Sulphate Anhydrous (SSA),--}}
{{--                                                Soda Ash Light,--}}
{{--                                                Urea,--}}
{{--                                                Borax--}}
{{--                                            </p>--}}

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/enzym.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Enzymes</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
{{--                                            <p class="text-muted text-sm mb-0">--}}
{{--                                                Soda Ash light & dense,--}}
{{--                                                Speckles (Sulphate & Soap),--}}
{{--                                                Zeolite 4A,--}}
{{--                                                TAED,--}}
{{--                                                TALC powder,--}}
{{--                                                Sodium Sulphate Anhydrous (SSA),--}}
{{--                                                Soda Ash Light,--}}
{{--                                                Urea,--}}
{{--                                                Borax--}}
{{--                                            </p>--}}

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/phpadjust.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center">

                                    <div class="ms-4">
                                        <h5 class="mb-1">PH Adjustment Chemicals</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Phosphoric acid</li>
                                                        <li>Caustic Soda</li>
                                                        <li>Citric acid mono</li>
                                                        <li>Citric acid anhydrous</li>
                                                        <li>KOH</li>
                                                        <li>Sodium Silicate</li>
                                                        <li>TSP</li>
                                                        <li>Caustic soda flakes and beads</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">
                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/chalting.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Chelating Agent</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>EDTA</li>
                                                        <li>STPP</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">


                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/reducing.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Reducing Agent</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Oxalic acid</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">

                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/perspe.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">

                                    <div class="ms-4">
                                        <h5 class="mb-3">Preservatives</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Sodium Benzoate</li>
                                                        <li>Sodium Metabisulphite</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mb-0">

                                            </p>

                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-5">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/chelting.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7 pt-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="ms-4">
                                        <h5 class="mb-3">Petrochemicals</h5>
{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Petroleum Jelly</li>
                                                        <li>Paraffin Wax</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/surfactant.jpg') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Surfactant</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}

{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/functional.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Functional</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Polyethylene Glycol (200,400,600,1500),--}}
{{--                                Monoethanol amine (MEA),--}}
{{--                                Diethanol amine (DEA),--}}
{{--                                Triethanol amine (TEA) & (TEA S),--}}
{{--                                Fatty alcohol ethoxylates 2,3,7,9 EO,--}}
{{--                                Monoethylene Glycol MEG,--}}
{{--                                Diethylene Glycol DEG,--}}
{{--                                Fatty Alcohol Ethoxylate (LS3),--}}
{{--                                Fatty Alcohol Ethoxylate (LS7),--}}
{{--                                Fatty Alcohol Ethoxylate (LS9),--}}
{{--                                Mono Ethanolamine (MEA),--}}
{{--                                Poly-Ethylene Glycol 400,--}}
{{--                                Acetone,--}}
{{--                                MEG,--}}
{{--                                MPG,--}}
{{--                                Triethanolamine (TEA),--}}
{{--                                IPA,--}}
{{--                                DEG,--}}
{{--                                Poly-Ethylene Glycol 200--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/polymer.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Polymers</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}

{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/theckenrs.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Thickeners</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                SCMC,--}}
{{--                                Xanthan Gum,--}}
{{--                                CMC,--}}
{{--                                HPMC--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/solvents.jpeg') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Solvent</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Ethanol,--}}
{{--                                Butyl Glycol,--}}
{{--                                Triacetin,--}}
{{--                                Ethyl acetate--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/oxidizing.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Oxidizing agent</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Optical Brightner,--}}
{{--                                Sodium Percarbonate coated,--}}
{{--                                Sodium Perporate Monohydrate/ Tetrahydrate,--}}
{{--                                Bleaching Earth--}}

{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/disinfectant.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Disinfectant</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Trichloroisocyanuric acid 90,--}}
{{--                                (TCCA 200),--}}
{{--                                Sodium Dichloroisocyanurate 60,--}}
{{--                                Boric acid,--}}
{{--                                TCCA 90% Granular & Tablet,--}}
{{--                                SDIC 60% Granular,--}}
{{--                                Pine Oil 85% & 65%,--}}
{{--                                PCMX--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/fillers.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Filler</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Soda Ash light & dense,--}}
{{--                                Speckles (Sulphate & Soap),--}}
{{--                                Zeolite 4A,--}}
{{--                                TAED,--}}
{{--                                TALC powder,--}}
{{--                                Sodium Sulphate Anhydrous (SSA),--}}
{{--                                Soda Ash Light,--}}
{{--                                Urea,--}}
{{--                                Borax--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/coloring.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Coloring</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/enzym.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Enzymes</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/phpadjust.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">--}}
{{--                                    PH adjustment chemicals--}}
{{--                                </h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Phosphoric acid,--}}
{{--                                Caustic Soda,--}}
{{--                                Citric acid mono,--}}
{{--                                Citric acid anhydrous,--}}
{{--                                KOH,--}}
{{--                                Sodium Silicate,--}}
{{--                                TSP,--}}
{{--                                Caustic soda flakes and beads--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/chelting.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">--}}
{{--                                    Chelating agent--}}
{{--                                </h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                STPP,--}}
{{--                                EDTA--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/chelting.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0 text-capitalize">--}}
{{--                                    Reducing agent--}}
{{--                                </h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Oxalic acid--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/perspe.jpg') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0 text-capitalize">--}}
{{--                                    Preservatives--}}
{{--                                </h5>--}}
{{--                                <p class="small text-muted mb-1">--}}
{{--                                   Chemicals--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Sodium Benzoate,--}}
{{--                                Sodium Metabisulphite--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/perspe.jpg') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0 text-capitalize">--}}
{{--                                    Petrochemicals--}}
{{--                                </h5>--}}
{{--                                <p class="small text-muted mb-1">--}}
{{--                                   Chemicals--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <strong>--}}
{{--                            <p class="text-muted text-sm mb-0">--}}
{{--                                Petroleum Jelly,--}}
{{--                                Paraffin Wax--}}
{{--                            </p>--}}
{{--                        </strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <section class="bg-cover bg-center dark-overlay" style="background: url({{ asset('frontend/img/products/construc.jpeg') }}) fixed">
            <div class=" py-5">
                <div class="overlay-content">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-7 text-center text-lg-start">
                                <h2 class="text-white mb-2">Construction Chemicals</h2>

                            </div>
                            <div class="col-lg-3 ms-auto text-center text-lg-end"><a class="btn btn-outline-light" href="{{ route('contacts') }}">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-3">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/construction.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-9 pt-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="ms-3">
                                        <h5 class="mb-3 text-capitalize">Construction Chemicals</h5>
                                        {{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Grinding aid for Cement</li>
                                                        <li>Grinding Aid For Calcium Carbonate</li>
                                                        <li>Cement Additives</li>
                                                        <li>Concrete Admixtures</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/construction.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Grinding aid for Cement</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/construction.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Grinding aid for Calcium Carbonate</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/construction.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Cement additives</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/construction.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize"> Concrete Admixtures</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/construction.jpg') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Construction Chemicals</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="text-muted text-sm mb-0">--}}
{{--                            Grinding aid for Cement,--}}
{{--                            Grinding aid for Calcium Carbonate,--}}
{{--                            Cement additives,--}}
{{--                            Concrete Admixtures--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <section class="bg-cover bg-center dark-overlay" style="background: url({{ asset('frontend/img/products/miningh.jpeg') }}) fixed">
            <div class=" py-5">
                <div class="overlay-content">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-7 text-center text-lg-start">
                                <h2 class="text-white mb-2">Mining</h2>

                            </div>
                            <div class="col-lg-3 ms-auto text-center text-lg-end"><a class="btn btn-outline-light" href="{{ route('contacts') }}">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-3">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-9 pt-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="ms-3">
                                        <h5 class="mb-3 text-capitalize">Mining</h5>
                                        {{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Anticaking</li>
                                                        <li>Mud depressant</li>
                                                        <li>Defoamer</li>
                                                        <li>Flocculant</li>
                                                        <li>Floatation Reagent</li>
                                                        <li>Floatation Reagent</li>
                                                        <li>Dewatering Agent</li>
                                                        <li>Granulating Aids</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Anticaking</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Mud depressant</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Defoamer</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Flocculant</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Floatation reagent</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Dewatering agent</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/mining.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-4">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Granulating aids</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}

{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/mining.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Mining</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="text-muted text-sm mb-0">--}}
{{--                            Anticaking,--}}
{{--                            Mud depressant,--}}
{{--                            Defoamer,--}}
{{--                            Flocculant,--}}
{{--                            Floatation reagent,--}}
{{--                            Dewatering agent,--}}
{{--                            Granulating aids--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <section class="bg-cover bg-center dark-overlay" style="background: url({{ asset('frontend/img/products/animal-fedd.jpg') }}) fixed">
            <div class=" py-5">
                <div class="overlay-content">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-7 text-center text-lg-start">
                                <h2 class="text-white mb-2">Animal Feed Additives</h2>

                            </div>
                            <div class="col-lg-3 ms-auto text-center text-lg-end"><a class="btn btn-outline-light" href="{{ route('contacts') }}">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-3">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/animal.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-9 pt-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="ms-3">
                                        <h5 class="mb-3 text-capitalize">Animal Feed Additives</h5>
                                        {{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Distilled Palmitic Acid (Wilfarin DP)</li>
                                                        <li>MEGALAC</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/animal.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Distilled Palmitic Acid (Wilfarin DP)</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/animal.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">MEGALAC</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/animal.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Animal Feed Additives</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="text-muted text-sm mb-0">--}}
{{--                            Distilled Palmitic Acid (Wilfarin DP),--}}
{{--                            MEGALAC--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <section class="bg-cover bg-center dark-overlay" style="background: url({{ asset('frontend/img/products/food.jpeg') }}) fixed">
            <div class=" py-5">
                <div class="overlay-content">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-7 text-center text-lg-start">
                                <h2 class="text-white mb-2">Food ingredients</h2>

                            </div>
                            <div class="col-lg-3 ms-auto text-center text-lg-end"><a class="btn btn-outline-light" href=" {{ route('contacts') }}">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-5">
            <div class="row">
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Soya Lecithin</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Glucose</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Sorbitol</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Glucose Syrup</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Maltose Syrup</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Glucose- Fructose Syrup</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Glucose- Fructose Syrup</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Native and modified Corn Starch</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Sorbitol 70%</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Sorbitol 70%</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 pb-5">--}}
{{--                    <div class="testimonial shadow-sm rounded-border radius-btn">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5">--}}
{{--                                <div class="">--}}
{{--                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 pt-4">--}}
{{--                                <div class="d-flex align-items-center mb-4">--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h5 class="mb-3 text-capitalize">Soya Lecithin</h5>--}}
{{--                                        --}}{{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
{{--                                        <div class="pt-0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">--}}
{{--                                                        --}}{{--                                                        <li>Petroleum Jelly</li>--}}
{{--                                                        --}}{{--                                                        <li>Paraffin Wax</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                    <div class="testimonial shadow-sm rounded-border radius-btn">
                        <div class="row">
                            <div class="col-3">
                                <div class="">
                                    <img class="img-cover" src="{{ asset('frontend/img/products/ingredients.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-9 pt-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="ms-3">
                                        <h5 class="mb-3 text-capitalize">Food ingredients</h5>
                                        {{--                                        <p class="small text-muted mb-1 ">Chemicals</p>--}}
                                        <div class="pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Maltodextrin</li>
                                                        <li>Soya Lecithin</li>
                                                        <li>Sorbitol 70%</li>
                                                        <li>Native And Modified Corn Starch</li>
                                                        <li>Glucose - Fructose Syrup</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="text-decoration-none text-muted list-unstyled text-capitalize list-text">
                                                        <li>Maltose Syrup</li>
                                                        <li>Glucose Syrup</li>
                                                        <li>Sorbitol</li>
                                                        <li>Glucose</li>
                                                        <li>Soya Lecithin</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--                                            <a href="" class="btn btn-sm btn-outline-success radius-btn">More Info</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-12">--}}
{{--                    <div class="testimonial p-5 shadow-sm mb-5">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <div class="testimonial-img flex-shrink-0"><img class="img-fluid rounded-circle" src="{{ asset('frontend/img/products/ingredients.png') }}" alt=""></div>--}}
{{--                            <div class="ms-4">--}}
{{--                                <h5 class="mb-0">Food ingredients</h5>--}}
{{--                                <p class="small text-muted mb-1">Chemicals</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="text-muted text-sm mb-0">--}}
{{--                            Soya Lecithin,--}}
{{--                            Glucose,--}}
{{--                            Sorbitol,--}}
{{--                            Glucose Syrup,--}}
{{--                            Maltose Syrup,--}}
{{--                            Glucose- Fructose Syrup,--}}
{{--                            Native and modified Corn Starch,--}}
{{--                            Sorbitol 70%,--}}
{{--                            Soya Lecithin,--}}
{{--                            Maltodextrin--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
