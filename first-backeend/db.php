<?php
$host ='';
$username ='';
$password ='';
$DB_name ='';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host,$username,$password,$DB_name);
if($conn->connect_error){
die ('connection failed');
}
?> 