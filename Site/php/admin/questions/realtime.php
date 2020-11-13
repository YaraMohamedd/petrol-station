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
