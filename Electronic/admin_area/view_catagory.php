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
						<th> Catagory ID </th>
						<th> Catagory Title </th>
						<th> Edit Catagory </th>
						<th> Delete Catagory </th>
						
					</tr>
					<?php

						$select_catagory = "select * from categories";
						$run_catagory = $conn->query($select_catagory);
		
						while($res_catagory = $run_catagory->fetch_assoc())
						{
							$catagory_id = $res_catagory['cat_id'];
							$catagory_title = $res_catagory['cat_title'];
							
							
							
							
							
							
					?>
					<tr>
						<td> <?php echo $catagory_id  ?> </td>
						<td> <?php echo $catagory_title ?>   </td>
						
						<td> <a href="index.php?edit_cat=<?php echo $catagory_id  ?>"> Edit </a>   </td>
						<td> <a href="delete_catagories.php?delete_cat=<?php echo $catagory_id  ?>"> Delete </a>   </td>
					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>
	<?php } ?>