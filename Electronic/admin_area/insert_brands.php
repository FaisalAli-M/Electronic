<?php
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Brands</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
    body {background:grey}
    </style>
</head>
<body>
	<form action="" method="post">
        <div class="col-xs-4">
        <label for="ex3" style="color:white">Insert Brand Name: </label>
        <input class="form-control" id="ex3" type="text" name="brand_name" placeholder="Enter Brand Name">
      </div>
		<!-- <b> Insert New Brands </b> <input type="text" name="brand_name" > -->
		<!-- <input type="submit" name="insert_Brand" value="Insert New Brand"> -->
        <input type="submit" name="insert_Brand" class="btn btn-info" value="Insert Product" style="margin-top:25px">
	</form>

	

</body>
</html>
<?php
include("includes/db_con.php");
	if(isset($_POST['insert_Brand']))
	{
		$brand_name = $_POST['brand_name'];
		
		$insert_brand = "insert into brands (brand_title) values ('$brand_name')";
		$run_brand = $conn->query($insert_brand);
		
		if($run_brand)
		{
			echo "<script> alert('New Brand Has Been Inserted') </script>";
			echo "<script> window.open('index.php?view_Brands','_self') </script>";
		}
	}

?>

	<?php  } ?>