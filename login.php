
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login | UrbanCube</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="">
    <meta name="author" content="JCWORLD">
    <meta name="description"  content="We offer Online electricity bill payment, airtime recharge, mobile data top up, cable decoder subscription, etc."/>
    <meta name="keywords"
          content="subscribe gotv,dstv, startimes, data plan in nigeria, recharge card, mtn, glo, 9mobile, airtile, vtu,sme, data plan, cheap data, browsing plan,eskay,nepa,phcn,phed"/>

    <meta property="og:type" content="website">
      <link rel="apple-touch-icon" sizes="120x120" href="https://urbancube.net/img/logo/UrbanCube_icon_without_bg1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://urbancube.net/img/logo/UrbanCube_icon_without_bg1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://urbancube.net/img/logo/UrbanCube_icon_without_bg1.png">
    <link rel="manifest" href="volt/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="volt/assets/img/favicon/safari-pinned-tab.svg" color="#262b40">
    <meta name="msapplication-TileColor" content="#262b40">
    <meta name="theme-color" content="#262b40">
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link type="text/css" href="css/all.min.css" rel="stylesheet">
    <link type="text/css" href="css/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="css/main.min.css" rel="stylesheet">
    <link type="text/css" href="css/dropzone.min.css" rel="stylesheet">
    <link type="text/css" href="css/choices.min.css" rel="stylesheet">
    <link type="text/css" href="css/leaflet.css" rel="stylesheet">
    <link type="text/css" href="css/volt.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<main>
    <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
        <div class="container"><p class="text-center"><a href="https://urbancube.net" class="text-gray-700"><i
                class="fa fa-angle-left mr-2"></i> Back to homepage</a></p>
                          
            <div class="row justify-content-center form-bg-image"
                 data-background-lg="volt/assets/img/illustrations/signin.svg"
                 style="background: url(&quot;https://urbancube.net/img/logo/UrbanCube_icon_without_bg1.png&quot;);">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500" style="margin-bottom: 100px">
                        <div class="text-center text-md-center mb-4 mt-md-0"><h1 class="mb-0 h3">Sign in to your
                           account</h1></div>
<span class="alert alert-success <?php if(!isset($_GET['success'])){ echo 'd-none'; } else { echo 'd-block'; } ?>" style="width: 100%"  role="alert">
    <?php if(isset($_GET['success'])){ $success=$_GET["success"]; echo $success; } ?>
</span>

                     
                            <form method="POST" action="login_validate.php" class="mt-4" autocomplete="off">
                            <input type="hidden" name="_token" value="S8UkUChxPIbd8icx6XG9vPsyVci7fQuuuhyTFiJb">
                            <div class="form-group mb-4"><label for="username">Your Username or Phone Number</label>
                                <div class="input-group"><span class="input-group-text" id="basic-addon1"><span
                                        class="fa fa-user-circle"></span></span> <input id="username" type="text"
                                           class="form-control" name="username"
                                           value="" required autocomplete="username" autofocus>
</div>
                                                 <span class="blink_me text-danger"  role="alert">
 <p> <?php if(isset($_GET['error'])){ $err=$_GET["error"]; echo $err; } ?></p>
                         
                                    </span>
                                                                        </div>
                            <div class="form-group">
                                <div class="form-group mb-4"><label for="password">Your Password</label>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon2"><span
                                            class="fa fa-unlock"></span></span> <input id="password" type="password"
                                           class="form-control " name="password"
                                           required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check"><input name="remember" class="form-check-input" type="checkbox" value=""
                                                                   id="remember"> <label class="form-check-label mb-0"
                                                                                         for="remember">Remember
                                        me</label></div>
                                    <div><a href="/reset.php" class="small text-right">Lost password?</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                        </form>
                       
                        <div class="d-flex justify-content-center align-items-center mt-4"><span
                                class="font-weight-normal">Not registered? <a href="register.php"
                                                                              class="font-weight-bold">Create account</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

</body>
</html>