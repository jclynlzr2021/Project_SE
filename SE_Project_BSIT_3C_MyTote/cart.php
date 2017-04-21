<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
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
									<li><a href="user_tote.php">Tote Bag</a></li>
									<li class="divider"></li>
									<li><a href="user_pouch.php">Trendy Pouch</a></li>
									<li class="divider"></li>
									<li><a href="user_string.php">Drawstring Bag</a></li>
								</ul>
			
						</li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Hi,&nbsp;".$_SESSION["name"];?></a>
								<ul class="dropdown-menu">
									<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">&nbsp;Cart</a></li>
								
									<li class="divider"></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;LogOut</a></li>
								</ul>
						</li>
						<li><a href="#" id ="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
								<div class ="dropdown-menu" style="width:500px; height:500px; overflow-y: scroll; ">
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
										
									</div>
								</div>
						 </li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<br><br><br><br><br><br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-success">
						<div class="panel-heading">Cart Checkout</div>
						<div class="panel-body">
							<div class = "row">
								<div class="col-md-2"><b>Action</b></div>
								<div class="col-md-2"><b>Product Name</b></div>
								<div class="col-md-2"><b>Product Image</b></div>
								<div class="col-md-2"><b>Product Price</b></div>
								<div class="col-md-2"><b>Quantity</b></div>
								<div class="col-md-2"><b>Total</b></div>
							</div><br><br>
							<div id="cart_checkout"></div>
							<!--<div class = "row">
								<div class="col-md-2">
									<div class = "btn-group">
										<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<div class="col-md-2">Monster</div>
								<div class="col-md-2"><img src="image/bag1.jpg" width="80" height="80"></div>
								<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
								<div class="col-md-2"><input type='number' class='form-control' value='1'></div>
								<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							</div>--> 
						</div>
						<div class="panel-footer"></div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		
<br><br>
	<?php include("include/footer.php");?>
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>