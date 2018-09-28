<?php

session_start();
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{


if(isset($_GET['delete_brand']))
{
	$del_brand_id = $_GET['delete_brand'];
	
	$del_brand = "delete from brands where brand_id='$del_brand_id'";
	$run_del_brand = $conn->query($del_brand);
	
	if($run_del_brand)
	{
		echo "<script> alert('One Brand has been deleted') </script>";
			echo "<script> window.open('index.php?view_Brands','_self') </script>";	
	}

}
?>

	<?php  } ?>