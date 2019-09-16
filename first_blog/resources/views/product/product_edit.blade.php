@extends('admin.admin')
@section('body')
    <div class="row">
        <div  class="col-md-10 ">
            <div class="panel panel-default">
                <h3 class="text-center text-success"></h3>
                <h3></h3>

                <form method="{{route('UpdateProduct')}}" action="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label class="control-label col-md-3">product Name</label>
                        <div class="col-md-9">
                            <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}"/>
                            <input type="hidden" name="id" class="form-control" value="{{$product->id}}">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">product Price</label>
                        <div class="col-md-9">
                            <input type="number" name="product_price" class="form-control" value="{{$product->product_price}}"/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">product Quantity</label>
                        <div class="col-md-9">
                            <input type="number" name="product_quantity" class="form-control" value="{{$product->product_quantity}}" />

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Product Description</label>
                        <div class="col-md-9">
                            <input type="text" name="product_description" class="form-control" value="{{$product->product_description}}"/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control s" name="long_description">"{{$product->long_description}}"</textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">product image</label>
                        <div class="col-md-9">
                            <input type="file" name="product_image" accept="image/*"value="" src="">
                            <span>{{asset($product->product_image)}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <input  type="submit"  name="btn" value="Update product Info">

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
