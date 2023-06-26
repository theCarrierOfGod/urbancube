<?php

require('../config.php');
session_start();

$login = $_SESSION['login'];
$in = mysqli_query($con, "SELECT * FROM customers WHERE email='$login'");
$online = mysqli_fetch_assoc($in);
$myPhone = $online['phonenumber'];
$myLocation = $online['address'];

if (isset($_POST['myButton'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $phone = validate($_POST['Phone']);
    $location = validate($_POST['Location']);

    // phone number empty check
    if(empty($phone)) {
        header("Location: UserProfile.php?error=phone number cannot be empty");
        exit();
    }

    // see if phone numbber is unique
    $pQuery = "SELECT * FROM customers WHERE phonenumber='$phone'";
    $pSql = mysqli_query($con, $pQuery);

    if(mysqli_num_rows($pSql) > 0){
        if($phone == $myPhone) {
            $phoneNumber = $myPhone;
        } else {
            header("Location: UserProfile.php?error=phone number already in use by another user");
            exit();
        }
    } else {
        $phoneNumber = $phone;
    }
    
    if(empty($location)) {
        $address = $myLocation;
    } else {
        $address = $location;
    }

    $query = "UPDATE customers SET phonenumber='$phoneNumber', address='$address' WHERE email='$login'";
    $sql = mysqli_query($con, $query);
    if($sql) {
        header("Location: UserProfile.php?success=profile updated");
        exit();
    } else {
        header("Location: UserProfile.php?error=profile update fail");
        exit();
    }
}



// _token=8vPngdkB7I12T7c8LzMJXA11Tk1fCjyoIWt3zQYn&Phone=07011636030&Location=Enugu&myButton=Save