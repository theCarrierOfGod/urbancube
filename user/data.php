<?php
session_start();
header('Content-type: application/json');
require('config.php');

if (isset($_SESSION['login'])) {
    $email = $_SESSION['login'];
    $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
    $online = mysqli_fetch_assoc($query);
}

if(isset($_POST['data'])) {
    $network = $_POST['network'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $amount = $_POST['amount'];
    
    $myAccountBalance = $online['balance'];
    
    if($amount > $myAccountBalance) {
        echo ([
           'error'  => [
                'Insufficient balance'   
            ]
        ]);
        exit();
    }
    
    // $post = json_encode([
    //     'network' => $network,
    //     'mobile_number' => $number,
    //     'plan'   => $plan,
    //     'Ported_number' => true
    // ]);
    
    // 308db1723a8a9eb489715a5e4ccc5709c6bd23ed
    
    // $curl = curl_init();
    
    // curl_setopt_array($curl, array(
    //   CURLOPT_URL => 'https://husmodataapi.com/api/data/',
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_ENCODING => '',
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 0,
    //   CURLOPT_FOLLOWLOCATION => true,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => 'POST',
    //   CURLOPT_POSTFIELDS => $post,
    //   CURLOPT_HTTPHEADER => array(
    //     'Authorization: Token 9bca72e651460f056968b9948235c4ff3bdf7b9c',
    //     'Content-Type: application/json'
    //   ),
    // ));
    
    // $response = curl_exec($curl);
    
    // curl_close($curl);
    
    $response = json_encode([
        "id" => 6093472,
        "network" => 1,
        "api_response" => "Dear Customer, You have gifted 50MB, please dial *312*4*7*5# to check your balance. Thankyou.",
        "ident" => "Data1bc0a66b6-abb",
        "balance_before" => "36.5",
        "balance_after" => "11.5",
        "mobile_number" => "08167930763",
        "plan" => 240,
        "Status" => "successful",
        "plan_network" => "MTN",
        "plan_name" => "50.0MB",
        "plan_amount" => "25.0",
        "create_date" => "2023-02-28T12:27:59.879976",
        "Ported_number" => true,
        "payment_medium" => "MAIN WALLET"
    ]);
    
    echo $response;
}

// if (isset($_POST['save'])) {
    
//     $refcode = $_POST['ref'];
//     $deduction = $_POST['deduction'];
//     $network = $_POST['network'];
//     $phoneNumber = $_POST['num'];
//     $amount = $_POST['amt'];
    
//     $now = date("Y-m-d H:i:s");
    
//     $query = "INSERT INTO transactions(`type`, `amount`, `email`, `refcode`, `time`, `phonenumber`, `network`, `status`, `total`) 
//             VALUES('data', '$amount', '$email', '$refcode', '$now', '$phoneNumber', '$network', 'completed', '$deduction' )";
//     $sql1 = mysqli_query($con, $query);
    
//     $oldBalance = $online['balance'];
//     $newBalance = $oldBalance - $deduction;
    
//     $query2 = "UPDATE customers SET balance='$newBalance' WHERE email='$email'";
//     $sql2 = mysqli_query($con, $query2);
//     if($sql1 && $sql2) {
//         echo json_encode(['Status' => 'successful']);
//     } else {
//         echo json_encode(['error' => [
//             'Contact admin' 
//         ]]);
//     }
// }

?>