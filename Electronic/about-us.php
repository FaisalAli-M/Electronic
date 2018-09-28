<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Faisal's Electronics </title>
    <meta name="keywords" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon" />
    <!-- Global CSS  -->
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
  
</head>
    <body>
        
  <?php
    $conn = new mysqli("localhost","root","","my_electronics");
			if(isset($_GET['detail_id']))
			{
				$product_id = $_GET['detail_id'];
						$product = "select * from products where product_id='$product_id'"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{
                                $dis = 1000;
								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$prod_img2 = $prod_rows['product_img2'];
							$prod_img3 = $prod_rows['product_img3'];
                            $dis = $dis + $prod_price;        
								}
							}
			}
	?>
        <!-- start wrapper -->
        <div class="wrapper">
            <!-- start page -->
            <div class="page">
                <!-- start breadcrumb area-->
                <section class="breadcrumb-area padding-top-product">
                    <div class="container">
                        <div class="breadcrumb breadcrumb-box">
                            <ul>
                                 <li><a href="#"><span ><span>home</span></span></a></li>
                                 <li><a href="#"><span ><span>product</span></span></a></li>
                                <li><a href="#"><span><span><?php echo $prod_title; ?></span></span></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- end breadcrumb area-->
                <!-- start product details area-->
                <section  class="main-page container">
                    <div class="main-container col1-layout">
                        <div class="main">
                            <div class="col-main">
                                <div class="product-view">
                                    <div class="product-essential ">
                                        <div class="row">
                                            <div class="col-sm-5 col-md-4 col-lg-4">
                                                <div class="product-img-box resbaner">
                                                    <p class="product-view-img colorbox">
                                                        <img id="zoom_image"   data-zoom-image="admin_area/product_images/<?php echo $prod_img1 ; ?>"  src="admin_area/product_images/<?php echo $prod_img1 ; ?>" alt="view image" />
                                                        <a href="admin_area/product_images/<?php echo $prod_img1 ; ?>" class="fa fa-search-plus icon " title="" ></a>
                                                    </p> 
                                                    <div class="more-views">
                                                        <ul id="more" class="colorbox">
                                                            <li><a href="admin_area/product_images/<?php echo $prod_img2 ; ?>" data-image="admin_area/product_images/<?php echo $prod_img2 ; ?>"  data-zoom-image="admin_area/product_images/<?php echo $prod_img2 ; ?>" class="elevatezoom-gallery colorbox"  ><img src="admin_area/product_images/<?php echo $prod_img2 ; ?>" alt="more views" /></a></li>
                                                            <li><a href="admin_area/product_images/<?php echo $prod_img3 ; ?>" data-image="admin_area/product_images/<?php echo $prod_img3 ; ?>"  data-zoom-image="admin_area/product_images/<?php echo $prod_img3 ; ?>" class="elevatezoom-gallery colorbox"  ><img src="admin_area/product_images/<?php echo $prod_img3 ; ?>" alt="more views" /></a></li>
                                                            <li><a href="admin_area/product_images/<?php echo $prod_img1 ; ?>" data-image="admin_area/product_images/<?php echo $prod_img1 ; ?>"  data-zoom-image="admin_area/product_images/<?php echo $prod_img1 ; ?>" class="elevatezoom-gallery colorbox"  ><img src="admin_area/product_images/<?php echo $prod_img1 ; ?>" alt="more views" /></a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-md-8 col-lg-8">
                                                <div class="product-shop">
                                                    <div class="products-name">
                                                        <h1> <?php echo $prod_title; ?> </h1>
                                                    </div>
                                                    <div class="ratting-box">
                                                        <div class="rating">                                                              
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star-o"></span>
                                                        </div>
                                                        <div class="product-review">
                                                            <ul>
                                                                <li>03 Review </li>
                                                                <li> | <a href="#"> Add Your Review </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price"><?php echo "Rs:" . $dis; ?></span>
                                                        <span class="new-price"><?php echo "Rs:" . $prod_price; ?></span>
                                                        
                                                    </div>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                        <label> reference: </label>
                                                        <span class="editable">grace Kennedy</span>
                                                        </li>
                                                        <li>
                                                        <label>availability:</label>
                                                        <span class="editable instock">in STOCK</span>
                                                        </li>
                                                    </ul>
                                                    <div class="product-discription">
                                                        <div class="product-discription-title">Short Description:</div>
                                                        <p><?php echo $prod_desp; ?>
                                                        </p>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <div class="input-content">
                                                            <label>Qty:</label>
                                                            <div class="box-qty">
                                                                <input type="text" class="input-text qty" id="input-quantity" value="1" name="quantity">
                                                                <input type="hidden" value="44" name="product_id">
                                                                <div class="qty-arrows">
                                                                    <input type="button" class="qty-increase" onclick="var qty_el = document.getElementById('input-quantity');
                                                                    var qty = qty_el.value;
                                                                    if (!isNaN(qty))
                                                                        qty_el.value++;
                                                                    return false;" value="+">
                                                                    <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('input-quantity');
                                                                    var qty = qty_el.value;
                                                                    if (!isNaN(qty))
                                                                        qty_el.value--;
                                                                    return false;
                                                                           " value="-">
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <a href="index.php?$prod_id"> <button class="btn btn-button white" ><i class="fa fa-shopping-cart"></i>add to cart</button></a>
                                                        <a class="btn btn-button gray9 border" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="btn btn-button gray9 border" href="#"><i class="fa fa-exchange"></i></a>
                                                    </div>

                                                    <div class="social-link padding-top">
                                                      <!-- First Post -->
                                                          <!-- AddThis Button BEGIN -->
                                                                <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                                                                <script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 
                                                                <!-- AddThis Button END --> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <!-- end page-->   
    </div>
        
    <!-- end wrapper-->
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


