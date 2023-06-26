<style>
    body {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
</style>
<body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="https://urbancube.net/img/logo/UrbanCube_icon_without_bg1.png">


<p style="width: 100vw; font-size: 30px; text-align: center; font-family: 'monospace';">
    <i class="fa fa-spinner fa-pulse" style="color: orangered"></i> Registration in progress ... 
</p>
<?php
    require_once('mail.php');
    include_once("config.php");
    
    if(isset($_POST['username'])) {
        $time = date_default_timezone_set('Africa/Lagos');
        $time = date("Y-m-d h:i:sa");
        
        $name = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $ph = $_POST['phone'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        
        $loc = $_POST['location'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        $token = rand(10000000, 99999999);
        $refcode = md5($token);
        
        $status = 0;
        
        $mail = new mail();
        
        if ($password === $cpassword) {
        
            $sql = "SELECT * FROM `customers` WHERE phonenumber='$ph'";
            $query = mysqli_query($con, $sql) or die(mysqli_error($con));
            $count = mysqli_num_rows($query);
        
            if ($count > 0) {
                echo "<script>alert('Phone Number Already Exists in our Database');</script>";
                echo '<script>window.location.replace(\'register.php\')</script>';
                exit();
            }
        
            //check if email already exists in the database
            $sql1 = "SELECT * FROM `customers` WHERE email='$email' ";
            $query1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
            $count1 = mysqli_num_rows($query1);
        
            if ($count1 > 0) {
                echo "<script>alert('Email Already Exists in our Database');</script>";
                echo '<script>window.location.replace(\'register.php\')</script>';
                exit();
            }
        
            //check if username already exists in the database
            $sql2 = "SELECT * FROM `customers` WHERE username='$username' ";
            $query2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
            $count2 = mysqli_num_rows($query2);
        
            if ($count1 > 0) {
                echo "<script>alert('Username Already Exists in our Database');</script>";
                echo '<script>window.location.replace(\'register.php\')</script>';
                exit();
            }
        
            //check if a user has registered with the provided phone number
            
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        
            $query3 = mysqli_query($con, 
            "insert into customers(`firstname`, `lastname`, `username`, `phonenumber`, `email`, `password`, `state`, `time`,  `balance`, `address`, `status`, `refcode`) 
            values('$name', '$lname', '$username', '$ph','$email', '$hashedPwd','$status','$time', '0', '$loc',  'ACTIVE', '$refcode')") or die(mysqli_error($con));
        
            //inserting data into database
            if ($query3) {
                if($mail->registrationMail('Urban Cube | Confirm Email', $email, $token)) {
                    mysqli_query($con, "UPDATE customers SET codeSent=1 WHERE username='$username'");
                    echo "<script>alert('Success');</script>";
                    header("Location: /confirm.php?email=$email");
                    exit();
                } else {
                    echo "<script>alert('Registration successful but confirmation email not sent.');</script>";
                    header("Location: /requestConfirmation.php?user=$username");
                    exit();
                }
            } else {
                echo "<script>alert('Registration error!');</script>";
                echo "<script>window.location = 'register.php';</script>";
            }
        } else {
            echo "<script>alert('Passwords not match!');</script>";
            echo "<script>window.location = 'register.php';</script>";
        }
    }
    
    else {
        header("Location: /");
    }
?>
</body>