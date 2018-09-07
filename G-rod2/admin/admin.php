<?php 
	
 include '../db.php';
 include 'auth.php';

	
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
		<!--admin-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$('a[rel*=facebox]').facebox({
loadingImage : 'src/loading.gif',
closeImage   : 'src/closelabel.png'
})
})
</script>
		<!-- bootstrap -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../themes/css/main.css" rel="stylesheet"/>
		<link href="../themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="../themes/js/jquery-1.7.2.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>				
		<script src="../themes/js/superfish.js"></script>	
		<script src="../themes/js/jquery.scrolltotop.js"></script>
		<script src="../themes/js/jquery.fancybox.js"></script>
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
 <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("home").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title> Report NO: <?php echo(rand(10,100));?></title>'); 
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
					<a href="index.php" class="logo pull-left"><img src="../themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<?php include_once '../online.php';?>
							
							<li><a href="../cars.php">CARS</a>					
								<ul>
									<li><a href=".">TOYOTA</a></li>									
									<li><a href=".">BENZ</a></li>
									<li><a href=".">NISSAN</a></li>									
								</ul>
							</li>															
							<li><a href="../spare.php">SPARE PARTS</a></li>			
														
							<li><a href="../services.php">SERVICES AND CHARGES</a></li>
							
							<li><a href="./register.php">Login or Register</a></li>
							
							
							
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
						</section>
				
			<section class="main-content">
<h4 class="title"><span class="text center"><strong>ADMIN  </strong> PANEL</span></h4>			
				<div class="row">						
					<div class="span12">
						<div class="row">
							
													
						</div>
						<div class="row">
							<div class="span12">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#cars">VEHICLES ON DEMAND </a></li>
									<li class=""><a href="#profile">OUR SERVICES </a></li>
									<li class=""><a href="#balance">VEHICLES & SPARES SOLD REPORT</a></li>
									<li class=""><a href="#users">USERS</a></li>
									
								</ul>							 
								<div class="tab-content">
								<div class="tab-pane" id="users">
										<table class="table table-striped shop_attributes">	
						<thead>
							<tr>
							<th style="border-left: 1px solid #C1DAD7"> ID </th>
								<th > User Name </th>
								
								<th> User Email </th>
								<th> Action </th>
								
								
							</tr>
						</thead>
											<tbody>
												<?php


							include('../db.php');
							$result = mysql_query("SELECT * FROM users");
							while($row1 = mysql_fetch_array($result))
								{
								    $iduser=$row1['id'];
									 
									echo '<tr class="record">';
									echo '<td><div align="left">'.$row1['id'].'</div></td>';
									echo '<td><div align="left">'.$row1['username'].'</div></td>';
									echo '<td><div align="left">'.$row1['email'].'</div></td>';
									
									
									//$ir_no=gen_random_string(6);
									//$update = mysql_query("update candidate set generate='$ir_no' where CandidateID='$id'")or die(mysql_error());
									echo '<td><div align="left"><a rel="facebox" title="Click To Edit" href="editcandidate.php?idcand='.$idserv.'"></a>';
									
									echo '<a href="#" iduser="'.$iduser.'" class="deletebuttonuser" title="Click To Delete">delete</a></div></td>';
									
									echo '</tr>';
								}
								
							?> 
											</tbody>
										</table>
									</div>

									<div class="tab-pane active" id="cars">
				<table class="table table-striped shop_attributes">	
				<tbody>
				<tr class="">
				<th>Find a solution to you problem</th>
				

				</tr>		
				<tr class="alt">

				<td>
				<!--content-->
				<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addcar.php">ADD A CAR</a><?php echo $msg; ?>
					<div class="users" style="float:right; width:100px; height:80px;margin-top:-95px;"></div>
					<div id="home">
					
					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
						<tr>
						<h4 class="title">
									<span class="pull-left"><span class="text">List of CARS  <strong>Vehicles on Demand</strong></span> </span>
									
								</h4>
						</tr>
							<tr>
							<th style="border-left: 1px solid #C1DAD7"> Photo </th>
								<th  > Product ID </th>
								<th  > Name </th>
								
								<th> Description </th>
								<th> Brand </th>
								<th> size </th>
								<th> cost </th>
								<th> Quantity </th>
								<th> Action </th>
								
							</tr>
						</thead>
						<tbody>
						<?php


							include('../db.php');
							$result = mysql_query("SELECT * FROM car_detail");
							while($row = mysql_fetch_array($result))
								{
								    $id=$row['id'];
									 
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;"><div align="left"><img src="../'.$row['photo'].'" width="40" height="40"/></div></td>';
											echo '<td><div align="left">'.$row['id'].'</div></td>';
											echo '<td><div align="left">'.$row['name'].'</div></td>';
											
											echo '<td><div align="left">'.$row['Description'].'</div></td>';
											echo '<td><div align="left">'.$row['Brand'].'</div></td>';
											echo '<td><div align="left">'.$row['size'].'</div></td>';
											echo '<td><div align="left">KShs.'.$row['cost'].'</div></td>';
											echo '<td><div align="left">'.$row['number'].'</div></td>';
									//$ir_no=gen_random_string(6);
									//$update = mysql_query("update candidate set generate='$ir_no' where CandidateID='$id'")or die(mysql_error());
									echo '<td><div align="center"><a rel="facebox" title="Click To Edit" href="editcandidate.php?idcand='.$id.'"></a>';
									
									echo '<a href="#" idss="'.$id.'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									
									echo '</tr>';
								}
								
							?> 
						</tbody>
					</table>
					
				</div>
				</div>
				<a href="javascript:Clickheretoprint()"><button type="submit" style="font-weight:bold;width:100px; font-family:Arial; text-transform:uppercase; font-size:11px; color:white !important; background:white;
