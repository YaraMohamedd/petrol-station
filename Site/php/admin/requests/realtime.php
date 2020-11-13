<?php
@include_once '../../../../vendor/autoload.php';
use Kreait\Firebase\Factory;
function SelectNode($tablename){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}

function SelectWithNode($tablename,$state){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$state)->getSnapshot()->getValue();
    return $result;
}
function AddPetrolStation($name,$details,$address,$contact,$delivery,$image)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('PetrolStation')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'details' => $details,
        'address' => $address,
        'contact' => $contact,
        'delivery' =>$delivery,
        'image'=>$image,
        'id'=>$newPostKey
    ];

    $Register= [
        'PetrolStation/'.$newPostKey.'/'=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);


}
//AddPetrolStation('p1','p1 details','damanhour',123123,0,'111');*/

function AddQuestion($question,$answer)
{
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('Questions')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'question' => $question,
        'answer' => $answer,
        'id'=>$newPostKey
    ];

    $Register= [
        'Questions/'.$newPostKey.'/'=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);


}

function DelOneNode($nodeName,$id){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $database->getReference($nodeName.'/'.$id)->remove();
}
function DelTwoNode($nodeName,$node2Name,$id){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $database->getReference($nodeName.'/'.$node2Name.'/'.$id)->remove();
}

function SelectPetrolWithId($tablename,$id){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$id)->getSnapshot()->getValue();
    return $result['name'];
}

function ModifyCard($name,$id,$email,$phone,$delivery,$station,$state,$userId,$reason,$requestId){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey =$requestId;
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
function ModifyBanzinOrGaz($name,$id,$email,$phone,$delivery,$station,$state,$userId,$type,$amount,$banzOrGaz,$reason,$requestId){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $requestId;
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
