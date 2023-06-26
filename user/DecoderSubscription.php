<?php
                include_once("header.php");
                ?>
                <main class="content">


                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                        <div class="btn-toolbar dropdown"><button class="btn btn-outline-primary btn-sm mr-2 " data-toggle="modal" data-target="#modal-default"><span class="fa fa-bullhorn mr-2"></span>News Update</button>


                        </div>
                        <div class="btn-group"><a href="UserProfile.php"> <button type="button" style="border-radius:10px; margin-right:3px" class="btn btn-sm btn-outline-primary"><i class="fa fa-cog"> </i> </button></a>
                            <form action="logout.php" method="post">
                                <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                                <button type="submit" class="btn btn-sm btn-outline-pinterest"><i class="fa fa-sign-out"></i> </button>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-xl-5 mb-4">
                                <div class="card border-light shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-block d-xl-flex align-items-center">
                                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fa fa-money"></span></div>
                                                <div class="d-sm-none">
                                                    <h2 class="h5">Wallet Balance</h2>
                                                    <h3 class="mb-1"> ₦<?php
                                                                        $email = $_SESSION['login'];
                                                                        $sql = "SELECT balance FROM `customers` WHERE email= '$email'";
                                                                        $result = $con->query($sql);

                                                                        if ($result->num_rows > 0) {
                                                                            // output data of each row
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                //  echo ($row['balance']);
                                                                                echo (number_format($row['balance']));
                                                                            }
                                                                        } else {
                                                                            echo "0";
                                                                        }
                                                                        ?></h3>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-7 px-xl-0">
                                                <div class="d-none d-sm-block">
                                                    <h2 class="h5">Wallet Balance</h2>
                                                    <h3 class="mb-1"> ₦<?php
                                                                        $email = $_SESSION['login'];
                                                                        $sql = "SELECT balance FROM `customers` WHERE email= '$email'";
                                                                        $result = $con->query($sql);

                                                                        if ($result->num_rows > 0) {
                                                                            // output data of each row
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                //  echo ($row['balance']);
                                                                                echo (number_format($row['balance']));
                                                                            }
                                                                        } else {
                                                                            echo "0";
                                                                        }
                                                                        ?></h3>
                                                </div>
                                                <div class="text-right">
                                                    <a href="Wallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Fund Wallet</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-7 ">
                                <div class="card border-light shadow-sm ">
                                    <div class="">
                                        <h5 style="padding:5px; margin-left:15px" class="">Discounts</h5>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0 rounded">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="border-0"></th>
                                                        <th class="border-0">GOTV</th>
                                                        <th class="border-0">DSTV</th>
                                                        <th class="border-0">STARTIMES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-0">Basic</td>
                                                        <td class="border-0">none</td>
                                                        <td class="border-0">none</td>
                                                        <td class="border-0">none</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-0">Silver</td>
                                                        <td class="border-0">none</td>
                                                        <td class="border-0">none</td>
                                                        <td class="border-0">none</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-0">Gold</td>
                                                        <td class="border-0">1%</td>
                                                        <td class="border-0">1%</td>
                                                        <td class="border-0">1%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-5 " style="margin-top:15px">
                                <div class="card border-light shadow-sm ">
                                    <div class="card-body">
                                        <form action="DecoderVerification" id="theform" method="post" >
                                            <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                                            <div class="">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 w-100" for="providers">Select Decoder Type</label>
                                                    <div class="col-lg-12">
                                                        <select class="custom-select  form-control" id="providers" required="" name="network">
                                                            <option value="">Please select ...</option>
                                                            <option value="2">
                                                                DSTV
                                                            </option>
                                                            <option value="1">
                                                                GOTV
                                                            </option>
                                                            <option value="3">
                                                                STARTIMES
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-12" for="package">Decoder Packages</label>
                                                    <div class="col-lg-12 wrapper">
                                                        <select class="custom-select form-control" id="package" name="package">
                                                            <option value=""> Please select decoder type</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="planAmount" id="planAmount" />
                                                <input type="hidden" name="planName" id="planName" />
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-12" for="SmartNo">IUC/ Smart Card Number</label>
                                                    <div class="col-lg-12">
                                                        <input type="number" pattern="[0-9]*" id="SmartNo" name="SmartNo" class="form-control" maxlength="16" placeholder="IUC ">
                                                    </div>
                                                </div>
                                                
                                                <div id="cableDetailsDiv" style="display: none;" class="form-group row">
                                                    <label class="col-form-label col-lg-12">Cable Details</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" id="cableDetails" name="cableDetails" class="form-control" required placeholder="Cable Details ">
                                                    </div>
                                                </div>
                                                
                                                
                                                <script type="text/javascript">
                                                    $("#SmartNo").on('keyup', function() {
                                                        $("#cableDetails").empty();
                                                        $("#cableDetailsDiv").css("display", "none");
                                                        $("#paymentButton").css("display", "none");
                                                    })
                                                    $('#providers').on('change', function(e) {
                                                        var provider_id = e.target.value;
                                                        if(provider_id == "") {
                                                            $('#package').html('<option value=""> Please select decoder type</option>');
                                                            return false;
                                                        }
                                                        $.get('/user/json-decoder.php?provider_id=' + provider_id, function(data) {
                                                            console.log(data);
                                                            $('#package').empty();
                                                            $('#package').append('<option value="0" disable="true" selected="true">Select Package</option>');
                                                            $.each(data, function(index, packageObj) {
                                                                $('#package').append('<option id="d' + packageObj.plan_id + '" value="' + packageObj.plan_id + ', ' + packageObj.plan_amount + ', ' + packageObj.plan_name +'">' + packageObj.plan_name + ' (₦' + packageObj.plan_amount + ')</option>');
                                                            })
                                                        });
                                                    });
                                                    $("#package").on("change", function() {
                                                        var package = $('#package').val();
                                                        $("#planAmount").val(package.split(', ')[1]);
                                                        $("#planName").val(package.split(', ')[2]);
                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="button" name="myButton" id="myButton" class="btn btn-primary mr-2 mb-2 w-100">
                                                    Verify
                                                </button>
                                                <button type="submit" name="paymentButton" id="paymentButton" class="btn btn-primary mr-2 mb-2 w-100" style="display: none;">
                                                    Make Payment
                                                </button>
                                            </div>
                                        </form>
                                        <script>
                                            $("#myButton").on("click", function(e) {
                                                e.preventDefault();
                                                
                                                var formData = {
                                                    'iuc': $("#SmartNo").val(),
                                                    'cable': $("#providers").val(),
                                                    'validate': 'validate'
                                                }
                                                $.ajax({
                                                    'url': 'https://a2zdataplug.com/api/cable/cable-validation',
                                                    'data': formData,
                                                    'type': 'GET',
                                                    'beforeSend': function() {
                                                        $("#myButton").html("Verifying...");
                                                        $("#myButton").attr("disabled", true);
                                                    },
                                                    'success': function(response) {
                                                        $("#cableDetailsDiv").css("display", "block");
                                                        $("#cableDetails").val(response.name);
                                                        $("#myButton").html("Verify");
                                                        $("#myButton").css("display", "none");
                                                        $("#paymentButton").css("display", "block");
                                                    },
                                                    'error': function(err) {
                                                        bootbox.alert({
                                                            title: 'IUC Verification',
                                                            message: 'Invalid IUC number',
                                                            size: 'small'
                                                        });
                                                        $("#myButton").html("Verify");
                                                        $("#myButton").attr("disabled", false);
                                                    }
                                                })
                                            });
                                        </script>
                                        <script type="text/javascript">
                                            $("#theform").on("submit", function (e) {
                                                e.preventDefault();
                                                $("#myButton").val("Processing...");
                                                $("#myButton").attr("disabled", true);
                                                var settings = {
                                                    "url": "/user/cablesub.php",
                                                    "method": "POST",
                                                    "timeout": 0,
                                                    "data": {
                                                        'cableSub': 'cableSub',
                                                        'cable': $("#providers").val(),
                                                        'cable_plan': $("#package").val().split(',')[0],
                                                        'iuc': $("#SmartNo").val(),
                                                        'amount': $("#planAmount").val(),
                                                    }
                                                };
                                                
                                                bootbox.confirm({
                                                    title: 'Cable TV',
                                                    message: 'You are about to purchase ' + $("#planName").val() + " on " + $("#SmartNo").val(),
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
                                                                if(response.error) {
                                                                    bootbox.alert({
                                                                        title: "Cable TV",
                                                                        message: response.error,
                                                                        size: 'small'
                                                                    });
                                                                    $("#myButton").val("Submit");
                                                                    $("#myButton").attr("disabled", false);
                                                                } else if(response.detail) {
                                                                    bootbox.alert({
                                                                        title: "Cable TV",
                                                                        message: response.detail,
                                                                        size: 'small'
                                                                    });
                                                                    $("#myButton").val("Submit");
                                                                    $("#myButton").attr("disabled", false);
                                                                } else if(response.Status == 'successful') {
                                                                    // bootbox.alert({
                                                                    //     title: "Data bundle",
                                                                    //     message: response.Status,
                                                                    //     size: 'small'
                                                                    // });
                                                                    // $("#myButton").html('Submit');
                                                                    // $('#myButton').attr('disabled', false);
                                                                    // setTimeout(window.location.reload(), 7500);
                                                                    
                                                                    let price = $("#planAmount").val();
                                                                    var settings = {
                                                                        "url": "/user/saveCable2.php?login=<?php echo $email; ?>&price=" + price,
                                                                        "method": "POST",
                                                                        "timeout": 0,
                                                                        "data": response
                                                                    };
                                                                    $.ajax(settings).done(function (rhes) {
                                                                        bootbox.alert({
                                                                            title: "Decoder Subsription",
                                                                            message: rhes.status,
                                                                            size: 'small'
                                                                        });
                                                                        $("#myButton").html('Submit');
                                                                        $('#myButton').attr('disabled', false);
                                                                        // setTimeout(window.location.reload(), 7500)
                                                                    });
                                                                } else {
                                                                    $("#myButton").html('Submit');
                                                                    $('#myButton').attr('disabled', false);
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
                            <div class="col-12 col-sm-12 col-xl-7 mb-4" style="margin-top:15px">
                                <div class="card border-light shadow-sm ">
                                    <div class="card-body">
                                        <h5>Transaction History</h5>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0 rounded">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Transaction ID</th>
                                                        <th class="border-0">Amount</th>
                                                        <th class="border-0">Date/Time</th>
                                                        <th class="border-0">Package</th>
                                                        <th class="border-0">IUC/Decoder Number</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    //set counter variable
                                                    $counter = 1;

                                                    $sql = "SELECT * FROM `transactions` WHERE type='decoder' and email ='$email' ORDER BY id DESC limit 15";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo ("
                                                            <tr>
                                                                <td >" . $counter . "</td>
                                                                <td>" . 'uc' . $row['id'] . "</td>
                                                                <td>" . 'N' . number_format($row['amount']) . "</td>
                                                                <td>" . $row['time'] . "</td>
                                                                <td>" . $row['package'] . "</td>
                                                                <td>" . $row['decoder_no'] . "</td>
                                                                <td>" . $row['status'] . "</td>
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
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php
                    include_once('./footer.php');
                    ?>