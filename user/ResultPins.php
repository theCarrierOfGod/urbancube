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
                                <div class="card border-light shadow-sm " style="margin-top:10px">
                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0 rounded">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="border-0">Exam</th>
                                                        <th class="border-0  d-none">Gold</th>
                                                        <th class="border-0  d-none">Silver</th>
                                                        <th class="border-0">Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-0">NECO</td>
                                                        <td class="border-0  d-none">₦750</td>
                                                        <td class="border-0  d-none">₦850</td>
                                                        <td class="border-0">₦1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-0">WAEC</td>
                                                        <td class="border-0  d-none">₦2,750</td>
                                                        <td class="border-0  d-none">₦2,850</td>
                                                        <td class="border-0">₦2,850</td>
                                                    </tr>
                                                    <tr class="d-none">
                                                        <td class="border-0">NABTEB</td>
                                                        <td class="border-0  d-none">₦900</td>
                                                        <td class="border-0  d-none">₦950</td>
                                                        <td class="border-0">₦1800</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-light shadow-sm " style="margin-top:10px">
                                    <div class="card-body" style="display: none" id="cardbody">
                                        <div class="alert alert-info" id="resulthere">
                                            Results here!
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="BuyPin" id="theform" autocomplete="off" method="post">
                                            <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                                            <div class="mb-3"><label for="exampleInputIconLeft">Exam Type:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <span class="fa fa-university"></span>
                                                    </span>
                                                    <select class="custom-select form-control" id="exam" name="Type" required>
                                                        <option value="">Select Exam </option>
                                                        <option value="1" disabled>
                                                            WAEC (₦2,850)
                                                        </option>
                                                        <option value="2">
                                                            NECO (₦1,000)
                                                        </option>
                                                        <option value="3" disabled>
                                                            NABTEB (₦1,900)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3"><label for="exampleInputIconLeft">Quantity:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <span class="fa fa-phone-square"></span>
                                                    </span>
                                                    <input type="number" class="form-control" id="exampleInputIconLeft" readonly value='1' name="quantity" placeholder="enter number here" aria-label="quantity" value="">
                                                </div>
                                            </div>
                                            <input type="submit" name="myButton" value="Submit" id='btnsubmit' class="btn btn-primary ">
                                        </form>
                                        <script>
                                            $("#theform").on("submit", function(e) {
                                                e.preventDefault();
                                                $('#cardbody').css('display', 'none');
                                                $("#btnsubmit").val('loading...');
                                                $("#btnsubmit").attr('disabled', true);
                                                $.ajax({
                                                    'url': '/user/exam.php',
                                                    'data': {
                                                        'exam': $("#exam").val(),
                                                        'quantity': $("#exampleInputIconLeft").val(),
                                                    },
                                                    'type': 'POST',
                                                    beforeSend: function() {
                                                        
                                                    },
                                                    success: function(response) {
                                                        if(response.error) {
                                                            $('#cardbody').css('display', 'block');
                                                            $('#resulthere').html(response.error);
                                                            bootbox.alert({
                                                                title: "Result Checker",
                                                                message: response.error,
                                                                size: 'small'
                                                            });
                                                        } else if(response.status) {
                                                            $('#cardbody').css('display', 'block');
                                                            $('#resulthere').html("Generated Pin: " + response.pin);
                                                            if(response.status == 'success') {
                                                                var formData = {
                                                                    'save': 'save',
                                                                    'ref': response.transid,
                                                                    'amount': response.amount + 100,
                                                                    'exam_name': $("#exam").val(),
                                                                    'pin' : response.pin,
                                                                };
                                                                $.ajax({
                                                                    'url': '/user/exam.php',
                                                                    'type': 'POST',
                                                                    'data': formData,
                                                                    beforeSend: function() {
                                                                        bootbox.alert({
                                                                            title: "Result Checker",
                                                                            message: 'Logging...',
                                                                            size: 'small'
                                                                        })
                                                                    },
                                                                    success: function(rhes) {
                                                                        console.log(rhes)
                                                                        bootbox.alert({
                                                                            title: "Result Checker",
                                                                            message: rhes.Status,
                                                                            size: 'small'
                                                                        });
                                                                        
                                                                        window.location.reload();
                                                                    }
                                                                })
                                                            } else {
                                                                bootbox.alert({
                                                                    title: "Result Checker",
                                                                    message: rhes.error,
                                                                    size: 'small'
                                                                });
                                                            }
                                                        }
                                                        $("#btnsubmit").val('Submit');
                                                        $("#btnsubmit").attr('disabled', false);
                                                    }
                                                })
                                            })
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-xl-7 mb-4">
                                <div class="card border-light shadow-sm ">
                                    <div class="card-body">
                                        <h5>Transaction History</h5>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0 rounded">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Amount</th>
                                                        <th class="border-0">Type</th>
                                                        <th class="border-0">Pin</th>
                                                        <th class="border-0">Transaction ID</th>
                                                        <th class="border-0">Date/Time</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    //set counter variable
                                                    $counter = 1;

                                                    $sql = "SELECT * FROM `transactions` WHERE type='exam' and email ='$email' ORDER BY id limit 15";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo ("
                                                            <tr>
                                                                <td >" . $counter . "</td>
                                                                <td>" . 'N' . number_format($row['amount']) . "</td>
                                                                <td>" . $row['network'] . "</td>
                                                                <td>" . $row['phonenumber'] . "</td>
                                                                <td>" . 'uc' . $row['id'] . "</td>
                                                                <td>" . $row['time'] . "</td>
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