<?php @session_start(); ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electronics</title>
    <meta name="keywords" content="Faisal's Store">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon" />
    <!-- Global CSS  -->
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- ui -->
    <link href="assets/plugins/jquery-ui-1.12.0/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <!-- owl carousel -->

    <!-- theme style -->
    <link href="css/themestyles.css" rel="stylesheet" type="text/css">
    <!-- nivo-slider  -->

    <!-- animation -->
   
    <!-- media css -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- magnific popup -->
    <link href="assets/plugins/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
    <!-- font awesome -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         <style>
     
        #result {width: 399px ; padding: 10px ; margin: 0 auto ;  ; display: none ; margin-left: -39px ;background: white ; position: absolute ; z-index: 9999}
           select {border-left:2px solid black ;border-top:none; border-bottom:none; font-size: 18px; height:32px; text-align: center}
    </style>
</head>
<body>
    <!-- start wrapper -->
  <?php 
    cart();
    wish();
?>
            <header>
                <!-- header top bar -->
                <div class="top-bar lagoon-blue-bg">
                    <div class="container">
                        <div class="row">
                            <!-- support -->
                            <div class="col-sm-6 col-md-4 col-lg-4" >
                                <ul>
                                    <li class="header-support">
                                        <a href="contact-us.php" title="" style="color:white ; font-size:17px"><span class="fa fa-phone "></span> 24/7 Free Support</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- / support -->
                            <!--  message -->
                            <div class="col-md-3 col-lg-3 hidden-sm">
                                <div class="header-message" style="margin-left:40px">
                                    <img src="images/bismillah.png">
                                </div>
                            </div>
                            <!-- / message -->
                            <!-- Counntry -->
                            <div class="col-sm-6 col-md-5 col-lg-5 lang-currency">
                                <ul class="nav navbar-nav pull-right">
                                    <!-- langue -->
                                    <li class="list-line dropdown flags">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <img src="assets/image/Pakistan-Flag-icon.png" alt="flag">
                                            <span style="color:white">Pakistan</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu sfmenuffect">
                                            <li>
                                                <a href="#">
                                                    <img src="assets/image/england.png" alt="flag">
                                                    <span>England</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/image/flag.png" alt="flag">
                                                    <span>French</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/image/scotland.png" alt="flag">
                                                    <span>Scotland</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--/ Country -->
                                    <!-- currency 
                                    <li class="list-line dropdown currency">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <i class="fa fa-usd"></i>
                                            <span>usd</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu sfmenuffect">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-eur"></i>
                                                    <span>euro</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-gbp"></i>
                                                    <span>pound</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                     currency -->
                                    <!--  account -->
                                    <li class="list-line dropdown my-account Peel-bg">
                                        <a aria-expanded="false" href="#" data-toggle="dropdown" class="dropdown-toggle">
                                            <i class="fa fa-gear"></i>
                                            <span>my Account</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu sfmenuffect">
                                            <li>
                                                <?php
                                                    if(!isset($_SESSION['customer_email']))
                                                    {
                                                        echo " <a href='checkout.php'>
                                                        <span class='glyphicon glyphicon-log-in'></span><span> login</span>
                                                        </a>";
						                            }
						                            else
						                              {
                                                         echo " <a href='logout.php'>
                                                       <span class='glyphicon glyphicon-log-out'></span> <span>logout</span>
                                                        </a>";
						                              }
    ?>
                                               
                                            </li>
                                            <li>
                                                <a href="checkout.php">
                                                   <span class='glyphicon glyphicon-briefcase'></span> <span>checkout</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shopping-cart.php">
                                                    <span class="glyphicon glyphicon-shopping-cart"> </span> <span>my cart</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.php">
                                                     <span class="glyphicon glyphicon-heart"> </span><span>wishlist </span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <!--  account -->
                                </ul>

                            </div>
                            <!-- / lang currency -->
                        </div>
                    </div>
                </div>
                <!-- / header top bar -->
                <!-- header center -->
                <div class="header-container light-grey-bg">
                    <div class="container">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-sm-4 col-md-4  col-lg-4">
                                <?php include("logo.html"); ?>
                            </div>
                            <!-- / logo -->
                            <!-- search -->
                            <div class="col-sm-4 col-md-4  col-lg-4">
                                <div class="header-search">
                                    <form id="searchbox" action="#" method="post">
                                        <div class="form-search">
                                            <input class="form-control font-capitalize" type="text" placeholder="Enter your keyword..." id="searchp" autocomplete="off">
                                            <button class="white bunker-color-bg">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                        <div class="cat-search" style="margin-top:-36px ; margin-left:210px ; ">
                                            <select id="sa"  class="searchbox">
                                                <option value="">Categories</option>
                                                <option value="1">Laptop</option>
                                                <option value="2">Mobile</option>
                                                <option value="3">Tablet</option>
                                                <option value="4">Computers</option>
                                                <option value="5">LED Tv</option>
                                                <option value="6">Camera</option>
                                                
                                            </select>
                                        </div>
                                    </form>
                                </div>

                            <div>
      <ul id="result" ></ul>
