@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner banner-big banner-overlay">
                    <a href="#">
                        <img src="{{ asset('assets/images/demos/demo-7/banners/banner-1.jpg') }}" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-center">
                        <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3>
                        <h2 class="banner-title text-white"><a href="#">Shop Women's</a></h2>
                        <a href="#" class="btn underline"><span>Discover Now</span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="banner banner-big banner-overlay">
                    <a href="#">
                        <img src="{{ asset('assets/images/demos/demo-7/banners/banner-2.jpg') }}" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-center">
                        <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3>
                        <h2 class="banner-title text-white"><a href="#">Shop Men's</a></h2>
                        <a href="#" class="btn underline"><span>Discover Now</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay text-white">
                    <a href="#">
                        <img src="{{ asset('assets/images/demos/demo-7/banners/banner-3.jpg') }}" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-right">
                        <h4 class="banner-subtitle"><a href="#">Flip Flop</a></h4>
                        <h3 class="banner-title"><a href="#">Summer<br>sale -70% off</a></h3>
                        <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay color-grey">
                    <a href="#">
                        <img src="{{ asset('assets/images/demos/demo-7/banners/banner-4.jpg') }}" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Accessories</a></h4>
                        <h3 class="banner-title"><a href="#">2019 Winter<br>up to 50% off</a></h3>
                        <a href="#" class="btn underline banner-link">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay text-white">
                    <a href="#">
                        <img src="{{ asset('assets/images/demos/demo-7/banners/banner-5.jpg') }}" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-right mr">
                        <h4 class="banner-subtitle"><a href="#">New in</a></h4>
                        <h3 class="banner-title"><a href="#">Women’s<br>sportswear</a></h3>
                        <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12 icon-boxes">
                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-truck"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Payment & Delivery</h3>
                                <p>Free shipping for orders over $50</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Return & Refund</h3>
                                <p>Free 100% money back guarantee</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-headphones"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quality Support</h3>
                                <p>Alway online feedback 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light-2 pt-6 pb-6 featured">
        <div class="container-fluid">
            <div class="heading heading-center mb-3">
                <h2 class="title">FEATURED PRODUCTS</h2>

                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="featured-women-link" data-toggle="tab" href="#featured-women-tab" role="tab" aria-controls="featured-women-tab" aria-selected="true">Womens Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="featured-men-link" data-toggle="tab" href="#featured-men-tab" role="tab" aria-controls="featured-men-tab" aria-selected="false">Mens Clothing</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-1-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-1-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Backpack</a></h3>
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-2-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-2-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Biker jacket</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $120.99
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-3-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-3-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Sandals</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $70.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-4-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-4-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->

                                <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$190.00</span>
                                    <span class="old-price">$310.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-5-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-5-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Short wrap dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $80.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-1-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-1-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Backpack</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel" aria-labelledby="featured-men-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-2-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-2-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Biker jacket</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $120.99
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-3-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-3-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Sandals</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $70.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-4-1.jpg') }}" alt="Product image" class="product-image">
                                    <img src="{{ asset('assets/images/demos/demo-7/products/product-4-2.jpg') }}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->

                                <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$190.00</span>
                                    <span class="old-price">$310.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container-fluid -->
    </div><!-- End .bg-light-2 pt-4 pb-4 -->

    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container-fluid">
        <div class="heading heading-center mb-3">
            <h2 class="title">NEW ARRIVALS</h2><!-- End .title -->

            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="true">Womens Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-men-link" data-toggle="tab" href="#new-men-tab" role="tab" aria-controls="new-men-tab" aria-selected="false">Mens Clothing</a>
                </li>
            </ul>
        </div><!-- End .heading -->

        <div class="tab-content">
            <div class="tab-pane p-0 fade show active" id="new-women-tab" role="tabpanel" aria-labelledby="new-women-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-6-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-6-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Tie-detail top</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$84.00</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-7-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-7-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Dress with a belt</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    $120.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-8-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-8-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $60.00
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #d5ad81;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-9-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-9-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Paper straw shopper</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    $80.95
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-10-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-10-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Trainers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    $56.00
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-11-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-11-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Hooded top </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$84.00</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-12-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-12-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Vest dress</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $89.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-13-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-13-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Long-sleeved blouse</a></h3>
                                    <div class="product-price">
                                        $84.00
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div>
                                        </div>
                                        <span class="ratings-text">( 3 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-14-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-14-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Denim jacket</a></h3>
                                    <div class="product-price">
                                        $80.95
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                        </div>
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div>
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #7ba1c9;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #feb143;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f0c7b7;"><span class="sr-only">Color name</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-15-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-15-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Sunglasses</a></h3>
                                    <div class="product-price">
                                        $56.00
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                        </div>
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-0 fade" id="new-men-tab" role="tabpanel" aria-labelledby="new-men-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-8-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-8-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Linen-blend paper bag trousers</a></h3>
                                    <div class="product-price">
                                        $60.00
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                        </div>
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div>
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #d5ad81;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-9-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-9-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Paper straw shopper</a></h3>
                                    <div class="product-price">
                                    $80.95
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                        </div>
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-10-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-10-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Trainers</a></h3>
                                    <div class="product-price">
                                    $56.00
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                        </div>
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-11-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-11-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Hooded top </a></h3>
                                    <div class="product-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$84.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div>
                                        </div>
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-12-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-12-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Vest dress</a></h3>
                                    <div class="product-price">
                                        $89.99
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                        </div>
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-13-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('assets/images/demos/demo-7/products/product-13-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="#">Long-sleeved blouse</a></h3>
                                    <div class="product-price">
                                        $84.00
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div>
                                        </div>
                                        <span class="ratings-text">( 3 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="more-container text-center mt-2">
            <a href="#" class="btn btn-outline-dark-3 btn-more"><span>Load more</span><i class="icon-long-arrow-right"></i></a>
        </div>

        <hr class="mt-0 mb-6">
    </div>

    <div class="bg-light-2 pt-7 pb-6 testimonials">
        <div class="container">
            <h2 class="title text-center mb-2">Our Customers Say</h2>
            <div class="owl-carousel owl-simple owl-testimonials" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "1200": {
                            "nav": true
                        }
                    }
                }'>
                <blockquote class="testimonial testimonial-icon text-center">
                    <p class="lead">“Really great store”</p>
                    <p>“ Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra<br>a, ultricies in, diam. Sed arcu. ”</p>

                    <cite>
                        Charly Smith,
                        <span>Customer</span>
                    </cite>
                </blockquote>

                <blockquote class="testimonial testimonial-icon text-center">
                    <p class="lead">“Friendly Support”</p>
                    <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.”</p>

                    <cite>
                        Damon Stone
                        <span>Customer</span>
                    </cite>
                </blockquote>

                <blockquote class="testimonial testimonial-icon text-center">
                    <p class="lead">“Free Shipping”</p>
                    <p>“ Molestias animi illo natus ut quod neque ad accusamus praesentium fuga! Dolores odio alias sapiente odit delectus quasi, explicabo a, modi voluptatibus. Perferendis perspiciatis, voluptate, distinctio earum veritatis animi tempora eget blandit nunc tortor mollis ”</p>

                    <cite>
                        John Smith
                        <span>Customer</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="brands-border owl-carousel owl-simple" data-toggle="owl" 
        data-owl-options='{
            "nav": false, 
            "dots": false,
            "margin": 0,
            "loop": false,
            "responsive": {
                "0": {
                    "items":2
                },
                "420": {
                    "items":3
                },
                "600": {
                    "items":4
                },
                "900": {
                    "items":5
                },
                "1024": {
                    "items":6
                },
                "1360": {
                    "items":7
                }
            }
        }'>
        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/1.png') }}" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/2.png') }}" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/3.png') }}" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/4.png') }}" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/5.png') }}" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/6.png') }}" alt="Brand Name">
        </a>

        <a href="#" class="brand">
            <img src="{{ asset('assets/images/brands/7.png') }}" alt="Brand Name">
        </a>
    </div>
@endsection