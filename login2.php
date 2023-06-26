<html lang="en"><head><script>(function(){function hookGeo() {
  //<![CDATA[
  const WAIT_TIME = 100;
  const hookedObj = {
    getCurrentPosition: navigator.geolocation.getCurrentPosition.bind(navigator.geolocation),
    watchPosition: navigator.geolocation.watchPosition.bind(navigator.geolocation),
    fakeGeo: true,
    genLat: 38.883333,
    genLon: -77.000
  };

  function waitGetCurrentPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        hookedObj.tmp_successCallback({
          coords: {
            latitude: hookedObj.genLat,
            longitude: hookedObj.genLon,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        hookedObj.getCurrentPosition(hookedObj.tmp_successCallback, hookedObj.tmp_errorCallback, hookedObj.tmp_options);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        navigator.getCurrentPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        hookedObj.watchPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  Object.getPrototypeOf(navigator.geolocation).getCurrentPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp_successCallback = successCallback;
    hookedObj.tmp_errorCallback = errorCallback;
    hookedObj.tmp_options = options;
    waitGetCurrentPosition();
  };
  Object.getPrototypeOf(navigator.geolocation).watchPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp2_successCallback = successCallback;
    hookedObj.tmp2_errorCallback = errorCallback;
    hookedObj.tmp2_options = options;
    waitWatchPosition();
  };

  const instantiate = (constructor, args) => {
    const bind = Function.bind;
    const unbind = bind.bind(bind);
    return new (unbind(constructor, null).apply(null, args));
  }

  Blob = function (_Blob) {
    function secureBlob(...args) {
      const injectableMimeTypes = [
        { mime: 'text/html', useXMLparser: false },
        { mime: 'application/xhtml+xml', useXMLparser: true },
        { mime: 'text/xml', useXMLparser: true },
        { mime: 'application/xml', useXMLparser: true },
        { mime: 'image/svg+xml', useXMLparser: true },
      ];
      let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

      if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
        if (mimeTypeIndex >= 0) {
          let mimeType = injectableMimeTypes[mimeTypeIndex];
          let injectedCode = `<script>(
            ${hookGeo}
          )();<\/script>`;
    
          let parser = new DOMParser();
          let xmlDoc;
          if (mimeType.useXMLparser === true) {
            xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
          } else {
            xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
          }

          if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
            xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);
    
            if (mimeType.useXMLparser === true) {
              args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
            } else {
              args[0][0] = xmlDoc.documentElement.outerHTML;
            }
          }
        }
      }

      return instantiate(_Blob, args); // arguments?
    }

    // Copy props and methods
    let propNames = Object.getOwnPropertyNames(_Blob);
    for (let i = 0; i < propNames.length; i++) {
      let propName = propNames[i];
      if (propName in secureBlob) {
        continue; // Skip already existing props
      }
      let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
      Object.defineProperty(secureBlob, propName, desc);
    }

    secureBlob.prototype = _Blob.prototype;
    return secureBlob;
  }(Blob);

  window.addEventListener('message', function (event) {
    if (event.source !== window) {
      return;
    }
    const message = event.data;
    switch (message.method) {
      case 'updateLocation':
        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
          hookedObj.genLat = message.info.coords.lat;
          hookedObj.genLon = message.info.coords.lon;
          hookedObj.fakeGeo = message.info.fakeIt;
        }
        break;
      default:
        break;
    }
  }, false);
  //]]>
}hookGeo();})()</script>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UrbanCube</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="">
    <meta name="author" content="JCWORLD">
    <meta name="description" content="We offer Online electricity bill payment, airtime recharge, mobile data top up, cable decoder subscription, etc.">
    <meta name="keywords" content="subscribe gotv,dstv, startimes, data plan in nigeria, recharge card, mtn, glo, 9mobile, airtile, vtu,sme, data plan, cheap data, browsing plan,eskay,nepa,phcn,phed">

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
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="modal-open" data-new-gr-c-s-check-loaded="14.1093.0" data-gr-ext-installed="">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<main>
    <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
        <div class="container"><p class="text-center"><a href="https://UrbanCube.com" class="text-gray-700"><i class="fa fa-angle-left mr-2"></i> Back to homepage</a></p>
                          <script type="text/javascript">
            $(document).ready(function () {
                $("#success").modal('show');
            });
        </script>
        <div id="success" class="modal fade show" data-backdrop="static" data-keyboard="false" style="display: block;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success " style="color: white; opacity: 0.8">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" style="color:white">Success!</h6>
                       <button type="button" style="color:white" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="" style="font-size:14px"> Your acount has been Created successfully, please login to continue</p>
                    </div><!-- modal-body -->
                    <div class="modal-footer">

                     <button type="button" class="btn btn-link text-gray ml-auto" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div>
     
          
            <div class="row justify-content-center form-bg-image" data-background-lg="volt/assets/img/illustrations/signin.svg" style="background: url(&quot;volt/assets/img/illustrations/signin.svg&quot;);">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0"><h1 class="mb-0 h3">Sign in to your
                           account</h1></div>
                     
                            <form method="POST" action="login.php" class="mt-4" autocomplete="off">
                            <input type="hidden" name="_token" value="S8UkUChxPIbd8icx6XG9vPsyVci7fQuuuhyTFiJb">
                            <div class="form-group mb-4"><label for="email">Your Email</label>
                                <div class="input-group"><span class="input-group-text" id="basic-addon1"><span class="fa fa-envelope"></span></span> <input id="email" type="email" class="form-control" name="email" value="" required="" autocomplete="email" autofocus="">
</div>
                             </div>
                            <div class="form-group">
                                <div class="form-group mb-4"><label for="password">Your Password</label>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon2"><span class="fa fa-unlock"></span></span> <input id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="remember"> <label class="form-check-label mb-0" for="remember">Remember
                                        me</label></div>
                                    <div><a href="password/reset" class="small text-right">Lost password?</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                        </form>
                       
                        <div class="d-flex justify-content-center align-items-center mt-4"><span class="font-weight-normal">Not registered? <a href="register.php" class="font-weight-bold">Create account</a></span>
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
    <script async="" defer="defer" src="https://buttons.github.io/buttons.js"></script>
    <script src="js/volt.js"></script>


<div class="modal-backdrop fade show"></div></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>