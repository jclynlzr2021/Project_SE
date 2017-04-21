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
	<br><br><br><br><br><br><br>

<!-- Start Slider -->
	<center><div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

		<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="image/img1.jpg">
				</div>

				<div class="item">
					<img src="image/img2.jpg">
				</div>

				<div class="item">
					<img src="image/img3.jpg">
				</div>

				<div class="item">
					<img src="image/img4.jpg">
				</div>
			</div>
					<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
	</div>
	</center>
    <!-- End Slider -->

<div class = "container_a">
	<center><h3>WELCOME TO OUR SHOP</h3>
	---<span style="font-size:100%;">&star;</span>
				<span style="font-size:200%;">&star;</span>
				<span style="font-size:100%;">&star;</span>---<br></center>
	
</div><br><br>

	<div class="container">
		<div class="row">
			
			<div class="col-md-4">
				<div class="thumbnail"  style = "background-image: url(image/m1.jpg); height: 150px; border: 1px dashed white; ">
					<center><a href="myModal_news" data-toggle="modal" data-target="#myModal_news"><button type="button" class="btn btn-transparent btn-lg outline" style="margin-top: 90px; opacity:.8">NEWS</button></a></center>
				
				</div>
			</div>	
			
			<div class="col-md-4">
				<div class="thumbnail"  style = "background-image: url(image/m2.jpg); height: 150px; border: 1px dashed white;">
					<center><a href="myModal_order" data-toggle="modal" data-target="#myModal_order"><button type="button" class="btn btn-transparent btn-lg outline" style="margin-top: 90px;opacity:.8">HOW TO ORDER</button></a></center>
				</div>
			</div>
				
			<div class="col-md-4">
				<div class="thumbnail" style = "background-image: url(image/m3.jpg); height: 150px; border: 1px dashed white;">
					<center><a href="myModal_promo" data-toggle="modal" data-target="#myModal_promo"><button type="button" class="btn btn-transparent btn-lg outline" style="margin-top: 90px;opacity:.8">Promo</button></a></center>
				</div>
			</div>
	
	</div>
	
		<div class="container"><center><h4>FEATURED PRODUCTS</h4>
				---<span style="font-size:100%;">&star;</span>
				<span style="font-size:200%;">&star;</span>
				<span style="font-size:100%;">&star;</span>---
				</center><br>
		</div>

	</div>	
	
		<div class = "container">
					<div class = "row">
						<div class ="col-md-12">
							<h4 class ="text-center">BEST SELLER</h4><br>
							<div id="get_product">
							</div>
					
						</div>
					</div>
		</div>
			<div class = "container">
						<div class ="col-md-12">
							<br><br>	
							<h4 class ="text-center">ON SALE PRODUCTS</h4><br>
							<div id="get_sale">
							</div>
					
							
						</div>
								
		</div>	
		
<BR>
<div class="container"><center><h4>OUR CLIENT SAY</h4>
				---<span style="font-size:100%;">&star;</span>
				<span style="font-size:200%;">&star;</span>
				<span style="font-size:100%;">&star;</span>---
				</center><br>
		</div>
	
	<div class = "container">
		<div id="text-carousel" class="carousel slide" data-ride="carousel" style="height:250px">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div>
							 <p>Affordable na matibay pa!! Plus you can create your design. Good job Tote!!
							<br>
							<br>
							<img src="image/img1.jpg" style="width: 50px; height: 50px; border: solid 1px gray;"><br>Chena Chena<br>Student</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content" >
                        <div>
                            <p>Ay kingina! Ke ganda naman ng mga produkto niyo. Aba eh. Mapapa wow kanalang. At nasa uso ang mga disenyo ng inyong mga produkto at siguradong babalik balikan yan ng mga mamamayan
							<br>
							<br>
							<img src="image/chua.jpg" style="width: 50px; height: 50px; border: solid 1px gray;"><br>Coranel Chua<br>Student</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div>                          
                             <p>Affordable!! m,df.dm.msd.mf.sdmf.mds dkjfpoajton     jflkadjfldkajg lsafjlsajfn 
							<br>
							<img src="image/jo.jpg" style="width: 50px; height: 50px; border: solid 1px gray;"><br>Jocelyn Lazaro<br>Student</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Controls --> 
		<a class="left carousel-control" href="#text-carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#text-carousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>

	</div>
	</div>
	<br><br>
	<?php
		include("include/promo.php");
		include("include/howtoorder.php");
		include("include/news.php");
		include("include/footer.php");
	?>
		<script src="bootstrap/jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>