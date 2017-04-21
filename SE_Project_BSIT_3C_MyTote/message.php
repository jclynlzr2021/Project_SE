<?php
include"db.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$msg = $_POST["msg"];
$type = $_POST["option"];

$name = "/^[A-Z][a-zA-Z] +$/";


	if($fname==''){
		echo "Please enter your first name!";
		exit();
	}
	if (!preg_match("/^[A-Za-z]+$/",$fname)||!preg_match("/^[A-Za-z]+$/",$fname)){
		echo "First name cannot contain number or symbols!";
		exit();
	}	

	if($lname==''){
		echo "Please enter your last name!";
		exit();
	}
	if (!preg_match("/^[A-Za-z]+$/",$lname)||!preg_match("/^[A-Za-z]+$/",$lname)){
		echo "Last name cannot contain number or symbols!";
		exit();
	}
	
	if($msg==''){
		echo "Please enter your message!";
		exit();
	}


	else {
	
	$sql ="INSERT INTO `message` (`message_id`, `message_type`, `user_id`, `user_fname`, `user_lname`, `user_image`, 
	`user_message`) VALUES (NULL, '$type', '', '$fname', '$lname', '', '$msg')";
	$run_query = mysqli_query($con,$sql);
	if($run_query){
		echo"Message Sent!";
	}
	}
?>