
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/../frontend/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/../frontend/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            foodthings Mart
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
            <nav class="navbar navbar-expand-lg pt-0 bg-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand mb-0">
                        <img src="../frontend/img/logo.png" alt="" >
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-auto">
                            <form action="{{url('/search')}}" method="POST" class="form-inline">
                                {{ csrf_field() }}
                                <input class="form-control mr-sm-2 no-border" name="q" type="text" placeholder="Search">
                                <button type="submit" class="btn bg-orange btn-just-icon"><i class="nc-icon icon1 nc-zoom-split"></i></button>
                            </form>

                            <a href="/" class="pt-lg-3 px-2 px-lg-4 ">
                                <span class="navbar-text font-weight-bold">Shop</span>
                            </a>
                            
                            <a href="{{URL::to('/checkout')}}" class="px-2 px-lg-4 pt-lg-3">
                                        <span class="navbar-text font-weight-bold">Checkout</span>
                                    </a>
                            <a href="{{URL::to('/show-cart')}}" class="px-2 px-lg-4 pt-lg-3">
                                <i class="icon orange fa fa-shopping-cart mr-2"></i>
                                <span class="navbar-text font-weight-bold">My Basket</span>
                                <sup class="sup-text">{{Cart::count()}}</sup>
                            </a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="section py-0">
               
                <div class="container-fluid bg-page px-lg-5">
                    <div class="row p-lg-4">
                        <div class="col">
                            <h4  class="black font-weight-bold">
                               <a class="black font-weight-bold" href="/">Home / Shop</a>
                            </h4>
                            <div class="row pt-3">
                                <div class="col-12">
                                    <!-- Tab panes -->
                                    <div class="container-fluid">
                                        <div class="row" href="#food">
                                            <div class="products">
                                                @if(isset($details))
                                                    <p>the search results for your query <b>{{ $query }} are :</b> </p>
                                                    <div class="row">
                                                        @foreach($details as $v_category_product)
                                                        <div class="col-md-2 col-sm-4 col-6">
                                                            <div class="card">
                                                                <div class="card-image">
                                                                    <a href="">
                                                                        <img src="{{URL::to($v_category_product->image)}}" alt="Rounded Image" style="height:200px; width:100%" class="img-rounded img-responsive">
                                                                    </a>
                                                                </div>
                                                                <div class="card-body px-1">
                                                                    <div class="card-description text_height">
                                                                        <h6 class="float-left font-weight-bold">{{$v_category_product->product_name}}</h6>

                                                                        <h6 class="float-right">₦ {{$v_category_product->price}}</h6>
                                                                    </div>
                                                                    <div class="col-12 pt-4 text-center px-0">
                                                                        <a href="{{URL::to('/view_product/'.$v_category_product->product_id)}}" class="float-left btn btn-sm product-text btn-product btn-block">Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    @elseif(isset($message))
                                                    <p>{{ $message }}</p>
                                                @endif
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
            <div class="col-lg-10 col-12 mr-auto ml-auto">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-12">
                                <div class="links">
                                    <img src="../frontend/img/logo.png" alt="" >
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-12">
                                <div class="links">
                                    <p class="white px-0 p-top pb-3">
                                        <i class="fa icon1 fa-map-marker"></i>
                                        <span class="font-weight-bold">Our Outlets,</span>
                                        <br/>
                                        2 Princess Awojola Shelle st, off Asanjo Way, Sangotedo Lagos
                                    </p>

                                    <p class="white text-left">
                                        Contact Us: 08180993644, 07081584664
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a class="col-12 px-0">
                                                <div class="separator"></div>
                                                <div class="subscribe-line subscribe-line-black">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="pl-0 col-md-6 col-lg-4 col-12">
                                                                <form class="">
                                                                    <div class="form-group">
                                                                        <input type="text" value="" class="form-control" placeholder="Enter your email...">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-6 col-lg-4 col-12">
                                                                <button class="btn btn-neutral btn-block btn-lg">Join Newsletter</button>
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
