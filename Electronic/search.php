<?php 

 $conn = new mysqli("localhost","root","","my_electronics");
$cat= $_POST['name2'];
if($cat=="")
{
    $result = $conn->query("SELECT * FROM products where product_keywords LIKE '%".$_POST["name"]."%'");
}
else{
    $result = $conn->query("SELECT * FROM products where cat_id='".$cat."' and product_keywords LIKE '%".$_POST["name"]."%'");
}
$output = "";
if($result->num_rows > 0)
{
    $output .= '<table class="table table bordered">
                
                ';
   while($row = $result->fetch_assoc())
   {
       $detail_id = $row['product_id'];
      $output .= '<tr>
      <td><a href="product_detail.php?detail_id='.$detail_id.'"><img src="admin_area/product_images/'.$row["product_img1"].'" id="pic" width="60" height="60"></a> </td> <td style="font-size:20px"><a href="product_detail.php?detail_id='.$detail_id.'">' . $row["product_title"] . '</a></td><td> Rs: '.$row["product_price"].'</td>
    
      </tr>
      ';
         
         
         
   }
    echo $output ;
}
else
{
    echo "Not Found";
}




/*
foreach($result as $key) // get table data through for each loop
{
    

?>
<div style="background:white ; border: 1px solid blue">
    <img src="admin_area/product_images/<?php echo $key['product_img1'] ?>" id="pic" width="50" height="50"> <span><?php echo $key['product_title'] ?></span>
  
    
</div>
<?php 

}

 //if we have image in Database so fetch and display like this
    /*<img src="<?php echo $key[image] ?>" id="pic"> */
?>