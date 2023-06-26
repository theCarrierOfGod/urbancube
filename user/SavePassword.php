<?php

require('../config.php');
session_start();

$login = $_SESSION['login'];
$in = mysqli_query($con, "SELECT * FROM customers WHERE email='$login'");
$online = mysqli_fetch_assoc($in);
$myPassword = $online['password'];

if (isset($_POST['myButton'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $cNewPwd = validate($_POST['password_confirmation']);
    $newPwd = validate($_POST['password']);
    $oldPwd = validate($_POST['oldPassword']);

    // passwords empty check
    if (empty($oldPwd) || empty($newPwd) || empty($cNewPwd)) {
        header("Location: PasswordSettings.php?error=all fields are required");
        exit();
    }

    // confirm if password matches

    if($newPwd != $cNewPwd) {
        header("Location: PasswordSettings.php?error=password mismatch");
        exit();
    }

    // see if old password is correct

    if (password_verify($oldPwd, $myPassword)) {
        $newHashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);

        // update daatabase
        $query = "UPDATE customers SET password='$newHashedPwd' WHERE email='$login'";
        $sql = mysqli_query($con, $query);
        if ($sql) {
            header("Location: PasswordSettings.php?success=password updated");
            exit();
        } else {
            // database insertion error
            header("Location: PasswordSettings.php?error=password update fail");
            exit();
        }
    } else {
        // old password incorrect, return error
        header("Location: PasswordSettings.php?error=incorrect password supplied");
        exit();
    }
}
