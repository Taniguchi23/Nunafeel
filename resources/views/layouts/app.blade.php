<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Page title -->
    <title>Nuna Feel</title>
    <!--[if lt IE 9]>
    <script src="/asset/js/respond.js"></script>
    <![endif]-->
    <!-- Bootstrap Core CSS -->
    <link href="/asset/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Icon fonts -->
    <link href="/asset/nuna/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/asset/nuna/flaticon.css" rel="stylesheet" type="text/css">
    <link href="/asset/nuna/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <!-- Style CSS -->
    <link href="/asset/css/style.css" rel="stylesheet">
    <!-- Color Style CSS -->
    <link href="/asset/styles/chocopink.css" rel="stylesheet">
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="/asset/css/plugins.css">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="shortcut icon" href="/asset/favicon.ico" type="image/x-icon">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top"  id="navbar-custom">
    <div class="container">
        <!-- Logo and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Logo -->
            <div class="navbar-brand page-scroll">
                <a href="#page-top"><img src="/asset/img/logo.png"  alt=""></a>
            </div>
        </div>
        <!-- /.navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand">
            <ul class="nav navbar-nav page-scroll navbar-right">
                <li><a href="#page-top">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#blog-preview">Blog Preview</a></li>
                        <li><a href="blog.html">Blog Home</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#prices">Prices</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /container -->
</nav>
<!-- /nav -->

<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object-load" id="object_one"></div>
            <div class="object-load" id="object_two"></div>
            <div class="object-load" id="object_three"></div>
        </div>
    </div>
</div>
<!-- /preloader -->
@yield('content')
<!-- Footer -->
<footer class="color-section">
    <div class="container">
        <!-- social media and logo -->
        <div class="row">
            <a href="#page-top"><img src="/asset/img/logo.png"  alt="" class="img-responsive center-block"></a>
            <!-- social-icons -->
            <div class="social-media">
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- /row -->
        <div class="row margin-footer">
            <!-- about -->
            <div class="col-lg-4 col-md-4 col-md-offset-2 col-lg-offset-2 text-right">
                <h6>About us</h6>
                <p>Donut tiramisu caramels pastry Candy canes croissant muffin marshmallow cake.</p>
            </div>
            <!-- /col-lg-4 -->
            <!-- Opening Hours -->
            <div class="col-lg-4 col-md-4 text-left timetable res-margin">
                <!-- Sign-->
                <h6>Opening Hours:</h6>
                <!-- Table-->
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="text-left">Monday to Friday</td>
                        <td class="text-right">7 a.m. to 7 p.m.</td>
                    </tr>
                    <tr>
                        <td class="text-left">Weekends / Holidays</td>
                        <td class="text-right"><span class="label label-danger">Closed</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /col-lg-4 -->
            <div class="col-md-12 text-center">
                <p>Copyright ?? 2016 - 2018 / Designed by  <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p>
                <!-- /container -->
                <!-- Go To Top Link -->
                <div class="page-scroll hidden-sm hidden-xs">
                    <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /footer -->
@yield('modal')
<!-- Core JavaScript Files -->
<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<!-- Main Js -->
<script src="/asset/js/main.js"></script>
<!-- Open Street map -->
<script src="/asset/js/map.js"></script>
<!--Mail Chimp validator -->
<script src="/asset/js/mc-validate.js"></script>
<!--Other Plugins -->
<script src="/asset/js/plugins.js"></script>
<!-- Prefix free CSS -->
<script src="/asset/js/prefixfree.js"></script>
<!-- Slider -->
<script src="/asset/js/slider.js"></script>
@yield('script')
</body>
</html>
