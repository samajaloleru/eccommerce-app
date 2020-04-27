
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
                <div class="container-fluid">
                    <a class="navbar-brand white">
                        <i class="fa icon1 mr-3 fa-envelope"></i>
                        enquiry@anemacitymall.com
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
            <nav class="navbar navbar-expand-lg pt-0 bg-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand mb-0">
                        <img src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <form class="form-inline pt-2 ml-auto">
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
                            <?php $customer_id=Session::get('customer_id'); ?>
                            
                                <?php if($customer_id != NULL) {?>
                                    <a href="{{URL::to('/checkout')}}" class="btn btn-link btn-neutral pt-lg-3">
                                        <span class="nav-text">Checkout</span>
                                    </a>
                                <?php }else{?>
                                    <a href="{{URL::to('/login-check')}}" class="btn btn-link btn-neutral pt-lg-3">
                                        <span class="nav-text">Checkout</span>
                                    </a>
                            <?php } ?>
                            <a href="{{URL::to('/show-cart')}}" class="btn btn-link btn-neutral">
                                <i class="icon fa fa-shopping-cart mr-2"></i>
                                <span class="nav-text">My Basket</span>
                            </a>
                            <?php $customer_id=Session::get('customer_id'); ?>
                            
                                <?php if($customer_id != NULL) {?>
                                <a type="button" href="{{URL::to('/customer-logout')}}" class="btn btn-link btn-neutral">
                                    <i class="icon mr-1 fa fa-user"></i>
                                    <span class="nav-text">Logout</span>
                                </a>
                                <?php }else{?>
                                <a type="button" href="{{URL::to('/login-check')}}" class="btn btn-link btn-neutral">
                                    <i class="icon mr-1 fa fa-user"></i>
                                    <span class="nav-text">Login</span>
                                </a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="section py-0">
               
                <div class="container-fluid py-5 bg-page px-lg-5">
                    <div class="row">
                        <div class="col-3">
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
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12  bg-page">
                                    <h5 class="black">Please Fillup this Form</h5>
                                </div>
                                <div class="col-8 pt-3 mr-auto">
                                    <h5 class="black">Shipping Details</h5>
                                    <form action="{{url('/shipping-details')}}"  method="post">
                                        {{ csrf_field() }}
                        
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" name="shipping_email" class="form-control" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="First Name" name="shipping_firstname" class="form-control" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Last Name" name="shipping_lastname" class="form-control" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Address" name="shipping_address" class="form-control" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Mobile Number" name="shipping_mobile" class="form-control" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="City" name="shipping_city" class="form-control" required="" />
                                        </div>
                                        <button type="submit" class="btn white icon bg-orange btn-sm btn-block">Done</button>
                                    </form>
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
                                                                        <input type="text" class="form-control" placeholder="Enter your email...">
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
