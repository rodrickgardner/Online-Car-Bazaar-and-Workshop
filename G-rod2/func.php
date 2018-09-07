<?php

//**************************************
//     Page load dropdown results     //
//**************************************
  include('db.php');
	session_start();
	ob_start();
	$user = $_SESSION['username']; 
function getTierOne()
{
	$result = mysql_query("SELECT DISTINCT service FROM services") 
	or die(mysql_error());

	  while($tier = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$tier['service'].'">'.$tier['service'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func'] == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  
  
	
	$result = mysql_query("SELECT * FROM services WHERE service='$drop_var'") 
	or die(mysql_error());	

		   while($drop_2 = mysql_fetch_array( $result )) 
			{
			echo '<input type="hidden" name="id" class="input-xlarge" value="'.$drop_2['product_id'].'">';
			echo '<input type="hidden" name="cost" class="input-xlarge" value="'.$drop_2['cost'].'">';
			echo '<input type="text" name="cost1" style="color:red; font-weight:bold;" readonly class="input-xlarge" value="COST: '.$drop_2['cost'].'">';
			 
			}
		
	
   
}

if($_GET['func'] == "optionsRadios1" && isset($_GET['func'])) { 
   optionsRadios1($_GET['drop_var']); 
}

function optionsRadios1($drop_var)
{  
    include_once('db.php');
	
		


function getCalc()
{
				if($_GET['drop_var']=='Estimate Shipping & Taxes')
				{
				$sessionID = $_COOKIE['PHPSESSID'];
				$query = mysql_query("SELECT product_id FROM session WHERE session='$sessionID'");
				$find = mysql_fetch_array($query);
				$ids = $find['product_id'];
				$sql = mysql_query("SELECT * FROM pending WHERE session='$sessionID' AND item_id='$ids'");
				//while($row = mysql_fetch_array($sql))
				//{}
				$row = mysql_fetch_array($sql);
				$total =$row['total_cost'];
				$ecotax = 0.02*$total;
				$VAT = 0.175*$total;
				$TOTAL =$total+$ecotax+$VAT;

				echo"

				<p class='cart-total right'>
											<strong>Sub-Total</strong>: KShs. ".$total."<br>
											<strong>Eco Tax (2%)</strong>: KShs. ".$ecotax."<br>
											<strong>VAT (17.5%)</strong>: KShs. ".$VAT."<br>
											<strong>Total</strong>: KShs. ".$TOTAL."<br>
										</p>
										
										<hr/>

										
				";
				
				$sqlt = mysql_query("SELECT * FROM material_t WHERE session='$sessionID'");
				$num_rows = mysql_fetch_array($sqlt);
							if($num_rows <=0)
							{
							mysql_query("INSERT into material_t (sub_total, eco_tax, VAT, payable, session) values('$total','$ecotax','$VAT','$TOTAL','$sessionID')");
							}
							else
							{
							mysql_query("UPDATE material_t set sub_total='$total', eco_tax='$ecotax', VAT='$VAT', payable='$TOTAL' WHERE session='$sessionID' ");
							}
				}
				else
				{
				echo 'Please make a right choice';
				}
}
getCalc();
		
			
	
	
   
}
?>