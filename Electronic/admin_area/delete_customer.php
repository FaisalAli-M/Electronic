<?php
session_start();
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{


if(isset($_GET['delete_customer']))
{
	$del_customer_id = $_GET['delete_customer'];
	
	$del_customer = "delete from customers where customer_id='$del_customer_id'";
	$run_del_customer = $conn->query($del_customer);
	
	if($run_del_customer)
	{
		echo "<script> alert('Customer has been deleted') </script>";
			echo "<script> window.open('index.php?view_customers','_self') </script>";	
	}

}
?>

	<?php  } ?>