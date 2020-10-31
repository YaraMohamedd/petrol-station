<?php
require_once '../../../vendor/autoload.php';
use Kreait\Firebase\Factory;




function SelectWithNode($tablename,$state){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$state)->getSnapshot()->getValue();
    return $result;
}
function register($name,$email,$password,$phone,$state,$image)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Users')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId' =>$newPostKey,
        'image'=>$image,
        'isAdmin'=>0
    ];

    $Register= [
        'Users/'.$state.'/'.$newPostKey=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);





}
//register('mohamed','mohamed@yahoo.com','123123','123123','pending');
function userAccOrRef($name,$email,$password,$phone,$oldState,$newState,$uid)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $uid;
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId' =>$newPostKey,
        'image'=>'',
    ];

    $database->getReference('Users/'.$oldState.'/'.$newPostKey)->remove();

    $Register= [
        'Users/'.$newState.'/'.$newPostKey=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);





}
//userAccOrRef('mohamed','mohamed@yahoo.com','111111111','123123','accepted','accepted','-ML-W4O2NDCvt4KCd8yj');
