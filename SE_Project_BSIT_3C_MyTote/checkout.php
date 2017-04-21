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
		<link rel="stylesheet" href="bootstrap.vertical-tabs.css">
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
		<div class="row" style="min-height:300px;">
			    <div class="col-md-2">
					<div class="row">
						<div class="col-md-12"> <!-- required for floating -->
							  <!-- Nav tabs -->
							 <ul class="nav nav-tabs tabs-left pull-left">
									<li class="active"><a href="#home" data-toggle="tab">SIGNED IN AS</a></li><br>
									<li><a href="#add" data-toggle="tab">SHIPPING ADDRESS</a></li><br>
									<li><a href="#payment" data-toggle="tab">PAYMENT METHOD</a></li><br>
									<li><a href="#settings" data-toggle="tab">PLACE ORDER</a></li>
							 </ul>
						</div>
					</div>
				</div>

				<div class="col-md-8">
				  <!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<?php 
								if(isset($_GET['uid'])){
								$user_id = $_GET['uid'];
								$get_pro= "SELECT * from user WHERE user_id = '$user_id'";
								$run_pro= mysqli_query($con,$get_pro);
								while($row = mysqli_fetch_array($run_pro)){
								$pro_id = $row['user_id'];
								$pro_fname = $row['user_fname'];
								$pro_lname= $row['user_lname'];
								$pro_email= $row['user_email'];
								echo"
									<h5>FULL NAME: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$pro_fname &nbsp; $pro_lname</h5>
									<h5>EMAIL ADDRESS: &nbsp;&nbsp;&nbsp;$pro_email</h5><br>
									";
								}
							}
							?>
						</div>
						<div class="tab-pane" id="add">
							
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<form method="POST">
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">First Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control"  name="fname" placeholder="First Name">
												</div>
												<label class="col-sm-2 col-form-label">Last Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control" name="lname" placeholder="Last Name">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">House Number</label>
												<div class="col-md-12">
													<input type="text" class="form-control" name="add1" placeholder="Street No., Street Name, House/Lot No.,Building Name">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Barangay</label>
													<div class="col-sm-12">							
														<input type="text" class="form-control" name="add2"  placeholder="Barangay">
													</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Town/Municipality</label>
													<div class="col-sm-12">							
														<input type="text" class="form-control" name="add3"  placeholder="Town/Municipality">
													</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Province</label>
													<div class="col-sm-12">							
														<input type="text" class="form-control"  name="add4"  placeholder="Province">
													</div>
											</div>
											
										
									</div>
									<div class="col-md-2"></div>
								</div>
						</div>
						<div class="tab-pane" id="payment">
						
							
								<div id="exTab2" class="container">	

									<div class="row">
										<div class="col-md-8">
											<ul class="nav nav-tabs">
												<li class="active"><a  href="#1" data-toggle="tab">Credit/Debit Card</a></li>
												<li><a href="#2" data-toggle="tab">Cash On Delivery</a></li>
												<li><a href="#3" data-toggle="tab">Paypal</a></li>
												<li><a href="#4" data-toggle="tab">Bank Transfer</a></li>
											</ul>
												<BR>
										
										
											<div class="tab-content ">
												<div class="tab-pane active" id="1">
													shksadhk
												</div>
											
												<div class="tab-pane" id="2">
													sabmnsbmansssssssssssssssb
												</div>
												
												<div class="tab-pane" id="3">
													sd,msnd,s
												</div>
												<div class="tab-pane" id="4">
													sd,msnd,sklajdlaJDL
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						<div class="tab-pane" id="settings">
							<div class="form-group row">
							<?php
								$uid = ['uid'];
								$sql = "SELECT * from cart WHERE user_id = $uid";
								
								echo "sjdkasj";
							?>
													<div class="col-sm-4"></div>
													<div class="col-sm-4">							
														<button type="submit" class="btn btn-lg btn-default" name="save">ORDER</button>
													</div>
													<div class="col-sm-4"></div>
											</div>
										</form>
						</div>
					 
				</div>
				<div class="col-md-2"></div>


		</div>
	</div>
</div>
	
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
											
											if(isset($_POST["save"])){
												$user_id = $_SESSION["uid"];
												$fname = $_POST["fname"];
												$lname = $_POST["lname"];
												$add1 = $_POST["add1"];
												$add2 = $_POST["add2"];
												$add3 = $_POST["add3"];
												$add4 = $_POST["add4"];
												
												if($fname==''){
													echo "<script>alert('Please enter recipient first name!')</script>";
													exit();
												}
												if($lname==''){
													echo "<script>alert('Please enter recipient last name!')</script>";
													exit();
												}
												if($add1==''){
													echo "<script>alert('Please enter recipient house number!')</script>";
													exit();
												}
												if($add2==''){
													echo "<script>alert('Please enter recipient barangay!')</script>";
													exit();
												}
												if($add3==''){
													echo "<script>alert('Please enter recipient town/municipality!')</script>";
													exit();
												}
												if($add4==''){
													echo "<script>alert('Please enter recipient province!')</script>";
													exit();
												}
												
												else {

	
													$query ="INSERT INTO `customer_order` (`id`, `uid`, `pid`, `p_image`, `p_price`, `p_qty`, `p_status`, `del_fname`, `del_lname`, `add1`, `add2`, `add3`, `add4`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', 'a');";
														if(mysql_query($query)){
															echo "<script>alert('Information Saved!')</script>";	
														}
													}
												
											}
										?>