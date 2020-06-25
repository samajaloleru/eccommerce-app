<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            foodthings Mart
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="/frontend/css/paper-kit.css" rel="stylesheet" type="text/css" >
        <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="header-2">
            <nav class="navbar navbar-expand-lg text-red bg-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand white">
                        <i class="fa icon1 mr-3 fa-envelope"></i>
                        enquiry@foodthings.com
                    </a>
                    <a class="navbar-brand white">7 days delivery, 10am - 5pm</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a target="_blank" class="btn btn-link btn-neutral">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg pt-0 bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand mb-0">
                        <img src="../frontend/img/logo.png" alt="" style="width: 100px;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-auto">
                            
                            <form action="{{url('/search')}}" method="POST" class="form-inline">
                                {{ csrf_field() }}
                                <input class="form-control mr-sm-2 no-border" name="q" type="text" placeholder="Search">
                                <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split"></i></button>
                            </form>

                            <a href="/" class="pt-lg-3 px-2 px-lg-4 ">
                                <span class="navbar-text font-weight-bold">Shop</span>
                            </a>
                            
                            <?php $customer_id=Session::get('customer_id'); ?>
                            
                                <?php if($customer_id != NULL) {?>
                                    <a href="{{URL::to('/checkout')}}" class="px-2 px-lg-4 pt-lg-3">
                                        <span class="navbar-text font-weight-bold">Checkout</span>
                                    </a>
                                <?php }else{?>
                                    <a href="{{URL::to('/login-check')}}" class="px-2 px-lg-4 pt-lg-3">
                                        <span class="navbar-text font-weight-bold">Checkout</span>
                                    </a>
                            <?php } ?>
                            <a href="{{URL::to('/show-cart')}}" class="px-2 px-lg-4 pt-lg-3">
                                <i class="icon white fa fa-shopping-cart mr-2"></i>
                                <span class="navbar-text font-weight-bold">My Basket</span>
                                <sup class="sup-text">{{Cart::count()}}</sup>
                            </a>
                            <?php $customer_id=Session::get('customer_id'); ?>
                            
                                <?php if($customer_id != NULL) {?>
                                    <a type="button" href="{{URL::to('/customer-logout')}}" class="px-2 px-lg-4 pt-lg-3">
                                        <i class="icon white mr-1 fa fa-user"></i>
                                        <span class="navbar-text font-weight-bold">Logout</span>
                                    </a>
                                <?php }else{?>
                                <a type="button" href="{{URL::to('/login-check')}}" class="px-2 px-lg-4 pt-lg-3">
                                    <i class="icon white mr-1 fa fa-user"></i>
                                    <span class="navbar-text font-weight-bold">Login</span>
                                </a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="page-header page-header-xs" style="background-image: url('../frontend/img/sections/gerrit-vermeulen.jpg');">
            <div class="filter filter-danger"></div>
            <div class="content-center">
                <div class="container">
                    <h1>Hello,
                    <br /> Welcome To foodthings Mart.</h1>
                    <h3>Let us tell you more about what we do.</h3>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="section">
                <div class="container">
                    <h3 class="font-weight-bold title-uppercase">Introduction</h3>
                    <p class="text-dark">
                        foodthings Mart is a foremost trading and agriculture company in Nigeria. 
                        We currently operate our businesses and outlets in Uyo, Akwa Ibom State, where we have established a foothold in the regional market, 
                        and are esteemed by our customers as the leading and trusted brand in retail.  Our core business pillars, mechanized farming and food processing, 
                        represents our core business ideal; which is to provide quality and affordable food and allied products in every home in our operational area. 
                        Essential commodities in nurturing of life, hence our blood red brand color. Our retail arm serves as the vehicle in delivering our mission and vision.
                    </p>
                    
                    <h5 class="font-weight-bold pt-2 title-uppercase">We <i class="fa fa-heart heart"></i>&nbsp; what we do.</h5>
                    <p class="text-dark">
                        We pride ourselves in being the family brand. Everything we do is to put smiles on the faces of kids, parents and elderly alike. 
                        We recognize family values and consistently reach out to our children in schools and orphanages via various support programs and platforms of ours. 
                        We recognize children to be the future and we shall continue to actively promote values that encourage their positive growth, development and outlook on our society by every means we can, in and outside business.
                    </p>

                    <div class="col-12 my-4  text-center">
                        <a href="#pablo" class="btn btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#pablo" class="btn btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="#pablo" class="btn btn-just-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    
                    <div class="row coloured-cards">
                        <div class="col-md-4 col-sm-6">
                            <div class="card-big-shadow">
                                <div class="card" data-background="color" data-color="blue" data-radius="none">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold card-category">MISSION</h6>
                                        <!-- <h4 class="card-title">
                                            <a href="#paper-kit">Blue Card</a>
                                        </h4> -->
                                        <p class="card-description">
                                            Being the best at delivering fresh, affordable, 
                                            high quality and well packaged farm produce in a hygienic 
                                            environment to our customers through world class retail outlets.
                                        </p>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card-big-shadow">
                                <div class="card" data-background="color" data-color="green" data-radius="none">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold card-category">Vision</h6>
                                        
                                        <p class="card-description">
                                        Providing easy access to quality food in major cities in Nigeria by 2025.
                                        </p>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card-big-shadow">
                                <div class="card" data-background="color" data-color="yellow" data-radius="none">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold card-category">CORE VALUES</h6>
                                        <p class="card-description">Customer satisfaction ,Sustainable partnership with our suppliers ,Integrity ,Hygiene </p>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>

                    <h5 class="font-weight-bold title-uppercase">Clients</h5>
                    <p class="text-dark">
                        We serve a wide range of clients across the Nigerian market and have packages and services tailored to meet each clients needs. 
                        Our clients cuts across Individuals, shopping malls(Super stores), Local farmers, event planners and more.
                    </p>
                </div>
            </div>
        </div>

        <div class="separator"></div>
        <footer class="footer footer-black footer-big">
            <div class="col-lg-10 col-12 mr-auto ml-auto">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="links">
                                    <img src="../frontend/img/logo.png" alt="" style="width: 100px;">
                                    <p class="white text-left pt-3">
                                        Contact: 08126432202, 08061347511, 08032461836
                                    </p>
                                    <p class="white px-0">
                                        <i class="fa icon1 fa-map-marker"></i>
                                        <span class="font-weight-bold">Our Outlets,</span>
                                        <br/>
                                        29 NEPA Line, Uyo Akwa Ibom State / foodthings City Mart, 
                                        <br/>
                                        5 Osongama Road Behind Emerald Event Center , Osongama Estate , Uyo
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-sm-4 pl-lg-5">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a href="/">
                                                Shop
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/about">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            Live Support
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            Money Back
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-sm-8">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a class="col-12">
                                                <h4>Contact Us</h4>
                                                <div class="separator"></div>
                                                <div class="subscribe-line subscribe-line-black">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <form class="">
                                                                    <div class="form-group">
                                                                        <input type="text" value="" class="form-control" placeholder="Enter your email...">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-neutral btn-block btn-lg">Join Newsletter</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="copyright">
                            <div class="pull-left">
                                &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> foodthings City Center. All rights reserved.
                            </div>
                            <div class="links pull-right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Company Policy
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#">
                                            Terms
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#">
                                            Privacy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/frontend/js/jquery.min.js"></script>
        <script src="/frontend/js/popper.min.js"></script>
        <script src="/frontend/js/bootstrap.min.js"></script>
        <script src="/frontend/js/bootstrap-switch.js"></script>
        <script src="/frontend/js/nouislider.min.js"></script>
        <script src="/frontend/js/moment.min.js"></script>
        <script src="/frontend/js/bootstrap-tagsinput.js"></script>
        <script src="/frontend/js/bootstrap-selectpicker.js"></script>
        <script src="/frontend/js/bootstrap-datetimepicker.js"></script>
        <script src="/frontend/js/photoswipe.min.js"></script>
        <script src="/frontend/js/photoswipe-ui-default.min.js"></script>
        <script src="/frontend/js/init-gallery.js"></script>
        <script src="/frontend/js/jasny-bootstrap.min.js"></script>
        <script src="/frontend/js/paper-kit.js"></script>
    </body>
</html>
