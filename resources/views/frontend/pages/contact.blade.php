@extends('frontend.layouts.master')

@section('main-content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/hariyali/contact-banner.png);"></div>

    <div class="container">
        <h2>Contact</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><span>Contact</span></li>
        </ul>
    </div>
</section>
<section class="contact-one">
    <img src="assets/images/shapes/contact-bg-1-1.png" alt="" class="contact-one__shape-1">
    <img src="assets/images/shapes/contact-bg-1-2.png" alt="" class="contact-one__shape-2">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div>
            <p>Get in Touch With Us</p>
            <h3>Do You’ve Any Question? <br>
                Write us a Message</h3>
        </div>
        <form action="assets/inc/sendemail.php" class="contact-form-validated contact-one__form">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Email Address" name="email">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Phone Number" name="phone">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Subject" name="subject">
                </div>
                <div class="col-md-12">
                    <textarea placeholder="Write a Message" name="message"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="thm-btn">Send a Message</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="contact-infos">
    <div class="container">
        <div class="thm-tiny__slider" id="contact-infos-box" data-tiny-options='{
            "container": "#contact-infos-box",
            "items": 1,
            "slideBy": "page",
            "gutter": 0,
            "mouseDrag": true,
            "autoplay": true,
            "nav": false,
            "controlsPosition": "bottom",
            "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
            "autoplayButtonOutput": false,
            "responsive": {
                "640": {
                  "items": 2,
                  "gutter": 30
                },
                "992": {
                  "gutter": 30,
                  "items": 3
                },
                "1200": {
                  "disable": true
                }
              }
        }'>
            <div>
                <div class="contact-infos__single">
                    <i class="organik-icon-location"></i>
                    <h3>Visit Anytime</h3>
                    <p>Patna</p>
                    <br>
                </div>
            </div>
            <div>
                <div class="contact-infos__single">
                    <i class="organik-icon-email"></i>
                    <h3>Send Email</h3>
                    <p>
                        <a href="mailto:needhelp@organik.com">
                            hariyalikart741@gmail.com
                        </a>
                        <br>
                        <a href="mailto:info@company.com">info@hariyalikart.com</a>
                    </p>
                </div>
            </div>
            <div>
                <div class="contact-infos__single">
                    <i class="organik-icon-calling"></i>
                    <h3>Call Center</h3>
                    <p><a href="tel:92-666-888-0000">+91-6205595589</a> <br>
                        <a href="tel:666-000-6666">9631164385
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="google-map__default">
    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115132.86724272583!2d85.06064017584845!3d25.608169163830127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1712213772478!5m2!1sen!2sin" class="map__default" allowfullscreen></iframe>
</div>

@endsection

@push('styles')
<style>
    .modal-dialog .modal-content .modal-header {
        position: initial;
        padding: 10px 20px;
        border-bottom: 1px solid #e9ecef;
    }

    .modal-dialog .modal-content .modal-body {
        height: 100px;
        padding: 10px 20px;
    }

    .modal-dialog .modal-content {
        width: 50%;
        border-radius: 0;
        margin: auto;
    }
</style>
@endpush
@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush