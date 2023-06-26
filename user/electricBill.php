<?php
    session_start();
    header('Content-type: application/json');
    require('config.php');
    
    if (isset($_SESSION['login'])) {
        $email = $_SESSION['login'];
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        $online = mysqli_fetch_assoc($query);
    }
    
    if(isset($_POST['meter_name'])) {
        $disco = $_POST['disco'];
        $meter_type = $_POST['meter_type'];
        $request_id = md5(time());
        $meter_number = $_POST['meter_number'];
        $amount = $_POST['amount'];
        $name = $_POST['meter_name'];
        $disco_name = $_POST['meter_name'];
        
        if($amount > $online['balance']) {
            echo json_encode([
                'status'  => 'error',
                'message' => 'Insufficient balance',
            ]);
        } else {
            $payload = json_encode([
                'disco_id' => $disco,
                'disco_name' => $disco_name,
                'MeterType' => $meter_type,
                'meter_number' => $meter_number,
                'amount' => $amount,
                'Amount' => $amount,
            ]);
            
            $url = 'https://husmodataapi.com/api/billpayment';
        
            $default = array(
                CURLOPT_URL => 'https://husmodataapi.com/api/billpayment',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "amount": '.$amount.',
                    "disco_id": "'.$disco.'",
                    "disco_name": "'.$disco_name.'",
                    "MeterType": "'.$meter_type.'"
                    "meter_number": "'.$meter_number.'"
                }',
                CURLOPT_HTTPHEADER      => array(
                    'Authorization: Token 212e747a06ac8938e0f003f055275215ed7d8637',
                    'Content-Type: application/json'    
                )
            );
    
            $ch = curl_init($url);
            curl_setopt_array($ch, $default);
            $save = curl_exec($ch);     
            curl_close($ch);
            
            echo $save;
        }
    }
?>