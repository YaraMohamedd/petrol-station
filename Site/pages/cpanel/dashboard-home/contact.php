<?php
require('../../../php/admin/users/viewall.php');

require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');

if(@$refused){
    if(@count($refused) > 0){
        ?>

        ?>
        <div class="app-content content" style="overflow: scroll">
            <div class="content-wrapper">
                <div class="content-body">
                    <center>

                        <form action="contact.php" method="post">
                            <div class="card text-center" style="display:inline-block">
                                <div class="card-body">
                                    <?php foreach ($refused as $u){ ?>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Message </th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">User Email</th>
                                                <th scope="col">User Id<th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <th scope="row"><?php echo $u['id'] ?></th>
                                                <th scope="row"><?php echo $u['date'] ?></th>
                                                <th scope="row"><?php echo $u['title'] ?></th>
                                                <th scope="row">
                                                    <textarea style="width: 200px;height: 100%"><?php echo $u['message'] ?></textarea></th>
                                                <th scope="row"><?php echo $u['name'] ?></th>
                                                <th scope="row"><?php echo $u['email'] ?></th>
                                                <th scope="row"><?php echo $u['userId'] ?></th>

                                                <input type="hidden" name="id" value="<?php echo $u['id'] ?>">

                                            </tr>
                                            <tr>
                                                <td colspan="7">
                                                    <center>
                                                        <input type="submit" class="btn btn-danger" value="Delete" name="contact">
                                                    </center>
                                                </td>
                                            </tr>


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
    }
}
?>


