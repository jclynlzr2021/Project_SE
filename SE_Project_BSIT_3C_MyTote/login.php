<?php
include "db.php";
session_start();
	if(isset($_POST['loginSubmit'])){
		$email = $_POST['email'];
		$password =$_POST['password'];
		$sql = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$password'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count == 1){
			$row = mysqli_fetch_array($run_query);
			$_SESSION["uid"] = $row["user_id"];
			$_SESSION["name"] = $row["user_fname"];
				echo  "<script>window.open('profile.php','_self')</script>";
			}
		
		
		$sql = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_pass = '$password'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count == 1){
			$row = mysqli_fetch_array($run_query);
			$_SESSION["uid"] = $row["admin_id"];
			$_SESSION["name"] = $row["admin_fname"];
			$_SESSION["lname"] = $row["admin_lname"];
				echo  "<script>window.open('admin.php','_self')</script>";
			}
			else
	{
		echo  "<script>alert('Email or password is incorrect!')</script>";
	
	}
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
							<li><a href="#">Pouch</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="string.php">Drawstring</a></li>
							
						</ul>
				</li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li class="active"><a href="login.php">Log in</a></li>
			</ul>
      
      
       
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-->
	</nav>
	</div>
	<br><br><br><br><br><br><br>
	<div class = "container">
		<center>
			<img src="image/user.png">
			<h2>Sign In To Your Account</h2><br>
			
				<form method="POST">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id = "password" name="password" placeholder="Password"required>
							</div>
					</div>
					<div class="form-group">
					<div class="col-sm-9">
						<p>Not yet a member? Sign up<a href="signup.php"> here. </a></p>
						<button type="submit" class="btn btn-info pull-right" id = "loginSubmit" name="loginSubmit"><span class="glyphicon glyphicon-log-in"></span>Log In </button>
					</div>
					</div>
				</form>
				
		</center>
		
	</div><br><br><br><br>

<?php include("include/footer.php");?>
	

	<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>


</body>
</html>

