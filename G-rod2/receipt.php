<?php
session_start();
ob_start();
include 'db.php';
$sessionID = $_COOKIE['PHPSESSID'];	
$user = $_SESSION['username'];
$sqlSession=mysql_query("SELECT * FROM users where username='$user'");
			$fetch = mysql_fetch_array($sqlSession);
			$mail= $fetch['email'];
///sesssion
$query = mysql_query("SELECT product_id FROM session WHERE session='$sessionID'");
				$find = mysql_fetch_array($query);
				$ids = $find['product_id'];
				
$sql = mysql_query("SELECT * FROM orders WHERE email='$mail' AND username='$user' AND session='$sessionID' AND product_id='$ids'");
$get = mysql_fetch_array($sql);
echo '<h5 style="text-transform:uppercase;">'.$get['Fname'].' '.$get['Sname'].'</h5>
							<p><strong>Phone:</strong>&nbsp;(+) '.$get['phone'].'<br>
							<strong>Email:</strong>&nbsp;<a href="#">'.$get['email'].'</a><br>								
							<strong>City:</strong>&nbsp;<a href="#">'.$get['city'].'</a><br>								
							<strong>Country:</strong>&nbsp;<a href="#">'.$get['country'].'</a>								
							</p>
							<br/>
							<p><strong>Product ID:</strong><a href="#">&nbsp; '.$get['product_id'].'</a><br>
							<p><strong>Quantity:</strong><a href="#">&nbsp; '.$get['qnty'].'</a><br>
							<h5><strong>PAYABLE AMOUNT:</strong><a href="#">&nbsp;KShs. <font color="red">'.$get['payable'].'.00</font></a></h5>
							
							<strong>MODE OF PAYMENT:</strong><a href="#">&nbsp;'.$get['modeofpay'].'</a><br>
							<strong></strong>&nbsp;Please retain this receipt until the service is rendered or item is delivered.</a>	</br>				
							<strong></strong>&nbsp;Incase of complaints please call <a href="#">0721309140.</a>	</br>				
							<strong>Thanks for staying with G-rod.</strong>&nbsp;					
							</p>';

?>