<?php
session_start();
header('Content-type: application/json');
require('config.php');

if (isset($_SESSION['login'])) {
    $email = $_SESSION['login'];
    $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
    $online = mysqli_fetch_assoc($query);
}

if(isset($_POST['buyData'])) {
    $network = $_POST['network'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $amount = $_POST['amount'];
    $ported = $_POST['ported'];
    $request_id = md5(time());
    $myAccountBalance = $online['balance'];
    
    if($amount > $myAccountBalance) {
        echo json_encode([
            'status' => 'fail',
            'message'  => 'Insufficient balance'
        ]);
        exit();
    } else {
        
        $paypload = json_encode([
            'network' => $network,
            'mobile_number' => $number,
            'plan'   => $plan,
            'Ported_number' => $ported,
        ]);
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://husmodataapi.com/api/data/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $paypload,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Token 9c60b49ed9a8f114d9bda22d7a0452c3ae2048a0',
                'Content-Type: application/json'
            ),
        ));
        
        echo $save = curl_exec($curl);
        
        curl_close($curl);
        
        
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, 'https://urbancube.net/user/saveData.php?login='.$email.'&price='.$amount);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $save);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        
        // echo $response;
    }
}
?>