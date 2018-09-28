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
	<title> Customers </title>
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


<table align="center" width="1100" bgcolor="white" >
					<tr style="">
						<th> SNo </th>
						<th> Auther Name </th>
						<th> Auther Email </th>
						<th> Auther Message </th>

						
					</tr>
					<?php

						$select_mes = "select * from contact";
						$run_mes = $conn->query($select_mes);
		                  $sno = 0;
						while($res_mes = $run_mes->fetch_assoc())
						{
							$auther_name = $res_mes ['author_name'];
							$auther_email = $res_mes ['author_email'];
							$auther_message = $res_mes ['author_comment'];
						$sno++;
							
							
							
							
							
							
					?>
					<tr>
						<td> <?php echo $sno ?> </td>
						<td> <?php echo $auther_name ?>  </td>
						<td> <?php echo $auther_email ?>   </td>
                        <td> <?php echo $auther_message ?>   </td>

					</tr>
					
					<?php 
								} // While loop close
					
							
					?>
					</table>
					
</body>
</html>

	<?php  } ?>