<?php

require_once 'realtime.php';
@$PetrolStation = SelectWithNode('PetrolStation');
@$Questions = SelectWithNode('Questions');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Acquiring Oman Oil Services</title>
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
  <header id="header" class="fixed-top" style="text-align: left">
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-xl-12 d-flex align-items-center">

                  <h6 class="logo mr-auto"><a href="index.php">Oman Oil Services<span>.</span></a></h6>
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
                          <li><a href="#contact">Contact us</a></li>
                          <li><a href="#petrol">Petrol Stations</a></li>
                          <li class="drop-down"><a href="#portfolio">Services</a>
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
                          <li><a href="#services">Our Services</a></li>

                          <li><a href="index.php"> Home Page</a></li>
                      </ul>
                  </nav><!-- .nav-menu -->
                  <a href="#services" class="get-started-btn scrollto"> Explore Now </a>
              </div>
          </div>

      </div>
  </header><!-- End Header -->

  <!-- ======= Site Description Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="text-align: left;direction: ltr">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>
                  Oman Oil Company for Entertainment Services website

              </h1>
              <h2>
                  Enjoy a world of fun and interaction with the Oman Oil Services website
              </h2>
              <a href="#about" class="btn-get-started scrollto"> Explore Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">



      
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up" >

        <div class="section-title">
          <h2>Our Services</h2>
      
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-penalty-card"></i>
              <h4><a href="#"> Reserve a discount cards Srevice</a></h4>
                <p>
                    Each user will record data in order to be able to request a discount card, and he is asking for it.
                </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-money-bag"></i>
              <h4><a href="#">Selling gas and petrol barrels Service</a></h4>
              <p>
                  The user will record specific data and choose the petrol barrels drums that he needs              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="icofont-car-alt-3"></i>
              <h4><a href="#">
                      Reservation of petrol or gas barrels Service
                  </a></h4>
              <p>
                  The user can reserve a barrel of gas or gasoline and collect it from the station              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="icofont-home"></i>
              <h4><a href="#">
                      Reservation from home Service
                  </a></h4>
              <p>
                  The user requests gas or gasoline barrels and takes it home
              </p>
            </div>
          </div>
    

      </div>
    </section><!-- End Services Section -->

      <!-- ======= Three Services  ======= -->
      <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">
              <div class="row" >
                  <!--First Service -->
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap" >
                          <img src="https://firebasestorage.googleapis.com/v0/b/petrolstation-a32b4.appspot.com/o/Images%2F3dimage.png?alt=media&token=823f5953-5840-4126-bc48-2088b2692119" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>
                                  Reserve a discount cards
                              </h4>
                              <p>
                                  user will be able to reserve a discount card form his home and will feel free to ask to receive it from home or from the station                          </p>

                              </p>
                              <div class="portfolio-links">
                                  <a href="assets/img/service4.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="card-body" style="background-color:#222222; height: auto;">
                          <h5 class="card-title">
                              Reserve a discount cards
                          </h5>
                          <p class="card-text" style="color: blanchedalmond; size: 30px;" >
                              user will be able to reserve a discount card form his home and will feel free to ask to receive it from home or from the station                          </p>
                          <a href="request.php?request=card" class="btn btn-warning" style="color: blanchedalmond;"> Add Request</a>
                          <a href="viewRequests.php?request=card" class="btn btn-warning" style="color: blanchedalmond;" > View Requests</a>
                      </div>
                  </div>
                  <!--Second Service -->
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="https://firebasestorage.googleapis.com/v0/b/petrolstation-a32b4.appspot.com/o/Images%2Fface%20recoganization.jpg?alt=media&token=ca19eb26-04f1-4614-9c12-ef977b71bbf0" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>
                                  Reservation of petrol barrels                              </h4>
                              <p>
                                  user will be able to reserve any type of petrol and any amount using our system and admins will accept or refuse his request                           </p>

                              </p>
                              <div class="portfolio-links">
                                  <a href="assets/img/service4.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>

                              </div>
                          </div>
                      </div>
                      <div class="card-body" style="background-color:#222222; height: auto;">
                          <h5 class="card-title">Reservation of petrol barrels

                          </h5>
                          <p class="card-text" style="color: blanchedalmond; size: 30px;" >
                              user will be able to reserve any type of petrol and any amount using our system and admins will accept or refuse his request                           </p>
                          <a href="request.php?request=banzin" class="btn btn-warning" style="color: blanchedalmond;"> Add Request</a>
                          <a href="viewRequests.php?request=banzin" class="btn btn-warning" style="color: blanchedalmond;" > View Requests</a>
                      </div>
                  </div>
                  <!--Third Service -->
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/service4.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>
                                  Reservation of gas barrels
                              </h4>
                              <p>
                                  user will be able to reserve any type of gas and any amount using our system and admins will accept or refuse his request                           </p>

                              </p>
                              <div class="portfolio-links">
                                  <a href="assets/img/service4.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>

                              </div>
                          </div>
                      </div>
                      <div class="card-body" style="background-color:#222222; height: auto;">
                          <h5 class="card-title">

                              Reservation of gas barrels</h5>
                          <p class="card-text" style="color: blanchedalmond; size: 30px;" >
                              user will be able to reserve any type of gas and any amount using our system and admins will accept or refuse his request                           </p>
                          </p>
                          <a href="request.php?request=gaz" class="btn btn-warning" style="color: blanchedalmond;"> Add Request</a>
                          <a href="viewRequests.php?request=gaz" class="btn btn-warning" style="color: blanchedalmond;" > View Requests</a>
                      </div>
                  </div>
              </div>

          </div>
      </section><!-- End Portfolio Section -->

      <!-- Petrol Stations  -->
      <?php if(@$PetrolStation){
                if(count(@$PetrolStation) > 0){
          ?>

      <section class="bg-light" id="petrol">
        <div class="continer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" > Petrol Stations  </h2>
                    <br><br>
                </div>
            </div>
            <div class="row" style="direction: rtl">
                <?php foreach ($PetrolStation as $ca){ ?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="<?php echo '#portfolioModal'. $ca['id'] ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo $ca['image'] ?>" alt="" style="width: 400px;height:268px;">
                        </a>
                        <div class="portfolio-caption">
                            <center>
                                <h4><?php echo $ca['name'] ?></h4>
                            </center>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
      </section>
       <?php }
      }?>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions </h2>
        </div>

        <ul class="faq-list" data-aos="fade-up" style="direction: ltr;text-align: left">
            <?php if(@$Questions){
            if(count(@$Questions) > 0){
                foreach ($Questions as $q){
            ?>
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1"><?php echo $q['question']?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                  <center>
                    <?php echo $q['answer'] ?>

                </center>
              </p>
            </div>
          </li>

        <?php
                }
            }
            }
        ?>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
         
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Address</h3>
                  <p>Bawshar, Muscat, Oman</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Emails</h3>
                  <p>info@gmail.com<br>contact@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Phone Numbers</h3>
                  <p>+968 9956 7352
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="index.php" method="post">
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

              </div>

              <div class="text-center"><button  class="btn btn-warning" type="submit" name="contact">Send</button></div>
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
  <!--  <div class="copyright">
      &copy; Copyright <strong><span>Presento</span></strong>. كافة الحقوق محفوظه
    </div>-->

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
<?php foreach ($PetrolStation as $ca){ ?>
    <div class="modal fade bd-example-modal-lg" id="<?php echo 'portfolioModal'. $ca['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">



                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container" style="height:800px;width: 800px">

                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">

                                <!-- Project Details Go Here -->
                                <center>
                                    <h2><?php echo $ca['name'] ?></h2>
                                    <br>
                                    <img src="<?php echo $ca['image']?> " style="width: 500px;height: 300px">



                                </center>

                                <br>
                                <center>
                                    <h5> Station Details</h5>

                                </center>
                                <!-- Table -->
                                <table class="table table-hover" style="direction: ltr;text-align: center;width: 100%">

                                    <tbody>
                                    <tr>
                                        <th scope="row">Station Name</th>
                                        <td><?php echo $ca['name'] ?></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Station Details</th>
                                        <td><?php echo $ca['details'] ?></td>

                                    </tr>
                                    <tr>
                                        <th scope="row"> Station Address</th>
                                        <td><?php echo $ca['address'] ?></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Customer Service</th>
                                        <td><?php echo $ca['contact'] ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">  Delivery Services </th>
                                        <?php if($ca['delivery'] == '1'){?>
                                        <td><?php echo "Available" ?></td>
                                        <?php }else{ ?>
                                            <td><?php echo "Not Available" ?></td>

                                        <?php } ?>

                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End of Table -->
                            </div>
                        </div>
                    </div>

                    <button style="position: relative;top:-1500px;"class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>Back to School
                    </button>

                </div>
            </div>
        </div>
    </div>


<?php } ?>
