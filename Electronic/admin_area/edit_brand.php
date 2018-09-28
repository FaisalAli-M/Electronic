<?php
include("includes/db_con.php");

if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{
	if(isset($_GET['edit_brand']))
	{
		$edit_id = $_GET['edit_brand'];
		
		$edit_brand = "select * from brands where brand_id='$edit_id'";
		$run_edit_brand = $conn->query($edit_brand);
		
		$res_edit_brand = $run_edit_brand->fetch_assoc();
			$brand_edit_id = $res_edit_brand['brand_id']; 
			$brand_edit_title = $res_edit_brand['brand_title']; 
		
	
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Brand</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  form {margin:6%}
	input[type=text] { width:250px ; height:25px ; font-size:18px}
	
  
  </style>
   
</head>
<body>
	<form action="" method="post">
		<b> Insert New brand </b> <input type="text" name="brand_name" value="<?php echo $brand_edit_title  ?>">
		<input type="submit" name="update_brand" value="Update Brand">
	</form>

	

</body>
</html>
<?php
if(isset($_POST['update_brand']))
	{
		$update_brand_name = $_POST['brand_name'];
		
		$update_brand = "update brands set brand_title='$update_brand_name' where brand_id='$brand_edit_id' ";
		$run_update_brand = $conn->query($update_brand);
		
		if($run_update_brand)
		{
			echo "<script> alert('One Brand Has Been Update') </script>";
			echo "<script> window.open('index.php?view_Brands','_self') </script>";
		}
	}

?>

	<?php } ?>