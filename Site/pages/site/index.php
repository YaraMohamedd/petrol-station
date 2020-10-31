<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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

<body>

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
                <?php
                if(@$_SESSION['isactive']){
                ?>
                <li><a href="logout.php">تسجيل الخروج</a></li>
                <?php
                }
                ?>
                <?php
                if(!@$_SESSION['isactive']){
                ?>
                 <li><a href="register.php">التسجيل</a></li>
                 <li><a href="login.php">تسجيل الدخول</a></li>
                <?php
                }
                ?>
                <?php
                if(@$_SESSION['isadmin'] && @$_SESSION['isactive']){
                ?>
                <li><a href="../cpanel/dashboard-home/dashboard.php">لوحة التحكم</a></li>
                <?php
                }
                ?>
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
              <li><a href="index.php">الصفحه الرئسيه</a></li>
            </ul>
          </nav><!-- .nav-menu -->
          <a href="#about" class="get-started-btn scrollto">تصفح الان</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="text-align: right;direction: rtl">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>تجربة رقمية أفضل مع محطة الوقود</h1>
              <h2>هذه المحطه تتيح لك بعض الخدمات التي توفر عليك الوقت والمجهود</h2>
              <a href="#about" class="btn-get-started scrollto">تصفح الان</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">




    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-users-alt-4"></i>
              <span data-toggle="counter-up">244</span>
              <p>عدد المستخدمين</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-money-bag"></i>
              <span data-toggle="counter-up">521</span>
              <p>سعر الوقود</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-clock-time"></i>
              <span data-toggle="counter-up">12</span>
              <p>مواعيد العمل</p>
            </div>
          </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-clock-time"></i>
                    <span data-toggle="counter-up">12</span>
                    <p>مواعيد العمل</p>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Counts Section -->



     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up" style="text-align: right">

        <div class="section-title">
          <h2>خدماتنا</h2>
      
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-penalty-card"></i>
              <h4><a href="#">حجز بطاقة خصومات</a></h4>
              <p>كل مستخدم هيسجل بيانات معينه علشان يقدر يطلب بطاقة الخصومات وهو بيطلب هيحدد عايز يروح يستلمها من مركز معين فهيختار
                من عدة مراكز وطبعا لكل بطاقه رقم مميز
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-money-bag"></i>
              <h4><a href="#">خدمة بيع براميل الغاز والبنزين</a></h4>
              <p>المستخدم هيسجل بيانات معينه وهيختار نور البراميل الي هيحتاجها</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="icofont-car-alt-3"></i>
              <h4><a href="#">حجز براميل بنزين او غاز</a></h4>
              <p>يمكن للمستخدم ان يحجز برميل الغاز او البنزين ويستلم من المحطه</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="icofont-home"></i>
              <h4><a href="#">حجز من البيت</a></h4>
              <p>يطلب المستخدم براميل الغاز او البنزين وتوصله للبيت</p>
            </div>
          </div>
    

      </div>
    </section><!-- End Services Section -->

      <!-- ======= Three Services  ======= -->
      <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">
              <div class="row" style="direction: rtl;text-align: right">
                  <!--First Service -->
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/service4.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>خدمه رقم 3</h4>
                              <p>خدمه</p>
                              <div class="portfolio-links">
                                  <a href="assets/img/service4.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>

                              </div>
                          </div>
                      </div>
                      <div class="card-body" style="background-color:#222222; height: auto;">
                          <h5 class="card-title">خدمه 1</h5>
                          <p class="card-text" style="color: blanchedalmond; size: 30px;" >
                              خدمه خدمه خدمه خدمه خدمه خدمه    خدمه خدمه   خدمه   خدمه  خدمه
                          </p>
                          <a href="#!" class="btn btn-warning" style="color: blanchedalmond;">طلب الخدمه</a>
                          <a href="#!" class="btn btn-warning" style="color: blanchedalmond;" >عرض الطلبات</a>
                      </div>
                  </div>
                  <!--Second Service -->
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/service4.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>خدمه رقم 3</h4>
                              <p>خدمه</p>
                              <div class="portfolio-links">
                                  <a href="assets/img/service4.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>

                              </div>
                          </div>
                      </div>
                      <div class="card-body" style="background-color:#222222; height: auto;">
                          <h5 class="card-title">خدمه 1</h5>
                          <p class="card-text" style="color: blanchedalmond; size: 30px;" >
                              خدمه خدمه خدمه خدمه خدمه خدمه    خدمه خدمه   خدمه   خدمه  خدمه
                          </p>
                          <a href="#!" class="btn btn-warning" style="color: blanchedalmond;">طلب الخدمه</a>
                          <a href="#!" class="btn btn-warning" style="color: blanchedalmond;" >عرض الطلبات</a>
                      </div>
                  </div>
                  <!--Third Service -->
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/service4.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>خدمه رقم 3</h4>
                              <p>خدمه</p>
                              <div class="portfolio-links">
                                  <a href="assets/img/service4.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>

                              </div>
                          </div>
                      </div>
                      <div class="card-body" style="background-color:#222222; height: auto;">
                          <h5 class="card-title">خدمه 1</h5>
                          <p class="card-text" style="color: blanchedalmond; size: 30px;" >
                              خدمه خدمه خدمه خدمه خدمه خدمه    خدمه خدمه   خدمه   خدمه  خدمه
                          </p>
                          <a href="#!" class="btn btn-warning" style="color: blanchedalmond;">طلب الخدمه</a>
                          <a href="#!" class="btn btn-warning" style="color: blanchedalmond;" >عرض الطلبات</a>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- End Portfolio Section -->

      <!-- Petrol Stations  -->
      <section class="bg-light" id="portfolio">

        <div class="continer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" >معرض السيارات الحديثه</h2>
                    <br><br>
                </div>
            </div>
            <div class="row" style="direction: rtl">

                <?php for($i=0;$i<2;$i++){ ?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="<?php echo '#portfolioModal'. $ca['id'] ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo "assets/img/service1.jpg" ?>" alt="" style="width: 400px;height:268px;">
                        </a>
                        <div class="portfolio-caption">
                            <center>
                                <h4><?php echo "name" ?></h4>
                            </center>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

      </section>


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>اسئله متكرره</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up">

          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>تواصل معنا</h2>
         
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>العنوان</h3>
                  <p>شارع الجلاء المنصوره</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>البريد الالكتروني</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>رقم الهاتف</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">ارسال</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  <div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; Copyright <strong><span>Presento</span></strong>. كافة الحقوق محفوظه
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php foreach($cats as $ca){ ?>
    <div class="portfolio-modal modal fade" id="<?php echo 'portfolioModal'. $ca['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container" style="height:1400px;">

                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img src="img/<?php echo $ca['Image']?> " style="margin-left: 70px ;width: 500px;height: 200px">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php foreach($res as $r){?>
                            <?php if($r['type']== $ca['id']){ ?>
                                <?php  echo " <div class='col-sm-4'   >" ?>
                                <div class="card" >
                                    <div class="card-body">
                                        <img class="card-img-top" src="img/<?php echo $r['Image']; ?>" alt="Card image cap" style="height: 200px;width: 300px">

                                        <h5 class="card-title"><?php echo $r['name']; ?></h5>
                                        <p class="card-text"><?php echo $r['Details']; ?></p>
                                        <a href="<?php echo "phpFunctions/car.php?id=".$r['id']." " ?>" class="btn btn-primary">تفاصيل </a>
                                    </div>
                                </div>cars

                                <?php  echo "</div>" ?>

                            <?php  }} ?>
                    </div>
                    <button style="position: relative;top:-1500px;"class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>Back to School
                    </button>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<?php } ?>
