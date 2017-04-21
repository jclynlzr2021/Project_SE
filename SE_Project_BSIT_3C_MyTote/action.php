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
									<a href='details.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
									<button pid = '$pro_id' style='float:right;' id = 'product' class='btn-danger btn-xs'>AddToCart</button>
								</div>
						 	</div>
				</div>
			";
			
		}
	}

}


if(isset($_POST["getProfile"])){
	$user_id = $_SESSION["uid"];
	$product_query = "SELECT * FROM user WHERE user_id ='$user_id'";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['user_id'];
			$pro_name = $row['user_fname'];
			$pro_lname = $row['user_lname'];
			$pro_bday = $row['user_bday'];
			$pro_age = $row['user_age'];
			$pro_gender = $row['user_gender'];
			$pro_add = $row['user_add'];
			$pro_zip = $row['user_zip'];
			$pro_contact = $row['user_contact'];
			$pro_email = $row['user_email'];
			$pro_image = $row['user_image'];
			
			
			echo"
				<div class='col-md-2'></div>
				<div class='col-md-8'>
							<div class='panel panel-success'>
								<div class='panel-heading'>My Profile</div>
								<div class='panel-body'>
									<div class='row'>
										<div class='col-md-4'>
											<div class='box' style='border:1px solid gray;'>
												<img src='image/bag1.jpg' class='img-responsive'/>
												
											</div>
											<form action='upload.php' method='post' enctype='multipart/form-data'>
												Upload Photo:
													<input type='file' name='fileToUpload' id='fileToUpload'>		
													<input type='submit' value='Upload Image' name='submit'>
											</form>
										</div>
										<div class='col-md-8'><br><br><br><br><br><br><br><br><br>
											<h4>$pro_name $pro_lname</h4>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-1'></div>
										<div class='col-md-10'>
												<h5><b>Birthday&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_bday</h5>
												<h5><b>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_age</h5>
												<h5><b>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_gender</h5>
												<h5><b>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_add</h5>
												<h5><b>Zip Code&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_zip</h5>
												<h5><b>Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_contact</h5>
												<h5><b>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;$pro_email</h5>
										</div>
										<div class='col-md-1'></div>
									</div>
								</div>
								<div class='panel-footer'></div>
							</div>
				</div>
				<div class='col-md-2'></div>
			";
			
		}
	}

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
									<a href='details.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
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
									<a href='details.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
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
									<a href='details.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
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
												<a href='details.php?pid=$pro_id'><button style='float:right;'class='btn-danger btn-xs'>Details</button></a>
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
if (isset($_POST["addToProduct"])){
	$p_id = $_POST["proId"];
	$user_id = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count > 0){
		echo "Product is already added into the cart!";
	} else{
		$sql = "SELECT * FROM product WHERE prod_id = '$p_id'";
		$run_query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($run_query);
		$id = $row["prod_id"];
		$pro_name = $row["prod_name"];
		$pro_image = $row["prod_image"];
		$pro_price = $row["prod_price"];
		
	$sql = "INSERT INTO `cart` (`cart_id`, `p_id`, `ip_add`, `user_id`, `prod_name`, `prod_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
	if(mysqli_query($con,$sql)){
		echo "Product Added!";
	}
	}
}


if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count > 0){
		$no =1;
		$total_amount = 0;
		while($row=mysqli_fetch_array($run_query)){
			$id = $row["cart_id"];
			$pro_id = $row["p_id"];
			$pro_name = $row["prod_name"];
			$pro_image = $row["prod_image"];
			$pro_price = $row["price"];
			$qty = $row["qty"];
			$total = $row["total_amount"];
			$price_array = array($total); 
			$total_sum = array_sum($price_array);
			$total_amount = $total_amount + $total_sum;
			if(isset($_POST["get_cart_product"])){
				echo "
				<div class = 'row'>
					<div class='col-md-3'>$no</div>
					<div class='col-md-3'>$pro_name</div>
					<div class='col-md-3'><img src='$pro_image' width='60px' height='60px'></div>
					<div class='col-md-3'>Php &nbsp;$pro_price</div>
				</div>
				<br>
			";
			$no = $no + 1;
			}else {
			echo "
				<div class = 'row'>
					<div class='col-md-2'>
						<div class = 'btn-group'>
							<a href='#' remove_id = '$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
							<a href='#' update_id = '$pro_id' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></span></a>
						</div>
					</div>
					<div class='col-md-2'>$pro_name</div>
					<div class='col-md-2'><img src='$pro_image' width='80' height='80'></div>
					<div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pro_price' disabled></div>
					<div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty'></div>
					<div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>
				</div><br>
			";
			}
			
		}
		if(isset($_POST["cart_checkout"])){
		echo "
			<div class='row'>
				<div class='col-md-8'></div>
				<div class='col-md-4'>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Amount: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Php&nbsp; $total_amount.00<br>
					
				</div>
			</div>
		";
		}
	}
}
if(isset($_POST["cart_count"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
	$run_query = mysqli_query($con,$sql);
	echo mysqli_num_rows($run_query);
}	
if(isset($_POST["removeFromCart"])){
	$pid = $_POST["removeId"];
	$uid = $_SESSION["uid"];
	$sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id = '$pid'";
	$run_query = mysqli_query($con,$sql);
	if($run_query){
		echo "Item removed from cart!";
	}
}
if(isset($_POST["updateProduct"])){
	$uid = $_SESSION["uid"];
	$pid = $_POST["updateId"];
	$qty = $_POST["qty"];
	$price = $_POST["price"];
	$total = $_POST["total"];
	
	$sql = "UPDATE cart SET qty = '$qty',price='$price',total_amount = '$total' WHERE user_id = '$uid' AND p_id = '$pid'";
	$run_query = mysqli_query($con,$sql);
	if($run_query){
		echo "Item Updated!";
	}
}
?>