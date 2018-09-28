

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Faisal's Electronics </title>
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/payment_method.css">

 
</head>

<body>
      <?php
    // Get Customer Details from Customer for fill Payment fields
    $conn = new mysqli("localhost","root","","my_electronics");
     
		
		$cus_email = $_SESSION['customer_email'];
		$sel_cus = "select * from customers where customer_email='$cus_email' ";
		$run_cus = $conn->query($sel_cus);
		$res_cus = $run_cus->fetch_assoc();
		
		$cus_id = $res_cus['customer_id'];
		$cus_name = $res_cus['customer_name'];
		$cus_email = $res_cus['customer_email'];
		$cus_pass = $res_cus['customer_pass'];
		$cus_country = $res_cus['customer_country'];
		$cus_city = $res_cus['customer_city'];
		$cus_contact = $res_cus['customer_contact'];
		$cus_address = $res_cus['customer_address'];
		$cus_image = $res_cus['customer_image'];
	


				
        
	?>

				
                <section class="breadcrumb-area padding-30">
                <div class="container">
                    <div class="breadcrumb breadcrumb-box">
                        <ul>
                             <li><a href="index.php"><span ><span>home</span></span></a></li>
                            <li><span><span>user</span></span></li>
                            <li><span>Payment Method</span></li>
                        </ul>
                    </div>
                </div>
            </section>
    <div class="" style="margin-top:100px ; margin-bottom:100px">
  <h2 style="margin-left:60px">Payment Method</h2>
        <h3 style="text-align:center ; margin-top:60px ; margin-bottom:60px">Cash on Delievery</h3>
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
  <form method="post" action="checkout.php?cus_id=<?php echo $cus_id?>" >
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input name="n"  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" value="<?php echo $cus_name ?>"  />
          </div>
          <div class="form-group">
            <label class="control-label">Contact No</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Contact No" value="<?php echo $cus_contact ?>" />
          </div>
          <div >
            <label class="control-label">Delivery Address</label>
            <textarea name="d_add" class="form-control" placeholder="Enter your Complete address where you want to Deliver your order"  ></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" name="next" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
          <div class="form-group">
            <label class="control-label">Your City:</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Contact No" value="<?php echo $cus_city ?>" />
          </div>
          <div class="form-group">
            <label class="control-label">Email Address</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Email Address" value="<?php echo $cus_email ?>"  />
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
            <table class="table">
    <thead>
 
    </thead>
    <tbody>
         
      <tr class="success">
        <td>Total Products</td>
        <td><?php items(); ?></td>
        
      </tr>
      <tr class="danger">
        <td>Shipping Rate</td>
        <td>Free</td>
      
      </tr>
      <tr class="info">
        <td>Total Amount</td>
        <td><?php total_Price(); ?></td>
    

    </tbody>
  </table>
            <button class="btn btn-success btn-lg pull-right" type="submit" name="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>
    
    
    <script>
    $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
    
    </script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    if(empty($_POST['d_add']))
    {
        echo "<script> alert('Delevery Address is Empty...Must Fill Delivery Address') </script>";
    }
    else
    {
        $delivery_email = $_POST['d_add'];
 
if(isset($_GET['cus_id']))
{
    $conn = new mysqli("localhost","root","","my_electronics");
	// Getting customer id
	$customer_id = $_GET['cus_id'];


	// Getting Product Price and no of Itmes
	$ip_add = getUserIP();
	$total = 0;
    $all_product_name = "";
	$total_prod_Price = 0;
    $name = "";
    $products_ids = "";
    $products_qtys = "";
	
	
	$total_items = "select * from cart where ip_add='$ip_add'";
	$res_total_items = $conn->query($total_items);
	
	$status = "pending";
	$invoice_no = mt_rand(); 
	$total_pro = $res_total_items->num_rows;
   
	
	while($items_row = $res_total_items->fetch_assoc())
	{
		$prod_id = $items_row['p_id'];
        $products_qtys .= $items_row['qty'];
        $products_qtys .= ' , ';
		$prod_price = "select * from products where product_id='$prod_id'";
		$res_prod_price = $conn->query($prod_price);
		
		while($p_price = $res_prod_price->fetch_assoc())
		{
		      
			$total_prod_Price += $p_price['product_price'];
            
			$name .= $p_price['product_title'];
			$name .= ' , ';
            $products_ids .= $p_price['product_id'];
			$products_ids .= ' , ';
       
			$total = $total_prod_Price ;
            $all_product_name =  $name;
			
			// here we can also add all products price like this
			/*
				$total_prod_Price = array($p_price['product_price']);
				$sum_price = array_sum($total_prod_Price);
				$total += $total_prod_Price ;
			*/
		}
	}
	// echo $total . " PKR" ; 

	// Getting quantity from cart
	
	$get_quantity = "select * from cart where ip_add='$ip_add'";
	$run_quantity = $conn->query($get_quantity);
    $check_items = $run_quantity->num_rows;
	$res_quantity = $run_quantity->fetch_assoc();

	$qty = $res_quantity['qty'];

		if($qty == 0)
		{
			$qty = 1;
			$sub_total = $total;
		}
		else
		{
			$qty = $qty ; 
			$sub_total = $total * $qty;
		}
    if($check_items == 0){
        echo "<script> alert('Your Cart is Empty.. Please Purchase Something..')</script>";
        echo "<script> window.open('index.php','_self')</script>";
    }
    else{
		// Insert into customer_orders table
		$insert_customer_orders = "insert into customer_orders (customer_id,due_amount,products_name,invoice_no,total_products,order_date,deliver_add,order_status) values ('$customer_id','$sub_total','$all_product_name','$invoice_no','$total_pro',NOW(),'$delivery_email','$status')";
		$run_customer_order = $conn->query($insert_customer_orders);
		if($run_customer_order)
		{
			echo "<script> alert('Order Submitted Sucessfully! Thank You')</script>";
			
							
			 //insert into pending_orders table
			$insert_pending_orders = "insert into pending_orders (customer_id,invoice_no,product_id,qty,delivery_add,order_status) values ('$customer_id','$invoice_no','$products_ids','$products_qtys','$delivery_email','$status')";
			$run_pending_order = $conn->query($insert_pending_orders);
			
			echo "<script> window.open('my_account.php','_self') </script>";
			
			// Clear cart table
				$empty_cart = "delete from cart where ip_add='$ip_add' ";
				$run_empty_cart = $conn->query($empty_cart);
              echo "<script> window.open('index.php','_self')</script>";
		}
        }
}
        
    }
}

?>
