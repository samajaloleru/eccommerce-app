
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
            <nav class="navbar navbar-expand-lg text-red bg-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand white">
                        <i class="fa icon1 mr-3 fa-envelope"></i>
                        enquiry@anemacitymall.com
                    </a>
                    <a class="navbar-brand white">7 days delivery, 10am - 5pm</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    <div class="collapse navbar-collapse">
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
                        <img src="../frontend/img/logo.png" alt="" style="width: 150px;">
                    </a>
                    <div class="collapse navbar-collapse">
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

        <div class="main">
            <div class="section py-0">
               
                <div class="container-fluid bg-page px-lg-5">
                    <div class="row py-lg-4">
                        <div class="col">
                            <div class="row">
                                <div class=" col-12">
                                    <div id="blue" role="tablist" aria-multiselectable="true">
                                        <div class="card no-transition">
                                            <div class="card-header card-collapse" role="tab" id="headingTwo">
                                                <h3 class="my-0 panel-title">
                                                    <a class="black-header font-weight-bold collapsed" data-toggle="collapse" data-parent="#blue" href="#categories" aria-expanded="false" aria-controls="categories">
                                                        Categories
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="categories" class="bg-page collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="row p-3" id="blue" aria-expanded="true">

                                                        <?php
                                                            $all_published_category=DB::table('category')
                                                                                    ->where('status',1)
                                                                                    ->get();

                                                        foreach($all_published_category as $v_category){?>
                                                        
                                                            <div class="col-lg-2 col-12 pt-2 col-sm-6 text-center font-weight-bold">
                                                                <a class="btn bg-orange click drop-header btn-block" href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">
                                                                    {{$v_category->category_name}}
                                                                </a>
                                                            </div>
                                                        <?php } ?> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row pb-5">
                                        <div class="col-12 pt-2 pt-lg-0 pb-lg-0 px-lg-0">
                                            <div class="card mb-0 card-raised page-carousel">
                                                <div id="carouselExample" class="carousel slide" data-interval="3000 data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExample" data-slide-to="1" class=""></li>
                                                        <li data-target="#carouselExample" data-slide-to="2" class=""></li>
                                                        <li data-target="#carouselExample" data-slide-to="3" class=""></li>
                                                        <li data-target="#carouselExample" data-slide-to="4" class=""></li>
                                                        <li data-target="#carouselExample" data-slide-to="5" class=""></li>
                                                    </ol>
                                                    
                                                        <div class="carousel-inner" role="listbox">
                                                        <?php
                                                            $all_published_slider=DB::table('slider')
                                                                            ->where('status',1)
                                                                            ->get();
                                                            foreach($all_published_slider as $key => $v_slider){?>
                                                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                                <div class="page-header page-header-xs" style="background-image: url('{{$v_slider->slider_image}}');">
                                                                    <div class="content-center">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-md-12 text-left">
                                                                                    
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
                                        <div class="row">
                                            <div class="col-12 bg-orange">
                                                <a class="pl-0 header-white py-2">Best Selling</a>
                                            </div>
                                            <div class="products pt-3">
                                                <div class="row">
                                                <?php 
                                                    $product=DB::table('product')
                                                    ->where('best_status',1)
                                                    ->limit('12')
                                                    ->get();
                                                foreach($product as $v_product){?>   
                                                    <div class="col-md-2 col-sm-4 col-6">
                                                        <div class="card">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="{{$v_product->image}}" href="{{URL::to('/view_product/'.$v_product->product_id)}}" style="height:200px; width:100%" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description text-height">
                                                                        <h6 class="float-left font-weight-bold">{{$v_product->product_name}}</h6>

                                                                        <h6 class="float-right">₦ {{$v_product->price}}</h6>
                                                                    </div>
                                                                    <div class="col-12 pt-4 text-center px-0">
                                                                        <a href="{{URL::to('/view_product/'.$v_product->product_id)}}" class="btn product-text btn-product btn-block">Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="row py-5">
                                            <div class="col-12 col-lg-11 ml-auto mr-auto px-0 pt-2 pt-lg-0 pb-lg-0 px-lg-0">
                                                <div class="card mb-0 card-raised page-carousel">
                                                    <div id="carouselExampleIndicator" class="carousel slide" data-interval="3000" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="1" class="active"></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="3" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="4" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="5" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="6" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="7" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="8" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="9" class=""></li>
                                                            <li data-target="#carouselExampleIndicator" data-slide-to="10" class=""></li>
                                                        </ol>
                                                        
                                                            <div class="carousel-inner" role="listbox">
                                                            <?php
                                                                $all_published_advert=DB::table('advert_slider')
                                                                                ->where('status',1)
                                                                                ->get();
                                                                foreach($all_published_advert as $key => $v_slider){?>
                                                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                                    <div class="page-header page-header-xs" style="background-image: url('{{$v_slider->advert_image}}');">
                                                                        <div class="content-center">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 text-left">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                        <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
                                                            <span class="fa fa-angle-left"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
                                                            <span class="fa fa-angle-right"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class=" col-12 bg-orange">
                                                <a class="pl-0 header float-left">Featured Products</a>
                                                <div class="float-right">
                                                    <div class="pt-3" >
                                                        <a href="/view-more" class="btn-sm white btn bg-navbar">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products pt-3">
                                                <div class="row">
                                                <?php 
                                                    $product=DB::table('product')
                                                    ->where('status',1)
                                                    ->inRandomOrder()
                                                    ->limit('30')
                                                    ->get();
                                                foreach($product as $v_product){?>   
                                                    <div class="col-md-2 col-sm-4 col-6">
                                                        <div class="card">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="{{$v_product->image}}" href="{{URL::to('/view_product/'.$v_product->product_id)}}" style="height:200px; width:100%" class="img-rounded img-responsive">
                                                                </a>
                                                            </div>
                                                            <div class="card-body px-1">
                                                                <div class="card-description text-height">
                                                                    <h6 class="float-left font-weight-bold">{{$v_product->product_name}}</h6>
                                                                
                                                                    <h6 class="float-right">₦ {{$v_product->price}}</h6>
                                                                </div>
                                                                <div class="col-12 pt-4 text-center px-0">
                                                                    <a href="{{URL::to('/view_product/'.$v_product->product_id)}}" class="btn product-text btn-product btn-block">Add to Cart</a>
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

        <footer class="footer footer-black footer-big">
            <div class="col-lg-10 col-12 mr-auto ml-auto">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="links">
                                    <img src="../frontend/img/logo.png" alt="" style="width: 150px;">
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
                                </script> Anema City Center. All rights reserved.
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
        <script src="/frontend/js/asny-bootstrap.min.js"></script>
        <script src="/frontend/js/paper-kit.js"></script>
    </body>
</html>
