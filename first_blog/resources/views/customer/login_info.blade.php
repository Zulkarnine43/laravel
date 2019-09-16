@extends('admin.headerFooter')
@section('body')
    <div class="content">
        <!--login-->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile">
                    <h3  class="col-md-offset-3 col-md-4 text-center text-success">Login If you register already</h3>
                    <h3>{{Session::get('message')}}</h3>

                    <form action="{{route('loginCheck')}}" method="POST">
                        @csrf
                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input class="col-md-offset-3 col-md-4 text-center"  type="text" value="" name="email" placeholder="Email">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  class="col-md-offset-3 col-md-4 text-center" type="password" value="" name="password" placeholder="Password">
                            <div class="clearfix"></div>
                        </div>
                        <input class="col-md-offset-3 col-md-4 text-center text-success" type="submit" name="btn" value="Login">
                    </form>
                </div>

                <div class="float-right">
                    <a href="#" class="forg-left">Forgot Password</a>
                    <a href="registered.html" class="forg-right">Register</a>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        <!--login-->
    </div>


    @endsection