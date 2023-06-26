<?php

header("Content-type: application/json");
$curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://husmodataapi.com/api/network/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_POSTFIELDS => $post,
      CURLOPT_HTTPHEADER => array(
        'Authorization: Token 212e747a06ac8938e0f003f055275215ed7d8637',
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    echo $response;
    
?>