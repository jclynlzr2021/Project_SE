<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
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
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="user_tote.php">Tote Bag</a></li>
									<li class="divider"></li>
									<li><a href="user_pouch.php">Trendy Pouch</a></li>
									<li class="divider"></li>
									<li><a href="user_string.php">Drawstring Bag</a></li>
								</ul>
			
						</li>
						<li><a href="user_about.php">About Us</a></li>
						<li><a href="user_contact.php">Contact Us</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Hi,&nbsp;".$_SESSION["name"];?></a>
								<ul class="dropdown-menu">
									<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">&nbsp;Cart</a></li>
									<li class="divider"></li>
									<li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;Profile</a></li>
									<li class="divider"></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;LogOut</a></li>
								</ul>
						</li>
						<li><a href="#" id ="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
								<div class ="dropdown-menu" style="width:500px;">
									<div class="panel panel-success">
										<div class="panel-heading">
											<div class = "row">
												<div class="col-md-3">No.</div>
												<div class="col-md-3">Product Name</div>
												<div class="col-md-3">Product Image</div>
												<div class="col-md-3">Price</div>
											</div>
										</div>
										<div class="panel-body">
											<div id="cart_product">
												<!--<div class = "row">
													<div class="col-md-3">No.</div>
													<div class="col-md-3">Product Image</div>
													<div class="col-md-3">Product Name</div>
													<div class="col-md-3">Price</div>
												</div>-->
											</div>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
						 </li>
						
					</ul>
				</div>
			</div>
		</nav>
	<br><br><br><br><br><br><br>

		
		
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