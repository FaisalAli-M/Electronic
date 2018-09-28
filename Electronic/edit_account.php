<?php
@session_start();
include("includes/db_con.php");
 /*function getUserIP_add()
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
}; */
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>

    
</head>

<body>
<?php
	if(isset($_GET['edit_account']))
	{
         $conn = new mysqli("localhost","root","","my_electronics");
		$cus_email = $_SESSION['customer_email'];
		$sel_cus = "select * from customers where customer_email='$cus_email' ";
		$run_cus = $conn->query($sel_cus);
		$res_cus = $run_cus->fetch_assoc();
		
		$cus_id = $res_cus['customer_id'];
		$cus_name = $res_cus['customer_name'];
		$cus_email = $res_cus['customer_email'];
		$cus_pass = $res_cus['customer_pass'];
		$cus_country = $res_cus['customer_country'];
		$cus_city = $res_cus['customer_city'];
		$cus_contact = $res_cus['customer_contact'];
		$cus_address = $res_cus['customer_address'];
		$cus_image = $res_cus['customer_image'];
	}

?>


  <div class="login-page">
  <div  class="form"> 
  <h2 style="font-size:28px;"> Edit Your Account</h2><br/>
  	<!-- Registeration Form Start -->
    <form class="register-form" action="" method="post" enctype="multipart/form-data" id="form">
     <b> Enter Your Name</b> <input type="text" placeholder="Full Name" name="c_r_name" value="<?php echo $cus_name ?>" required /> <br/>
     <b> Enter Your Email </b> <input type="email" placeholder="email address" name="c_r_email" value="<?php echo $cus_email ?>" required/>
	
     <b> Select Your Country </b> 
	 <select name="c_r_country" class="select" disabled>
		<option value="<?php echo $cus_country ?>"> <?php echo $cus_country ?>   </option>
		<option> Pakistan </option>
		<option> China </option>
		<option> Saudia </option>
		<option> Australia </option>
		<option> India </option>
	 </select>
     <b> Enter Your City </b> <input type="text" placeholder="Type your City Name" name="c_r_city" value="<?php echo $cus_city ?>" required/> <br/>
	 
     <b> Enter Your Contact No</b> <input type="text" placeholder="Enter Your Contact" name="c_r_contact" value="<?php echo $cus_contact ?>" required/> <br/>
     <b> Enter Your Address </b> <input type="text" placeholder="Enter Your Address" name="c_r_add" value="<?php echo $cus_address ?>" required/> <br/>
     <b> Upload Your Image</b> <input type="file"  name="c_r_image"  /> <img src="customer/customer_photos/<?php echo $cus_image ?>" width="80" height="80" >
     
	  
      <button name="edit">Edit</button>
    
    </form>
		<!-- Registeration Form End -->
		
	<!-- Login Form Start -->
      <p class="message"> <a href="#">Are You Sure to Continue Edit Account</a></p>
      
    
		<!-- Login Form End -->
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script>
	$('.message a').click(function(){
   $('#form').animate({height: "toggle", opacity: "toggle"}, "slow");
   $('.message a').hide();
});
	</script>

</body>

<?php
	// Customer Registeration Query
	if(isset($_POST['edit']))
	{
		$c_r_name = $_POST['c_r_name']; 
		$c_r_email = $_POST['c_r_email']; 
		$c_r_pass = $_POST['c_r_pas']; 
		$c_r_country = $_POST['c_r_country']; 
		$c_r_city = $_POST['c_r_city']; 
		$c_r_contact = $_POST['c_r_contact']; 
		$c_r_add = $_POST['c_r_add']; 
		$c_r_image = $_FILES['c_r_image']['name']; 
		$img_tmp_name = $_FILES['c_r_image']['tmp_name']; 
		
		if($_FILES['c_r_image']['name'] == "")
		{
			$c_r_image = $cus_image;
		}
		
		$reg_cus = "update customers set customer_name='$c_r_name', customer_email='$c_r_email', customer_city='$c_r_city', customer_contact='$c_r_contact', customer_address='$c_r_add', customer_image='$c_r_image' where customer_id='$cus_id' ";
		$run_reg_cus = $conn->query($reg_cus);
		if($run_reg_cus)
		{
			move_uploaded_file($img_tmp_name,"customer/customer_photos/$c_r_image");
			echo "<script> alert('Your Account Has Been Edit! Thnak You')</script>";
			echo "<script> window.open('my_account.php','_self') </script>";
			$_SESSION['customer_email'] = $c_r_email;
		}

	}
?>
</html>
