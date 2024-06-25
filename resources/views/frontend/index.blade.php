@extends('frontend.layouts.app')

@section('title')
SHIP A1
@endsection
@section('content')

    <style>
        .rates {
    background:#8FC445 ;
            font-size: 24px; 
        color: #FFFFFF; 
        font-weight: bold; 
        
    
    box-shadow: 0 0px 30px 0 #56ff0061;
    width: 62px;
    height: 42px;
    float: right;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    -webkit-box-shadow: 0px 0px 15px 5px rgba(143,196,69,0.7);
            -moz-box-shadow: 0px 0px 15px 5px rgba(143,196,69,0.7);
            box-shadow: 0px 0px 15px 5px rgba(143,196,69,0.7);
    
    }
        .tj-testimonial-section {
            padding: 120px 0px 0px 0;
            background: #ffffff;
        }

        .tj-testimonial2-section {
            padding: 50px 0;
            /* background: #f9f9f9; */
        }

        .carousel-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card .row {
            display: flex;
            flex-wrap: wrap;
        }

        .card .col-6 {
            width: 50%;
        }

        .star {
            margin-top: 10px;
        }

        .fa-star {
            color: #f39c12;
        }

        .owl-nav button {
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-nav button {
            display: none;
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
        }

        .owl-dot.active {
            background: #333;
        }


        @keyframes custom-slides {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-80%);
            }
        }

        .custom-logos {
            overflow: hidden;
            padding: 30px 0px;
            white-space: nowrap;
            position: relative;
        }

        .custom-logos:before,
        .custom-logos:after {
            position: absolute;
            top: 0;
            content: '';
            width: 250px;
            height: 100%;
            z-index: 2;
        }

        .custom-logos:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), rgb(255, 255, 255));
        }

        .custom-logos:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(255, 255, 255));
        }

        .custom-logo-items {
            display: inline-block;
            animation: 35s custom-slides infinite linear;
        }

        .custom-logos:hover .custom-logo-items {
            animation-play-state: paused;
        }

        .custom-logo-items img {
            height: 100px;
        }


        .lab-cos {
            font-size: 15px;
            font-weight: 500;
            color: var(--tj-white-color);
            margin-bottom: 10px;
        }


        .input-container {
            height: 34px;
            background: white;
            display: flex;
            align-items: center;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            padding: 8px 0px 8px 0px;
            width: fit-content;

        }

        .input-container1 {
            height: 34px;
            background: white;
            display: flex;
            align-items: center;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            padding: 8px 0px 8px 0px;
            width: fit-content;

        }

        .input-field {
            width: 50px;
            padding: 5px;
            font-size: 14px;
            border: none;
            outline: none;
        }

        .input-field-1 {
            width: 65px;
            padding: 0px 0px 0px 10px;
            font-size: 14px;
            border: none;
            outline: none;
        }

        .separator {
            margin: 0px 0px 0px 0px;
            font-size: 14px;
        }

        .separators {
            margin: 0px 5px 0px 0px;
            font-size: 14px;
        }

        .separators-w {
            margin: 0px 5px 0px 0px;
            font-size: 14px;
        }

        .input-container input[type="number"] {
            -moz-appearance: textfield;
        }

        .input-container input[type="number"]::-webkit-outer-spin-button,
        .input-container input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .form-wrap {
            margin-bottom: 10px;
            position: relative;
        }

        .form-label-outside {
            color: white;
            display: block;
            margin-bottom: 5px;
        }

        .input-container {
            display: flex;
            align-items: center;
        }

        .input-container input {
            border: none;
            /* border-bottom: 1px solid #ccc; */
            padding: 5px 0px 5px 0px;
            font-size: 14px;
            width: 38px;
            text-align: center;
            /* margin-right: 5px; */
        }

        .input-container .placeholders {
            /* color:white; */
            position: relative;
            right: 72px;
            color: black;
            display: inline-block;
            width: auto;

            padding: 0px 8px;
            /* background: white; */
        }

        .err-style {
            color: red;
        }

        .tj-input-form .input-form label {
            font-size: 15px;
            font-weight: 500;
            color: var(--tj-white-color);
            margin-bottom: 10px;
        }

        .error-message {
            display: none;
            color: red;
        }

        .error-field {
            border: 2px solid red;
        }
    </style>

    <!-- Preloader start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <!-- <div class="spinner">
                <div class="loader-icon">
                    <img src="{{ asset('frontend/images/logo/favicon.png') }}"
                        alt="Corporate Business HTML Template" />
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading"> S </span>
                <span data-text-preloader="H" class="letters-loading"> H </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="P" class="letters-loading"> P </span>
                <span data-text-preloader="" class="letters-loading"> </span>
                <span data-text-preloader="A" class="letters-loading"> A </span>
                <span data-text-preloader="1" class="letters-loading"> 1 </span>
                <span data-text-preloader="" class="letters-loading"> </span>
            </div> -->
        </div>
        <!-- <button class="tj-primary-btn">Cancel Preloader</button> -->
    </div>
    <!-- Preloader end -->

    <!--=========== Slider Section Start =========-->


    <section class="tj-slider-section">
        <div class="slider_shape"><img src="{{ asset('frontend/images/banner/home-underline.png') }}" alt="Image" /></div>
          
        <div class="swiper sc-slider-1" data-autoplay="5000" >
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-1.webp') }}">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING SERVICES <a class="tj-transparent-btn ms-4 mt-4" href="contact.html">
                                    Get Quote<i class="flaticon-right-1"></i>
                                </a></h1>
                            <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                                customers and seeks your trust in return of our services.
                                
                            </div>
                            <div class="tj-theme-button">
                                
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-2.webp') }}" >
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING SERVICES<a class="tj-transparent-btn ms-4 mt-4" href="contact.html">
                            Get Quote<i class="flaticon-right-1"></i>
                                </a></h1>
                            <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its
                                customers and seeks your trust in return of our services.
                            </div>
                            <div class="tj-theme-button">
                                
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide"  data-bg-image="{{ asset('frontend/images/slider/home-slider-3.webp') }}">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY LOGISTICS SERVICES<a class="tj-transparent-btn ms-4 mt-4" href="contact.html">
                            Get Quote<i class="flaticon-right-1"></i>
                                </a></h1>
                            <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its
                                customers and seeks your trust in return of our services.
                            </div>
                            <div class="tj-theme-button">
                                <!-- <a class="tj-transparent-btn" href="contact.html">
                                    Read More <i class="flaticon-right-1"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
            </div>
            <div class=""></div>
        </div>
        
        
        <!-- <div class="swiper sc-slider-1" data-autoplay="5000" >
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-1.webp') }}">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING SERVICES</h1>
                            <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                                customers and seeks your trust in return of our services.
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="contact.html">
                                    Read More <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-2.webp') }}">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING SERVICES</h1>
                            <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its
                                customers and seeks your trust in return of our services.
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="contact.html">
                                    Read More <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide"  data-bg-image="{{ asset('frontend/images/slider/home-slider-3.webp') }}">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY LOGISTICS SERVICES</h1>
                            <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its
                                customers and seeks your trust in return of our services.
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="contact.html">
                                    Read More <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div> -->

        <div class="tj-service-icon-box">
            <ul class="list-gap">
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon">
                            <!-- <img src="{{ asset('frontend/images/project/crane-truck.png') }}" alt="Image" /> -->
                            <!-- <i class="bi bi-truck"></i> -->
                            <i class="flaticon-delivery-van"></i>
                            </div>
                            <div class="sub-title">
                                <span>VEHICLE <br>TRANSPORTATION</span>
                            </div>
                        </div>
                        <div class="service-arrow">
                            <a href="{{ route('vehicleTransportDetail') }}" target="_blank"> 
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <div class="sub-title">
                                <span>HEAVY <br>TRANSPORTATION </span>
                            </div>
                        </div>
                        <div class="service-arrow">
                            <a href="{{ route('heavy-transport-detail') }}" target="_blank"> <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon">
                                <i class="flaticon flaticon-ship"></i>
                            </div>
                            <div class="sub-title">
                                <span>FREIGHT <br>TRANSPORTATION</span>
                            </div>
                        </div>
                        <div class="service-arrow">
                            <a href="{{ route('freighttransport-detail') }}" target="_blank"> <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--=========== Slider Section End =========-->

    <!--=========== Testimonial Section Start =========-->
    <section class="tj-testimonial-section">
        <div class="carousel-wrapper">
            <div class="owl-carousel owl-theme" id="owl-caro">
                
                @foreach ($site_reviews as $site_review)
                    <div class="item">
                        <div class="card">
                            <a href="{{ $site_review->rating_url }}" target="_blank" style="text-decoration: none; color: inherit;">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        {{-- new for condition --}}
                                        <div>
                                            @if ($site_review->profile_name == 'BBB')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/bbb.png') }}"
                                                    width="100%" height="100%" alt="BBB" />
                                            @elseif ($site_review->profile_name == 'Google')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                    width="100%" height="100%" alt="Google" />
                                            @elseif($site_review->profile_name == 'Transport Reviews')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                    width="100%" height="100%" alt="Transport Reviews" />
                                            @elseif($site_review->profile_name == 'Trust Pilot')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/turst.png') }}"
                                                    width="100%" height="100%" alt="Trust Pilot" />        
                                            @endif
                                        </div>
                                        {{-- end for condition --}}
                                        <div class="star">
                                            {{-- @for ($i = 0; $i < (int) floor($site_review->rating); $i++)
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                            @endfor --}}
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($site_review->rating >= $i)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @elseif ($site_review->rating >= $i - 0.5)
                                                    <i class="fa a-star-o" aria-hidden="true"></i>
                                                @else
                                                    <i class="fa fa-star-o text-light" aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div class="rates">
                                            {{ $site_review->rating }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <!--=========== Testimonial Section Start =========-->

    <!-- <section class="tj-testimonial-section mt-4">
        <div class="carousel-wrapper">
            <div class="owl-carousel owl-theme" id="owl-caro">
                @foreach ($reviews as $review)
                    <div class="item">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div>
                                        <img loading="lazy" src="{{ asset('frontend/images/transport.png') }}" width="100%"
                                            height="100%" alt="Google">
                                    </div>
                                    <div class="star">
                                        @for ($i = 0; $i < (int) floor($review->rating); $i++)
                                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="rates">
                                        {{ $review->rating }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> -->


    <!--=========== Service Section Start =========-->
    <section class="tj-service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape">What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/vehicle-transport.webp') }}">
                        <div class="icon-box">
                            <i class="flaticon-air-freight"></i>
                        </div>
                        <div class="service-content">
                            <h4><a class="title-link" href="{{ route('vehicleTransportDetail') }}" target="_blank"> VEHICLE TRANSPORTATION</a></h4>
                            <p>Long established fact that reader will be distracted by the</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/heavy-transport.webp') }}">
                        <div class="icon-box">
                            <i class="flaticon-cargo-ship-1"></i>
                        </div>
                        <div class="service-content">
                            <h4>
                                <a class="title-link" href="{{ route('heavy-transport-detail') }}" target="_blank"> HEAVY TRANSPORTATION</a>
                            </h4>
                            <p>Long established fact that reader will be distracted by the</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/feright-transport.webp') }}">
                        <div class="icon-box">
                            <i class="flaticon-delivery-van"></i>
                        </div>
                        <div class="service-content">
                            <h4><a class="title-link"  href="{{ route('freighttransport-detail') }}" target="_blank"> FREIGHT TRANSPORTATION</a></h4>
                            <p>Long established fact that reader will be distracted by the</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Service Section End =========-->

    <!--=========== Cta Section Start =========-->
    <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/cta-auto-aucation.webp') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="flaticon flaticon-freight"></i>
                            </div>
                            <div class="cta-text">
                                <h3 class="title">SHIP A CAR DIRECT FROM AUTO Auction</h3>
                                <p class="desc">We deliver quality, with prosperity. Because your Shipping needs, our
                                    solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" target="_blank" href="{{ route('quote.form.combine') }}">
                            GET QUOTE<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Cta Section End =========-->

    <!--=========== About Section Start =========-->
    <section class="tj-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> A1 Transportation Company</span>
                            <h2 class="title">What Makes Us Dependable?</h2>
                            <p class="desc">
                                Among all the shipping companies out there, factors that make us stand out from therest are:
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Our Values</h5>
                                </div>
                            </div>
                            <p class="desc">
                                We are a licensed Transportation company with high moral values and have attained customer
                                satisfaction through their remarks on esteemed platforms.

                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Scope of Services</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Range of vehicles, we ship, is not limited to just conventional cars and motorbikes.
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Safety Is Our Priority</h5>
                                </div>
                            </div>
                            <p class="desc">
                                No matter which mode of transportation you use, ShipA1 assures its customers, utmostsecurity
                                to their assets.


                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Skilful & Devoted Staff</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Our team is loaded with highly experienced professionals of both customer dealing andvehicle
                                handling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon">
                                <i class="flaticon-in-person"></i>
                            </div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="1700">0</span></div>
                                <p class="desc">Satisfied Client</p>
                            </div>
                        </div>
                        <div class="image-box">
                            <img class="p-z-idex" src="{{ asset('frontend/images/about/about-3.webp') }}"
                                alt="Image" />
                        </div>
                        <img class="group-1 p-z-idex"
                            src="{{ asset('frontend/images/about/about-5.webp') }}" alt="Image" />
                        <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                            alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End =========-->

         <section class="tj-cta-section-two">
            <div class="tj_cta_image"></div>
            <div class="tj_cta_image1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="tj-cta-content">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape2"> Here We Are</span>
                                <h4 class="title"> Get Anytype Quote From Your Shipping Need</h4>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="{{ route('quote.form.combine') }}" target="_blank">
                                    Get Quote<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tj-cta-content tj-cta-content2">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape2"> Support Center 24/7 </span>
                                <h4 class="title">Feel Free To Contact Us For Additional Info</h4>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                                    Get Support<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

        <section class="tj-step-section">
            <div class="container">
                <div class="row">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Working Process</span>
                        <h2 class="title">We Follow Great Process</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-step-area">
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div>
                                    <i class="flaticon-economics"></i>
                                    <span class="number"> 01.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title">Online Quote</h6>
                                    <span> Get an instant online quote from our website or call our agent.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div>
                                    <i class="flaticon-pick"></i>
                                    <span class="number"> 02.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title">Confirm Order</h6>
                                    <span> Confirm your order over the phone and fill out the booking form.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div>
                                    <i class="flaticon-tracking"></i>
                                    <span class="number"> 03.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title">Track Shipment
                                   </h6>
                                    <span>  Track your shipment by your unique order id number.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div>
                                    <i class="flaticon-delivery-van"></i>
                                    <span class="number"> 04.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title">Shipment Delivery
                                    </h6>
                                    <span> Your shipment reached to their drop-off location.</span>
                                </div>
                                <div class="stp-arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <section class="tj-choose-us-section-home">
        <div class="container-flude">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="">



                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
                            id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="container mt-2">
                                <!-- Step 1: Moving From/To -->
                                <div class="route_quote_info" id="step1">
                                    <div class="row">
                                        <h4 class="title text-center">Quote Request!</h4>
                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving From</h6>
                                            <label class="text-white mb-2">Where Are You Moving From?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="pickup-location"
                                                    placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="pickup-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving To</h6>
                                            <label class="text-white mb-2">Where Are You Moving To?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="delivery-location"
                                                    placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="delivery-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="price__cta-btn text-center">
                                                <button class="tj-submit-btn" type="button" id="step1_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2: Vehicle Information -->
                                <div class="vehicle_quote_info" id="step2" style="display: none;">
                                    <div class="row">
                                        <h4 class="title text-center">VEHICLE INFORMATION</h4>
                                        <select id="tabSelector" class="" aria-label="Tab selector" required>
                                            <option value="" selected disabled>Select a Vehicle</option>
                                            <option value="Atv">Atv Utv Transport</option>
                                            <option value="Boat-Transport">Boat Transport</option>
                                            <option value="Car">Car</option>
                                            <option value="Freight-Transportation">Freight Transportation</option>
                                            <option value="Golf-Cart">Golf Cart</option>
                                            <option value="Heavy-Equipment">Heavy Equipment</option>
                                            <option value="Motorcycle">Motorcycle</option>
                                            <option value="RV-Transport">RV Transport</option>
                                        </select>
                                        <label class="error-message" id="tabSelector-error">This field is
                                            required.</label>

                                        <div class="tab-content mt-3" id="additionalContent"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step2_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">
                                                <button class="tj-submit-btn" type="button" id="step2_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3: Customer Information -->
                                <div class="basic_quote_info" id="step3" style="display: none;">
                                    <div class="row mb-3">
                                        <h4 class="text-center text-white">Customer Information</h4>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Your Name:</label>
                                                <input class="form-control" required name="Custo_Phone" type="tel"
                                                    placeholder="Customer Name">
                                                <!-- <input class="form-control" required name="Custo_Name" type="text" placeholder="Customer Name"> -->
                                                <label class="error-message" id="Custo_Name-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="Custo_Phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="Custo_Phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div> --}}

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Email Address:</label>
                                                <input class="form-control" required name="Custo_Email" type="email"
                                                    placeholder="Email address">
                                                <label class="error-message" id="Custo_Email-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step3_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">

                                                <button class=" tj-submit-btn " href="" type="submit"
                                                    id="submit_instant_code" value="Submit Form">
                                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>





                    </div>
                </div>
            </div>


        </div>
        </div>

        </div>

        </div>
        </section>
    <!--=========== Feature Section End =========-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Our Services</span>
                        <h2 class="title">Pick Your Transport Type</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->

    <!--=========== Project Section Start =========-->
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel">
            <!-- <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> logistics</span>
                    <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                </div>
            </div> -->
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/9.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">CAR</span>
                    <h4><a href="project-details.html" class="title-link"> Sedan, SUV, Pickup etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/62.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">MOTORCYCLE</span>
                    <h4><a href="project-details.html" class="title-link">Mopeds, ATV, Power Sports etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/1.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> HEAVY EQUIP.</span>
                    <h4><a href="project-details.html" class="title-link"> Trucks, Bulldozers, Mixer etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/roro-slider-image.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">RORO</span>
                    <h4><a href="project-details.html" class="title-link">Cars, Trucks, trailers etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/4.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">Golf Cart</span>
                    <h4><a href="project-details.html" class="title-link">electric cart, buggy, utility vehicle etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/atv,utv-1.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">ATV/UTV</span>
                    <h4><a href="project-details.html" class="title-link">Sport, Quads, Military etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/Commercial--.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">CONSTRUCTION</span>
                    <h4><a href="project-details.html" class="title-link"> Cranes, Drills, Grinders etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/10.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">FARM</span>
                    <h4><a href="project-details.html" class="title-link">Tractor, Planter, Baler etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/excavator-pickup.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">EXCAVATOR</span>
                    <h4><a href="project-details.html" class="title-link"> Digger, Driller, Miners etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">TRUCKS</span>
                    <h4><a href="project-details.html" class="title-link">Commercial, Dump Trucks etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/reefer-truck-1.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Reefer</span>
                    <h4><a href="project-details.html" class="title-link"> frozen , refrigerated etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/7.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Hazmat</span>
                    <h4><a href="project-details.html" class="title-link"> Explosive, Flammable, etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/5.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Dry van</span>
                    <h4><a href="project-details.html" class="title-link">palletized, boxed, freight etc.</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->


    <!--=========== Map Section Start =========-->
    <section class="tj-map-section">
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s">
            </iframe>
        </div>
        <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Contact us
                        </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <ul class="list-gap">
                                <li><i class="flaticon-placeholder"></i><span> 201 International Cir STE 230, Hunt Valley,
                                        MD 21030-1344</span></li>
                                <li>
                                    <i class="flaticon-mail"></i><a href="mailto:info@shipa1.com">
                                        shawntransport@shipa1.com</a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i><a href="tel:1 (844) 474-4721"> 1 (844) 474-4721</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Map Section End =========-->

    <section class="tj-counter-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-counter-area" data-bg-image="assets/images/banner/counter-shape.png" style="background-image: url(&quot;assets/images/banner/counter-shape.png&quot;);">
                           
                            <div class="counter-item d-flex align-items-center sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                                <div class="counter-icon">
                                    <i class="flaticon-courier"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer odometer-auto-theme" data-count="128000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span></div></span></div>
                                    <span class="sub-title">Satisfied Clients</span>
                                </div>
                            </div>
                            <div class="counter-item d-flex align-items-center sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <div class="counter-icon">
                                    <i class="flaticon-box"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer odometer-auto-theme" data-count="129"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></span>k</div>
                                    <span class="sub-title">Shipment Delivered</span>
                                </div>
                            </div>
                            <div class="counter-item d-flex align-items-center sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <div class="counter-icon">
                                    <i class="flaticon-box"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer odometer-auto-theme" data-count="38861"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></span>k</div>
                                    <span class="sub-title">Miles Covered</span>
                                </div>
                            </div>
                            <div class="counter-item d-flex align-items-center sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                                <div class="counter-icon">
                                    <i class="flaticon-worldwide"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count">
                                        <span class="odometer odometer-auto-theme" data-count="8">
                                            <div class="odometer-inside"><span class="odometer-digit">
                                                <span class="odometer-digit-spacer">8</span>
                                                <span class="odometer-digit-inner">
                                                    <span class="odometer-ribbon">
                                                        <span class="odometer-ribbon-inner">
                                                            <span class="odometer-value">2</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="odometer-formatting-mark">,</span>
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">8</span>
                                                <span class="odometer-digit-inner">
                                                    <span class="odometer-ribbon">
                                                        <span class="odometer-ribbon-inner">
                                                            <span class="odometer-value">7</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">8</span>
                                                <span class="odometer-digit-inner">
                                                    <span class="odometer-ribbon">
                                                        <span class="odometer-ribbon-inner">
                                                            <span class="odometer-value">0</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">8</span>
                                                <span class="odometer-digit-inner">
                                                    <span class="odometer-ribbon">
                                                        <span class="odometer-ribbon-inner">
                                                            <span class="odometer-value">9</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                    <span class="sub-title">Years Of Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!--=========== Blog Section Start =========-->
    <section class="tj-blog-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Latest News</span>
                    <h2 class="title">Latest News & Blog</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="tj-blog-item">
                            <div class="tj-blog-image">
                                <a
                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                    <img src="{{ !is_null($blog->post_image) ? $blog->post_image : '' }}"
                                        alt="Blog" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <div class="meta-date">
                                        <ul class="list-gap">
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</li>
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</li>
                                        </ul>
                                    </div>
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i><a href="#">
                                                    {{-- {{ $blog->user->name }}</a></li> --}}
                                                    {{ !is_null($blog->user->name) ? $blog->user->name : '' }}</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text-box">
                                    <div class="blog-header">
                                        <h4>
                                            <a class="title-link"
                                                @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                {{-- {{ $blog->post_name }} --}}
                                                {{-- {{ Illuminate\Support\Str::limit($blog->post_name, 20, '...') }} --}}
                                                {{ !is_null($blog->post_name) ? Illuminate\Support\Str::limit($blog->post_name, 20, '...') : '' }}
                                            </a>
                                        </h4>
                                        {{-- <p>
                                        {!! Illuminate\Support\Str::limit($blog->post_description, 200, '...') !!}
                                        </p> --}}
                                    </div>
                                    <div class="blog-button">
                                        <ul class="list-gap">
                                            <li>
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    Read More <i class="fa-regular fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========== Blog Section End =========-->

     <!--=========== Testimonial Section Start =========-->
     <section class="tj-testimonial-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Client Feedback</span>
                    <h2 class="title">Our Client Reviews</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper tj-testimonial-slider">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{ asset('frontend/images/icon/comment.svg') }}"
                                                    alt="Icon" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    @for ($i = 0; $i < (int) floor($review->rating); $i++)
                                                        <li><i class="fa fa-star text-warning"></i></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p style="height: 100px;">{{ $review->description }}</p>
                            <!-- <h6 style="height: 100px;">{{ \Illuminate\Support\Str::limit($review->description, 200) }}</h6> -->
                            <br><br><br>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 style="" class="title pt-5">{{ $review->person_name }} </h5>
                                                    <span
                                                        class="sub-title pt-5">{{ !is_null($review->created_at) ? \Carbon\Carbon::parse($review->created_at)->format('M d, Y') : '' }}</span>
                                                </div>
                                                <div class="testimonial-comment pt-5">
                                                    @if ($review->site_name == 'BBB')
                                                        <img src="{{ asset('frontend/images/testimonial/bbb.png') }}"
                                                            alt="Image" style="width: 184px; height: 69px;" />
                                                    @elseif ($review->site_name == 'Google')
                                                        <img src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                            alt="Image" style="width: 184px; height: 69px;" />
                                                    @else
                                                        <img src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                            alt="Image" style="width: 184px; height: 69px;" />
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


<script>
    const swiper = new Swiper('.swiper', {
 autoplay: {
   delay: 5000,
 },
});
</script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch('https://ipinfo.io/json')
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(ipinfo) {
                            var countryCode = "us";
                            callback(countryCode);
                        });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation etc.
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example-multiple').select2();
        });
        $(document).ready(function() {
            $('#example-multiple-2').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var selectedCategory = $(this).val();

                $.ajax({
                    url: "{{ route('get.subcategories') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "category": selectedCategory
                    },
                    success: function(response) {
                        console.log(response);
                        console.log(response.length);

                        var html = '';
                        $('#subcategory-box').html('');

                        html += "<label for='subcategory'>Subcategory</label>";
                        html +=
                            "<select class='nice-select form-control' id='subcategory' name='subcategory'>";
                        html += "<option value='' disabled selected>Select</option>";
                        $.each(response, function(index, val) {
                            html +=
                                `<option value='${val.id}' style='white-space: nowrap;'>${val.name}</option>`;
                        });
                        html += "</select>";
                        console.log('html', html);

                        $('#subcategory-box').html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#owl-caro').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 4000, // 2 seconds
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
        
    </script>

    <script>
        $(document).ready(function() {
            function showError(field, message) {
                $('#' + field).addClass('error-field');
                $('#' + field + '-error').text(message).show();
            }

            function hideError(field) {
                $('#' + field).removeClass('error-field');
                $('#' + field + '-error').hide();
            }

            // Move to Step 2
            $('#step1_next').click(function() {
                var isValid = true;

                if (!$('#pickup-location').val()) {
                    showError('pickup-location', 'This field is required.');
                    isValid = false;
                } else {
                    hideError('pickup-location');
                }

                if (!$('#delivery-location').val()) {
                    showError('delivery-location', 'This field is required.');
                    isValid = false;
                } else {
                    hideError('delivery-location');
                }

                if (isValid) {
                    $('#step1').hide();
                    $('#step2').show();
                }
            });

            // Return to Step 1
            $('#step2_previous').click(function() {
                $('#step2').hide();
                $('#step1').show();
            });

            // Move to Step 3
            $('#step2_next').click(function() {
                var isValid = true;

                if (!$('#tabSelector').val()) {
                    showError('tabSelector', 'This field is required.');
                    isValid = false;
                } else {
                    hideError('tabSelector');
                }

                if (isValid) {
                    $('#step2').hide();
                    $('#step3').show();
                }
            });

            // Return to Step 2
            $('#step3_previous').click(function() {
                $('#step3').hide();
                $('#step2').show();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var selectedTab = '';
            $('#tabSelector').change(function() {
                $('.vehicles-container').html('');
                selectedTab = $(this).val();
                var vehicleType = $(this).val();
                $('.tab-pane').removeClass('show active');
                $('#' + selectedTab).addClass('show active');

                $.ajax({
                    url: "{{ route('get.partial.form') }}",
                    method: 'GET',
                    data: {
                        vehicleType: vehicleType,
                    },
                    success: function(response) {
                        $('#additionalContent').html('');
                        $('#additionalContent').html(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            function addNewVehicle() {
                var newVehicleHtml =
                    `
                        <div class="vehicle-info">
                        <div class="row select-bm">
                        <div class="col-md-4">
                        <div class="input-form tj-select">
                        <label> Year</label>
                        <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
                var currentYear = {{ date('Y') }};
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<option value="${year}">${year}</option>`;
                }

                newVehicleHtml +=
                    `</select>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="input-form tj-select">
                        <label>Make</label>
                        <select class="nice-select make" name="make[]" required id="make"> <option value="" disabled selected>Select Make</option>`;

                @foreach ($makes as $make)
                    newVehicleHtml +=
                        `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
                @endforeach

                newVehicleHtml += `
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="input-form tj-select model-div">
                        <label>Model</label>
                        <select class="nice-select model" name="model[]" id="model" required></select>`;

                newVehicleHtml +=
                    `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

                newVehicleHtml += `
                            </div>
                            </div>
                            </div>
                            </div>
                            `;

                $('.vehicles-container').append(newVehicleHtml);
            }

            function addOtherVehicle() {
                var newVehicleHtml =
                    `
                        <div class="vehicle-info">
                        <div class="row select-bm">
                        <div class="col-md-4">
                        <div class="input-form tj-select">
                        <label> Year</label>
                        <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
                var currentYear = {{ date('Y') }};
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<option value="${year}">${year}</option>`;
                }

                newVehicleHtml +=
                    `</select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="input-form tj-select">
                                <label>Make</label>
                                <input type="text" id="make" name="make[]"
                                placeholder="Enter Make" required="" />
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="input-form tj-select model-div">
                                <label>Model</label>
                                <input type="text" id="model" name="model[]" placeholder="Enter Model"
                                required="" />`
                newVehicleHtml +=
                    `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

                newVehicleHtml += `</div>
                                </div>
                                </div>
                                </div>
                                `;

                $('.vehicles-container').append(newVehicleHtml);
            }

            $(document).on('click', '.addVehicleBtn', function() {
                if ($('#tabSelector').val() == 'Car') {
                    console.log('yesss');
                    addNewVehicle();
                } else {
                    console.log('nooo');
                    addOtherVehicle();
                }
            });

            $(document).on('click', '.delete-vehicle', function() {
                $(this).closest('.vehicle-info').remove();
            });

            $(document).on('change', '.year, .make', function() {
                var year = $(this).closest('.vehicle-info').find('.year').val();
                var makeId = $(this).closest('.vehicle-info').find('.make').val();
                var vehicleInfo = $(this).closest('.vehicle-info');
                if (year && makeId) {
                    getModel(year, makeId, vehicleInfo);
                }
            });

            function getModel(year, makeId, vehicleInfo) {
                console.log('yes inn');
                $.ajax({
                    url: "{{ route('get.models') }}",
                    method: 'GET',
                    data: {
                        year: year,
                        make: makeId
                    },
                    success: function(response) {
                        var modelsDropdown = vehicleInfo.find('.model');
                        modelsDropdown.empty();
                        var selectOptions = '<option value="">Select Model</option>';
                        $.each(response, function(index, model) {
                            selectOptions += '<option value="' + model + '">' +
                                model +
                                '</option>';
                        });
                        modelsDropdown.html(selectOptions);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    </script>

    <script>
        // document.querySelectorAll('input[type="text"]').forEach((input) => {
        //     input.addEventListener("input", function() {
        //         this.value = this.value.replace(/[^0-9]/g, "");
        //     });
        // });
    </script>

    <script>
        function limitDigits(element, maxDigits) {
            if (element.value.length > maxDigits) {
                element.value = element.value.slice(0, maxDigits);
            }
        }

        $(document).ready(function() {
            $('#inches-input').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });

            // Optionally, you can also prevent the user from typing non-numeric characters.
            $('#feet-input, #inches-input').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        $(document).ready(function() {
            $('#inches-input1').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });

            // Optionally, you can also prevent the user from typing non-numeric characters.
            $('#feet-input1, #inches-input1').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        $(document).ready(function() {
            $('#inches-input2').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });

            // Optionally, you can also prevent the user from typing non-numeric characters.
            $('#feet-input, #inches-input2').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('change', '#available_at_auction', function() {
                if ($(this).is(':checked')) {
                    $('.div-link').show();
                } else {
                    $('.div-link').hide();
                }
            });

            $(document).on('change', '#modification', function() {
                if ($(this).is(':checked')) {
                    $('.div-modify_info').show();
                } else {
                    $('.div-modify_info').hide();
                }
            });
        });
    </script>

    <script>
        function updateSuggestions(inputField, suggestionsList) {
            var inputValue = inputField.val();

            $.ajax({
                url: "{{ route('get.zipcodes') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "input": inputValue
                },
                success: function(response) {
                    suggestionsList.empty();

                    $.each(response, function(index, suggestion) {
                        var listItem = $("<li>").text(suggestion).click(function() {
                            inputField.val(suggestion);
                            suggestionsList.css("display", "none");
                        });
                        suggestionsList.append(listItem);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        }

        $("#pickup-location, #delivery-location").keyup(function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestionsTwo");
            suggestionsList.css("display", "block");
            if (inputField.val() === "") {
                suggestionsList.css("display", "none");
            }
            updateSuggestions(inputField, suggestionsList);
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                var year = $('.vehicle-year').val();
                var makeId = $('.vehicle-make').val();
                if (year && makeId) {
                    getModel(year, makeId);
                }
            });

            function getModel(year, makeId) {
                console.log('yes inn');
                $.ajax({
                    url: "{{ route('get.models') }}",
                    method: 'GET',
                    data: {
                        year: year,
                        make: makeId
                    },
                    success: function(response) {
                        var modelsDropdown = $('.vehicle-model-div');
                        modelsDropdown.empty();
                        var selectOptions =
                            '<label>Model</label> <select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                        $.each(response, function(index, model) {
                            selectOptions += '<option value="' + model + '">' + model +
                                '</option>';
                        });
                        selectOptions += '</select>';
                        modelsDropdown.html(selectOptions);

                        console.log('yesssss', response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    </script>

    <script>
        function updateSuggestions(inputField, suggestionsList) {
            var inputValue = inputField.val();

            $.ajax({
                url: "{{ route('get.zipcodes') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "input": inputValue
                },
                success: function(response) {
                    suggestionsList.empty();

                    $.each(response, function(index, suggestion) {
                        var listItem = $("<li>").text(suggestion).click(function() {
                            inputField.val(suggestion);
                            suggestionsList.css("display", "none");
                        });
                        suggestionsList.append(listItem);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        }

        $("#pickup-location, #delivery-location").keyup(function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestionsTwo");
            suggestionsList.css("display", "block");
            if (inputField.val() === "") {
                suggestionsList.css("display", "none");
            }
            updateSuggestions(inputField, suggestionsList);
        });
    </script>
@endsection
