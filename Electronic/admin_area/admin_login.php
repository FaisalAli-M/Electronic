<?php
session_start();
include("includes/db_con.php");


?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> Admin Login </title>
	<link rel="stylesheet" href="admin_login.css" media="all" />
	
  
  
</head>
<body>
<h2 style="color:white ; margin-left:570px ; font-size:30px"> Admin Login Panel </h2>
<form method="post" action="" class="login">

    <p>
      <label for="login">Email:</label>
      <input type="text" name="email" id="login" placeholder="Enter Your Email">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Enter Your Password">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button" name="login" >Login</button>
    </p>

    <p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
  </form>

</body>

<?php
if(isset($_POST['login']))
{
	$admin_email = $_POST['email'];
	$admin_pass =  $_POST['password'];
	
	$sel_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
	$run_admin = $conn->query($sel_admin);
	
	$count_admin = $run_admin->num_rows;
	
	if($count_admin == 1)
	{
		$_SESSION['admin_email'] = $admin_email;
		echo "<script> window.open('index.php?loggedin=Welcome','_self') </script>";	
	}
	else
	{
		echo "<script> alert('Your Email or Password is Invalid! try Again') </script>";
	}
}


?>