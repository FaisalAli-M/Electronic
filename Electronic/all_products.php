<?php
include("functions.php");
include("includes/db_con.php");

?>

<!DOCTYPE HTML>
<html>

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>

        <title>Faisal's Electronics </title>
        
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
	        

	<link href="css/all_pro_nav.css" rel="stylesheet">
       
       <link rel="stylesheet" href="css/menu.css"/>
    

         <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- ui -->
    <link href="assets/plugins/jquery-ui-1.12.0/jquery-ui.min.css" rel="stylesheet" type="text/css">

    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="css/thumbs2.css" rel="stylesheet" />

    <script src="js/thumbnail-slider.js"></script>
      
    </head>
    <body >
        <!-- Navigation Start --> 
    		<div class="container2">
			<header>
				
			</header>
			
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
        <div class="p_center">
            
          
          <div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
				
                            
                            <?php all_prod_nav_Brands();  ?> 
                            
                            
                            
                            <!--
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							-->
						</div><!--/category-productsr-->
					
						
					
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/mobile_offer.jpg" alt="" />
							<img src="images/shipping.jpg" alt="" />s
						</div><!--/shipping-->
						
					</div>
				</div>
            
<div class="p_products">
    <div class="p_pro">
        <?php 
            get_catagory_Products(); 
            get_brand_Products();
            get_brand_Cat_Products();
        ?>
    </div>
    <div class="p_banner_img">
               <!--start slider-->
    <div style="padding:35px 0;">


        <div style="float:left;padding-left:10px;">
            <div id="thumbs2">
                <div class="inner">
                    <ul>
                        <li>
                            <a href="/">
                                <span class="thumb" style="background-image:url(thumb_nails/main.jpg)">
                                    This slide demonstrates how to link the thumbnail image to another web page.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner2.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner10.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner11.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner12.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner3.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner4.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner5.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner6.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner7.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner8.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner9.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/b.jpeg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner13.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner14.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner16.jpg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner15.png"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/b.jpeg"></a>
                        </li>
                            <li>
                            <a class="thumb" href="thumb_nails/banner17.jpeg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner18.jpeg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner19.jpeg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/banner20.jpeg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="thumb_nails/b.jpeg"></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>

        <div style="clear:both;"></div>

    </div>
   
        </div>
    </div>
</div> 
           <div style="height: 100px ; width:1200px  ; position:relative"></div>
          
           <div><?php include("myfooter.html") ?></div>
    	
<!-- Main Div End -->
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Navigation Hover Script -->
    <script src="js/index.js"></script>
        <script src="js/all_product.js"> </script>
       
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
    
    </body>
 </html>
<?php
       del_hidden_cart_index();  
?>