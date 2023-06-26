<?php
    require_once('mail.php');
    include_once('config.php');
    
    if(isset($_POST['email_address'])) {
        $email = $_POST['email_address'];
        
        if(empty($email)) {
            header("Location: /reset.php?error=No email supplied");
            exit();
        }
        
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        if(mysqli_num_rows($query) === 0) {
            header("Location: /reset.php?error=Invalid email supplied");
            exit();
        } else {
            $newPassword = 'ucube' . rand(1000, 99999);
            $passHash = password_hash($newPassword, PASSWORD_DEFAULT);
            $update = mysqli_query($con, "UPDATE customers SET password='$passHash' WHERE email='$email'");
            
            $mail = new mail();
            if($update) {
                if($mail->resetPassword('Urban Cube | Reset Password', $email, $newPassword)) {
                    echo "<script> alert('Reset Link sent'); </script>";
                    header("Location: /login.php?success=Reset Link sent");
                    exit();
                } else {
                    header("Location: /reset.php?error=Password reset mail not sent");
                    exit();
                }
            }
        }
    }