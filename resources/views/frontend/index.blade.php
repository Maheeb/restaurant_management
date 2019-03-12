
<!DOCTYPE html>
<html>
<head>
    <title>Cookery A Food Category Flat Bootstrap Responsive Website Template</title>
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">
    <!-- animation-effect -->
    <link href="{{asset('frontend/css/animate.min.css')}}" rel="stylesheet">
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->

</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h1><a href="{{route('index')}}"><span>C</span><img src="{{asset('frontend/images/oo.png')}}" alt=""><img src="{{asset('frontend/images/oo.png')}}" alt="">kery</a></h1>
        </div>
        <div class="nav-icon">
            <a href="#" class="navicon"></a>
            <div class="toggle">
                <ul class="toggle-menu">
                    <li><a class="active" href="{{route('index')}}">Home</a></li>
                    <li><a  href="{{route('menu')}}">Menu</a></li>
                    <li><a  href="{{route('blog')}}">Blog</a></li>
                    <li><a  href="{{route('events')}}">Events</a></li>
                    <li><a  href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <script>
                $('.navicon').on('click', function (e) {
                    e.preventDefault();
                    $(this).toggleClass('navicon--active');
                    $('.toggle').toggleClass('toggle--active');
                });
            </script>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- start search-->
    <div class="banner">
        <p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Sed ut perspiciatis unde omnis iste natus.</p>
        <label></label>
        <h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Hello And Welcome To Food</h4>
        <a class="scroll down" href="#content-down"><img src="{{asset('frontend/images/down.png')}}" alt=""></a>
    </div>
</div>
<!--content-->
<div class="content" id="content-down">
    <div class="content-top-top">
        <div class="container">
            <div class="content-top">
                <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>About</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>There are many variations</span>
                </div>
                <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="content-mid">

                <div class="col-md-4 food-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class=" hover-fold">
                        <h4>FOOD</h4>
                        <div class="top">
                            <div class="front face"></div>
                            <div class="back face">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                            </div>
                        </div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div class="col-md-4 food-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class=" hover-fold">
                        <h4>FOOD</h4>
                        <div class="top">
                            <div class="front face front1"></div>
                            <div class="back face">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                            </div>
                        </div>
                        <div class="bottom bottom1"></div>
                    </div>
                </div>
                <div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class=" hover-fold">
                        <h4>FOOD</h4>
                        <div class="top">
                            <div class="front face front2"></div>
                            <div class="back face">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                            </div>
                        </div>
                        <div class="bottom bottom2"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--services-->

    <!--//services-->
    <!--news-->
    <div class="content-top-top">
        <div class="container">
            <div class="content-top">
                <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>News</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>There are many variations</span>
                </div>
                <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="news-bottom">
                <div class="news-bot">
                    @foreach ($recs as $rec)
                        <div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <a href="{{route('single',$rec->id)}}">
                                <div class="content-item">
                                    <div class="overlay"></div>
                                    <div class=" news-bottom2">
                                        <ul class="grid-news">
                                            <li><span><i class="glyphicon glyphicon-calendar"> </i>{{$rec->created_at->diffForHumans()}}</span><b>/</b></li>
                                            <li><span><i class="glyphicon glyphicon-comment"> </i>{{$rec->comment()->count()}} Comment</span></li>

                                        </ul>
                                        <p>{{$rec->title}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                    <div class="clearfix"> </div>
                </div>


            </div>
        </div>
    </div>
    <!--//news-->
</div>
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-head">
            <div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <ul class=" in">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a  href="{{route('menu')}}">Menu</a></li>
                    <li><a  href="{{route('blog')}}">Blog</a></li>
                    <li><a  href="{{route('events')}}">Events</a></li>
                    <li><a  href="{{route('contact')}}">Contact</a></li>
                </ul>
                <span>There are many variations of passages</span>
            </div>
            <div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h2>Follow Us</h2>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                <ul class="social-ic">
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic"></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>

        </div>
        <p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!--//footer-->
</body>
</html>