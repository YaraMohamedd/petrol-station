<?php
    if(isset($_GET['page'])){
        if($_GET['page'] == 'register') {
            header('location:register.php');
        }
    }
?>