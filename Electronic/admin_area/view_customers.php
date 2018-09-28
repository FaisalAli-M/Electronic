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


<table align="center" width="895" bgcolor="white" >
					<tr style="">
						<th> Customer Id </th>
						<th> Customer Name </th>
						<th> Customer Email </th>
						<th> Customer Image </th>
						<th> Customer Country</th>
						<th> Delete</th>
						
					</tr>
					<?php

						$select_customer = "select * from customers";
						$run_customer = $conn->query($select_customer);
		
						while($res_customer = $run_customer->fetch_assoc())
						{
							$customer_id = $res_customer['customer_id'];
							$customer_name = $res_customer['customer_name'];
							$customer_email = $res_customer['customer_email'];
							$customer_image = $res_customer['customer_image'];
							$customer_country = $res_customer['customer_country'];
							
							
							
							
							
							
					?>
					<tr>
						<td> <?php echo $customer_id  ?> </td>
						<td> <?php echo $customer_name ?>   </td>
						<td> <?php echo $customer_email ?>   </td>
						<td>  <img src="../customer/customer_photos/<?php echo $customer_image  ?>" width="70" height="70">  </td>
						<td> <?php echo $customer_country ?>   </td>
						<td> <a href="delete_customer.php?delete_customer=<?php echo $customer_id  ?>"> Delete </a>   </td>
					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>

	<?php  } ?>