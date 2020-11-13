<?php
@include_once '../../../../vendor/autoload.php';
use Kreait\Firebase\Factory;

if(isset($_POST['add'])){
    if($_GET['request'] == 'type'){
        $type = 'Types';
    }elseif ($_GET['request'] == 'amount'){
        $type = 'Amount';
    }
    $name = $_POST['name'];
    if($_GET['type'] == 'petrol'){
        $table = 'petrol';

    }elseif ($_GET['type'] == 'gaz'){
        $table = 'gaz';
    }
    Add($type,$table,$name);
    header('location:empty.php?page=addTypesAmounts&type='.$table.'&request='.$type.'');

}
function Add($table,$type,$name)
{
    if($type == 'petrol'){
        $type = 'banzin';
    }
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();

    $newPostKey = $database->getReference('PetrolStation')->push()->getKey();
    //$newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'id'=>$newPostKey,
    ];

    $Register= [
        $table.'/'.$type.'/'.$newPostKey=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);


}