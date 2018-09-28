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
	    <link href="css/view_all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/products.css">
       <link rel="stylesheet" href="css/menu.css"/>
         <link rel="stylesheet" href="slider.css"/>
        <link href="css/promo_b.css" rel="stylesheet" type="text/css">
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
          
            <!-- Slider Start -->
                <div class"margin"></div>
<!-------- don't use this html this only for margin top remove this ---------------------->

<div class="f">
<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Our Proud Partner <b> Samsung </b></h2>
          <p class="slide__text-desc">Samsung Group is a South Korean multinational conglomerate headquartered in Samsung Town, Seoul. It comprises numerous affiliated businesses most of them united under the Samsung brand, and is the largest South Korean chaebol business conglomerate. </p>
          <a href="all_products.php?brand_id=1"
          class="slide__text-link"><b>View AlL Samsung Products</b></a>
        </div>
      </div>
    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Our Proud Partner <b> LG </b></h2>
          <p class="slide__text-desc">LG Corporation (Korean:LG), formerly Lucky-GoldStar (Korean: Leogki Geumseong), is a South Korean multinational conglomerate corporation. It is the fourth-largest chaebol in South Korea. </p>
          <a href="all_products.php?brand_id=4" 
          class="slide__text-link"><b>View All LG Products </b></a>
        </div>
      </div>
    </div>
    <div class="slide slide-2">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Our Proud Partner <b> Lenovo </b></h2>
          <p class="slide__text-desc">Lenovo Group Ltd shortened as Lenovo.It designs, develops, manufactures and sells personal computers, tablet computers, smartphones, workstations, servers, electronic storage devices, IT management software, and smart televisions.</p>
          <a href="all_products.php?brand_id=7"
          class="slide__text-link"><b>View All Lenovo Products</b></a>
        </div>
      </div>
    </div>
    <div class="slide slide-3">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Our Proud Partner <b> Dell </b></h2>
          <p class="slide__text-desc">Dell Inc.(stylized as DELL) is a multinational computer technology company based in Round Rock, Texas and, along with Dell EMC, is a subsidiary of Dell Technologies, one of the largest technology companies in the world with 138,000 employees</p>
          <a href="all_products.php?brand_id=2"
          class="slide__text-link"><b>View All Dell Products</b></a>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
            
            <!-- Slider End -->
        
        <div style="margin-top:30px">
            
                <!--  promo banner -->
            <section class="promo-banner-area padding-top">
                <div class="container">
                    <div class="row">
                        <!--  promo1 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="promo-banner-inner promo-box1">
                                <div class="promo-ing">
                                    <img src="images/latest.jpg" alt="" />
                                </div>
                                <div class="promo-content promo1">
                                    <h2 class="promo-title"><span>Latest IPhones</span></h2>
                                    <div class="promo-sub-title">20% on Sale</div>
                                    <a href="all_products.php?brand_c_id=6&cat_b_id=2" class="btn btn-button white-bg">View All</a>
                                </div>
                            </div>
                        </div>
                        <!-- / promo1 -->
                        <!--  promo2 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="promo-banner-inner promo-box2">
                                <div class="promo-ing">
                                    <img src="images/dslr.jpg" alt="" />
                                </div>
                                <div class="promo-content promo2">
                                    <h2 class="promo-title"><span>Latest DSLR</span></h2>
                                    <div class="promo-sub-title">15% on Sale</div>
                                    <a href="all_products.php?cat_id=6" class="btn btn-button white-bg">View All</a>
                                </div>
                            </div>
                        </div>
                        <!-- / promo2 -->
                        <!--  promo3 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="promo-banner-inner promo-box3">
                                <div class="promo-ing">
                                    <img src="images/gaming.jpg" alt="" />
                                </div>
                                <div class="promo-content promo3">
                                    <h2 class="promo-title"><span>Gaming Tablets</span></h2>
                                    <div class="promo-sub-title">10% on sale</div>
                                    <a href="all_products.php?cat_id=3" class="btn btn-button white-bg">View All</a>
                                </div>
                            </div>
                        </div>
                        <!-- / promo3 -->
                    </div>
                </div>
            </section>
            <!-- / promo banner -->
        </div>
