<?php

@session_start();
include("includes/db_con.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Faisal's Electronics </title>

       <link rel="stylesheet" href="delete_account.css">
</head>

<body>
<!-- <form method="post" action="">
<table  width="950">
<tr>
	<th> Do You Want to Delete Account ??</th>
<tr>
<tr>
	<td align="center">
		<input type="submit" name="yes" value="Yes! I want to delete" />  
		<input type="submit" name="no" value="No! I dont want to delete" /> 
	</td>  
</tr>
</table>
</form>
-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">

<div class="popup">
  <div class="upper">Are you sure you know what you're doing?</div>
  <div class="stroke"></div>
  <div class="lower">
    <form method="post" action="#">  
    <button class="button"  name="yes"><i class="icon-large icon-ok"></i>yes</button>
    <button class="button"  name="no"><i class="icon-large icon-remove"></i>no</button>
    </form>
  </div>
</div>

<?php
if(isset($_GET['del_acc']))
{	 $conn = new mysqli("localhost","root","","my_electronics");
	$cus_email = $_SESSION['customer_email'];
	if(isset($_POST['no'])){
		echo "<script> window.open('my_account.php','_self') </script>";
	}

	if(isset($_POST['yes'])){
		$del_account = "delete from customers where customer_email='$cus_email'";
		$run_d_account = $conn->query($del_account);
		
		if($run_d_account)
		{
			session_destroy();
			echo "<script> alert('Your Account Deleted Successfully! Good Bye')</script>";
			echo "<script> window.open('index.php','_self') </script>";
			
		}
	}

}
?>
    </body>
</html>