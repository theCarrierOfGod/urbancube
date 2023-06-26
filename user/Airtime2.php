
<?php
session_start();
include_once("config.php");



$email = $_SESSION['login'];
$id_num = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UrbanCube</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="instantsub">
    <meta name="author" content="Oghenero">
    <meta name="description"  content="We offer Online electricity bill payment, airtime recharge, mobile data top up, cable decoder subscription, etc."/>
    <meta name="keywords"
          content="subscribe gotv,dstv, startimes, data plan in nigeria, recharge card, mtn, glo, 9mobile, airtile, vtu,sme, data plan, cheap data, browsing plan,eskay,nepa,phcn,phed"/>

    <meta property="og:type" content="website">
      <link rel="apple-touch-icon" sizes="120x120" href="volt/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="volt/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="volt/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="volt/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="volt/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link type="text/css" href="css/all.min.css" rel="stylesheet">
    <link type="text/css" href="css/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="css/main.min.css" rel="stylesheet">
    <link type="text/css" href="css/dropzone.min.css" rel="stylesheet">
    <link type="text/css" href="css/choices.min.css" rel="stylesheet">
    <link type="text/css" href="css/leaflet.css" rel="stylesheet">
    <link type="text/css" href="css/volt.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>
<script type="text/javascript">

  function checkForm(form) // Submit button clicked
  {
    //
    // check form input values
    //

    form.myButton.disabled = true;
    form.myButton.value = "Please wait...";
    return true;
  }



</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none"><a class="navbar-brand mr-lg-5" href="https://UrbanCube.com" style="color:white;font-weight:bolder;font-size:20px"><strong>UrbanCube</strong></a>
        <div class="d-flex align-items-center"><button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button></div>
    </nav>
    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="user-avatar lg-avatar mr-4"><i class="fa fa-user-circle" style="font-size:36px"></i></div>
                    <div class="d-block">
                        <h2 class="h6">Hi, User Name</h2><a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fa fa-sign-out"></span></span>Sign Out</a></div>
                </div>
                <div class="collapse-close d-md-none"><a href="#sidebarMenu" class="fa fa-times" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a></div>
            </div>
            <ul class="nav flex-column">
                <li  class="nav-item"><a href="dashboard.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-chart-pie"></span></span> <span>Dashboard</span></a></li>
                                                       
                                       
                                                        <li  class="nav-item"><a href="Wallet.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-usd"></span></span> <span>Fund Wallet</span></a></li>
                <li     class="nav-item active"
 class="nav-item" ><a href="Airtime.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-phone-square"></span></span> <span>Buy Airtime</span></a></li>
                 <li  class="nav-item" ><a href="BuyData.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-wifi"></span></span> <span>Buy Data</span></a></li>
                   <li  class="nav-item" ><a href="DecoderSubscription.php" class="nav-link"><span class="sidebar-icon"><span class=" fa fa-tv"></span></span> <span>Decoder Subscription</span></a></li>
                     <li  class="nav-item"><a href="ElectricBillPayment.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-bolt"></span></span> <span>Electricity BIll</span></a></li>
                       <li  class="nav-item" ><a href="ResultPins.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-university"></span></span> <span>Exam Result Pins</span></a></li>
                       
                 <li ><a href="AitimeToWallet.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-money"></span></span> <span>Airtime To Wallet</span></a></li>
              <li    class="nav-item"><span class="nav-link d-flex justify-content-between align-items-center" data-toggle="collapse"
                           data-target="#submenu-app" aria-expanded="true"><span><span class="sidebar-icon"><span
        class="fa fa-users"></span></span> <span class="sidebar-text">Referral</span> </span><span
        class="link-arrow"><span class="fa fa-chevron-right"></span></span></span>
    <div class="multi-level collapse show" role="list" id="submenu-app" aria-expanded="false" style="">
        <ul class="flex-column nav">
             <li class="nav-item"><a class="nav-link" href="RefferalList.php"><span
                    class="sidebar-text-contracted">D</span> <span class="sidebar-text">Referral List</span></a></li>
            <li class="nav-item"><a class="nav-link" href="WithdrawRefferal.php"><span
                    class="sidebar-text-contracted">B</span> <span class="sidebar-text">Cashout Referral</span></a></li>
        </ul>
    </div>
