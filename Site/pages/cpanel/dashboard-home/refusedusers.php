<?php
require('../../../php/admin/users/viewall.php');

require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');


    if(@count($refused) > 0){
        ?>

        <div class="app-content content" style="overflow: scroll">
            <div class="content-wrapper">
                <div class="content-body">
                    <center>

                        <form action="refusedusers.php" method="post">
                            <div class="card text-center" style="display:inline-block">
                                <div class="card-body">
                                    <?php foreach ($refused as $u){ ?>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Image</th>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email </th>
                                                <th scope="col">Phone Number</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <th scope="row"><img style="width: 100px;height: 100px" src="<?php echo $u['image']?>"></th>
                                                <th scope="row"><?php echo $u['userId'] ?></th>
                                                <th scope="row"><?php echo $u['name'] ?></th>
                                                <th scope="row"><?php echo $u['email'] ?></th>
                                                <th scope="row"><?php echo $u['phone'] ?></th>

                                                <input type="hidden" name="userId" value="<?php echo $u['userId'] ?>">
                                                <input type="hidden" name="name"  value="<?php echo $u['name'] ?>">
                                                <input type="hidden" name="email" value="<?php echo $u['email'] ?>">
                                                <input type="hidden" name="phone" value="<?php echo $u['phone'] ?>">
                                                <input type="hidden" name="image" value="<?php echo $u['image'] ?>">
                                                <input type="hidden" name="isAdmin" value="<?php echo $u['isAdmin'] ?>">
                                                <input type="hidden" name="password" value="<?php echo $u['password'] ?>">
                                                <input type="hidden" name="state" value="refused">



                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <center>
                                                        <input type="submit" class="btn btn-primary" value="accepted" name="newState">
                                                        <input type="submit" class="btn btn-danger" value="pending" name="newState">
                                                    </center>
                                                </td>
                                            </tr>




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
                                            </tbody>
                                        </table>
                                    <?php } ?>

                                </div>
                            </div>
                        </form>

                    </center>


                </div>
            </div>
        </div>

        <?php
        require_once('includes/footer.php');
    }else{
        echo "
            <center>
                <br><br><br><br>
                <div class='card text-white bg-danger mb-3' style='max-width: 25rem;'>
                    <div class='card-body'>
                        <center>
                            <h5 class='card-title' style='color: white'>لا يتم ارسال طلبات بعد</h5>
                        </center>
                    </div>               </center>
        ";
        require_once('includes/footer.php');

    }

?>


