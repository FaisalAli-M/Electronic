<!DOCTYPE html>
<html lang="en">


<head>

  <link rel="stylesheet" href="css/my_order.css">

    </head>
    <body>
<?php



    if(isset($_SESSION['customer_email'])){
       
        $customer_email = $_SESSION['customer_email'];
        $get_customer_id = "select * from customers where customer_email='$customer_email'";
        $run_customer_id = $conn->query($get_customer_id);
        $res_customer_id = $run_customer_id->fetch_assoc();
        $customer_id = $res_customer_id['customer_id'];
        
         
       
	}


?>
<!-- <table width="1080" bgcolor="white" >
					<tr style="">
						<th> Order No </th>
						<th> Due Amount </th>
						<th> Invoice No </th>
						<th> Total Products </th>
						<th> Order Date </th>
						<th> Paid / Unpaid </th>
						<th> Status </th>
					</tr>
					
					
<?php
/*
$i = 0;
 $get_order = "select * from customer_orders where customer_id='$customer_id'";
        $run_order = $conn->query($get_order);
		while($row_order = $run_order->fetch_assoc())
		{	
			$order_id = $row_order['order_id'];
			
			$due_amount = $row_order['due_amount'];
			$invoice_no = $row_order['invoice_no'];
			$total_products = $row_order['total_products'];
			$order_date = $row_order['order_date'];
			$order_status = $row_order['order_status'];
			$i++;
			
			if($order_status == 'pending')
			{
				$order_status = 'Unpaid';
			}
			else{
				$order_status = 'Paid';
			}
			echo "
				<tr style=''>
						<td>$i </th>
						<td> $due_amount </td>
						<td> $invoice_no </td>
						<td> $total_products </td>
						<td> $order_date </td>
						<td> $order_status </td>
						<td> <a href='confirm_pg.php?order_id=$order_id' > Confirm if Paid </a> </td>
					</tr>
			
			
			";
		}
        */
?>
					
					
					
</table>
-->
         <table class="vitamins">
        <thead>
            <tr>
            	<th> Order No </th>
						<th> Due Amount </th>
						<th> Products Name </th>
						<th> Invoice No </th>
						<th> Total Products </th>
						<th> Order Date </th>
						<th> Delivery Address </th>
						<th> Status </th>
            </tr>
        </thead>

        <tbody>
            <?php
$i = 0;
 $get_order = "select * from customer_orders where customer_id='$customer_id'";
        $run_order = $conn->query($get_order);
		while($row_order = $run_order->fetch_assoc())
		{	
			$order_id = $row_order['order_id'];
			
			$due_amount = $row_order['due_amount'];
			$p_names = $row_order['products_name'];
			$invoice_no = $row_order['invoice_no'];
			$total_products = $row_order['total_products'];
			$order_date = $row_order['order_date'];
			$order_status = $row_order['order_status'];
			$i++;
			
			if($order_status == 'pending')
			{
				$order_status = 'Unpaid';
			}
			else{
				$order_status = 'Paid';
			}
			echo "
				<tr>
						<td>$i </th>
						<td> $due_amount </td>
						<td> $p_names  </td>
						<td> $invoice_no </td>
						<td> $total_products </td>
						<td> $order_date </td>
						<td>  </td>
						<td> $order_status  </td>
					</tr>
			
			
			";
		}
?>
            
            
        </tbody>
    </table>
        </body>
</html>