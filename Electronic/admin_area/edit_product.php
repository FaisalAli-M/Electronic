<?php
include("includes/db_con.php");
if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{

if(isset($_GET['edit_product']))
{
	$P_id = $_GET['edit_product'];
		$get_product = "select * from products where product_id='$P_id'";
		$run_get_product = $conn->query($get_product);
		$res_get_product = $run_get_product->fetch_assoc();
		
		$get_product_id = $res_get_product['product_id'];
		$get_product_title = $res_get_product['product_title'];
		$get_product_img1 = $res_get_product['product_img1'];
		$get_product_img2 = $res_get_product['product_img2'];
		$get_product_img3 = $res_get_product['product_img3'];
		$get_product_price = $res_get_product['product_price'];
		$get_product_desp = $res_get_product['product_desp'];
		$get_product_s_desp = $res_get_product['product_s_desp'];
		$get_product_keywords = $res_get_product['product_keywords'];
		$get_product_status = $res_get_product['product_status'];
		
		$get_cat_id = $res_get_product['cat_id'];
		// for Catagory Name
		$get_catagory = "select * from categories where cat_id='$get_cat_id'";
		$run_get_cat = $conn->query($get_catagory);
		$res_get_cat = $run_get_cat->fetch_assoc();
		
		$get_cat_name = $res_get_cat['cat_title'];
		
		$get_brand_id = $res_get_product['brand_id'];
		// for Brand Name
		$get_brand = "select * from brands where brand_id='$get_brand_id'";
		$run_get_brand = $conn->query($get_brand);
		$res_get_brand = $run_get_brand->fetch_assoc();
		
		$get_brand_name = $res_get_brand['brand_title'];
		
		
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style>
     body {background:grey; color:white;}
	 .container { width:894px ; float: left ; background:grey}
	 }
	 
   </style>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body >
<div class="container">

<form method="post" action="" enctype="multipart/form-data" class="form-horizontal">

<table  class="table table-bordered">
	<tr>
		<th colspan="2" > <h1 style="text-align:center"> Edit and Update Products </h1> </th>
		
	</tr>
	<tr>
		<th align="right"> Product Title </th>
		<td> <input type="text" name="product_title" class="form-control" placeholder="Product Title" value="<?php echo $get_product_title ?>"> </td>
	</tr>
	<tr>
		<th align="right"> Product Catagory </th>
		<td>
		<select name="product_cat" class="form-control">
			<option value="<?php echo $get_cat_id  ?>"> <?php echo $get_cat_name ?> </option>
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
            </select>
			</td>
	</tr>
	<tr>
		<th align="right"> Product Brand </th>
		<td> 
			<select name="product_brand" class="form-control" >
			<option value="<?php echo $get_brand_id  ?>"> <?php echo $get_brand_name ?> </option>
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
            </select>
		</td>
	</tr>
	<tr>
		<th align="right"> Product Image1 </th>
		<td> <input type="file" name="product_img1" class="form-control"> <img src="product_images/<?php echo $get_product_img1 ;?>" width='70' height='70' > </td>
	</tr>
	<tr>
		<th align="right"> Product Image2 </th>
		<td> <input type="file" name="product_img2" class="form-control"> <img src="product_images/<?php echo $get_product_img2 ;?>" width='70' height='70'  > </td>
	</tr>
	<tr>
		<th align="right"> Product Image3 </th>
		<td> <input type="file" name="product_img3" class="form-control"> <img src="product_images/<?php echo $get_product_img3 ;?>" width='70' height='70'  > </td>
	</tr>
	<tr>
		<th align="right"> Product Price </th>
		<td> <input type="text" name="product_price" class="form-control" placeholder="Product Price" value="<?php echo $get_product_price ?>"> </td>
	</tr>
	<tr>
		<th align="right"> Product Description </th>
		<td> <textarea name="product_desp" rows="5" cols="26" class="form-control" placeholder="Product Description" > <?php echo $get_product_desp ?> </textarea> </td>
	</tr>
    <tr>
		<th align="right"> Product Short Description </th>
		<td> <textarea name="product_s_desp" rows="5" cols="26" class="form-control" placeholder="Product Description" > <?php echo $get_product_s_desp ?> </textarea> </td>
	</tr>
	<tr>
		<th align="right"> Product Keyword </th>
		<td> <input type="text" name="product_keywords" class="form-control" placeholder="Product Keywords" value="<?php echo $get_product_keywords ?>"> </td>
	</tr>
	<tr>
		<th align="right"> Product Status </th>
		<td> <input type="text" name="product_status" class="form-control" placeholder="Product Status" value="<?php echo $get_product_status ?>"> </td>
	</tr>
	<tr align="center">
		
		<td colspan="2"> <input type="submit" name="update_product" class="btn btn-primary btn-block" value="Update Product"> </td>
	</tr>
</table>


</form>
</div>



<?php

if(isset($_POST['update_product']))
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
		
		if($product_title=='' OR $product_cat=='' OR $product_brand=='' OR $product_price=='' OR $product_desp=='' OR $product_keywords=='' OR $product_status=='')
		{
			echo "<script> alert('Please Fill All the Fields') </script>";
			exit();
		}
		else{
			if($_FILES['product_img1']['name'] == "")
			{
				$product_img1 = $get_product_img1;
			}
			if($_FILES['product_img2']['name'] == "")
			{
				$product_img2 = $get_product_img2;
			}
			if($_FILES['product_img3']['name'] == "")
			{
				$product_img3 = $get_product_img3;
			}
		$update_product = "update products set cat_id='$product_cat' , brand_id='$product_brand' , date=NOW() , product_title='$product_title' , product_img1='$product_img1' , product_img2='$product_img2' , product_img3='$product_img3' ,product_price='$product_price' , product_desp='$product_desp' ,product_s_desp='$product_s_desp', product_keywords='$product_keywords' , product_status='$product_status' 
		where product_id='$get_product_id'";
		
		$run_update_product = $conn->query($update_product);
		if($run_update_product)
		{
			echo "<script> alert('Product Update Sucessfully') </script>";
			echo "<script> window.open('index.php?view_products','_self') </script>";	
			exit();
		}
		else{
			echo "<script> alert('Product Not Updated') </script>";
			exit();
		}
		
		}
	
}


?>
</body>
</html>
<?php } ?>