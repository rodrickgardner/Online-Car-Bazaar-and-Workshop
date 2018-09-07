<?php 
	
  include('db.php');
  include('func.php');
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
<script type="text/javascript">
$(document).ready(function() {
	$('#wait_1').hide();
	$('#drop_1').change(function(){
	  $('#wait_1').show();
	  $('#result_1').hide();
      $.get("func.php", {
		func: "drop_1",
		drop_var: $('#drop_1').val()
      }, function(response){
        $('#result_1').fadeOut();
        setTimeout("finishAjax('result_1', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax(id, response) {
  $('#wait_1').hide();
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
			<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>BETTER <strong>SERVICES</strong></h4>
										<p>Get the best services for you car. No regrets, no worries. drive with surity.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Buy automobile parts and we will deliver it free of charge. Get the latest this easter.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Always there for you. Whenever you need us, whenever your car is sick just call <a href="#">+254 721 309 140.</a> </p>
									</div>
								</div>
							</div>	
							
						</div>
				</section>
				
			<section class="main-content">
<h4 class="title"><span class="text center"><strong>MEET OUR </strong> expert team</span></h4>			
				<div class="row">						
					<div class="span7">
						<div class="row">
							
													
						</div>
						<div class="row">
							<div class="span7">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Your car Clinic. Solutions 24/7 </a></li>
									
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home">
				<table class="table table-striped shop_attributes">	
				<tbody>
				<tr class="">
				<th>Find a solution to you problem</th>

				</tr>		
				<tr class="alt">

				<td>
				<div class="span6">					
				<h4 class="title"><span class="text"><strong>Register </strong> Your Problem</span></h4>
				<form action="orderservice.php" method="post"class="form-stacked">
													
				<fieldset>
				
				<div class="control-group">
				<label class="control-label">SERVICE LIST</label>
				<div class="controls">
				
				
				
				<select type="text" name="drop_1" id="drop_1" required="required" class="input-xlarge">
				<option selected="selected" disabled="disabled" >CHOOSE SERVICE REQUIRED....</option>
				 <?php 
				 getTierOne();
				 ?>
				
				</select>
	<span id="wait_1" style="display: none;">
    <img alt="Please Wait" src="ajax-loader.gif"/>
    </span>
    <span id="result_1" style="display: none;"></span> 


				</div>
				</div>
				<div class="row-fluid">
				
											<div class="span6">
												<h4>Your Personal Details</h4>
												<?php
												echo $msgid;
												?>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" name="Fname" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" name="Lname"placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" name="email" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" name="phone" placeholder="" class="input-xlarge">
													</div>
												</div>
												
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												
												
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
													<select class="required" name="city" class="input-xlarge">
															<option >Nairobi</option>
															<option >Kisumu</option>
															<option >Mombasa</option>
															<option >Eldoret</option>
															<option >Nakuru</option>
															<option >Naivasha</option>
														</select>
														
													</div>
												</div>
												
												
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Country:</label>
													<div class="controls">
														<select name="cntry" class="input-xlarge">
															<option >Kenya</option>
															
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Mode of Payment:</label>
													<div class="controls">
														<select  name="mpay" class="input-xlarge">
															
															<option value="M-PESA">M-PESA</option>
															<option value="ONDELIVERY">On Delivery</option>
															
														</select>
													</div>
												</div>
												<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" name="comments" id="textarea" class="span12"></textarea>
												</div>
											</div>
											</div>
										</div>
										                            
				<div class="control-group">
				<p>G-rod, your car clinic. Meet our online support team. You dont need to drive to the garage?</p>
				</div>
				<hr>
				 
				<?php 
				if($user!='')
				 {
				 ?>
				<button name="confirm" type="submit" class="btn btn-inverse pull-right">Confirm order</button>
				 <?php
					}
					else
					{
					echo '<a href="./register.php"><h4 class="title"><span class="text"><strong></strong> Please Log in to access our services</span></h4></a>';
					}
				?>
				</fieldset>
				</form>					
				</div>

				</td>
				</tr>
				</tbody>
				</table>
									</div>
									
								</div>							
							</div>						
							<div class="span6">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>MEET OUR </strong> TEAM</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span2">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="#"><img alt="" src="themes/images/mamba.jpg"></a><br/>
														<a href="#" class="title">MAMBA DEDAN</a><br/>
														<a href="#" class="category">Passionate computer scientist and developer</a>
														
													</div>
												</li>
												<li class="span2">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="#"><img alt="" src="themes/images/denno.jpg"></a><br/>
														<a href="#" class="title">DENNIS MWANGANGI</a><br/>
														<a href="#" class="category">Likes burger.</a>
														
													</div>
												</li>
												<li class="span2">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="#"><img alt="" src="themes/images/ann.jpg"></a><br/>
														<a href="#" class="title">ANNJOY </a><br/>
														<a href="#" class="category">Smiling is her hobby.</a>
														
													</div>
												</li>       
																								
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
													<div class="span5 col">
													<div class="block">	
													<ul class="nav nav-list">
													<li class="nav-header">Manuacturers</li>
													<li><a href="#">Mercedez</a></li>
													<li class="active"><a href="#">Landrover</a></li>
													<li><a href="#">Toyota</a></li>
													<li><a href="#">Nissan</a></li>
													<li><a href="#">Vox Wagen</a></li>
													<li><a href="#">Subaru</a></li>
													</ul>
													<br/>
													
													</div>
													<div class="block">	
													<ul class="nav nav-list">
													<li class="nav-header">Find us</li>
													Address: P.O. Box 56510 - 00200, Nairobi.<br/>

Phone: + 254-721-309140<br/>

Email: info@grod.com<br/>

Location: Kemu, Nairobi
													</ul>
													<br/>
													
													</div>
													<div class="block">
													<h4 class="title">
													<span class="pull-left"><span class="text">RELATED PRODUCTS</span></span>
													<span class="pull-right">
													<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
													</span>
													</h4>
													<div id="myCarousel" class="carousel slide">
													<div class="carousel-inner">
													<div class="active item">
													<ul class="thumbnails listing-products">
														<li class="span2">
															<div class="product-box">
																<span class="sale_tag"></span>												
																<img alt="" src="themes/images/ladies/1.jpg"><br/>
																<a href="#" class="title">Great experince</a><br/>
																
															</div>
														</li>
														<li class="span2">
															<div class="product-box">												
																<img alt="" src="themes/images/ladies/2.jpg"><br/>
																<a href="#" class="title">It is paasion</a><br/>
																
															</div>
														</li>
													</ul>
													</div>
													<div class="item">
													<ul class="thumbnails listing-products">
														<li class="span2">
															<div class="product-box">												
																<img alt="" src="themes/images/ladies/2.jpg"><br/>
																<a href="#" class="title">Find your machine</a><br/>
																
															</div>
														</li>
														<li class="span2">
															<div class="product-box">
																<span class="sale_tag"></span>												
																<img alt="" src="themes/images/ladies/1.jpg"><br/>
																<a href="#" class="title">You gonna like the ride</a><br/>
																
															</div>
														</li>
													</ul>
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