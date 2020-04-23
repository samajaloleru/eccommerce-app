
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
        <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="/frontend/css/paper-kit.css" rel="stylesheet" type="text/css" >
        <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="main">
            <div class="container">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">

                        <div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
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
                        
                        <div class="card card-register">
                            <h3 class="card-title text-white">Welcome</h3>
                            <form class="register-form" action="{{url('/login')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <label>Name</label>
                                <input type="text" class="form-control no-border" name="admin_name" placeholder="Email">
                                <label>Phone</label>
                                <input type="text" class="form-control no-border" name="admin_phone" placeholder="Email">
                                <label>Email</label>
                                <input type="email" class="form-control no-border" name="admin_email" placeholder="Email">
                                <label>Password</label>
                                <input type="password" class="form-control no-border" name="admin_password" placeholder="Password">
                                <button type="submit" class="btn btn-danger btn-block btn-round">Login</button>
                            </form>
                            <div class="forgot">
                                <a href="#paper-kit" class="btn btn-link btn-danger">Forgot password?</a>
                            </div>
                        </div>

                        <div class="text-center">
                            <h6>&copy;
                            <script>
                            document.write(new Date().getFullYear())
                            </script>, Anema City Center. All rights reserved.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
