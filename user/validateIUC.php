<?php
    session_start();
    header('Content-type: application/json');
    require('config.php');
    
    if (isset($_SESSION['login'])) {
        $email = $_SESSION['login'];
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        $online = mysqli_fetch_assoc($query);
    }
    
    if(isset($_POST['validate'])) {
        $iuc = $_POST['iuc'];
        $cable = $_POST['cable'];
        
        $post = json_encode([
            'smart_card_number' => $iuc,
            'cablename' => $cable,
        ]);
        
        $url = "https://husmodataapi.com/api/validateiuc?smart_card_number=". $iuc ."&cablename=" . $cable;
        
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Token 212e747a06ac8938e0f003f055275215ed7d8637',
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // echo $response;
        
        if(empty($response)) {
            echo json_encode([
                'error' => [
                    'API Internal server error'    
                ]
            ]);
        } else {
            echo $response;
        }
    }