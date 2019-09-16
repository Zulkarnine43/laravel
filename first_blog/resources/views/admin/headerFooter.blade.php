
<!DOCTYPE html>
<html>
<head>
    <title> Home :: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('/')}}/front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{asset('/')}}/front/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="{{asset('/')}}/front/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{asset('/')}}/front/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{asset('/')}}/front/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{asset('/')}}/front/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="{{asset('/')}}/front/js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
            <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">smartshop@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="{{route('index')}}"><img src="{{asset('/')}}/front/images/logo3.jpg"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form>
                <div class="search">
                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                </div>
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All categories</option>
                        @foreach($categorys as $category)
                        <option value="null">{{$category->category_name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 header-right footer-bottom">
            <ul>
                <!-- <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
                 <div class="top-right float-left">
                         <li><a href="login.html">Login</a></li>
                         <li><a href="registered.html"> Create_Account </a></li>

                 </div>

                 </li>-->

                <li><a class="use1" href="{{route('logins')}}"></a>Login</li>l
                <li><a class="use1" href="{{route('registered')}}"></a>register</li>
                <li><a class="fb" href="#"></a></li>
                <li><a class="twi" href="#"></a></li>
                <li><a class="insta" href="#"></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                   <div class="colapse navbar-collapse" id="bs-megadropdown-tabs">
                       <ul class="nav navbar-nav">
                           <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a></li>
                    @foreach($categorys as $category)
                    <!-- Collect the nav links, forms, and other content for toggling -->
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('allpage',['id'=>$category->id])}}"
                                class="float-left">{{$category->category_name }}<span class="sr-only">(current)</span></a></li>
                        @endforeach
                       </ul>
                   </div>
                </div>
            </nav>
        </div>
    </div>
</div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <a href="">
                    <h3> <div class="total">
                            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                            <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>



@yield('body')




<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-left">
            <h2><a href="{{route('index')}}"><img src="{{asset('/')}}/front/images/logo3.jpg" alt=" " /></a></h2>
            <p>Welcome to our smartshop online market.</p>
        </div>
        <div class="col-md-9 footer-right">

            <div class="clearfix"></div>
            <div class="sign-grds">

                <div class="col-md-4 sign-gd">
                    <h4>Information</h4>
                    <ul>
                        @foreach($categorys as $category)
                        <li><a href="{{route('allpage',['id'=>$category->id])}}">{{$category->category_name}}</a></li>
                           @endforeach
                    </ul>
                </div>


                <div class="col-md-4 sign-gd-two">
                    <h4>Store Information</h4>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block,Kawran Bazar in<span>Dhaka City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="smartshop@example.com">Email::smartshop@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +8801876567894</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">Zulkar Nine(Shaon)</a></p>
    </div>
</div>

</body>
</html>
