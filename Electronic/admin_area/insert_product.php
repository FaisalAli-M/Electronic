<!DOCTYPE html>
<html>
<head>
	<title>Insert Products</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style>
     body {background-color:grey; color:white;}
	 .container { width:894px ; float: left}
	 }
	 
   </style>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body >
<div class="container">

<form method="post" action="insert_product.php" enctype="multipart/form-data" class="form-horizontal">

<table  class="table table-bordered">
	<tr>
		<th colspan="2" > <h1 style="text-align:center"> Insert New Product </h1> </th>
		
	</tr>
	<tr>
		<th align="right"> Product Title </th>
		<td> <input type="text" name="product_title" class="form-control" placeholder="Product Title"> </td>
	</tr>
	<tr>
		<th align="right"> Product Catagory </th>
		<td>
		<select name="product_cat" class="form-control">
			<option> Select Catagory </option>
			<?php
			include("includes/db_con.php");
				$catag = "select * from categories"; 
				$cat_res = $conn->query($catag);
				if($cat_res->num_rows > 0)
				{
					while($cat_rows = $cat_res->fetch_assoc())
					{
						$cats_id = $cat_rows['cat_id'];
						echo "<option value='$cats_id'>" . $cat_rows['cat_title'] . "</option>";
					}
				}
				?>
			</td>
	</tr>
	<tr>
		<th align="right"> Product Brand </th>
		<td> 
			<select name="product_brand" class="form-control" >
			<option> Select Brand </option>
			<?php
				$brand = "select * from brands"; 
				$brand_res = $conn->query($brand);
				if($brand_res->num_rows > 0)
				{
					while($brand_rows = $brand_res->fetch_assoc())
					{
						$brands_id = $brand_rows['brand_id'];
						echo "<option value='$brands_id' >" . $brand_rows['brand_title'] . "</option>";
					}
				}
				?>
		</td>
	</tr>
	<tr>
		<th align="right"> Product Image1 </th>
		<td> <input type="file" name="product_img1" class="form-control"> </td>
	</tr>
	<tr>
		<th align="right"> Product Image2 </th>
		<td> <input type="file" name="product_img2" class="form-control"> </td>
	</tr>
	<tr>
		<th align="right"> Product Image3 </th>
		<td> <input type="file" name="product_img3" class="form-control"> </td>
	</tr>
	<tr>
		<th align="right"> Product Price </th>
		<td> <input type="text" name="product_price" class="form-control" placeholder="Product Price"> </td>
	</tr>
	<tr>
		<th align="right"> Product Description </th>
		<td> <textarea name="product_desp" rows="5" cols="26" class="form-control" placeholder="Product Description">  </textarea> </td>
	</tr>
		<tr>
		<th align="right"> Product Short Description </th>
		<td> <textarea name="product_s_desp" rows="5" cols="26" class="form-control" placeholder="Product Description">  </textarea> </td>
	</tr>
	<tr>
		<th align="right"> Product Keyword </th>
		<td> <input type="text" name="product_keywords" class="form-control" placeholder="Product Keywords"> </td>
	</tr>
	<tr>
		<th align="right"> Product Status </th>
		<td> <input type="text" name="product_status" class="form-control" placeholder="Product Status"> </td>
	</tr>
	<tr align="center">
		
		<td colspan="2"> <input type="submit" name="insert_product" class="btn btn-primary btn-block"> </td>
	</tr>
</table>


</form>
</div>



<?php

if(isset($_POST['insert_product']))
{
	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_brand = $_POST['product_brand'];
	$product_price = $_POST['product_price'];
	$product_desp = $_POST['product_desp'];
	$product_s_desp = $_POST['product_s_desp'];
	$product_keywords = $_POST['product_keywords'];
	$product_status = $_POST['product_status'];
	
	// images names
	$product_img1 = $_FILES['product_img1']['name'];
	$product_img2 = $_FILES['product_img2']['name'];
	$product_img3 = $_FILES['product_img3']['name'];
	
	//Images temp_names
	$temp_name_img1 = $_FILES['product_img1']['tmp_name'];
	$temp_name_img2 = $_FILES['product_img2']['tmp_name'];
	$temp_name_img3 = $_FILES['product_img3']['tmp_name'];
	
	
		// move uploaded images to product_images folder 
		move_uploaded_file($temp_name_img1,"product_images/$product_img1");
		move_uploaded_file($temp_name_img2,"product_images/$product_img2");
		move_uploaded_file($temp_name_img3,"product_images/$product_img3");
		
		if($product_title=='' OR $product_cat=='' OR $product_brand=='' OR $product_price=='' OR $product_desp=='' OR $product_keywords=='' OR $product_status=='' OR $temp_name_img1=='')
		{
			echo "<script> alert('Please Fill All the Fields') </script>";
			exit();
		}
		else{
		$insert_product = "insert into products (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desp,product_s_desp,product_keywords,product_status) 
		values ('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desp','$product_s_desp','$product_keywords','$product_status')";
		
		$run_product = $conn->query($insert_product);
		if($run_product)
		{
			echo "<script> alert('Product Inserted Sucessfully') </script>";
			echo "<script> window.open('index.php?insert_products','_self') </script>";	
			exit();
		}
		else{
			echo "<script> alert('Product Not Inserted') </script>";
            echo "<script> window.open('index.php?insert_products','_self') </script>";	
			exit();
		}
		
		}
	
}


?>
</body>
</html>