<?php
session_start();
header('Content-type: application/json');
require('config.php');


    $status = $_POST['status'];
    if($status == 'fail') {
        echo json_encode([
            'status' => $status,
            'message' => 'Transaction failed',
            'reason' => $_POST['message']
        ]);
    } else {
        $email = $_GET['login'];
        $price = $_GET['price'];
        
        // verify online presence 
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        $online = mysqli_fetch_assoc($query);
        
        $refcode = $_POST['request-id'];
        $network = $_GET['meter_name'];
        $amount = $_POST['amount'];
        $msg = $_POST['message'];
        $meter_number = $_POST['meter_number'];
        
        $now = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO transactions(`type`, `amount`, `email`, `refcode`, `time`, `meter_no`, `status`, `total`) 
                    VALUES('electric', '$amount', '$email', '$refcode', '$now', '$meter_number', 'success', '$amount' )";
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