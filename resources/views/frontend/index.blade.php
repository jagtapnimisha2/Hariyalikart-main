@extends('frontend.layouts.master')
@section('title','Ecommerce Laravel || HOME PAGE')
@push('style')
<style>
    @media (min-width: 1200px) {
        .main-menu__list {
            margin-left: 100px;
        }
    }
</style>
@endpush
@section('main-content')

<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
"slidesPerView": 1,
"loop": true,
"effect": "fade",
"autoplay": {
"delay": 29000
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
}
}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer">
                    <video autoplay muted loop>
                        <source src="assets/images/video/intro.mp4" type="video/mp4">
                        <source src="assets/images/video/intro.mp4" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-center">
                            <h2><span> </span> <br>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/hariyali/front2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-center">
                            <h2><span>Latest Agricultural</span> <br>
                                Techniques</h2>
                            <a href="contact.html" class=" thm-btn">Order Now</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.swiper-slide -->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/hariyali/front2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-center">
                            <h2><span>Latest Agricultural</span> <br>
                                Techniques</h2>
                            <a href="contact.html" class=" thm-btn">Order Now</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.swiper-slide -->
        </div><!-- /.swiper-wrapper -->

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="organik-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="organik-icon-right-arrow"></i></div>
        </div><!-- /.main-slider__nav -->

    </div><!-- /.swiper-container thm-swiper__slider -->
</section><!-- /.main-slider -->

<section class="feature-box">
    <div class="container">
        <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
            <div class="thm-tiny__slider" id="contact-infos-box">
                <div>
                    <div class="feature-box__single">
                        <i class="organik-icon-global-shipping feature-box__icon"></i>
                        <div class="feature-box__content">
                            <h3>Return Policy</h3>
                            <p>Money back guarantee</p>
                        </div><!-- /.feature-box__content -->
                    </div><!-- /.feature-box__single -->
                </div>
                <div>
                    <div class="feature-box__single">
                        <i class="organik-icon-delivery-truck feature-box__icon"></i>
                        <div class="feature-box__content">
                            <h3>Free Shipping</h3>
                            <p>On all orders over $25.00</p>
                        </div><!-- /.feature-box__content -->
                    </div><!-- /.feature-box__single -->
                </div>
                <div>
                    <div class="feature-box__single">
                        <i class="organik-icon-online-store feature-box__icon"></i>
                        <div class="feature-box__content">
                            <h3>Store Locator</h3>
                            <p>Find your nearest store</p>
                        </div><!-- /.feature-box__content -->
                    </div><!-- /.feature-box__single -->
                </div>
            </div>
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.feature-box -->

