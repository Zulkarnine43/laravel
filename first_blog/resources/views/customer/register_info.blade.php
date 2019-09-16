@extends('admin.headerFooter')
@section('body')

    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-success text-success">{{Session::get('message')}}</h3>
                <h3 class="col-md-offset-3 col-md-4 text-center text-success"> Register</h3>

                <form action="{{route('registerSave')}}" method="POST" >
                    @csrf
                    <div class="input-lg">
                        <input class="col-md-offset-3 col-md-4 text-center"   type="text" value="" name="username" placeholder="Username">

                    </div>
                    <div class="input-lg">
                        <input class="col-md-offset-3 col-md-4 text-center"  type="text" value="" name="email"  placeholder="Email">

                    </div>
                    <div class="input-lg">
                        <input class="col-md-offset-3 col-md-4 text-center"  type="password" value="" name="password"  placeholder="Password">

                    </div>
                    <div class="input-lg">
                        <input class="col-md-offset-3 col-md-4 text-center"  type="password" value="" name="confirm_password"  placeholder="ConfirmPassword" >

                    </div>
                    <input class="col-md-offset-3 col-md-4 text-center text-black-50 text-success" type="submit" name="btn" value="Submit">
                </form>
            </div>

        </div>
    </div>
    </div>


    @endsection