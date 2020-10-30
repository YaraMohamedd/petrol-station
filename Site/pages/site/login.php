
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
<header id="header" class="fixed-top" style="text-align: right">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.php">محطات الوقود<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block" style="width: auto;text-align: center;direction: ltr;">
                    <ul>
                        <li><a href="register.php">التسجيل</a></li>
                        <li><a href="login.php">تسجيل الدخول</a></li>
                        <li><a href="../cpanel/dashboard-home/dashboard.php">لوحة التحكم</a></li>

                        <!--
                                      <li><a href="#">تسجيل الدخول</a></li>

                                      <li><a href="../cpanel/dashboard-home/dashboard.php">لوحة التحكم</a></li>
                        -->
                        <li><a href="#contact">تواصل معنا</a></li>
                        <li><a href="#team">محطات الوقود</a></li>
                        <li><a href="#services">خدماتنا</a></li>
                        <li class="drop-down"><a href="#portfolio">الخدمات</a>
                            <ul>

                                <li class="drop-down"><a href="#">حجز بطاقة خصومات</a>
                                    <ul>
                                        <li><a href="#">طلب خدمه</a></li>
                                        <li><a href="#">عرض الطلبات</a></li>
                                    </ul>
                                </li>

                                <li class="drop-down"><a href="#">شراء براميل بنزين</a>
                                    <ul>
                                        <li><a href="#">طلب خدمه</a></li>
                                        <li><a href="#">عرض الطلبات</a></li>
                                    </ul>
                                </li>



                                <li class="drop-down"><a href="#">شراء براميل غاز</a>
                                    <ul>
                                        <li><a href="#">طلب خدمه</a></li>
                                        <li><a href="#">عرض الطلبات</a></li>
                                    </ul>
                                </li>

                                <li></li>

                            </ul>
                        </li>
                        <li><a href="#header">الصفحه الرئسيه</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
                <a href="#about" class="get-started-btn scrollto">تصفح الان</a>
            </div>
        </div>

    </div>
</header><!-- End Header -->

<section class="container-fluid" style="text-align: right;direction: rtl">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="login.php" method="post">
                <div class="form-group">
                    <h4 class="text-center font-weight-bold"> تسجيل دخول </h4>
                    <label for="InputEmail1"> البريد الإلكتروني </label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="قم بإدخال البريد الإلكتروني" name="email" required >
                </div>
                <div class="form-group">
                    <label for="InputPassword1">كلمة المرور</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="قم بإدخال كلمة المرور" name="password"required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login">تسجيل دخول</button>
                <div class="form-footer">
                    <p> نسيت كلمة المرور؟ <a href="register.php">تسجيل</a></p>

                </div>
            </form>
        </section>
    </section>
</section>
<!-- Login form creation ends -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
