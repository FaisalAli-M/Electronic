<?php
session_start();

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script> window.open('admin_login.php','_self') </script>";	
	}
	else
	{

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
 <title>Faisal's Electronics </title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="admin.jpg"/>
    <h2>Admin<br>Faisal Ali</h2>
  </header>
	<ul>
   <a href="index.php?insert_products"> <li tabindex="0" class="icon-settings"><span>Insert Products</span></li></a>
   <a href="index.php?view_products"> <li tabindex="0" class="icon-settings"><span>View Products</span></li></a>
   <a href="index.php?insert_cats"> <li tabindex="0" class="icon-settings"><span>Insert Catagory</span></li></a>
   <a href="index.php?view_cats"> <li tabindex="0" class="icon-settings"><span>View Catagories</span></li></a>
    <a href="index.php?insert_Brands"> <li tabindex="0" class="icon-settings"><span>Insert Brand</span></li></a>
    <a href="index.php?view_Brands"> <li tabindex="0" class="icon-settings"><span>View Brands</span></li></a>
    <a href="index.php?view_customers"> <li tabindex="0" class="icon-users"><span>View Customers</span></li></a>
    <a href="index.php?view_orders"> <li tabindex="0" class="icon-settings"><span>View Pending Orders</span></li></a>
    <a href="index.php?view_delivered_orders"> <li tabindex="0" class="icon-settings"><span>View Delivered Payments</span></li></a>
    <a href="index.php?view_mess"> <li tabindex="0" class="icon-settings"><span>View All Messages</span></li></a>
    <a href="index.php?logout"> <li tabindex="0" class="icon-settings"><span>Logout</span></li></a>
  </ul>
</nav>

<main>
<div class="head">
</div>
    <div class="pages" >
        <h2 style="color:white ; text-align:center"> <?php echo @$_GET['loggedin']  ?> </h2>
    <?php
			include("includes/db_con.php");
			if(isset($_GET['insert_products']))
			{
				include("insert_product.php");
			}
			if(isset($_GET['view_products']))
			{
				include("view_products.php");
			}
			if(isset($_GET['edit_product']))
			{
				include("edit_product.php");
			}
			if(isset($_GET['insert_cats']))
			{
				include("insert_catagory.php");
			}
			if(isset($_GET['view_cats']))
			{
				include("view_catagory.php");
			}
			if(isset($_GET['edit_cat']))
			{
				include("edit_catagory.php");
			}
			if(isset($_GET['edit_cat']))
			{
				include("edit_catagory.php");
			}
			if(isset($_GET['insert_Brands']))
			{
				include("insert_brands.php");
			}
			if(isset($_GET['view_Brands']))
			{
				include("view_brands.php");
			}
			if(isset($_GET['edit_brand']))
			{
				include("edit_brand.php");
			}
			if(isset($_GET['view_customers']))
			{
				include("view_customers.php");
			}
			if(isset($_GET['view_orders']))
			{
				include("view_orders.php");
			}
			if(isset($_GET['view_delivered_orders']))
			{
				include("view_delivered_orders.php");
			}
            if(isset($_GET['view_mess']))
			{
				include("view_messages.php");
			}
			if(isset($_GET['logout']))
			{
				include("admin_logout.php");
			}
		
		?>
    </div>
</main>
  
    <script src="js/index.js"></script>

</body>
</html>

<?php
    }
?>