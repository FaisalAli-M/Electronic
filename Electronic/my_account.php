<?php
session_start();
include("functions.php");
include("includes/db_con.php");

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/edit_account.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShop eCommerce template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon" />
    <!-- Global CSS  -->
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
       <!-- ui -->
     <link href="assets/plugins/jquery-ui-1.12.0/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <!-- owl carousel -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- theme style -->
    <link href="css/themestyles.css" rel="stylesheet" type="text/css">
    <!-- nivo-slider  -->
    <link href="css/slider.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/Nivo-Slider/nivo-slider.css" rel="stylesheet" type="text/css">
    <!-- animation -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- media css -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- magnific popup -->
    <link href="assets/plugins/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
    <!-- font awesome -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/my_account.css"/>
    	  <style>
	th, td 
	{
		border: 1px solid black;
	}
	th {font-size:22px}
	input[type=number] { width:50px}
  </style>
</head>
    <body>
       
    <!-- start wrapper -->
    <div class="wrapper">
        <!-- start page -->
        <div class="page">
           <!-- start header -->
  <div><?php include("myhead.php") ?></div>
                
			<nav class="menu">
				<ul>
					<li class="active">
						<a href="index.php">Home</a>
					</li>
                   <!-- for products -->
					<li class="drop-down">
						<a href="#">Our Products</a>
					 
						<div class="mega-menu fadeIn animated">
							<div class="mm-6column">
								<span class="left-images">
								<img  src="images/Electronics.png">
								
				</span>
								<span class="categories-list">
							<ul>
							<span>Our Products</span>
                                
                                <table>
                                    <?php get_menu_Products();  ?>
                                   
                                </table>
							</ul>
						</span>
							
							</div>
                        

							<div id="p_pic">
								
						</div>
					</div>
			 
					</li>
                    
                    <!-- for Brands -->
                    <li class="drop-down2">
						<a href="#">Our Brands</a>
					 
						<div class="mega-menu2 fadeIn animated">
							<div class="mm-6column">
								<span class="left-images">
								<img  src="images/Electronics.png">
								
				</span>
								<span class="categories-list">
							<ul>
							<span>Our Brands</span>
								
                                   <table>
                                    <?php get_menu_Brands();  ?>
                                   </table>
                            
								
							</ul>
						</span>
							
							</div>
	
							<div id="p_pic2">
								
						</div>
					</div>
			 
					</li>
                    
                    
						<li>
                        <a href='about.html'  class='search '> About Us </a>
					</li>
					
					<li>
						<a target="_self" href="contact-us.php">Contact Us</a>
					</li>
                    
         <li style="float:right;">
           <a href="my_account.php">View Your Account</a>
          </li>

				</ul>
			</nav>
		</div>
<!-- Navigation End -->
            <!-- / header -->
	<!-- Content Div start -->
		<div class="content">
		
		
			<!-- Left Content Div start -->
			<div id="right_content">
				<!-- Manage Account Start -->
				<div class="catagory_title"><h1 style="font-size:30px ; text-align:center ; color:black">Mannage Account</h1></div>
				<ul class="list">
				<?php 
					if(isset($_SESSION['customer_email']))
					{
						$cus_email = $_SESSION['customer_email'];
							$sel_cus = "select * from customers where customer_email = '$cus_email'";
							$run_cus = $conn->query($sel_cus);
							$cus_res = $run_cus->fetch_assoc();
							
							// create image variable for above use customer image in account management 
							$customer_image = $cus_res['customer_image'];
							echo "<img src='customer/customer_photos/$customer_image' width='180' height='180' class='img-circle' style='border: 2px solid white ; margin-left:40px ; margin-top:20px ;  margin-bottom:20px''; > ";
					}
				?>
					<li> <a href="my_account.php?my_order" ><span class="glyphicon glyphicon-compressed"></span> My Order </a> </li>
					<li> <a href="my_account.php?my_cart" ><span class="	glyphicon glyphicon-shopping-cart"></span> My Cart </a> </li>
					<li> <a href="my_account.php?my_wish" ><span class="glyphicon glyphicon-heart-empty"></span> Wish List </a> </li>
					<li> <a href="my_account.php?edit_account" ><span class="glyphicon glyphicon-edit"></span> Edit Account </a> </li>
					<li> <a href="my_account.php?change_pass" ><span class="glyphicon glyphicon-pencil"></span> Change Password</a> </li>
					<li> <a href="my_account.php?del_acc" ><span class="glyphicon glyphicon-remove-sign"></span> Delete Account  </a> </li>
					<li> <a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span> LogOut </a> </li>
				</ul>
				
				<!-- Manage Account End -->
				
				
				
			
				
				
			</div>
			<!-- Left Content Div End -->
			
			
			<!-- Right Content Div start -->
			<div id="left_content">

				
				<!-- Products Div -->
				<?php
				//getDefault();
                if(!isset($_SESSION['customer_email']))
                {
                    echo "<script>window.open('checkout.php','_self')</script>";
                }
				if(isset($_SESSION['customer_email']))
				{
					if(isset($_GET['my_order']))
					{
						include("my_order.php");
					}
				}
                if(isset($_SESSION['customer_email']))
				{
					if(isset($_GET['my_cart']))
					{
                        echo "<script>window.open('shopping-cart.php','_self')</script>";
					}
				}
                 if(isset($_SESSION['customer_email']))
				{
					if(isset($_GET['my_wish']))
					{
                        echo "<script>window.open('wishlist.php','_self')</script>";
					}
				}
				if(isset($_SESSION['customer_email'])){
					if(isset($_GET['edit_account']))
					{
						include("edit_account.php");
					}
				}
				if(isset($_SESSION['customer_email'])){
					if(isset($_GET['change_pass']))
					{
						include("change_password.php");
					}
				}
				if(isset($_SESSION['customer_email'])){
					if(isset($_GET['del_acc']))
					{
						include("delete_account.php");
					}
				}
				
				?>
			</div>
			<!-- Right Content Div End -->
			
			
		</div> 
		<!-- Content Div End -->
				
           
      
        <!-- / page --> 
        <div><?php include("myfooter.html") ?></div>
        </div>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js"></script>
    <!-- jquery ui -->
    <script src="assets/plugins/jquery-ui-1.12.0/jquery-ui.min.js"></script>
    <!-- bootstarp -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- nivo slider -->
    <script src="assets/plugins/Nivo-Slider/jquery.nivo.slider.js"></script>
    <!-- elevatezoom -->
    <script src="assets/plugins/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
    <!-- magnific popup -->
    <script src="assets/plugins/magnific/jquery.magnific-popup.min.js"></script>
    <!-- accordion -->
    <script src="assets/js/jquery.accordion.source.js"></script>
    <!-- ddslick -->
    <script src="assets/js/jquery.ddslick.min.js"></script>
    <!-- custom js -->
    <script src="assets/js/theme.js"></script>
        <script src="js/index.js"></script>
    </body>

</html>
<?php
    del_hidden_cart_index();
    
    ?>