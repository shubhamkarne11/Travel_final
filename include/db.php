<?php
session_start();
error_reporting(0);
$serverName ="localhost";
$userName = "root";
$password ="";
$dbName ="main_pro"; 


$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
	
	echo "Failed to connect!";
		
		exit();
		
}


	
	?>