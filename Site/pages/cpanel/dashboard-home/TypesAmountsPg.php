<?php
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
require('../../../php/admin/typesAndAmounts/typesAndAmounts.php');
@$petrolTypes = SelectWithNode('Types','banzin');
@$petrolAmounts = SelectWithNode('Amount','banzin');

@$gasTypes = SelectWithNode('Types','gaz');
@$gasAmounts = SelectWithNode('Amount','gaz');

    if($_GET['type'] == 'gaz'){
        if($_GET['request'] == 'type'){
            if($_GET['process'] == 'view'){
                if(@$gasTypes){
                    if(@count($gasTypes) > 0){
                        ?>

                        <!--End Sidebare-->
                        <div class="app-content content" style="overflow-x: auto;text-align: right">
                            <div class="content-wrapper">
                                <center>
                                    <br>
                                    <h2>
                                        <b>
                                            View All gas Types

                                        </b>

                                    </h2>
                                    <br>
                                </center>
                                <table
                                    class="table display nowrap table-striped table-bordered ">
                                    <thead>
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Name </th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($gasTypes as $u){ ?>
                                        <tr>

                                            <td scope="col"><?php echo $u['id'] ?></td>
                                            <td scope="col"><?php echo $u['name'] ?></td>


                                            <td>
                                                <div class="btn-group" role="group"
                                                     aria-label="Basic example">
                                                    <a href="delete.php?page=gaz&type=types&request=view&id=<?php echo $u['id']?>"
                                                       class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>




                        <?php

                    }else{
                        echo "
            <center>
           There is no types yet
               </center>
        ";
                    }
                }
            }
        }elseif ($_GET['request'] == 'amount'){
            if($_GET['process'] == 'view'){
                if(@$gasAmounts){
                    if(@count($gasAmounts) > 0){
                        ?>
                        <!--End Sidebare-->
                        <div class="app-content content" style="overflow-x: auto;text-align: right">
                            <div class="content-wrapper">
                                <center>
                                    <br>
                                    <h2>
                                        <b>
                                            View All gas Amounts
                                        </b>

                                    </h2>
                                    <br>
                                </center>
                                <table
                                    class="table display nowrap table-striped table-bordered ">
                                    <thead>
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Name </th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($gasAmounts as $u){ ?>
                                        <tr>

                                            <td scope="col"><?php echo $u['id'] ?></td>
                                            <td scope="col"><?php echo $u['name'] ?></td>


                                            <td>
                                                <div class="btn-group" role="group"
                                                     aria-label="Basic example">
                                                    <a href="delete.php?page=gaz&type=amount&request=view&id=<?php echo $u['id']?>"
                                                       class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>




                        <?php

                    }else{
                        echo "
            <center>
           There is no Amounts yet
               </center>
        ";
                    }
                }
            }
        }
    }elseif($_GET['type'] == 'petrol'){
        if($_GET['request'] == 'type'){
           if($_GET['process'] == 'view'){
               if(@$petrolTypes){
                   if(@count($petrolTypes) > 0){
                       ?>


                       <!--End Sidebare-->
                       <div class="app-content content" style="overflow-x: auto;text-align: right">
                           <div class="content-wrapper">
                               <center>
                                   <br>
                                   <h2>
                                       <b>
                                          View All Petrol Types

                                       </b>

                                   </h2>
                                   <br>
                               </center>
                               <table
                                   class="table display nowrap table-striped table-bordered ">
                                   <thead>
                                   <tr>
                                       <th scope="col">Number</th>
                                       <th scope="col">Name </th>


                                   </tr>
                                   </thead>
                                   <tbody>

                                   <?php foreach ($petrolTypes as $u){ ?>
                                       <tr>

                                           <td scope="col"><?php echo $u['id'] ?></td>
                                           <td scope="col"><?php echo $u['name'] ?></td>


                                           <td>
                                               <div class="btn-group" role="group"
                                                    aria-label="Basic example">
                                                   <a href="delete.php?page=petrol&type=types&request=view&id=<?php echo $u['id']?>"
                                                      class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                               </div>
                                           </td>
                                       </tr>
                                   <?php } ?>

                                   </tbody>
                               </table>
                           </div>
                       </div>




                       <?php

                   }else{
                       echo "
            <center>
           There is no types yet
               </center>
        ";
                   }
               }
           }
        }elseif ($_GET['request'] == 'amount'){
            if($_GET['process'] == 'view'){
                if(@$petrolAmounts){
                    if(@count($petrolAmounts) > 0){
                        ?>


                        <!--End Sidebare-->
                        <div class="app-content content" style="overflow-x: auto;text-align: right">
                            <div class="content-wrapper">
                                <center>
                                    <br>
                                    <h2>
                                        <b>
                                            View All Petrol Amounts
                                        </b>

                                    </h2>
                                    <br>
                                </center>
                                <table
                                    class="table display nowrap table-striped table-bordered ">
                                    <thead>
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Name </th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($petrolAmounts as $u){ ?>
                                        <tr>

                                            <td scope="col"><?php echo $u['id'] ?></td>
                                            <td scope="col"><?php echo $u['name'] ?></td>


                                            <td>
                                                <div class="btn-group" role="group"
                                                     aria-label="Basic example">
                                                    <a href="delete.php?page=petrol&type=amount&request=view&id=<?php echo $u['id']?>"
                                                       class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>




                        <?php

                    }else{
                        echo "
            <center>
           There is no Amounts yet
               </center>
        ";
                    }
                }
            }
        }
    }
require_once('includes/footer.php');

?>