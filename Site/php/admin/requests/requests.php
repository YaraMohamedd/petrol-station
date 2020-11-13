<?php
require_once 'realtime.php';
//$PetrolName = SelectPetrolWithId('PetrolStation','-ML563EhXikIB01aqHdx');
if(isset($_GET['request'])) {
    if($_GET['request'] =='petrol') {
        $ViewRequests = SelectWithNode('Requests', 'banzin');
    }elseif ($_GET['request'] =='gaz') {
        $ViewRequests = SelectWithNode('Requests', 'gaz');
    }elseif ($_GET['request'] =='card') {
        $ViewRequests = SelectWithNode('Requests', 'card');
    }

    if (isset($_POST['add'])) {
        if ($_GET['request'] == 'petrol') {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $delivery = $_POST['delivery'];
            $station = $_POST['station'];
            $userId = $_POST['userId'];
            $type = $_POST['type'];
            $amount = $_POST['amount'];
            $banzOrGaz = 'banzin';
            $reason = $_POST['reason'];
            $requestId = $_POST['requestId'];

            if($_POST['add'] == 'pending'){
                $state = 2;
            } elseif ($_POST['add'] == 'accepted'){
                $state = 1;
            } elseif ($_POST['add'] == 'refused'){
                $state = 0;
            }

            ModifyBanzinOrGaz($name, $id, $email, $phone, $delivery, $station, $state, $userId, $type, $amount, $banzOrGaz, $reason, $requestId);
            echo "<meta http-equiv='refresh' content='0'>";

        }  elseif ($_GET['request'] == 'gaz') {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $delivery = $_POST['delivery'];
            $station = $_POST['station'];
            $userId = $_POST['userId'];
            $type = $_POST['type'];
            $amount = $_POST['amount'];
            $banzOrGaz = 'gaz';
            $reason = $_POST['reason'];
            $requestId = $_POST['requestId'];

            if($_POST['add'] == 'pending'){
                $state = 2;
            } elseif ($_POST['add'] == 'accepted'){
                $state = 1;
            } elseif ($_POST['add'] == 'refused'){
                $state = 0;
            }
            ModifyBanzinOrGaz($name, $id, $email, $phone, $delivery, $station, $state, $userId, $type, $amount, $banzOrGaz, $reason, $requestId);
            echo "<meta http-equiv='refresh' content='0'>";

        }
        elseif ($_GET['request'] == 'card') {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $delivery = $_POST['delivery'];
            $station = $_POST['station'];
            $userId = $_POST['userId'];
            $banzOrGaz = 'card';
            $reason = $_POST['reason'];
            $requestId = $_POST['requestId'];
            $type ='';
            $amount='';

            if($_POST['add'] == 'pending'){
                $state = 2;
            } elseif ($_POST['add'] == 'accepted'){
                $state = 1;
            } elseif ($_POST['add'] == 'refused'){
                $state = 0;
            }

            ModifyBanzinOrGaz($name, $id, $email, $phone, $delivery, $station, $state, $userId, $type, $amount, $banzOrGaz, $reason, $requestId);
            echo "<meta http-equiv='refresh' content='0'>";

        }

    }


}