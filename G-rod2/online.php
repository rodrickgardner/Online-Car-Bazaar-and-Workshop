<?php
session_start();
ob_start();
$user = $_SESSION['username']; 	
if($_SESSION['username']!='')
{
echo '<li><a href="./cars.php">Welcome <font color="#038783" >'.$user.'</font></a>					
								<ul>
									<li><a href="./logout.php">Log out</a></li>									
																		
								</ul>
							</li>';
}
else
{

}
?>