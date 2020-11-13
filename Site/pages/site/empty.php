<?php
session_start();
    if(isset($_GET['page'])){
        if($_GET['page'] == 'register') {
            header('location:register.php');
        }elseif ($_GET['page'] == 'contact'){
            header('location:index.php#contact');
        }
    }

    if(isset($_GET['request'])){
        if($_GET['request'] == 'card'){
            header('location:request.php?request=card');
        }elseif ($_GET['request'] == 'banzin'){
            header('location:request.php?request=banzin');
        }elseif ($_GET['request'] == 'gaz'){
            header('location:request.php?request=gaz');
        }
    }
?>