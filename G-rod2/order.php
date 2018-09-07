<?php
include 'db.php';
session_start();
ob_start();
$item_id = $_POST['cid'];
			$sessionID = $_COOKIE['PHPSESSID'];	
			$user = $_SESSION['username']; 	
					
			$sql=mysql_query("SELECT * FROM users where username='$user'");
			$fetch = mysql_fetch_array($sql);
			$mail= $fetch['email'];
			$sql1=mysql_query("SELECT * FROM pending WHERE session='$sessionID' AND item_id='$item_id'");
			$get = mysql_fetch_assoc($sql1);
			$product_id = $get['item_id'];
			$QNTy = $get['quantity'];
			$sql2=mysql_query("SELECT * FROM material_t WHERE session='$sessionID'");
			$getpay = mysql_fetch_assoc($sql2);
			$payable = $getpay['payable'];
$sqlc=mysql_query("SELECT * FROM car_detail WHERE id='$product_id'");
$getc = mysql_fetch_assoc($sqlc);
$nm = $getc['number'];
if($nm>1)
{
$red = $nm-1;
mysql_query("UPDATE car_detail set number='$red' where id='$product_id'");
}
else
{
mysql_query("delete from car_detail where id='$product_id'");
}

$Fname = $_POST['Fname'];
$Sname = $_POST['Lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$cntry = $_POST['cntry'];
$mpay = $_POST['mpay'];
$comments = $_POST['comments'];

mysql_query("INSERT into orders (username, Fname, Sname, email, session, phone, city, country, payable, product_id, comments, modeofpay, qnty) values('$user','$Fname','$Sname','$mail','$sessionID','$phone','$city','$cntry','$payable','$product_id','$comments','$mpay','$QNTy')");


header('Location:print.php');

?>