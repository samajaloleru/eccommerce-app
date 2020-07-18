
<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        
        <link href="{{ asset('backend/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="wrapper ">
            <div class="sidebar bg-navbar">
                <!--
                    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                    Tip 2: you can also add an image using data-image tag
                    -->
                <div class="logo text-center">
                    <img src="../frontend/img/logo.png" alt="" style="width: 100px;">
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item active ">
                            <a class="nav-link" href="{{URL::to('/dashboard')}}">
                                <i class="material-icons">dashboard</i>
                                <p> Dashboard </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/all-product')}}">
                                <i class="material-icons">dashboard</i>
                                <p>All Products</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/add-product')}}">
                                <i class="material-icons">dashboard</i>
                                <p>Add Product</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/all-slider')}}">
                                <i class="material-icons">dashboard</i>
                                <p>All Sliders</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/add-slider')}}">
                                <i class="material-icons">dashboard</i>
                                <p>Add Slider</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/manage-order')}}">
                                <i class="material-icons">dashboard</i>
                                <p>Manage Order</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:;">foodthings Mart Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <form class="navbar-form" action="{{url('/search-product')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="input-group no-border">
                                    <input type="text" name="q" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link">{{ Session::get('admin_name')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/logout')}}">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">search</i>
                                            
                                        </div>
                                        <h4 class="header font-weight-bold">Product Table</h4>
                                        <a href="{{URL::to('/all-product')}}" style="margin-top:-70px;" class="float-right btn btn-orange">Go Back</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            @if(isset($details))
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Name</th>
                                                            <th>Price</th>
                                                            <th>Category</th>
                                                            <th>Image</th>
                                                            <th>Status</th>
                                                            <th>Best Selling Status</th>
                                                            <th class="text-right">Action</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach( $details as $v_product)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$v_product->product_name}}</td>
                                                            <td>{{$v_product->price}}</td>
                                                            <td>{{$v_product->category_name}}</td>
                                                            <td>
                                                            <img src="{{URL::to($v_product->image)}}" alt="" style="height:50px; width:150px">
                                                            </td>
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
                                                            <td class="">
                                                                @if($v_product->best_status==1)
                                                                    <span class="text-success">
                                                                        Active
                                                                    </span>
                                                                @else
                                                                    <span class="text-danger">
                                                                        Unactive
                                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td class="td-actions text-right">
                                                                @if($v_product->status==1)
                                                                <a  href="{{URL::to('/unactive-product/'.$v_product->product_id)}}" class="btn btn-danger btn-link btn-sm">
                                                                    Deactivate
                                                                </a>
                                                                @else
                                                                <a  href="{{URL::to('/active-product/'.$v_product->product_id)}}" class="btn btn-success btn-link btn-sm">
                                                                    Activate
                                                                </a>
                                                                @endif
                                                                <a href="{{URL::to('/edit-product/'.$v_product->product_id)}}" rel="tooltip" class="btn btn-success">
                                                                    <i class="material-icons">edit</i>
                                                                </a>
                                                                <a href="{{URL::to('/delete-product/'.$v_product->product_id)}}" rel="tooltip" class="btn btn-danger">
                                                                    <i class="material-icons">close</i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                </table>

                                                @elseif(isset($message))
                                                    <p class="text-center">{{ $message }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright float-right">
                            &copy;
                            <script>
                            document.write(new Date().getFullYear())
                            </script>,foodthings City Center. All rights reserved.
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="/backend/js/jquery.min.js"></script>
        <script src="/backend/js/popper.min.js"></script>
        <script src="/backend/js/bootstrap-material-design.min.js"></script>
        <script src="/backend/js/perfect-scrollbar.jquery.min.js"></script>
        <script src="/backend/js/moment.min.js"></script>
        <script src="/backend/js/sweetalert2.js"></script>
        <script src="/backend/js/jquery.validate.min.js"></script>
        <script src="/backend/js/jquery.bootstrap-wizard.js"></script>
        <script src="/backend/js/bootstrap-selectpicker.js"></script>
        <script src="/backend/js/bootstrap-datetimepicker.js"></script>
        <script src="/backend/js/jquery.dataTables.min.js"></script>
        <script src="/backend/js/bootstrap-tagsinput.js"></script>
        <script src="/backend/js/jasny-bootstrap.min.js"></script>
        <script src="/backend/js/fullcalendar.min.js"></script>
        <script src="/backend/js/jquery-jvectormap.js"></script>
        <script src="/backend/js/nouislider.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <script src="/backend/js/arrive.min.js"></script>
        <script src="/backend/js/chartist.min.js"></script>
        <script src="/backend/js/bootstrap-notify.js"></script>
        <script src="/backend/js/material-dashboard.min.js"></script>

        <script>
            $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

            md.initVectorMap();

            });
        </script>
    </body>
</html>
