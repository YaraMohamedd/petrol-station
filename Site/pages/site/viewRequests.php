<?php
require_once ('../../php/admin/request.php');
session_start();
if(@$_SESSION['isactive']){
    if(isset($_GET['request'] )){
        if($_GET['request'] == 'card'){
           $requests = viewAmount('Requests','card');
        }elseif ($_GET['request'] == 'banzin') {
            $requests = viewAmount('Requests', 'banzin');
        }elseif ($_GET['request'] == 'gaz') {
            $requests = viewAmount('Requests', 'gaz');
        }
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
<?php require 'header.php'?>
<section class="container-fluid" style="text-align: right;direction: rtl">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
        <section class="col-9 col-sm-9 col-md-9">
<?php if(@count(@$requests) > 0){ ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Request Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">State</th>
                    <th scope="col">Reason</th>

                </tr>
                </thead>
                <tbody>
                <?php
                    $count = 0;
                foreach ($requests as $r){
                    $count++;
                    ?>
                <tr>
                    <th scope="row"><?php echo $count?></th>
                    <td><?php echo $r['requestId']?></td>
                    <td><?php echo $r['time']?></td>
                    <td><?php
                        if($r['state'] == 1){
                        echo 'accepted'?>
                    <?php
                        }elseif ($r['state'] == 2){
                    echo 'pending'?>
                        <?php
                    }elseif ($r['state'] == 0){
                            echo 'refused';
                        }
                  ?>
                        </td>


                    <?php
                    if($r['reason'] != ''){ ?>
                        <td><?php echo $r['reason']?></td>
                 <?php  }else{ ?>

                        <td><?php echo 'Under review'?></td>
                    <?php } ?>
                </tr>
                <?php } ?>

                </tbody>
            </table>
            <?php }else{ ?>
                <center>There is no requests yet</center>
            <?php } ?>
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
<?php
}
?>