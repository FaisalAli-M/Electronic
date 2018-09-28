<?php

include("includes/db_con.php");

if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> View Producys</title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
	
  <style>
	th { border: 3px groove black; font-size:24px} 
	td 
	{
		border: 1px solid black;
		text-align:center
	}
	td {font-size:20px}
	input[type=number] { width:50px}
  </style>
  
</head>
<body>


<table align="center" width="900" bgcolor="white" >
					<tr style="">
						<th> Brand ID </th>
						<th> Brand Title </th>
						<th> Edit Brand </th>
						<th> Delete Brand </th>
						
					</tr>
					<?php

						$select_brand = "select * from brands";
						$run_brand = $conn->query($select_brand);
		
						while($res_brand = $run_brand->fetch_assoc())
						{
							$brand_id = $res_brand['brand_id'];
							$brand_title = $res_brand['brand_title'];
							
							
							
							
							
							
					?>
					<tr>
						<td> <?php echo $brand_id  ?> </td>
						<td> <?php echo $brand_title ?>   </td>
						
						<td> <a href="index.php?edit_brand=<?php echo $brand_id  ?>"> Edit </a>   </td>
						<td> <a href="delete_brands.php?delete_brand=<?php echo $brand_id  ?>"> Delete </a>   </td>
					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>

	<?php } ?>