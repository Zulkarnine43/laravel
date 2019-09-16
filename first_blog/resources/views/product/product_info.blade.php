@extends('admin.headerFooter')
@section('body')
    <!-- //banner-top -->
    <!-- banner -->
    <div class="banner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li><img class="img-responsive" src="{{asset('/')}}/front/images/ba1.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{asset('/')}}/front/images/ba2.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{asset('/')}}/front/images/ba3.jpg" alt="Dummy Image" /></li>
                </ul>

                <!-- Slide Description Image Area (316 x 328) -->
                <div class="script-wrap">
                    <ul class="script-group">
                        <li><div class="inner-script"><img class="img-responsive" src="{{asset('/')}}/front/images/baa1.jpg" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{asset('/')}}/front/images/baa2.jpg" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{asset('/')}}/front/images/baa3.jpg" alt="Dummy Image" /></div></li>
                    </ul>
                    <div class="slide-controller">
                        <a href="#" class="btn-prev"><img src="{{asset('/')}}/front/images/btn_prev.png" alt="Prev Slide" /></a>
                        <a href="#" class="btn-play"><img src="{{asset('/')}}/front/images/btn_play.png" alt="Start Slide" /></a>
                        <a href="#" class="btn-pause"><img src="{{asset('/')}}/front/images/btn_pause.png" alt="Pause Slide" /></a>
                        <a href="#" class="btn-next"><img src="{{asset('/')}}/front/images/btn_next.png" alt="Next Slide" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script type="text/javascript" src="{{asset('/')}}/front/js/pignose.layerslider.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() {
                $('#visual').pignoseLayerSlider({
                    play    : '.btn-play',
                    pause   : '.btn-pause',
                    next    : '.btn-next',
                    prev    : '.btn-prev'
                });
            });
            //]]>
        </script>

    </div>


        <div class="col-md-3 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                    <img src="{{asset($products->product_image)}}" alt="" class="pro-image-front">
                    <img src="{{asset($products->product_image)}}" alt="" class="pro-image-back">
                    <img src="" alt="" class="pro-image-back">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>

                </div>
                <div class="item-info-product ">
                    <h4><a href="single.html">{{$products->product_name}}</a></h4>
                    <div class="info-product-price">
                        <span class="item_price">{{$products->product_price}}</span>
                        <del>$69.71</del>
                    </div>
                    <a href="{{route('product_detail',['id'=>$products->id])}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                </div>
            </div>
        </div>














    <!-- //content-bottom -->
    <!-- product-nav -->

    <div class="product-easy">
        <div class="container">

            <script src="{{asset('/')}}/front/js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });

            </script>
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a1.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a8.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a8.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">1+1 Offer</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Next Blue Blazer</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$99.99</span>
                                            <del>$109.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a3.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$119.99</span>
                                            <del>$120.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a4.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a4.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Maroon Puma Tshirt</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$79.99</span>
                                            <del>$120.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a5.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a5.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Combo Pack</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Multicoloured TShirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a6.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a6.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a7.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a7.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/a2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/a2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Wedding Blazers</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/g1.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/g1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/g2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/g2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/g3.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/g3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/mw2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/mw2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">T shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/w1.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/w1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Wedges</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/w2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/w2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Sandals</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/mw1.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/mw1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Casual Shoes</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/mw3.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/mw3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Sport Shoes</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/ep2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/ep2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Watches</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/ep3.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/ep3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Watches</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/g1.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/g1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/g2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/g2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/g3.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/g3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/mw2.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/mw2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">T shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/w4.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/w4.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('/')}}/front/images/w3.png" alt="" class="pro-image-front">
                                        <img src="{{asset('/')}}/front/images/w3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Hand Bags</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //product-nav -->

    <div class="coupons">
        <div class="container">
            <div class="coupons-grids text-center">
                <div class="col-md-3 coupons-gd">
                    <h3>Buy your product in a simple way</h3>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <h4>LOGIN TO YOUR ACCOUNT</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <h4>SELECT YOUR ITEM</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                    <h4>MAKE PAYMENT</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- footer -->
@endsection