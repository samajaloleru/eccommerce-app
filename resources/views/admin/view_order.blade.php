
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/../frontend/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/../frontend/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            ADMIN LOGIN
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->

        
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('backend/css/paper-kit.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <div class="logo">
                    
                    <img src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="active ">
                            <a href="{{URL::to('/dashboard')}}">
                                <i class="nc-icon nc-bank"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/all-brand')}}">
                                <i class="nc-icon nc-diamond"></i>
                                <p>All Categories</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/add-brand')}}">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>Add brand</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/all-brand')}}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>All Brands</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/add-brand')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>Add Brand</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/all-product')}}">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/add-product')}}">
                                <i class="nc-icon nc-caps-small"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="{{URL::to('/all-slider')}}">
                                <i class="nc-icon nc-spaceship"></i>
                                <p>All Slider</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="{{URL::to('/add-slider')}}">
                                <i class="nc-icon nc-spaceship"></i>
                                <p>Add Slider</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="{{URL::to('/manage-order')}}">
                                <i class="nc-icon nc-spaceship"></i>
                                <p>Manage Order</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top bg-orange">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                            </div>
                            <a class="navbar-brand" href="javascript:;">Anema Mart Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn-magnify">
                                        <p>
                                            {{ Session::get('admin_name')}}
                                        </p>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-item">
                                    <a href="{{URL::to('/logout')}}" class="nav-link btn-rotate" href="javascript:;">
                                        <i class="nc-icon nc-settings-gear-65"></i>
                                        <p>
                                            Logout
                                        </p>  
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h4 class="card-title">Customer Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Username</th>
                                                <th>Mobile</th>
                                            </thead>
                                        
                                            <tbody>
                                                <tr>
                                                    @foreach($order_by_id as $v_order)
                                                    @endforeach
                                                    <td>{{$v_order->customer_name}}</td>
                                                    <td>{{$v_order->mobile_number}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h4 class="card-title">Shipping Details</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                            <thead class=" text-primary">
                                            <th>Username</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                        </thead>
                                    
                                        <tbody>
                                            <tr>
                                                @foreach($order_by_id as $v_order)
                                                @endforeach
                                                <td>{{$v_order->shipping_firstname}}</td>
                                                <td>{{$v_order->shipping_address}}</td>
                                                <td>{{$v_order->shipping_mobile}}</td>
                                                <td>{{$v_order->shipping_email}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h5 class="card-title">Order Details</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Id</th>
                                            <th>Product Name</th>
                                            <th>Product price</th>
                                            <th>Product sales quantity</th>
                                            <th>Product sub total</th>
                                        </thead>
                                    
                                        <tbody>
                                            @foreach($order_by_id as $v_order)
                                            <tr>
                                               <td>{{$v_order->order_id}}</td> 
                                               <td>{{$v_order->product_name}}</td> 
                                               <td>{{$v_order->product_price}}</td> 
                                               <td>{{$v_order->product_sales_quantity}}</td> 
                                               <td>{{$v_order->product_price*$v_order->product_sales_quantity}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <td>Total with vat:</td> 
                                            <td></td> 
                                            <td></td> 
                                            <td></td> 
                                            <td>= ₦{{$v_order->order_total}}</td> 
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer footer-black  footer-white ">
                    <div class="container-fluid">
                    <div class="row">
                        
                        <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>, Anema City Center. All rights reserved.
                        </span>
                        </div>
                    </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="/frontend/js/jquery.min.js"></script>
        <script src="/backend/js/chartjs.min.js"></script>
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
        <script src="/frontend/js/paper-dashboard.min.js"></script>
    </body>
</html>