<!-- Main Div Start -->
    	<div class="main-container">

            
            
            <!-- Products Main Div Start -->
            <div>
              
            <!-- First Row Start -->
                <div class="features_items" style="border:0px solid green"><!--features_items-->
						<h2 class="title text-center">Laptops Items</h2>
						<div class="col-sm-4 wi" style="background-image: url(view_laptops.PNG); width:250px;
    height:380px ; ">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
									
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>View All Laptops</h2>
												
												<a href="all_products.php?cat_id=1" class="btn btn-default add-to-cart"><i class="fa fa-folder-open"></i>Click Here</a>
											</div>
										</div>
								</div>
                                <!--
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
-->
							</div>
						</div>
                                        
                                        
                              <!-- Product Div Start -->          
                                         <?php
                                            get_lap_Products();
                                         
                                            ?>
                     <!-- Product Div End -->  
        </div>
<!-- First Row End -->
                
 <!-- Second Row Start -->
                <div class="features_items" style="border:0px solid green"><!--features_items-->
						<h2 class="title text-center">Mobile Phone Items</h2>
						<div class="col-sm-4 wi" style="background-image: url(cell_phones.jpg); width: 250px;
    height: 380px ; ">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
									
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>View All Mobiles</h2>
												
												<a href="all_products.php?cat_id=2" class="btn btn-default add-to-cart"><i class="fa fa-folder-open"></i>Click Here</a>
											</div>
										</div>
								</div>
                                <!--
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
-->
							</div>
						</div>
                                        
                                        
                              <!-- Product Div Start -->          
                                         <?php
                                            get_mob_Products();
                                           
                                            ?>
                     <!-- Product Div End -->  
        </div>
<!-- Second Row End -->

 <!-- Third Row Start -->
                <div class="features_items" style="border:0px solid green"><!--features_items-->
						<h2 class="title text-center">LED TV Items</h2>
						<div class="col-sm-4 wi" style="background-image: url(Tv_and_video.PNG); width: 250px;
    height: 380px ; ">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
									
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>View All LED TVS</h2>
												
												<a href="all_products.php?cat_id=5" class="btn btn-default add-to-cart"><i class="fa fa-folder-open"></i>Click Here</a>
											</div>
										</div>
								</div>
                                <!--
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
-->
							</div>
						</div>
                                        
                                        
                              <!-- Product Div Start -->          
                                         <?php
                                            get_tv_Products();
                                            ?>
                     <!-- single item -->
                        
                     <!-- Product Div End -->  
        </div>
<!-- Third Row End -->
                
 <!-- forth Row Start -->
                <div class="features_items" style="border:0px solid green"><!--features_items-->
						<h2 class="title text-center">Tablet Items</h2>
						<div class="col-sm-4 wi" style="background-image: url(Tablets.jpg); width: 250px;
    height: 380px ; ">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
									
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>View All Tablets</h2>
												
												<a href="all_products.php?cat_id=3" class="btn btn-default add-to-cart"><i class="fa fa-folder-open"></i>Click Here</a>
											</div>
										</div>
								</div>
                                <!--
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
-->
							</div>
						</div>
                                        
                                        
                              <!-- Product Div Start -->          
                                         <?php
                                            get_tab_Products();
                                            ?>
                     <!-- single item -->
                        
                     <!-- Product Div End -->  
        </div>
<!-- forth Row End -->
                
