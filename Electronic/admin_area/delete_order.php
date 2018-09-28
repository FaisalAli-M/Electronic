<?php
session_start();
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{


if(isset($_GET['delete_order']))
{
	$del_order_id = $_GET['delete_order'];
	
	$del_order = "delete from pending_orders where order_id='$del_order_id'";
	$run_del_order = $conn->query($del_order);
	
	if($run_del_order)
	{
		echo "<script> alert('Order has been deleted') </script>";
			echo "<script> window.open('index.php?view_orders','_self') </script>";	
	}

}
?>

	<?php  } ?>