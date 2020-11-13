<?php

require_once ('realtime.php');


function AddNewUser($name, $email, $password, $phone, $state,$image)
{
    register($name, $email, $password, $phone, $state,$image);
}