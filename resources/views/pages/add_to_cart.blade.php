
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
                        <img src="../frontend/img/logo.png" alt="" style="width: 150px;">
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

        <div class="main">
            <div class="section py-0">
               
                <div class="container-fluid bg-page px-lg-5">
                    <div  class="pt-3 col-12">
                         <div class="py-2" >
                            <a href="{{URL::to('/')}}" class="btn-sm white btn bg-navbar">click to Shop More</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
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
                                                <a href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa text-danger fa-times"></i></a>
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
                                        <tr class="tr-actions">
                                            <td></td>
                                            <td colspan="3"></td>
                                            <td colspan="2" class="text-right">
                                            <?php $customer_id=Session::get('customer_id'); ?>
                                                
                                                <?php if($customer_id != NULL){?>
                                                    <a href="{{URL::to('/checkout')}}" class="btn bg-orange price-text btn-lg">Complete Purchase <i class="fa fa-chevron-right"></i></a>
                                                    
                                                <?php }else{?>
                                                    <a href="{{URL::to('/login-check')}}" class="btn bg-orange price-text btn-lg">Complete Purchase <i class="fa fa-chevron-right"></i></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
