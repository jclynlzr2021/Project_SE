<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<?php
mysql_connect('localhost','root','');
mysql_select_db('tote');

$sql = "SELECT * FROM message WHERE message_type = 1";
$result = mysql_query($sql);

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
						<li><i class="fa fa-laptop"></i>Inquiry</li>						  	
					</ol>
				</div>
			</div>
			
					<div class = "container">
					
							<h4 class ="text-center">CUSTOMER INQUIRY</h4><br>
								<table class="table table-sm table-inverse">
									<thead>
										<tr>
										  <th>#</th>
										  <th>First Name</th>
										  <th>Last Name</th>
										  <th>Message</th>
										 </tr>
									 </thead>
											
						<?php
							$no =1;
								while($row = mysql_fetch_assoc($result)){
									echo "
										<tbody>
											<tr>
												<th scope='row'>$no</th>
												<td>$row[user_fname]</td>
												<td>$row[user_lname]</td>
												<td>$row[user_message]</td>
												
											</tr>
											";
							$no = $no + 1;
								}
						?>
						 </tbody>
						</table>
											
							
				</div>
         
			
					
					
        </section>  
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
