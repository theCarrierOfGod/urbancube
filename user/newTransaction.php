<?php
include_once('./config.php');

session_start();
$email = $_SESSION['login'];
$query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
$online = mysqli_fetch_assoc($query);

if(isset($_POST['paystack'])) {
    $amount = $_POST['amount'];
    $ref = $_POST['referenceNumber'];

    $oldBalance = $online['balance'];

    $timestamp = date("Y-m-d H:i:s");
    
    if ($amount > 500) {
        $deduction = 50;
    } else {
        $deduction = 0.05 * $amount;
    }
    
    $amount = $amount - $deduction;
    $newBalance = $oldBalance + $amount;

    $sql = "INSERT INTO transactions(`type`, `amount`, `total`, `email`, `refcode`, `status`, `time`, `balance_before`, `balance_after`) VALUES('Paystack Wallet Funding', '$amount', 'credit', '$email', '$ref', 'completed', '$timestamp', '$oldBalance', '$newBalance')";
    $query = mysqli_query($con, $sql);
    if($query) {
        mysqli_query($con, "UPDATE customers SET balance='$newBalance' WHERE email='$email'");
        echo json_encode([
            'status' => 'success',
            'message' => 'wallet funded',
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'error' => 'An error occured, contact admin for help',
        ]);
    }
}

if(isset($_POST['monnify'])) {
    $amount = $_POST['amount'];
    $ref = $_POST['transactionReference'];

    $oldBalance = $online['balance'];

    $timestamp = date("Y-m-d H:i:s");
    
    if ($amount > 500) {
        $deduction = 50;
    } else {
        $deduction = 0.05 * $amount;
    }
    
    $amount = $amount - $deduction;
    $newBalance = $oldBalance + $amount;

    $sql = "INSERT INTO transactions(`type`, `amount`, `total`, `email`, `refcode`, `status`, `time`, `balance_before`, `balance_after`) VALUES('Monnify Wallet Funding', '$amount', 'credit', '$email', '$ref', 'completed', '$timestamp', '$oldBalance', '$newBalance')";
    $query = mysqli_query($con, $sql);
    if($query) {
        mysqli_query($con, "UPDATE customers SET balance='$newBalance' WHERE email='$email'");
        echo json_encode([
            'status' => 'success',
            'message' => 'wallet funded',
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'error' => 'An error occured, contact admin for help',
        ]);
    }
}