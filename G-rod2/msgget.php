<?php
$msgcond = '					<tr>
									
									<td><a href="product_detail.php?carid='.$carid.'"><img alt="" width="40" height="50" src='.$fetch['photo'].'></a></td>
									<td>'.$fetch['color'].''.$fetch['size'].''.$fetch['Brand'].'</td>
									<td>
									<input type="text" placeholder="1" value='.$Qty.' class="input-mini"></td>
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
?>