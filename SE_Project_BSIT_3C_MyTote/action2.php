<?php
session_start();
include("db.php");

if(isset($_POST["getProduct"])){
	$product_query = "SELECT * FROM product ORDER BY RAND() LIMIT 0,4";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['prod_id'];
			$pro_cat = $row['cat_id'];
			$pro_title = $row['prod_name'];
			$pro_image = $row['prod_image'];
			$pro_price = $row['prod_price'];
			
			echo"
				<div class='col-md-3'>
							<div class='panel panel-default'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='$pro_image' class='img-responsive'>
								</div>
								<div class='panel-heading'>Php$pro_price
									<a href='details1.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
									<button pid = '$pro_id' style='float:right;' id = 'product' class='btn-danger btn-xs'>AddToCart</button>
								</div>
						 	</div>
				</div>
			";
			
		}
	}

}
if (isset($_POST["addToProduct"])){

		echo "You Must login first!";
	
	
}

if(isset($_POST["getBag"])){
	$product_query = "SELECT * FROM product WHERE cat_id = 1";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['prod_id'];
			$pro_cat = $row['cat_id'];
			$pro_title = $row['prod_name'];
			$pro_image = $row['prod_image'];
			$pro_price = $row['prod_price'];
			
			echo"
				<div class='col-md-3'>
							<div class='panel panel-default'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='$pro_image' class='img-responsive'>
								</div>
								<div class='panel-heading'>Php$pro_price
									<a href='details1.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
									<button pid = '$pro_id' style='float:right;' id = 'product' class='btn-danger btn-xs'>AddToCart</button>
								</div>
						 	</div>
				</div>
			";
			
		}
	}
}


if(isset($_POST["getPouch"])){
	$product_query = "SELECT * FROM product WHERE cat_id = 2";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['prod_id'];
			$pro_cat = $row['cat_id'];
			$pro_title = $row['prod_name'];
			$pro_image = $row['prod_image'];
			$pro_price = $row['prod_price'];
			
			echo"
				<div class='col-md-3'>
							<div class='panel panel-default'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='$pro_image' class='img-responsive'>
								</div>
								<div class='panel-heading'>Php$pro_price
									<a href='details1.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
									<button pid = '$pro_id' style='float:right;' id = 'product' class='btn-danger btn-xs'>AddToCart</button>
								</div>
						 	</div>
				</div>
			";
			
		}
	}
}

if(isset($_POST["getString"])){
	$product_query = "SELECT * FROM product WHERE cat_id = 3";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['prod_id'];
			$pro_cat = $row['cat_id'];
			$pro_title = $row['prod_name'];
			$pro_image = $row['prod_image'];
			$pro_price = $row['prod_price'];
			
			echo"
				<div class='col-md-3'>
							<div class='panel panel-default'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='$pro_image' class='img-responsive'>
								</div>
								<div class='panel-heading'>Php$pro_price
									<a href='details1.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
									<button pid = '$pro_id' style='float:right;' id = 'product' class='btn-danger btn-xs'>AddToCart</button>
								</div>
						 	</div>
				</div>
			";
			
		}
	}
}

if(isset($_POST["getSale"])){
	$sale_query = "SELECT * FROM product WHERE prod_sale = 'yes'";
	$run_query = mysqli_query($con,$sale_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['prod_id'];
			$pro_cat = $row['cat_id'];
			$pro_title = $row['prod_name'];
			$pro_image = $row['prod_image'];
			$pro_price = $row['prod_price'];
			$pro_price_sale = $row['prod_price_sale'];
			
			echo"
				<div class='col-md-3'>
							<div class='panel panel-default'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='$pro_image' class='img-responsive'>
								</div>
								<div class='panel-heading'>
									<div class='row'>
										<div class='col-md-4'>
											<p class = 'list price text-danger'><s>Php$pro_price_sale</s><br>Php$pro_price</p>	
										</div>
										<div class='col-md-8' style='margin-top:20px;'>
												<a href='details1.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
												<button pid = '$pro_id' style='float:right;'id = 'product'  class='btn-danger btn-xs'>AddToCart</button>
										</div>
									</div>
								</div>
						 	</div>
				</div>
			";
			
		}
	}
}

?>