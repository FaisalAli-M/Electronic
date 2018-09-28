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
	<title>Insert Catagory</title>
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
        <label for="ex3" style="color:white">Insert Catagory Name: </label>
        <input class="form-control" id="ex3" type="text" name="cat_name" placeholder="Enter Catagory Name">
      </div>
	<!--	<b> Insert New Catagory </b> <input type="text" name="cat_name" > -->
	<!--	<input type="submit" name="insert_cat" value="Insert New Catagory"> -->
        <input type="submit" name="insert_cat" class="btn btn-info" value="Insert Product" style="margin-top:25px">
	</form>

	

</body>
</html>
<?php
include("includes/db_con.php");
	if(isset($_POST['insert_cat']))
	{
		$cat_name = $_POST['cat_name'];
		
		$insert_catagory = "insert into categories (cat_title) values ('$cat_name')";
		$run_catagory = $conn->query($insert_catagory);
		
		if($run_catagory)
		{
			echo "<script> alert('New Catagory Has Been Inserted') </script>";
			echo "<script> window.open('index.php?view_cats','_self') </script>";
		}
	}

?>
	<?php } ?>