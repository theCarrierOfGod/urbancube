<?php
include_once("header.php");

echo "<script>alert('Wallet Funding currently unavailable');
window.location.replace('dashboard.php')</script>";
die();
?>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
<script>
    function payWithPaystack() {
        document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" disabled class="btn btn-primary mr-2 mb-2"><i class='fa fa-spinner fa-spin'></i> Processing...</button>`;
        let price = document.getElementById("amounts").value;
        let handler = PaystackPop.setup({
            key: 'pk_live_3a42e21e26f1724c66750664ed9db95fabb1bb9f', // Replace with your public key
            email: '<?php echo $email; ?>',
            amount: document.getElementById("amounts").value * 100,
            ref: 'uc' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function() {
                alert('Window closed by user');
                document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" id="paymentForm" onclick="payWithPaystack()" class="btn btn-primary mr-2 mb-2">Submit Now3</button>`;
            },
            callback: function(response) {
                $.ajax({
                    url: 'newTransaction.php',
                    method: 'post',
                    data: 'referenceNumber=' + response.reference + '&amount=' + price + '&paystack',
                    beforeSend: function() {
                        document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" disabled class="btn btn-primary mr-2 mb-2"><i class='fa fa-spinner fa-spin'></i> Processing...</button>`;
                    },
                    success: function(data) {
                        console.log(data);
                        document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" disabled class="btn btn-primary mr-2 mb-2">Success</button>`;
                        window.location.reload();
                    },
                    error: function(err) {
                        alert(err);
                        document.getElementById("walletButton").innerHTML = `<small class="text-danger">Error!</small>`;
                    }
                })
            }
        });
        handler.openIframe();
    }

    function payWithCoupon() {
        document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" disabled class="btn btn-primary mr-2 mb-2"><i class='fa fa-spinner fa-spin'></i> Processing...</button>`;
        let price = document.getElementById("amounts").value;
        let couponn = document.getElementById("couponn").value;
        window.location.href = 'fund_coupon.php?coupon=' + couponn
    }
</script>
<script type="text/javascript">
	function payWithMonnify() {
	    let price = document.getElementById("amounts").value;
	    console.log(price)
		MonnifySDK.initialize({
			amount: price,
			currency: "NGN",
			reference: '' + Math.floor((Math.random() * 1000000000) + 1),
			customerName: "<?php echo $online['lastname'] . ' ' . $online['firstname']; ?>",
			customerEmail: "<?php echo $email; ?>",
			apiKey: "MK_PROD_FLBYFFEYU6",
			contractCode: "694565219017",
			paymentDescription: "Fund Wallet",
			isTestMode: false,
			paymentMethods: ["CARD", "ACCOUNT_TRANSFER"],
			onComplete: function(response){
				//Implement what happens when transaction is completed.
	 			console.log(response);
	 			if(response.status == "SUCCESS") {
	 			    $.ajax({
                        url: 'newTransaction.php',
                        method: 'post',
                        data: 'transactionReference=' + response.transactionReference + '&amount=' + response.amount + '&monnify',
                        beforeSend: function() {
                            document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" disabled class="btn btn-primary mr-2 mb-2"><i class='fa fa-spinner fa-spin'></i> Processing...</button>`;
                        },
                        success: function(data) {
                            console.log(data);
                            document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" disabled class="btn btn-primary mr-2 mb-2">Success</button>`;
                            window.location.reload();
                        },
                        error: function(err) {
                            alert(err);
                            document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" class="btn btn-primary mr-2 mb-2">Proceed</button>`;
                        }
                    })
	 			} else {
	 			    document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" class="btn btn-primary mr-2 mb-2">Proceed</button>`;
	 			}
			},
			onClose: function(data){
				//Implement what should happen when the modal is closed here
				console.log(data);
				// alert(data.responseMessage);
			}
		});
	}
