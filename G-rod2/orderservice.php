<?php
include 'db.php';
session_start();
ob_start();
			$sessionID = $_COOKIE['PHPSESSID'];	
			$user = $_SESSION['username']; 	
					
			$sql=mysql_query("SELECT * FROM users where username='$user'");
			$fetch = mysql_fetch_array($sql);
			$mail= $fetch['email'];
						
$Fname = $_POST['Fname'];
$Sname = $_POST['Lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$cntry = $_POST['cntry'];
$mpay = $_POST['mpay'];
$comments = $_POST['comments'];
$product_id = $_POST['id'];
$payable = $_POST['cost'];
//session
$sss = mysql_query("SELECT * FROM session where session='$sessionID' AND product_id='$product_id'");
$num_row = mysql_num_rows($sss);
if($num_row<=0)
{
mysql_query("INSERT into session (session, product_id) values('$sessionID','$product_id')");
}
else
{
mysql_query("UPDATE session SET session='$sessionID', product_id='$product_id' ");
}

mysql_query("INSERT into orders (username, Fname, Sname, email, session, phone, city, country, payable, product_id, comments, modeofpay, qnty) values('$user','$Fname','$Sname','$mail','$sessionID','$phone','$city','$cntry','$payable','$product_id','$comments','$mpay','1')");
header('Location:print.php');
?>