<?php

include("includes/db_con.php");

if(isset($_GET['delete_product']))
{
	$del_p_id = $_GET['delete_product'];
	
	$del_products = "delete from products where product_id='$del_p_id'";
	$run_del_products = $conn->query($del_products);
	
	if($run_del_products)
	{
		echo "<script> alert('One Product has been deleted') </script>";
			echo "<script> window.open('index.php?view_products','_self') </script>";	
	}

}
?>