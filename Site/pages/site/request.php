<?php
require_once ('../../php/admin/request.php');
session_start();
if(@$_SESSION['isactive']){

    @$petrolStations = SelectWithNode('PetrolStation');

    if($_GET['request'] == 'banzin') {
        @$Amount = viewAmount('Amount','banzin');
        @$gazTypes = viewAmount('Types','banzin');
    }elseif ($_GET['request'] == 'gaz'){
        @$Amount = viewAmount('Amount','gaz');
        @$gazTypes = viewAmount('Types','gaz');
    }


   if(isset($_POST['request'])){
    if($_GET['request'] == 'card') {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $delivery = $_POST['delivery'];
        $station = $_POST['station'];
        $state = 2;
        $userId = $_SESSION['userId'];
        $reason='';
        AddCard($name, $id, $email, $phone, $delivery, $station, $state, $userId,$reason);
        header('location:empty.php?request=card');
    }elseif($_GET['request'] == 'banzin'){

        $name = $_POST['name'];
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $price = $_POST['price'];
        $delivery = $_POST['delivery'];
        $station = $_POST['station'];
        $type=$_POST['type'];
        $amount =$_POST['amount'];
        $reason='';

        $state = 2;
        $userId = $_SESSION['userId'];
        AddBanzinOrGaz($name, $id, $email, $phone, $delivery, $station, $state, $userId,$type,$amount,'banzin',$reason,$price);
        header('location:empty.php?request=banzin');
    }elseif ($_GET['request'] == 'gaz'){

        $name = $_POST['name'];
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $price = $_POST['price'];
        $delivery = $_POST['delivery'];
        $station = $_POST['station'];
        $type=$_POST['type'];
        $amount =$_POST['amount'];
        $reason='';
        $state = 2;
        $userId = $_SESSION['userId'];
        AddBanzinOrGaz($name, $id, $email, $phone, $delivery, $station, $state, $userId,$type,$amount,'gaz',$reason,$price);
        header('location:empty.php?request=banzin');
    }
}



?>


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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- ======= Header ======= -->
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



<section class="container-fluid" style="text-align: left;direction: ltr">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <?php if(isset($_GET['request'])) { ?>
            <?php if($_GET['request'] == 'card'){ ?>
                    <form class="form-container" action="request.php?request=card" method="post">
                <div class="form-group">
                    <h4 class="text-center font-weight-bold"> Reserve a discount card</h4>
                    <label >  User Name  </label>
                    <input type="text" class="form-control"   placeholder="Please Enter your  name " name="name" required >
                </div>
                <div class="form-group">
                    <label >Id</label>
                    <input type="text" class="form-control"   placeholder="Please Enter your id " name="id" required >
                </div>

                <div class="form-group">
                    <label > Email </label>
                    <input type="email" class="form-control"  placeholder="Please Enter your email" name="email" required>
                </div>

                <div class="form-group">
                    <label >  Phone   </label>
                    <input type="number" class="form-control"   placeholder="Please Enter your phone number" name="phone" required >
                </div>
                <div class="form-group">
                    <label >Select The Station  </label>

                    <select name="station" class="form-control" id="qtype">
                        <option  selected>Select The Station  </option>
                        <?php
                             if(count(@$petrolStations) > 0){
                                foreach($petrolStations as $p){ ?>
                            <option value="<?php echo $p['id']?>"><?php echo $p['name']?></option>
                                <?php }
                            }else{
                                echo "There is no stations yet";
                            }?>
                    </select>

                </div>
                <div class="form-group">
                    <label >Delivery method</label>

                        <select name="delivery" class="form-control" >
                            <option  selected>Select your delivery method</option>
                            <option value="home">Home delivery</option>
                            <option value="serve">Reservation from one of our stations</option>

                        </select>
                </div>

                <button type="submit" class="btn btn-warning btn-block" name="request">book </button>

            </form>
            <?php }else if($_GET['request'] == 'banzin'){ ?>
                    <form class="form-container" action="request.php?request=banzin" method="post">
                        <div class="form-group">
                            <h4 class="text-center font-weight-bold">   banzin containers</h4>
                            <label >  User Name  </label>
                            <input type="text" class="form-control"   placeholder="Please Enter your  name " name="name" required >
                        </div>
                        <div class="form-group">
                            <label >Id</label>
                            <input type="text" class="form-control"   placeholder="Please Enter your id " name="id" required >
                        </div>

                        <div class="form-group">
                            <label > Email </label>
                            <input type="email" class="form-control"  placeholder="Please Enter your email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label >  Phone   </label>
                            <input type="number" class="form-control"   placeholder="Please Enter your phone number" name="phone" required >
                        </div>
                        <div class="form-group">
                            <label >Select The Station  </label>
                            <select name="station" class="form-control" id="qtype">
                                <option  selected>Select The Station  </option>
                                <?php
                                if(count(@$petrolStations) > 0){
                                    foreach($petrolStations as $p){ ?>
                                        <option value="<?php echo $p['id']?>"><?php echo $p['name']?></option>
                                    <?php }
                                }else{
                                    echo "There is no stations yet";
                                }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Delivery method</label>

                            <select name="delivery" class="form-control" >
                                <option  selected>Select your delivery method</option>
                                <option value="home">Home delivery</option>
                                <option value="serve">Reservation from one of our stations</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label >Select banzin type  </label>

                            <select name="type" class="form-control" id="type">
                                <option  selected>Select banzin type  </option>
                                <?php
                                if(count(@$gazTypes) > 0){
                                    foreach($gazTypes as $p){ ?>
                                        <option value="<?php echo $p['name']?>"><?php echo $p['name']?></option>
                                    <?php }
                                }else{
                                    echo "There is no banzin types yet";
                                }?>
                            </select>

                        </div>

                        <div class="form-group">
                            <label >Select banizn amount </label>

                            <select name="amount" class="form-control" id="amount"  onchange="CalaPrice()">
                                <option  selected>Select The Station  </option>
                                <?php
                                if(count(@$Amount) > 0){
                                    foreach($Amount as $p){ ?>
                                        <option value="<?php echo $p['name']?>"><?php echo $p['name']?></option>
                                    <?php }
                                }else{
                                    echo "There is no amounts yet";
                                }?>
                            </select>

                        </div>
                        <div class="form-group" style="display: none" id="amountDiv">
                            <label >  Amount   </label>
                            <input type="number" class="form-control"   name="amountPerOne"  id="amountPerOne" required onchange="ChangeAmount()">
                        </div>
                        <div class="form-group" style="display: none" id="priceDiv">
                            <label >  Price   </label>
                            <input type="number" class="form-control"   name="price"  id="price" required >
                        </div>


                        <button type="submit" class="btn btn-warning btn-block" name="request">book </button>

                    </form>
                <?php }elseif($_GET['request'] == 'gaz'){ ?>
                    <form class="form-container" action="request.php?request=gaz" method="post">
                        <div class="form-group">
                            <h4 class="text-center font-weight-bold">   gaz containers</h4>
                            <label >  User Name  </label>
                            <input type="text" class="form-control"   placeholder="Please Enter your  name " name="name" required >
                        </div>
                        <div class="form-group">
                            <label >Id</label>
                            <input type="text" class="form-control"   placeholder="Please Enter your id " name="id" required >
                        </div>

                        <div class="form-group">
                            <label > Email </label>
                            <input type="email" class="form-control"  placeholder="Please Enter your email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label >  Phone   </label>
                            <input type="number" class="form-control"   placeholder="Please Enter your phone number" name="phone" required >
                        </div>
                        <div class="form-group">
                            <label >Select The Station  </label>

                            <select name="station" class="form-control" id="qtype">
                                <option  selected>Select The Station  </option>
                                <?php
                                if(count(@$petrolStations) > 0){
                                    foreach($petrolStations as $p){ ?>
                                        <option value="<?php echo $p['id']?>"><?php echo $p['name']?></option>
                                    <?php }
                                }else{
                                    echo "There is no stations yet";
                                }?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label >Delivery method</label>

                            <select name="delivery" class="form-control" >
                                <option  selected>Select your delivery method</option>
                                <option value="home">Home delivery</option>
                                <option value="serve">Reservation from one of our stations</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label >Select gaz type  </label>

                            <select name="type" class="form-control" id="type">
                                <option  selected>Select gaz type  </option>
                                <?php
                                if(count(@$gazTypes) > 0){
                                    foreach($gazTypes as $p){ ?>
                                        <option value="<?php echo $p['name']?>"><?php echo $p['name']?></option>
                                    <?php }
                                }else{
                                    echo "There is no banzin types yet";
                                }?>
                            </select>

                        </div>

                        <div class="form-group">
                            <label >Select gaz amount </label>

                            <select name="amount" class="form-control" id="amount" onchange="CalaPrice()">
                                <option  selected>Select gaz amount  </option>
                                <?php
                                if(count(@$Amount) > 0){
                                    foreach($Amount as $p){ ?>
                                        <option value="<?php echo $p['name']?>"><?php echo $p['name']?></option>
                                    <?php }
                                }else{
                                    echo "There is no amounts yet";
                                }?>
                            </select>

                        </div>


                        <div class="form-group" style="display: none" id="amountDiv">
                            <label >  Amount   </label>
                            <input type="number" class="form-control"   name="amountPerOne"  id="amountPerOne" required onchange="ChangeAmount()">
                        </div>

                        <div class="form-group" style="display: none" id="priceDiv">
                            <label >  Price   </label>
                            <input type="number" class="form-control"   name="price"  id="price" required >
                        </div>

                        <button type="submit" class="btn btn-warning btn-block" name="request">book </button>

                    </form>
            <?php }
            } ?>
        </section>
    </section>
</section>
<!-- Login form creation ends -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#qtype').change(function(){
            var question = $(this).val();
            $.ajax({
                url:"../fetch/requests/card.php",
                method:"POST",
                data:{Question:question},
                dataType:"text",
                success:function(data){
                    $('#qspace').html(data);
                }
            });
        });
    });

