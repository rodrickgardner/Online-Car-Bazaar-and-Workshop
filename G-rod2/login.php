<?php
session_start();
ob_start();
include 'db.php'; // include the library for database connection

function encrypt($string){
	return base64_encode(base64_encode(base64_encode($string)));
}

function decrypt($string){
	return base64_decode(base64_decode(base64_decode($string)));
}

if(isset($_POST['signin'])){ // Check the action `login`
	
	$pass = $_POST['password'];
	if ($_POST['username']!=''&&$_POST['password']!='' )
	{
	
	$username 		= htmlentities($_POST['username']); // Get the username
	$password 		= htmlentities(encrypt($pass)); // Get the password and decrypt it
	$query			= mysql_query('SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'" '); // Check the table with posted credentials
	$num_rows		= mysql_num_rows($query); // Get the number of rows
	$row	=	mysql_fetch_array($query);
	$user_pass = $row['password'];
	if($user_pass!=$password)
	{
	$msg_login ='Invalid password';
	echo $msg_login;
	include('register.php');
	}
	else
		{
		if($num_rows <= 0){ // If no users exist with posted credentials print 0 like below.
			$msg_login='User not registered';
			echo $msg_login;
			include('register.php');
		} 
		
		
			else {
			$queryl			= mysql_query('SELECT * FROM users WHERE userename = "'.$username.'" AND password = "'.$password.'" '); // Check the table with posted credentials
	
				$fetch = mysql_fetch_array($queryl);
					
				$_SESSION['userid'] 		= $fetch['id'];
				$_SESSION['username'] 	= $fetch['username'];
				$_SESSION['useremail'] 	= $fetch['email'];
				
				if($username=='rodrick')
				{
				echo '<script type="text/javascript">window.location = "./admin/admin.php"; </script>';
				}
				else
				{
				echo '<script type="text/javascript">window.location = "index.php"; </script>';
				}
				 
				
			}
		}
	}
	else
	{
	$msg_login='Please enter a valid email';
	echo $msg_login;
	include('register.php');
	}
}

?>