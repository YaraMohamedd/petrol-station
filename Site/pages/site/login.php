<?php
require_once ('../../php/admin/login.php');

if(isset($_POST['login'])){
    login('email','password','login');
}

?>
<!-- Login form creation starts-->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Petrol Station</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Presento - v1.0.0
    * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- ======= Header ======= -->
<header id="header" class="fixed-top" style="text-align: left">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <h3 class="logo mr-auto"><a href="index.php"> Petrol Stations<span>.</span></a></h3>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block" style="width: auto;text-align: left;direction: ltr;">
                    <ul>
                        <?php
                        if(@$_SESSION['isactive']){
                            ?>
                            <li><a href="logout.php"> Sign out</a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if(!@$_SESSION['isactive']){
                            ?>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php"> Login</a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if(@$_SESSION['isadmin'] && @$_SESSION['isactive']){
                            ?>
                            <li><a href="../cpanel/dashboard-home/dashboard.php">Cpanel</a></li>
                            <?php
                        }
                        ?>
                        <!--
                                      <li><a href="#">تسجيل الدخول</a></li>
                                      <li><a href="../cpanel/dashboard-home/dashboard.php">لوحة التحكم</a></li>
                        -->
                        <li><a href="index.php#contact">Contact us</a></li>
                        <li><a href="index.php#petrol">Petrol Stations</a></li>
                        <li class="drop-down"><a href="index.php#portfolio">Services</a>
                            <ul>

                                <li class="drop-down"><a href="request.php?request=card">Reserve a discount cards</a>
                                    <ul>
                                        <li><a href="request.php?request=card">Add Request</a></li>
                                        <li><a href="viewRequests.php?request=card">View Requests</a></li>
                                    </ul>
                                </li>

                                <li class="drop-down"><a href="request.php?request=banzin">Reservation of petrol barrels</a>
                                    <ul>
                                        <li><a href="request.php?request=banzin">Add Request</a></li>
                                        <li><a href="viewRequests.php?request=banzin">View Requests</a></li>
                                    </ul>
                                </li>



                                <li class="drop-down"><a href="request.php?request=gaz">Reservation of gas barrels</a>
                                    <ul>
                                        <li><a href="request.php?request=gaz">Add Request</a></li>
                                        <li><a href="viewRequests.php?request=gaz">View Requests</a></li>
                                    </ul>
                                </li>

                                <li></li>

                            </ul>
                        </li>
                        <li><a href="index.php#services">Our Services</a></li>

                        <li><a href="index.php"> Home Page</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
                <a href="index.php#services" class="get-started-btn scrollto"> Explore Now </a>
            </div>
        </div>

    </div>
</header><!-- End Header -->

<section class="container-fluid" style="text-align: left;direction: rtl">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="container-fluid" style="text-align: center;direction: rtl;background:#222222" >
        <img  style="width:300px;margin-top:20px;align-terms:center;margin-right:800px;margin-top:60px"src="assets/img/image.svg">
        <!-- row and justify-content-center class is used to place the form in center -->
        <section  class="row justify-content-center">
            <section   class="col-12 col-sm-6 col-md-4">
                <form  style="background:#F2AB04;height:500px; border-bottom-left-radius: 12px;border-top-left-radius: 12px;border-top-right-radius: 12px;border-bottom-right-radius: 12px" class="form-container" action="login.php" method="post">
                    <img style="height:100px; align-items: center" src="assets/img/avatar.svg" >
                    <div class="form-group">
                        <h4   style="color:#ffffff" class="text-center font-weight-bold"> Login Form  </h4>
                        <label  style="color:#ffffff;margin-right: 250px" for="InputEmail1"> Email </label>
                        <input style="margin-right:60px; width:300px;text-align: left" type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Please Enter your Email" name="email" required >
                    </div>
                    <div class="form-group">
                        <label  style="color:#ffffff;margin-right: 250px" for="InputPassword1"> Password</label>
                        <input style="margin-right:60px; width:300px;text-align: left " type="password" class="form-control" id="InputPassword1" placeholder="Please Enter your password" name="password"required>
                    </div>
                    <button  style="margin-top:30px;margin-right:60px; width:300px;background:#222222;color:blanchedalmond;border-color:#222222;border-bottom-left-radius: 12px;border-top-left-radius: 12px;border-top-right-radius: 12px;border-bottom-right-radius: 12px"type="submit" class="btn btn-primary btn-block" name="login"> Login</button>
                    <div class="form-footer">
                        <p  style="color:#ffffff;margin-top:12px">You Don't Have an account? <a  style="color:#222222"href="register.php">Register</a></p>

                    </div>
                </form>
            </section>
        </section>
    </section>
</section>
<!-- Login form creation ends -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
