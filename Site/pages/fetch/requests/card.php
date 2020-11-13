<?php
@include_once '../../../../vendor/autoload.php';
use Kreait\Firebase\Factory;




function SelectWithNode($tablename){
    $factory = (new Factory())
        ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}

@$petrolStations = SelectWithNode('PetrolStation');
if(isset($_POST['Question'])){
  if($_POST['Question'] == 'home'){
      echo "
            <h4>
                   إذا تم قبول طلبكم سوف يتم التواصل معك من خلال لتحديد ميعاد التسليم
            </h4>
      ";
  }elseif ($_POST['Question'] == 'serve') {
      if (@$petrolStations) {
          if (@count(@$petrolStations) > 0) {
              echo "
          <div class='form-group'>
                    <label >اختر الفرع الاقرب لك </label>

                        <select name='station' class='form-control' id='qtype'>
                            <option  selected>اختر الفرع  </option>
                       ";
              foreach ($petrolStations as $p) {
                  echo " <option value=" . $p['id'] . " >" . $p['name'] . "</option>";
              }

              echo "

                        </select>
                </div>
     ";
              echo "
            <h4>
                   إذا تم قبول طلبكم يمكنك الذهاب للفرع فورا لاستلام بطاقتك 
            </h4>
      ";
          } else {
              echo "
            <h4>
               لا يوجد فروع بعد!
            </h4>
      ";
          }
      }
  }
}