<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tote";

//create connection
$con = mysqli_connect($servername, $username,$password, $db);

//check connection

if(!$con){
	die("Connection failed: " . mysqli_connect_error());

}
?>
