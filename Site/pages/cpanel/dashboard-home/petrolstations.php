<?php
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
require('../../../php/admin/petrol/index.php');

if(@$users){
    if(@count($users) > 0){
        ?>


        <!--End Sidebare-->
        <div class="app-content content" style="overflow-x: auto;text-align: right">
            <div class="content-wrapper">
                <center>
                    <br>
                    <h2>
                        <b>
                            عرض محطات البنزين

                        </b>

                    </h2>
                    <br>
                </center>
                <table
                    class="table display nowrap table-striped table-bordered ">
                    <thead>
                    <tr>
                        <th scope="col">الرقم</th>
                        <th scope="col">الصوره </th>
                        <th scope="col">الاسم</th>
                        <th scope="col"> التفاصيل</th>
                        <th scope="col"> العنوان</th>
                        <th scope="col">خدمة العملاء</th>
                        <th scope="col">التوصيل للمنزل </th>
                        <th scope="col">تعديل </th>
                        <th scope="col">حذف </th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($users as $u){ ?>
                        <tr>
                            <td  style="width: auto"><?php echo $u['id'] ?></td>
                            <td scope="col"><img style="width: 80px;height: 80px" src="<?php echo $u['image'] ?>"></td>

                            <td scope="col"><?php echo $u['name'] ?></td>
                            <td scope="col"><?php echo $u['details'] ?></td>
                            <td scope="col"><?php echo $u['address'] ?></td>
                            <td scope="col"><?php echo $u['contact'] ?></td>
                            <?php if(@$u['delivery'] == '1'){ ?>
                                <td scope="col">متاح</td>
                            <?php }else{ ?>
                                <td scope="col">غير متاح</td>
                            <?php  } ?>


                            <td>
                                <div class="btn-group" role="group"
                                     aria-label="Basic example">
                                    <a href=""
                                       class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>

                                </div>
                            </td>
                            <td>
                                <div class="btn-group" role="group"
                                     aria-label="Basic example">
                                    <a href="delete.php?page=PetrolStation&id=<?php echo $u['id']?>"
                                       class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
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
            لا يوجد محطات بنزين بعد
               </center>
        ";
    }
}
require_once('includes/footer.php');

?>









