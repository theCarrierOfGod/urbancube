<?php
session_start();
header('Content-type: application/json');
require('config.php');

if (isset($_SESSION['login'])) {
    $email = $_SESSION['login'];
    $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
    $online = mysqli_fetch_assoc($query);
}


if(isset($_POST['top-up'])) {
    $network = $_POST['network'];
    $number = $_POST['phoneNumber'];
    $amount = $_POST['amount'];
    $deduction = $_POST['deduction'];
    $ported = $_POST['ported'];
    
    if($amount > $online['balance']) {
        echo json_encode([
           'error'  => [
                'Insufficient balance'   
            ]
        ]);
        exit();
    }
    
    
    $request_id = md5(time());
    
    $post = json_encode([
        'network' => $network,
        'mobile_number' => $number,
        'amount' => $amount,
        'Ported_number' => $ported,
        'airtime_type' => 'VTU',
    ]);
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://husmodataapi.com/api/topup/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_HTTPHEADER => array(
             'Authorization: Token 9c60b49ed9a8f114d9bda22d7a0452c3ae2048a0',
                'Content-Type: application/json'
        ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
}

if (isset($_POST['save'])) {
    
    $refcode = $_POST['ref'];
    $deduction = $_POST['deduction'];
    $network = $_POST['network'];
    $phoneNumber = $_POST['num'];
    $amount = $_POST['amt'];
    
    $now = date("Y-m-d H:i:s");
    $oldBalance = $online['balance'];
    $newBalance = $oldBalance - $deduction;
    
    $query = "INSERT INTO transactions(`type`, `amount`, `email`, `refcode`, `time`, `phonenumber`, `network`, `status`, `total`, `balance_before`, `balance_after`) 
            VALUES('airtime', '$amount', '$email', '$refcode', '$now', '$phoneNumber', '$network', 'completed', '$deduction', '$oldBalance', '$newBalance')";
    $sql1 = mysqli_query($con, $query);
    
    
    
    $query2 = "UPDATE customers SET balance='$newBalance' WHERE email='$email'";
    $sql2 = mysqli_query($con, $query2);
    if($sql1 && $sql2) {
        echo json_encode(['status' => 'successful']);
    } else {
        echo json_encode(['error' => [
            'Contact admin' 
        ]]);
    }
}

?>