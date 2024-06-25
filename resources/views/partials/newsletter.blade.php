<section class="tj-subscribe-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-content-box d-flex align-items-center justify-content-between"
                    data-bg-image="{{ asset('frontend/images/banner/subscribe.png') }}">
                    <div class="subscribe-content d-flex align-items-center">
                        <div class="mail-icon">
                            <img src="{{ asset('frontend/images/icon/email.svg') }}" alt="Icon" />
                        </div>
                        <div class="subscribe-title">
                            <h3 class="title">Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <form id="newsletter-form" class="subscribe-form d-flex align-items-center"
                        action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="subscribe-input">
                            <input type="email" id="email_newsletter" name="email" placeholder="Email Address" required />
                        </div>
                        <div class="tj-theme-button">
                            <button class="tj-submit-btn" type="submit">Submit Now <i
                                    class="fa-light fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
