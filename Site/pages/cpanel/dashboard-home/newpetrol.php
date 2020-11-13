<?php

require('../../../php/admin/petrol/create.php');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $details = $_POST['details'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $delivery=$_POST['delivery'];
    $image = $_POST['img1'];

    AddPetrolStation($name,$details,$address,$contact,$delivery,$image);
    header('location:empty.php?page=petrol');
}
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
?>

<center>
    <div class="card" style="height: 550px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
        اضافة محطه بنزين جديده
        <div class="card-body" >
            <form method="POST" action="newpetrol.php" enctype="multipart/form-data">

                <table class="table" style="text-align: right;direction: rtl">
                    <tbody>
                    <tr>
                        <th scope="row">اسم المحطه</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="name"  id="name" style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"> التفاصيل</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="details" id="details"  style="text-align: right">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">العنوان </th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="address" id="address"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">خدمة العملاء</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="contact" id="contact"  style="text-align: right">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">توصيل للمنزل</th>
                        <td>
                            <select class="btn btn-outline-primary" name="delivery" id="delivery" style="text-align: right">
                                <option value="0">لا</option>
                                <option value="1">نعم</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">الصوره</th>
                        <td>
                            <input type="file" class="form-control-file" id="photo1" onchange="uploadImage()"  class="btn btn-outline-primary" required >
                            <input type="hidden"  name="img1" id="img1">
                            <meter class="disk_d"  id="disk_d1"></meter>
                        </td>

                    </tr>

                    </tbody>
                </table>

                <input type="submit" value="اضافة موظف جديد" class="btn btn-primary" name="register" >
            </form>
        </div>
    </div>
</center>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

<script>
    var firebaseConfig = {
        apiKey: "AIzaSyBHbT2gERI0qaPIkZqd3C1pG-0njxhY3YY",
        authDomain: "petrolstation-a32b4.firebaseapp.com",
        databaseURL: "https://petrolstation-a32b4.firebaseio.com",
        projectId: "petrolstation-a32b4",
        storageBucket: "petrolstation-a32b4.appspot.com",
        messagingSenderId: "110917488947",
        appId: "1:110917488947:web:0e7d94d3a7a1ded704ee46"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);


    function uploadImage() {
        const ref = firebase.storage().ref('/petrolStation');
        const file = document.querySelector("#photo1").files[0];
        const name = +new Date() + "-" + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                console.log(url);
                document.querySelector("#img1").value = url;
                document.querySelector("#disk_d1").value = 1;
            })
            .catch(console.error);
    }

</script>

<?php
require_once('includes/footer.php')
?>
