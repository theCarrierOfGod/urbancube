<?php
include_once('./header.php');
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
    <div class="row justify-content-md-center">
        <div class="col-12 mb-4">
            <div class="card bg-yellow shadow-sm">
                <div class="card-header d-flex flex-row align-items-center flex-0">
                    <div class="d-block">
                        <div class="h5 font-weight-normal mb-2" style="color:#4a5073; font-size:17px">Welcome to UrbanCube! <?php echo ($online['firstname']); ?> <?php echo ($online['lastname']); ?></div><h2 class="h5" style="font-size:17px"> </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fa fa-money"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1">₦ <?php echo ($online['balance']); ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1">₦ <?php echo ($online['balance']); ?></h3>
                            </div>
                            <div class="text-right">
                                <a href="Wallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Fund Wallet</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-secondary rounded mr-4"><span class="fa fa-usd"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Commission</h2>
                                <h3 class="mb-1">₦ <?php //echo $total = $online['downlines'] * 100; ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Commission</h2>
                                <h3 class="mb-1">₦ <?php //echo $total = $online['downlines'] * 100; ?></h3>
                            </div>
                            <div class="text-right">
                                <a href="WithdrawRefferal.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Cashout</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fa fa-users"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Referral's</h2>
                                <h3 class="mb-1">
                                    <?php
                                /*    $sponsor_usern = $online['username'];

                                    $sql = "SELECT * FROM `customers` WHERE sponsor='$sponsor_usern'";
                                    $result = $con->query($sql);

                                    if ($result = mysqli_query($con, $sql)) {
                                        $rowcount = mysqli_num_rows($result);
                                        // Display result
                                        printf("Total refs:  %d\n", $rowcount);
                                    } else {
                                        echo "0";
                                    }
                                    */
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Referral's</h2>
                                <h3 class="mb-1"> <?php
                                               /*     $insss = "SELECT * FROM `customers` WHERE email='" . $email . "'";
                                                    $quesss = mysqli_query($conn, $insss) or die(mysqli_error($conn));
                                                    $row = mysqli_fetch_assoc($quesss);
                                                    $sponsor_usern = $row['username'];

                                                    $sql = "SELECT * FROM `customers` WHERE sponsor='$sponsor_usern'";
                                                    $result = $con->query($sql);

                                                    if ($result = mysqli_query($con, $sql)) {
                                                        // output data of each row
                                                        // Return the number of rows in result set
                                                        $rowcount = mysqli_num_rows($result);

                                                        // Display result
                                                        printf("Total refs:  %d\n", $rowcount);
                                                    } else {
                                                        echo "0";
                                                    }
                                                    */
                                                    ?> </h3>
                            </div>
                            <div class="text-right" style="height:30px">


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <div class="content-main" id="content-main">
        <div class="white bg b-b px-3">
            <div class="row">
                <div class="col-sm-6 order-sm-1">
                    <div class="py-4 clearfix nav-active-theme">
                        <ul class="nav nav-pills nav-sm">
                            <li class="nav-item"><a class="nav-link active" href="#" data-toggle="tab" data-target="#PROFILE">Profile</a></li>
                            <li class="nav-item" style="margin-left:10px"><a class="nav-link" href="PasswordSettings.php" data-target="#QUERYS">Password Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding">
            <div class="row">
                <div class="col-sm-9 col-lg-8">
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
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="PROFILE">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="dt-card">
                                            <!-- Card Body -->
                                            <div class="dt-card__body">
                                                <!-- Form -->
                                                <!-- Form -->
                                                <form action="saveProfile.php" method="post" onsubmit="return checkForm(this);">
                                                    <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" readonly placeholder="enter name here " value="<?php echo $online['username']; ?>" />
                                                    </div>
                                                    <!-- /form group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <label for="fullname">FullName</label>
                                                        <input type="text" class="form-control" readonly placeholder="enter name here " value="<?php echo $online['firstname'] . " " . $online['lastname']; ?>">
                                                    </div>
                                                    <!-- /form group -->
                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="number" id="phone" name="Phone" class="form-control" placeholder="enter name here " value="<?php echo $online['phonenumber']; ?>" />
                                                    </div>
                                                    <!-- /form group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" readonly placeholder="enter name here " value="<?php echo $online['email']; ?>">
                                                    </div>
                                                    <!-- /form group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <label for="level">Level</label>
                                                        <input type="text" id="level" class="form-control" readonly placeholder="enter name here " value="Basic">
                                                    </div>
                                                    <!-- /form group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <input type="text" id="location" class="form-control" readonly value="<?php echo $online['address']; ?>" />
                                                        <br />
                                                        <select name="Location" class="form-control" id="simple-select">
                                                            <option value="" selected="selected"> - change location - </option>
                                                            <option value="Abuja FCT">Abuja FCT</option>
                                                            <option value="Abia">Abia</option>
                                                            <option value="Adamawa">Adamawa</option>
                                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                                            <option value="Anambra">Anambra</option>
                                                            <option value="Bauchi">Bauchi</option>
                                                            <option value="Bayelsa">Bayelsa</option>
                                                            <option value="Benue">Benue</option>
                                                            <option value="Borno">Borno</option>
                                                            <option value="Cross River">Cross River</option>
                                                            <option value="Delta">Delta</option>
                                                            <option value="Ebonyi">Ebonyi</option>
                                                            <option value="Edo">Edo</option>
                                                            <option value="Ekiti">Ekiti</option>
                                                            <option value="Enugu">Enugu</option>
                                                            <option value="Gombe">Gombe</option>
                                                            <option value="Imo">Imo</option>
                                                            <option value="Jigawa">Jigawa</option>
                                                            <option value="Kaduna">Kaduna</option>
                                                            <option value="Kano">Kano</option>
                                                            <option value="Katsina">Katsina</option>
                                                            <option value="Kebbi">Kebbi</option>
                                                            <option value="Kogi">Kogi</option>
                                                            <option value="Kwara">Kwara</option>
                                                            <option value="Lagos">Lagos</option>
                                                            <option value="Nassarawa">Nassarawa</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Ogun">Ogun</option>
                                                            <option value="Ondo">Ondo</option>
                                                            <option value="Osun">Osun</option>
                                                            <option value="Oyo">Oyo</option>
                                                            <option value="Plateau">Plateau</option>
                                                            <option value="Rivers">Rivers</option>
                                                            <option value="Sokoto">Sokoto</option>
                                                            <option value="Taraba">Taraba</option>
                                                            <option value="Yobe">Yobe</option>
                                                            <option value="Zamfara">Zamfara</option>
                                                            <option value="Outside Nigeria">Outside Nigeria</option>
                                                        </select>
                                                    </div>
                                                    <!-- /form group -->

                                                    <!-- Form Group --><br>
                                                    <div class="form-group mb-0">
                                                        <input type="submit" name="myButton" value="Save" id='btnsubmit' class="btn btn-primary ">
                                                    </div>
                                                    <!-- /form group -->
                                                </form>
                                                <!-- /form -->
                                            </div>
                                            <!-- /card body -->
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






    <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Announcements!</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <p>1. ALL NETWORK DATA IS NOW AVAILABLE(MTN,AIRTEL, GLO &amp; ETISALAT). ENJOY!</p>


                    <p>2. DATA FOR ALL NETWORKS NOW AVAILABLE.</p>


                    <p>3. MTN COPORATE GIFTING DATA BALANCE CODE: *131*4# |||

                        MTN SME DATA BALANCE CODE *461*4# |||

                        AIRTEL DATA BALANCE CODE *141# |||

                        GLO DATA BALANCE CODE *127*0# |||

                        9MOBILE DATA BALANCE CODE *228# |||</p>






                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link text-gray ml-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once('./footer.php');
    ?>