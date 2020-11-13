<?php

@include_once '../../../vendor/autoload.php';
use Kreait\Firebase\Factory;
//Card
//1.Home
/*function AddCard($name,$id,$email,$phone,$delivery,$state,$userId,$station)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Requests')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'id'=>$id,
        'email' => $email,
        'phone' => $phone,
        'requestId' =>$newPostKey,
        'delivery'=>$delivery,
        'userId'=>$userId,
        'station'=>$station
    ];

    $userDataRequest=[
        'date'=> date("h:i:sa"),
        'state'=>0,
        'userId'=>$userId,
        'requestId'=>$newPostKey
    ];

    $Register= [
        'Requests/card/'.$state.'/'.$newPostKey=>$userData,
        'userRequests/'.$userId.'/'.'card'.$newPostKey=>$userDataRequest
    ];

    $addedDocRef= $database->getReference()->update($Register);

}
function CardServeAccOrRef($name,$id,$email,$phone,$delivery,$state,$userId,$newstate,$requestid,$station)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $requestid;
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'id'=>$id,
        'email' => $email,
        'phone' => $phone,
        'requestId' =>$newPostKey,
        'delivery'=>$delivery,
        'userId'=>$userId,
        'station'=>$station
    ];
    if($newstate == 'accepted'){
        $userDataRequest=[
            'date'=> date("h:i:sa"),
            'state'=>1,
            'userId'=>$userId,
            'requestId'=>$newPostKey
        ];
    }elseif($newstate == 'refused'){
        $userDataRequest=[
            'date'=> date("h:i:sa"),
            'state'=>1,
            'userId'=>$userId,
            'requestId'=>$newPostKey
        ];
    }
    $database->getReference('Requests/card/'.$state.'/'.$newPostKey)->remove();

    $Register= [
        'Requests/card/'.$newstate.'/'.$newPostKey=>$userData,
        'userRequests/'.$userId.'/card/'.$newPostKey=>$userDataRequest
    ];

    $addedDocRef= $database->getReference()->update($Register);



}
//غاز وبترل
function AddPetrol($name,$id,$email,$phone,$delivery,$state,$userId,$station,$type,$amount,$request)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Requests')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'id'=>$id,
        'email' => $email,
        'phone' => $phone,
        'requestId' =>$newPostKey,
        'delivery'=>$delivery,
        'userId'=>$userId,
        'station'=>$station,
        'type'=>$type,
        'amount'=>$amount
    ];

    $userDataRequest=[
        'date'=> date("h:i:sa"),
        'state'=>0,
        'userId'=>$userId,
        'requestId'=>$newPostKey
    ];

    $Register= [
        'Requests/'.$request.'/'.$state.'/'.$newPostKey=>$userData,
        'userRequests/'.$userId.'/'.$request.'/'.$newPostKey=>$userDataRequest
    ];
    $addedDocRef= $database->getReference()->update($Register);
}
function PetrolAddOrRef($name,$id,$email,$phone,$delivery,$state,$userId,$newstate,$requestid,$station,$type,$amount,$station,$request)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $requestid;
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'id'=>$id,
        'email' => $email,
        'phone' => $phone,
        'requestId' =>$newPostKey,
        'delivery'=>$delivery,
        'userId'=>$userId,
        'station'=>$station,
        'type'=>$type,
        'amount'=>$amount
    ];
    if($newstate == 'accepted'){
        $userDataRequest=[
            'date'=> date("h:i:sa"),
            'state'=>1,
            'userId'=>$userId,
            'requestId'=>$newPostKey
        ];
    }elseif($newstate == 'refused'){
        $userDataRequest=[
            'date'=> date("h:i:sa"),
            'state'=>1,
            'userId'=>$userId,
            'requestId'=>$newPostKey
        ];
    }
    $database->getReference('Requests/'.$request.'/'.$state.'/'.$newPostKey)->remove();

    $Register= [
        'Requests/'.$request.'/'.$newstate.'/'.$newPostKey=>$userData,
        'userRequests/'.$userId.'/'.$request.'/'.$newPostKey=>$userDataRequest
    ];

    $addedDocRef= $database->getReference()->update($Register);

}
//View  Part*/
function viewRequests($tablename,$request,$state){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$request.'/'.$state)->getSnapshot()->getValue();
    return $result;
}

function viewAmount($tablename,$type){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$type)->getSnapshot()->getValue();
    return $result;
}
function viewGazTypes($tablename){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}


function SelectWithNode($tablename){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}
//لكل بنزين انواع مختلفه
// 90
// 95
function AddGazTypes($name,$gazOrBanzib){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $newPostKey = $database->getReference('Requests')->push()->getKey();


    $userData = [
        'name' => $name,
        'id' => $newPostKey,
    ];

    $Register= [
        'Types/'.$gazOrBanzib.'/'.$newPostKey.'/'=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);

}
function AddGazAmount($name,$gazOrBanzib){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Amount')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name'=>$name,
        'id' => $newPostKey,
    ];


    $Register= [
        'Amount/'.$gazOrBanzib.'/'.$newPostKey.'/'=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);

}

function AddCard($name,$id,$email,$phone,$delivery,$station,$state,$userId,$reason){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Requests')->push()->getKey();
    //$newPostKey = $userid->uid;


    $userData = [
        'name' => $name,
        'id'=>$id,
        'state'=>$state,
        'email' => $email,
        'phone' => $phone,
        'requestId' =>$newPostKey,
        'delivery'=>$delivery,
        'station'=>$station,
        'userId'=>$userId,
        'time' => date("yy-m-d h:i:s"),
        'reason'=>$reason

    ];

    $userDataRequest=[
        'date'=> date("h:i:sa"),
        'state'=>$state,
        'userId'=>$userId,
        'requestId'=>$newPostKey
    ];

    $Register= [
        'Requests/card/'.$newPostKey=>$userData,
        'userRequests/'.$userId.'/'.'card/'.$newPostKey=>$userDataRequest
    ];

    $addedDocRef= $database->getReference()->update($Register);

}
function AddBanzinOrGaz($name,$id,$email,$phone,$delivery,$station,$state,$userId,$type,$amount,$banzOrGaz,$reason,$price){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Requests')->push()->getKey();
    //$newPostKey = $userid->uid;


    $userData = [
        'price'=>$price,
        'name' => $name,
        'id'=>$id,
        'state'=>$state,
        'email' => $email,
        'phone' => $phone,
        'requestId' =>$newPostKey,
        'delivery'=>$delivery,
        'station'=>$station,
        'userId'=>$userId,
        'type'=>$type,
        'amount'=>$amount,
        'time' => date("yy-m-d h:i:s"),
        'reason'=>$reason,

    ];

    $userDataRequest=[
        'date'=> date("h:i:sa"),
        'state'=>$state,
        'userId'=>$userId,
        'requestId'=>$newPostKey
    ];

    $Register= [
        'Requests/'.$banzOrGaz .'/'.$newPostKey=>$userData,
        'userRequests/'.$userId.'/'.$banzOrGaz.'/'.$newPostKey=>$userDataRequest
    ];

    $addedDocRef= $database->getReference()->update($Register);

}
