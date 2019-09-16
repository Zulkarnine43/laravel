@extends('admin.headerFooter');
@section('body')
    <div class="content">
        <div class="single-wl3">

            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">You may have register first</h3>
                       <h1 class="text-center text-center">{{Session::get('message')}}</h1>
                        <form action="{{route('cutomerRegister')}}" method="POST">
                            {{ csrf_field() }}

                        <div class="content">
                            <!--login-->
                            <div class="login">
                                <div class="main-agileits">
                                    <div class="form-w3agile form1">
                                        <h3>Register</h3>
                                        <div class="key">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input class="login-bottom"  type="text" value="" name="first_name" placeholder="first_name"  required="">
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="key">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input class="login-bottom" type="text" value="" name="last_name"  placeholder="last_name" required="">
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="key">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input class="login-bottom"  type="text" value="" name="phone_number" placeholder="phone_number"  required="">
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="key">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input class="login-bottom"  type="text" value="" name="email" placeholder="email"  required="">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="key">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input class="login-bottom"  type="text" value="" name="address" placeholder="address"  required="">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="key">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input class="login-bottom" type="password" value="" name="Password" placeholder="password" required="">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="key">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input class="login-bottom"  type="password" value="" name="ConfirmPassword" placeholder="confirmPassword"  required="">
                                            <div class="clearfix"></div>
                                        </div>
                                        <input class="btn-lg btn-success" type="submit" name="btn" value="Submit">
                                    </div>

                                </div>
                            </div>
                            <!--login-->
                        </div>
                        </form>
                    </div>

                <form action="{{route('login')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="row">
                        <!--login-->
                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-body panel-success">
                                    <h3 class="text text-success text-center">ALready register login here</h3>
                                    <div class="key">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <input class="login-bottom btn-block" type="text" value="" name="email" placeholder="email"  required="">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="key">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input class="login-bottom" type="password" value="" name="Password"  placeholder="password" required="">
                                        <div class="clearfix"></div>
                                    </div>

                                    <input class="btn-lg btn-success float-md-left" type="submit" name="btn" value="Submit">
                                </div>

                            </div>
                        </div>
                        <!--login-->
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection