<?php
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
require('../../../php/admin/questions/index.php');

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
                            عرض كل الاسئلة الشائعة

                        </b>

                    </h2>
                    <br>
                </center>
                <table
                    class="table display nowrap table-striped table-bordered ">
                    <thead>
                    <tr>
                        <th scope="col">الرقم</th>
                        <th scope="col">السؤال </th>
                        <th scope="col">الاجابة</th>


                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($users as $u){ ?>
                        <tr>

                            <td scope="col"><?php echo $u['id'] ?></td>
                            <td scope="col"><?php echo $u['question'] ?></td>
                            <td scope="col"><?php echo $u['answer'] ?></td>


                            <td>
                                <div class="btn-group" role="group"
                                     aria-label="Basic example">
                                    <a href="delete.php?page=Questions&id=<?php echo $u['id']?>"
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
            لا يوجد مستخدمين بعد
               </center>
        ";
    }
}
require_once('includes/footer.php');
?>









