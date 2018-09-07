<?php
session_start();
$sessionID = $_COOKIE['PHPSESSID'];
if(isset($_GET["update"]) )
{
ob_start();
include 'db.php';
$carid= $_GET['carid'];
$Qty = $_GET['Qty'];
//$terms= $_POST['terms'];
$sql = mysql_query("SELECT * FROM car_detail where id='$carid'");
$fetch = mysql_fetch_assoc($sql);
$totalcost = $fetch['cost']*$Qty; 
/////update pending 

mysql_query("UPDATE pending set quantity='$Qty', total_cost='$totalcost' WHERE session='$sessionID' AND item_id='$carid'");
/////Fetching values from pending table

$sql_pending = mysql_query("SELECT * FROM pending where session='$sessionID' AND item_id='$carid'");
$fetch_pending = mysql_fetch_assoc($sql_pending);
$Qty_pending = $fetch_pending['quantity'];
$tot_pending = $fetch_pending['total_cost'];
//session
$sss = mysql_query("SELECT * FROM session where session='$sessionID' AND item_id='$carid'");
$num_row =  mysql_num_rows($sss);
if($num_row<=0)
{
mysql_query("INSERT into session (session, product_id) values('$sessionID','$carid')");
}
else
{
mysql_query("UPDATE session SET session='$sessionID', product_id='$carid' ");
}
$msgcond = '					<tr>
									
									<td><a href="product_detail.php?carid='.$carid.'"><img alt="" width="40" height="50" src='.$fetch['photo'].'></a></td>
									<td>'.$fetch['color'].''.$fetch['size'].''.$fetch['Brand'].'</td>
									<td>
									<input type="text" placeholder="1" name="Qty" value='.$Qty_pending.' class="input-mini"></td>
									<td>'.$fetch['cost'].'</td>
									<td>'.$tot_pending.'</td>
									<td><input type="checkbox" value='.$carid.'></td>
								</tr>			  
								
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>'.$tot_pending.'</strong></td>
								</tr>';
								

include 'cart.php';
}
else if(isset($_GET["checkout"]) )
{
ob_start();
include 'db.php';
$carid= $_GET['carid'];
//$Qty= $_POST['Qty'];


$msgid= '<input type="hidden" name="cid" placeholder="1" value='.$carid.' class="input-mini">';

include 'checkout.php';
}
?>