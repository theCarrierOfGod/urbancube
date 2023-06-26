<?php
    session_start();
    require_once("./config.php");
    
    $testApiKey = "MK_PROD_FLBYFFEYU6" ;
    $testApiSecret = "8F18U5U706YTVK9CCUACEPH7PHDBFV4X";
    $authorizationToken = base64_encode("$testApiKey:$testApiSecret");
    
    if (isset($_SESSION['login'])) {
        $email = $_SESSION['login'];
        $id_num = $_SESSION['id'];
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        $online = mysqli_fetch_assoc($query);
        $refcode = $online['refcode'];
        $newNotification = $online['newNotification'];
        if($newNotification == 1) {
            $notice = $online['notificationBody'];
            echo "<script> alert('Welcome, $notice')</script>";
            mysqli_query($con, "UPDATE customers SET newNotification=0 WHERE email='$email'");
        }
    } else {
        header("Location: /login.php");
        exit();
    }
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.all.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    function getAccount() {
        $.ajax({
            url: 'https://api.monnify.com/api/v1/auth/login',
            headers: {
                "Content-Type" : "application/json",
                "Authorization" : "Basic <?php echo $authorizationToken; ?>"
            },
            type: 'post',
            success: function(data) {
                let token = data.responseBody.accessToken;
                console.log(token);
                var jsonData = JSON.stringify({
                    "accountReference" : "<?php echo $online['refcode']; ?>",
                    "accountName" : "<?php echo $online['username']; ?>",
                    "currencyCode" : "NGN",
                    "contractCode" : "694565219017",
                    "customerEmail" : "<?php echo $online['email']; ?>",
                    "customerName" : "<?php echo $online['lastname'] . " " . $online['firstname']; ?>",
                    "getAllAvailableBanks" : false,
                    "preferredBanks" : ["035", "232", "50515"]
                });
                $.ajax({
                    url: 'https://api.monnify.com/api/v2/bank-transfer/reserved-accounts/<?php echo $refcode; ?>',
                    headers: {
                        "Content-Type" : "application/json",
                        "Authorization" : `Bearer ${token}`
                    },
                    type: 'get',
                    contentType: "application/json",
                    success: function (response) {
                        console.log(response);
                        var saveData = `accountReference=<?php echo $refcode; ?>&accountName=${response.responseBody.accounts[0].accountName}&wemaNumber=${response.responseBody.accounts[0].accountNumber}&moniepointNumber=${response.responseBody.accounts[2].accountNumber}&sterlingNumber=${response.responseBody.accounts[1].accountNumber}&username=<?php echo $online['username']; ?>`;
                        $.ajax({
                            url: '/monnify.php',
                            type: 'get',
                            data: saveData,
                            contentType: 'application/json',
                            success: function(data) {
                                window.location.reload;
                            }
                        })
                    },
                    error: function() {
                        $.ajax({
                            url: 'https://api.monnify.com/api/v2/bank-transfer/reserved-accounts',
                            headers: {
                                "Content-Type" : "application/json",
                                "Authorization" : `Bearer ${token}`
                            },
                            type: 'post',
                            data: jsonData,
                            contentType: "application/json",
                            success: function (response) {
                                console.log(response);
                                var saveData = `accountReference=<?php echo $refcode; ?>&accountName=${response.responseBody.accountName}&wemaNumber=${response.responseBody.accounts[0].accountNumber}&moniepointNumber=${response.responseBody.accounts[2].accountNumber}&sterlingNumber=${response.responseBody.accounts[1].accountNumber}&username=<?php echo $online['username']; ?>`;
                                $.ajax({
                                    url: '/monnify.php',
                                    type: 'get',
                                    data: saveData,
                                    contentType: 'application/json',
                                    success: function(data) {
                                        window.location.reload;
                                    }
                                })
                            }
                        })
                    }
                })
            }
        })
    }
</script>

