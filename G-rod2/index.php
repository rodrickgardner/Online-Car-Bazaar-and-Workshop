<?php
include 'db.php';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Car Collection</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">      
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
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Get you car online</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected cars online and in stores</span></p>
							</div>
						</li>
						<li>
							<img src="themes/images/carousel/banner-3.jpg" alt="" />
							<div class="intro">
								<h1>TOP GEAR CARS</h1>
								<p><span>Super-Sport-Drive</span></p>
								<p><span>Confidence on the road</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<br/>
			<br/>
			<section class="header_text">
				<div class="intro"><span>We stand for top quality cars.  
				<br/>Don't miss to use our cheap and in good condition cars.</span>
				</div>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">New  <strong>Car Collection</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										
												<?php
												echo'<div class="active item"><ul class="thumbnails">';
											$mysql = mysql_query("SELECT * FROM car_detail ORDER BY id DESC LIMIT 6");
											//id>=(SELECT MAX(ID)-2  FROM books) ORDER BY id DESC LIMIT 3"
											$fetch = mysql_fetch_array( $mysql );
											
											$num_rows = mysql_num_rows( $mysql );
											if ($num_rows==0)
											{
											echo "We currently lack cars";
											}
											else
											{
											$mysql = mysql_query("SELECT * FROM car_detail ORDER BY id DESC LIMIT 6");
											while($fetch = mysql_fetch_array($mysql))
											{
											$id=$fetch['id'];
											echo 
											'
											<li class="span2">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src='.$fetch['photo'].' alt="" /></a></p>
														<a href="product_detail.html" class="title">'.$fetch['name'].'</a><br/>
														<a href="products.php" class="category">'.$fetch['condition'].'</a>
														<p class="price">KShs. '.$fetch['cost'].'.00</p>
														<a href="product_detail.php?carid='.$id.'"><button title="Click to view book details" class="btn btn-inverse">EXPLORE NOW</button></a>
													
													;
									
													</div>

												</li>
											
											';
											}
											echo'</ul>
										</div>';
										echo'<div class="item">
											<ul class="thumbnails">';
											$mysql = mysql_query("SELECT * FROM car_detail ORDER BY id ASC LIMIT 6");
											while($fetch = mysql_fetch_array($mysql))
											{
											$id=$fetch['id'];
											echo 
											'
											<li class="span2">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src='.$fetch['photo'].' alt="" /></a></p>
														<a href="product_detail.html" class="title">'.$fetch['name'].'</a><br/>
														<a href="products.php" class="category">'.$fetch['condition'].'</a>
														<p class="price">KShs. '.$fetch['cost'].'.00</p>
														<a href="product_detail.php?carid='.$id.'"><button title="Click to view book details" class="btn btn-inverse">EXPLORE NOW</button></a>
													
													;
									
													</div>

												</li>
											
											';
											
											}																																		
										echo'</ul>
										</div>';
										
											}
											
												?>
											
												
											
										
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Spare parts</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<?php
												
											$mysql = mysql_query("SELECT * FROM  spares");
											$fetch = mysql_fetch_array( $mysql );
											
											$num_rows = mysql_num_rows( $mysql );
											if ($num_rows==0)
											{
											echo "We currently lack cars";
											}
											else
											{
											$mysql = mysql_query("SELECT * FROM  spares");
											while($fetch = mysql_fetch_array($mysql))
											{
											$id=$fetch['id'];
											echo 
											'
											<li class="span2">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src='.$fetch['photo'].' alt="" /></a></p>
														<a href="product_detail.html" class="title">'.$fetch['name'].'</a><br/>
														<a href="products.php" class="category">'.$fetch['condition'].'</a>
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
										</div>
										
									</div>							
								</div>
							</div>						
						</div>
							
					</div>				
				</div>
			</section>
			
			<section id="footer-bar">
					
			</section>
			<section id="copyright">
				<span>&copy; 2014 G-rod  All rights reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>