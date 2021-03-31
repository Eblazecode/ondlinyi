<?php
error_reporting(0);
include ('includes/config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $email= mysqli_escape_string($connection, $_POST['email']);
    $password= mysqli_escape_string($connection, $_POST['pass']);


    $query = mysqli_query ($connection, "SELECT * FROM staffdb
WHERE email='$email' && password='$password'");
    $result = mysqli_fetch_array($query);
    if ($result > 0) {
        $_SESSION['id'] = $result['oventid'];
        $_SESSION['category'] = $result['Designation'];
        $_SESSION['firstname'] = $result['Name'];





        header('location:APP/Dashboard.php');
    }
    else {


        $msg = " <div class=\"alert alert-danger alert-has-icon\">
                      <div class=\"alert-icon\"><i class=\"far fa-lightbulb\"></i></div>
                      <div class=\"alert-body\">
                        <div class=\"alert-title\">ERROR !</div>
                    password or email is not correct
                      </div>
                    </div> ";

    }

    $connection->close();
}


?>


    <!DOCTYPE html>
<html lang="en">


<!-- auth-login.php  21 Nov 2019 03:49:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>OIF </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href=" {{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='' />
</head>

<body >
<div class="loader"></div>
<div id="app" >
    <section class="section" >
        <div class="container mt-5" >
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 pt-3" style="background-color: white">

                    <div class="card">
                        <div class="card-header offset-lg-5">

                            <img alt="image" src="../Admin/APP/assets/oiflogo.png"
                                 class="header-logo" width="200px"/>



                        </div>
                        <div class="container-fluid mt-1 offset-lg-1">

                            <p>
                                Ondo-Linyl industrial Hub consolidated Revenue Reciept Application</p>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="assets/img/redtruck.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/img/mdf.jpg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/img/cassava.jpg" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div style="background-color: white"  class=" pt-3 col-12 col-sm-12 offset-sm-2 col-md-6
                 col-lg-6  col-xl-4 ">
                    <div class="card card-primary">

                        <div class="card-header ">
                            <h5>LOGIN</h5>

                            <span> <img src=""
                                        width="150px" class="" alt="">  </span><br>

                        </div>
                        <div class="card-body">
                            <p><?php
                                if($msg){
                                    echo $msg;
                                }

                                ?></p>
                            <form method="POST"  class="needs-validation" novalidate="">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control"
                                           name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <input id="password" type="password" class="form-control"
                                               name="pass" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>

                                    </div>

                                    <div class="float-right">
                                        <a href="../Admin/AUTH/auth-forgot-password.php" class="text-small">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">Don't have an account?  <a href="AUTH/signup.blade.php">Create One</a></div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src={{asset("assets/js/app.min.js")}}></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="{{asset("assets/js/scripts.js")}}"></script>
<!-- Custom JS File -->
<script src="{{asset("assets/js/custom.js")}}"></script>
</body>


<!-- auth-login.php  21 Nov 2019 03:49:32 GMT -->
</html>
