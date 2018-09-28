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
        <style>
            .count-input {
  position: relative;
  width: 50%;
  max-width: 165px;
  margin: 10px 0;
                margin-left: 30px;
}
.count-input input {
  width: 100%;
  height: 36.92307692px;
  border: 1px solid #000;
  border-radius: 2px;
  background: none;
  text-align: center;
}
.count-input input:focus {
  outline: none;
}
.count-input .incr-btn {
  display: block;
  position: absolute;
  width: 30px;
  height: 30px;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  line-height: 30px;
  top: 50%;
  right: 0;
  margin-top: -15px;
  text-decoration:none;
}
.count-input .incr-btn:first-child {
  right: auto;
  left: 0;
  top: 46%;
}
.count-input.count-input-sm {
  max-width: 125px;
}
.count-input.count-input-sm input {
  height: 36px;
}
.count-input.count-input-lg {
  max-width: 200px;
}
.count-input.count-input-lg input {
  height: 70px;
  border-radius: 3px;
}
    </style>
</head>
    <body>
       <?php
       
        wish();
        ?> 
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
							$prod_s_desp = $prod_rows['product_s_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$prod_img2 = $prod_rows['product_img2'];
							$prod_img3 = $prod_rows['product_img3'];
                            $dis = $dis + $prod_price;        
								}
							}
			}
        
	?>
        
        <nav class="navbar navbar-inverse" style="background-color:#016579"> 
  <div class="container-fluid">
    
    <ul class="nav navbar-nav" >
      <li class="#"><a href="index.php">Home</a></li>
          <li> <a href="shopping-cart.php">View Your Cart</a></li>
          <li> <a href="wishlist.php">View Wish list</a></li>
        <li> <a href="my_account.php">View Your Account</a></li>
      <li> <a href="contact-us.php">Contact Us</a></li>
      <li><a href="about.html" class="search">About Us</a></li>
    
       
    </ul>
  </div>
</nav>
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
                                                        <span class="editable">Faisal Ali</span>
                                                        </li>
                                                        <li>
                                                        <label>availability:</label>
                                                        <span class="editable instock">in STOCK</span>
                                                        </li>
                                                    </ul>
                                                    <div class="product-discription">
                                                        <div class="product-discription-title">Short Description:</div>
                                                        <p><?php echo $prod_s_desp; ?>
                                                        </p>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <form action="product_detail.php?detail_id=<?php echo $prod_id ?>&add_cart=<?php echo $prod_id ?>" method="post">
                                                        <div class="input-content">
                                                            <label>Qty:</label>
                                                        	<div class='count-input space-bottom'>
                          						      <a class='incr-btn' data-action='decrease' href='#'>–</a>
                                						<input class='quantity' type='text' name='quantity' value='1'/>
                                						<a class='incr-btn' data-action='increase' href='#'>&plus;</a>
                            
														</div>
                                                        </div>
                                                      <input type="submit" name="submit" class="btn btn-button" value="Add to Cart"  style="background-color:orange ; padding:10px ; margin-left:20px" > 
                                                        <a class="btn btn-button gray9 border" href="product_detail.php?detail_id=<?php echo $prod_id ?>&wish=<?php echo $prod_id ?>"><i class="fa fa-heart"></i></a>
                                              </form>
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
        <div class="product-collateral row-fluid padding-45">
                                    <!-- tab -->
                                    <div class="single-product-tab">
                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="active"><a data-target="#home" data-toggle="tab"><span>description</span></a></li>
                                      
                                            <li><a data-target="#messages" data-toggle="tab"><span>review</span></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home">
                                                <div class="single-product-description">
                                                    <?php echo $prod_desp ?>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="messages">
                                                <div class="single-product-description">
                                                    <div class="comments-form">
                                                        <h3 class="block-title">Add a Review</h3>
                                                        <form method="post" action="#" name="comments-form" id="comments-form">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Your name and surname" class="form-control" title="comments-form-name" name="comments-form-name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" placeholder="Your email adress" class="form-control" title="comments-form-email" name="comments-formemail" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea placeholder="Your message" class="form-control" title="comments-form-comments" name="comments-form-comments" rows="6" required></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-button global-bg   white" id="submit" name="review">Review</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- / tab -->
                                    <!-- upsale products -->
                                    <section class="upsale-box padding-45">
                                        <!-- product heading -->
                                        <div class="upsale-hadding product-heading">
                                            <h2 class="no-margin">
                                    <span>Up sale Products</span>
                                    </h2>
                                        </div>
                                        <!-- / product heading -->
                                        <div class="related-prodcuts medium-products product-container padding-30">
                                            <!-- single item -->
                                        <?php upsale_Products();  ?> 
                                            <!-- / single item -->




                                        
                                            
                                        </div>
                                    </section>
                                    <!-- / upsale products -->

                                </div>
                 
            <div><?php include("myfooter.html") ?></div>
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
        
                <script>
                $(".incr-btn").on("click", function (e) {
        var $button = $(this);
        var oldValue = $button.parent().find('.quantity').val();
        $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below 1
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
                $button.addClass('inactive');
            }
        }
        $button.parent().find('.quantity').val(newVal);
        e.preventDefault();
    });
        
        </script>
    </body>


</html>
<?php
    $conn = new mysqli("localhost","root","","my_electronics");
   if(isset($_POST['submit']))
   {
       $p_qty = $_POST['quantity'];
   }
                
	if(isset($_GET['add_cart']))
	{
		$p_id = $_GET['add_cart'];
		$ip_add = getUserIP();
        
		
		$check_prod = "select * from cart where p_id='$p_id' AND ip_add='$ip_add'";
		$check_run = $conn->query($check_prod);
							if($check_run->num_rows > 0)
							{
								echo "<script> alert('You already buy this Product! Please check your cart Details')</script>";
							}
			else
			{
				$add_card = "insert into cart (p_id,ip_add,qty) values ('$p_id','$ip_add','$p_qty')";
				$res_ins = $conn->query($add_card);
				echo "<script> alert('You have Sucessfully Buy this Product!')</script>";
				//echo "<script> window.open('index.php','_self') </script>";
			}
	}
                
    if(isset($_POST['review']))
   {
       echo "<script> alert('You Review has been Submitted! Thank You..!')</script>";
   }
            
    
?>

