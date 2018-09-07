<?php
include 'db.php';
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
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
$(document).ready(function() {
	$('#calculation').hide();
	$('#optionsRadios1').change(function(){
	  $('#calculation').show();
	  $('#calculation_res').hide();
      $.get("func.php", {
		func: "optionsRadios1",
		drop_var: $('#optionsRadios1').val()
      }, function(response){
        $('#calculation_res').fadeOut();
        setTimeout("finishAjax('calculation_res', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax(id, response) {
  $('#calculation').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>

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
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">	
<form action="update.php" method="GET">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>
							
								<?php
								echo $msgcond;
								
								?>		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						
						<select type="text" name="optionsRadios1" id="optionsRadios1" required="required" class="input-xlarge">
				<option selected="selected" disabled="disabled" >CHOOSE SERVICE REQUIRED....</option>
				 <option>I dont know</option>
				 <option>Estimate Shipping &amp; Taxes</option>
				
						</select>
						
						<!--<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>-->
						<hr>
	<span id="calculation" style="display: none;">
    <img alt="Please Wait" src="ajax-loader.gif"/>
    </span>
    <span id="calculation_res" style="display: none;"></span>
	
						<center><p class="buttons center">	
	
<div class="controls">
				<input type="hidden" name="carid" readonly value="<?php echo $fetch['id'];?>"  class="input-xlarge">
							</div>					
							<button type="submit"class="btn" name="update" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
							<button class="btn btn-inverse" type="submit" name="checkout" id="checkout">Checkout</button>

						</p></center>
						</form>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Mercedez</a></li>
								<li class="active"><a href="products.html">Landrover</a></li>
								<li><a href="products.html">Toyota</a></li>
								<li><a href="products.html">Subaru</a></li>
								<li><a href="products.html">Kia</a></li>
								<li><a href="products.html">Vox Wagen</a></li>
							</ul>
							<br/>
							
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
													<a href="#"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
													<a href="#" class="title">Great deal</a><br/>
													
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="#"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
													<a href="#" class="title">Experince the comfort</a><br/>
													
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
				<span>&copy; 2014 G-rod  All rights reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>