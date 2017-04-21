<?php
session_start();
	if(isset($_SESSION["uid"])){
		header("location:profile.php");
	}
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>My Tote</title>
		<meta name ="viewport" content="width=device=width, initial-scale=1.0">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min"></script>
		
	</head>

<body>
<div class = "wrapper_body">
	<!-- Navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="index.php"><img class="logo"src="image/logo_80px.png"/></a>
				<h1 class="tote">My Tote Philippines</h1>
			</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="toteBag.php">Tote Bag</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="pouch.php">Pouch</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="string.php">Drawstring</a></li>
							
						</ul>
				</li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li class="active"><a href="login.php">Log in</a></li>
			</ul>
      
      
       
    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-->
	</nav>
	<br><br><br><br><br><br><br>
	

	<div id="exTab2" class="container">	
		<div class = "row">
			<div class="col-md-3"></div>
			<div class ="col-md-6" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-3"></div>
		</div>

		<ul class="nav nav-tabs">
			<li class="active"><a  href="#1" data-toggle="tab">BASIC INFORMATION</a></li>
			<li><a href="#2" data-toggle="tab">CONTACT INFORMATION</a></li>
			<li><a href="#3" data-toggle="tab">ACCOUNT</a></li>
		</ul>
<BR>
		
		<form method="POST" action="signup.php" enctype="multipart/form-data">
			<div class="tab-content ">
				<div class="tab-pane active" id="1">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">First Name</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id = "fname" name="fname" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["fname"]; ?>'/ placeholder="First Name">
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Last Name</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id = "lname" name="lname" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["lname"]; ?>'/ placeholder="Last Name">
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Birthday</label>
							<div class="col-sm-6">
								<input type="date" class="form-control" id = "bday" name="bday" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["bday"]; ?>'/ placeholder="Birthday">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Age</label>
							<div class="col-sm-6">
								<input type="number" class="form-control" id = "age" name="age" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["age"]; ?>'/ placeholder="Age">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Gender</label>
							<div class="col-sm-6">							
								<select id="gender" name="gender" class="form-control" >
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
					</div>
				
				</div>
			
				<div class="tab-pane" id="2">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Address</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id = "address" name="address" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["address"]; ?>'/ placeholder="Address">
							</div>		
					</div>
					
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Zip Code</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id = "zip" name="zip" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["zip"]; ?>'/ placeholder="Zip Code">
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Contact Number</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id = "contact" name="contact" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["contact"]; ?>'/ placeholder="Contact Number">
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-6">
								<input type="email" class="form-control" id = "email" name="email" value='<?php if(isset($_POST['signSubmit'])) echo $_POST["email"]; ?>'/ placeholder="Email">						
							</div>
					</div>
				</div>
				
				<div class="tab-pane" id="3">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Profile Image</label>
							<div class="col-sm-6">
								<input type="file" class="form-control" name="fileToUpload" id=""> 
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id = "pass" name="pass" placeholder="Password">
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Re-Enter Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id = "pass2" name="pass2" placeholder="Re-Enter Password">
								</div>
					</div>
					
					<div class="form-group row">
						
							<div class="col-sm-9">
								
								<a href="signup.php"><button type="submit" class="btn btn-info pull-right" id = "signSubmit" name="signSubmit"><span class="glyphicon glyphicon-log-in"></span> Sign Me Up ! </button></a>
						
								<center><p>&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already register? Log in <a href="login.php">here</a></p></center>
								
							</div>
					</div>
				</div>
			</div>
		</form>
	</div><br><br><br><br><br><br><br><br><br><br><br>
<?php 
	
	include("include/footer.php");
?>

	<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>


</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("tote");

if(isset($_POST["signSubmit"])) {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$bday = $_POST["bday"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$zip = $_POST["zip"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$image = $_FILES['fileToUpload']['name'];
$pass = $_POST["pass"];
$pass2 =$_POST["pass2"];

		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "<script>alert('Please check your imagee!')</script>";	
				$uploadOk = 0;
			}

	
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "<script>alert('Your image file was too large!')</script>";	
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				echo "<script>alert('Sorry there was an error uploading your file!')</script>";	
			}
		}
	if($fname==''){
		echo "<script>alert('Please enter your first name!')</script>";
		exit();
	}
	if (!preg_match("/^[A-Za-z]+$/",$fname)||!preg_match("/^[A-Za-z]+$/",$fname)){
		echo "<script>alert('First name cannot contain number or symbols!')</script>";
		exit();
	}	

	if($lname==''){
		echo "<script>alert('Please enter your last name!')</script>";
		exit();
	}
	if (!preg_match("/^[A-Za-z]+$/",$lname)||!preg_match("/^[A-Za-z]+$/",$lname)){
		echo "<script>alert('Last name cannot contain number or symbols!')</script>";
		exit();
	}	
	if($bday==''){
		echo "<script>alert('Please enter your birthdate!')</script>";
		exit();
	}
	if($age==''){
		echo "<script>alert('Please enter your age!')</script>";
		exit();
	}

	if (preg_match("/^[A-Za-z]+$/",$age)||preg_match("/^[A-Za-z]+$/",$age)){
		echo "<script>alert('Age cannot be alphabet!')</script>";
		exit();
		
	}
	if($gender==''){
		echo "<script>alert('Please choose your gender!')</script>";
		exit();
	}
	
	if($address==''){
		echo "<script>alert('Please enter your address!')</script>";
		exit();
	}
	if($zip==''){
		echo "<script>alert('Please enter your zip code!')</script>";
		exit();
	}
	if(!is_numeric($zip)){
		echo "<script>alert('Zip code must be a number!')</script>";
		exit();
	}
	if($contact==''){
		echo "<script>alert('Please enter your mobile number!')</script>";
		exit();
	}
	if (strlen($contact)<11|strlen($contact)>12){
		echo "<script>alert('Please check your mobile number!')</script>";
		exit();
	}
	if(!is_numeric($contact)){
		echo "<script>alert('Contact must be a number!')</script>";
		exit();
	}
	
	if($email==''){
		echo "<script>alert('Please enter your email address!')</script>";
		exit();
	}


	if($pass==''){
		echo "<script>alert('Please enter your password!')</script>";
		exit();
	}
	
	if($pass!=$pass2){
		echo "<script>alert('Password did not match!')</script>";
		exit();
	}
	if (is_numeric($pass)){
		echo "<script>alert('Password cannot be pure numeric!')</script>";
		exit();
	}
	if (strlen($pass)<6|$pass>20){
		echo "<script>alert('Password must be 6 to 20 character')</script>";
		exit();
	}
	$sql = "SELECT * FROM user WHERE user_email = '$email'";
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "<script>alert('Email already exist')</script>";
		exit();
	}
	
	else {

	
	$query ="INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_bday`, `user_age`, `user_gender`, `user_add`, `user_zip`, `user_contact`, `user_email`, `user_image`, `user_pass`, `user_pass2`) VALUES (NULL, '$fname', '$lname', '$bday', '$age', '$gender', '$address', '$zip', '$contact', '$email','uploads/$image', '$pass', '$pass2')";
		if(mysql_query($query)){
 echo "<script>alert('Registration Successful!')</script>";	
}
	}

}

?>