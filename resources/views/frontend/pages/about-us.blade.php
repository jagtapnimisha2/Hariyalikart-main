@extends('frontend.layouts.master')

@section('title','Ecommerce Laravel || About Us')

@section('main-content')




<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/hariyali/about-banner.png);">
    </div>

    <div class="container ">
        <h2 class="custom-heading">About Us</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li><span>About</span></li>
        </ul>
    </div>
</section>

<section class="about-one py-0">
    <img style="width: 240px !important;" src="assets/images/shapes/about-leaf-1-1.png" alt="bg image">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12 col-lg-6 text-center">
                <img src="assets/images/hariyali/about3.jpg" class="img-fluid rounded-lg w-75" alt="">
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="about-one__content">
                    <div class="block-title text-left">
                        <div class="block-title__decor"></div>

                        <p>Who we are </p>
                        <h3>We’re Selling Quality
                            Products</h3>
                    </div>
                    <p>At Hariyalikart, we are more than just an agricultural solutions provider; we are pioneers in
                        revolutionizing farming practices through innovation and technology. Our core mission is to empower
                        farmers by providing them with smart irrigation systems, AI-based agricultural advisory services, and
                        personalized training programs. We believe in sustainable farming practices that optimize crop yield
                        while conserving natural resources. Through continuous research, development, and collaboration, we
                        are committed to shaping the future of agriculture and ensuring food security for generations to come.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-one pt-5">
    <img src="assets/images/shapes/team-shape-1.png" alt="" class="team-one__shape-1">
    <img src="assets/images/shapes/team-shape-2.png" alt="" class="team-one__shape-2">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div>
            <p>Professional People</p>
            <h3>Meet the Team</h3>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card__image">

                        <img src="assets/images/hariyali/amit_images.jpg" alt="">
                    </div>
                    <div class="team-card__content">
                        <h3>Amit Kumar Raj </h3>
                        <h6>Role: Founder & CEO</h6>
                        <div class="team-card__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card__image">
                        <img src="assets/images/hariyali/anjali_images.jpg" alt="">
                    </div>
                    <div class="team-card__content">
                        <h3>Anjali Kumari
                        </h3>
                        <h6>Role: Co-Founder & COO</h6>
                        <div class="team-card__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card__image">
                        <img src="assets/images/hariyali/aman_images.jpg" alt="">
                    </div>
                    <div class="team-card__content">
                        <h3>Manish Kumar</h3>
                        <h6>Role: Co-Founder & CMO</h6>
                        <div class="team-card__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card__image">
                        <img src="assets/images/hariyali/ajay_imagesss.jpg" alt="">
                    </div>
                    <div class="team-card__content">
                        <h3>Ajay Kumar</h3>
                        <h6>Role: Content Creator & CIO</h6>
                        <div class="team-card__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card__image">
                        <img src="assets/images/hariyali/ajay_imagesss.jpg" alt="">
                    </div>
                    <div class="team-card__content">
                        <h3>Vijay Prasad</h3>
                        <h6>Role: CTO</h6>
                        <div class="team-card__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-one">
    <div class="testimonials-one__head">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__decor"></div>
                <p>Our Testimonials</p>
                <h3>What People Say?</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="thm-tiny__slider" id="testimonials-one-box" data-tiny-options='{
    "container": "#testimonials-one-box",
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
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="assets/images/hariyali/testo2.jpg" width="180px" alt="" style="width: 70%;border-radius: unset;">
                    </div>
                    <div class="testimonials-one__content">
                        <p>
                            "Hariyalikart's top-notch products revolutionized my farm. From seeds to tools, their quality and service exceed expectations. Highly recommend for all farmers!"</p>
                        <h3 class="collier">Winnie Collier</h3>
                        <span>Customer</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">

                        <img src="assets/images/hariyali/testo1.jpg" width="180px" alt="" style="width: 70%;border-radius: unset;">
                    </div>
                    <div class="testimonials-one__content woods" style="padding-bottom: 89px">
                        <p>"Hariyalikart transformed my farming! Quality seeds, efficient tools, and expert advice made my harvest bountiful. A must for every farmer!"</p>
                        <h3>Helen Woods</h3>
                        <span>Customer</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">

                        <img src="assets/images/hariyali/teso3.jpg" width="180px" height="120px" alt="" style="width: 70%;border-radius: unset; height: 170px;">
                    </div>
                    <div class="testimonials-one__content" style="padding-bottom: 82px">
                        <p>"Hariyalikart is a lifeline for farmers like me. Their reliable products and expert advice have revolutionized my farming journey. Truly indispensable!"</p>
                        <h3>Ethan Thomas</h3>
                        <span>Customer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection