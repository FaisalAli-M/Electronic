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
	<title> Customers </title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
	
  <style>
	th { border: 3px groove black; font-size:24px} 
	td 
	{
		border: 1px solid black;
		text-align:center
	}
	td {font-size:20px}
	input[type=number] { width:50px}
  </style>
  
</head>
<body>


<table align="center" width="1100" bgcolor="white" >
					<tr style="">
						<th> Order Id </th>
						<th> Customer Id </th>
						<th> Invoice No </th>
						<th> Product Id </th>
						<th> Qty</th>
						<th> Delivery Address</th>
						<th> Order Status</th>
						<th> Delete</th>
						<th> Confirm if Delivered </th>
						
					</tr>
					<?php

						$select_orders = "select * from pending_orders where order_status='pending'";
						$run_orders = $conn->query($select_orders);
		
						while($res_orders = $run_orders->fetch_assoc())
						{
							$order_id = $res_orders['order_id'];
							$customer_id = $res_orders['customer_id'];
							$invoice_no = $res_orders['invoice_no'];
							$product_id = $res_orders['product_id'];
							$qty = $res_orders['qty'];
                            $add = $res_orders['delivery_add'];
							$order_status = $res_orders['order_status'];
							
							
							
							
							
							
					?>
					<tr>
						<td> <?php echo $order_id  ?> </td>
						<td> 
							<?php
								$sel_cus_email = "select * from customers where customer_id='$customer_id'";
								$run_cus_email = $conn->query($sel_cus_email);
								$res_cus_email = $run_cus_email->fetch_assoc();
								
								$cus_email = $res_cus_email['customer_email'];
								echo $cus_email;
							?>
						</td>
						<td bgcolor="orange"> <?php echo $invoice_no ?>   </td>
						<td> <?php echo $product_id ?>  </td>
						<td> <?php echo $qty ?>   </td>
                        <td> <?php echo $add ?>   </td>
						<td> <?php echo $order_status ?>   </td>
						<td> <a href="delete_order.php?delete_order=<?php echo $order_id  ?>"> Delete </a>   </td>
                        <td><a href="confirm_delivered.php?delivered=<?php echo $order_id  ?>"> <input type="button" value="Deliverd" style="width:100px ;height:40px ;font-size:18px; background:green ; color:white ; cursor: pointer;" ></td>
					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>

	<?php  } ?>