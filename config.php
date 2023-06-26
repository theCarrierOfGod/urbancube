<?php
define('DB_SERVER','localhost');
define('DB_USER','urban_user2');
define('DB_PASS' ,'xXFZp4^b5ylL');
define('DB_NAME', 'urban_db2');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
//echo "connected sucessfully ";	
}
?>