<?php
include("functions.php");
include("includes/db_con.php");

?>

<!DOCTYPE HTML>
<html>

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>

        <title>Liberty Electronincs | Online Portal </title>
        
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/view_all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/products.css">
       <link rel="stylesheet" href="css/menu.css"/>
         <link rel="stylesheet" href="slider.css"/>
        <link href="assets/css/promo_b.css" rel="stylesheet" type="text/css">
         <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- ui -->
    <link href="assets/plugins/jquery-ui-1.12.0/jquery-ui.min.css" rel="stylesheet" type="text/css">

    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
      
    </head>
    <body >
        <!-- Navigation Start --> 
    		<div class="container2">
			<header>
				
			</header>
			

                
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
                                   <!-- <?php get_menu_Products();  ?> -->
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Faisal </a></li> </td>
                                    </tr>
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Danish </a></li> </td>
                                    </tr>
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Azhar </a></li> </td>
                                    </tr>
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Mehmood </a></li> </td>
                                    
								</tr>
                                   
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
                                 <!--    <?php get_menu_Brands();  ?> -->
                                               <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Faisal </a></li> </td>
                                    </tr>
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Danish </a></li> </td>
                                    </tr>
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Azhar </a></li> </td>
                                    </tr>
                                    <tr>
                                  <td> 	<li><a href='all_products?cat_id=$cat_id'> Mehmood </a></li> </td>
                                    
								</tr>
                            </table>
								
							</ul>
						</span>
							
							</div>
	
							<div id="p_pic">
								
						</div>
					</div>
			 
					</li>
                    
                    
					<li>
						<a href="#">Services</a>
					</li>
					
					<li>
						<a target="_blank" href="#">Contact</a>
					</li>
                    
         <li style="float:right;">
           <a href="#">Add to Cart</a>
          </li>

				</ul>
			</nav>
		</div>
<!-- Navigation End -->
          
                
 

<!-- Main Div End -->
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Navigation Hover Script -->
    <script src="js/index.js"></script>
        <script src="slider.js"></script>
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
    </body>
 </html>
