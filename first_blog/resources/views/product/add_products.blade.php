@extends('admin.admin')
@section('body')
<div class="row">
    <div  class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
                <h3 class="text-center text-success"></h3>
            <h3>{{Session::get('message')}}</h3>

                             <form method="POST" action="{{route('new_product')}}" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                        <select class="form-control" name="category_name">
                            <option>---Select a Name</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>

                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Brand Name</label>
                    <div class="col-md-9">
                        <select class="form-control" name="brand_name">
                            <option>---Select a Name</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>

                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">product Name</label>
                    <div class="col-md-9">
                        <input type="text" name="product_name" class="form-control"/>

                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3">product Price</label>
                    <div class="col-md-9">
                        <input type="number" name="product_price" class="form-control"/>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">product Quantity</label>
                    <div class="col-md-9">
                        <input type="number" name="product_quantity" class="form-control"/>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Product Description</label>
                    <div class="col-md-9">
                        <input type="text" name="product_description" class="form-control"/>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">long Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="long_description"></textarea>

                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3">product image</label>
                    <div class="col-md-9">
                        <input type="file" name="product_image" accept="image/*">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">
                        <input type="submit" name="btn" value="Save product Info">

                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
    @endsection
