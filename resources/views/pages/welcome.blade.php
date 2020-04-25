
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/../frontend/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/../frontend/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Anema Mart
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="/frontend/css/paper-kit.css" rel="stylesheet" type="text/css" >
        <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="header-2">
            <nav class="navbar navbar-expand-lg text-red bg-dark">
                <div class="container">
                    <a class="navbar-brand white">
                        <i class="fa icon1 mr-3 fa-envelope"></i>
                        service@anemacitymall.com
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
            <nav class="navbar navbar-expand-lg pt-0 bg-success">
                <div class="container">
                    <a class="navbar-brand mb-0">
                        <img src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <form class="form-inline ml-auto">
                                    <input class="form-control mr-sm-2 no-border" type="text" placeholder="Search">
                                    <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></button>
                                </form>
                            </li>
                            <a href="/" class="btn pt-lg-3 btn-link btn-neutral">
                                <span class="nav-text">Shop</span>
                            </a>
                            <a href="/about" class="btn pt-lg-3 btn-link btn-neutral">
                                <span class="nav-text">About Us</span>
                            </a>
                            <a class="btn btn-link btn-neutral">
                                <i class="icon fa fa-shopping-cart mr-2"></i>
                                <span class="nav-text">My Basket</span>
                            </a>
                            <a type="button" class="btn btn-link btn-neutral" data-toggle="modal" data-target="#loginModal">
                                <i class="icon mr-1 fa fa-user"></i>
                                <span class="nav-text">Login /Register</span>
                            </a>
                        </ul>
                        <!-- login modal -->
                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-register">
                                <div class="modal-content bg-success">
                                    <div class="modal-header no-border-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h5 class="black">Welcome</h5>
                                        <img class="pb-1 text-center" src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                                        <p class="black">Log in to your account</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pb-3 text-center">
                                            <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                              <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                              <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" value="" placeholder="Email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" value="" placeholder="Password" class="form-control" />
                                        </div>
                                        <button class="btn btn-block btn-round"> Log in</button>
                                    </div>
                                    <div class="modal-footer no-border-footer">
                                        <span class="text-center">Looking to
                                            <a data-toggle="modal" href="#myModal2" class="text-white">create an account</a> 
                                            ?
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- register modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-register">
                                <div class="modal-content bg-success">
                                    <div class="modal-header no-border-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h6 class="black">Register</h6>
                                        <img class="pb-1 text-center" src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                                        <p>Create your account free and secure</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pb-3 text-center">
                                            <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                              <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                              <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" value="" placeholder="Email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" value="" placeholder="Password" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" value="" placeholder="Confirm Password" class="form-control" />
                                        </div>
                                        <button class="btn btn-block btn-round">Register</button>
                                    </div>
                                    <div class="modal-footer no-border-footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="section pt-0">
               
                <div class="container-fluid bg-page px-lg-5">
                    <div class="row p-lg-4">
                        <div class="col">
                            <h4 class="black font-weight-bold">
                                Home / Shop
                            </h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-lg-2 ">
                                    <h5 class="black pt-3">
                                        Categories
                                    </h5>
                                    <div class="card card-refine">
                                        <div class="panel-group" id="accordion" aria-expanded="true">

                                            <?php
                                                $all_published_category=DB::table('category')
                                                                        ->where('status',1)
                                                                        ->get();

                                            foreach($all_published_category as $v_category){?>
                                            <div class="card-header card-collapse">
                                                <h6 class="mb-0 panel-title black">
                                                    <a class="font-weight-bold" href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">
                                                        {{$v_category->category_name}}
                                                    </a>
                                                </h6>

                                            </div>
                                            <?php } ?> 
                                        </div>
                                    </div>
                                    <h5 class="black pt-5">
                                        Brand
                                    </h5>
                                    <div class="card card-refine">
                                        <div class="panel-group" id="accordion" aria-expanded="true">

                                            <?php
                                                $all_published_brand=DB::table('brand')
                                                                        ->where('status',1)
                                                                        ->get();

                                            foreach($all_published_brand as $v_brand){?>
                                            <div class="card-header card-collapse">
                                                <h6 class="mb-0 panel-title black">
                                                    <a class="font-weight-bold" href="{{URL::to('/product_by_brand/'.$v_brand->brand_id)}}">
                                                        {{$v_brand->brand_name}}
                                                    </a>
                                                </h6>

                                            </div>
                                            <?php } ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-lg-10">
                                    <div class="row pb-5">
                                        <div class="col-lg-6 col-12 pb-2 pb-lg-0">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                    <div class="page-header page-header-xs" style="background-image: url('../frontend/img/bgslide1.jpg');">
                                                        <div class="filter"></div>
                                                        <div class="content-center">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12 text-left">
                                                                        <h3 class="font-weight-bold">We Got Everything You need</h3>
                                                                        <br />
                                                                        <div class="buttons float-right">
                                                                            <a href="#pablo" class="btn btn-danger btn-round btn-lg">
                                                                                Shop Now
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                    <div class="page-header page-header-xs" style="background-image: url('../frontend/img/bgslide1.jpg')">
                                                        <div class="filter"></div>
                                                        <div class="content-center">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12 ml-auto mr-auto text-center">
                                                                        <h1 class="title font-weight-bold">WE'RE OPEN</h1>
                                                                        <h5 class="font-weight-bold">
                                                                            Stay Home, Stay Safe 
                                                                        </h5>
                                                                        <br />
                                                                        <h6 class="font-weight-bold">We'll get all your groceries to you</h6>
                                                                        <div class="buttons float-right">
                                                                            <a href="#pablo" class="btn btn-danger btn-round btn-lg">
                                                                                Shop Now
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                    <div class="page-header page-header-xs" style="background-image: url('../frontend/img/bgslide.jpg')">
                                                        <div class="filter"></div>
                                                        <div class="content-center">
                                                        <div class="container">
                                                            <div class="row">
                                                            <div class="col-md-7 ml-auto text-right">
                                                                <h2 class="title">Premium Offers for Venice</h2>
                                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                                <br />
                                                                <div class="buttons">
                                                                <a href="#pablo" class="btn btn-neutral btn-link btn-lg">
                                                                    <i class="fa fa-share-alt"></i> Share Offer
                                                                </a>
                                                                <a href="#pablo" class="btn btn-success btn-round btn-lg">
                                                                    <i class="fa fa-shopping-cart"></i> Shop Now
                                                                </a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="fa fa-angle-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="fa fa-angle-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-12 pt-2 pt-lg-0 pb-lg-0">
                                            <div class="card card-raised page-carousel">
                                                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExample" data-slide-to="1" class=""></li>
                                                        <li data-target="#carouselExample" data-slide-to="2" class=""></li>
                                                    </ol>
                                                    
                                                        <div class="carousel-inner" role="listbox">
                                                        <?php
                                                            $all_published_slider=DB::table('slider')
                                                                            ->where('status',1)
                                                                            ->get();
                                                            foreach($all_published_slider as $key => $v_slider){?>
                                                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                                <div class="page-header page-header-xs" style="background-image: url('{{$v_slider->slider_image}}');">
                                                                    <div class="filter"></div>
                                                                    <div class="content-center">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-md-12 text-left">
                                                                                    <h3 class="font-weight-bold">We Got Everything You need</h3>
                                                                                    <br />
                                                                                    <div class="buttons float-right">
                                                                                        <a href="#pablo" class="btn btn-danger btn-round btn-lg">
                                                                                            Shop Now
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    <a class="left carousel-control carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                                        <span class="fa fa-angle-left"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                                        <span class="fa fa-angle-right"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Tab panes -->
                                    <div class="container-fluid">
                                        <div class="row" href="#food">
                                            <h5 class="col-12 bg-success pa5 black pl-2">Featured Product</h5>
                                            <div class="products">
                                                <div class="row">
                                                <?php foreach($product as $v_product){?>   
                                                    <div class="col-md-2 col-6">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="{{$v_product->image}}" href="{{URL::to('/view_product/'.$v_product->product_id)}}" alt="Rounded Image" style="height:150px; width:100%" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="float-left font-weight-bold">{{$v_product->product_name}}</h6>

                                                                        <h6 class="float-right">₦ {{$v_product->price}}</h6>
                                                                    </div>
                                                                    <div class="col-12 pt-4 px-0">
                                                                        <a href="{{URL::to('/view_product/'.$v_product->product_id)}}" class="float-left btn btn-sm product-text btn-outline-success btn-round">Add to Cart</a>
                                                                        <a class="float-right btn btn-sm product-text btn-success btn-round" href="{{URL::to('/view_product/'.$v_product->product_id)}}">View Product</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator"></div>
        <footer class="footer footer-black footer-big">
            <div class="container px-5">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="links">
                                    <img src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                                    <p class="white text-left pt-3">
                                        Contact: 08126432202, 08061347511, 08032461836
                                    </p>
                                    <p class="white px-0">
                                        <i class="fa icon1 fa-map-marker"></i>
                                        <span class="font-weight-bold">Our Outlets,</span>
                                        <br/>
                                        29 NEPA Line, Uyo Akwa Ibom State / Anema City Mart, 
                                        <br/>
                                        5 Osongama Road Behind Emerald Event Center , Osongama Estate , Uyo
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 pl-lg-5">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a href="#paper-kit">
                                            Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Discover
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Live Support
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Money Back
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a href="#paper-kit" class="col-12">
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
                                </script> Anema City Center. All rights reserved.
                            </div>
                            <div class="links pull-right">
                                <ul>
                                    <li>
                                        <a href="#paper-kit">
                                            Company Policy
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#paper-kit">
                                            Terms
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#paper-kit">
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
        <script src="/frontend/js/asny-bootstrap.min.js"></script>
        <script src="/frontend/js/paper-kit.js"></script>
    </body>
</html>
