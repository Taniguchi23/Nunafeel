@extends('layouts.app')
@section('content')

    <!-- Slider -->
    <div class="slider-container">
        <!-- Controls -->
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <!--Slider -->
        <div class="slider">
            <!-- Slide 0 -->
            <div class="slide slide-0 active">
                <!-- image -->
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <!-- SVG Overlay-->
                    <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
                     <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                        c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                        c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                        c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                        s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                        c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                        c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                        c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                        S289.886,125.549,280.977,118.478z"/>
                  </svg>
                    <!--Title -->
                    <div class="slide__text">
                        <h1><span>Welcome to</span><br>Piece of cake</h1>
                        <div class="hidden-xs hidden-sm hidden-md">
                            <p class="subtitle">A HTML Template with the perfect design for your website, It Includes beautiful ilustrations and useful features.</p>
                            <div class="page-scroll">
                                <!-- Button -->
                                <a class="btn" href="#contact">
                                    <div class="btn-line"></div>
                                    <div class="btn-line btn-line-shift"></div>
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide__text -->
                </div>
                <!-- /Slide__content -->
            </div>
            <!-- /Slide -->
            <!-- Slide 1 -->
            <div class="slide slide-1">
                <!-- image -->
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <!-- SVG Overlay-->
                    <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
                     <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                        c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                        c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                        c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                        s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                        c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                        c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                        c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                        S289.886,125.549,280.977,118.478z"/>
                  </svg>
                    <!--Title -->
                    <div class="slide__text">
                        <h1><span>We Love</span><br>Cupcakes</h1>
                        <div class="hidden-xs hidden-sm hidden-md">
                            <p class="subtitle">Non metus ali quam eros eget liquam erat volutpat phasellus ac sodales felis lorem ipsuet lorens.</p>
                            <div class="page-scroll">
                                <!-- Button -->
                                <a class="btn" href="#contact">
                                    <div class="btn-line"></div>
                                    <div class="btn-line btn-line-shift"></div>
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide__text -->
                </div>
                <!-- /Slide__content -->
            </div>
            <!-- /Slide -->
            <!-- Slide 2 -->
            <div class="slide slide-2">
                <!-- image -->
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <!-- SVG Overlay-->
                    <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
                     <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                        c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                        c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                        c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                        s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                        c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                        c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                        c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                        S289.886,125.549,280.977,118.478z"/>
                  </svg>
                    <!--Title -->
                    <div class="slide__text">
                        <h1><span>We make cakes for</span><br>Your event</h1>
                        <div class="hidden-xs hidden-sm hidden-md">
                            <p class="subtitle">Non metus ali quam eros eget liquam erat volutpat phasellus ac sodales felis lorem ipsuet lorens.</p>
                            <div class="page-scroll">
                                <!-- Button -->
                                <a class="btn" href="#contact">
                                    <div class="btn-line"></div>
                                    <div class="btn-line btn-line-shift"></div>
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide__text -->
                </div>
                <!-- /Slide__content -->
            </div>
            <!-- /Slide -->
            <!-- Slide 3 -->
            <div class="slide slide-3">
                <!-- image -->
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <!-- SVG Overlay-->
                    <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
                     <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                        c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                        c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                        c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                        s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                        c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                        c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                        c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                        S289.886,125.549,280.977,118.478z"/>
                  </svg>
                    <!--Title -->
                    <div class="slide__text">
                        <h1><span>Try our amazing</span><br>Macarons</h1>
                        <div class="hidden-xs hidden-sm hidden-md">
                            <p class="subtitle">Non metus ali quam eros eget liquam erat volutpat phasellus ac sodales felis lorem ipsuet lorens.</p>
                            <div class="page-scroll">
                                <!-- Button -->
                                <a class="btn" href="#contact">
                                    <div class="btn-line"></div>
                                    <div class="btn-line btn-line-shift"></div>
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide__text -->
                </div>
                <!-- /Slide__content -->
            </div>
            <!-- /Slide -->
        </div>
        <!-- /Slider -->
    </div>
    <!-- /slider -->

    <!-- Section offer -->
    <section id="offer" class="color-section">
        <div class="container" data-0="background-position:82% 20px;" data-end="background-position:82% 1200px">
            <div class="col-md-6 text-center">
                <h4>Offer of the Week</h4>
                <p>Viverra elit ellus ac sodales felis tiam non metus ali quam eros eget liquam erat volutpat phasellus ac sodales felis.</p>
                <!-- Button -->
                <div class="page-scroll">
                    <a class="btn" href="#menu">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Check our menu
                    </a>
                </div>
            </div>
            <!-- /col-md-6 -->
        </div>
        <!--  container -->
    </section>
    <!-- / section -->

    <!-- Section Services -->
    <section id="services">
        <div class="container">
            <div class="col-lg-12">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2>Our Services</h2>
                    <div class="hr"></div>
                </div>
            </div>
            <!-- /col-lg-12 -->
            <div class="row services-row">
                <div class="col-lg-4 col-md-4 col-md-offset-1">
                    <img class="img-responsive" src="/asset/img/servicesmain.png" alt="">
                </div>
                <!-- /col-lg-4-->
                <div class="col-lg-7 col-md-7">
                    <h3>You can't buy happiness <br> but you can buy CAKE</h3>
                    <h4><small>And that's kind of the same thing!</small></h4>
                    <p>Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc
                        vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus auguen unc vel
                        lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit uasi.
                    </p>
                    <!-- Button -->
                    <div class="page-scroll">
                        <a class="btn" href="#contact">
                            <div class="btn-line"></div>
                            <div class="btn-line btn-line-shift"></div>
                            Contact us Today
                        </a>
                    </div>
                    <!-- /page-scroll-->
                </div>
                <!-- /col-lg-7 -->
            </div>
            <!-- /row -->
            <div class="row margin1">
                <!-- carousel -->
                <div class="owl-carousel" id="owl-services">
                    <!-- Box 1 -->
                    <div class="col-xs-12">
                        <div class="box_icon">
                            <div class="icon">
                                <!-- image -->
                                <div class="image">
                                    <img class="img-responsive img-circle" src="/asset/img/service1.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h5>Weddings</h5>
                                    <p>Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.</p>
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#contact">
                                            <div class="btn-line"></div>
                                            <div class="btn-line btn-line-shift"></div>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_icon -->
                    </div>
                    <!-- /col-xs-12 ends -->
                    <!-- Box 2 -->
                    <div class="col-xs-12">
                        <div class="box_icon">
                            <div class="icon">
                                <!-- image -->
                                <div class="image">
                                    <img class="img-responsive img-circle" src="/asset/img/service2.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h5>Corporate Events</h5>
                                    <p>Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.</p>
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#contact">
                                            <div class="btn-line"></div>
                                            <div class="btn-line btn-line-shift"></div>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_icon -->
                    </div>
                    <!-- /col-xs-12 ends -->
                    <!-- Box 3 -->
                    <div class="col-xs-12">
                        <div class="box_icon">
                            <div class="icon">
                                <!-- image -->
                                <div class="image">
                                    <img class="img-responsive img-circle" src="/asset/img/service3.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h5>Birthdays</h5>
                                    <p>Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.</p>
                                    <!-- Button -->
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#contact">
                                            <div class="btn-line"></div>
                                            <div class="btn-line btn-line-shift"></div>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_icon -->
                    </div>
                    <!-- /col-xs-12 ends -->
                    <!-- Box 4 -->
                    <div class="col-xs-12">
                        <div class="box_icon">
                            <div class="icon">
                                <!-- image -->
                                <div class="image">
                                    <img class="img-responsive img-circle" src="/asset/img/service4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h5>Gourmet</h5>
                                    <p>Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.</p>
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#contact">
                                            <div class="btn-line"></div>
                                            <div class="btn-line btn-line-shift"></div>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_icon -->
                    </div>
                    <!-- /col-xs-12 ends -->
                    <!-- Box 5 -->
                    <div class="col-xs-12">
                        <div class="box_icon">
                            <div class="icon">
                                <!-- image -->
                                <div class="image">
                                    <img class="img-responsive img-circle" src="/asset/img/service5.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h5>Healthy Options</h5>
                                    <p>Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.</p>
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#contact">
                                            <div class="btn-line"></div>
                                            <div class="btn-line btn-line-shift"></div>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_icon -->
                    </div>
                    <!-- /col-xs-12 ends -->
                    <!-- Box 6 -->
                    <div class="col-xs-12">
                        <div class="box_icon">
                            <div class="icon">
                                <!-- image -->
                                <div class="image">
                                    <img class="img-responsive img-circle" src="/asset/img/service6.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h5>Pastries</h5>
                                    <p>Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.</p>
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#contact">
                                            <div class="btn-line"></div>
                                            <div class="btn-line btn-line-shift"></div>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_icon -->
                    </div>
                    <!-- /col-xs-12 ends -->
                </div>
                <!-- /carousel -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </section>
    <!-- /section-->

    <!-- Section About -->
    <section id="about" class="color-section2">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>About Us</h2>
                <div class="hr"></div>
            </div>
            <!-- Text -->
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <h3>Baking Delicious cakes since 1990</h3>
                    <p>Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc
                        vel mauris ultricies, vest ibulum orci eget,Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                        sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam
                        andigen Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non metus.
                    </p>
                    <p>Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                    </p>
                </div>
                <!-- /col-lg-8 -->
                <div class="col-lg-4 col-sm-12">
                    <!-- Accordion -->
                    <div class="panel-group" id="accordion">
                        <!-- Question 1 -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Social Responsability</a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Mission Statement</a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Question 3 -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Value Added Services</a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.accordion -->
                </div>
                <!-- /col-lg-4 -->
            </div>
            <!-- /row -->
            <div id="owl-icons" class="owl-carousel features-icon">
                <div class="col-sm-12">
                    <!-- item1 -->
                    <div class="media text-center">
                        <i class="flaticon-electric-mixer"></i>
                        <div class="media-body">
                            <h5>Made With Love</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- item2 -->
                    <div class="media text-center">
                        <i class="flaticon-gingerbread"></i>
                        <div class="media-body">
                            <h5>Seasonal Pastries</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- item3 -->
                    <div class="media text-center">
                        <i class="flaticon-food-5"></i>
                        <div class="media-body">
                            <h5>Event Catering</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- item4 -->
                    <div class="media text-center">
                        <i class="flaticon-wheat"></i>
                        <div class="media-body">
                            <h5>Gluten Free Options</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- item5 -->
                    <div class="media text-center">
                        <i class="flaticon-food-12"></i>
                        <div class="media-body">
                            <h5>100% Homemade</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-icons-->
            <div class="row">
                <div class="col-lg-4 box">
                    <h6>Our Features</h6>
                    <ul class="no-margin">
                        <li>Aliquam erat volut pat. </li>
                        <li>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                            sodales felis
                        </li>
                        <li>Aliquam erat volut pat phas ellu, lorem ipsuet.</li>
                        <li>Lorem ipsum Aliquam erat volut pat phas ellu lorem ipsuet.</li>
                        <li>Ipsum Aliquam erat volut pat phas ellu lorem ipsuet Ibu lum orci eget, Aliquam erat volut pat phas ellus ac viverra elit.</li>
                        <li>Aliquam erat volut pat phas ellu, lorem ipsuet.</li>
                    </ul>
                </div>
                <!-- /col-lg-7 -->
                <div class="col-lg-8">
                    <div id="owl-about" class="owl-carousel">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/about1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive  img-rounded" src="img/about2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive  img-rounded" src="img/about3.jpg" alt="">
                        </div>
                    </div>
                    <!-- /owl-about -->
                </div>
                <!-- /col-lg-9 -->
            </div>
            <!-- /row -->
        </div>
        <!--/container-->
    </section>
    <!--/section -->

    <!-- Section testimonials -->
    <section id="testimonials" class="color-section">
        <div class="container">
            <!-- Parallax object -->
            <div class="parallax-object hidden-sm hidden-xs hidden-md"
                 data-bottom-top="left:0%;margin-top:-30px;transform:translatey(0%);"
                 data-top="transform:translatey(-120%);">
                <!-- Image -->
                <img src="/asset/img/cake3.png" alt="">
            </div>
            <div class="parallax-object hidden-sm hidden-xs hidden-md"
                 data-bottom-top="left:60px;margin-top:120px;transform:translatey(0%);"
                 data-top="transform:translatey(-120%);">
                <!-- Image -->
                <img src="/asset/img/cake1.png" alt="">
            </div>
            <div class="parallax-object hidden-sm hidden-xs hidden-md"
                 data-bottom-top="left:220px;margin-top:-70px;transform:translatey(40%);"
                 data-top="transform:translatey(-120%);">
                <!-- Image -->
                <img src="/asset/img/cherry.png" alt="">
            </div>
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>What our clients say</h2>
                <div class="hr"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Carousel -->
                    <div id="owl-testimonial" class="owl-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <div class="testimonial-pic">
                                <img src="/asset/img/testimonial1.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan diam. Suspendisse molestie nibh at tempor mollis. Integer aliquet facilisis felis, ac porta est cursus et. Vestibulum sollicitudin nisl ut urna egestas faucibus.
                                </p>
                                <h3 class="testimonial-title">Lana King</h3>
                                <small class="post">/ TV Star</small>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="testimonial">
                            <div class="testimonial-pic">
                                <img src="/asset/img/testimonial2.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan diam. Suspendisse molestie nibh at tempor mollis. Integer aliquet facilisis felis, ac porta est cursus et. Vestibulum sollicitudin nisl ut urna egestas faucibus.
                                </p>
                                <h3 class="testimonial-title">Jonas Smith</h3>
                                <small class="post">/ Chef</small>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="testimonial">
                            <div class="testimonial-pic">
                                <img src="/asset/img/testimonial3.jpg" alt="" class="img-circle">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan diam. Suspendisse molestie nibh at tempor mollis. Integer aliquet facilisis felis, ac porta est cursus et. Vestibulum sollicitudin nisl ut urna egestas faucibus.
                                </p>
                                <h3 class="testimonial-title">Maria Silva</h3>
                                <small class="post">/ Cake Specialist</small>
                            </div>
                        </div>
                    </div>
                    <!--/owl-testimonials -->
                </div>
                <!-- /col-md-12-->
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </section>
    <!--/section-->

    <!-- Section Blogprev -->
    <section id="blog-preview">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Latest Blog Posts</h2>
                <div class="hr"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-blog" class="owl-carousel">
                        <!-- Blog Post 1 -->
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="img-zoom">
                                <a href="blog-post.html">
                                    <img class="img-responsive" src="/asset/img/blog1.jpg" alt="">
                                </a>
                            </div>
                            <!-- post info -->
                            <div class="post-review">
                                <!-- Comments -->
                                <ul class="post-comment">
                                    <li>22<small>oct</small></li>
                                    <li><i class="fa fa-comments-o"></i><a href="blog-post.html"><small>12</small></a></li>
                                </ul>
                                <!-- Title -->
                                <h4 class="post-title">
                                    <a href="blog-post.html">Cakepops Recipe</a>
                                </h4>
                                <!-- Description -->
                                <p class="post-description">
                                    Lorem ipsum dolor sit amet lipsum, consectetur adipiscing elit. Morbi orem rhoncus orci elit...
                                </p>
                                <!-- Button -->
                                <div class="text-center page-scroll">
                                    <a class="btn" href="blog-post.html">
                                        <div class="btn-line"></div>
                                        <div class="btn-line btn-line-shift"></div>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- /Post-review -->
                        </div>
                        <!-- /blog-post-->
                        <!-- Blog Post 2 -->
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="img-zoom">
                                <a href="blog-post.html">
                                    <img class="img-responsive" src="/asset/img/blog2.jpg" alt="">
                                </a>
                            </div>
                            <!-- post info -->
                            <div class="post-review">
                                <!-- Comments -->
                                <ul class="post-comment">
                                    <li>02<small>Oct</small></li>
                                    <li><i class="fa fa-comments-o"></i><a href="blog-post.html"><small>14</small></a></li>
                                </ul>
                                <!-- Title -->
                                <h4 class="post-title">
                                    <a href="blog-post.html">Homemade Pies</a>
                                </h4>
                                <!-- Description -->
                                <p class="post-description">
                                    Lorem ipsum dolor sit amet lipsum, consectetur adipiscing elit. Morbi orem rhoncus orci elit...
                                </p>
                                <!-- Button -->
                                <div class="text-center page-scroll">
                                    <a class="btn" href="blog-post.html">
                                        <div class="btn-line"></div>
                                        <div class="btn-line btn-line-shift"></div>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- /Post-review -->
                        </div>
                        <!-- /blog-post-->
                        <!-- Blog Post 3 -->
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="img-zoom">
                                <a href="blog-post.html">
                                    <img class="img-responsive" src="/asset/img/blog3.jpg" alt="">
                                </a>
                            </div>
                            <!-- post info -->
                            <div class="post-review">
                                <!-- Comments -->
                                <ul class="post-comment">
                                    <li>23<small>sep</small></li>
                                    <li><i class="fa fa-comments-o"></i><a href="blog-post.html"><small>23</small></a></li>
                                </ul>
                                <!-- Title -->
                                <h4 class="post-title">
                                    <a href="blog-post.html">Birthday Cakes</a>
                                </h4>
                                <!-- Description -->
                                <p class="post-description">
                                    Lorem ipsum dolor sit amet lipsum, consectetur adipiscing elit. Morbi orem rhoncus orci elit...
                                </p>
                                <!-- Button -->
                                <div class="text-center page-scroll">
                                    <a class="btn" href="blog-post.html">
                                        <div class="btn-line"></div>
                                        <div class="btn-line btn-line-shift"></div>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- /Post-review -->
                        </div>
                        <!-- /blog-post-->
                        <!-- Blog Post 4 -->
                        <div class="blog-post">
                            <!-- blog image -->
                            <div class="img-zoom">
                                <a href="blog-post.html">
                                    <img class="img-responsive" src="/asset/img/blog4.jpg" alt="">
                                </a>
                            </div>
                            <!-- post info -->
                            <div class="post-review">
                                <!-- Comments -->
                                <ul class="post-comment">
                                    <li>12<small>sep</small></li>
                                    <li><i class="fa fa-comments-o"></i><a href="blog-post.html"><small>12</small></a></li>
                                </ul>
                                <!-- Title -->
                                <h4 class="post-title">
                                    <a href="blog-post.html">French pastries</a>
                                </h4>
                                <!-- Description -->
                                <p class="post-description">
                                    Lorem ipsum dolor sit amet lipsum, consectetur adipiscing elit. Morbi orem rhoncus orci elit...
                                </p>
                                <!-- Button -->
                                <div class="text-center page-scroll">
                                    <a class="btn" href="blog-post.html">
                                        <div class="btn-line"></div>
                                        <div class="btn-line btn-line-shift"></div>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- /Post-review -->
                        </div>
                        <!-- /blog-post-->
                    </div>
                    <!--/owl-blog -->
                </div>
                <!--/col-md-12 -->
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </section>
    <!--/section -->

    <!-- Section Menu -->
    <section id="menu" class="color-section2">
        <div class="container">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Our Menu</h2>
                <div class="hr"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12 no-padding">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Cakes</a></li>
                        <li><a href="#tab2" data-toggle="tab">Pastries</a></li>
                        <li><a href="#tab3" data-toggle="tab">Sweets</a></li>
                    </ul>
                </div>
                <div class="col-md-12 no-padding">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active in fade" id="tab1">
                            <div class="row">
                                <!-- Menu: Cakes-->
                                <h3>Cakes & Pies</h3>
                                <!-- column -->
                                <div class="col-md-6">
                                    <div class="polaroid">
                                        <p>Our famous Forest Cake</p>
                                        <img src="/asset/img/menu1.jpg" alt="" class="img-responsive center-block" />
                                    </div>
                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Chocolate Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $5.5
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Homemade Apple Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Special Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $12
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                                <!-- /col-md-6 -->
                                <!-- column -->
                                <div class="col-md-6">
                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    CheeseCake
                                                </div>
                                                <div class="menu-item-price">
                                                    $5.5
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Vanilla Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Forest Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Boston Cream Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Brownie
                                                </div>
                                                <div class="menu-item-price">
                                                    $4
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Butter Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                                <!-- /col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /#tab1 -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="row">
                                <!-- Menu: Pastries-->
                                <h3>Pastries</h3>
                                <!-- column -->
                                <div class="col-md-6">
                                    <div class="polaroid">
                                        <p>Delicious Pastries</p>
                                        <img src="/asset/img/menu2.jpg" alt="" class="img-responsive center-block" />
                                    </div>
                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Chocolate Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $5.5
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Homemade Apple Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Homemade Apple Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                                <!-- /col-md-6 -->
                                <!-- column -->
                                <div class="col-md-6">
                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    CheeseCake
                                                </div>
                                                <div class="menu-item-price">
                                                    $5.5
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Vanilla Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Forest Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Boston Cream Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Brownie
                                                </div>
                                                <div class="menu-item-price">
                                                    $4
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Butter Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                                <!-- /col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /tab-pane -->
                        <div class="tab-pane fade" id="tab3">
                            <div class="row">
                                <!-- Menu: Sweets-->
                                <h3>Sweets</h3>
                                <!-- column -->
                                <div class="col-md-6">
                                    <div class="polaroid">
                                        <p>Chocolate Truffles</p>
                                        <img src="/asset/img/menu3.jpg" alt="" class="img-responsive center-block" />
                                    </div>
                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Chocolate Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $5.5
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Homemade Apple Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Homemade Apple Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                                <!-- /col-md-6 -->
                                <!-- column -->
                                <div class="col-md-6">
                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    CheeseCake
                                                </div>
                                                <div class="menu-item-price">
                                                    $5.5
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Vanilla Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Forest Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Boston Cream Pie
                                                </div>
                                                <div class="menu-item-price">
                                                    $7
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Brownie
                                                </div>
                                                <div class="menu-item-price">
                                                    $4
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                            <!-- Item starts -->
                                            <div class="menu-item">
                                                <div class="menu-item-name">
                                                    Butter Cake
                                                </div>
                                                <div class="menu-item-price">
                                                    $11
                                                </div>
                                                <div class="menu-item-description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                                <!-- /col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /tab-pane -->
                    </div>
                    <!-- /tab-content-->
                </div>
                <!-- /col-md-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section -->

    <!-- Section Callout -->
    <section id="callout" class="feature color-section">
        <div class="image-container col-lg-6 pull-left" data-top-bottom="opacity:0" data-center="opacity:1">
            <div class="background-image-holder"></div>
            <!-- Background Image -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-7 col-md-12 text-center">
                    <!-- Section heading -->
                    <h3>100 cakes to Choose from</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor.</p>
                    <!-- Button -->
                    <div class="page-scroll">
                        <a class="btn" href="#contact">
                            <div class="btn-line"></div>
                            <div class="btn-line btn-line-shift"></div>
                            Send us a message
                        </a>
                    </div>
                    <!-- /page-scroll -->
                </div>
                <!-- /col-lg-5-->
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container -->
    </section>
    <!-- /Section -->

    <!-- Section Gallery -->
    <section id="gallery" class="color-section2">
        <div class="container-fluid">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Our Gallery</h2>
                <div class="hr"></div>
            </div>
            <!-- Navigation -->
            <div class="text-center col-md-12">
                <ul class="nav nav-pills cat text-center" role="tablist" id="gallerytab">
                    <li class="active"><a href="#" data-toggle="tab" data-filter="*">All</a>
                    <li><a href="#" data-toggle="tab" data-filter=".cakes">Cakes & Pies</a></li>
                    <li><a href="#" data-toggle="tab" data-filter=".sweets">Other Sweets</a></li>
                </ul>
            </div>
            <!-- Gallery -->
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div id="lightbox">
                        <!-- Image 1 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery1.jpg" alt="">
                                    <a href="img/gallery1.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 2 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery2.jpg" alt="">
                                    <a href="img/gallery2.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 3 -->
                        <div class="cakes col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery3.jpg" alt="">
                                    <a href="img/gallery3.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 4 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery4.jpg" alt="">
                                    <a href="img/gallery4.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 5 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery5.jpg" alt="">
                                    <a href="img/gallery5.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 6 -->
                        <div class="cakes col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery6.jpg" alt="">
                                    <a href="img/gallery6.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 7 -->
                        <div class="cakes col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery7.jpg" alt="">
                                    <a href="img/gallery7.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 8 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery8.jpg" alt="">
                                    <a href="img/gallery8.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 9 -->
                        <div class="cakes col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery9.jpg" alt="">
                                    <a href="img/gallery9.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 10 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery10.jpg" alt="">
                                    <a href="img/gallery10.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 11 -->
                        <div class="cakes col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery11.jpg" alt="">
                                    <a href="img/gallery11.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 12 -->
                        <div class="sweets col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery12.jpg" alt="">
                                    <a href="img/gallery12.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image 13 -->
                        <div class="cakes col-lg-4 col-sm-6 col-md-6">
                            <div class="isotope-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="/asset/img/gallery13.jpg" alt="">
                                    <a href="img/gallery13.jpg" data-gal="prettyPhoto[gallery]"  title="You can add caption to pictures.">
                                        <span class="overlay-mask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /lightbox-->
                </div>
                <!-- /col-md-12-->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section -->

    <!-- Parallax object -->
    <div class="parallax-object hidden-sm hidden-xs hidden-md"
         data-100-start="transform:rotate(-0deg); left:3%;margin-top:-100px;"
         data-center="transform:rotate(-370deg);">
        <!-- Image -->
        <img src="/asset/img/cake2.png" alt="">
    </div>

    <!-- Section Prices -->
    <section id="prices">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Our Prices</h2>
                <div class="hr"></div>
            </div>
            <div class="row">
                <!-- Price Table 1 -->
                <div class='package col-md-4 col-sm-12'>
                    <div class='package-name'>
                        <h5>Basic Event</h5>
                    </div>
                    <div class='package-price'>$100</div>
                    <ul>
                        <li>
                            <strong>20</strong>
                            Pastries
                        </li>
                        <li>
                            <strong>2</strong>
                            cakes
                        </li>
                        <li>
                            <strong>30</strong>
                            Cupcakes
                        </li>
                        <li>
                            Perfect for Small Events
                        </li>
                        <li>
                            Serves up to 20 people
                        </li>
                    </ul>
                    <!-- Button -->
                    <div class="page-scroll">
                        <a class="btn" href="#contact">
                            <div class="btn-line"></div>
                            <div class="btn-line btn-line-shift"></div>
                            Contact
                        </a>
                    </div>
                </div>
                <div class='package featured-package col-md-4 col-sm-12 res-margin'>
                    <div class='package-name'>
                        <h5>Medium Event</h5>
                    </div>
                    <div class='package-price'>$250</div>
                    <ul>
                        <li>
                            <strong>50</strong>
                            Pastries
                        </li>
                        <li>
                            <strong>6</strong>
                            cakes
                        </li>
                        <li>
                            <strong>70</strong>
                            Cupcakes
                        </li>
                        <li>
                            Perfect for Medium Events
                        </li>
                        <li>
                            Serves up to 50 people
                        </li>
                    </ul>
                    <!-- Button -->
                    <div class="page-scroll">
                        <a class="btn" href="#contact">
                            <div class="btn-line"></div>
                            <div class="btn-line btn-line-shift"></div>
                            Contact
                        </a>
                    </div>
                </div>
                <div class='package col-md-4 col-sm-12 res-margin'>
                    <div class='package-name'>
                        <h5>Mega Event</h5>
                    </div>
                    <div class='package-price'>$550</div>
                    <ul>
                        <li>
                            <strong>100</strong>
                            Pastries
                        </li>
                        <li>
                            <strong>10</strong>
                            cakes
                        </li>
                        <li>
                            <strong>130</strong>
                            Cupcakes
                        </li>
                        <li>
                            Perfect for Large Events
                        </li>
                        <li>
                            Serves up to 100 people
                        </li>
                    </ul>
                    <!-- Button -->
                    <div class="page-scroll">
                        <a class="btn" href="#contact">
                            <div class="btn-line"></div>
                            <div class="btn-line btn-line-shift"></div>
                            Contact
                        </a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!--/container -->
    </section>
    <!-- / section-->

    <!-- Parallax object -->
    <div class="parallax-object hidden-sm hidden-xs hidden-md"
         data-100-start="transform:rotate(-0deg); right:3%;"
         data-center="transform:rotate(-370deg);">
        <!-- Image -->
        <img src="/asset/img/donut.png" alt="">
    </div>

    <!-- Divider -->
    <div class="slanted-divider"></div>

    <!-- Section Promo -->
    <section id="promo">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-centered well text-center">
                <h4>Visit us Today!</h4>
                <p>Lotam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi Suspendisse a elementum anteu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                <!-- Button -->
                <div class="page-scroll">
                    <a class="btn " href="#contact">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Contact Us
                    </a>
                </div>
            </div>
            <!-- /col-md-6 -->
        </div>
        <!-- /.container -->
    </section>
    <!-- / section-->

    <!-- Divider -->
    <div class="slanted-divider"></div>

    <!-- Section Team -->
    <section id="team">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Our Team</h2>
                <div class="hr"></div>
            </div>
            <div id="owl-team" class="owl-carousel">
                <!-- Team member 1 -->
                <div class="team-member">
                    <div class="profile-image img-zoom">
                        <img src="/asset/img/team1.jpg" alt="" />
                    </div>
                    <div class="team-caption">
                        <h4>Mary Jones</h4>
                        <h6>Founder</h6>
                        <p>Ibu lum orci eget liquam erat volut pat phas ellus ac sodales felis commolu ptatemp dolupta orem retibusam.</p>
                        <!--Social icons -->
                        <div class="social-media smaller">
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/team member ends-->
                <!-- Team member 2 -->
                <div class="team-member">
                    <div class="profile-image img-zoom">
                        <img src="/asset/img/team2.jpg" alt="" />
                    </div>
                    <div class="team-caption">
                        <h4>John Smith</h4>
                        <h6>Cake Expert</h6>
                        <p>Ibu lum orci eget liquam erat volut pat phas ellus ac sodales felis commolu ptatemp dolupta orem retibusam.</p>
                        <!--Social icons -->
                        <div class="social-media smaller">
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/team member ends-->
                <!-- Team member 3 -->
                <div class="team-member">
                    <div class="profile-image img-zoom">
                        <img src="/asset/img/team3.jpg" alt="" />
                    </div>
                    <div class="team-caption">
                        <h4>Lilian Doe</h4>
                        <h6>Master Baker</h6>
                        <p>Ibu lum orci eget liquam erat volut pat phas ellus ac sodales felis commolu ptatemp dolupta orem retibusam.</p>
                        <!--Social icons -->
                        <div class="social-media smaller">
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/team member ends-->
                <!-- Team member 4 -->
                <div class="team-member">
                    <div class="profile-image img-zoom">
                        <img src="/asset/img/team4.jpg" alt="" />
                    </div>
                    <div class="team-caption">
                        <h4>Nancy Nine</h4>
                        <h6>Master Baker</h6>
                        <p>Ibu lum orci eget liquam erat volut pat phas ellus ac sodales felis commolu ptatemp dolupta orem retibusam.</p>
                        <!--Social icons -->
                        <div class="social-media smaller">
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/team member ends-->
                <!-- Team member 5 -->
                <div class="team-member">
                    <div class="profile-image img-zoom">
                        <img src="/asset/img/team5.jpg" alt="" />
                    </div>
                    <div class="team-caption">
                        <h4>Lucas Morris</h4>
                        <h6>Master Baker</h6>
                        <p>Ibu lum orci eget liquam erat volut pat phas ellus ac sodales felis commolu ptatemp dolupta orem retibusam.</p>
                        <!--Social icons -->
                        <div class="social-media smaller">
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/team member ends-->
                <!-- Team member 6 -->
                <div class="team-member">
                    <div class="profile-image img-zoom">
                        <img src="/asset/img/team6.jpg" alt="" />
                    </div>
                    <div class="team-caption">
                        <h4>Laura Santos</h4>
                        <h6>Master Baker</h6>
                        <p>Ibu lum orci eget liquam erat volut pat phas ellus ac sodales felis commolu ptatemp dolupta orem retibusam.</p>
                        <!--Social icons -->
                        <div class="social-media smaller">
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="#" title=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/team member ends-->
            </div>
        </div>
    </section>
    <!--/ Section -->

    <!-- Section Newsletter-->
    <section id="newsletter" class="color-section" data-0="background-position:0px -40px;" data-end="background-position:1000px -40px;">
        <div class="container">
            <div class="col-lg-7 pull-left">
                <h3>Sign-up to receive our newsletter</h3>
            </div>
            <div class="col-lg-5 pull-right">
                <!-- Form -->
                <div id="mc_embed_signup">
                    <form action="http://yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <div class="input-group">
                                    <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                    <span class="input-group-btn">
								<button class="btn" type="submit" value="Subscribe" name="subscribe"  id="mc-embedded-subscribe">
									<div class="btn-line"></div>
									<div class="btn-line btn-line-shift"></div>
									Subscribe
									</button>
								</span>
                                </div>
                                <!-- Subscription results -->
                                <div id="mce-responses" class="mailchimp">
                                    <div class="alert alert-danger response" id="mce-error-response"></div>
                                    <div class="alert alert-success response" id="mce-success-response"></div>
                                </div>
                            </div>
                            <!-- /mc-fiel-group -->
                        </div>
                        <!-- /mc_embed_signup_scroll -->
                    </form>
                    <!-- /form ends -->
                </div>
                <!-- /mc_embed_signup -->
            </div>
            <!-- /col-ms-5 -->
        </div>
        <!-- /.container -->
    </section>
    <!-- / section-->

    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <div class="col-lg-7 col-md-7">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2>Contact Us</h2>
                    <div class="hr"></div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="row">
                <div class="col-lg-7 col-md-7 text-center">
                    <h4>Get in touch with us</h4>
                    <p>Consectetur adipiscing elit Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.</p>
                    <ul class="contact-info">
                        <li><i class="fa fa-map-marker"></i>Imaginary cake City 2002</li>
                        <li><i class="fa fa-phone"></i>+00 (0) 1234 5678</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:email@company.com">email@company.com</a> </li>
                    </ul>
                    <div class="form-style" id="contact_form">
                        <!-- Contact results -->
                        <div id="contact_results"></div>
                        <!-- Form Starts -->
                        <div class="form-group">

                            <input type="text" name="name" class="form-control input-field" placeholder="Name" required="">
                            <input type="email" name="email" class="form-control input-field" placeholder="Email ID" required="">
                            <input type="text" name="subject" class="form-control input-field" placeholder="Subject">
                            <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Enter your message" required=""></textarea>
                            <!-- Button -->
                            <a class="btn" href="#contact" id="submit_btn">
                                <div class="btn-line"></div>
                                <div class="btn-line btn-line-shift"></div>
                                Send Message
                            </a>
                        </div>
                    </div>
                    <!--/Contact_form -->
                </div>
                <!-- / col-lg-7-->
            </div>
            <!--/row -->
        </div>
        <!-- /container-->
    </section>
    <!-- / section-->

    <!-- Map -->
    <div class="container-fluid">
        <div id="map-canvas"></div>
    </div>
    <!--/map-->
@endsection