</script>
<script>

    function CalaPrice() {
        var type =  document.getElementById('type').value;
        var amount = document.getElementById('amount').value;
        document.getElementById('amountDiv').style.display ='block';
        document.getElementById('priceDiv').style.display ='block';
        document.getElementById('amountPerOne').value =1;

        if(type === "90"){
         if(amount ==="quarter container"){
             document.getElementById('price').value =2;
         }else if(amount ==="full container"){
             document.getElementById('price').value =4;
         }else if(amount ==="half container"){
             document.getElementById('price').value =8;
         }
        }else if(type === "95"){
            if(amount ==="quarter container"){
                document.getElementById('price').value =2.5;
            }else if(amount ==="full container"){
                document.getElementById('price').value =5;
            }else if(amount ==="half container"){
                document.getElementById('price').value =10;
            }
        }else if(type === "98"){
            if(amount ==="quarter container"){
                document.getElementById('price').value =3.5;
            }else if(amount ==="full container"){
                document.getElementById('price').value =7.5;
            }else if(amount ==="half container"){
                document.getElementById('price').value =13;
            }
        }else if(type === "Nitrogen"){
            if(amount ==="Liter"){
                document.getElementById('price').value =2.5;
            }
        }else if(type === "Normal Air"){
            if(amount ==="Liter"){
                document.getElementById('price').value =2;
            }
        }
    }

    function ChangeAmount(){
        var val= parseFloat(document.getElementById('amountPerOne').value) ;
        var lastVal =parseFloat(document.getElementById('price').value);
        document.getElementById('price').value = val * lastVal;

    }


</script>
<?php
}else{
    header('location:login.php');
}
?>