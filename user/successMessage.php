<?php

    require('config.php');
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    $reference = $data['eventData']['transactionReference'];
    $amountPaid = $data['eventData']['amountPaid'];
    $accountReference = $data['eventData']['customer']['email'];
    $paymentStatus = $data['eventData']['paymentStatus']; 
    $accountNumber = $data['eventData']['destinationAccountInformation']['accountNumber'];
    $bankName = $data['eventData']['destinationAccountInformation']['bankName'];
    
    $timestamp = date("Y-m-d H:i:s");
    
    $query = mysqli_query($conn, "SELECT * FROM customers WHERE email='$accountReference' ");
    
    if(mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        if($paymentStatus == "PAID") {
            
            if ($amountPaid > 500) {
                $deduction = 50;
            } else {
                $deduction = 0.1 * $amountPaid;
            }
            $oldBalance = $row['balance'];
            $newBalance = $oldBalance + $amountPaid - $deduction;
            $amount = $amountPaid - $deduction;
            $timestamp = date("Y-m-d H:i:s");
            $email = $row['email'];

            $sql = "INSERT INTO transactions(`type`, `amount`, `balance_after`, `balance_before`, `total`, `email`, `refcode`, `status`, `time`, `Bank`, `Accountno`) VALUES('Automatic Wallet Funding', '$amount', '$newBalance', '$oldBalance', 'credit', '$email', '$reference', 'completed', '$timestamp', '$bankName', '$accountNumber')";
            $query = mysqli_query($con, $sql);
            if(mysqli_query($con, "update customers set balance='$newBalance' where email='$email'")) {
                echo $email;
            }
        } else {
            $timestamp = date("Y-m-d H:i:s");
            $email = $row['email'];

            $sql = "INSERT INTO transactions(`type`, `amount`, `total`, `email`, `refcode`, `status`, `time`) VALUES('Automatic Wallet Funding', '$amountPaid', 'credit', '$email', '$reference', 'failed', '$timestamp')";
            $query = mysqli_query($con, $sql);
        }
    }
?>