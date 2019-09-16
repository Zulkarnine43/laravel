@extends('admin.admin')
@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3>Manage Brands Info</h3>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Sl No</th>
                            <th>Brand Name</th>
                            <th>Short Description </th>
                            <th>Long Description </th>
                            <th>Action</th>
                        </tr>
                        @php($i=1);
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td>{{$brand->brand_description}}</td>
                            <td>{{$brand->long_description}}</td>
                            <td>
                                <a href="" class="glyphicon-edit btn-dark">edit</a>
                                <a href="{{route('delete_brand',['id' =>$brand->id])}}" class="glyphicon-trash btn-success">delete</a>
                            </td>
                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


    @endsection()