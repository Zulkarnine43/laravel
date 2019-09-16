@extends('admin.admin')
@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3>Manage Brands Info</h3>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <table class="table table-bordered small text-center">
                        <tr>
                            <th>Sl No</th>
                            <th>Category Name</th>
                            <th>Brand Name </th>
                            <th>Product Name </th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product Description</th>
                            <th>long_description</th>
                            <th>product_image</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1);
                        @foreach($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td>{{$product->product_description}}</td>
                                <td>{{$product->long_description}}</td>
                                <td>{{$product->product_image}}</td>
                                <td>
                                    <a href="{{route('productEdit',['id' =>$product->id])}}" class="glyphicon-edit btn-dark">edit</a>
                                    <a href="{{route('productDelete',['id' =>$product->id])}}" class="glyphicon-trash btn-success">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection()