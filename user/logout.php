<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header("Location:../login.php?error=You have been logged out! Login again to create a session");
exit;
?>
