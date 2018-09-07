<?php
include_once('db.php');
session_start();
ob_start();
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
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
			
				<h4><span>Product Detail</span></h4>
				<?php
				//echo $_GET['carid'];
				$cardidget=$_GET['carid'];
				if($cardidget<=39)
				{
				$mysql = mysql_query("SELECT * FROM car_detail where id='$cardidget'");
				}
				else
				{
				$mysql = mysql_query("SELECT * FROM spares where id='$cardidget'");
				}								
											
											$fetch = mysql_fetch_array( $mysql );
											
											$num_rows = mysql_num_rows( $mysql );
											if ($num_rows==0)
											{
											echo "We currently lack cars";
											}
											else
											{
																						
												?>
											
				
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<?php
				if($cardidget<=39)
				{
				$mysql = mysql_query("SELECT * FROM car_detail where id='$cardidget'");
				}
				else
				{
				$mysql = mysql_query("SELECT * FROM spares where id='$cardidget'");
				}			while($fetch = mysql_fetch_array($mysql))
											{
											$id=$fetch['id'];
											echo 
											'
											<div class="span4">
											<a href="themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src='.$fetch['photo'].'></a>	
									<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/ladies/2.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/ladies/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/ladies/4.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/ladies/5.jpg" alt=""></a>
									</li>
								</ul>
													
														
													</div>

												
												
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span>'.$fetch['Brand'].'</span><br>
									<strong>Car Code:</strong> <span>'.$fetch['car_Code'].'</span><br>
									<strong>Availability:</strong> <span>	'.$fetch['number'].'</span><br>								
								</address>									
								<h4><strong>Price: KShs.'.$fetch['cost'].'</strong></h4>
							</div>
											
											';
											
							?>
								
							
							<div class="span5">
								<form class="form-inline" action="addcart.php" method="post">
								<div class="controls">
				<input type="hidden" name="carid" readonly value="<?php echo $fetch['id'];?>" class="input-xlarge">
							</div>
							<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="text" name="Qty" readonly class="span1" placeholder="1" value="1">
									<label class="checkbox">
										<input type="checkbox" name="terms" value=""> Agree to terms and conditions
									</label>
									<br/>
									
									<p>&nbsp;</p>
									
									<button class="btn btn-inverse" type="submit">Add to cart</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>
<?php
echo		
								'<div class="tab-content">
									<div class="tab-pane active" id="home">'.$fetch['Description'].'</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>'.$fetch['size'].'</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>'.$fetch['color'].'</td>
												</tr>
												<tr class="alt">
													<th>Condition</th>
													<td>'.$fetch['condition'].'</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>';
	
?>											
							</div>						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
											<?php
											$brand=$fetch['Brand'] ;
											
											$mysql = mysql_query("SELECT * FROM car_detail where Brand= '$brand'");
											$fetch = mysql_fetch_array( $mysql );
											
											$num_rows = mysql_num_rows( $mysql );
											if ($num_rows==0)
											{
											echo "We currently lack cars";
											
											}
											else
											{
											$mysql = mysql_query("SELECT * FROM car_detail where Brand= '$brand'");
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
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<?php
											
											$mysql = mysql_query("SELECT * FROM car_detail where Brand = '$brand'");
											$fetch = mysql_fetch_array( $mysql );
											
											$num_rows = mysql_num_rows( $mysql );
											if ($num_rows==0)
											{
											echo "We currently lack cars";
											
											}
											else
											{
											$mysql = mysql_query("SELECT * FROM car_detail where Brand != '$brand'");
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
													<a href="product_detail.html" class="title">LUXURIOUS</a><br/>
													
													
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.html" class="title">You gonna like this</a><br/>
													
												</div>
											</li>
										</ul>
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
				<span>&copy; 2014 G-rod  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>