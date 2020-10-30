<?php
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
require('../../../php/admin/login.php');

?>


    <!--End Sidebare-->
    <div class="app-content content" style="overflow-x: auto;text-align: right">
        <div class="content-wrapper">
            <center>
                <br>
                <h2>
                    <b>
                        عرض المستخدمين

                    </b>

                </h2>
                <br>
            </center>
            <table
                    class="table display nowrap table-striped table-bordered ">
                <thead>
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">البريد الالكتروني</th>
                    <th scope="col">الباسورد</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">تعديل </th>
                    <th scope="col">حذف </th>

                </tr>
                </thead>
                <tbody>


                <td scope="col">1</td>
                <td scope="col">test</td>
                <td scope="col">test@testtesttesttest</td>
                <td scope="col">test</td>
                <td scope="col">test</td>
                <td scope="col">test</td>
                <td scope="col">test</td>

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
                        <a href=""
                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                    </div>
                </td>


                </tbody>
            </table>
        </div>
    </div>




<?php
require_once('includes/footer.php')
?>









