
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
                <li  class="nav-item" ><a href="Airtime.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-phone-square"></span></span> <span>Buy Airtime</span></a></li>
                 <li  class="nav-item" ><a href="BuyData.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-wifi"></span></span> <span>Buy Data</span></a></li>
                   <li  class="nav-item" ><a href="DecoderSubscription.php" class="nav-link"><span class="sidebar-icon"><span class=" fa fa-tv"></span></span> <span>Decoder Subscription</span></a></li>
                     <li  class="nav-item"><a href="ElectricBillPayment.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-bolt"></span></span> <span>Electricity BIll</span></a></li>
                       <li  class="nav-item" ><a href="ResultPins.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-university"></span></span> <span>Exam Result Pins</span></a></li>
                       
                 <li     class="nav-item active"
><a href="AitimeToWallet.php" class="nav-link"><span class="sidebar-icon"><span class="fa fa-money"></span></span> <span>Airtime To Wallet</span></a></li>
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
                    <h5 style="padding:5px; margin-left:15px" class="">Charges</h5>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                            <tr>

                                <th class="border-0">MTN</th>
                                <th class="border-0">Airtel</th>
                                <th class="border-0">Glo</th>
                                <th class="border-0">9Mobile</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td class="border-0">20%</td>
                                <td class="border-0">25%</td>
                                <td class="border-0">30%</td>
                                <td class="border-0">25%</td>


                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 <div class="col-12 col-sm-12 col-xl-12 " style="margin-top:15px">
            <div class="card border-light shadow-sm ">
                <div class="card-body">
                   <p class="text-danger"><strong>Before you fill form to convert airtime to cash Kindly note the conditions below:</strong></p>
                        1. Fill the form below correctly for airtime to cash
                         <hr style="margin-top:1px">
2. The minimum amount for all network is ₦500 while the maximum  for MTN is ₦5,000, Airtel is ₦50,000, GLO is ₦1,000 & 9Mobile is ₦50,000 per transfer.
 <hr style="margin-top:1px">
3. We do not accept pin, please load it on your sim and transfer to us
 <hr style="margin-top:1px">
4. You must send the airtime within 20 minutes or the transaction will be automatically cancelled
 <hr style="margin-top:1px">
5. To transfer mtn airtime: *600*recipient number*amount*pin#
 <hr style="margin-top:1px">
6. To change mtn transfer pin: *600*default pin*new pin*new pin# e.g *600*0000*new pin*new pin#
 <hr style="margin-top:1px">
7. To transfer 9mobile airtime: *223*pin*amount*number#
 <hr style="margin-top:1px">
8. To change 9mobile transfer pin: *247*default pin*new pin#e.g *247*0000*new pin#
 <hr style="margin-top:1px">
9. To transfer Glo airtime: *131*recipient number*amount*pin#
 <hr style="margin-top:1px">
10. To change Glo transfer pin: *132*default pin*new pin*new pin# e.g *132*0000*new pin#
 <hr style="margin-top:1px">

11. You must not send any amount different from the amount filled
 <hr style="margin-top:1px">
12. We accept airtime transfer only. Any VTU sent to us will not be credited to your wallet.
                      
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-5 " style="margin-top:15px">
            <div class="card border-light shadow-sm ">
                <div class="card-body">

                    <form action="SaveAitimeToWallet.php" autocomplete="off" method="post"
                          onsubmit="return checkForm(this);">
                        <input type="hidden" name="_token" value="8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn">



                        <div class="mb-3"><label for="exampleInputIconLeft">Network:</label>
                            <div class="input-group"><span class="input-group-text" id="store"><span
                                        class="fa fa-broadcast-tower"></span></span>
                                <select class="custom-select form-control" id="ddlViewBy" onchange="myFunction()" name="network" required>
                                    <option value="">Select Network</option>
                                    <option value="MTN"> MTN</option>
 <option value="GLO"> GLO</option>
                                </select>
                            </div>
                        </div>
               <p id="demo" class="text-danger"></p>
                      
