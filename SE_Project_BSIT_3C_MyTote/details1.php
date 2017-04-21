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
						<li class="active"><a href="#">Home</a></li>
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
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Log in</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<br><br><br><br><br><br><br><br><br>
		<div class="container-fluid">
			<?php
				if(isset($_GET['pid'])){
					$product_id = $_GET['pid'];
					$get_pro= "SELECT * from product WHERE prod_id = '$product_id'";
					$run_pro= mysqli_query($con,$get_pro);
						while($row = mysqli_fetch_array($run_pro)){
							$pro_id = $row['prod_id'];
							$pro_cat = $row['cat_id'];
							$pro_title = $row['prod_name'];
							$pro_image = $row['prod_image'];
							$pro_price = $row['prod_price'];
							$prod_description = $row['prod_desc'];
							
							echo"
								<div class='col-md-2'></div>
								<div class='col-md-8'>
											<div class='panel panel-default'>
												<div class='panel-heading'>$pro_title</div>
												<div class='panel-body'>
													
														<div class='col-md-4'>
															<img src='$pro_image' class='img-responsive' width='200'>
														</div>
														<div class='col-md-4'><h5>Materials Used:</h5>
															<p>$prod_description</p>
														</div>
														<div class='col-md-4'></div>
													
												</div>
												<div class='panel-heading'>Php$pro_price
													
													<button pid = '$pro_id' style='float:right;' id = 'product' class='btn-danger btn-xs'>AddToCart</button>
												</div>
											</div>
								</div>
								<div class='col-md-2'></div>
							";
					
					}
				}
			?>
		</div>
		
<br><br>
	<?php include("include/footer.php");?>
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>