<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Anema Mart
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
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
                    <a class="navbar-brand" href="#paper-kit">08135880220</a>
                    <a class="navbar-brand" href="#paper-kit"> Info@Anema.com</a>
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
            <div class="section section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Get in touch with us</h2>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualise customer directed convergence without revolutionary ROI.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <h3 class="title">
                                <small>Find us on social networks</small>
                            </h3>
                            <button class="btn btn-just-icon btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button class="btn btn-just-icon btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button class="btn btn-just-icon btn-google">
                                <i class="fa fa-google"></i>
                            </button>
                            <button class="btn btn-just-icon btn-dribbble">
                                <i class="fa fa-dribbble"></i>
                            </button>
                            <button class="btn btn-just-icon btn-instagram">
                                <i class="fa fa-instagram"></i>
                            </button>
                            <button class="btn btn-just-icon btn-youtube">
                                <i class="fa fa-youtube"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <h3 class="title">
                                <small>Or drop us a note</small>
                            </h3>
                            <form class="contact">
                                <div class="row pb-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" placeholder="Subject">
                                    </div>
                                </div>
                                <textarea class="form-control" placeholder="Message" rows="7"></textarea>
                                <div class="row pt-3">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <button class="btn btn-primary btn-block btn-round">Send </button>
                                    </div>
                                </div>
                            </form>
                            <h3 class="visit">
                                <small>Or come and visit</small>
                            </h3>
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
        <script src="{{ asset('frontend/js/photo_swipe/main.js') }}"></script>
        <script src="{{ asset('frontend/js/asny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/paper-kit.js') }}"></script>
    </body>
</html>
