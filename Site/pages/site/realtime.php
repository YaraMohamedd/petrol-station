<?php
session_start();
@include_once '../../../vendor/autoload.php';

use Kreait\Firebase\Factory;




function SelectWithNode($tablename){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}
function Contact($name,$email,$title,$message,$userId){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Amount')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name'=>$name,
        'email' => $email,
        'message'=>$message,
        'title'=>$title,
        'userId'=>$userId,
        'date'=> date("h:i:sa"),
        'id'=>$newPostKey
    ];


    $Register= [
        'Contact/'.$newPostKey.'/'=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);

}
if(isset($_POST['contact'])){
    if(@$_SESSION['isactive']) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $id =  $_SESSION['userId'];

        Contact($name,$email,$subject,$message,$id);
        header('location:empty.php?page=contact');

    }else{
        header('location:login.php');
    }

}