<script>
function myFunction() {
  var x = document.getElementById("ddlViewBy").value;
  var MTNstatus="Active";
  var AIRTELstatus="Disabled";
  var GLOstatus="Active";
  var ETISALATstatus="Disabled";
  
  if(MTNstatus == "Active"){
        if (x == "MTN") {
      var y=20
       var z=5000 
 document.getElementById("demo").innerHTML ="For MTN Airtime-To-Wallet, We Charge "   + y +"%";
  document.getElementById("SendTo").innerHTML ="Transfer The Airtime To This Number "   + "08034348201";
   document.getElementById("Max").innerHTML ="The Maximum  Amount For MTN Is " + z.toLocaleString() + " Naira";
}
      
  }
  
   if(GLOstatus == "Active"){
        if (x == "GLO") {
      var y=30
       var z=1000 
 document.getElementById("demo").innerHTML ="For GLO Airtime-To-Wallet, We Charge "   + y +"%";
  document.getElementById("SendTo").innerHTML ="Transfer The Airtime To This Number "   + "0" +09052925450;
  document.getElementById("Max").innerHTML ="The Maximum  Amount For GLO Is "  + z.toLocaleString() + " Naira";
}
      
  }
  
   if(AIRTELstatus == "Active"){
      
      
  if (x == "Airtel") {
      var y=25
       var z=50000 
 document.getElementById("demo").innerHTML ="For Airtel Airtime-To-Wallet, We Charge "   + y +"%";
  document.getElementById("SendTo").innerHTML ="Transfer The Airtime To This Number "   + "0" +09127564901;
  document.getElementById("Max").innerHTML ="The Maximum  Amount For Airtel Is "   + z.toLocaleString() + " Naira";
}
  }
  
   if(ETISALATstatus == "Active"){
      
        if (x == "9Mobile") {
      var y=25
      var z=50000 
 document.getElementById("demo").innerHTML ="For 9Mobile Airtime-To-Wallet, We Charge "   + y +"%";
  document.getElementById("SendTo").innerHTML ="Transfer The Airtime To This Number "   + "0" +08186455944;
  document.getElementById("Max").innerHTML ="The Maximum  Amount For Mobile Is "   + z.toLocaleString() + " Naira";
}

  }



  
  document.getElementById('amounts').value = "";
   document.getElementById('tot_amount').value = "";
}
</script> 
 <script>

            function calculateAmount(val) {
                var price = val * 1;
                var e = document.getElementById("ddlViewBy");
var strUser = e.value;

  var MTNstatus="Active";
  var AIRTELstatus="Disabled";
  var GLOstatus="Active";
  var ETISALATstatus="Disabled";
  
  if(MTNstatus == "Active"){
      
      if (strUser == "MTN") {
    
 var tot_price = parseInt(price - ((20/100) * price));
}
  }
  
   if(GLOstatus == "Active"){
      if (strUser == "GLO") {
 var tot_price = parseInt(price - ((30/100) * price));
}
      
  }
  
   if(AIRTELstatus == "Active"){
      
      if (strUser == "Airtel") {
  var tot_price = parseInt(price - ((25/100) * price));
}
  }
  
   if(ETISALATstatus == "Active"){
      if (strUser == "9Mobile") {
 var tot_price = parseInt(price - ((25/100) * price));
}
      
  }




                //display the result
               

                var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            }
        </script>
                        <div class="mb-3"><label for="exampleInputIconLeft">Airtime Amount:</label>
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"><span
                                        class="fa fa-money"></span></span>
                                <input type="number" class="form-control" id="amounts" name="tot_pin_requested" min="500" onchange="calculateAmount(this.value)"
                                       required placeholder="enter amount here" aria-label="amount"
                                       value="">

                            </div>
                                                    </div>
                        <p id="Max" class="text-danger"></p>
                         
                        <div class="mb-3"><label for="exampleInputIconLeft">Amount We Pay You:</label>
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"><span
                                        class="fa fa-money"></span></span>
                                <input type="number" class="form-control" readonly name="" id="tot_amount"
                                       placeholder="" aria-label="phone"
                                       >

                            </div>
                            
                        </div>
                        <p id="SendTo" class="text-danger"></p>
 <div class="mb-3"><label for="exampleInputIconLeft">Phone:</label>
                            <div class="input-group"><span class="input-group-text" id=""><span
                                        class="fa fa-phone"></span></span>
                                <input type="number" class="form-control" id="exampleInputIconLeft" name="Phone" 
                                       required placeholder="number transfering from " aria-label="amount"
                                       value="">

                            </div>
                                                    </div>
                        
                        <input type="submit" name="myButton" class="btn btn-primary mr-2 mb-2" value="Submit">


                    </form>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-7 " style="margin-top:15px">
            <div class="card border-light shadow-sm ">
                <div class="card-body">
                    <h5>Transaction History</h5>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                            <tr>
                                    <th class="border-0">Action</th>
                                <th class="border-0">Date</th>
                                <th class="border-0">Network</th>
                                <th class="border-0">Amount</th>
                                <th class="border-0">Phone</th>
                                <th class="border-0">Charges</th>
                                <th class="border-0">Transaction ID</th>
                                <th class="border-0">Status</th>
                            

                            </tr>
                            </thead>
                            <tbody>
                            

                            </tbody>
                        </table>
                    </div>
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