</script>

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
    <div>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-5 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fa fa-money"></span></div>
                                <div class="d-sm-none">
                                    <h2 class="h5">Wallet Balance</h2>
                                    <h3 class="mb-1"> ₦ <?php echo (number_format($online['balance'])); ?></h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h5">Wallet Balance</h2>
                                    <h3 class="mb-1"> ₦ <?php echo (number_format($online['balance'])); ?></h3>
                                </div>
                                <div class="text-right">
                                    <a href="Wallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Fund Wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-light shadow-sm" style="margin-top:15px">
                    <div class="card-body">
                        <?php
                        if (isset($_GET['success'])) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                <strong>
                                    <?php echo $_GET['success']; ?>
                                </strong>
                            </div>
                            <?php
                        }
                        if (isset($_GET['error'])) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>
                                    <?php echo $_GET['error']; ?>
                                </strong>
                            </div>
                            <?php
                        }
                        ?>
                        
                        <!--<pre class="text-info" style="font-size: 12px">-->
                        <!--    Please note that there is a charge of #10 capped at #50 for all wallet funding. This means, if you pay #100, #10 charge would be deducted. If you pay #500, 10% charge would be #50. Payments above #500 will have a charge of #50 only.-->
                        <!--</pre>-->
                        <form accept-charset="UTF-8" class="form-horizontal" role="form" autocomplete="off" Method="POST">
                            <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                            <div class="form-group " style="color: black">
                                <label class="col-form-label col-lg-12">Payment Method</label>
                                <div class="col-lg-12">
                                    <select class="custom-select form-control" id="ddlViewBy" onchange="myFunction()" required name="MethodPay">
                                        <option value="">Select payment method</option>
                                        <option value="1"> Automatic Funding </option>
                                        <option value="5"> Internet Banking (Monnify)</option>
                                        <option value="2"> Internet Banking (Paystack)</option>
                                        <option value="3"> Fund with Coupon Code</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group " style="color: black">
                                <label class="col-form-label col-lg-12" id="amountLabel"></label>

                                <input type="hidden" required name="PaymentFor" value="FundWallet">
                                <div class="col-lg-12">
                                    <input type="hidden" pattern="[0-9]*" placeholder="Enter amount" id="amounts" class="form-control" required name="amount">
                                </div>
                            </div>
                            
                            <p id="demo" style="margin-top:10px"></p>

                            <div class="form-group " style="color: black">
                                <div class="col-lg-12">
                                    <input type="hidden" type="text" placeholder="Enter a valid coupon code" id="couponn" class="form-control" required name="couponn" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label col-lg-8"></label>
                                <div class="col-lg-12" id="walletButton"></div>
                            </div>
                            <script>
                                function myFunction() {
                                    var method = document.getElementById("ddlViewBy").value;
                                    if (method == "") {
                                        var message = "please select a method of payment";
                                        document.getElementById("demo").innerHTML = message;
                                        document.getElementById('couponn').type = 'hidden';
                                        document.getElementById('amounts').type = 'hidden';
                                        document.getElementById('amountLabel').innerHTML = '';
                                    }

                                    if (method == "1") {
                                        var message = `
                                            <p>
                                                Below are unique account numbers mapped to you. Your wallet will be automatically funded upon transferring to one of the accounts below at anytime. 
                                            </p>
                                            
                                            <div class="card-body <?php if(empty($online['moniepointNumber'])){ echo 'd-none'; } ?>" id="autoFund" style="color: black">
                                                <h6 class="mb-0">
                                                    Account Name: urbancube Enterprise-<?php echo $online['moniepointName']; ?>
                                                </h6>
                                                <hr />
                                                <h6 class="mb-0">
                                                    Bank Name: Moniepoint Microfinance Bank
                                                </h6>
                                                <h6 class="mb-0">
                                                    Account Number: <?php echo $online['moniepointNumber']; ?>
                                                </h6>
                                                <hr />
                                                <h6 class="mb-0">
                                                    Bank Name: Sterling Bank
                                                </h6>
                                                <h6 class="mb-0">
                                                    Account Number: <?php echo $online['sterlingNumber']; ?>
                                                </h6>
                                                <hr />
                                                <h6 class="mb-0">
                                                    Bank Name: Wema Bank
                                                </h6>
                                                <h6 class="mb-0">
                                                    Account Number: <?php echo $online['wemaNumber']; ?>
                                                </h6>
                                            </div>
                                            <div class="card-body <?php if(empty($online['moniepointNumber'])){ echo "d-block"; } else { echo "d-none"; } ?>" id="autoFund" style="color: black">
                                                Your unique urban cube account hasn't been generated.
                                            </div>
                                        `;
                                        document.getElementById("demo").innerHTML = message;
                                        document.getElementById('couponn').type = 'hidden';
                                        document.getElementById('amounts').type = 'hidden';
                                        document.getElementById("walletButton").innerHTML = "";
                                        document.getElementById('amountLabel').innerHTML = '';
                                    }
                                    if (method == "2") {
                                        var message = "You can make payment on Paystack checkout form with payment methods like cards, bank accounts, USSD etc. This feature is available all the time";
                                        document.getElementById("demo").innerHTML = message;
                                        document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" id="paymentForm" onclick="payWithPaystack()" class="btn btn-primary mr-2 mb-2">Proceed</button>`;

                                        document.getElementById('couponn').type = 'hidden';
                                        document.getElementById('amounts').type = 'text';
                                        document.getElementById('amountLabel').innerHTML = 'Amount';
                                    }
                                    if (method == "3") {
                                        var message = "Please Enter the Coupon Code Provided for you by the Admin below";
                                        document.getElementById("demo").innerHTML = message;
                                        document.getElementById('couponn').type = 'text';
                                        document.getElementById('amounts').type = 'hidden';
                                        document.getElementById('amountLabel').innerHTML = '';
                                        document.getElementById("walletButton").innerHTML = `
                                                <button type="button" name="myButton" onclick="payWithCoupon()" id="paymentForm" class="btn btn-primary mr-2 mb-2">Fund Wallet</button>
                                        `;
                                    }
                                    if (method == "4") {
                                        var message = "You will be charged 1.3%.";
                                        document.getElementById("demo").innerHTML = message;
                                        document.getElementById('couponn').type = 'hidden';
                                        document.getElementById('amounts').type = 'text';
                                        document.getElementById('amountLabel').innerHTML = 'Amount';

                                    }
                                    if (method == "5") {
                                        var message = "A dynamic account number is generated for every transaction. A dynamic account number expires after 40 minutes and is only be valid for a single payment session. Do not refresh the payment page and click the button labeled 'I’ve transferred the money' after transfering the specified amount to the dynamic account number. Your account will be funded instantly.";
                                        document.getElementById("demo").innerHTML = message;
                                        document.getElementById("walletButton").innerHTML = `<button type="button" name="myButton" id="paymentForm" onclick="payWithMonnify()" class="btn btn-primary mr-2 mb-2">Proceed</button>`;

                                        document.getElementById('couponn').type = 'hidden';
                                        document.getElementById('amounts').type = 'text';
                                        document.getElementById('amountLabel').innerHTML = 'Amount';
                                    }
                                }
                            </script>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-7 mb-4">
                <div class="card border-light shadow-sm ">
                    <div class="card-body">
                        <h5>Transaction History</h5>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0">#</th>
                                        <th class="border-0">Date/Time</th>
                                        <th class="border-0">Transaction ID</th>
                                        <th class="border-0">Amount</th>
                                        <th class="border-0">Status</th>
                                        <th class="border-0">Payment Method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //set counter variable
                                    $counter = 1;
                                    $sql = "SELECT * FROM `transactions` WHERE total='credit' and email='$email' ORDER BY id DESC limit 10";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo ("
                                                <tr>
                                                    <td >" . $counter . "</td>
                                                    <td>" . $row['time'] . "</td>
                                                    <td>" . 'uc' . $row['id'] . "</td>
                                                    <td>" . 'N' . number_format($row['amount']) . "</td>
                                                    <td>" . $row['status'] . "</td>
                                                    <td>" . $row['type'] . "</td>
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