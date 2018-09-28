<?php
include("functions.php");
include("includes/db_con.php");

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faisal's Electronics </title>
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
          
            <!-- breadcrumb area-->
            <section class="breadcrumb-area padding-30">
                <div class="container">
                    <div class="breadcrumb breadcrumb-box">
                        <ul>
                            <li><a href="#"><span ><span>home</span></span></a></li>
                            <li><a href="#"><span><span>user</span></span></a></li>
                            <li><span>wish</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- / breadcrumb area-->
            <!-- main -->
            <section class="main-page container">
                <div class="main-container col1-layout">
                    <div class="main">
                        <div class="col-main">

                            <!-- / Order History-->
                            <section class="wishlist-box oder-history">
                                    <div class="page-title margign-30"><span>wishlist</span></div>
                                <div class="shopping-content">
                                    <form method="post" action="#">
                                        <div class="table-responsive">
                                            <table class="cart-table data-table">
                                               <!-- list --> 
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">img</th>
                                                        <th class="text-left">product name</th>
                                                        <th class="text-left">Old Price</th>
                                                        <th class="text-left">Stock</th>
                                                        <th class="text-left">Unit Price</th>
                                                        <th class="text-right">action</th>
                                                    </tr>
                                                </thead>
                                                <!-- / list -->
                                                <tbody>
                                                   <!-- item -->
                                                        <?php get_wish(); ?>
                                                    <!-- / item -->
                                           

 
                                            </table>
                                        </div>
                                    </form>
                                    <div class="buttons padding-top-product">
                                        <a href="#" class="btn btn-button gray9-bg white"> Back To Account </a>
                                    </div>
                                </div>
                            </section>
                            <!-- / Order History -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- / main -->
           
         </div>
        <!-- / page --> 
        <div><?php include("myfooter.html") ?></div>
 
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
    del_wish();
            
    del_hidden_cart_index();
    
    
?>