</li>
                <li class="nav-item"><a href="UserProfile.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-cog"></span></span> <span>Account Settings</span></a></li>
               
               
               
            </ul>
        </div>
    </nav>
    <main class="content">

       
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="btn-toolbar dropdown"><button class="btn btn-outline-primary btn-sm mr-2 " data-toggle="modal" data-target="#modal-default" ><span class="fa fa-bullhorn mr-2"></span>News Update</button>
            
              
            </div>
            <div class="btn-group"><a href="UserProfile.php"> <button type="button" style="border-radius:10px; margin-right:3px" class="btn btn-sm btn-outline-primary"><i class="fa fa-cog"> </i>   </button></a>
            <form action="logout.php" method="post">
                <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">
                <button type="submit" class="btn btn-sm btn-outline-pinterest"><i class="fa fa-sign-out"></i> </button>
            </form> </div>
        </div>
        <div class="row justify-content-md-center">
                
        <script type="text/javascript">
            $(document).ready(function () {
                $("#InsufficientFund").modal('show');
            });
        </script>
        <div id="InsufficientFund" class="modal fade" data-backdrop="static" data-keyboard="false"
             style="display: none;"
             aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger " style="color: white; opacity: 0.8">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" style="color:white">Insufficient
                            Fund!</h6>
                        <button type="button" style="color:white" class="btn-close" data-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="" style="font-size:14px">you do not have enough money in your wallet to perform this
                            transaction. please fund your wallet and try again!</p>
                    </div><!-- modal-body -->
                    <div class="modal-footer">

                        <button type="button" class="btn btn-link text-gray ml-auto" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div>
    



    
    
    
          
        
        </div>
          <div class="row">

        <div class="col-12 col-sm-6 col-xl-5 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span
                                    class="fa fa-money"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1"> ₦0</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Wallet Balance</h2>
                                <h3 class="mb-1"> ₦0</h3>
                            </div>
                            <div class="text-right">
                                <a href="Wallet.php" class="btn btn-outline-dark btn-sm mr-3 text-right">Fund
                                    Wallet</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

       <div class="col-12 col-sm-6 col-xl-7 ">
                <div class="card border-light shadow-sm ">
    <div class="">
        <h5 style="padding:5px; margin-left:15px" class="" >Discounts</h5>
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
                                                  <tr>
                   
                     <td class="border-0">Silver</td>
                                           <td class="border-0">1%</td>
                                                                   <td class="border-0">1%</td>
                                                                     <td class="border-0">2%</td>
                                                                 <td class="border-0">2%</td>
                                          
                </tr>
                                                   <tr>
                   
                     <td class="border-0">Gold</td>
                                            <td class="border-0">2%</td>
                                                                   <td class="border-0">2%</td>
                                                                     <td class="border-0">3%</td>
                                                                 <td class="border-0">3%</td>
                                          
                </tr>
                               
                </tbody>
            </table>
        </div>
    </div>
</div>
            </div>
        <div class="col-12 col-sm-6 col-xl-5 " style="margin-top:15px">
            <div class="card border-light shadow-sm ">
                <div class="card-body">


                   <form action="Airtime.php"  autocomplete="off" method="post" onsubmit="return checkForm(this);">
                                    <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">

           
              <div class="mb-3"><label for="exampleInputIconLeft">Network:</label>
    <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-broadcast-tower"></span></span>
      <select class="custom-select form-control" id="ddlViewBy" onchange="myFunction()" name="network" required>
                                                    <option value="" >Select Network</option>
                                                     
                                                                        <option  value="1">
                                        MTN
                                    </option>
                                                                        <option  value="2">
                                        Airtel
                                    </option>
                                                                        <option  value="3">
                                        GLO
                                    </option>
                                                                        <option  value="4">
                                        9Mobile
                                    </option>
                                                                                    </select>
    </div>
      
</div>
 <script>
