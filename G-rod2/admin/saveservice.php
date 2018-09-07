<?php
include('../db.php');
if (isset($_POST['saveservice'])){



$Sservice=$_POST['Sservice'];
$Scost=$_POST['Scost'];
$productid=$_POST['Sid'];

			
	if ($Sservice!=''){
			
			
			
	mysql_query("INSERT INTO services(service, cost, product_id) VALUES('$Sservice','$Scost','$productid')")or die(mysql_error());

							$msg ='<div class="alert alert-success">
											<button class="close" data-dismiss="alert">×</button>
										   <marquee behavior="alternate"  align="absmiddle" direction="left">You successfully added a new service</marquee>
											</div>';
											include('admin.php');


//





}
else
	{
	$msg ='<div class="alert alert-error">
		<button class="close" data-dismiss="alert">×</button>
	   <marquee behavior="alternate"  align="absmiddle" direction="left">Please check if you filled all fields</marquee>
		</div>';
		include('admin.php');
	}
}
?>