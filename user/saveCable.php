<?php
session_start();
header('Content-type: application/json');
require('config.php');

if (isset($_POST['status'])) {
    
    $status = $_POST['status'];
    if($status == 'fail') {
        echo json_encode([
            'status' => $status,
            'message' => 'Transaction failed',
            'reason' => $_POST['message']
        ]);
        exit();
    }
    $email = $_GET['login'];
    $price = $_GET['price'];
    // verify online presence 
    $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
    $online = mysqli_fetch_assoc($query);
    
    // Typical request format in JSON 
    
    // "cabl_name": "DSTV",
    // "request-id": "Cable_1234567890",
    // "amount": "12000",
    // "charges": 6000,
    // "status": "success",
    // "message": "successfully purchase DSTV joli joli ₦12000 to 0701339708866",
    // "iuc": "0701339708866",
    // "oldbal": "110128",
    // "newbal": 92128,
    // "system": "API",
    // "wallet_vending": "wallet",
    // "plan_name": "joli joli"
    
    
    $refcode = $_POST['request-id'];
    $network = $_POST['network'];
    $phoneNumber = $_POST['phone_number'];
    $amount = $_POST['amount'];
    $package = $_POST['cabl_name'] . " " . $_POST['plan_name'];
    $msg = $_POST['message'];
    $iuc = $_POST['iuc'];
    
    $now = date("Y-m-d H:i:s");
    
    $query = "INSERT INTO transactions(`type`, `amount`, `email`, `refcode`, `time`, `decoder_no`, `package`, `status`, `total`) 
                VALUES('decoder', '$price', '$email', '$refcode', '$now', '$iuc', '$package', 'completed', '$price' )";
    $sql1 = mysqli_query($con, $query);
    
    $oldBalance = $online['balance'];
    $newBalance = $oldBalance - $price;
    
    $query2 = "UPDATE customers SET balance='$newBalance' WHERE email='$email'";
    $sql2 = mysqli_query($con, $query2);
    if($sql1 && $sql2) {
        echo json_encode([
            'status' => 'successful',
            'message' => $msg
        ]);
    } else {
        echo json_encode([
            'status' => $status,
            'message' => 'Transaction failed',
        ]);
    }
}

?>