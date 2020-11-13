<?php

require 'realtime.php';

$users = SelectWithNode('Users','accepted');
$pending = SelectWithNode('Users','pending');
$refused = SelectWithNode('Users','refused');
$refused = SelectWithNode1('Contact');

if(isset($_POST['newState'])){
    $userId= $_POST['userId'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['phone'];
    $isAdmin = $_POST['isAdmin'];
    $image = $_POST['image'];
    $newState= $_POST['newState'];
    $state = $_POST['state'];

    AccOrRef($name,$email,$password,$phone,$state,$image,$userId,$newState,$isAdmin);
    header('location:empty.php?page=accOrRef&req='.$state.'');
}
if(isset($_POST['contact'])){
    DelOneNode('Contact',$_POST['id']);
    header('location:empty.php?page=contact');
}