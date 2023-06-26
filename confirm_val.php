<?php
    require_once('mail.php');
    include_once('config.php');
    
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
        
        if(empty($username)) {
            header("Location: /requestConfirmation.php?error=No username supplied");
            exit();
        }
        
        $query = mysqli_query($con, "SELECT * FROM customers WHERE username='$username'");
        if(mysqli_num_rows($query) === 0) {
            header("Location: /requestConfirmation.php?error=Invalid username supplied");
            exit();
        } else {
            $row = mysqli_fetch_assoc($query);
            $email = $row['email'];
            $token = rand(10000000, 99999999);
            $refcode = md5($token);
            $update = mysqli_query($con, "UPDATE customers SET refcode='$refcode', activated=0 WHERE username='$username'");
            
            $mail = new mail();
            if($update) {
                // echo $mail->registrationMail('Urban Cube | Confirm Email', $email, $token);
                if($mail->registrationMail('Urban Cube | Confirm Email', $email, $token)) {
                    mysqli_query($con, "UPDATE customers SET codeSent=1 WHERE username='$username'");
                    echo "<script> alert('Confirmation Link sent'); </script>";
                    header("Location: /confirm.php?email=$email");
                    exit();
                } else {
                    header("Location: /requestConfirmation.php?error=Confirmation mail not sent");
                    exit();
                }
            }
        }
    }