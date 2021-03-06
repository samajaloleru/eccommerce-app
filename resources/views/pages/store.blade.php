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
            <nav class="navbar navbar-expand-lg text-red bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#paper-kit">08135880220</a>
                    <a class="navbar-brand" href="#paper-kit"> Info@foodthings.com</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg pt-0 bg-success navbar-absolute">
                <div class="container">
                    <a class="navbar-brand mb-0" href="www.creative-tim.com">
                        <img src="../frontend/img/logo.jpeg" alt="" style="width: 50px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-auto">
                            <a href="/" class="btn btn-link btn-neutral">Home</a>
                            <a href="/about" class="btn btn-link btn-neutral">About Us</a>
                            <a href="/store" class="btn btn-link btn-neutral">Online Store</a>
                            <a href="/new" class="btn btn-link btn-neutral">News & Events</a>
                            <a href="/contact" class="btn btn-link btn-neutral">Contact</a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="section ">
                <div class="container">
                    <div class="row p-4 ">
                        <div class="col-12">
                            <h5>
                                <small>Home / Shop</small>
                            </h5>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#info" role="tab" data-toggle="tab">Creams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#description" role="tab" data-toggle="tab">Perfumes</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" href="#concept" role="tab" data-toggle="tab">Concept</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#support" role="tab" data-toggle="tab">Support</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#extra" role="tab" data-toggle="tab">Extra</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-6">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="info">
                                            <div class="products">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream11.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream11.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="description">
                                            <div class="products">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream12.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream13.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream4.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream12.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream13.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="#paper-kit">
                                                                    <img src="../frontend/img/cream4.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Buy Now</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator"></div>
        <footer class="footer footer-black footer-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 ml-auto mr-auto">
                        <div class="logo text-center">
                            <img src="../frontend/img/logo.jpeg" alt="" style="width: 50px;">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-2 col-sm-8">
                        <div class="links footer-text">
                            <ul>
                                <li>
                                    <a href="#paper-kit">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <hr class="new"/>
                            <div class="copyright">
                                <div class="pull-left">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                </div>
                                <div class="pull-right">
                                    <ul>
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
        <script src="{{ asset('frontend/js/photo_swipe/photoswipe.min.js') }}"></script>
        <script src="{{ asset('frontend/js/photo_swipe/photoswipe-ui-default.min.js') }}"></script>
        <script src="{{ asset('frontend/js/photo_swipe/init-gallery.js') }}"></script>
        <script src="{{ asset('frontend/js/asny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/paper-kit.js') }}"></script>
    </body>
</html>
