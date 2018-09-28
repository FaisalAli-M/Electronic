<?php
session_start();
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{


if(isset($_GET['delete_cat']))
{
	$del_cat_id = $_GET['delete_cat'];
	
	$del_catagories = "delete from categories where cat_id='$del_cat_id'";
	$run_del_catagories = $conn->query($del_catagories);
	
	if($run_del_catagories)
	{
		echo "<script> alert('One Catagory has been deleted') </script>";
			echo "<script> window.open('index.php?view_cats','_self') </script>";	
	}

}
?>

	<?php } ?>