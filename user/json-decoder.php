<?php
header("Content-type: application/json");

if(isset($_GET['provider_id'])) {
    $provider_id = $_GET['provider_id'];
    
    if($provider_id == "1") {
        // GOTv list
        echo json_encode([
            [
                "id" => 34,
                "plan_name" => "GOtv Smallie - Monthly",
                "cable" => 1,
                "plan_id" => 34,
                "plan_amount" => "1100"
            ],
            [
                "id" => 35,
                "plan_name" => "GOtv Smallie - Quarterly",
                "cable" => 1,
                "plan_id" => 35,
                "plan_amount" => "2900"
            ],
            [
                "id" => 36,
                "plan_name" => "GOtv Smallie - Yearly",
                "cable" => 1,
                "plan_id" => 36,
                "plan_amount" => "8600"
            ],
            [
                "id" => 16,
                "plan_name" => "GOtv Jinja",
                "cable" => 1,
                "plan_id" => 16,
                "plan_amount" => "2250"
            ],
            [
                "id" => 17,
                "plan_name" => "GOtv Jolli",
                "cable" => 1,
                "plan_id" => 17,
                "plan_amount" => "3300"
            ],
            [
                "id" => 2,
                "plan_name" => "GOtv Max",
                "cable" => 1,
                "plan_id" => 2,
                "plan_amount" => "4850"
            ],
            [
                "id" => 47,
                "plan_name" => "GOtv Supa - monthly",
                "cable" => 1,
                "plan_id" => 47,
                "plan_amount" => "6400"
            ],
            
        ]);
    } else if ($provider_id == "2") {
        echo json_encode([
            [
                "id" => 20,
                "plan_name" => "DStv Padi",
                "cable" => 2,
                "plan_id" => 20,
                "plan_amount" => 2500
            ],
            [
                "id" => 6,
                "plan_name" => "DSTV -YANGA",
                "cable" => 2,
                "plan_id" => 6,
                "plan_amount" => 3500
            ],
            [
                "id" => 19,
                "plan_name" => "DStv Confam",
                "cable" => 2,
                "plan_id" => 19,
                "plan_amount" => 6200
            ],
            [
                "id" => 23,
                "plan_name" => "DStv Asia",
                "cable" => 2,
                "plan_id" => 23,
                "plan_amount" => 8300
            ],
            [
                "id" => 7,
                "plan_name" => "DStv Compact",
                "cable" => 2,
                "plan_id" => 7,
                "plan_amount" => 10500
            ],
            [
                "id" => 8,
                "plan_name" => "DStv Compact Plus",
                "cable" => 2,
                "plan_id" => 8,
                "plan_amount" => 16600
            ],
            [
                "id" => 9,
                "plan_name" => "DStv Premium",
                "cable" => 2,
                "plan_id" => 9,
                "plan_amount" => 24500
            ],
            [
                "id" => 24,
                "plan_name" => "DStv Premium French" ,
                "cable" => 2,
                "plan_id" => 24,
                "plan_amount" => 36600
            ],
            [
                "id" => 25,
                "plan_name" => "DStv Premium Asia" ,
                "cable" => 2,
                "plan_id" => 25,
                "plan_amount" => 32800
            ],
            [
                "id" => 29,
                "plan_name" => "DStv Compact + ExtraView",
                "cable" => 2,
                "plan_id" => 29,
                "plan_amount" => 13900
            ],
            [
                "id" => 30,
                "plan_name" => "DStv Premium + ExtraView",
                "cable" => 2,
                "plan_id" => 30,
                "plan_amount" => 27900
            ],
            [
                "id" => 31,
                "plan_name" => "DStv Compact - ExtraView",
                "cable" => 2,
                "plan_id" => 31,
                "plan_amount" => 17150
            ],
        ]);
    } else if($provider_id == "3") {
        echo json_encode([
            [
                "id" => 42,
                "plan_name" => "Nova - 1 Day",
                "cable" => 3,
                "plan_id" => 42,
                "plan_amount" => 90
            ],
            [
                "id" => 37,
                "plan_name" => "Nova - 1 Week",
                "cable" => 3,
                "plan_id" => 37,
                "plan_amount" => 300
            ],
            [
                "id" => 14,
                "plan_name" => "Nova - 1 Month",
                "cable" => 3,
                "plan_id" => 14,
                "plan_amount" => 900
            ],
            [
                "id" => 43,
                "plan_name" => "Basic - 1 Day",
                "cable" => 3,
                "plan_id" => 43,
                "plan_amount" => 160
            ],
            [
                "id" => 38,
                "plan_name" => "Basic - 1 Week",
                "cable" => 3,
                "plan_id" => 38,
                "plan_amount" => 600
            ],
            [
                "id" => 12,
                "plan_name" => "Basic - 1 Month",
                "cable" => 3,
                "plan_id" => 12,
                "plan_amount" => 1850
            ],
            [
                "id" => 44,
                "plan_name" => "Smart -1 Day",
                "cable" => 3,
                "plan_id" => 4,
                "plan_amount" => 200
            ],
            [
                "id" => 39,
                "plan_name" => "Smart -1 Week",
                "cable" => 3,
                "plan_id" => 39,
                "plan_amount" => 700
            ],
            [
                "id" => 13,
                "plan_name" => "Smart -1 Month",
                "cable" => 3,
                "plan_id" => 13,
                "plan_amount" => 2600
            ],
            [
                "id" => 45,
                "plan_name" => "Classic - 1 Day",
                "cable" => 3,
                "plan_id" => 45,
                "plan_amount" => 320
            ],
            [
                "id" => 40,
                "plan_name" => "Classic - 1 Week",
                "cable" => 3,
                "plan_id" => 40,
                "plan_amount" => 1200
            ],
            [
                "id" => 11,
                "plan_name" => "Classic - 1 Month",
                "cable" => 3,
                "plan_id" => 11,
                "plan_amount" => 2750
            ],
            [
                "id" => 46,
                "plan_name" => "Super - 1 Day",
                "cable" => 3,
                "plan_id" => 46,
                "plan_amount" => 400
            ],
            [
                "id" => 41,
                "plan_name" => "Super - 1 Week",
                "cable" => 3,
                "plan_id" => 41,
                "plan_amount" => 1500
            ],
            [
                "id" => 15,
                "plan_name" => "Super - 1 Month",
                "cable" => 3,
                "plan_id" => 15,
                "plan_amount" => 4900
            ],
        ]);
    }
}