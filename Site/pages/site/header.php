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
