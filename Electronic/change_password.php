<?php
@session_start();
include("includes/db_con.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
 <title>Faisal's Electronics </title>

       <link rel="stylesheet" href="styles/edit_account.css">
</head>

<body>
  <div class="login-page">
  <div class="form"> 
  
		<h2 style="font-size:28px;"> Change Password </h2><br><br>
	<!-- Login Form Start -->
    <form class="login-form" method="post" action="">
      <input type="password" name="old_pass"placeholder="Enter Old Password" required/>
      <input type="password" name="new_pass" placeholder="Enter New Password" required/>
      <input type="password" name="r_new_pass" placeholder="Retype New Password" required/>
      <button name="change">Chnage Password</button>

    </form>
		<!-- Login Form End -->
  </div>
</div>

</body>

<?php
	if(isset($_POST['change']))
	{
         $conn = new mysqli("localhost","root","","my_electronics");
		$cus_email = $_SESSION['customer_email'];
		$old_pass = $_POST['old_pass'];
		$new_pass = $_POST['new_pass'];
		$r_new_pass = $_POST['r_new_pass'];
		
		$sel_pass = "select * from customers where customer_pass='$old_pass' AND customer_email='$cus_email'";
		$run_pass = $conn->query($sel_pass);
		$count_pass = $run_pass->num_rows;
		
		if($count_pass == 0)
		{
			echo "<script> alert('invalid Password ! Try Again')</script>";
			
				exit();
		}
		if($new_pass!=$r_new_pass)
		{
			echo "<script> alert('Not Matched')</script>";
				
			exit();
		}
		else{
			$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$cus_email' ";
			$run_u_pass = $conn->query($update_pass);
			if($run_u_pass){
			echo "<script> alert('Your Password Change Successfully')</script>";
			echo "<script> window.open('my_account.php','_self') </script>";
			}
		}
	}
	
	
?>
</html>