function myFunction() {
  var x = document.getElementById("ddlViewBy").value;

 document.getElementById("demo").innerHTML ="" ;
   document.getElementById('amounts').value = "";
}
</script> 
  <script>

            function calculateAmount(val) {
                var price = val * 1;
               
             
                var e = document.getElementById("ddlViewBy");
var strUser = e.value;

if (strUser == "") {
    
  document.getElementById("demo").innerHTML ="please select network first";
  
}
if (strUser == "1") {
  
 var percent="1";


 var tot_price = parseInt(price - ((percent/100) * price));
  var discount = parseInt(price - tot_price);
  if(discount > 0 ){
    document.getElementById("demo").innerHTML ="You will get ₦"+discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" +price;
}

               
}
if (strUser == "3") {
     var percent="1";
 var tot_price = parseInt(price - ((percent/100) * price));
  var discount = parseInt(price - tot_price);
  
  if(discount > 0 ){
    document.getElementById("demo").innerHTML ="You will get ₦"+discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" +price;
}
}
if (strUser == "2") {
    var percent="1";
   var tot_price = parseInt(price - ((percent/100) * price));
  var discount = parseInt(price - tot_price);
   
              if(discount > 0 ){
    document.getElementById("demo").innerHTML ="You will get ₦"+discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" +price;
}
}
if (strUser == "4") {
    var percent="1";
 var tot_price = parseInt(price - ((percent/100) * price));
  var discount = parseInt(price - tot_price);
  
                 if(discount > 0 ){
    document.getElementById("demo").innerHTML ="You will get ₦"+discount + " discount" + " and pay ₦" + tot_price + " instead of ₦" +price;
}
}
                //display the result
               

               
            }
        </script>


           
           
           <div class="mb-3"><label for="exampleInputIconLeft">Amount:</label>
    <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-money"></span></span>
          <input type="number" class="form-control" id="amounts" name="amount" min="100" onchange="calculateAmount(this.value)"
                                       required placeholder="enter amount here" aria-label="amount"
                                       value="">                                
    </div>
         </div>
 <p id="demo" class="text-danger"></p>
 
                         


    <div class="mb-3"><label for="exampleInputIconLeft">Phone Number:</label>
    <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-phone-square"></span></span>
        <input type="number" class="form-control" id="exampleInputIconLeft" name="phoneNumber" placeholder="enter number here" aria-label="phone" value="">
                                               
    </div>
     </div>
           <input type="submit" name="myButton" class="btn btn-primary mr-2 mb-2" value="Submit">
                                          
     
       </form>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-7 " style="margin-top:15px">
            <div class="row ">
                  <form method="post" action="door/Airtime-Search-Results" autocomplete="off" >
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
                                    <th class="border-0">Action</th>
                                    
                                     <th class="border-0">Phone</th>
                                      <th class="border-0">Amount</th>
                                               <th class="border-0">Network</th>
                                              <th class="border-0">Date</th>
                                
                       
                               
                               
                               

                            </tr>
                            </thead>
                            <tbody>
                            

                            </tbody>
                        </table>
                        
                    </div>
                    <br>
                    
                </div>
            </div>
        </div>


    </div>

        <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"><h2 class="h6 modal-title">Announcements!</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                                      
                     <p>1. ALL NETWORK DATA IS NOW AVAILABLE(MTN,AIRTEL, GLO &amp; ETISALAT). ENJOY!</p>
     
                           
                     <p>2. DATA FOR ALL NETWORKS NOW AVAILABLE.</p>
     
                           
                     <p>3. MTN COPORATE GIFTING DATA BALANCE CODE: *131*4#      |||

MTN SME DATA BALANCE CODE *461*4#    |||

        AIRTEL DATA BALANCE CODE *141#      |||

GLO DATA BALANCE CODE *127*0#    |||

9MOBILE DATA BALANCE CODE *228#    |||</p>
     
                        
                
                
                
              
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-link text-gray ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        <footer class="footer section py-5">
            <div class="row">
                <div class="col-12 col-lg-7 mb-4 mb-lg-0">
               <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="" target="_blank">UrbanCube | By JCWORLD</a></p>
                </div>
               
            </div>
        </footer>
    </main>
    <script src="volt/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="volt/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="volt/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="volt/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="volt/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="volt/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="volt/vendor/countup.js/dist/countUp.umd.js"></script>
    <script src="volt/vendor/notyf/notyf.min.js"></script>
    <script src="volt/vendor/chartist/dist/chartist.min.js"></script>
    <script src="volt/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="volt/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="volt/vendor/fullcalendar/main.min.js"></script>
<script src="volt/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="volt/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="volt/vendor/notyf/notyf.min.js"></script>
<script src="volt/vendor/leaflet/dist/leaflet.js"></script>
<script src="volt/vendor/svgmap/dist/svgMap.min.js"></script>
    <script src="volt/vendor/simplebar/dist/simplebar.min.js"></script>
    <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
    <script src="js/volt.js"></script>
     <script type="text/javascript">
  (function () {
      var options = {
          whatsapp: "+2348132019878", // WhatsApp number
          call_to_action: "Message us", // Call to action
          position: "right", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>
</body>

</html>

<?php

?>