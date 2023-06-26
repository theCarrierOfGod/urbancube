<?php
include_once("header.php");
?>
    <main class="content">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="btn-toolbar dropdown">
                <button class="btn btn-outline-primary btn-sm mr-2 " data-toggle="modal" data-target="#modal-default" >
                    <span class="fa fa-bullhorn mr-2"></span>News Update
                </button>
            </div>
            <div class="btn-group"><a href="UserProfile.php"> <button type="button" style="border-radius:10px; margin-right:3px" class="btn btn-sm btn-outline-primary"><i class="fa fa-cog"> </i>   </button></a>
            <form action="logout.php" method="post">
                <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                <button type="submit" class="btn btn-sm btn-outline-pinterest"><i class="fa fa-sign-out"></i> </button>
            </form> </div>
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
            
             <div class="card border-light shadow-sm " style="margin-top:15px">
    <div class="card-body">

      
                               <form action="ElectricityVerification" id="theform" method="post">
                                    <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQglkujYn">
                                    <div class="" >
                                        <div class="">
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-12">Meter Type</label>
                                                <div class="col-lg-12">
                                                    <select class="custom-select form-control" id="providers" required="" name="MeterType">
                                                        <option value="">select</option>
                                                        <option value="1, prepaid">Prepaid</option>
                                                        <option value="2, postpaid">Postpaid</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-12">Electricity Company</label>
                                                <div class="col-lg-12">
                                                    <select class="custom-select form-control" id="package" required="" name="package">
                                                        <option value="">select</option>
                                                        <option  value="1, Ikeja Electricity"> IKEJA Electric - IKEDC </option>
                                                        <option  value="2, Eko Electricity"> EKO Electric - EKEDC </option>
                                                        <option  value="3, Abuja Electricity"> Abuja Electric - AEDC </option>
                                                        <option  value="4, Kano Electricity"> Kano Electric - KEDC </option>
                                                        <option  value="5, Enugu Electricity"> Enugu Electric </option>
                                                        <option  value="6, PortHarcourt Electricity"> PORTHARCOURT Electric - PHEDC </option>
                                                        <option  value="7, Ibadan Electricity"> IBADAN ELECTRIC - IBEDC </option>
                                                        <option  value="8, Kaduna Electric"> KADUNA ELECTRIC - KADC </option>
                                                        <option  value="9, Jos Electricity"> JOS Electric - JEDC </option>
                                                        <option  value="10, Benin Electric"> Benin ELECTRIC </option>
                                                        <option  value="11, Yola Electricity"> Yola Electric </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-12">Amount</label>
                                                <div class="col-lg-12">
                                                    <input type="number" pattern="[0-9]*" name="Amount" min="100" id="amounts" class="form-control" required placeholder="enter amount here ">
                                                </div>
                                                <div class="col-lg-12">
                                                    <span id="demo"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-12">Meter Number</label>
                                                <div class="col-lg-12">
                                                    <input type="number" pattern="[0-9]*" name="MeterNo" id=MeterNo class="form-control" required placeholder="enter meter number here ">
                                                </div>
                                            </div>
                                            <input type="hidden" name="electricName" id="electricName" />
                                            <div id="electricDetailsDiv" style="display: none;" class="form-group row">
                                                <label class="col-form-label col-lg-12">Electric Details</label>
                                                <div class="col-lg-12">
                                                    <input type="text" id="electricDetails" name="electricDetails" class="form-control" required placeholder="Electric Details ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-8"></label>
                                                <div class="col-lg-2">
                                                </div>
                                            </div>
                                        </div>
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
                                    </div>
                                    </div>
                                    </div>
                                        <script type="text/javascript">
                                            $("#MeterNo").on('change', function() {
                                                $("#electricDetails").empty();
                                                $("#electricDetailsDiv").css("display", "none");
                                                $("#paymentButton").css("display", "none");
                                            })
                                            $("#package").on("change", function() {
                                                var package = $('#package').val();
                                                $("#electricName").val(package.split(', ')[1]);
                                            });
                                            
                                            $("#myButton").on("click", function(e) {
                                                e.preventDefault();
                                                let meter_number = $("#MeterNo").val();
                                                let meter_type = $("#providers").val();
                                                let disco = $('#package').val().split(', ')[0];
                                                if(meter_number == "" || meter_type == "" || disco == "") {
                                                    bootbox.alert({
                                                        title: 'Electic Bills',
                                                        message: 'Fill required fields',
                                                        size: 'small'
                                                    });
                                                } else {
                                                    var formData = {
                                                        'meter_number': meter_number,
                                                        'meter_type': $('#providers').val().split(', ')[1],
                                                        'disco': disco
                                                    }
                                                    $.ajax({
                                                        'url': 'https://a2zdataplug.com/api/bill/bill-validation',
                                                        'data': formData,
                                                        'type': 'GET',
                                                        'beforeSend': function() {
                                                            $("#myButton").html("Verifying...");
                                                            $("#myButton").attr("disabled", true);
                                                        },
                                                        'success': function(response) {
                                                            $("#electricDetailsDiv").css("display", "block");
                                                            $("#electricDetails").val(response.name);
                                                            $("#myButton").html("Verify");
                                                            $("#myButton").css("display", "none");
                                                            $("#paymentButton").css("display", "block");
                                                        },
                                                        'error': function(err) {
                                                            bootbox.alert({
                                                                title: 'Electic Bills',
                                                                message: 'Invalid meter number',
                                                                size: 'small'
                                                            });
                                                            $("#myButton").html("Verify");
                                                            $("#myButton").attr("disabled", false);
                                                        }
                                                    })
                                                }
                                            });
                                            
                                            $("#theform").on("submit", function (e) {
                                                e.preventDefault();
                                                let meter_number = $("#MeterNo").val();
                                                let meter_type = $("#providers").val();
                                                let disco = $('#package').val().split(', ')[0]
                                                var settings = {
                                                    "url": "/user/electricBill.php",
                                                    "method": "POST",
                                                    "timeout": 0,
                                                    "data": {
                                                        'disco': disco,
                                                        'meter_type': $('#providers').val().split(', ')[0],
                                                        'meter_number': meter_number,
                                                        'bypass': false,
                                                        'amount': $("#amounts").val(),
                                                        'meter_name': $('#package').val().split(', ')[1],
                                                    }
                                                }
                                                
                                                bootbox.confirm({
                                                    title: 'Electric Bill',
                                                    message: 'You are about to purchase ' + $("#amounts").val() + " on " + meter_number,
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
                                                                if(response.Status === "successful") {
                                                                    bootbox.alert({
                                                                        title: "Electric Bill",
                                                                        message: 'processing...',
                                                                        size: 'small'
                                                                    });
                                                                    var settings = {
                                                                        "url": "/user/saveElectric.php?login=<?php echo $_SESSION['login']; ?>&meter_name=" + $('#package').val().split(', ')[1],
                                                                        "method": "POST",
                                                                        "timeout": 0,
                                                                        "data": response
                                                                    };
                                                                    $.ajax(settings).done(function (rhes) {
                                                                        bootbox.alert({
                                                                            title: "Electric Bill",
                                                                            message: rhes.status,
                                                                            size: 'small'
                                                                        });
                                                                        setTimeout(window.location.reload(), 6000)
                                                                    });
                                                                } else {
                                                                    bootbox.alert({
                                                                        title: "Electric Bill",
                                                                        message: "Electricity Bill unavailable at the moment",
                                                                        size: 'small'
                                                                    });
                                                                }
                                                        })
                                                        }
                                                    }
                                                });
                                            })
                                        </script>
            
<div class="col-12 col-sm-12 col-xl-7 mb-4">
                
                
                  <div class="card border-light shadow-sm ">
    <div class="card-body">
        <h5>Transaction History</h5>
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                <tr>
                      <th class="border-0">S/N</th>
                      <th class="border-0">Transaction ID</th>
                    <th class="border-0">Date/Time</th>
                    <th class="border-0">Amount</th>
                    <th class="border-0">Meter No</th>
                      <th class="border-0">Status</th>
                </tr>
                </thead>
                <tbody>
                                     
                <?php 
          
          //set counter variable
$counter = 1;

          $sql = "SELECT * FROM `transactions` WHERE type='electric' and email ='$email' ORDER BY id limit 15";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo (   "	<td >" . $counter ."</td>
   
    <td>".'uc'.$row['id'] ."</td>
    <td>".$row['time']."</td>

    <td>". 'N'. number_format ($row['amount'])."</td>
  <td>".$row['meter_no'] . "</td>
  
  <td>".$row['status'] . "</td>
 
  
 

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
   <?php
                    include_once('./footer.php');
                    ?>