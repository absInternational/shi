@extends('frontend.layouts.app')

@section('title')
{{ $service->name }}
@endsection

@section('meta_description') {{ $service->meta_description }} @endsection

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">{{ $service->name }}</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <span>
                                <span> Service</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--========== blog details Start ==============-->
    <section class="tj-service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper service-details-wrapper">
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <a href="service-details.html">
                                    <img src="{{ !is_null($service->banner_image) ? asset($service->banner_image) : '' }}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="service-details.html">
                                            {{ !is_null($service->heading_one) ? $service->heading_one : '' }}
                                        </a>
                                    </h3>
                                </div>
                            </div>

                            @if ($service->desc_one != null)
                                <p>
                                    {{ !is_null($service->desc_one) ? $service->desc_one : '' }}
                                </p>
                            @endif
                        </div>
                        <div class="row align-items-center">
                            @if ($service->image2 != null)
                                <div class="col-lg-5 col-md-6">
                                    <div class="check-image">
                                        <img src="{{ !is_null($service->image2) ? asset($service->image2) : '' }}"
                                            alt="Blog" />
                                    </div>
                                </div>
                            @endif
                            @if ($service->heading_two != null)
                                <div class="col-lg-7 col-md-6">
                                    <div class="check-list">
                                        <h5 class="title">
                                            {{ !is_null($service->heading_two) ? $service->heading_two : '' }}
                                        </h5>
                                        <p>{{ !is_null($service->desc_two_one) ? $service->desc_two_one : '' }}</p>
                                        <ul class="list-gap">
                                            {{-- <li><i
                                                class="fa-light fa-check"></i>{{ !is_null($service->desc_two_one) ? $service->desc_two_one : '' }}
                                        </li> --}}
                                            <li><i
                                                    class="fa-light fa-check"></i>{{ !is_null($service->desc_two_two) ? $service->desc_two_two : '' }}
                                            </li>
                                            <li><i
                                                    class="fa-light fa-check"></i>{{ !is_null($service->desc_two_three) ? $service->desc_two_three : '' }}
                                            </li>
                                            <li><i
                                                    class="fa-light fa-check"></i>{{ !is_null($service->desc_two_four) ? $service->desc_two_four : '' }}
                                            </li>
                                            <li><i
                                                    class="fa-light fa-check"></i>{{ !is_null($service->desc_two_five) ? $service->desc_two_five : '' }}
                                            </li>
                                            <li><i
                                                    class="fa-light fa-check"></i>{{ !is_null($service->desc_two_six) ? $service->desc_two_six : '' }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="details-video-content">
                            {{-- <h4 class="title">Communicate With Us</h4>
                            <p>
                                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                amet finibus eros. Lorem Ipsum
                            </p> --}}
                            {!! !is_null($service->extra) ? $service->extra : '' !!}
                            @if ($service->image3 != null)
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sevice-image">
                                            <img src="{{ !is_null($service->image3) ? asset($service->image3) : '' }}"
                                                alt="Image" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-faq-area">
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($faqs as $key => $faq)
                                            <div class="accordion-item {{ $key === 0 ? 'show' : '' }}">
                                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                    <button class="accordion-button {{ $key === 0 ? '' : 'collapsed' }}"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne{{ $faq->id }}"
                                                        aria-expanded="{{ $key === 0 ? 'true' : 'false' }}"
                                                        aria-controls="collapseOne{{ $faq->id }}">
                                                        {{ $faq->heading }}
                                                    </button>
                                                </h2>
                                                <div id="collapseOne{{ $faq->id }}"
                                                    class="accordion-collapse collapse {{ $key === 0 ? 'show' : '' }}"
                                                    aria-labelledby="heading{{ $faq->id }}"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>{{ $faq->description }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-search">
                            <form action="#">
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="Search" />
                                <i class="flaticon-loupe"></i>
                            </form>
                        </div>
                        <div class="tj-sidebar-widget sidebar-service">
                            <h5 class="details_title">Logistics Services</h5>
                            <ul class="list-gap">
                                @foreach ($related as $row)
                                    <li>
                                        <a href="{{ route('service.details', $row->slug) }}">{{ $row->name }}
                                            <i class="flaticon-right-chevron"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- <div class="tj-sidebar-widget sidebar-documents">
                            <h5 class="details_title">Documents</h5>
                            <ul class="list-gap">
                                <li>
                                    <a href="#">
                                        Our Company Details <br />
                                        [450KB] <i class="fa-solid fa-cloud-arrow-down"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        Our Company Details <br />
                                        [450KB] <i class="fa-solid fa-cloud-arrow-down"></i></a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="tj-appointment-box" data-bg-image="assets/images/service/service-15.jpg">
                            <div class="tj-appointment-bg" data-bg-image="assets/images/banner/service_shape.png"></div>
                            <div class="tj-appointment-body">
                                <div class="appointment-percent text-center">
                                    <span class="text-uppercase">100% <br />Quality
                                    </span>
                                </div>
                                <div class="appointment-content text-center">
                                    <h4 class="title">Make An Appointment</h4>
                                    <!-- <a class="tel-link" href="tel:+51-(0)-888-455-369"> +51-(0)-888-455-369</a> -->
                                    <a class="tel-link" href="tel:+18444744721">1 (844) 474-4721</a>
                                    <p>Perfectly simple & easy to distinguish free hour when power.</p>
                                    <div class="tj-theme-button">
                                        <a href="{{ route('quote.form.combine') }}" target="_blank">
                                        <button class="tj-transparent-btn submit-btn2" type="submit" value="submit">
                                            Get a Quote <i class="fa-light fa-arrow-right"></i>
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->
@endsection
