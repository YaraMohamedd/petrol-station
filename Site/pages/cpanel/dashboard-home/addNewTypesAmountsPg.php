<?php
require('../../../php/admin/typesAndAmounts/addTypesAmounts.php');

require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');

if(isset($_GET['type'])){
    if($_GET['type'] == 'petrol'){
        if($_GET['request'] == 'type'){
?>
            <center>
                <div class="card" style="height: 250px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                   Add New Petrol Type
                    <div class="card-body" >
                        <form method="POST" action="addNewTypesAmountsPg.php?type=petrol&request=type" enctype="multipart/form-data">

                            <table class="table" >
                                <tbody>
                                <tr>

                                    <td>
                                        <input class="btn btn-outline-primary" type="text" name="name"  id="name" style="text-align: LEFT">
                                    </td>
                                    <th scope="row">Name </th>
                                </tr>

                                </tbody>
                            </table>

                            <input type="submit" value="Add" class="btn btn-primary" name="add" >
                        </form>
                    </div>
                </div>
            </center>

            <?php
        }elseif ($_GET['request'] == 'amount'){
?>
            <center>
                <div class="card" style="height: 250px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                    Add New Petrol Amount
                    <div class="card-body" >
                        <form method="POST" action="addNewTypesAmountsPg.php?type=petrol&request=amount" enctype="multipart/form-data">

                            <table class="table" >
                                <tbody>
                                <tr>

                                    <td>
                                        <input class="btn btn-outline-primary" type="text" name="name"  id="name" style="text-align: LEFT">
                                    </td>
                                    <th scope="row">Name </th>
                                </tr>

                                </tbody>
                            </table>

                            <input type="submit" value="Add" class="btn btn-primary" name="add" >
                        </form>
                    </div>
                </div>
            </center>

            <?php
        }
    }elseif($_GET['type'] == 'gaz'){
        if($_GET['request'] == 'type'){
            ?>
            <center>
                <div class="card" style="height: 250px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                    Add New Gaz Type
                    <div class="card-body" >
                        <form method="POST" action="addNewTypesAmountsPg.php?type=gaz&request=type" enctype="multipart/form-data">

                            <table class="table" >
                                <tbody>
                                <tr>

                                    <td>
                                        <input class="btn btn-outline-primary" type="text" name="name"  id="name" style="text-align: LEFT">
                                    </td>
                                    <th scope="row">Name </th>
                                </tr>

                                </tbody>
                            </table>

                            <input type="submit" value="Add" class="btn btn-primary" name="add" >
                        </form>
                    </div>
                </div>
            </center>

            <?php
        }elseif ($_GET['request'] == 'amount'){
            ?>
            <center>
                <div class="card" style="height: 250px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                    Add New Gaz Amount
                    <div class="card-body" >
                        <form method="POST" action="addNewTypesAmountsPg.php?type=gaz&request=amount" enctype="multipart/form-data">

                            <table class="table" >
                                <tbody>
                                <tr>

                                    <td>
                                        <input class="btn btn-outline-primary" type="text" name="name"  id="name" style="text-align: LEFT">
                                    </td>
                                    <th scope="row">Name </th>
                                </tr>

                                </tbody>
                            </table>

                            <input type="submit" value="Add" class="btn btn-primary" name="add" >
                        </form>
                    </div>
                </div>
            </center>

            <?php
        }
    }
}


require_once('includes/footer.php');

