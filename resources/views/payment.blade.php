
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
            <nav class="navbar navbar-expand-lg pt-0 bg-navbar">
                <div class="container">
                    <a  href="/" class="navbar-brand mb-0">
                        <img src="../frontend/img/logo.png" alt="" style="width: 100px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <form action="{{url('/search')}}" method="POST" class="form-inline">
                                {{ csrf_field() }}
                                <input class="form-control mr-sm-2 no-border" name="q" type="text" placeholder="Search">
                                <button type="submit" class="btn btn-primary btn-just-icon"><i class="nc-icon icon1 nc-zoom-split"></i></button>
                            </form>

                            <a href="/" class="pt-lg-3 px-2 px-lg-4 ">
                                <span class="navbar-text font-weight-bold">Shop</span>
                            </a>
                            
                            <a href="{{URL::to('/checkout')}}" class="px-2 px-lg-4 pt-lg-3">
                                        <span class="navbar-text font-weight-bold">Checkout</span>
                                    </a>
                            <a href="{{URL::to('/show-cart')}}" class="px-2 px-lg-4 pt-lg-3">
                                <i class="icon white fa fa-shopping-cart mr-2"></i>
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
               
                <div class="container py-5 bg-page px-lg-5">
                    <div class="row p-0">
                        <div class="col-12 ml-auto mr-auto">
                            <h4 class="header font-weight-bold">Shopping Cart Table</h4>
                            <div class="table-responsive">
                                <?php
                                    $contents=Cart::content();
                                    
                                ?>
                                <table class="table table-shopping">
                                    <thead>
                                        <tr>
                                            <th class="table-header text-center">Image</th>
                                            <th class="table-header">Name</th>
                                            <th class="table-header text-right">Price</th>
                                            <th class="table-header text-right">Quantity</th>
                                            <th class="table-header text-right">Total</th>
                                            <th class="table-header text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php foreach($contents as $v_contents){?>
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="{{URL::to($v_contents->options->image)}}">
                                                </div>
                                            </td>
                                            <td class="td-product">
                                                <strong>{{$v_contents->name}}</strong>
                                            </td>
                                            <td class="td-price">
                                                <small>₦</small>{{$v_contents->price}}
                                            </td>
                                            <td class="td-number">
                                                <div class="btn-group pl-3">
                                                    <form action="{{url('/update-cart')}}" method="post">
                                                    {{ csrf_field() }}
                                                        <input type="number" autocomplete="off" class="text-center" style="width:30px" name="qty" value="{{$v_contents->qty}}">
                                                        <input type="hidden" name="rowId" value="{{$v_contents->rowId}}">
                                                        <input type="submit" name="submit" value="update">
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="td-number td-quantity">
                                                <small>₦</small>{{$v_contents->total}}
                                            </td>
                                            <td class="td-number">
                                                <a href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                            <td class="td-total">
                                                Sub Total
                                            </td>
                                            <td class="td-total">
                                                <small>₦</small>{{Cart::subtotal()}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                            <td class="td-total">
                                                Tax
                                            </td>
                                            <td class="td-total">
                                                <small>₦</small>{{Cart::tax()}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                            <td class="td-total">
                                                Total
                                            </td>
                                            <td class="td-total">
                                                <small>₦</small>{{Cart::total()}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-8 pt-3 mr-auto">
                            <div class="col-12 pl-0 bg-page">
                                <h5 class="black py-2">Payment method</h5>
                            </div>
                            <form action="{{url('/order-place')}}"  method="post">
                                {{ csrf_field() }}
                
                                <div class="form-group">
                                    <label class="pr-3">Hand Cash</label>
                                    <input type="radio" placeholder="Email" required name="payment_method" value="handcash"/>
                                </div>
                                <div class="col-lg-2 col-md-4 col-12 pl-0">
                                    <button type="submit" class="btn price-text bg-orange btn-sm btn-block">Done</button>
                                </div>
                            </form>
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
                                    <img src="../frontend/img/logo.png" alt="" style="width: 100px;">
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-12">
                                <div class="links">
                                    <p class="white text-left p-top pb-3">
                                        Contact: 08180993644, 07081584664
                                    </p>
                                    <p class="white px-0">
                                        <i class="fa icon1 fa-map-marker"></i>
                                        <span class="font-weight-bold">Our Outlets,</span>
                                        <br/>
                                        2 Princess Awojola Shelle st, off Asanjo Way, Sangotedo Lagos
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a class="col-12 px-0">
                                                <h4>Contact Us</h4>
                                                <div class="separator"></div>
                                                <div class="subscribe-line subscribe-line-black">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="pl-0 col-md-6 col-12">
                                                                <form class="">
                                                                    <div class="form-group">
                                                                        <input type="text" value="" class="form-control" placeholder="Enter your email...">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-6 col-12">
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
