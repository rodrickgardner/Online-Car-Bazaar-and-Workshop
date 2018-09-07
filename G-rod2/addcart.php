<?php
session_start();
$sessionID = $_COOKIE['PHPSESSID'];
include 'db.php';
$carid= $_POST['carid'];
$Qty= $_POST['Qty'];
$terms= $_POST['terms'];
$sql = mysql_query("SELECT * FROM car_detail where id='$carid'");
$fetch = mysql_fetch_assoc($sql);
$totalcost = $fetch['cost']*$Qty;
$cost = $fetch['cost']; 

/////Fetching values from pending table

$sql_pending = mysql_query("SELECT * FROM pending where session='$sessionID' AND item_id='$carid'");
$fetch_pending = mysql_fetch_assoc($sql_pending);
$num_rows = mysql_num_rows($sql_pending);
$Qty_pending = $fetch_pending['quantity'];

//session
$sss = mysql_query("SELECT * FROM session where session='$sessionID' AND product_id='$carid'");
$num_row = mysql_num_rows($sss);
if($num_row<=0)
{
mysql_query("INSERT into session (session, product_id) values('$sessionID','$carid')");
}
else
{
mysql_query("UPDATE session SET session='$sessionID', product_id='$carid' ");
}

if($num_rows<=0)
{


$msgcond = '					<tr>
									
									<td><a href="product_detail.php?carid='.$carid.'"><img alt="" width="40" height="50" src='.$fetch['photo'].'></a></td>
									<td>'.$fetch['color'].''.$fetch['size'].''.$fetch['Brand'].'</td>
									<td>
									<input type="text" name="Qty" placeholder="1" value='.$Qty.' class="input-mini"></td>
									<td>'.$fetch['cost'].'</td>
									<td>'.$totalcost.'</td>
									<td><input type="checkbox" value='.$carid.'></td>
								</tr>			  
								
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>'.$totalcost.'</strong></td>
								</tr>';
	
	
$insert = mysql_query("Insert into pending (session, quantity, item_id, cost, date, total_cost) values('$sessionID','$Qty','$carid','$cost','NOW()','$totalcost') ");
	
include('cart.php');
}
else
{
/////update pending 

mysql_query("UPDATE pending set quantity='$Qty', total_cost='$totalcost' WHERE session='$sessionID' AND item_id='$carid'");
$msgcond = '					<tr>
									
									<td><a href="product_detail.php?carid='.$carid.'"><img alt="" width="40" height="50" src='.$fetch['photo'].'></a></td>
									<td>'.$fetch['color'].''.$fetch['size'].''.$fetch['Brand'].'</td>
									<td>
									<input type="text" name="Qty" placeholder="1" value='.$Qty.' class="input-mini"></td>
									<td>'.$fetch['cost'].'</td>
									<td>'.$totalcost.'</td>
									<td><input type="checkbox" value='.$carid.'></td>
								</tr>			  
								
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>'.$totalcost.'</strong></td>
								</tr>';
	
include('cart.php');
}
?>