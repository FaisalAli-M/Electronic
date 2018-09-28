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
            <section class="breadcrumb-area padding-30">
                <div class="container">
                    <div class="breadcrumb breadcrumb-box">
                        <ul>
                             <li><a href="#"><span ><span>home</span></span></a></li>
                            <li><a href="#"><span><span>user</span></span></a></li>
                            <li><span>contact</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- / breadcrumb -->
            
            <!-- Contact -->
            <section class="main-page container">
                <div class="main-container col1-layout">
                    <div class="main">
                        <div class="col-main">
                            <section class="contact-us-area">
                                <div class="contact-box">
                                    <div class="page-title ">
                                        <span>Contact Us</span>
                                    </div>
                                   
                                     <!-- contact details -->
                                    <div class="contact-details marging-30">
                                       
                                         <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <div class="contact-form">
                                   <div class="comment-respond">
                                        <div class="comment-respond-inner">
                                            <div class="hadding"><span>Leave a Comment</span></div>
                                            <form method="post" action="contact-us.php" class="comment-form respond-form">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 comment-form-name">
                                                        <input type="text" value="" class="form-control border-radius" placeholder="Your Name:" name="author_name" id="author" required>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 comment-form-email">
                                                        <input type="email" value="" class="form-control border-radius" placeholder="Email:" name="author_email" id="email" required>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                                        <div class="comment-form-comment">
                                                            <textarea rows="8" cols="40" name="author_comment" id="comment" placeholder="Comment:" class="form-control border-radius" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-submit">
                                                    <div class="button-set padding-30">
                                                        <button  type="submit" name="submit" class="btn btn-button global-bg white">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="contact-box text-center">
                                    <div class="page-hadding product-hadding">
                                        <h2 class="no-margin">
                                            <span class="text-bold">Contact INFO</span>
                                        </h2>
                                    </div>
                                    <div class="contact-info">
                                        <div class="hotline contact-info-box">
                                            <i class="fa fa-tty contact-icon"></i>
                                            <span><strong>Hotline</strong></span>
                                            <ul>
                                               <li><i class="fa fa-phone"></i><span>Phone: +0092 347 2503703</span></li>
                                               <li><i class="fa fa-phone"></i><span>Phone: +0092 345 2503703</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="contact-info">
                                        <div class="hotline contact-info-box">
                                            <i class="fa fa-envelope-o contact-icon"></i>
                                            <span><strong>email</strong></span>
                                            <ul>
                                               <li><i class="fa fa-envelope-o"></i><span>faisal.ali.aptechnn@gmail.com</span></li>
                                               <li><i class="fa fa-envelope-o"></i><span>faisalali12329@gmail.com</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="contact-info">
                                        <div class="hotline contact-info-box">
                                            <i class="fa fa-envelope-o contact-icon"></i>
                                            <span><strong>address</strong></span>
                                            <ul>
                                               <li><i class="fa fa-map-marker"></i><span>Aptech North Nazimabad</span></li>
                                               <li><i class="fa fa-map-marker"></i><span>Kda Flat Surjani Town , Karachi</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                                    <!-- / contact details -->
                                     <!-- maps -->
                                    <div class="contact-map padding-45">
                                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                                        <div style='overflow:hidden;'>
                                            <div id='gmap_canvas' style="height:440px;width:100%;"></div>
                                            <style type="text/css">
                                                #gmap_canvas img {
                                                    max-width: none!important;
                                                    background: none!important
                                                }
                                            </style>
                                        </div>
                                        <script type='text/javascript'>
                                            function init_map() {
                                                var myOptions = {
                                                    zoom: 10,
                                                    center: new google.maps.LatLng(51.5073509, -0.12775829999998223),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                map = new google.maps.Map(document.getElementById('gmap_canvas'),
                                                    myOptions);
                                                marker = new google.maps.Marker({
                                                    map: map,
                                                    position: new google.maps.LatLng(51.5073509, -0.12775829999998223)
                                                });
                                                infowindow = new google.maps.InfoWindow({
                                                    content: '<strong>Title</strong><br>KDA Flat Surjani Town<br>'
                                                });
                                                google.maps.event.addListener(marker, 'click', function() {
                                                    infowindow.open(map, marker);
                                                });
                                                infowindow.open(map, marker);
                                            }
                                            google.maps.event.addDomListener(window, 'load', init_map);
                                        </script>
                                        <p class="padding-top-product">Reliable Electronics is one of the biggest platforms that caters Online Shopping in Pakistan. All hail the online one-stop- shop! We have a crystal clear timeline of brilliant trust flow and perpetual love from our customers of three years in the e-commerce industry. Whether it be your mobile phone, laptop, , camera or any other gadget—we have got it all. That too, cent per cent original. </p>
                                    </div>
                                     <!-- / maps -->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact -->
          
		</div>
<!-- Navigation End -->
            <!-- / header -->
          
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
    if(isset($_POST['submit']))
    {
        $author_name = $_POST['author_name'];
        $author_email = $_POST['author_email'];
        $author_comment = $_POST['author_comment'];
        
      	$conn = new mysqli("localhost","root","","my_electronics");
        $insert = "insert into contact (author_name,author_email,author_comment) values ('$author_name','$author_email','$author_comment')";
        $run = $conn->query($insert);
        if($run){
            echo "<script> alert('Your Comment Has been Received Sucessfully! Thank You') </script>";
        }
    }
    
?>