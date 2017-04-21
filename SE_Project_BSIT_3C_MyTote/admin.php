<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
		<meta name="author" content="GeeksLabs">
		<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
		<link rel="shortcut icon" href="img/favicon.png">

		<title>My Tote Admin</title>

		<!-- Bootstrap CSS -->    
		<link href="admincss/css/bootstrap.min.css" rel="stylesheet">
		<!-- bootstrap theme -->
		<link href="admincss/css/bootstrap-theme.css" rel="stylesheet">
		<!--external css-->
		<!-- font icon -->
		<link href="admincss/css/elegant-icons-style.css" rel="stylesheet" />
		<link href="admincss/css/font-awesome.min.css" rel="stylesheet" />    
		<!-- full calendar css-->
		<link href="admincss/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
		<link href="admincss/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
		<!-- easy pie chart-->
		<link href="admincss/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
		<!-- owl carousel -->
		<link rel="stylesheet" href="admincss/css/owl.carousel.css" type="text/css">
		<link href="admincss/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
		<!-- Custom styles -->
		<link rel="stylesheet" href="admincss/css/fullcalendar.css">
		<link href="admincss/css/widgets.css" rel="stylesheet">
		<link href="admincss/css/style.css" rel="stylesheet">
		<link href="admincss/css/style-responsive.css" rel="stylesheet" />
		<link href="admincss/css/xcharts.min.css" rel=" stylesheet">	
		<link href="admincss/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<!-- =======================================================
			Theme Name: NiceAdmin
			Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
			Author: BootstrapMade
			Author URL: https://bootstrapmade.com
		======================================================= -->
	</head>

	<body>
		<!-- container section start -->
		<section id="container" class="">
			<header class="header dark-bg">
				<div class="toggle-nav">
					<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
				</div>

            <!--logo start-->
            <a href="adminindex.html" class="logo">My<span class="lite">Tote</span></a>
            <!--logo end-->
			
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
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="admin.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-users"></i>
						<div class="title">Members</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-shopping-cart"></i>
						<div class="title">Purchased</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="title">Order</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
			
				
			</div><!--/.row-->
	
	
              <!-- project team & activity end -->

         
      <!--main content end-->
  </section>
  <!-- container section start -->

      <script src="admincss/js/jquery.js"></script>
	<script src="admincss/js/jquery-ui-1.10.4.min.js"></script>
    <script src="admincss/js/jquery-1.8.3.min.js"></script>
	<script src="admincss/js/bootstrap.min.js"></script>
	<script src="admincss/js/jquery.scrollTo.min.js"></script>
    <script src="admincss/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admincss/js/scripts.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>