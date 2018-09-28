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
						<th> Payment Id </th>
						<th> Invoice No </th>
						<th> Amount </th>
						<th> Payment Mode </th>
						<th> Ref No</th>
						<th> Code </th>
						<th> Payment Date </th>
						
					</tr>
					<?php

						$select_payment = "select * from payments";
						$run_payment = $conn->query($select_payment);
		
						while($res_payment = $run_payment->fetch_assoc())
						{
							$payment_id = $res_payment['payment_id'];
							$invoice_no = $res_payment['invoice_no'];
							$amount = $res_payment['amount'];
							$payment_mode = $res_payment['payment_mode'];
							$ref_no = $res_payment['ref_no'];
							$code = $res_payment['code'];
							$payment_date = $res_payment['payment_date'];
							
							
							
							
							
							
					?>
					<tr>
						<td> <?php echo $payment_id ?> </td>
						<td bgcolor="orange"> <?php echo $invoice_no ?>   </td>
						<td> <?php echo $amount ?>  </td>
						<td> <?php echo $payment_mode ?>   </td>
						<td> <?php echo $ref_no ?>   </td>
						<td> <?php echo $code ?>  </td>
						<td> <?php echo $payment_date ?>  </td>
					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>

	<?php } ?>