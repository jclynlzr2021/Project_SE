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
									<li><a href="pouch.php">Trendy Pouch</a></li>
									<li class="divider"></li>
									<li><a href="string.php">Drawstring Bag</a></li>
								</ul>
			
						</li>
						<li class="active"><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Log in</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<br><br><br><br><br><br><br>
<div class="container">
		<div class="container"><center><h4>ABOUT US</h4>
				---<span style="font-size:100%;">&star;</span>
				<span style="font-size:200%;">&star;</span>
				<span style="font-size:100%;">&star;</span>---
				</center><br><br>
		</div>
		<div class="container">
			<center>
					<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h4>MISSION</h4><br>
					<p>My Tote mission is to be customer's first choice when it comes to quality products and be the shopping business that best understand and satisfies the product service needs of the shoppers. </p><br><br>
				</div>	
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h4>VISION</h4><br>
					<p>My Tote's Vision is to give the best quick shopping business experience. Being the best means providing quality but affordable bags. </p><br><br>
				</div>	
				<div class="col-md-3"></div>
			</div>
				<h4>OUR PRODUCT</h4><br>
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">TOTE BAG</div>
							<div class="panel-body">
								<img src="image/bag1.jpg" class="img-responsive"><br>MATERIALS<br><br>
								<p>3 Layered Cloth<br>Polyester Cloth<br>Pelon<br>Lining<br>Size: 15 x 14 inches<br>Strap length 12 inches<br>Velcro tape serves as lock<br>Guranteed durable. Can carry up to two laptops.<br>#MadeInThePhilippines
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">TRENDY POUCH</div>
							<div class="panel-body">
								<img src="image/pouch1.jpg" class="img-responsive"><br>MATERIALS<br><br>
								<p>3 Layered Cloth<br>Polyester Cloth<br>Pelon<br>Lining<br>Size: 6.5 x 5 inches<br>Zipper serves as lock<br><br>Irresistibly cute and durable<br>#MadeInThePhilippines
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">DRAWSTRING BAG</div>
							<div class="panel-body">
								<img src="image/st1.jpg" class="img-responsive"><br>MATERIALS<br><br>
									<p>3 Layered Cloth<br>Special cloth for printing<br>Black lining (inside)<br>Durable special black cloth(front and back)<br>Front: 100% polyester<br>Back: Full black cloth smooth and durable<br>13 x 16 inches<br>It can carry up 20kg or more!<br>#MadeInThePhilippines
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</div>
			</center>
		</div>

</div>
<br><br><br>

	<?php include("include/footer.php");?>
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
