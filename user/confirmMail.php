<?php

    include_once("config.php");
    
    if(isset($_GET['token'])) {
        $token = $_GET['token'];
        $email = $_GET['email'];
    } else if(isset($_POST['token'])) {
        $token = $_POST['token'];
        $email = $_POST['email'];
    }
        
    if(empty($token)) {
        echo '<script>window.location.replace(\'confirm.php\')</script>';
        exit();
    }
    
    // check token 
    $query = "SELECT * FROM customers WHERE email='$email'";
    $fetch = mysqli_query($con, $query);
    if(mysqli_num_rows($fetch) > 0) {
        $do = mysqli_fetch_assoc($fetch);
        if(md5($token) == $do["refcode"]) {
            $confirmation = mysqli_query($con, "UPDATE customers SET codeSent=0, activated=1 WHERE email='$email'");
            if($confirmation) {
                echo "<script>alert('Account activated');</script>";
                header("Location: /login.php?success=Email address verified");
                exit();
            } else {
                header("Location: /confirm.php?error=account not verified&email=$email");
                exit();
            }
        } else {
            header("Location: /confirm.php?error=invalid verification code supplied&email=$email");
        }
    } else {
        header("Location: /confirm.php?error=unknown email");
        exit();
    }