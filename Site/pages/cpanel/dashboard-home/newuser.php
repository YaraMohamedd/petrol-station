<?php
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
require('../../../php/admin/login.php');

?>

<center>
    <div class="card" style="height: 600px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
        اضافة موظف جديد
        <div class="card-body" >
            <form method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">

                <table class="table" style="text-align: right;direction: rtl">
                    <tbody>
                    <tr>
                        <th scope="row">اسم الموظف</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Uname"  id="Uname" style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">رقم الهاتف</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Uphone" id="Uphone"  style="text-align: right">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">البريد الإلكتروني</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Uemail" id="Uemail"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">كلمة المرور</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Upassword" id="Upassword"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">المدينة</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Ucity" id="Ucity"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">مسئول</th>
                        <td>
                            <select class="btn btn-outline-primary" name="UisAdmin" id="UisAdmin" style="text-align: right">
                                <option value="false">لا</option>
                                <option value="true">نعم</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">الصوره</th>
                        <td>
                            <input type="file" class="form-control-file" id="photo1" onchange="uploadImage()"  class="btn btn-outline-primary" required >
                            <input type="hidden"  name="image" id="img1">
                            <meter class="disk_d"  id="disk_d1"></meter>
                        </td>

                    </tr>

                    </tbody>
                </table>

                <input type="submit" value="اضافة موظف جديد" class="btn btn-primary" name="AddNewCus" >
            </form>
        </div>
    </div>
</center>

<?php
require_once('includes/footer.php')
?>
