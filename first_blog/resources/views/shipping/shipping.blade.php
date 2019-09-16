

@extends('admin.headerFooter')
@section('body')






<div class="page-head">
    <div class="container">
        <h3>Check Out</h3>
    </div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>Remove</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tr class="rem1">
                    <td class="invert-closeb">
                        <div class="rem">
                            <div class="close1"> </div>
                        </div>
                        <script>$(document).ready(function(c) {
                                $('.close1').on('click', function(c){
                                    $('.rem1').fadeOut('slow', function(c){
                                        $('.rem1').remove();
                                    });
                                });
                            });
                        </script>
                    </td>
                    <td class="invert-image"><a href="single.html"><img src="{{asset($shipping->product_image)}}" alt=" " class="img-responsive" /></a></td>
                    <td class="invert" name="quantity">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span>1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <td class="invert">{{$shipping->product_name}}</td>
                    <td class="invert">Tk.{{$shipping->product_price}}</td>
                </tr>

                <!--quantity-->
                <script>
                    $('.value-plus').on('click', function(){
                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                        divUpd.text(newVal);
                    });

                    $('.value-minus').on('click', function(){
                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                        if(newVal>=1) divUpd.text(newVal);
                    });
                </script>
                <!--quantity-->
            </table>
        </div>
        <div class="checkout-left">

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="{{route('index')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <li>{{$shipping->product_name}} <i>-</i> <span>Tk.{{$shipping->product_price}}</span></li>
                    <li>Vat <i>-</i> <span>Tk 0.0</span></li>
                    <li>Total<i>-</i> <span>TK.{{$shipping->product_price}}</span></li>
                </ul>
                <h1><a href="{{route('shippingForm',['id'=>$shipping->id])}}" class="text-success col-md-offset-3 ">check</a></h1>
            </div>
            <div class="clearfix"> </div>

        </div>

    </div>
</div>
<!-- //check out -->
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
    @endsection