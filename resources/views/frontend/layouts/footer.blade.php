<footer class="site-footer background-black-2">
    <img src="assets/images/shapes/footer-bg-1-1.png" alt="" class="site-footer__shape-1">
    <img src="assets/images/shapes/footer-bg-1-2.png" alt="" class="site-footer__shape-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="footer-widget footer-widget__about-widget">
                    <a href="index.html" class="footer-widget__logo">
                        <img src='{{asset("assets/images/logo-light.png")}}' alt="" width="105" height="43">
                    </a>
                    <p class="thm-text-dark">Explore Hariyalikart for top-quality farming supplies and expert guidance. Your farm's success starts here!</p>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 -->
            @php
            $settings=DB::table('settings')->get();

            @endphp
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget footer-widget__contact-widget">
                    <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__contact">
                        <li>
                            <i class="fa fa-phone-square"></i>
                            <a href="tel:@foreach($settings as $data) {{$data->phone}} @endforeach">@foreach($settings as $data) {{$data->phone}} @endforeach</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:@foreach($settings as $data) {{$data->email}} @endforeach">@foreach($settings as $data) {{$data->email}} @endforeach</a>
                        </li>
                        <li>
                            <i class="fa fa-map"></i>
                            <a href="#">Patna</a>
                        </li>
                    </ul><!-- /.list-unstyled footer-widget__contact -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget footer-widget__links-widget">
                    <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links" style="color: var(--thm-text-dark);">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>

                        <li>
                            <a href="{{route('about-us')}}">About</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <li>
                            <a href="{{route('case-study')}}">Case Study</a>
                        </li>
                    </ul><!-- /.list-unstyled footer-widget__contact -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget">
                    <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links" style="color: var(--thm-text-dark);">
                        <li>
                            <a href="{{route('product-lists')}}">Products</a>
                        </li>
                        <li>
                            <a href="{{route('gallery')}}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{route('blogs')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('faq')}}">FAQs</a>
                        </li>
                    </ul><!-- /.list-unstyled footer-widget__contact -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="footer-widget">
                    <h3 class="footer-widget__title">Newsletter</h3><!-- /.footer-widget__title -->
                    <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                        <input type="email" name="EMAIL" id="mc-email" placeholder="Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="bottom-footer">
        <div class="container">
            <hr>
            <div class="inner-container text-center">
                <div class="bottom-footer__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.bottom-footer__social -->
                <p class="thm-text-dark">© Copyright <span class="dynamic-year"></span> by hariyalikart.com</p>
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </div><!-- /.bottom-footer -->
</footer><!-- /.site-footer -->

</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src='{{asset("assets/images/logo-light.png")}}' width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="organik-icon-email"></i>
                <a href="mailto:@foreach($settings as $data) {{$data->email}} @endforeach">@foreach($settings as $data) {{$data->email}} @endforeach</a>
            </li>
            <li>
                <i class="organik-icon-calling"></i>
                <a href="tel:@foreach($settings as $data) {{$data->phone}} @endforeach">@foreach($settings as $data) {{$data->phone}} @endforeach</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="assets/images/resources/flag-1-1.jpg" alt="">
                <label class="sr-only" for="language-select">select language</label>
                <!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div><!-- /.mobile-nav__language -->
            <div class="main-menu__login">
                @auth
                <div style="display: flex;"><a href="#"><i class="organik-icon-user"></a></i><a href="{{route('user')}}">User</a></div>

                @else
                <div style="display: flex;"><a href="#"><i class="organik-icon-user"></a></i><a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a></div>
                @endauth
            </div><!-- /.main-menu__login -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="mini-cart">
    <div class="mini-cart__overlay mini-cart__toggler"></div>
    <div class="mini-cart__content">
        <div class="mini-cart__top">
            <h3 class="mini-cart__title">Shopping Cart</h3>
            <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
        </div><!-- /.mini-cart__top -->
        <div class="mini-cart__item">
            <img src="assets/images/products/cart-1-1.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Banana</a></h3>
                    <p>$9.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="2" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <div class="mini-cart__item">
            <img src="assets/images/products/cart-1-2.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Tomato</a></h3>
                    <p>$9.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="2" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <div class="mini-cart__item">
            <img src="assets/images/products/cart-1-3.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Bread</a></h3>
                    <p>$9.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="2" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <a href="checkout.html" class="thm-btn mini-cart__checkout">Proceed To Checkout</a>
    </div><!-- /.mini-cart__content -->
</div><!-- /.cart-toggler -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="organik-icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/js/organik.js') }}"></script>


<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('frontend/js/colors.js')}}"></script>
<!-- Slicknav JS -->
<!-- Owl Carousel JS -->
<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<!-- Flex Slider JS -->
<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('frontend/js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
{{-- Isotope --}}
<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('frontend/js/easing.js')}}"></script>

<!-- Active JS -->
<script src="{{asset('frontend/js/active.js')}}"></script>


@stack('scripts')
<script>
    setTimeout(function() {
        $('.alert').slideUp();
    }, 5000);
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).siblings().toggleClass("show");


            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

        });
    });
</script>

<!-- first time info Modal -->

<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--end modal-->
</body>

</html>
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    /*==================================================================
        [ Isotope ]*/
    var $topeContainer = $('.isotope-grid');
    var $filter = $('.filter-tope-group');

    // filter items on button click
    $filter.each(function() {
        $filter.on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $topeContainer.isotope({
                filter: filterValue
            });
        });

    });

    // init Isotope
    $(window).on('load', function() {
        var $grid = $topeContainer.each(function() {
            $(this).isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows',
                percentPosition: true,
                animationEngine: 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    var isotopeButton = $('.filter-tope-group button');

    $(isotopeButton).each(function() {
        $(this).on('click', function() {
            for (var i = 0; i < isotopeButton.length; i++) {
                $(isotopeButton[i]).removeClass('how-active1');
            }

            $(this).addClass('how-active1');
        });
    });
</script>
<script>
    function cancelFullScreen(el) {
        var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el.exitFullscreen;
        if (requestMethod) { // cancel full screen.
            requestMethod.call(el);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
    }

    function requestFullScreen(el) {
        // Supports most browsers and their versions.
        var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

        if (requestMethod) { // Native full screen.
            requestMethod.call(el);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
        return false
    }
</script>

@endpush