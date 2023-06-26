<?php
include('config.php');
// header('Content-type: application/json');

// if(isset($_POST['eventType'])) {
//     $type = $_POST['eventType'];
//     echo '<script> window.localStorage.setItem("type", "'. $type .'")';
    
//     mysqli_query($con, "INSERT INTO monn(`type`) VALUES('$type')");
// }

// if(isset($_GET['eventType'])) {
//     $type = $_GET['eventType'];
// }

// $type = extract($_GET);

$type = pre_r($_GET);

mysqli_query($con, "INSERT INTO monn(`type`) VALUES('$type')");