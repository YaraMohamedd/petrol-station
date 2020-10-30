<?php
require_once('includes/header.php');
require_once('includes/nav.php');
require_once('includes/main.php');
require('../../../php/admin/login.php');

?>
<div class="app-content content" style="overflow: scroll">
    <div class="content-wrapper">
        <div class="content-body">
            <center>

                <form action="pendingusers.php" method="post">
                    @csrf
                    <div class="card text-center" style="display:inline-block">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">الرقم</th>
                                    <th scope="col">الرقم الوظيفي</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">رقم الهاتف</th>
                                    <th scope="col">الشكوي</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{$r['requestId']}}</th>
                                    <th scope="row">{{$r['jobNumber']}}</th>
                                    <th>{{$r['name']}}</th>
                                    <th>{{$r['phoneNumber']}}</th>
                                    <th>{{$r['descriptionComplain']}}</th>

                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <center>
                                            <input type="text" class="btn btn-primary" name="reason">
                                        </center>

                                    </td>
                                </tr>
                                <!-- Method hidden inputs-->
                                <input type="hidden" name="Therequest" value="{{$request}}">
                                <input type="hidden" name="city" value="{{$city}}" >
                                <input type="hidden" name="curentState" value="{{$state}}" >
                                <input type="hidden" name="ReqId" value="{{$r['requestId']}}">
                                <input type="hidden" name="servicesType" value="{{$r['descriptionComplain']}}">
                                <input type="hidden" name="ReqjobNumber" value="{{$r['jobNumber']}}">
                                <input type="hidden" name="Reqname" value="{{$r['name']}}">
                                <input type="hidden" name="ReqPhoneNumber" value="{{$r['phoneNumber']}}">
                                <input type="hidden" name="ReqUserid" value="{{$r['userId']}}">

                                <tr>
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
                                        <center>
                                            <input type="submit" class="btn btn-primary" value="accepted" name="newState">
                                            <input type="submit" class="btn btn-danger" value="refused" name="newState">
                                        </center>

                                        @endif

                                    </td>
                                </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </form>
                @endforeach
                @else
                <br><br><br><br>
                <div class="card text-white bg-danger mb-3" style="max-width: 25rem;">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="color: white">لا يتم ارسال طلبات بعد</h5>
                        </center>
                    </div>
                    @endif
            </center>


        </div>
    </div>
</div>

<?php
require_once('includes/footer.php')
?>

