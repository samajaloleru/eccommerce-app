
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
                            <a class="nav-link" href="{{URL::to('/all-category')}}">
                                <i class="material-icons">dashboard</i>
                                <p>All Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/add-category')}}">
                                <i class="material-icons">dashboard</i>
                                <p>Add category</p>
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
                            <a class="nav-link" href="{{URL::to('/all-advert')}}">
                                <i class="material-icons">dashboard</i>
                                <p>All Adverts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/add-advert')}}">
                                <i class="material-icons">dashboard</i>
                                <p>Add Advert</p>
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
                    <div class="container-fluid">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                        <span>
                        <?php
                            $message=Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message',null);
                                }
                            ?>
                        </span>
                    </div>
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">update</i>
                                        </div>
                                        <h4 class="card-title">Edit Product</h4>
                                    </div>
                                    <div class="card-body p-5">
                                        <form action="/edit-product/<?php echo $product[0]->product_id; ?>" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Product Name</label>
                                                        <input type="text" class="form-control" name="product_name" required="" value ='<?php echo$product[0]->product_name; ?>'>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Category Name" required="" name="category_id" value ='<?php echo$product[0]->category_id; ?>'>
                                                            <option>Select Category</option>
                                                            <?php
                                                                $all_published_category=DB::table('category')
                                                                                        ->where('status',1)
                                                                                    ->get();

                                                                foreach($all_published_category as $v_category){?>
                                                                <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                                                <?php }?>    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Price</label>
                                                        <input type="number" class="form-control" name="price" required="" value ='<?php echo$product[0]->price; ?>'>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="status" value ='<?php echo$product[0]->status; ?>'>Status
                                                            <span class="form-check-sign">
                                                            <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="best_status" value ='<?php echo$product[0]->best_status; ?>'>Best Selling Status
                                                            <span class="form-check-sign">
                                                            <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Short Description</label>
                                                        <input type="text" class="form-control" name="short_description" value ='<?php echo$product[0]->short_description; ?>'>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Description</label>
                                                        <input type="text" class="form-control" name="description" value ='<?php echo$product[0]->description; ?>'>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-fill btn-success">Update</button>
                                                <button type="reset" class="btn btn-fill btn-rose">Cancel</button>
                                            </div>
                                        </form>
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
