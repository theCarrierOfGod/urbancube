<?php 
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    session_start(); 
    
    include "config.php";
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
    
        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
    
        $uname = validate($_POST['username']);
        $pass = validate($_POST['password']);
    
        if (empty($uname)) {
            header("Location: login.php?error=Username or phone number is required");
            exit();
        } else if(empty($pass)) {
            header("Location: login.php?error=Password is required");
            exit();
        } else {
            $sql = "SELECT * FROM `customers` WHERE phonenumber='$uname' OR username='$uname' ";
            $result = mysqli_query($con, $sql);
            
            mysqli_num_rows($result);
    
            if (mysqli_num_rows($result) === 1) {
    
                $row = mysqli_fetch_assoc($result);
                
                echo $row['activated'];
                
                if($row['activated'] == 0){
                    header("Location: requestConfirmation.php?error=Email address not confirmed&user=$uname");
                    exit();
                }
                $password = $row['password'];
                
                $verifyPassword = password_verify($pass, $password);
                
                if($verifyPassword) {
                    // if(isset($_POST['remember'])) {
                    //     $username = $row['username'];
                    //     echo "<script>localStorage.setItem('username', '$username');</script>";
                    //     echo "<script>localStorage.setItem('password', '$password');</script>";
                    // }
                    $_SESSION['login'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['lastname'] . ' ' . $row['firstname'];
                    header("Location: /user/dashboard.php");
                    exit();
                } else {
                    header("Location: login.php?error=Incorrect password");
                    exit();
                }
            } else {
                header("Location: login.php?error=Username or phone number not registered on this website");
                exit();
            }
        }
    
    }else{
        header("Location: login.php");
        exit();
    }
?>