<?php
    if(empty($online['wemaName'])) {
        echo "<script> getAccount(); </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UrbanCube | Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content=UrbanCube>
    <meta name="author" content="JCWORLD">
    <meta name="description" content="We offer Online electricity bill payment, airtime recharge, mobile data top up, cable decoder subscription, etc." />
    <meta name="keywords" content="subscribe gotv,dstv, startimes, data plan in nigeria, recharge card, mtn, glo, 9mobile, airtile, vtu,sme, data plan, cheap data, browsing plan,eskay,nepa,phcn,phed" />

    <meta property="og:type" content="website">
    <link rel="apple-touch-icon" sizes="120x120" href="img/logo/UrbanCube_icon_without_bg1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo/UrbanCube_icon_without_bg1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/UrbanCube_icon_without_bg1.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="img/logo4.png" color="#262b40">
    <meta name="msapplication-TileColor" content="#262b40">
    <meta name="theme-color" content="#262b40">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css" integrity="sha512-Aa+z1qgIG+Hv4H2W3EMl3btnnwTQRA47ZiSecYSkWavHUkBF2aPOIIvlvjLCsjapW1IfsGrEO3FU693ReouVTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" href="css/all.min.css" rel="stylesheet">
    <link type="text/css" href="css/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="css/volt.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $(document).ready(function() {
            $(".menu").on("click", function() {
                $("#sidebarMenu").toggleClass("collapse");
            })
        })
    </script>
    <style>
        .bootbox-close-button {
            border: none;
            position: absolute;
            right: 15px;
            background: orangered;
            color: white;
            border-radius: 10px;
        }
    </style>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X605S25R15"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X605S25R15');
</script>
</head>

<body>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
        <a class="navbar-brand mr-lg-5" href="https://UrbanCube.net/user/dashboard.php" style="color:white;font-weight:bolder;font-size:20px">
            <strong>
                <img src="img/logo/UrbanCube_without_bg1.png" alt="UrbanCube" />
            </strong>
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed menu" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="user-avatar lg-avatar mr-4">
                        <i class="fa fa-user-circle" style="font-size:36px"></i>
                    </div>
                    <div class="d-block">
                        <h2 class="h6">Hi, <?php echo $online['username']; ?></h2>
                        <form method="post" action="logout.php">
                            <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn" />
                            <button type="submit" class="btn btn-secondary text-dark btn-xs">
                                <span class="mr-2">
                                    <span class="fa fa-sign-out"></span>
                                </span>Sign Out
                            </button>
                        </form>
                    </div>
                </div>
                <div class="collapse-close d-md-none menu"><a href="#sidebarMenu" class="fa fa-times" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a></div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item  <?php if ($_SERVER['SCRIPT_NAME'] == '/user/dashboard.php') {
                                            echo 'active';
                                        } ?>">
                    <a href="dashboard.php" class="nav-link">
                        <span class="sidebar-icon">
                            <span class="fa fa-chart-pie"></span></span>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
               <!-- <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/Wallet.php') {
                                        echo 'active';
                                    } ?>">
                    <a href="Wallet.php" class="nav-link">
                        <span class="sidebar-icon">
                            <span class="fa fa-usd"></span>
                        </span>
                        <span>Fund Wallet</span>
                    </a>
                </li>-->
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/Airtime.php') {
                                        echo 'active';
                                    } ?>">
                    <a href="Airtime.php" class="nav-link">
                        <span class="sidebar-icon">
                            <span class="fa fa-phone-square"></span>
                        </span>
                        <span>Buy Airtime</span>
                    </a>
                </li>
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/BuyData.php') {
                                        echo 'active';
                                    } ?>">
                    <a href="BuyData.php" class="nav-link">
                        <span class="sidebar-icon">
                            <span class="fa fa-wifi"></span>
                        </span>
                        <span>Buy Data</span>
                    </a>
                </li>
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/DecoderSubscription.php') {
                                        echo 'active';
                                    } ?>">
                    <a href="DecoderSubscription.php" class="nav-link">
                        <span class="sidebar-icon">
                            <span class=" fa fa-tv"></span>
                        </span>
                        <span>Decoder Subscription</span>
                    </a>
                </li>
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/ElectricBillPayment.php') {
                                        echo 'active';
                                    } ?>"><a href="ElectricBillPayment.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-bolt"></span></span> <span>Electricity BIll</span></a></li>


                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/ResultPins.php') {
                                        echo 'active';
                                    } ?>"><a href="ResultPins.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-university"></span></span> <span>Exam Result Pins</span></a></li>


                <li class="nav-item d-none <?php if ($_SERVER['SCRIPT_NAME'] == '/user/AirtimeToWallet.php') {
                                        echo 'active';
                                    } ?>"><a href="AirtimeToWallet.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-money"></span></span> <span>Airtime To Wallet</span></a></li>


                <li class="nav-item d-none <?php if (($_SERVER['SCRIPT_NAME'] == '/user/RefferalList.php') || ($_SERVER['SCRIPT_NAME'] == '/user/WithdrawRefferal.php')) {
                                        echo 'active';
                                    } ?>"><span class="nav-link d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app" aria-expanded="true"><span><span class="sidebar-icon"><span class="fa fa-users"></span></span> <span class="sidebar-text">Referral</span> </span><span class="link-arrow"><span class="fa fa-chevron-right"></span></span></span>
                    <div class="multi-level collapse show" role="list" id="submenu-app" aria-expanded="false" style="">
                        <ul class="flex-column nav">
                            <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/RefferalList.php') {
                                                    echo 'active';
                                                } ?>"><a class="nav-link" href="RefferalList.php"><span class="sidebar-text-contracted">D</span> <span class="sidebar-text">Referral List</span></a></li>
                            <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] == '/user/WithdrawRefferal.php') {
                                                    echo 'active';
                                                } ?>"><a class="nav-link" href="WithdrawRefferal.php"><span class="sidebar-text-contracted">B</span> <span class="sidebar-text">Cashout Referral</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if (($_SERVER['SCRIPT_NAME'] == '/user/UserProfile.php') || $_SERVER['SCRIPT_NAME'] == '/user/PasswordSettings.php') {
                                        echo 'active';
                                    } ?>">
                    <a href="UserProfile.php" class="nav-link">
                        <span class="sidebar-icon">
                            <span class="fa fa-cog"></span>
                        </span>
                        <span>Account Settings</span>
                    </a>
                </li>
                 <li class="nav-item <?php if (($_SERVER['SCRIPT_NAME'] == '/user/UserProfile.php') || $_SERVER['SCRIPT_NAME'] == '/user/PasswordSettings.php') {
                                        echo 'active';
                                    } ?>">
                    <a href="https://chat.whatsapp.com/JKBnEzoatGd5yNETTxz4pv" target="_blank" class="nav-link">
                        <span class="sidebar-icon">
                            <span class="fa fa-whatsapp"></span>
                        </span>
                        <span>Whatsapp Community</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>