<?php

include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> View Products</title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
	
  <style>
	th { border: 3px groove black;} 
	td 
	{
		border: 1px solid black;
		text-align:center
	}
	th {font-size:24px}
	input[type=number] { width:50px}
  </style>
  
</head>
<body>


<table align="center" width="900" bgcolor="white" >
					<tr style="">
						<th> Product No </th>
						<th> Product Title </th>
						<th> Product(s) </th>
						<th> Product Price </th>
						<th> Total Sold </th>
						<th> Status </th>
						<th> Edit </th>
						<th> Delete </th>
					</tr>
					<?php
						
						//$i = 0;
						$prod_price = "select * from products";
						$res_prod_price = $conn->query($prod_price);
		
						while($p_items = $res_prod_price->fetch_assoc())
						{
							$product_id = $p_items['product_id'];
							$product_title = $p_items['product_title'];
							$product_image = $p_items['product_img1'];
							$product_price = $p_items['product_price'];
							$product_status = $p_items['product_status'];
							
							
							
							//$i++
							
					?>
					<tr>
						<td> <?php echo $product_id  ?> </td>
						<td> <?php echo $product_title ?>   </td>
						<td> <img src="product_images/<?php echo $product_image ?>" width="80" height="80"> </td>
						<td> Rs: <?php echo $product_price ?>   </td>
						<td>
							<?php
								$get_sold = "select * from pending_orders where product_id='$product_id'";
								$run_sold = $conn->query($get_sold);
								$count_sold = $run_sold->num_rows;
								
								$res_sold = $run_sold->fetch_assoc();
								$qty_sold = $res_sold['qty'];
								
								echo $count_sold * $qty_sold;
							?>
						</td>
						<td> <?php echo $product_status ?></td>
						<td> <a href="index.php?edit_product=<?php echo $product_id ?>"> Edit </a>   </td>
						<td> <a href="delete_products.php?delete_product=<?php echo $product_id ?>"> Delete </a>   </td>
					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>

	<?php } ?>