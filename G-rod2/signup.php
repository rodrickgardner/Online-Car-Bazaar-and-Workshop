<?php
include 'db.php';

function encrypt($string){
	return base64_encode(base64_encode(base64_encode($string)));
}

function decrypt($string){
	return base64_decode(base64_decode(base64_decode($string)));
}
function email_is_valid($email) {
              return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
            }
if (isset($_POST['signup'])){


$user_name=$_POST['username'];
$user_email=$_POST['email'];
$user_pass=encrypt($_POST['password']);
			
	if ($user_email!=''&&$user_pass!='')
	{

		$Quser=mysql_query("SELECT * FROM users WHERE email='$user_email' OR username='$user_name' ");
		$user=mysql_num_rows($Quser);	
						if($user != 0)
						{
							
							echo'
							<center>
							
							<div class="alert alert-error">
							
						<div class="car-highlight1 animated fadeInLeftBig" style="line-height:30px;">
							   Sorry, Email:<font color="black"> '.$user_email.' </font></br> already exist.
							   </div>
							</div></center>';
							include("register.php");
							 

						 }
						
						
						 else
						 {
			
mysql_query("insert into users (username,email, password)
			values('$user_name','$user_email','$user_pass')") or die(mysql_error());	
			session_start();
			ob_start();
			
				$queryl			= mysql_query('SELECT * FROM users WHERE username = "'.$user_name.'" AND password = "'.$user_pass.'" '); // Check the table with posted credentials
	
				$fetch = mysql_fetch_array($queryl);
					
				$_SESSION['userid'] 		= $fetch['id'];
				$_SESSION['username'] 	= $fetch['username'];
				$_SESSION['useremail'] 	= $fetch['email'];
				
				
				echo '<script type="text/javascript">window.location = "index.php"; </script>';
						
	
							}
}
else
{
	$msg ='<div class="alert alert-error">
		<button class="close" data-dismiss="alert">×</button>
	   <marquee behavior="alternate"  align="absmiddle" direction="left">Please check if you filled all fields</marquee>
		</div>';
		include('register.php');
	}

//





}
?>