<!-- fifth Row Start -->
                <div class="features_items" style="border:0px solid green"><!--features_items-->
						<h2 class="title text-center">Camera's Items</h2>
						<div class="col-sm-4 wi" style="background-image: url(cameras.jpg); width: 250px;
    height: 380px ; ">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
									
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>View All Cameras</h2>
												
												<a href="all_products.php?cat_id=6" class="btn btn-default add-to-cart"><i class="fa fa-folder-open"></i>Click Here</a>
											</div>
										</div>
								</div>
                                <!--
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
-->
							</div>
						</div>
                                        
                                        
                              <!-- Product Div Start -->          
                                         <?php
                                            get_cam_Products();
                                            ?>
                     <!-- single item -->
                        
                     <!-- Product Div End -->  
        </div>
<!-- fifth Row End -->
                
  <!--  free shipping -->
            <section class="free-shipping">
                <div class="freeshipping-img">
                    <div class="free-shipping-inner ">
                        <div class="container resbaner">
                            <div class="row">
                                <div class="col-sm-6 col-md-3 col-lg-3">
                                    <div class="free-shipping-box">
                                        <div class="free-sp-icon-box">
                                            <div class="free-sp-icon-box-inner">
                                                <i class="fa fa-gift"></i>
                                            </div>
                                        </div>
                                        <h3 class="hadding-title"><span>free gift voucher</span></h3>
                                        <div class="free-sp-content">
                                            <p>Reliable Electronics has been the industry's as dummy text ever since the 50, printer took a galley. </p>
                                        </div>
                                        <div class="readmore"><a href="#">Read more<i class="fa fa-play"></i></a></div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-md-3 col-lg-3">
                                    <div class="free-shipping-box">
                                        <div class="free-sp-icon-box">
                                            <div class="free-sp-icon-box-inner">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                        </div>
                                        <h3 class="hadding-title"><span>Free Home Delivery</span></h3>
                                        <div class="free-sp-content">
                                            <p>Reliable Electronics has been the industry's as dummy text ever since the 50, printer took a galley. </p>
                                        </div>
                                        <div class="readmore"><a href="#">Read more<i class="fa fa-play"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 col-lg-3">
                                    <div class="free-shipping-box">
                                        <div class="free-sp-icon-box">
                                            <div class="free-sp-icon-box-inner">
                                                <i class="fa fa-plane"></i>
                                            </div>
                                        </div>
                                        <h3 class="hadding-title"><span>Free Air Shipment</span></h3>
                                        <div class="free-sp-content">
                                            <p>Reliable Electronics has been the industry's as dummy text ever since the 50, printer took a galley.</p>
                                        </div>
                                        <div class="readmore"><a href="#">Read more<i class="fa fa-play"></i></a></div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-md-3 col-lg-3">
                                    <div class="free-shipping-box twitter">
                                        <div class="twitter-hadding">
                                            <span>latest twitter</span>
                                        </div>
                                        <div class="twitter-box">
                                            <div class="twitter-left">
                                                <div class="twitter-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </div>
                                            <div class="twitter-right">
                                                <div class="hadding-title"><a href="#">@FaisalAli</a></div>
                                                <div class="free-sp-content">
                                                    <p>Reliable Electronic has been the as dummy text ever 50....</p>
                                                </div>
                                                <div class="twitter-date"><i class="fa fa-calendar"></i><span>Jul,20,2017</span></div>
                                            </div>
                                        </div>
                                        <div class="twitter-box">
                                            <div class="twitter-left">
                                                <div class="twitter-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </div>
                                            <div class="twitter-right">
                                                <div class="hadding-title"><a href="#">@FaisalAli</a></div>
                                                <div class="free-sp-content">
                                                    <p>Reliable Electronics has been the as dummy text ever 50....</p>
                                                </div>
                                                <div class="twitter-date"><i class="fa fa-calendar"></i><span>Jul,20,2017</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / free shipping -->

                </div>
<!-- Products Main Div End -->
<div><?php include("myfooter.html") ?></div>
    	</div>
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
<?php
    del_hidden_cart_index();
    
    ?>
