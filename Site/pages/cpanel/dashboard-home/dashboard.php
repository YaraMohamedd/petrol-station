﻿<?php
require_once('includes/header.php');
require_once('includes/main.php');
require_once('includes/nav.php');
require('../../../php/admin/login.php');


?>





<div class="app-content content" style="background:#F2AB04;">
    <div class="content-wrapper">
        <div class="content-header row">
            <br>
        </div>
        <div class="content-body" >
            <img  style="width:500px;margin-top:20px;align-terms:center;margin-right:500px;margin-top:60px"src="../../site/assets/img/image.svg">

            <!--/ Sell Orders & Buy Order -->
            <!-- Active Orders -->
           <!--
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Active Order</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <td>
                                    <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                </td>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Amount BTC</th>
                                        <th>BTC Remaining</th>
                                        <th>Price</th>
                                        <th>USD</th>
                                        <th>Fee (%)</th>
                                        <th>Cancel</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td>11900.12</td>
                                        <td>$ 6979.78</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:50:50</td>
                                        <td class="danger">Sell</td>
                                        <td><i class="cc BTC-alt"></i> 1.38647</td>
                                        <td><i class="cc BTC-alt"></i> 0.38647</td>
                                        <td>11905.09</td>
                                        <td>$ 4600.97</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:49:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.45879</td>
                                        <td><i class="cc BTC-alt"></i> 0.45879</td>
                                        <td>11901.85</td>
                                        <td>$ 5460.44</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.89877</td>
                                        <td><i class="cc BTC-alt"></i> 0.89877</td>
                                        <td>11899.25</td>
                                        <td>$ 10694.6</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="danger">Sell</td>
                                        <td><i class="cc BTC-alt"></i> 0.45712</td>
                                        <td><i class="cc BTC-alt"></i> 0.45712</td>
                                        <td>11908.58</td>
                                        <td>$ 5443.65</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td>11900.12</td>
                                        <td>$ 6979.78</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             Active Orders -->
        </div>
    </div>
</div><!-- ////////////////////////////////////////////////////////////////////////////-->



<?php
require_once('includes/footer.php')
?>

