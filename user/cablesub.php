<?php
    session_start();
    header('Content-type: application/json');
    require('config.php');
    
    if (isset($_SESSION['login'])) {
        $email = $_SESSION['login'];
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        $online = mysqli_fetch_assoc($query);
    }
    
    if(isset($_POST['cableSub'])) {
        $cable = $_POST['cable'];
        $cable_plan = $_POST['cable_plan'];
        $bypass = false;
        $request_id = md5(time());
        $iuc = $_POST['iuc'];
        $amount = $_POST['amount'];
        
        if($amount > $online['balance']) {
            echo json_encode([
               'error'  => [
                    'Insufficient balance',
                ]
            ]);
            exit();
        }
        $url = 'https://husmodataapi.com/api/cablesub/';
        
        $default = array(
            CURLOPT_URL => 'https://husmodataapi.com/api/cablesub/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "cablename": "'.$cable.'",
                "cableplan": "'.$cable_plan.'",
                "smart_card_number": "'.$iuc.'"
            }',
            CURLOPT_HTTPHEADER      => array(
               'Authorization: Token 9c60b49ed9a8f114d9bda22d7a0452c3ae2048a0',
                'Content-Type: application/json'  
            )
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, $default);
        $save = curl_exec($ch);     
        curl_close($ch);
        
        echo $save;
        
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, 'https://urbancube.net/user/saveCable2.php?login='.$email.'&price='.$amount);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_decode($save));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
    }

?>