<section class="new-products">
    <img src="assets/images/shapes/new-product-shape-1.png" alt="" class="new-products__shape-1">
    <div class="container">
        <div class="new-products__top">
            <div class="block-title ">
                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                <p>Recently Added</p>
                <h3>New Products</h3>
            </div><!-- /.block-title -->

            <!-- <ul class="post-filter filters list-unstyled">
                <li class="active filter" data-filter=".filter-item">All</li>
                <li class="filter" data-filter=".dairy">Dairy</li>
                <li class="filter" data-filter=".pantry">Pantry
                </li>
                <li class="filter" data-filter=".meat">Meat
                </li>
                <li class="filter" data-filter=".fruits">Fruits
                </li>
                <li class="filter" data-filter=".veg">Vagetables
                </li>
            </ul> -->

        </div><!-- /.new-products__top -->


        <section class="products-page" style="margin-top: -45px; padding-top: 0px; padding-bottom:0px;">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="product-sidebar">
                    <div class="product-sidebar__single product-sidebar__search-widget">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button class="organik-icon-magnifying-glass" type="submit"></button>
                        </form>
                    </div><!-- /.product-sidebar__single -->
                    <div class="product-sidebar__single">
                        <h3>Price</h3>
                        <div class="product-sidebar__price-range">
                            <div class="range-slider-price" id="range-slider-price"></div>
                            <div class="form-group">
                                <div class="left">
                                    <p>$<span id="min-value-rangeslider"></span></p>
                                    <span>-</span>
                                    <p>$<span id="max-value-rangeslider"></span></p>
                                </div><!-- /.left -->
                                <div class="right">
                                    <input type="submit" class="thm-btn" value="Filter">
                                </div><!-- /.right -->
                            </div>
                        </div><!-- /.product-sidebar__price-range -->
                    </div><!-- /.product-sidebar__single -->
                    <div class="product-sidebar__single">
                        <h3>Categories</h3>
                        <ul class="list-unstyled product-sidebar__links">
                            <li><a href="#">Vegetables <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Fresh Fruits <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Dairy Products <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Tomatos <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Oranges <i class="fa fa-angle-right"></i></a></li>
                        </ul><!-- /.list-unstyled product-sidebar__links -->
                    </div><!-- /.product-sidebar__single -->
                </div><!-- /.product-sidebar -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-3 --> --}}
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        {{-- <div class="product-sorter">
                    <p>Showing 1–9 of 12 results</p>
                    <div class="product-sorter__select">
                        <select class="selectpicker">
                            <option value="#">Sort by popular</option>
                            <option value="#">Sort by popular</option>
                            <option value="#">Sort by popular</option>
                            <option value="#">Sort by popular</option>
                        </select>
                    </div><!-- /.product-sorter__select -->
                </div><!-- /.product-sorter --> --}}
                        <div class="row">
                            @foreach($recent_products as $product)
                            @php
                            $photo=explode(',',$product->photo);
                            @endphp
                            <div class="col-md-6 col-lg-4">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src='{{ asset("$photo[0]")}}'' alt="{{$photo[0]}}" height="367px" style="height:305px;">
                                <div class="product-card__image-content">
                                    <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i></a>
                                    <a href="{{route('add-to-wishlist',$product->slug)}}"><i class="organik-icon-heart"></i></a>
                                    <a href="{{route('add-to-cart',$product->slug)}}"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__image-content -->
                            </div><!-- /.product-card__image -->
                            <div class="product-card__content">
                                <div class="product-card__left">
                                    <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                    <p>₹{{number_format($product->price,2)}}</p>
                                </div><!-- /.product-card__left -->
                                <div class="product-card__right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__right -->
                            </div><!-- /.product-card__content -->
                        </div><!-- /.product-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    @endforeach

                </div><!-- /.row -->
                <div class="text-center">
                    <a href="{{route('product-lists')}}" class="thm-btn products__load-more">Load More</a><!-- /.thm-btn -->
                </div><!-- /.text-center -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.products-page -->




    <!-- Modal -->
    @if($recent_products)
        @foreach($recent_products as $key=>$product)
        <div class="modal fade bd-example-modal-lg" id="{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <!-- Product Slider -->
                                            <div class="product-gallery">
                                                <div class="quickview-slider-active">
                                                    @php
                                                        $photo=explode(' ,',$product->photo);
                                        // dd($photo);
                                        @endphp
                                        @foreach($photo as $data)
                                        <div class="single-slider">
                                            <img src='{{asset("$data")}}' alt="{{$data}}" height="482px">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>{{$product->title}}</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                {{-- <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="fa fa-star"></i> --}}
                                                @php
                                                $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                @endphp
                                                @for($i=1; $i<=5; $i++) @if($rate>=$i)
                                                    <i class="yellow fa fa-star"></i>
                                                    @else
                                                    <i class="fa fa-star"></i>
                                                    @endif
                                                    @endfor
                                            </div>
                                            <a href="#"> ({{$rate_count}} customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            @if($product->stock >0)
                                            <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                            @else
                                            <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
                                            @endif
                                        </div>
                                    </div>
                                    @php
                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                    @endphp
                                    <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small> ${{number_format($after_discount,2)}} </h3>
                                    <div class="quickview-peragraph">
                                        <p>{!! html_entity_decode($product->summary) !!}</p>
                                    </div>
                                    @if($product->size)
                                    <div class="size">
                                        <h4>Size</h4>
                                        <ul>
                                            @php
                                            $sizes=explode(',',$product->size);
                                            // dd($sizes);
                                            @endphp
                                            @foreach($sizes as $size)
                                            <li><a href="#" class="one">{{$size}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="size">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Size</h5>
                                                <select>
                                                    @php
                                                    $sizes=explode(',',$product->size);
                                                    // dd($sizes);
                                                    @endphp
                                                    @foreach($sizes as $size)
                                                    <option>{{$size}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                        </div>
                                    </div>
                                    <form action="{{route('single-add-to-cart')}}" method="POST">
                                        @csrf
                                        <div class="quantity">
                                            <!-- Input Order -->
                                            <div class="input-group">
                                                <div class="button minus">
                                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="hidden" name="slug" value="{{$product->slug}}">
                                                <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                                                <div class="button plus">
                                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!--/ End Input Order -->
                                        </div>
                                        <div class="add-to-cart">
                                            <button type="submit" class="btn">Add to cart</button>
                                            <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
                                        </div>
                                    </form>
                                    <div class="default-social">
                                        <!-- ShareThis BEGIN -->
                                        <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
    @endif
    <!-- Modal end --><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.new-products -->

<section class="call-to-action-two">
    <img src="assets/images/shapes/call-shape-2-1.png" alt="" class="call-to-action-two__shape-1">
    <img src="assets/images/shapes/call-shape-2-2.png" alt="" class="call-to-action-two__shape-2">
    <img src="assets/images/shapes/call-shape-2-3.png" alt="" class="call-to-action-two__shape-3">
    <!-- tomoto -->
    <!-- <img src="assets/images/shapes/call-shape-2-4.png" alt="" class="call-to-action-two__shape-4"> -->

    <img src="assets/images/hariyali/Carrot.png" alt="" class="call-to-action-two__shape-4">
    <img src="assets/images/shapes/call-shape-2-5.png" alt="" class="call-to-action-two__shape-5">
    <!-- <img src="assets/images/shapes/call-shape-2-6.png" alt="" class="call-to-action-two__shape-6"> -->
    <img src="assets/images/hariyali/Beetroot.png" width="400px" alt="" class="call-to-action-two__shape-6">
    <div class="container">
        <div class="row flex-xl-row-reverse">
            <div class="col-lg-12 col-xl-6">
                <div class="call-to-action-two__image">
                    <h2 class="floated-text">Healthy</h2>
                    <!-- <img src="assets/images/resources/call-2-1.png" alt=""> -->
                    <img class="mt-5" src="assets/images/hariyali/new img-11.png" alt="">
                    <!-- <img src="assets/images/hariyali/overviews1.jpg" alt=""> -->
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="call-to-action-two__content">
                    <div class="block-title text-left">
                        <div class="block-title__decor"></div>
                        <p>Pure Organic Products</p>
                        <!-- <h3>Everyday Fresh Food</h3> -->
                        <h3>Overview</h3>
                    </div>
                    <!-- <div class=""> -->
                    <div class="col-md-12">
                        <h4>Hariyalikart is a trailblazer in the agricultural industry, leveraging cutting-edge innovation and
                            transformative technologies to revolutionize traditional farming practices. Established in [2022],
                            our headquarters in [Patna] serves as the epicenter of our dedicated team, comprising passionate
                            agricultural experts, seasoned engineers, and forward-thinking visionaries. We are committed to
                            driving sustainable agricultural development through the strategic integration of smart gadgets,
                            data analytics, and advanced technologies.
                        </h4>
                        <!-- <p>Voluptate velit essects quis tempor orci. Suspendisse that potenti faucibus.</p> -->
                    </div>
                    <!-- <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Refresing to get such a touch
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Duis aute irure dolor in
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Reprehenderit in voluptate
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Velit esse cillum dolore eu
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Fugiat nulla pariatur
                                </li>
                            </ul>
                        </div> -->
                    <!-- </div> -->
                    <a href="{{route('product-lists')}}" class="thm-btn">Order Now</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="offer-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-1.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>

                            welcome to
                        </h3> -->
                        <h3>Mission and Vision:</h3>
                        <p><br> At Hariyalikart, our mission is rooted in empowering farmers with next-generation technology
                            solutions that optimize crop yields, promote resource conservation, and enhance overall
                            agricultural sustainability. We envision a future where farming is not only efficient and
                            environmentally friendly but also economically viable for every farmer, thereby fostering a
                            thriving agricultural ecosystem.</p>

                        <!-- <a href="contact.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-2.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>Organic</h3>
                        <p>Quality Organic Food Store</p> -->
                        <h3>Company Values: </h3>
                        <p><br> Our core values at Hariyalikart form the cornerstone of our operations, encompassing
                            sustainability, innovation, and a farmer-centric approach. We are committed to fostering
                            sustainable agricultural practices that prioritize environmental stewardship, technological
                            innovation, and equitable benefits for farmers, ensuring a harmonious balance between
                            productivity and conservation.

                        </p>
                        <!-- <a href="products.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <!-- 2ND STARTS -->
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-1.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>

                            welcome to
                        </h3> -->
                        <h3>Unique Selling Proposition (USP):
                        </h3>
                        <p><br> Hariyalikart's unparalleled advantage stems from our innovative AI-driven solutions that offer a
                            paradigm shift in farming efficiency. Our diverse product portfolio includes state-of-the-art smart
                            irrigation systems, precision agriculture tools, and data analytics platforms. Through AI, IoT, and
                            machine learning algorithms, we deliver personalized and data-driven insights to farmers,
                            enabling them to make informed decisions and maximize productivity while minimizing resource
                            <br> wastage.
                        </p>
                        <p></p>
                        <p></p>

                        <!-- <a href="contact.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-2.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>Organic</h3>
                        <p>Quality Organic Food Store</p> -->
                        <h3>Achievements & Milestones:</h3>
                        <p><br> Hariyalikart has achieved significant milestones, earning recognition as a distinguished startup
                            under the esteemed Bihar Startup program. Our impactful contributions to the agricultural sector
                            have been further validated by securing substantial funding through the prestigious NIDHI PRAYAS
                            scheme, facilitated by the Innovation Center at IIT Patna. These accolades underscore our
                            relentless pursuit of excellence and our unwavering commitment to driving positive change in
                            agriculture.

                        </p>
                        <!-- <a href="products.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <!-- 2ND ENDS -->
        <!-- 3rd start -->
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-1.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>

                            welcome to
                        </h3> -->
                        <h3>Partnerships and Collaborations:</h3>
                        <p><br> Our strategic partnerships and collaborations with renowned agricultural research institutions,
                            industry experts, and local farmers' associations are instrumental in co-creating innovative
                            solutions tailored to meet the evolving needs of farmers. These collaborative efforts foster
                            knowledge exchange, technological innovation, and continuous improvement, enabling us to
                            deliver practical, scalable, and impactful solutions that drive tangible outcomes for farmers.

                        </p>

                        <!-- <a href="contact.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-2.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>Organic</h3>
                        <p>Quality Organic Food Store</p> -->
                        <h3>Testimonials or Success Stories: </h3>
                        <p><br>The transformative impact of Hariyalikart's solutions is evident in the success stories shared by
                            farmers across diverse regions. For instance, Mr. Rama, a progressive farmer from Bihar,
                            experienced a remarkable 60% increase in crop yield after implementing our AI-driven smart
                            irrigation system. These success stories serve as powerful testimonials to the effectiveness of our
                            solutions in improving farm productivity, profitability, and <br> sustainability.
                        </p>
                        <!-- <a href="products.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <!-- 3rd end -->
        <!-- 4th starts -->

        <div class="row">
            <div class="col-md-12 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-1.jpg);">
                    <div class="offer-banner__content">
                        <!-- <h3><span>100%</span> <br>

            welcome to
        </h3> -->
                        <h3>Future Goals: </h3>
                        <p><br>Looking ahead, Hariyalikart is poised for transformative growth and expansion. Our future
                            roadmap includes a strategic focus on diversifying our product portfolio to encompass a broader
                            range of crops, ecosystems, and geographical regions. We are committed to leveraging strategic
                            alliances with government agencies, industry partners, and research institutions to reach
                            underserved farming communities, drive inclusive growth, and catalyze a paradigm shift in global
                            agriculture towards sustainability and resilience. </p>

                        <!-- <a href="contact.html" class="thm-btn">Order Now</a> -->
                    </div><!-- /.offer-banner__content -->
                </div><!-- /.offer-banner__box -->
            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
        <!-- 4th ends -->
    </div><!-- /.container -->
</section><!-- /.offer-banner -->

<section class="funfact-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
    <img src="assets/images/backgrounds/funfact-bg-1-1.jpg" class="jarallax-img" alt="">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                <div class="funfact-one__single">
                    <h3 class="odometer" data-count="8080">00</h3>
                    <p>Organic Products Available</p>
                </div><!-- /.funfact-one__single -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="funfact-one__single">
                    <h3 class="odometer" data-count="697">00</h3>
                    <p>Healthy Recipes</p>
                </div><!-- /.funfact-one__single -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="funfact-one__single">
                    <h3 class="odometer" data-count="440">00</h3>
                    <p>Expert Team Mebers</p>
                </div><!-- /.funfact-one__single -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="funfact-one__single">
                    <h3 class="odometer" data-count="2870">00</h3>
                    <p>Satisfied Customers</p>
                </div><!-- /.funfact-one__single -->
            </div><!-- /.col-md-6 col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.funfact-one -->

<section class="call-to-action">
    <img src="assets/images/shapes/call-shape-1.png" alt="" class="call-to-action__shape-1">
    <img src="assets/images/shapes/call-shape-2.png" alt="" class="call-to-action__shape-2 wow fadeInLeft" data-wow-duration="1500ms">
    <h2 class="floated-text">Oragnic</h2><!-- /.floated-text -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-6 clearfix">
                <!-- <img src="assets/images/resources/call-1-1.jpg" class="call-to-action__image" alt=""> -->
                <img src="assets/images/hariyali/our_storyYoga.jpg" class="call-to-action__image" alt="">
            </div><!-- /.col-md-12 col-lg-12 col-xl-12 -->
            <div class="col-md-12 col-lg-12 col-xl-6 clearfix">
                <div class="call-to-action__content">
                    <div class="block-title text-left">
                        <div class="block-title__decor" style="background-image: url(assets/images/shapes/leaf-2-1.png);"></div>
                        <!-- /.block-title__decor -->
                        <!-- <p>Shopping Store</p> -->
                        <!-- <h3>Organic Food Only</h3> -->
                        <h3>Our Story</h3>
                    </div><!-- /.block-title -->
                    <!-- <p>There are many variations of passages of lorem ipsum available but the majority have
                        suffered
                        alteration in some form by injected humor or random word.</p> -->
                    <p class="pb-1">- Am I living a healthy & sustainable life?</p>
                    <p class="pb-1">- How can I get rid of stress from my lifestyle?</p>
                    <p class="pb-3">- How can I prioritize physical & mental health?</p>
                    <p class="pb-1" style="font-size: 15px;">Ask overworked and underslept prateek while having pizza at 11pm in a corporate office.</p>
                    <p class="pb-1" style="font-size: 15px;">Click below to know how an accomplished CA turned his life around to start a health & wellness startup.</p>
                    <!--<div class="call-to-action__wrap">-->
                    <!--    <div class="row no-gutters">-->
                    <!--        <div class="col-md-6">-->
                    <!--            <div class="call-to-action__box">-->
                    <!--                <i class="organik-icon-farmer"></i>-->
                    <!--                <h3>Professional-->
                    <!--                    Farmers</h3>-->
                    <!--            </div><!-- /.call-to-action__box -->-->
                    <!--        </div><!-- /.col-md-6 -->-->
                    <!--        <div class="col-md-6">-->
                    <!--            <div class="call-to-action__box">-->
                    <!--                <i class="organik-icon-farm"></i>-->
                    <!--                <h3>Solution-->
                    <!--                    for Farming</h3>-->
                    <!--            </div><!-- /.call-to-action__box -->-->
                    <!--        </div><!-- /.col-md-6 -->-->
                    <!--    </div><!-- /.row -->-->
                    <!--</div><!-- /.call-to-action__wrap -->-->
                    <a href="#" class="thm-btn">READ MORE</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__content -->
            </div><!-- /.col-md-12 col-lg-12 col-xl-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.call-to-action -->

<div class="client-carousel ">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
        "0": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "375": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "767": {
            "spaceBetween": 50,
            "slidesPerView": 4
        },
        "991": {
            "spaceBetween": 50,
            "slidesPerView": 5
        },
        "1199": {
            "spaceBetween": 100,
            "slidesPerView": 5
        }
    }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <!-- <img src="assets/images/resources/brand-1-1.png" alt=""> -->
                    <img src="assets/images/hariyali/am4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am8.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <!-- <img src="assets/images/resources/brand-1-1.png" alt=""> -->
                    <img src="assets/images/hariyali/am7.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am10.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am88.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am999.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am10.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am11.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am10.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am7.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am88.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am999.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am10.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am11.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/hariyali/am5.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <!-- <img src="assets/images/resources/brand-1-1.png" alt=""> -->
                    <img src="assets/images/hariyali/am8.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <!-- <img src="assets/images/resources/brand-1-1.png" alt=""> -->
                    <img src="assets/images/hariyali/am2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <!-- <img src="assets/images/resources/brand-1-1.png" alt=""> -->
                    <img src="assets/images/hariyali/am333.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <!-- <img src="assets/images/resources/brand-1-1.png" alt=""> -->
                    <img src="assets/images/hariyali/am4.png" alt="">
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->

<!-- <section class="call-to-action-two">
    <img src="assets/images/shapes/call-shape-2-1.png" alt="" class="call-to-action-two__shape-1">
    <img src="assets/images/shapes/call-shape-2-2.png" alt="" class="call-to-action-two__shape-2">
    <img src="assets/images/shapes/call-shape-2-3.png" alt="" class="call-to-action-two__shape-3">
    <img src="assets/images/shapes/call-shape-2-4.png" alt="" class="call-to-action-two__shape-4">
    <img src="assets/images/shapes/call-shape-2-5.png" alt="" class="call-to-action-two__shape-5">
    <img src="assets/images/shapes/call-shape-2-6.png" alt="" class="call-to-action-two__shape-6">
    <div class="container">
        <div class="row flex-xl-row-reverse">
            <div class="col-lg-12 col-xl-6">
                <div class="call-to-action-two__image">
                    <h2 class="floated-text">Healthy</h2>
                    <img src="assets/images/resources/call-2-1.png" alt="">
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="call-to-action-two__content">
                    <div class="block-title text-left">
                        <div class="block-title__decor"></div>
                        <p>Pure Organic Products</p>
                        <h3>Everyday Fresh Food</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Duis aute irure dolor in reprehen in derit.</h4>
                            <p>Voluptate velit essects quis tempor orci. Suspendisse that potenti faucibus.</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Refresing to get such a touch
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Duis aute irure dolor in
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Reprehenderit in voluptate
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Velit esse cillum dolore eu
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Fugiat nulla pariatur
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="products.html" class="thm-btn">Order Now</a>
                </div>
            </div>

        </div>
    </div>
</section> -->


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

<section class="gallery-one">
    <div class="container-fluid">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <p>We’re On Instagram</p>
            <h3>Shop on Instagram</h3>
        </div><!-- /.block-title -->
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
"autoplay": {
    "delay": 5000
}, "breakpoints": {
    "0": {
        "spaceBetween": 0,
        "slidesPerView": 1
    },
    "375": {
        "spaceBetween": 0,
        "slidesPerView": 1
    },
    "575": {
        "spaceBetween": 10,
        "slidesPerView": 2
    },
    "767": {
        "spaceBetween": 10,
        "slidesPerView": 3
    },
    "991": {
        "spaceBetween": 10,
        "slidesPerView": 5
    },
    "1199": {
        "spaceBetween": 10,
        "slidesPerView": 5
    }
}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-1.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-01.png" alt="">
                        <a href="assets/images/hariyali/g-01.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-2.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-02.png" alt="">
                        <a href="assets/images/hariyali/g-02.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-3.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-03.png" alt="">
                        <a href="assets/images/hariyali/g-03.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-4.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-04.png" alt="">
                        <a href="assets/images/hariyali/g-04.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-5.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-05.png" alt="">
                        <a href="assets/images/hariyali/g-05.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-1.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-06.png" alt="">
                        <a href="assets/images/hariyali/g-06.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-2.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-07.png" alt="">
                        <a href="assets/images/hariyali/g-07.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-3.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-08.png" alt="">
                        <a href="assets/images/hariyali/g-08.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-4.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-09.png" alt="">
                        <a href="assets/images/hariyali/g-09.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-5.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-10.png" alt="">
                        <a href="assets/images/hariyali/g-10.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-1.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-11.png" alt="">
                        <a href="assets/images/hariyali/g-11.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/hariyali/Haryalikart-14.png" alt=""> -->
                        <!-- <img src="assets/images/gallery/gallery-1-1.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-12.png" alt="">
                        <a href="assets/images/hariyali/g-12.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-3.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-13.png" alt="">
                        <a href="assets/images/hariyali/g-13.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <!-- <img src="assets/images/gallery/gallery-1-4.jpg" alt=""> -->
                        <img src="assets/images/hariyali/g-10.png" alt="">
                        <a href="assets/images/hariyali/g-10.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-02.png" alt="">
                        <a href="assets/images/hariyali/g-02.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-02.png" alt="">
                        <a href="assets/images/hariyali/g-02.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-03.png" alt="">
                        <a href="assets/images/hariyali/g-03.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-04.png" alt="">
                        <a href="assets/images/hariyali/g-04.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-05.png" alt="">
                        <a href="assets/images/hariyali/g-05.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-06.png" alt="">
                        <a href="assets/images/hariyali/g-06.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-07.png" alt="">
                        <a href="assets/images/hariyali/g-07.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-08.png" alt="">
                        <a href="assets/images/hariyali/g-08.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-09.png" alt="">
                        <a href="assets/images/hariyali/g-09.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-10.png" alt="">
                        <a href="assets/images/hariyali/g-10.png" class="img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="gallery-one__item">
                        <img src="assets/images/hariyali/g-11.png" alt="">
                        <a href="assets/images/hariyali/g-11.png class=" img-popup"><i class="fa fa-plus"></i></a>
                    </div><!-- /.gallery-one__item -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container thm-swiper__slider -->
    </div><!-- /.container-fluid -->
</section><!-- /.gallery-one -->

@endsection