border-radius:3px; line-height:27px; border:3px solid red;
	"><font color="red">Print</font></button></a>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

				</td>
				</tr>
				</tbody>
				</table>
									</div>
									<!--end of home-->
									<div class="tab-pane" id="balance">
				<table class="table table-striped shop_attributes">	
				<tbody>
				
				<tr class="">
				<th>VEHICLES SOLD & ORDERS MADE. DELETE IF NO FOLLOW UP AFTER 5 DAYS</th>
				

				</tr>		
				<tr class="alt">

				<td>
				<!--content-->
				<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<div class="users" style="float:right; width:100px; height:80px;margin-top:-95px;"></div>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
							
								<th> Customer Name </th>
								<th> Email</th>
								
								<th> Phone </th>
								<th> Product ID </th>
								<th> MODE OF PAYMENT </th>
								<th> cost </th>
								<th> City </th>
								<th> Action </th>
								
							</tr>
						</thead>
						<tbody>
						<?php


							include('../db.php');
							$result = mysql_query("SELECT * FROM orders");
							while($row = mysql_fetch_array($result))
								{
								    $id=$row['id'];
									 
									echo '<tr class="record">';
									echo '<td><div align="left">'.$row['Fname'].' '.$row['Sname'].'</div></td>';
									
									echo '<td><div align="left">'.$row['email'].'</div></td>';
									echo '<td><div align="left">'.$row['phone'].'</div></td>';
									echo '<td><div align="left">'.$row['product_id'].'</div></td>';
									echo '<td><div align="left">'.$row['modeofpay'].'</div></td>';
									echo '<td><div align="left">KShs.'.$row['payable'].'</div></td>';
									echo '<td><div align="left">'.$row['city'].'</div></td>';
									//$ir_no=gen_random_string(6);
									//$update = mysql_query("update candidate set generate='$ir_no' where CandidateID='$id'")or die(mysql_error());
									echo '<td><div align="center"><a rel="facebox" title="Click To Edit" href="editcandidate.php?idcand='.$id.'"></a>';
									
									echo '<a href="#" idorder="'.$id.'" class="delorder" title="Click To Delete">delete</a></div></td>';
									
									echo '</tr>';
								}
								
							?> 
						</tbody>
								
					</table>
					
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

				</td>
				</tr>
				</tbody>
				</table>

				</tr>		
				<tr class="alt">

				<td>
				

				</td>
				</tr>
				</tbody>
				</table>
									</div>
									<!--end of ballance-->
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
												<!--Services--->
													<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addservice.php">ADD SERVICE</a><?php echo $msg; ?>
					<div class="users" style="float:right; width:100px; height:80px;margin-top:-95px;"></div>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
							<th style="border-left: 1px solid #C1DAD7"> ID </th>
								<th > Service Name </th>
								
								<th> Service No </th>
								<th> Cost </th>
								<th> Action </th>
								
							</tr>
						</thead>
						<tbody>
						<?php


							include('../db.php');
							$result = mysql_query("SELECT * FROM services");
							while($row1 = mysql_fetch_array($result))
								{
								    $idsserv=$row1['id'];
									 
									echo '<tr class="record">';
									echo '<td><div align="left">'.$row1['id'].'</div></td>';
									echo '<td><div align="left">'.$row1['service'].'</div></td>';
									echo '<td><div align="left">'.$row1['product_id'].'</div></td>';
									echo '<td><div align="left">'.$row1['cost'].'</div></td>';
									
									//$ir_no=gen_random_string(6);
									//$update = mysql_query("update candidate set generate='$ir_no' where CandidateID='$id'")or die(mysql_error());
									echo '<td><div align="center"><a rel="facebox" title="Click To Edit" href="editcandidate.php?idcand='.$idserv.'"></a>';
									
									echo '<a href="#" idsserv="'.$idsserv.'" class="delbuttonservices" title="Click To Delete">delete</a></div></td>';
									
									echo '</tr>';
								}
								
							?> 
						</tbody>
					</table>
					
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
												</tr>		
												
											</tbody>
										</table>
									</div>
									
								</div>							
							</div>						
							<div class="span11">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text">&copy; 2014 <strong>G</strong> G-ROD   All rights Reserved</span> </span>
									
								</h4>
								
							</div>
						</div>
					</div>
					
													
			</section>			
			
		</div>
		<script src="../themes/js/common.js"></script>
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
		<script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("idss");

//Built a url to send
var info = 'idss=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<script type="text/javascript">
$(function() {


$(".delorder").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("idorder");

//Built a url to send
var info = 'idorder=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<script type="text/javascript">
$(function() {


$(".deletebuttonuser").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("iduser");

//Built a url to send
var info = 'iduser=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<script type="text/javascript">
$(function() {


$(".delbuttonservices").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("idsserv");

//Built a url to send
var info = 'idsserv=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
    </body>
</html>