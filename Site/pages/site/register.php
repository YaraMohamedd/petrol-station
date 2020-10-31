<?php

require_once ('../../php/admin/register.php');
session_start();

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $state='pending';
    $image = $_POST['img1'];

    AddNewUser($name,$email,$password,$phone,$state,$image);
    header('location:empty.php?page=register');
}



?>


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

            <form class="form-container" action="register.php" method="post">
                <div class="form-group">
                    <h4 class="text-center font-weight-bold"> التسجيل  </h4>
                    <label > اسم المستخدم  </label>
                    <input type="text" class="form-control"   placeholder="قم بإدخال اسم المستخدم " name="name" required >
                </div>


                <div class="form-group">
                    <label >البريد الإلكتروني </label>
                    <input type="email" class="form-control"  placeholder="قم بإدخال البريد الإلكتروني " name="email" required>
                </div>
                <div class="form-group">
                    <label >كلمة المرور</label>
                    <input type="password" class="form-control"  placeholder="قم بإدخال كلمة المرور" name="password" required>
                </div>

                <div class="form-group">
                    <label > رقم الجوال   </label>
                    <input type="text" class="form-control"   placeholder="قم بإدخال رقم الجوال  " name="phone" required >
                </div>
                <div class="form-group">
                    <th scope="row">صورة</th>
                    <td>
                        <input type="file" class="form-control-file" id="photo1" onchange="uploadImage()" required class="btn btn-outline-primary">
                        <input type="hidden" value="" name="img1" id="img1">
                        <meter class="disk_d"  id="disk_d1"></meter>


                    </td>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="register">تسجيل </button>
                <div class="form-footer">
                    <p> تمتلك حساب بالفعل ؟ <a href="login.php">تسجيل الدخول</a></p>

                </div>
            </form>
        </section>
    </section>
</section>
<!-- Login form creation ends -->


<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

<script>
    var firebaseConfig = {
        apiKey: "AIzaSyBHbT2gERI0qaPIkZqd3C1pG-0njxhY3YY",
        authDomain: "petrolstation-a32b4.firebaseapp.com",
        databaseURL: "https://petrolstation-a32b4.firebaseio.com",
        projectId: "petrolstation-a32b4",
        storageBucket: "petrolstation-a32b4.appspot.com",
        messagingSenderId: "110917488947",
        appId: "1:110917488947:web:0e7d94d3a7a1ded704ee46"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);


    function uploadImage() {
        const ref = firebase.storage().ref('/users');
        const file = document.querySelector("#photo1").files[0];
        const name = +new Date() + "-" + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                console.log(url);
                document.querySelector("#img1").value = url;
                document.querySelector("#disk_d1").value = 1;
            })
            .catch(console.error);
    }

</script>