</div>
                            </div>
  <script>
    $(document).ready(function()
    {
        $('#searchp').keyup(function(){
           var text = $(this).val();
           var text2 = $('#sa').val();
            if(text != "")
                {
            $.post("search.php",{name:text,name2:text2},function(data){
                $("#result").css({'display':'block'});
                $("#result").html(data);
                
            });
                }
            else{
                $("#result").css({'display':'none'});
                 $("#result").html('');
            }
        });
        
    });
    </script>
                            <!-- / search -->                            
                            <div  style="position:absolute ; margin-left:820px ; margin-top:14px; ">
                                <span>User:</span>
                                <?php
                                    if(!isset($_SESSION['customer_email']))
                                    {
                                        echo " <img src='customer\customer_photos\user.jpg'  class='img-circle' height='45' style='border:2px solid #016579'>
                                        <span>Guest</span>";
						            }
						            else
						            {
                                         $conn = new mysqli("localhost","root","","my_electronics");
                                        $cus_email = $_SESSION['customer_email'];
                                        $sel_cus = "select * from customers where customer_email='$cus_email' ";
                                        $run_cus = $conn->query($sel_cus);
                                        $res_cus = $run_cus->fetch_assoc();

                                        $cus_id = $res_cus['customer_id'];
                                        $cus_name = $res_cus['customer_name'];
                                        $cus_image = $res_cus['customer_image'];
                                        
                                        echo "<img src='customer/customer_photos/$cus_image'  class='img-circle' height='45' width='45' style='border:2px solid #016579'>
                                        <span>$cus_name </span>";
						            }
                                ?>
                            </div>
                            
                            <!-- header cart -->
                            <div class=" col-sm-4 col-md-4 col-lg-4">
                                <div class="header-cart-mini">
                                    <div class="topcart-mini-container">
                                        <div class="block-cart">
                                            <button class="dropdown-toggle" type="button">
                                                <span class="fa fa-shopping-bag lagoon-blue-bg"></span>
                                                <span class="cart-top-title" >Shopping Cart <span style="margin-left:37px ; color:white ; font-size:16px"> <?php total_Price(); ?> </span> </span>
                                            </button>
                                            <!-- start hidden product-->
                                            <ul class="cart-product-list sfmenuffect">
                               

                                                <?php hidden_cart();  ?>
                                                <li class="item cart-item">
                                                    <div class="top-subtotal">
                                                        <div class="sub-total">
                                                            <label>Sub-Total:</label><span><?php total_Price(); ?></span>
                                                        </div>
                                                         <div class="sub-total">
                                                            <label>Shipping:</label><span>00.000 PKR </span>
                                                        </div>
                                                        <div class="cart-item-total">
                                                            <label>Total:</label><span><?php total_Price(); ?></span>
                                                        </div>
                                                        <div class="buttons">
                                                            <div class="float-right">
                                                                <a class="btn btn-button bunker-color-bg  white view" href="shopping-cart.php">View cart</a>
                                                                <a class="btn btn-button lagoon-blue-bg white checkout" href="checkout.php">checkout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- end hidden product-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- / header cart -->
                            
                        </div>
                    </div>
                </div>
                <!-- / header Container -->
                <!-- header menu -->
                <!-- / header menu -->
            </header>
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
