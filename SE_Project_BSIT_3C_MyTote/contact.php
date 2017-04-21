<?php
session_start();
	if(isset($_SESSION["uid"])){
		header("location:profile.php");
	}
include("db.php");
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
		<script src="main.js"></script>
	</head>
<body>
	
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img class="logo"src="image/logo_80px.png"/></a>
					<h1 class="tote">My&nbsp;Tote&nbsp;Philippines</h1>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="totebag.php">Tote Bag</a></li>
									<li class="divider"></li>
									<li><a href="pouch.php">Trendy Pouch</a></li>
									<li class="divider"></li>
									<li><a href="string.php">Drawstring Bag</a></li>
								</ul>
			
						</li>
						<li><a href="about.php">About Us</a></li>
						<li class="active"><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Log in</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<br><br><br><br><br><br>
<div class="container">
<div class="container"><center><h4>CONTACT US</h4>
				---<span style="font-size:100%;">&star;</span>
				<span style="font-size:200%;">&star;</span>
				<span style="font-size:100%;">&star;</span>---
				</center><br>
		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<img src="image/map1.png" style="border: 2px solid black; height:300px; width:800px;">
				<h5>Bldg., 45F Estrella St., Sto Rosario Malolos Bulacan</h5>
			</div>
			<div class="col-md-2"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-8">
				<center><h4>SEND US A MESSAGE</h4></center><br><br>
					<form method="POST">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">First Name</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id = "fname" name="fname" placeholder="First Name"required>
								</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Last Name</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id = "lname" name="lname" placeholder="Last Name"required>
								</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Message</label>
								<div class="col-sm-6">
									<textarea class="form-control" id="feed_message" name="msg" placeholder="Message"required></textarea>
								</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Send As</label>
								<div class="col-sm-6">
									<select id="opt" id="option" name="option" class="form-control" >
										<option value="1">Inquiry</option>
										<option value="2">Feedback</option>
									</select>
								</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9">
							
								<button type="submit" class="btn btn-info pull-right" id="msgsend" name="send"><span class="glyphicon glyphicon-log-in"></span>SEND</button>
							</div>
						</div>
					</form>
			</div>
			<div class="col-md-4">
			
					<img src="image/about1.jpg" class="img-responsive"/>
					
				
			</div>
			
	
		</div>
	</div>
<br><br><br>

	<?php include("include/footer.php");?>
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
