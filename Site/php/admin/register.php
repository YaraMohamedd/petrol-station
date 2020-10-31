<?php

require_once ('realtime.php');
$_SESSION['userId']='';

function AddNewUser($name, $email, $password, $phone, $state,$image)
{
    register($name, $email, $password, $phone, $state,$image);
}