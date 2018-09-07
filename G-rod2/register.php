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
		<title> G-rod</title>
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
				<h4><span><?php echo '<a href="#">'.$msgl.'</a>';?></span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
				<div class="span1">
				</div>
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="login.php" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" name="password" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" name="signin" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span6">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="signup.php" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="username" placeholder="Enter your username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="email" name="email" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" name="password"placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>							                            
								<div class="control-group">
									<p>You can now enjoy our services?</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" name="signup" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>					
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