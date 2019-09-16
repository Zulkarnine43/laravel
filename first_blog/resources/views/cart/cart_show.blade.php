@extends('admin.headerFooter');
@section('body')

    <div class="content">
        <div class="single-wl3">

            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">My Shopping Cart</h3>
                        <table class="table table-bordered">
                            <tr class="bg-danger">
                                <th>NAME</th>
                                <th>PRICE Tk</th>
                                <th>quantity</th>
                                <th>Total Price Tk.</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>{{$card->product_name}}</td>
                                <td>{{$card->product_price}}</td>

                                <td>{{$card->product_quantity}}</td>

                                <td>{{$sum = $card->product_price*$card->product_quantity}}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"> </span>
                                    </a>
                                </td>
                            </tr>

                        </table>
                        <a href="{{route('checkOut')}}" class="text-success text-center float-lg-right">Login for Checkout</a>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection