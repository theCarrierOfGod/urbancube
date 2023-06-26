

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
    <div class="row justify-content-md-center"></div>
    <div>
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-5 mb-4">
                <button id="reserve" name="tryNew">
                    Reserve Account
                </button>
                <?php

                    $testApiKey = "MK_TEST_V0F8XSBT4W" ;
                    $testApiSecret = "K9D34YWM5EKBPZ2CWW6YPTX4T9GRAYUK";
                    $authorizationToken = base64_encode("$testApiKey:$testApiSecret");
                    
                    $curl = curl_init();
    
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://monnify.com/api/v1/auth/login',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $post,
                        CURLOPT_HTTPHEADER => array(
                            "Content-Type: application/json",
                            "Authorization: Basic " . $authorizationToken
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    
                    echo $response;
                    
                    $ref = rand() . time();
                ?>
                <script>
                    $(document).ready(function() {
                        $("#reserve").on("click", function() {
                            $.ajax({
                                url: 'https://monnify.com/api/v1/auth/login',
                                headers: {
                                    "Content-Type" : "application/json",
                                    "Authorization" : "Basic <?php echo $authorizationToken; ?>"
                                },
                                type: 'post',
                                success: function(data) {
                                    let token = data.responseBody.accessToken;
                                    console.log(token);
                                    var jsonData = JSON.stringify({
                                            "accountReference" : "<?php echo $ref; ?>",
                                            "accountName" : "olaolumide",
                                            "currencyCode" : "NGN",
                                            "contractCode" : "2431718120",
                                            "customerEmail" : "olajesujuwon@gmail.com",
                                            "customerName" : "Oladejo Jesujuwon Isaac",
                                            "getAllAvailableBanks" : false,
                                            "preferredBanks" : ["035", "232"]
                                        });
                                    $.ajax({
                                        // url: 'https://sandbox.monnify.com/api/v2/bank-transfer/reserved-accounts',
                                        url: "https://monnify.com/api/v1/bank-transfer/reserved-accounts/olaolumide567890",
                                        headers: {
                                            "Content-Type" : "application/json",
                                            "Authorization" : `Bearer ${token}`
                                        },
                                        type: 'get',
                                        // data: jsonData,
                                        contentType: "application/json",
                                        success: function (response) {
                                            alert(JSON.stringify(response))
                                            console.log(response)
                                            if(response.responseCode === "0") {
                                                alert("bank name: " + response.responseBody.accounts[0].bankName + " /n Account number: " + response.responseBody.accounts[0].accountNumber)
                                            }
                                        },
                                        error: function(err) {
                                            alert(err)
                                        }
                                    })
                                }
                            })
                        })
                    })
                </script>
            </div>
        </div>
    </div>

<?php
include_once("footer.php");
?>

