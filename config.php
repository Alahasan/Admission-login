<?php 
session_start();
date_default_timezone_set('Asia/Dhaka');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssc_admission";
$conn = new mysqli($servername,$username,$password,$dbname); 


if($conn->connect_error){
	die('Connection failed!!');
}
$TBL_STUD = "ssc_students";
?>

