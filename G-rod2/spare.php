<?php
include 'db.php';
session_start();
	ob_start();
	$user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>G-rod</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar">
			
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<?php include_once 'online.php';?>
							
							<li><a href="./cars.php">CARS</a>					
								<ul>
									<li><a href=".">TOYOTA</a></li>									
									<li><a href=".">BENZ</a></li>
									<li><a href=".">NISSAN</a></li>									
								</ul>
							</li>															
							<li><a href="./spare.php">SPARE PARTS</a></li>			
														
							<li><a href="./services.php">SERVICES AND CHARGES</a></li>
							
							<li><a href="./register.php">Login or Register</a></li>
							
							
							
						</ul>
					</nav>
				</div>
			</section>	
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>New SPARE PARTS</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
						<?php
												
											$mysql = mysql_query("SELECT * FROM spares");
											$fetch = mysql_fetch_array( $mysql );
											
											$num_rows = mysql_num_rows( $mysql );
											if ($num_rows==0)
											{
											echo "We currently lack cars";
											}
											else
											{
											$mysql = mysql_query("SELECT * FROM spares");
											while($fetch = mysql_fetch_array($mysql))
											{
											$id=$fetch['id'];
											echo 
											'
											<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src='.$fetch['photo'].' alt="" /></a></p>
														<a href="product_detail.html" class="title">'.$fetch['name'].'</a><br/>
														<a href="products.html" class="category">'.$fetch['condition'].'</a>
														<p class="price">KShs. '.$fetch['cost'].'.00</p>
														<a href="product_detail.php?carid='.$id.'"><button title="Click to view book details" class="btn btn-inverse">EXPLORE NOW</button></a>
													
													;
									
													</div>

												</li>
											
											';
											}
											}
											
												?>
							
						</ul>								
						<hr>
						
					</div>
					<div class="span3 col">
						<div class="block">	
							
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Toyota</a></li>
								<li><a href="products.html">Mazda</a></li>
								<li><a href="products.html">LandRover</a></li>
								<li><a href="products.html">Subaru</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="product_detail.html" class="title">Luxurious</a><br/>
													<a href="#" class="category">Get one now</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.html" class="title">Comfort is my goal</a><br/>
													<a href="#" class="category">Drive and see</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Smart</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Spacious</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Premio</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="footer-bar">
					
			</section>
			<section id="copyright">
				<span>&copy; 2014 G-rod  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>