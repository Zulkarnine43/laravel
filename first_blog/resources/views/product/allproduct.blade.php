@extends('admin.headerFooter')
@section('body')

@foreach($products as $product)
    <div class="col-md-3 product-men">
        <div class="men-pro-item simpleCart_shelfItem">
            <div class="men-thumb-item">
                <img src="{{asset($product->product_image)}}" alt="" class="pro-image-front">
                <img src="{{asset($product->product_image)}}" alt="" class="pro-image-back">
                <img src="" alt="" class="pro-image-back">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                    </div>
                </div>
                <span class="product-new-top">New</span>

            </div>
            <div class="item-info-product ">
                <h4><a href="single.html">{{$product->product_name}}</a></h4>
                <div class="info-product-price">
                    <span class="item_price">{{$product->product_price}}</span>
                    <!-- <del>$69.71</del>-->
                </div>
                <a href="{{route('product_detail',['id'=>$product->id])}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>
            </div>
        </div>
    </div>
@endforeach
    @endsection