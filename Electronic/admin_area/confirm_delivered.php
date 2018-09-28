<?php
session_start();
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{


if(isset($_GET['delivered']))
{
	$delivered_id = $_GET['delivered'];
	
	$delivered_order = "update pending_orders set order_status='delivered' where order_id='$delivered_id'";
	$run_delivered_order = $conn->query($delivered_order);
	
	if($run_delivered_order)
	{
		echo "<script> alert('Confirmed Sucessfully') </script>";
			echo "<script> window.open('index.php?view_orders','_self') </script>";	
	}

}
?>

	<?php  } ?>