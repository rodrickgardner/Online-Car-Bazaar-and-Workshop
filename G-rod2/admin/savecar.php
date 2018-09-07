<?php
include('../db.php');
if (isset($_POST['save'])){


$Cname=$_POST['Cname'];
$Ccondition=$_POST['Ccondition'];
$Cdescription=$_POST['Cdescription'];
$Ccolor=$_POST['Ccolor'];
$Csize=$_POST['Csize'];
$Cnumber=$_POST['Cnumber'];
$Ccost=$_POST['Ccost'];
$Ccode=$_POST['Ccode'];
$Cbrand=$_POST['Cbrand'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
	if ($Cname!=''){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../themes/images/" . $_FILES["image"]["name"]);			
			$location="themes/images/" . $_FILES["image"]["name"];
			
			
	mysql_query("INSERT INTO car_detail(name, Description, color, size, number, cost, car_Code, Brand, photo) VALUES('$Cname','$Cdescription','$Ccolor','$Csize','$Cnumber','$Ccost','$Ccode','$Cbrand','$location')")or die(mysql_error());

							$msg ='<div class="alert alert-success">
											<button class="close" data-dismiss="alert">×</button>
										   <marquee behavior="alternate"  align="absmiddle" direction="left">You successfully added a new car</marquee>
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