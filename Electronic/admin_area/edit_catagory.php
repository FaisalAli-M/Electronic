<?php

include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{

	if(isset($_GET['edit_cat']))
	{
		$edit_id = $_GET['edit_cat'];
		
		$edit_catagory = "select * from categories where cat_id='$edit_id'";
		$run_edit_catagory = $conn->query($edit_catagory);
		
		$res_edit_catagory = $run_edit_catagory->fetch_assoc();
			$cat_edit_id = $res_edit_catagory['cat_id']; 
			$cat_edit_title = $res_edit_catagory['cat_title']; 
		
		/*
		if($run_catagory)
		{
			echo "<script> alert('New Catagory Has Been Inserted') </script>";
			echo "<script> window.open('index.php?view_cats','_self') </script>";
		}
		*/
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Catagory</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  form {margin:6%}
	input[type=text] { width:250px ; height:25px ; font-size:18px}
	
  
  </style>
   
</head>
<body>
	<form action="" method="post">
		<b> Insert New Catagory </b> <input type="text" name="cat_name" value="<?php echo $cat_edit_title  ?>">
		<input type="submit" name="update_cat" value="Update Catagory">
	</form>

	

</body>
</html>
<?php
if(isset($_POST['update_cat']))
	{
		$update_cat_name = $_POST['cat_name'];
		
		$update_catagory = "update categories set cat_title='$update_cat_name' where cat_id='$cat_edit_id' ";
		$run_update_catagory = $conn->query($update_catagory);
		
		if($run_update_catagory)
		{
			echo "<script> alert('One Catagory Has Been Update') </script>";
			echo "<script> window.open('index.php?view_cats','_self') </script>";
		}
	}


?>

	<?php } ?>