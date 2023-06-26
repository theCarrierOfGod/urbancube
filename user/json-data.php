<?php
header("Content-type: application/json");

if(isset($_GET['provider_id'])) {
    $provider_id = $_GET['provider_id'];
    
    if($provider_id == "1") {
        // MTN Corporate gifting
        echo json_encode([
            [
    			"id" => 240,
    			"dataplan_id" => "240",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
                "month_validate" => "30 days",
    			"plan" => "50.0MB",
    			"plan_amount" => "25.0"
    		],
    		[
    			"id" => 239,
    			"dataplan_id" => "239",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "150.0MB",
    			"plan_amount" => "50.0"
    		],
    		[
    			"id" => 238,
    			"dataplan_id" => "238",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "250.0MB",
    			"plan_amount" => "60.0"
    		],
    		[
    			"id" => 99,
    			"dataplan_id" => "99",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days (C. G)",
    			"plan" => "500.0MB",
    			"plan_amount" => "115.0"
    		],
    		[
    			"id" => 100,
    			"dataplan_id" => "100",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days (C. G)",
    			"plan" => "1.0GB",
    			"plan_amount" => "228.0"
    		],
    		[
    			"id" => 101,
    			"dataplan_id" => "101",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days (C. G)",
    			"plan" => "2.0GB",
    			"plan_amount" => "456.0"
    		],
    		[
    			"id" => 224,
    			"dataplan_id" => "224",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "3.0GB",
    			"plan_amount" => "684.0"
    		],
    		[
    			"id" => 116,
    			"dataplan_id" => "116",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days (C. G)",
    			"plan" => "5.0GB",
    			"plan_amount" => "1140.0"
    		],
    		[
    			"id" => 146,
    			"dataplan_id" => "146",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days (C. G)",
    			"plan" => "10.0GB",
    			"plan_amount" => "2280.0"
    		],
    		[
    			"id" => 208,
    			"dataplan_id" => "208",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "15.0GB",
    			"plan_amount" => "3420.0"
    		],
    		[
    			"id" => 149,
    			"dataplan_id" => "149",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "20.0GB",
    			"plan_amount" => "4560.0"
    		],
    		[
    			"id" => 209,
    			"dataplan_id" => "209",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "40.0GB",
    			"plan_amount" => "9100.0"
    		],
    		[
    			"id" => 210,
    			"dataplan_id" => "210",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "75.0GB",
    			"plan_amount" => "16875.0"
    		],
    		[
    			"id" => 211,
    			"dataplan_id" => "211",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "100.0GB",
    			"plan_amount" => "23000.0"
    		]
        ]);
    } else if ($provider_id == "2") {
        // GLO data list
        echo json_encode([
            [
			"id" => 235,
			"dataplan_id" => "235",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "1 day",
			"plan" => "50.0MB",
			"plan_amount" => "46.0"
		],
		[
			"id" => 261,
			"dataplan_id" => "261",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "14 days",
			"plan" => "200.0MB",
			"plan_amount" => "75.0"
		],
		[
			"id" => 254,
			"dataplan_id" => "254",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "14 days",
			"plan" => "500.0MB",
			"plan_amount" => "90.0"
		],
		[
			"id" => 236,
			"dataplan_id" => "236",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "1 day",
			"plan" => "150.0MB",
			"plan_amount" => "92.0"
		],
		[
			"id" => 255,
			"dataplan_id" => "255",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "500.0MB",
			"plan_amount" => "115.0"
		],
		[
			"id" => 237,
			"dataplan_id" => "237",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "2 days",
			"plan" => "350.0MB",
			"plan_amount" => "184.0"
		],
		[
			"id" => 256,
			"dataplan_id" => "256",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "1.0GB",
			"plan_amount" => "214.0"
		],
		[
			"id" => 257,
			"dataplan_id" => "257",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "2.0GB",
			"plan_amount" => "428.0"
		],
		[
			"id" => 37,
			"dataplan_id" => "37",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "14 days",
			"plan" => "1.35GB",
			"plan_amount" => "460.0"
		],
		[
			"id" => 258,
			"dataplan_id" => "258",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "3.0GB",
			"plan_amount" => "642.0"
		],
		[
			"id" => 32,
			"dataplan_id" => "32",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "3.9GB",
			"plan_amount" => "920.0"
		],
		[
			"id" => 259,
			"dataplan_id" => "259",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "5.0GB",
			"plan_amount" => "1070.0"
		],
		[
			"id" => 31,
			"dataplan_id" => "31",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "7.5GB",
			"plan_amount" => "1380.0"
		],
		[
			"id" => 30,
			"dataplan_id" => "30",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "9.2GB",
			"plan_amount" => "1840.0"
		],
		[
			"id" => 260,
			"dataplan_id" => "260",
			"plan_type" => "CORPORATE GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "10.0GB",
			"plan_amount" => "2140.0"
		],
		[
			"id" => 29,
			"dataplan_id" => "29",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "10.8GB",
			"plan_amount" => "2300.0"
		],
		[
			"id" => 28,
			"dataplan_id" => "28",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "14.0GB",
			"plan_amount" => "2760.0"
		],
		[
			"id" => 73,
			"dataplan_id" => "73",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "18.0GB",
			"plan_amount" => "3680.0"
		],
		[
			"id" => 27,
			"dataplan_id" => "27",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "24.0GB",
			"plan_amount" => "4600.0"
		],
		[
			"id" => 75,
			"dataplan_id" => "75",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "29.5GB",
			"plan_amount" => "7360.0"
		],
		[
			"id" => 207,
			"dataplan_id" => "207",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "50.0GB",
			"plan_amount" => "9200.0"
		],
		[
			"id" => 74,
			"dataplan_id" => "74",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "93.0GB",
			"plan_amount" => "13800.0"
		],
		[
			"id" => 143,
			"dataplan_id" => "143",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "119.0GB",
			"plan_amount" => "16560.0"
		],
		[
			"id" => 144,
			"dataplan_id" => "144",
			"plan_type" => "GIFTING",
			"network" => 2,
			"plan_network" => "GLO",
			"month_validate" => "30 days",
			"plan" => "138.0GB",
			"plan_amount" => "18400.0"
		]
        ]);
    } else if($provider_id == "4") {
        // AIRTEL data list
        echo json_encode([
            [
    			"id" => 216,
    			"dataplan_id" => "216",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "7 days",
    			"plan" => "100.0MB",
    			"plan_amount" => "40.0"
    		],
    		[
    			"id" => 217,
    			"dataplan_id" => "217",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "7 days",
    			"plan" => "300.0MB",
    			"plan_amount" => "92.0"
    		],
    		[
    			"id" => 212,
    			"dataplan_id" => "212",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "500.0MB",
    			"plan_amount" => "130.0"
    		],
    		[
    			"id" => 213,
    			"dataplan_id" => "213",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "1.0GB",
    			"plan_amount" => "260.0"
    		],
    		[
    			"id" => 125,
    			"dataplan_id" => "125",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "1 day",
    			"plan" => "1000.0MB",
    			"plan_amount" => "291.0"
    		],
    		[
    			"id" => 214,
    			"dataplan_id" => "214",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "2.0GB",
    			"plan_amount" => "490.0"
    		],
    		[
    			"id" => 126,
    			"dataplan_id" => "126",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "1 day",
    			"plan" => "2000.0MB",
    			"plan_amount" => "490.0"
    		],
    		[
    			"id" => 130,
    			"dataplan_id" => "130",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "14 days",
    			"plan" => "750.0MB",
    			"plan_amount" => "485.0"
    		],
    		[
    			"id" => 215,
    			"dataplan_id" => "215",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "5.0GB",
    			"plan_amount" => "1300.0"
    		],
    		[
    			"id" => 132,
    			"dataplan_id" => "132",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "2.0GB",
    			"plan_amount" => "1164.0"
    		],
    		[
    			"id" => 129,
    			"dataplan_id" => "129",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "7 days",
    			"plan" => "6000.0MB",
    			"plan_amount" => "1455.0"
    		],
    		[
    			"id" => 133,
    			"dataplan_id" => "133",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "3.0GB",
    			"plan_amount" => "1455.0"
    		],
    		[
    			"id" => 134,
    			"dataplan_id" => "134",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "4.5GB",
    			"plan_amount" => "1940.0"
    		],
    		[
    			"id" => 226,
    			"dataplan_id" => "226",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "10.0GB",
    			"plan_amount" => "2300.0"
    		],
    		[
    			"id" => 135,
    			"dataplan_id" => "135",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "6.0GB",
    			"plan_amount" => "2425.0"
    		],
    		[
    			"id" => 136,
    			"dataplan_id" => "136",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "10.0GB",
    			"plan_amount" => "2910.0"
    		],
    		[
    			"id" => 227,
    			"dataplan_id" => "227",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "15.0GB",
    			"plan_amount" => "3450.0"
    		],
    		[
    			"id" => 137,
    			"dataplan_id" => "137",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "11.0GB",
    			"plan_amount" => "3880.0"
    		],
    		[
    			"id" => 228,
    			"dataplan_id" => "228",
    			"plan_type" => "CORPORATE GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "20.0GB",
    			"plan_amount" => "4600.0"
    		],
    		[
    			"id" => 138,
    			"dataplan_id" => "138",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "20.0GB",
    			"plan_amount" => "4850.0"
    		],
    		[
    			"id" => 139,
    			"dataplan_id" => "139",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "40.0GB",
    			"plan_amount" => "9700.0"
    		],
    		[
    			"id" => 140,
    			"dataplan_id" => "140",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "75.0GB",
    			"plan_amount" => "14550.0"
    		],
    		[
    			"id" => 141,
    			"dataplan_id" => "141",
    			"plan_type" => "GIFTING",
    			"network" => 4,
    			"plan_network" => "AIRTEL",
    			"month_validate" => "30 days",
    			"plan" => "120.0GB",
    			"plan_amount" => "19400.0"
    		]
        ]);
    } else if ($provider_id == "3") {
        // 9mobile data list
        echo json_encode([
            [
    			"id" => 117,
    			"dataplan_id" => "117",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "1 day - Gifting",
    			"plan" => "25.0MB",
    			"plan_amount" => "44.0"
    		],
    		[
    			"id" => 118,
    			"dataplan_id" => "118",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "1 day - Gifting",
    			"plan" => "100.0MB",
    			"plan_amount" => "84.0"
    		],
    		[
    			"id" => 119,
    			"dataplan_id" => "119",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "1 day - Gifting",
    			"plan" => "650.0MB",
    			"plan_amount" => "168.0"
    		],
    		[
    			"id" => 122,
    			"dataplan_id" => "122",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "7 days - Gifting",
    			"plan" => "250.0MB",
    			"plan_amount" => "168.0"
    		],
    		[
    			"id" => 120,
    			"dataplan_id" => "120",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "1 day - Gifting",
    			"plan" => "1.0GB",
    			"plan_amount" => "246.0"
    		],
    		[
    			"id" => 121,
    			"dataplan_id" => "121",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "1 day - Gifting",
    			"plan" => "2000.0MB",
    			"plan_amount" => "410.0"
    		],
    		[
    			"id" => 123,
    			"dataplan_id" => "123",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => " 30 days - Gifting",
    			"plan" => "500.0MB",
    			"plan_amount" => "410.0"
    		],
    		[
    			"id" => 36,
    			"dataplan_id" => "36",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "1.5GB",
    			"plan_amount" => "820.0"
    		],
    		[
    			"id" => 33,
    			"dataplan_id" => "33",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "2.0GB",
    			"plan_amount" => "984.0"
    		],
    		[
    			"id" => 15,
    			"dataplan_id" => "15",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "4.5GB",
    			"plan_amount" => "1640.0"
    		],
    		[
    			"id" => 14,
    			"dataplan_id" => "14",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "11.0GB",
    			"plan_amount" => "3360.0"
    		],
    		[
    			"id" => 13,
    			"dataplan_id" => "13",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "15.0GB",
    			"plan_amount" => "4200.0"
    		],
    		[
    			"id" => 142,
    			"dataplan_id" => "142",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "40.0GB",
    			"plan_amount" => "8400.0"
    		],
    		[
    			"id" => 58,
    			"dataplan_id" => "58",
    			"plan_type" => "GIFTING",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - Gifting",
    			"plan" => "75.0GB",
    			"plan_amount" => "12600.0"
    		],
        ]);
    } else if ($provider_id == "1_1") {
        // MTN Gifting
        echo json_encode([
    		[
    			"id" => 234,
    			"dataplan_id" => "234",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "1 day",
    			"plan" => "40.0MB",
    			"plan_amount" => "38.0"
    		],
    		[
    			"id" => 112,
    			"dataplan_id" => "112",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "1 day",
    			"plan" => "100.0MB",
    			"plan_amount" => "95.0"
    		],
    		[
    			"id" => 233,
    			"dataplan_id" => "233",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "2 days",
    			"plan" => "250.0MB",
    			"plan_amount" => "209.0"
    		],
    		[
    			"id" => 107,
    			"dataplan_id" => "107",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "1 day",
    			"plan" => "1000.0MB",
    			"plan_amount" => "285.0"
    		],
    		[
    			"id" => 232,
    			"dataplan_id" => "232",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "3 days",
    			"plan" => "750.0MB",
    			"plan_amount" => "285.0"
    		],
    		[
    			"id" => 230,
    			"dataplan_id" => "230",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "2 days",
    			"plan" => "2.5GB",
    			"plan_amount" => "475.0"
    		],
    		[
    			"id" => 109,
    			"dataplan_id" => "109",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "7 days direct data",
    			"plan" => "1.0GB",
    			"plan_amount" => "523.0"
    		],
    		[
    			"id" => 111,
    			"dataplan_id" => "111",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "14 days",
    			"plan" => "750.0MB",
    			"plan_amount" => "523.0"
    		],
    		[
    			"id" => 61,
    			"dataplan_id" => "61",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days direct data",
    			"plan" => "1.5GB",
    			"plan_amount" => "960.0"
    		],
    		[
    			"id" => 108,
    			"dataplan_id" => "108",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "7 days",
    			"plan" => "2000.0MB",
    			"plan_amount" => "1045.0"
    		],
    		[
    			"id" => 229,
    			"dataplan_id" => "229",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "2.0GB",
    			"plan_amount" => "1152.0"
    		],
    		[
    			"id" => 110,
    			"dataplan_id" => "110",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "7 days direct data",
    			"plan" => "6000.0MB",
    			"plan_amount" => "1425.0"
    		],
    		[
    			"id" => 231,
    			"dataplan_id" => "231",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "3.0GB",
    			"plan_amount" => "1440.0"
    		],
    		[
    			"id" => 65,
    			"dataplan_id" => "65",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days direct data",
    			"plan" => "4.5GB",
    			"plan_amount" => "1920.0"
    		],
    		[
    			"id" => 105,
    			"dataplan_id" => "105",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days direct data",
    			"plan" => "6.0GB",
    			"plan_amount" => "2400.0"
    		],
    		[
    			"id" => 145,
    			"dataplan_id" => "145",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "10.0GB",
    			"plan_amount" => "2880.0"
    		],
    		[
    			"id" => 66,
    			"dataplan_id" => "66",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days direct data",
    			"plan" => "12.0GB",
    			"plan_amount" => "3360.0"
    		],
    		[
    			"id" => 67,
    			"dataplan_id" => "67",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days direct data",
    			"plan" => "20.0GB",
    			"plan_amount" => "4800.0"
    		],
    		[
    			"id" => 77,
    			"dataplan_id" => "77",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => " 30 days direct data",
    			"plan" => "40.0GB",
    			"plan_amount" => "9600.0"
    		],
    		[
    			"id" => 104,
    			"dataplan_id" => "104",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => " 30 days direct data",
    			"plan" => "75.0GB",
    			"plan_amount" => "14400.0"
    		],
    		[
    			"id" => 106,
    			"dataplan_id" => "106",
    			"plan_type" => "GIFTING",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days direct data",
    			"plan" => "120.0GB",
    			"plan_amount" => "19200.0"
    		],
        ]);
    } else if ($provider_id == "1_0") {
        // MTN SME
        echo json_encode([
    		[
    			"id" => 60,
    			"dataplan_id" => "60",
    			"plan_type" => "SME",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "500.0MB",
    			"plan_amount" => "108.5"
    		],
    		[
    			"id" => 51,
    			"dataplan_id" => "51",
    			"plan_type" => "SME",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "1.0GB",
    			"plan_amount" => "217.0"
    		],
    		[
    			"id" => 262,
    			"dataplan_id" => "262",
    			"plan_type" => "SME2",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "1.0GB",
    			"plan_amount" => "222.0"
    		],
    		[
    			"id" => 50,
    			"dataplan_id" => "50",
    			"plan_type" => "SME",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "2.0GB",
    			"plan_amount" => "434.0"
    		],
    		[
    			"id" => 263,
    			"dataplan_id" => "263",
    			"plan_type" => "SME2",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "2.0GB",
    			"plan_amount" => "444.0"
    		],
    		[
    			"id" => 225,
    			"dataplan_id" => "225",
    			"plan_type" => "SME",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "3.0GB",
    			"plan_amount" => "651.0"
    		],
    		[
    			"id" => 264,
    			"dataplan_id" => "264",
    			"plan_type" => "SME2",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "3.0GB",
    			"plan_amount" => "666.0"
    		],
    		[
    			"id" => 44,
    			"dataplan_id" => "44",
    			"plan_type" => "SME",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "5.0GB",
    			"plan_amount" => "1085.0"
    		],
    		[
    			"id" => 265,
    			"dataplan_id" => "265",
    			"plan_type" => "SME2",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "5.0GB",
    			"plan_amount" => "1110.0"
    		],
    		[
    			"id" => 150,
    			"dataplan_id" => "150",
    			"plan_type" => "SME",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "10.0GB",
    			"plan_amount" => "2170.0"
    		],
    		[
    			"id" => 266,
    			"dataplan_id" => "266",
    			"plan_type" => "SME2",
    			"network" => 1,
    			"plan_network" => "MTN",
    			"month_validate" => "30 days",
    			"plan" => "10.0GB",
    			"plan_amount" => "2220.0"
    		],
        ]);
    } else if ($provider_id == "3_1") {
        // 9mobile SME
        echo json_encode([
    		[
    			"id" => 241,
    			"dataplan_id" => "241",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "1.0GB",
    			"plan_amount" => "300.0"
    		],
    		[
    			"id" => 243,
    			"dataplan_id" => "243",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "1.5GB",
    			"plan_amount" => "450.0"
    		],
    		[
    			"id" => 242,
    			"dataplan_id" => "242",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "2.0GB",
    			"plan_amount" => "600.0"
    		],
    		[
    			"id" => 244,
    			"dataplan_id" => "244",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "3.0GB",
    			"plan_amount" => "900.0"
    		],
    		[
    			"id" => 245,
    			"dataplan_id" => "245",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "4.0GB",
    			"plan_amount" => "1200.0"
    		],
    		[
    			"id" => 246,
    			"dataplan_id" => "246",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "4.5GB",
    			"plan_amount" => "1350.0"
    		],
    		[
    			"id" => 247,
    			"dataplan_id" => "247",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "5.0GB",
    			"plan_amount" => "1500.0"
    		],
    		[
    			"id" => 248,
    			"dataplan_id" => "248",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "10.0GB",
    			"plan_amount" => "3000.0"
    		],
    		[
    			"id" => 249,
    			"dataplan_id" => "249",
    			"plan_type" => "SME",
    			"network" => 3,
    			"plan_network" => "9MOBILE",
    			"month_validate" => "30 days - SME",
    			"plan" => "40.0GB",
    			"plan_amount" => "9100.0"
    		],
        ]);
    }
}