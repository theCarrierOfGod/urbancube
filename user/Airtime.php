<?php
include_once("header.php");
?>

<main class="content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="btn-toolbar dropdown">
            <button class="btn btn-outline-primary btn-sm mr-2 " data-toggle="modal" data-target="#modal-default">
                <span class="fa fa-bullhorn mr-2"></span>News Update
            </button>
        </div>
        <div class="btn-group"><a href="UserProfile.php"> <button type="button" style="border-radius:10px; margin-right:3px" class="btn btn-sm btn-outline-primary"><i class="fa fa-cog"> </i> </button></a>
            <form action="logout.php" method="post">
                <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                <button type="submit" class="btn btn-sm btn-outline-pinterest"><i class="fa fa-sign-out"></i> </button>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center"></div>
    <div class="row">
        <div class="col-12 col-md-6 col-xl-5 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fa fa-money"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1"> ₦<?php echo $online['balance']; ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1"> ₦<?php echo $online['balance']; ?></h3>
                            </div>
                            <div class="text-right">
                                <a href="Wallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Fund
                                    Wallet
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-7 ">
            <div class="card border-light shadow-sm ">
                <div class="">
                    <h5 style="padding:5px; margin-left:15px" class="">Discounts</h5>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0"></th>
                                    <th class="border-0">MTN</th>
                                    <th class="border-0">AIRTEL</th>
                                    <th class="border-0">GLO</th>
                                    <th class="border-0">9MOBILE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-0">Basic</td>
                                    <td class="border-0">1%</td>
                                    <td class="border-0">1%</td>
                                    <td class="border-0">1%</td>
                                    <td class="border-0">1%</td>
                                </tr>
                                <!--<tr>-->
                                <!--    <td class="border-0">Silver</td>-->
                                <!--    <td class="border-0">1%</td>-->
                                <!--    <td class="border-0">1%</td>-->
                                <!--    <td class="border-0">2%</td>-->
                                <!--    <td class="border-0">2%</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                <!--    <td class="border-0">Gold</td>-->
                                <!--    <td class="border-0">2%</td>-->
                                <!--    <td class="border-0">2%</td>-->
                                <!--    <td class="border-0">3%</td>-->
                                <!--    <td class="border-0">3%</td>-->
                                <!--</tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5 " style="margin-top:15px">
            <div class="card border-light shadow-sm ">
                <div class="card-body">
                    <form id="theForm" autocomplete="off" method="post">
                        <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn" />
                        <div class="mb-3">
                            <label for="exampleInputIconLeft">Network:</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="fa fa-wifi"></span>
                                </span>
                                <select class="custom-select form-control" id="ddlViewBy" onchange="myFunction()" name="network" required>
                                    <option value="">Select Network</option>
                                    <option value="1"> MTN </option>
                                    <option value="4"> Airtel </option>
                                    <option value="2"> GLO </option>
                                    <option value="3"> 9Mobile </option>
                                </select>
                            </div>
                        </div>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("ddlViewBy").value;
                                document.getElementById("demo").innerHTML = "";
                                document.getElementById('amounts').value = "";
                            }
                        </script>
                        <script>
                            function calculateAmount(val) {
                                if(val < 100) {
                                    document.getElementById("demo").innerHTML = "minimum amount is ₦100";
                                }
                                var price = val * 1;
                                var e = document.getElementById("ddlViewBy");
                                var strUser = e.value;
                                if (strUser == "") {
                                    document.getElementById("demo").innerHTML = "please select network first";
                                }
                                if (strUser == "1") {
                                    var percent = "1";
                                    var tot_price = parseInt(price - ((percent / 100) * price));
                                    var discount = parseInt(price - tot_price);
                                    if (discount > 0) {
                                        document.getElementById("demo").innerHTML = "You will get ₦" + discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" + price;
                                    }
                                }
                                if (strUser == "2") {
                                    var percent = "1";
                                    var tot_price = parseInt(price - ((percent / 100) * price));
                                    var discount = parseInt(price - tot_price);
                                    if (discount > 0) {
                                        document.getElementById("demo").innerHTML = "You will get ₦" + discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" + price;
                                    }
                                }
                                if (strUser == "4") {
                                    var percent = "1";
                                    var tot_price = parseInt(price - ((percent / 100) * price));
                                    var discount = parseInt(price - tot_price);
                                    if (discount > 0) {
                                        document.getElementById("demo").innerHTML = "You will get ₦" + discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" + price;
                                    }
                                }
                                if (strUser == "3") {
                                    var percent = "1";
                                    var tot_price = parseInt(price - ((percent / 100) * price));
                                    var discount = parseInt(price - tot_price);
                                    if (discount > 0) {
                                        document.getElementById("demo").innerHTML = "You will get ₦" + discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" + price;
                                    }
                                }
                                $("#deduction").val(tot_price)
                            }
                        </script>
                        <div class="mb-3">
                            <label for="exampleInputIconLeft">Amount:</label>
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-money"></span></span>
                                <input type="number" class="form-control" id="amounts" name="amount" pattern="[0-9]" min="100" onchange="calculateAmount(this.value)" required placeholder="enter amount here" aria-label="amount" value="">
                            </div>
                        </div>
                        <input type="number" hidden name="deduction" id="deduction" />
                        <p id="demo" class="text-danger"></p>
                        <div class="mb-3"><label for="exampleInputIconLeft">Phone Number:</label>
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-phone-square"></span></span>
                                <input type="number" class="form-control" id="exampleInputIconLeft" pattern="[0-9]" name="phoneNumber" placeholder="enter number here" aria-label="phone" value="" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="checkbox" id="ported" name="ported" />
                                <label class="col-form-label" value="ported" for="ported">
                                    Ported Number
                                </label>
                            </div>
                        </div>
                        <input type="submit" name="myButton" id="myButton" class="btn btn-primary mr-2 mb-2" value="Submit">
                    </form>
                    <script type="text/javascript">
                        $("#theForm").on("submit", function (e) {
                            e.preventDefault();
                            var ported = document.getElementById("ported");
                            $("#myButton").val("submitting ...");
                            $("#myButton").attr("disabled", true);
                            var settings = {
                                "url": "/user/top-up.php",
                                "method": "POST",
                                "timeout": 0,
                                "data": {
                                    'top-up': 'top-up',
                                    'network': $("#ddlViewBy").val(),
                                    'amount': $("#amounts").val(),
                                    'deduction': $("#deduction").val(),
                                    'phoneNumber': $("#exampleInputIconLeft").val(),
                                    'ported': ported.checked
                                }
                            };
                            
                            bootbox.confirm({
                                title: 'Airtime',
                                message: 'Are you sure you want to proceed with the purchase?',
                                buttons: {
                                    cancel: {
                                        label: '<i class="fa fa-times"></i> Cancel'
                                    },
                                    confirm: {
                                        label: '<i class="fa fa-check"></i> Confirm'
                                    }
                                },
                                callback: function (result) {
                                    if(result) {
                                        $.ajax(settings).done(function (response) {
                                            if(response.detail) {
                                                bootbox.alert({
                                                    title: "Airtime Top Up",
                                                    message: response.detail,
                                                    size: 'small'
                                                });
                                                $("#myButton").val("Submit");
                                                $("#myButton").attr("disabled", false);
                                            } else if(response.status == 'fail') {
                                                bootbox.alert({
                                                    title: "Airtime Top Up",
                                                    message: response.message,
                                                    size: 'small'
                                                });
                                                $("#myButton").val("Submit");
                                                $("#myButton").attr("disabled", false);
                                            } else {
                                                if(response.error) {
                                                    bootbox.alert({
                                                        title: "Airtime Top Up",
                                                        message: response.error[0],
                                                        size: 'small'
                                                    });
                                                    $("#myButton").val("Submit");
                                                    $("#myButton").attr("disabled", false);
                                                }
                                                if(response.detail) {
                                                    bootbox.alert({
                                                        title: "Airtime Top Up",
                                                        message: response.detail[0],
                                                        size: 'small'
                                                    });
                                                    $("#myButton").val("Submit");
                                                    $("#myButton").attr("disabled", false);
                                                }
                                                bootbox.alert({
                                                    title: "Airtime Top Up",
                                                    message: response.Status,
                                                    size: 'small'
                                                });
                                                var settings = {
                                                    "url": "/user/top-up.php",
                                                    "method": "POST",
                                                    "timeout": 0,
                                                    "data": {
                                                        'save': 'save',
                                                        'ref': response.ident,
                                                        'amt': response.amount,
                                                        'deduction': $("#deduction").val(),
                                                        'network': response.plan_network,
                                                        'num': response.mobile_number
                                                    }
                                                };
                                                $.ajax(settings).done(function (rhes) {
                                                    bootbox.alert({
                                                        title: "Airtime Top Up",
                                                        message: rhes.status,
                                                        size: 'small'
                                                    });
                                                    setTimeout(window.location.reload(), 7500)
                                                });
                                            }
                                        });
                                    } else {      
                                        $("#myButton").val("Submit");
                                        $("#myButton").attr("disabled", false);
                                    }
                                }
                            });
                        })
                    </script>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-7 " style="margin-top:15px">
            <div class="row ">
                <form method="post" action="door/Airtime-Search-Results" autocomplete="off">
                    <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                    <div class="mb-3"><label for="exampleInputIconLeft">Searh Transaction</label>
                        <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-search"></span></span>
                            <input type="text" class="form-control" name="name" required value="" id="exampleInputIconLeft" placeholder="input query then press enter" aria-label="Search">
                        </div>
                    </div>
                </form>
            </div>

            <div class="card border-light shadow-sm ">
                <div class="card-body">

                    <h5>Transaction History</h5>
                    <div class="table-responsive">
                        <table class="table table-centered table-striped table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0">S/N</th>
                                    <th class="border-0">Ref. ID</th>
                                    <th class="border-0">Amount</th>
                                    <th class="border-0">Phone</th>
                                    <th class="border-0">Network</th>
                                    <th class="border-0">Type</th>
                                    <th class="border-0">Date</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0">Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //set counter variable
                                $counter = 1;
                                $sql = "SELECT * FROM `transactions` WHERE type='Airtime' and email ='$email' ORDER BY id DESC limit 15";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo ("	<td >" . $counter . "</td>
                                            <td>" . 'uc' . $row['id'] . "</td>
                                            <td>" . 'N' . number_format($row['amount']) . "</td>
                                            <td>" . $row['phonenumber'] . "</td>
                                            <td>" . $row['network'] . "</td>
                                            <td>" . $row['type'] . "</td>
                                            <td>" . $row['time'] . "</td>
                                            <td>" . $row['status'] . "</td>
                                             <td>". "<a href=AirtimeReceipt.php?id=".$row['id']."> <button type='button' class='btn btn-primary mr-2 mb-2'>Receipt</button></a>"."</td>  
                                            </tr>");
                                        $counter++; //increment counter by 1 on every pass
                                    }
                                } else {
                                    echo "No Transactions yet";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once('./footer.php');
    ?>