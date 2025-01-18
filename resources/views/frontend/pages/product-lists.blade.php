@extends('frontend.layouts.master')

@section('title','Ecommerce Laravel || PRODUCT PAGE')

@section('main-content')


<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Products</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>Products</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="products-page">
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
                                <img src='{{ asset("$photo[0]")}}'' alt="{{$photo[0]}}" height="367px">
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
                    <a href="#" class="thm-btn products__load-more">Load More</a><!-- /.thm-btn -->
                </div><!-- /.text-center -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.products-page -->




    <!-- Modal -->
    @if($products)
        @foreach($products as $key=>$product)
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
                                                        $photo=explode(',',$product->photo);
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
                                                        @for($i=1; $i<=5; $i++)
                                                            @if($rate>=$i)
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
                                            <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>    ${{number_format($after_discount,2)}}  </h3>
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
                                                        <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
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
                                            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
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
    <!-- Modal end -->

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							// document.location.href=document.location.href;
						});
                    }
                }
            })
        });
	</script> --}}
	<script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }

            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>

@endpush
