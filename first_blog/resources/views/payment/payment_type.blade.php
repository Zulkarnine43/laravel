
@extends('admin.headerFooter');
@section('body')


    <div class="content">
        <div class="single-wl3">

            <div class="container">
                <div class="row">
                    Dear You have to give us product shipping info to complete vlauable order
                    <div class="col-md-11 col-md-offset-1">
                        <form action="{{route('paymenttype')}}" method="POST">
                            @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Catch On Delivery</th>
                                <td><input type="radio" name="payment_type" value="cash" >cash on Delivery</td>
                            </tr>
                            <tr>
                                <th>paypal</th>
                                <td><input type="radio" name="payment_type" value="paypal" >paypal</td>
                            </tr>
                            <tr>
                                <th>bkash</th>
                                <td><input type="radio" name="payment_type" value="Bkash" >Bkash</td>
                            </tr>

                            <tr>
                                <th></th>
                                <td><input type="submit" name="btn_type" value="Confirm Order" ></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

