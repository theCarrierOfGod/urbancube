<?php
    session_start();
    header('Content-type: application/json');
    require('config.php');
    
    if (isset($_SESSION['login'])) {
        $email = $_SESSION['login'];
        $query = mysqli_query($con, "SELECT * FROM customers WHERE email='$email'");
        $online = mysqli_fetch_assoc($query);
    }
    
    if(isset($_POST['exam'])) {
        $exam = $_POST['exam'];
        $quantity = $_POST['quantity'];
        
        if($exam == "1") {
            $cost = 1900 * $quantity;
        } else if($exam == "2") {
            $cost = 1000 * $quantity;
        } else if($exam == "3") {
            $cost = 1900 * $quantity;
        }
        
        
        
        if($cost > $online['balance']) {
            echo json_encode([
               'error'  => [
                    'Insufficient balance',
                ]
            ]);
            exit();
        }
        
        $paypload = json_encode([
            'exam' => $exam,
            'quantity' => $quantity,
        ]);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://a2zdataplug.com/api/exam');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $paypload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = [
            "Authorization: Token 6604a037c37b45ae96ad4d24f419de957e776c36b8a98096181aecedb132",
            'Content-Type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
        
        echo $response;
        
        // echo json_encode([
        //     "username" => "Urbancube",
        //     "amount" => 900,
        //     "transid" => "RESULTCHECKER_6414983aed0ae",
        //     "quantity" => "1",
        //     "message" => "NECO Exam Pin Generated",
        //     "oldbal" => "2238",
        //     "newbal" => 2238,
        //     "date" => "2023-03-17 17:41:40",
        //     "status" => "success",
        //     "request-id" => "RESULTCHECKER_6414983aed0ae",
        //     "pin" => "825613942578"
        // ]);
    }
    
    if (isset($_POST['save'])) {
        $refcode = $_POST['ref'];
        $exam = $_POST['exam_name'];
        $pin = $_POST['pin'];
        $amount = $_POST['amount'];
        
        if($exam == "1") {
            $exam_name = "WAEC";
        } else if($exam == "2") {
            $exam_name = "NECO";
        } else if($exam == "3") {
            $exam_name = "NABTEB";
        }
        
        $now = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO transactions(`type`, `amount`, `email`, `refcode`, `time`, `phonenumber`, `network`, `status`, `total`) 
                VALUES('exam', '$amount', '$email', '$refcode', '$now', '$pin', '$exam_name', 'completed', '$amount' )";
        $sql1 = mysqli_query($con, $query);
        
        $oldBalance = $online['balance'];
        $newBalance = $oldBalance - $amount;
        
        $query2 = "UPDATE customers SET balance='$newBalance' WHERE email='$email'";
        $sql2 = mysqli_query($con, $query2);
        if($sql1 && $sql2) {
            echo json_encode([
                'Status' => 'successful'
            ]);
        } else {
            echo json_encode(['error' => [
                'Contact admin' 
            ]]);
        }
    }