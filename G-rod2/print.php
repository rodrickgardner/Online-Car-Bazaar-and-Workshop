<?php
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
		  <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_receipt").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title> Receipt NO: <?php echo(rand(10,100));?></title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:12px; font-family:arial; line-height: 24px;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
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
			
			<section class="header_text sub" style="margin-top:-2px;">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
			</section>
			<section class="main-content" style="margin-top:-40px;">				
				<div class="row">	
					<div class="span1">
					</div>
					<div class="span5">
					<h4 class="title"><span class="text"><strong>Print and present this receipt </strong> on delivery</span></h4>
					
						<div id="print_receipt">
						<?php
						require_once 'receipt.php';
						?>
							
						</div>
						<?php
echo '<br></br><a href="javascript:Clickheretoprint()"><button type="submit" style="font-weight:bold;width:100px; font-family:Arial; text-transform:uppercase; font-size:11px; color:white !important; background:white;
border-radius:3px; line-height:27px; border:3px solid red;
	"><font color="red">Print</font></button></a>
	<button type="submit" style="font-weight:bold;width:100px; font-family:Arial; text-transform:uppercase; font-size:11px; color:white !important; background:white;
border-radius:3px; line-height:27px; border:3px solid red;
	"><a href="index.php">Cancel</a></button>';
?>
					</div>
					<div class="span5">
					<h4 class="title"><span class="text"><strong>GET  </strong> IN TOUCH </span></h4>
						<p>Please use the contact form if you have any request or inquiry concerning our services.</p>
						<form method="post" action="#">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="5" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>			
			<section id="footer-bar">
				
			</section>
			<section id="copyright">
				<span>&copy; 2014 G-rod  ALL RIGHTS RESERVED..</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>