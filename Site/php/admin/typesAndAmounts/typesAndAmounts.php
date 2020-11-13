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