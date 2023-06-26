<?php

header("Content-type: application/json");


    $testApiKey = "MK_PROD_FLBYFFEYU6" ;
    $testApiSecret = "8F18U5U706YTVK9CCUACEPH7PHDBFV4X";
    $authorizationToken = base64_encode("$testApiKey:$testApiSecret");
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sandbox.monnify.com/api/v1/auth/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        // CURLOPT_POSTFIELDS => $post,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/text",
            "Authorization: Basic " . $authorizationToken
        ),
    ));
    $response = curl_exec($curl);
    echo $response;
    $decoded = json_encode($response);
    echo $decoded;
    
    curl_close($curl);
