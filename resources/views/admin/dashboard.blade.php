
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
                    <img src="../frontend/img/logo.png" alt="" >
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
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a class="card card-stats" href="{{URL::to('/add-product')}}">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                    <i class="material-icons">create</i>
                                    </div>
                                    <p class="card-category">Click to add</p>
                                    <h3 class="card-title">Product</h3>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a class="card card-stats" href="{{URL::to('/all-product')}}">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">visibility</i>
                                    </div>
                                    <p class="card-category">click to view</p>
                                    <h3 class="card-title">Product</h3>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a class="card card-stats" href="{{URL::to('/manage-order')}}">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">visibility</i>
                                    </div>
                                    <p class="card-category">Click to view </p>
                                    <h3 class="card-title">Order Made</h3>
                                </div>
                            </a>
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
