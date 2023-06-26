<?php

require('../config.php');
session_start();
$login = $_SESSION['login'];

if (isset($_GET['coupon'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // filter coupon code
    $coupon = validate($_GET['coupon']);

    //validate coupon's existance
    $query = mysqli_query($con, "SELECT * FROM coupon_code WHERE coupon='$coupon'");
    $verifyCoupon = mysqli_num_rows($query);

    // coupon exists
    if($verifyCoupon > 0) {
        $row = mysqli_fetch_assoc($query);
        if($row['used'] == 0) {
            // coupon amount
            $amount = $row['amount'];

            // get user's data
            $getUserData = mysqli_query($conn, "SELECT * FROM customers WHERE email='$login'");
            $online = mysqli_fetch_assoc($getUserData);

            // declare old and new account balance
            $oldBalance = $online['balance'];
            $newBalance = $oldBalance + $amount;

            // transaction time.
            $timestamp = date("Y-m-d H:i:s");

            // run insertion query
            $sql = "INSERT INTO transactions(`type`, `amount`, `total`, `email`, `refcode`, `status`, `time`) VALUES('Coupon code funding', '$amount', 'credit', '$login', '$coupon', 'completed', '$timestamp')";
            $query2 = mysqli_query($con, $sql);

            if($query2) {
                // update new user balance
                $updateUser = mysqli_query($con, "UPDATE customers SET balance='$newBalance' WHERE email='$login'");
                $updateCoupon = mysqli_query($con, "UPDATE coupon_code SET used=1 WHERE coupon='$coupon'");
                if($updateUser) {
                    header("Location: Wallet.php?success=wallet funded");
                    exit();
                }
            } else {
                // return database error
                header("Location: Wallet.php?error=an error occured, contact admin");
                exit();
            }
        } else {
            // return used coupon error
            header("Location: Wallet.php?error=coupon code used by a customer");
            exit();
        }
    } else {
        // return invalid coupon error
        header("Location: Wallet.php?error=invalid coupon code");
        exit();
    }
}

?>