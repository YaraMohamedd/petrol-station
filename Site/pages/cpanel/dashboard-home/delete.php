<?php
require('../../../php/admin/questions/delete.php');
    if(isset($_GET['page'])){
        if($_GET['page'] == 'Questions') {
            if(isset($_GET['id'])){
                DelOneNode($_GET['page'],$_GET['id']);
                header('location:questions.php');

            }else{
                header('location:questions.php');
            }
        }elseif ($_GET['page'] == 'PetrolStation') {
            if(isset($_GET['id'])){
                DelOneNode($_GET['page'],$_GET['id']);
                header('location:petrolstations.php');

            }else{
                header('location:petrolstations.php');
            }
        }elseif ($_GET['page'] == 'petrol') {
                if($_GET['type'] == 'types'){
                    if($_GET['request'] =='view'){
                        DelTwoNode('Types','banzin',$_GET['id']);
                        header('location:TypesAmountsPg.php?type=petrol&request=type&process=view');
                    }
                } elseif($_GET['type'] == 'amount'){
                    if($_GET['request'] =='view'){
                        DelTwoNode('Amount','banzin',$_GET['id']);
                        header('location:TypesAmountsPg.php?type=petrol&request=amount&process=view');
                    }
                }

        }elseif ($_GET['page'] == 'gaz') {
            if($_GET['type'] == 'types'){
                if($_GET['request'] =='view'){
                    DelTwoNode('Types','gaz',$_GET['id']);
                    header('location:TypesAmountsPg.php?type=gaz&request=type&process=view');
                }
            }elseif($_GET['type'] == 'amount'){
                if($_GET['request'] =='view'){
                    DelTwoNode('Amount','gaz',$_GET['id']);
                    header('location:TypesAmountsPg.php?type=gaz&request=amount&process=view');
                }
            }

        }elseif ($_GET['page'] == 'users'){
            //DelTwoNode('Users','accepted',$_GET['id']);
echo "hi";
        }
    }