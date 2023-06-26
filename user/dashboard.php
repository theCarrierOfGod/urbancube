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
        <div class="btn-group">
            <a href="UserProfile.php">
                <button type="button" style="border-radius:10px; margin-right:3px" class="btn btn-sm btn-outline-primary">
                    <i class="fa fa-cog"> </i>
                </button>
            </a>
            <form action="logout.php" method="post">
                <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                <button type="submit" class="btn btn-sm btn-outline-pinterest"><i class="fa fa-sign-out"></i> </button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-12 mb-4">
     <div class="card bg-yellow shadow-sm">
      <div class="card-header d-flex flex-row align-items-center flex-0">
             <div class="d-block">
                    <div class="h5 font-weight-normal mb-2" style="color:#4a5073; font-size:17px">Funding currently not available</div><h2 class="h5" style="font-size:17px"> </h2>
                 </div>
       </div>
         </div>
      </div>
        
        <div class="col-12 mb-4">
            <div class="card bg-yellow shadow-sm">
                <div class="card-header d-flex flex-row align-items-center flex-0">
                    <div class="d-block">
                        <div class="h5 font-weight-normal mb-2" style="color:#4a5073; font-size:17px">Welcome to UrbanCube! <?php echo ($online['firstname']); ?> <?php echo ($online['lastname']); ?></div><h2 class="h5" style="font-size:17px"> </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-xl-8 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fa fa-money"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1">₦ <?php echo number_format($online['balance']); ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1">₦ <?php echo number_format($online['balance']); ?></h3>
                            </div>
                         <!--   <div class="text-right">
                                <a href="Wallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Fund Wallet</a>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    <div class="row">
        <div class="col-12 col-xl-12 mb-4 <?php if(empty($online['wemaName'])) { echo "d-none"; } ?>">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-header">
                                Unique Account Number
                            </div>
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="d-block">
                                            <label class="mb-0" style="font-size: 14px;">
                                                You can deposit or transfer fund into your unique UrbanCube account number to get credited instantly. You can pay any amount, at any time, using any means (Website, Mobile App, USSD, ATM, POS e.t.c) to the unique UrbanCube account number to credit your wallet instantly.
                                                Please note that there is a charge of 1% capped at #50 for payments made into your unique UrbanCube account number. This means, if you pay #1000, #10 charge would be deducted. If you pay #5000, 1% charge would be #50. Payments above #5000 will have a charge of #50 only.
                                            </label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card mt-4">
                                                        <div class="card-body">
                                                            <h6 class="mb-0">
                                                                Bank Name: Moniepoint Microfinance Bank
                                                            </h6>
                                                            <hr />
                                                            <h6 class="mb-0">
                                                                Account Name: urbancube Enterprise-<?php echo $online['moniepointName']; ?>
                                                            </h6>
                                                            <hr />
                                                            <h6 class="mb-0">
                                                                Account Number: <?php echo $online['moniepointNumber']; ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card mt-4">
                                                        <div class="card-body">
                                                            <h6 class="mb-0">
                                                                Bank Name: Sterling Bank
                                                            </h6>
                                                            <hr />
                                                            <h6 class="mb-0">
                                                                Account Name: urbancube Enterprise-<?php echo $online['sterlingName']; ?>
                                                            </h6>
                                                            <hr />
                                                            <h6 class="mb-0">
                                                                Account Number: <?php echo $online['sterlingNumber']; ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card mt-4">
                                                        <div class="card-body">
                                                            <h6 class="mb-0">
                                                                Bank Name: Wema Bank
                                                            </h6>
                                                            <hr />
                                                            <h6 class="mb-0">
                                                                Account Name: urbancube Enterprise-<?php echo $online['wemaName']; ?>
                                                            </h6>
                                                            <hr />
                                                            <h6 class="mb-0">
                                                                Account Number: <?php echo $online['wemaNumber']; ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            -->
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon icon-shape icon-sm icon-shape-blue rounded mr-3"><span class="fa fa-phone-square"></span></div>
                                        <div class="d-block"><label class="mb-0">MTN, Airtel, Glo, 9Mobile</label>
                                            <h4 class="mb-0">Airtime</h4>
                                            <br>
                                            <a href="Airtime.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Buy Airtime</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon icon-shape icon-sm icon-shape-warning rounded mr-3"><span class="fa fa-wifi"></span></div>
                                        <div class="d-block"><label class="mb-0">MTN, Airtel, Glo, 9Mobile</label>
                                            <h4 class="mb-0">Internet Data</h4>
                                            <br>
                                            <a href="BuyData.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Buy Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon icon-shape icon-sm icon-shape-warning rounded mr-3"><span class="fa fa-tv"></span></div>
                                        <div class="d-block"><label class="mb-0">DSTV, GOtv, Startimes</label>
                                            <h4 class="mb-0">Decoder Subscription</h4>
                                            <br>
                                            <a href="DecoderSubscription.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Recharge</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon icon-shape icon-sm icon-shape-blue rounded mr-3"><span class="fa fa-bolt"></span></div>
                                        <div class="d-block"><label class="mb-0">PHCN, PHED, IKEDC, ETC.</label>
                                            <h4 class="mb-0">Electricity Bill</h4>
                                            <br>
                                            <a href="/user/ElectricBillPayment.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Recharge</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon icon-shape icon-sm icon-shape-blue rounded mr-3"><span class="fa fa-university"></span></div>
                                        <div class="d-block"><label class="mb-0">WAEC, NECO, etc.</label>
                                            <h4 class="mb-0">Examination Pins</h4>
                                            <br>
                                            <a href="ResultPins.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Recharge</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 ">
                    <div class="col-12 px-0">
                        <div class="card border-light shadow-sm">
                            <div class="card-body">
                                <div class="d-block">
                                    <div class="d-flex align-items-center ">
                                        <div class="icon icon-shape icon-sm icon-shape-warning rounded mr-3"><span class="fa fa-money-check"></span></div>
                                        <div class="d-block"><label class="mb-0">MTN, Airtel, Glo, 9Mobile.</label>
                                            <h4 class="mb-0">Airtime To Cash</h4>
                                            <br>
                                            <a href="AitimeToWallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Convert Airtime</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <?php
    include_once('./footer.php');
    ?>