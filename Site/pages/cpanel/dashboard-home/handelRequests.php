<?php
if(isset($_GET['request'])) {
    require_once('includes/header.php');
    require_once('includes/nav.php');
    require_once('includes/main.php');
    @require_once('../../../php/admin/requests/requests.php');
    if($_GET['request'] == 'petrol'){
        if(@count(@$ViewRequests) > 0){
            ?>
                <div class="app-content content" style="overflow: scroll">
                    <div class="content-wrapper">
                        <div class="content-body">
                            <center>

                                <form action="handelRequests.php?request=<?php echo $_GET['request']?>&state=<?php echo $_GET['state']?>" method="post">
                                    <div class="card text-center" style="display:inline-block">
                                        <div class="card-body">
                                            <table class="table table-hover">

                                                <?php foreach ($ViewRequests as $u){
                                                    if($_GET['state'] == 'pending'){
                                                        if($u['state'] == 2){
                                                    ?>
                                                <thead>
                                                <tr>

                                                    <th scope="col">User Name</th>
                                                    <th scope="col">National Id </th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Station </th>
                                                    <th scope="col">Petrol type </th>
                                                    <th scope="col">Petrol Amount </th>
                                                    <th scope="col">Delivery Type </th>
                                                    <th scope="col">Time</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php echo $u['name'] ?></th>
                                                        <th scope="row"><?php echo $u['id'] ?></th>
                                                        <th scope="row"><?php echo $u['phone'] ?></th>
                                                        <th scope="row"><?php echo $u['email'] ?></th>
                                                        <th scope="row"><?php echo $u['station'] ?></th>
                                                        <th scope="row"><?php echo $u['type'] ?></th>
                                                        <th scope="row"><?php echo $u['amount'] ?></th>
                                                        <th scope="row"><?php echo $u['delivery'] ?></th>
                                                        <th scope="row"><?php echo $u['time'] ?></th>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                        <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                        <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                        <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                        <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                        <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                        <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                        <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                        <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                        <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                    </tr>
                                                    <tr>
                                                        <td colspan="9">
                                                            <center>
                                                                <input type="submit" class="btn btn-primary" value="accepted" name="add">
                                                                <input type="submit" class="btn btn-danger" value="refused" name="add">
                                                            </center>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php }
                                                    }elseif ($_GET['state'] == 'refused'){
                                                        if($u['state'] == 0){
                                                        ?>
                                                            <thead>
                                                            <tr>

                                                                <th scope="col">User Name</th>
                                                                <th scope="col">National Id </th>
                                                                <th scope="col">Phone</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Station </th>
                                                                <th scope="col">Petrol type </th>
                                                                <th scope="col">Petrol Amount </th>
                                                                <th scope="col">Delivery Type </th>
                                                                <th scope="col">Time</th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row"><?php echo $u['name'] ?></th>
                                                                <th scope="row"><?php echo $u['id'] ?></th>
                                                                <th scope="row"><?php echo $u['phone'] ?></th>
                                                                <th scope="row"><?php echo $u['email'] ?></th>
                                                                <th scope="row"><?php echo $u['station'] ?></th>
                                                                <th scope="row"><?php echo $u['type'] ?></th>
                                                                <th scope="row"><?php echo $u['amount'] ?></th>
                                                                <th scope="row"><?php echo $u['delivery'] ?></th>
                                                                <th scope="row"><?php echo $u['time'] ?></th>

                                                            </tr>
                                                            <tr>
                                                                <td colspan="9">
                                                                    <center>
                                                                        <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                                <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                                <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                                <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                                <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                                <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                                <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                                <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                                <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                                <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                            </tr>
                                                            <tr>
                                                                <td colspan="9">
                                                                    <center>
                                                                        <input type="submit" class="btn btn-primary" value="accepted" name="add">
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                            <?php
                                                        } }elseif ($_GET['state'] == 'accepted'){
                                                        if($u['state'] == 1){
                                                        ?>
                                                <thead>
                                                <tr>

                                                    <th scope="col">User Name</th>
                                                    <th scope="col">National Id </th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Station </th>
                                                    <th scope="col">Petrol type </th>
                                                    <th scope="col">Petrol Amount </th>
                                                    <th scope="col">Delivery Type </th>
                                                    <th scope="col">Time</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                            <tr>
                                                                <th scope="row"><?php echo $u['name'] ?></th>
                                                                <th scope="row"><?php echo $u['id'] ?></th>
                                                                <th scope="row"><?php echo $u['phone'] ?></th>
                                                                <th scope="row"><?php echo $u['email'] ?></th>
                                                                <th scope="row"><?php echo $u['station'] ?></th>
                                                                <th scope="row"><?php echo $u['type'] ?></th>
                                                                <th scope="row"><?php echo $u['amount'] ?></th>
                                                                <th scope="row"><?php echo $u['delivery'] ?></th>
                                                                <th scope="row"><?php echo $u['time'] ?></th>

                                                            </tr>
                                                            <tr>
                                                                <td colspan="9">
                                                                    <center>
                                                                        <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                                <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                                <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                                <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                                <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                                <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                                <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                                <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                                <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                                <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                            </tr>
                                                            <tr>
                                                                <td colspan="9">
                                                                    <center>
                                                                        <input type="submit" class="btn btn-danger" value="refused" name="add">
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                </tbody>
                                                            <?php
                                                    }}
                                                } ?>


                                                <!-- <tr>
                                                     <td colspan="6">
                                                         @if($state == 'accepted' )
                                                         <center>
                                                             <input type="submit" class="btn btn-primary" value="done" name="newState">
                                                             <input type="submit" class="btn btn-danger" value="refused" name="newState">
                                                         </center>

                                                         @elseif($state == 'refused')
                                                         <center>
                                                             <input type="submit" class="btn btn-primary" value="delete" name="newState">
                                                             <input type="submit" class="btn btn-danger" value="accepted" name="newState">
                                                         </center>
                                                         @elseif($state == 'pending')


                                                         @endif

                                                     </td>
                                                 </tr>-->

                                            </table>



                                        </div>
                                    </div>
                                </form>

                            </center>


                        </div>
                    </div>
                </div>





    <?php

        }else{
            echo "<center><h1>There is no requests yet</h1></center>";
        }
    }elseif ($_GET['request'] == 'gaz'){
        if(@count(@$ViewRequests) > 0){
            ?>
            <div class="app-content content" style="overflow: scroll">
                <div class="content-wrapper">
                    <div class="content-body">
                        <center>

                            <form action="handelRequests.php?request=<?php echo $_GET['request']?>&state=<?php echo $_GET['state']?>" method="post">
                                <div class="card text-center" style="display:inline-block">
                                    <div class="card-body">
                                        <table class="table table-hover">

                                            <?php foreach ($ViewRequests as $u){
                                                if($_GET['state'] == 'pending'){
                                                    if($u['state'] == 2){
                                                        ?>
                                                        <thead>
                                                        <tr>

                                                            <th scope="col">User Name</th>
                                                            <th scope="col">National Id </th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Station </th>
                                                            <th scope="col">Petrol type </th>
                                                            <th scope="col">Petrol Amount </th>
                                                            <th scope="col">Delivery Type </th>
                                                            <th scope="col">Time</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $u['name'] ?></th>
                                                            <th scope="row"><?php echo $u['id'] ?></th>
                                                            <th scope="row"><?php echo $u['phone'] ?></th>
                                                            <th scope="row"><?php echo $u['email'] ?></th>
                                                            <th scope="row"><?php echo $u['station'] ?></th>
                                                            <th scope="row"><?php echo $u['type'] ?></th>
                                                            <th scope="row"><?php echo $u['amount'] ?></th>
                                                            <th scope="row"><?php echo $u['delivery'] ?></th>
                                                            <th scope="row"><?php echo $u['time'] ?></th>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                            <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                            <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                            <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                            <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                            <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                            <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                            <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="submit" class="btn btn-primary" value="accepted" name="add">
                                                                    <input type="submit" class="btn btn-danger" value="refused" name="add">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    <?php }
                                                }elseif ($_GET['state'] == 'refused'){
                                                    if($u['state'] == 0){
                                                        ?>
                                                        <thead>
                                                        <tr>

                                                            <th scope="col">User Name</th>
                                                            <th scope="col">National Id </th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Station </th>
                                                            <th scope="col">Petrol type </th>
                                                            <th scope="col">Petrol Amount </th>
                                                            <th scope="col">Delivery Type </th>
                                                            <th scope="col">Time</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $u['name'] ?></th>
                                                            <th scope="row"><?php echo $u['id'] ?></th>
                                                            <th scope="row"><?php echo $u['phone'] ?></th>
                                                            <th scope="row"><?php echo $u['email'] ?></th>
                                                            <th scope="row"><?php echo $u['station'] ?></th>
                                                            <th scope="row"><?php echo $u['type'] ?></th>
                                                            <th scope="row"><?php echo $u['amount'] ?></th>
                                                            <th scope="row"><?php echo $u['delivery'] ?></th>
                                                            <th scope="row"><?php echo $u['time'] ?></th>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                            <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                            <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                            <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                            <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                            <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                            <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                            <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="submit" class="btn btn-primary" value="accepted" name="add">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <?php
                                                    } }elseif ($_GET['state'] == 'accepted'){
                                                    if($u['state'] == 1){
                                                        ?>
                                                        <thead>
                                                        <tr>

                                                            <th scope="col">User Name</th>
                                                            <th scope="col">National Id </th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Station </th>
                                                            <th scope="col">Petrol type </th>
                                                            <th scope="col">Petrol Amount </th>
                                                            <th scope="col">Delivery Type </th>
                                                            <th scope="col">Time</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $u['name'] ?></th>
                                                            <th scope="row"><?php echo $u['id'] ?></th>
                                                            <th scope="row"><?php echo $u['phone'] ?></th>
                                                            <th scope="row"><?php echo $u['email'] ?></th>
                                                            <th scope="row"><?php echo $u['station'] ?></th>
                                                            <th scope="row"><?php echo $u['type'] ?></th>
                                                            <th scope="row"><?php echo $u['amount'] ?></th>
                                                            <th scope="row"><?php echo $u['delivery'] ?></th>
                                                            <th scope="row"><?php echo $u['time'] ?></th>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                            <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                            <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                            <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                            <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                            <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                            <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                            <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="submit" class="btn btn-danger" value="refused" name="add">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <?php
                                                    }}
                                            } ?>


                                            <!-- <tr>
                                                 <td colspan="6">
                                                     @if($state == 'accepted' )
                                                     <center>
                                                         <input type="submit" class="btn btn-primary" value="done" name="newState">
                                                         <input type="submit" class="btn btn-danger" value="refused" name="newState">
                                                     </center>

                                                     @elseif($state == 'refused')
                                                     <center>
                                                         <input type="submit" class="btn btn-primary" value="delete" name="newState">
                                                         <input type="submit" class="btn btn-danger" value="accepted" name="newState">
                                                     </center>
                                                     @elseif($state == 'pending')


                                                     @endif

                                                 </td>
                                             </tr>-->

                                        </table>



                                    </div>
                                </div>
                            </form>

                        </center>


                    </div>
                </div>
            </div>





            <?php

        }else{
            echo "<center><h1>There is no requests yet</h1></center>";
        }
    }elseif ($_GET['request'] == 'card'){
        if(@count(@$ViewRequests) > 0){
            ?>
            <div class="app-content content" style="overflow: scroll">
                <div class="content-wrapper">
                    <div class="content-body">
                        <center>

                            <form action="handelRequests.php?request=<?php echo $_GET['request']?>&state=<?php echo $_GET['state']?>" method="post">
                                <div class="card text-center" style="display:inline-block">
                                    <div class="card-body">
                                        <table class="table table-hover">

                                            <?php foreach ($ViewRequests as $u){
                                                if($_GET['state'] == 'pending'){
                                                    if($u['state'] == 2){
                                                        ?>
                                                        <thead>
                                                        <tr>

                                                            <th scope="col">User Name</th>
                                                            <th scope="col">National Id </th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Station </th>
                                                            <th scope="col">Petrol type </th>
                                                            <th scope="col">Petrol Amount </th>
                                                            <th scope="col">Delivery Type </th>
                                                            <th scope="col">Time</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $u['name'] ?></th>
                                                            <th scope="row"><?php echo $u['id'] ?></th>
                                                            <th scope="row"><?php echo $u['phone'] ?></th>
                                                            <th scope="row"><?php echo $u['email'] ?></th>
                                                            <th scope="row"><?php echo $u['station'] ?></th>
                                                            <th scope="row"><?php echo $u['delivery'] ?></th>
                                                            <th scope="row"><?php echo $u['time'] ?></th>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                            <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                            <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                            <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                            <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                            <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="submit" class="btn btn-primary" value="accepted" name="add">
                                                                    <input type="submit" class="btn btn-danger" value="refused" name="add">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    <?php }
                                                }elseif ($_GET['state'] == 'refused'){
                                                    if($u['state'] == 0){
                                                        ?>
                                                        <thead>
                                                        <tr>

                                                            <th scope="col">User Name</th>
                                                            <th scope="col">National Id </th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Station </th>
                                                            <th scope="col">Petrol type </th>
                                                            <th scope="col">Petrol Amount </th>
                                                            <th scope="col">Delivery Type </th>
                                                            <th scope="col">Time</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $u['name'] ?></th>
                                                            <th scope="row"><?php echo $u['id'] ?></th>
                                                            <th scope="row"><?php echo $u['phone'] ?></th>
                                                            <th scope="row"><?php echo $u['email'] ?></th>
                                                            <th scope="row"><?php echo $u['station'] ?></th>
                                                            <th scope="row"><?php echo $u['type'] ?></th>
                                                            <th scope="row"><?php echo $u['amount'] ?></th>
                                                            <th scope="row"><?php echo $u['delivery'] ?></th>
                                                            <th scope="row"><?php echo $u['time'] ?></th>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                            <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                            <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                            <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                            <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                            <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                            <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                            <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="submit" class="btn btn-primary" value="accepted" name="add">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <?php
                                                    } }elseif ($_GET['state'] == 'accepted'){
                                                    if($u['state'] == 1){
                                                        ?>
                                                        <thead>
                                                        <tr>

                                                            <th scope="col">User Name</th>
                                                            <th scope="col">National Id </th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Station </th>
                                                            <th scope="col">Petrol type </th>
                                                            <th scope="col">Petrol Amount </th>
                                                            <th scope="col">Delivery Type </th>
                                                            <th scope="col">Time</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $u['name'] ?></th>
                                                            <th scope="row"><?php echo $u['id'] ?></th>
                                                            <th scope="row"><?php echo $u['phone'] ?></th>
                                                            <th scope="row"><?php echo $u['email'] ?></th>
                                                            <th scope="row"><?php echo $u['station'] ?></th>
                                                            <th scope="row"><?php echo $u['type'] ?></th>
                                                            <th scope="row"><?php echo $u['amount'] ?></th>
                                                            <th scope="row"><?php echo $u['delivery'] ?></th>
                                                            <th scope="row"><?php echo $u['time'] ?></th>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="text" name="reason" class="btn-outline-dark" style="width: 500px;">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                            <input type="hidden" name="name" value="<?php echo $u['name'] ?>">
                                                            <input type="hidden" name="id" value="<?php echo $u['id'] ?>">
                                                            <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                            <input type="hidden" name="delivery" value="<?php echo $u['delivery'] ?>">
                                                            <input type="hidden" name="station" value="<?php echo $u['station'] ?>">
                                                            <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                            <input type="hidden" name="type" value="<?php echo $u['type'] ?>">
                                                            <input type="hidden" name="amount" value="<?php echo $u['amount'] ?>">
                                                            <input type="hidden" name="requestId" value="<?php echo $u['requestId'] ?>">

                                                        </tr>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <input type="submit" class="btn btn-danger" value="refused" name="add">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <?php
                                                    }}
                                            } ?>


                                            <!-- <tr>
                                                 <td colspan="6">
                                                     @if($state == 'accepted' )
                                                     <center>
                                                         <input type="submit" class="btn btn-primary" value="done" name="newState">
                                                         <input type="submit" class="btn btn-danger" value="refused" name="newState">
                                                     </center>

                                                     @elseif($state == 'refused')
                                                     <center>
                                                         <input type="submit" class="btn btn-primary" value="delete" name="newState">
                                                         <input type="submit" class="btn btn-danger" value="accepted" name="newState">
                                                     </center>
                                                     @elseif($state == 'pending')


                                                     @endif

                                                 </td>
                                             </tr>-->

                                        </table>



                                    </div>
                                </div>
                            </form>

                        </center>


                    </div>
                </div>
            </div>





            <?php

        }else{
            echo "<center><h1>There is no requests yet</h1></center>";
        }
    }
    require_once('includes/footer.php');

}


