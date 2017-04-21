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
		<script src="main2.js"></script>
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
									<li><a href="pouch.php">Trendy Bag</a></li>
									<li class="divider"></li>
									<li><a href="string.php">Drawstring Bag</a></li>
								</ul>
			
						</li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Log in</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<br><br><br><br><br><br><br>
		<div class = "container_a">
	<center><h3>DRAWSTRING BAG</h3>
	---<span style="font-size:100%;">&star;</span>
				<span style="font-size:200%;">&star;</span>
				<span style="font-size:100%;">&star;</span>---<br></center>
	
</div><br><br>
			<div class = "container">
						<div class ="col-md-12">
							<br><br>	
						
							<div id="get_string">
							</div>
					
							
						</div>
								
		</div>	
		
<br><br>
	<?php include("include/footer.php");?>
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>