@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Contact Us</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Contact</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--========== Contact Page Start ==============-->
    <section class="tj-contact-page">
        <div class="container">
            <div class="row tj-contact-box">
                <div class="col-lg-4 col-md-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="tj-contact-list">
                        <div class="contact-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="contact-header">
                            <span> Any Questions? Call us</span>
                            <a href="tel: 1 (844) 474-4721"> 1 (844) 474-4721</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-top" data-sal-duration="800">
                    <div class="tj-contact-list">
                        <div class="contact-icon">
                            <i class="flaticon-email-3"></i>
                        </div>
                        <div class="contact-header">
                            <span> Any Questions? Email us</span>
                            <a href="mailto:info@shipa1.com"> shawntransport@shipa1.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-contact-list">
                        <div class="contact-icon">
                            <i class="flaticon-map"></i>
                        </div>
                        <div class="contact-header">
                            <span>201 International Cir STE 230,</span>
                            <a href="#"> Hunt Valley, MD 21030-1344</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> Need Any Help?</span>
                        <h3 class="title">Get in Touch With Us</h3>
                    </div>
                    <div class="tj-animate-form d-flex align-items-center">
                        <form id="contactForm" class="animate-form" action="{{ route('contact_messages.store') }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="first_name" placeholder=" " />
                                        <label class="form__label">First Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="last_name" placeholder=" " />
                                        <label class="form__label">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="phone" placeholder=" " />
                                        <label class="form__label">Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="email" class="form__input" name="email" placeholder=" " />
                                        <label class="form__label">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="website" placeholder=" " />
                                        <label class="form__label">Website</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="subject" placeholder=" " />
                                        <label class="form__label">Subject</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input textarea" name="message" placeholder=" " />
                                        <label class="form__label">Message</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-theme-button">
                                <button id="submitButton" class="tj-primary-btn contact-btn" type="button">
                                    Send Message <i class="flaticon-right-1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" data-sal="slide-left" data-sal-duration="800">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Contact Page End ==============-->

    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection

@section('extraScript')
    <script>
        $(document).ready(function() {
            $('#submitButton').click(function() {
                var formData = $('#contactForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('contact_messages.store') }}',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent',
                            text: response.message
                        }).then(function() {
                            // Optionally clear the form fields after successful submission
                            $('#contactForm')[0].reset();
                        });
                    },
                    error: function(xhr, status, error) {
                        var response = xhr.responseJSON;
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                });
            });
        });
    </script>
@endsection
