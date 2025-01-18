<header class="main-header">
    <div class="topbar" style="padding: 0px">
        <div class="container">
            <!-- logo start -->
            <div class="main-logo">
                <div class="topbar__social">
                    <!-- <a href="#" class="fab fa-twitter"></a> -->
                    <a href="https://www.linkedin.com/company/hariyalikart/" class="fab fa-linkedin-in"></a>
                    <!-- <a href="#" class="fab fa-facebook-square"></a> -->
                    <a href="https://www.youtube.com/@hariyalikart" class="fab fa-youtube"></a>
                    <a href="https://www.facebook.com/hariyalikart?_tn_=%3C%2Cd" class="fab fa-facebook-square"></a>
                    <a href="https://www.instagram.com/hariyalikart?utm_source=ig_web_button_share_sheet&amp;igsh=ZDNIZDc0MzlxNw==" class="fab fa-instagram"></a>
                    <!-- <a href="#" class="fab fa-instagram"></a> -->
                </div>

                <div class="mobile-nav__buttons">
                    <a href="#" class="search-toggler"><i class="organik-icon-heart"></i></a>
                    <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                </div>

                <span class="fa fa-bars mobile-nav__toggler"></span>
            </div>
            <!-- logo end -->
            <!-- centert start -->
            <div class="topbar__left">
                <div class="topbar__social">
                    @php
                    $settings=DB::table('settings')->get();

                    @endphp
                    <a href="{{route('home')}}" class="logo">
                        <img src='@foreach($settings as $data) {{asset("$data->logo")}} @endforeach' width="105" alt="">
                    </a>
                </div>

                <div class="topbar__info">
                    <i class="organik-icon-email"></i>
                    <p>Email <a href="mailto:@foreach($settings as $data) {{$data->email}} @endforeach">@foreach($settings as $data) {{$data->email}} @endforeach</a></p>
                </div>
            </div>
            <!-- center end -->
            <!-- /.topbar__left -->
            <div class="topbar__right">
                <div class="topbar__info">
                    <i class="organik-icon-calling"></i>
                    <p>Phone <a href="tel:@foreach($settings as $data) {{$data->phone}} @endforeach">@foreach($settings as $data) {{$data->phone}} @endforeach</a></p>
                </div><!-- /.topbar__info -->
                <div class="topbar__buttons" style="height: 50px;">
                    @php
                    $total_prod=0;
                    $total_amount=0;
                    @endphp
                    @if(session('wishlist'))
                    @foreach(session('wishlist') as $wishlist_items)
                    @php
                    $total_prod+=$wishlist_items['quantity'];
                    $total_amount+=$wishlist_items['amount'];
                    @endphp
                    @endforeach
                    @endif
                    <a href="{{route('wishlist')}}" class="single-icon"><i class="organik-icon-heart"></i>@if(Helper::wishlistCount() > 0)<span class="total-count" style="font-size: large;">{{Helper::wishlistCount()}}</span>@endif</a>
                    <a href="{{route('cart')}}" class=""><i class="organik-icon-shopping-cart"></i>@if(Helper::cartCount() > 0)<span class="total-count" style="font-size: large;">{{Helper::cartCount()}}</span>@endif</a>
                </div><!-- /.topbar__buttons -->
            </div><!-- /.topbar__left -->

        </div><!-- /.container -->
    </div><!-- /.topbar -->

    <nav class="main-menu">
        <div class="container">
            <div class="main-menu__login">

                @auth
                <div style="display: flex;">
                    @if(Auth::user()->role=='admin')
                    <i class="organik-icon-delivery-truck" style="margin-top: 4px; color:#60BE74;"></i> <a href="{{route('order.track')}}">Track Order</a>&nbsp &nbsp

                    <i class="organik-icon-user" style="margin-top: 4px; color:#60BE74;"></i> <a href="{{route('admin')}}" target="_blank">Dashboard</a>&nbsp &nbsp
                    @else
                    <i class="organik-icon-delivery-truck" style="margin-top: 4px; color:#60BE74;"></i> <a href="{{route('order.track')}}">Track Order</a>&nbsp &nbsp

                    <i class="organik-icon-user" style="margin-top: 4px; color:#60BE74;"></i> <a href="{{route('user')}}" target="_blank">Dashboard</a>&nbsp &nbsp
                    @endif
                    <i class="ti-power-off" style="margin-top: 4px;"></i> <a href="{{route('user.logout')}}">Logout</a>
                </div>

                @else
                <div style="display: flex;"><a href="#"><i class="organik-icon-user"></a></i><a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a></div>
                @endauth
            </div><!-- /.main-menu__login -->
            <ul class="main-menu__list">
                <li class="">
                    <a href="{{route('home')}}">Home</a>
                    <!-- <ul>
                        <li>
                            <a href="index.html">Home One</a>
                        </li>
                        <li><a href="index-2.html">Home Two</a></li>
                        <li class="dropdown">
                            <a href="#">Header Styles</a>
                            <ul>
                                <li><a href="index.html">Header One</a></li>
                                <li><a href="index-2.html">Header Two</a></li>
                            </ul>
                        </li>
                    </ul> -->
                </li>
                <li @if(Request::is('about-us')) class="current" @endif>
                    <a href="{{route('about-us')}}">About</a>
                </li>
                <li @if(Request::is('product-lists')) class="current" @endif>
                    <a href="{{route('product-lists')}}">Shop</a>

                </li>
                <li @if(Request::is('blogs')) class="current" @endif><a href="{{route('blogs')}}">Blog</a>

                </li>
                <li @if(Request::is('contact')) class="current" @endif><a href="{{route('contact')}}">Contact</a></li>

                <li class="dropdown">
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="{{route('case-study')}}">Case Study</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('team')}}">Team details</a></li>
                        <li><a href="{{route('faq')}}"> (FAQs)</a></li>
                    </ul>
                </li>
            </ul>
            {{-- <div class="main-menu__language">
                <img src="assets/images/resources/flag-1-1.jpg" alt="">
                <label class="sr-only" for="language-select">select language</label>
                <!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select-header">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div><!-- /.main-menu__language --> --}}

            <div class="main-menu__language ">
                <ul class="main-menu__list" >
                <li class="dropdown">
                    <a href="#">Language</a>
                    <ul>
                        <li> <a href="#"  data-google-lang="hi" >
                             हिन्दी
                        </a></li>
                        <li><a href="#" data-google-lang="en"  >
                            English
                        </a></li>

                    </ul>
                </li>
            </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header><!-- /.main-header -->
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->