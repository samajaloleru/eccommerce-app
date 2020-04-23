
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
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/paper-kit.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" >

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
                            <div class="row pt-3">
                                <div class="col-12">
                                    <!-- Tab panes -->
                                    <div class="container-fluid">
                                        <div class="row" href="#food">
                                            <div class="products">
                                                <div class="row">
                                                <?php foreach($product as $v_category_product){?>   
                                                    <div class="col-md-2 col-sm-4 col-6">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="{{URL::to($v_category_product->image)}}" alt="Rounded Image" style="height:150px; width:100%" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="float-left font-weight-bold">{{$v_category_product->product_name}}</h6>

                                                                        <h6 class="float-right">₦ {{$v_category_product->price}}</h6>
                                                                    </div>
                                                                    <div class="col-12 pt-4 px-0">
                                                                        <button type="button" class="float-left btn btn-sm product-text btn-outline-success btn-round">Add to Cart</button>
                                                                        <button type="button" class="float-right btn btn-sm product-text btn-success btn-round">View Product</button>
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

        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-switch.js') }}"></script>
        <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>
        <script src="{{ asset('frontend/js/moment.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-tagsinput.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-selectpicker.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-datetimepicker.js') }}"></script>
        <script src="{{ asset('frontend/js/photoswipe.min.js') }}"></script>
        <script src="{{ asset('frontend/js/photoswipe-ui-default.min.js') }}"></script>
        <script src="{{ asset('frontend/js/init-gallery.js') }}"></script>
        <script src="{{ asset('frontend/js/asny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/paper-kit.js') }}"></script>
    </body>
</html>
