<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>My Tote Admin</title>
		<meta name ="viewport" content="width=device=width, initial-scale=1.0">
	    <link href="admincss/css/bootstrap.min.css" rel="stylesheet">
		<link href="admincss/css/bootstrap-theme.css" rel="stylesheet">
		<link href="admincss/css/elegant-icons-style.css" rel="stylesheet" />
		<link href="admincss/css/font-awesome.min.css" rel="stylesheet" />    
		<link href="admincss/css/style.css" rel="stylesheet">
		<link href="admincss/css/style-responsive.css" rel="stylesheet" />
		<link href="admincss/css/xcharts.min.css" rel=" stylesheet">	
	</head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="admin.php" class="logo">My<span class="lite">Tote</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
               
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                             <i class="fa fa-user"></i>
                            <span class="username"><?php echo "Hi,&nbsp;".$_SESSION["name"];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
							
                        
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
<aside>
				<div id="sidebar"  class="nav-collapse ">
					<!-- sidebar menu start-->
					<ul class="sidebar-menu">                
						<li class="active">
							<a class="" href="admin.php">
								  <i class="icon_house_alt"></i>
								  <span>Dashboard</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="javascript:;" class="">
								  <i class="icon_document_alt"></i>
								  <span>Product</span>
								  <span class="menu-arrow arrow_carrot-right"></span>
							</a>
							<ul class="sub">
								<li><a class="" href="addproduct.php">Add Product</a></li>                          
							</ul>
						</li>  
						<li class="sub-menu">
							<a href="javascript:;" class="">
								<i class="icon_document_alt"></i>
									<span>View Product</span>
									<span class="menu-arrow arrow_carrot-right"></span>
							</a>
									
							<ul class="sub">
								<li><a class="" href="viewProd.php">ALL</a></li>   
								<li><a class="" href="viewtote.php">TOTE BAG</a></li>                          
								<li><a class="" href="viewpouch.php">TRENDY POUCH</a></li>
								<li><a class="" href="viewstring.php">DRAWSTRING BAG</a></li>
								</ul>
						</li>
						<li>
							<a class="" href="viewcust.php">
							<i class="fa fa-users"></i>
							<span>Customer</span></a>
						</li>
						<li><a class="" href="viewfeed.php">Feedback</a></li>
						<li><a class="" href="viewinq.php">Inquiry</a></li>
					</ul>
					  <!-- sidebar menu end-->
				</div>
			</aside>
      <!--sidebar end-->
      </section>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="admin.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Add Product</li>						  	
					</ol>
				</div>
			</div>
             
				<div class = "container">
					<h4 class ="text-center">ADD PRODUCT</h4><br>
					<div class = "col-md-2"></div>
					<div class = "col-md-8">
						<table class="table">
							<form action="addproduct.php" method="POST" enctype="multipart/form-data">
								<div class="form-group row">
									<thead>
										<tr>
											 <th>Product Type</th>
											 <th>
												<select class="form-control" name="prod_type">
													<option value="1">Tote Bag</option>
													<option value="2">Trendy Pouch</option>
													<option value="3">Drawstring Bag</option>
												</select>
											 </th>
										</tr>
										<tr>
											 <th>Product Name</th>
											 <th><input type="text" class="form-control" name="prod_name"></th>
										</tr>
										<tr>
											 <th>Product Price</th>
											 <th><input type="text" class="form-control" name="prod_price"></th>
										</tr>
										<tr>
											 <th>Product Image</th>
											 <th><input type="file" class="form-control" name="fileToUpload"></th>
										</tr>
										<tr>
											 <th>Product Description</th>
											 <th><textarea type="text" class="form-control" style="height:150px;" name="prod_des"></textarea></th>
										</tr>
										<tr>
											<th></th>
											<th><center><button type ="submit" class="btn btn-default" name="insert_prod">Add Product</button></th>
										</tr>
								   </thead>
								</div>
							</form>	
						</table>
					</div>
					<div class = "col-md-2"></div>
				</div>

	
  </section>
  <!-- container section start -->

    <!-- javascripts -->

    <script src="admincss/js/jquery.js"></script>
	<script src="admincss/js/jquery-ui-1.10.4.min.js"></script>
    <script src="admincss/js/jquery-1.8.3.min.js"></script>
	<script src="admincss/js/bootstrap.min.js"></script>
	<script src="admincss/js/jquery.scrollTo.min.js"></script>
    <script src="admincss/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admincss/js/scripts.js"></script>
   


  </body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("tote");

if(isset($_POST["insert_prod"])) {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	

		$prod_type = $_POST['prod_type'];
		$prod_name = $_POST['prod_name'];
		$prod_price = $_POST['prod_price'];
		$prod_image = $_FILES['fileToUpload']['name'];
		$prod_des = $_POST['prod_des'];
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "<script>alert('Please check your imagee!')</script>";	
				$uploadOk = 0;
			}

	
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			//echo "<script>alert('Your image file was too large!')</script>";	
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			//echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
				echo "<script>alert('Sorry there was an error uploading your file!')</script>";	
			}
		}
		if($prod_name == ''){
			echo "<script>alert('Product Name cannot be empty!')</script>";	
		}
		else if($prod_price == ''){
			echo "<script>alert('Product price cannot be empty!')</script>";	
		}
		else if($prod_image == ''){
			echo "<script>alert('Please upload product image!')</script>";	
		}
		else if($prod_des == ''){
			echo "<script>alert('Product description cannot be empty!')</script>";	
		}
	else{
	
	$query = "INSERT INTO `product` (`prod_id`, `cat_id`, `prod_name`, `prod_price`, `prod_sale`, `prod_price_sale`, `prod_image`, `prod_desc`, `keywords`) VALUES (NULL, '$prod_type', '$prod_name', '$prod_price', '', '', 'uploads/$prod_image', '$prod_des', '')";
	if(mysql_query($query)){
 echo "<script>alert('Product Added!')</script>";	
}
	

 

}
}
?>