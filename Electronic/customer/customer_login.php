<?php
@session_start();
//include("includes/db_con.php");
function getUserIP_add()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
};
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  
  
  
     

 
</head>

<body>
  <div class="login-page">
  <div class="form"> 
  <h2 style="font-size:28px;"> <b>Login / Register</b></h2><br/>
  	<!-- Registeration Form Start -->
    <form class="register-form" action="checkout.php" method="post" enctype="multipart/form-data" id="form">
     <b> Enter Your Name</b> <input type="text" placeholder="Full Name" name="c_r_name" required />
     <b> Enter Your Email </b> <input type="email" placeholder="email address" name="c_r_email" required/>
	 <b> Enter Your Password</b> <input type="password" placeholder="Password" name="c_r_pass" required/>
     <b> Select Your Country </b> 
	 <select name="c_r_country" class="select">
		<option> Select an Country </option>
		<option> Pakistan </option>
		<option> China </option>
		<option> Saudia </option>
		<option> Australia </option>
		<option> India </option>
	 </select>
     <b> Enter Your City </b> <input type="text" placeholder="Type your City Name" name="c_r_city" required/>
	 
     <b> Enter Your Contact No</b> <input type="text" placeholder="Enter Your Contact" name="c_r_contact" required/>
     <b> Enter Your Address </b> <input type="text" placeholder="Enter Your Address" name="c_r_add" required/>
     <b> Upload Your Image</b> <input type="file"  name="c_r_image"/>
     
	  
      <button name="register">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
		<!-- Registeration Form End -->
		
	<!-- Login Form Start -->
    <form class="login-form" method="post" action="checkout.php" id="form1">
      <input type="email" name="c_email"placeholder="username"/>
      <input type="password" name="c_pass" placeholder="password"/>
      <button name="c_login">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
      <p class="message">Forget Password? <a href="customer/customer_forgot_pass.php">Forget Password</a></p>
    </form>
		<!-- Login Form End -->
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script>
	$('.message a').click(function(){
   $('#form').animate({height: "toggle", opacity: "toggle"}, "slow");
        $('#form1').animate({height: "toggle", opacity: "toggle"}, "slow");
});
	</script>

</body>

<?php
// User Account and Cart Check Script
    $conn = new mysqli("localhost","root","","my_electronics");
	if(isset($_POST['c_login']))
	{
		// Check Customer Login
		$customer_email = $_POST['c_email']; 
		$customer_pass = $_POST['c_pass']; 
		$sel_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass' ";
		$run_customer = $conn->query($sel_customer);
		$check_customer = $run_customer->num_rows; 
		
		//Check Cart items
		$cus_ip = getUserIP_add();
		$sel_cart = "select * from cart where ip_add='$cus_ip'";
		$run_cart = $conn->query($sel_cart);
		$check_cart = $run_cart->num_rows; 
		
		if($check_customer == 0)
		{
			echo "<script> alert('Email AND Password are incorrect')</script>";
			exit();
		}
		if($check_customer == 1 AND $check_cart == 0)
		{
			$_SESSION['customer_email'] = $customer_email;
			echo "<script> alert('You Have Sucessfully Logged In')</script>";
			echo "<script> window.open('my_account.php','_self') </script>";
		}
		else
		{
			$_SESSION['customer_email'] = $customer_email;
			echo "<script> alert('You Have Sucessfully Logged In')</script>";
			echo "<script> window.open('checkout.php','_self') </script>";
		}
		
	}
	
	// Customer Registeration Query
	if(isset($_POST['register']))
	{
		$c_r_name = $_POST['c_r_name']; 
		$c_r_email = $_POST['c_r_email']; 
		$c_r_pass = $_POST['c_r_pass']; 
		$c_r_country = $_POST['c_r_country']; 
		$c_r_city = $_POST['c_r_city']; 
		$c_r_contact = $_POST['c_r_contact']; 
		$c_r_add = $_POST['c_r_add']; 
		$c_r_image = $_FILES['c_r_image']['name']; 
		$img_tmp_name = $_FILES['c_r_image']['tmp_name']; 
		$c_r_ip = getUserIP_add();
		
		$reg_cus = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_r_name','$c_r_email','$c_r_pass','$c_r_country','$c_r_city','$c_r_contact','$c_r_add','$c_r_image','$c_r_ip') ";
		$run_reg_cus = $conn->query($reg_cus);
		move_uploaded_file($img_tmp_name,"customer/customer_photos/$c_r_image");
		
		$cus_r_ip = getUserIP_add();
		$sel_r_cart = "select * from cart where ip_add='$cus_r_ip'";
		$run_r_cart = $conn->query($sel_r_cart);
		$check_r_cart = $run_r_cart->num_rows; 
		if($check_r_cart > 0)
		{
			$_SESSION['customer_email'] = $c_r_email;
			echo "<script> alert('You Have Sucessfully Registered! Thnak You')</script>";
			echo "<script> window.open('checkout.php','_self') </script>";			
		}
		else
		{
			$_SESSION['customer_email'] = $c_r_email;
			echo "<script> alert('You Have Sucessfully Registered! Thnak You')</script>";
			echo "<script> window.open('index.php','_self') </script>";	
		}
	}
?>


</html>
