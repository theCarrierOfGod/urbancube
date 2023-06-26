

<?php
    header("Content-type: application/json");
    include_once("config.php");
    
    $accountReference = $_GET['accountReference'];
    $accountName = $_GET['accountName'];
    $wemaNumber = $_GET['wemaNumber'];
    $sterlingNumber = $_GET['sterlingNumber'];
    $moniepointNumber = $_GET['moniepointNumber'];
    $username = $_GET['username'];
    
    $query = mysqli_query($con, "UPDATE customers SET `accountReference`='$accountReference',`moniepointNumber`='$moniepointNumber',`wemaNumber`='$wemaNumber',`sterlingNumber`='$sterlingNumber',`sterlingName`='$accountName', `wemaName`='$accountName', `moniepointName`='$accountName' WHERE username='$username' ") or die(mysqli_error($con));
    
    if($query) {
        echo json_encode([
            "status" => 'success'
        ]);
    } else {
        echo json_encode([
            "status" => 'error'
        ]);
    }
