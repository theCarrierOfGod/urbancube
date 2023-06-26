<?php
session_start();
header('Content-type: application/json');
require('config.php');

if (isset($_POST['Status'])) {
    $email = $_GET['login'];
    $price = $_GET['price'];
    // verify online presence 
    $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
    $online = mysqli_fetch_assoc($query);
    
    $refcode = $_POST['ident'];
    $network = $_POST['network'];
    $amount = $_POST['amount'];
    $package = $_POST['package'];
    $msg = 'success';
    $iuc = $_POST['smart_card_number'];
    
    $now = date("Y-m-d H:i:s");
    $status = $_POST['Status'];
    if($status != 'successful') {
        echo json_encode([
            'status' => $status,
            'message' => 'Transaction failed',
            'reason' => $_POST['message']
        ]);
        $oldBalance = $online['balance'];
        $newBalance = $online['balance'];
    } else {
        $oldBalance = $online['balance'];
        $newBalance = $oldBalance - $price;
    }
    
    $query = "INSERT INTO transactions(`type`, `amount`, `email`, `refcode`, `time`, `decoder_no`, `package`, `status`, `total`,`balance_before`, `balance_after`) 
                VALUES('decoder', '$price', '$email', '$refcode', '$now', '$iuc', '$package', 'completed', '$price', '$oldBalance','$newBalance' )";
    $sql1 = mysqli_query($con, $query);
    
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