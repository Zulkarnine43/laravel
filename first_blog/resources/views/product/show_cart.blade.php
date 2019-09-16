@extends('admin.headerFooter);
@section('body')

    <div class="content">
        <div class="single-wl3">

            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">My Shopping Cart</h3>
                        <table class="table table-bordered">
                            <tr class="bg-danger">
                                <th>SL No</th>
                                <th>NAME</th>
                                <th>image </th>
                                <th>PRICE Tk</th>
                                <th>quantity</th>
                                <th>Total Price Tk.</th>
                                <th>Action</th>


                            </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><img src="" alt=" " height="50" width="50"></td>
                                    <td></td>

                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-xs" title="Delete">
                                            <span class="glyphicon glyphicon-trash"> </span>
                                        </a>
                                    </td>
                                </tr>

                        </table>
                        <hr/>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection