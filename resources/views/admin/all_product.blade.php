
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
                            <a href="{{URL::to('/all-category')}}">
                                <i class="nc-icon nc-diamond"></i>
                                <p>All Categories</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/add-category')}}">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>Add category</p>
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
                            <a href="{{URL::to('/social')}}">
                                <i class="nc-icon nc-spaceship"></i>
                                <p>Socal Link</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="{{URL::to('/shop')}}">
                                <i class="nc-icon nc-spaceship"></i>
                                <p>Shop Name</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="{{URL::to('/delivery')}}">
                                <i class="nc-icon nc-spaceship"></i>
                                <p>Delivery Man</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
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
                            <form>
                                <div class="input-group no-border">
                                    <input type="text" name="" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="nc-icon nc-zoom-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn-magnify">
                                        <p>
                                            {{ Session::get('admin_name')}}
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-magnify" href="javascript:;">
                                        <i class="nc-icon nc-layout-11"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Stats</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="nc-icon nc-bell-55"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Some Actions</span>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product Table</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Product Name</th>
                                                <th>Category Name</th>
                                                <th>Brand Name</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th class="text-right">Action</th>
                                            </thead>
                                        @foreach( $product as $v_product)
                                            <tbody>
                                                <tr>
                                                    <td>{{$v_product->product_name}}</td>
                                                    <td>{{$v_product->category_name}}</td>
                                                    <td>{{$v_product->brand_name}}</td>
                                                    <td>{{$v_product->price}}</td>
                                                    <td><img src="{{URL::to($v_product->image)}}" alt="" style="height:50px; width:50px"></td>
                                                    <td class="">
                                                        @if($v_product->status==1)
                                                            <span class="text-success">
                                                                Active
                                                            </span>
                                                        @else
                                                            <span class="text-danger">
                                                                Unactive
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td class="text-right">
                                                        <a  href="{{URL::to('/edit-product/'.$v_product->product_id)}}" class="btn btn-success btn-link btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="{{URL::to('/delete-product/'.$v_product->product_id)}}" class="btn btn-danger btn-link btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                        </table>
                                    </div>
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

        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/js/chartjs.min.js') }}"></script>
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
        <script src="{{ asset('frontend/js/paper-dashboard.min.js') }}"></script>
    </body>
</html>
