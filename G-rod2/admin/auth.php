<?php
	//Start session
	session_start();
	ob_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username'])) {
		header("location:../index.php");
		
	}
	
?>