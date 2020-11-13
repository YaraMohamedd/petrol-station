<?php
@include_once '../../../../vendor/autoload.php';
use Kreait\Firebase\Factory;

function SelectWithNode($tablename,$state){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$state)->getSnapshot()->getValue();
    return $result;
}


function SelectWithNode1($tablename){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
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
function AccOrRef($name,$email,$password,$phone,$state,$image,$id,$newState,$isAdmin)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $id;
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId' =>$newPostKey,
        'image'=>$image,
        'isAdmin'=>$isAdmin
    ];

    $database->getReference('Users/'.$state.'/'.$newPostKey)->remove();
    $Register= [
        'Users/'.$newState.'/'.$newPostKey=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);





}
function DelOneNode($nodeName,$id){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $database->getReference($nodeName.'/'.$id)->remove();
}

