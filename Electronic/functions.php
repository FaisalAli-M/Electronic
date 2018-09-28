<?php

function get_menu_Products(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
				
							$cat = "select * from categories"; 
							$cat_res = $conn->query($cat);
							$f = 0;
							if($cat_res->num_rows > 0)
							{
								while($cat_rows = $cat_res->fetch_assoc())
								{
									$f++;
							$cat_id = $cat_rows['cat_id'];
							$cat_title = $cat_rows['cat_title'];

						
							echo "
							<tr>
                                  <td> 	<li><a href='all_products.php?cat_id=$cat_id' id='$f'> $cat_title </a></li> </td>
                                    
								</tr>
								";
					
								}
					
							}
						
						
					
}

function get_menu_Brands(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
				
							$brand = "select * from brands"; 
							$brand_res = $conn->query($brand);
							$f2 = 10;
							if($brand_res->num_rows > 0)
							{
								while($brand_rows = $brand_res->fetch_assoc())
								{
									$f2++;
							$brand_id = $brand_rows['brand_id'];
							$brand_title = $brand_rows['brand_title'];

						
							echo "
							<tr>
                                <td>   	<li><a href='all_products.php?brand_id=$brand_id  ' id='$f2'> $brand_title </a></li> </td>
                                   
                                    
								</tr>
								";
					
								}
					
							}
						
						
					
}




function get_lap_Products(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
					if(!isset($_GET['cats']))
					{
						if(!isset($_GET['brands']))
						{
							$product = "select * from products where cat_id='1' order by rand() LIMIT 0,4"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{
								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$dis = $prod_price + 1000 ;
						
							echo "
								<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='index.php?add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='index.php?wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>
								";
						$dis = 0;
								}
					
							}
						}
						
					}
}

// Get Moblie Product index
function get_mob_Products(){
        $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
					if(!isset($_GET['cats']))
					{
						if(!isset($_GET['brands']))
						{
							$product = "select * from products where cat_id='2' order by rand() LIMIT 0,4"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{

								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$dis = $prod_price + 2000 ;
							echo "
								<div class='single-product2'>
                                <div class='product-f-image'>
                                    <img src='admin_area/product_images/$prod_img1' alt=''>
                                    <div class='product-hover'>
                                        <a href='index.php?add_cart=$prod_id' class='add-to-cart-link'><i class='fa fa-shopping-cart'></i> Add to cart</a>
                                        <a href='product_detail.php?detail_id=$prod_id' class='view-details-link'><i class='fa fa-link'></i> See details</a>
                                        <a href='index.php?wish=$prod_id' class='view-details-link2'><i class='fa fa-heart-o'></i> Wish</a>
                                    </div>
                                </div>
                                
                                <h2><a href='product_detail.php?detail_id=$prod_id'>$prod_title</a></h2>
                                  <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                <div class='product-carousel-price'>
                                    <ins>RS: $prod_price</ins> <del>Rs: $dis</del>
                                </div> 
                            </div>
								";
						$dis = 0;
								}
					
							}
						}
						
					}
}
// get tv products index
function get_tv_Products(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
					if(!isset($_GET['cats']))
					{
						if(!isset($_GET['brands']))
						{
							$product = "select * from products where cat_id='5' order by rand() LIMIT 0,4"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{
								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$dis = $prod_price + 1000 ;
						
							echo "
								<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='index.php?add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='index.php?wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>
								";
						$dis = 0;
								}
					
							}
						}
						
					}
}
// get tablets products index
function get_tab_Products(){
        $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
					if(!isset($_GET['cats']))
					{
						if(!isset($_GET['brands']))
						{
							$product = "select * from products where cat_id='3' order by rand() LIMIT 0,4"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{
								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$dis = $prod_price + 3000 ;
							echo "
								<div class='single-product2'>
                                <div class='product-f-image'>
                                    <img src='admin_area/product_images/$prod_img1' alt=''>
                                    <div class='product-hover'>
                                        <a href='index.php?add_cart=$prod_id' class='add-to-cart-link'><i class='fa fa-shopping-cart'></i> Add to cart</a>
                                        <a href='product_detail.php?detail_id=$prod_id' class='view-details-link'><i class='fa fa-link'></i> See details</a>
                                        <a href='index.php?wish=$prod_id' class='view-details-link2'><i class='fa fa-heart-o'></i> Wish</a>
                                    </div>
                                </div>
                                
                                <h2><a href='product_detail.php?detail_id=$prod_id'>$prod_title</a></h2>
                                  <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                <div class='product-carousel-price'>
                                    <ins>Rs: $prod_price</ins> <del>Rs: $dis</del>
                                </div> 
                            </div>
								";
						$dis = 0;
								}
					
							}
						}
						
					}
}

// get tv products index
function get_cam_Products(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
					if(!isset($_GET['cats']))
					{
						if(!isset($_GET['brands']))
						{
							$product = "select * from products where cat_id='6' order by rand() LIMIT 0,4"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{
								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$dis = $prod_price + 1000 ;
						
							echo "
								<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='index.php?add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='index.php?wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>
								";
						$dis = 0;
								}
					
							}
						}
						
					}
}
//vertical navigation all Product
function all_prod_nav_Brands(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
				
							$brand = "select * from brands"; 
							$brand_res = $conn->query($brand);



							if($brand_res->num_rows > 0)
							{
								while($brand_rows = $brand_res->fetch_assoc())
								{
							$brand_id = $brand_rows['brand_id'];
							$brand_title = $brand_rows['brand_title'];

						
							echo "
										<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordian' href='#$brand_title'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											$brand_title
										</a>
									</h4>
								</div>
								<div id='$brand_title' class='panel-collapse collapse'>
									<div class='panel-body'>
										<ul> " ; 
								
							$cat = "select * from categories"; 
							$cat_res = $conn->query($cat);
								while($cat_rows = $cat_res->fetch_assoc())
								{
							$cat_id = $cat_rows['cat_id'];
							$cat_title = $cat_rows['cat_title'];

echo "
											<li><a href='all_products.php?brand_c_id=$brand_id&cat_b_id=$cat_id'>$cat_title </a></li>
											 ";
										}
									
echo"
										</ul>
									</div>
								</div>
							</div>
								";
					
								}
					
							}
						
						
					
}
// get catagory products all products
function get_catagory_Products(){
					$conn = new mysqli("localhost","root","","my_electronics");
					if(isset($_GET['cat_id']))
					{
						$cat_id = $_GET['cat_id'];
							$catagory_product = "select * from products where cat_id='$cat_id' "; 
							$catagory_prod_res = $conn->query($catagory_product);
							if($catagory_prod_res->num_rows == 0)
							{
								echo "<h1> No Catagory Products Found  </h1>";
							}
							if($catagory_prod_res->num_rows > 0)
							{
								while($catagory_prod_rows = $catagory_prod_res->fetch_assoc())
								{
							$prod_id = $catagory_prod_rows['product_id'];
							$prod_title = $catagory_prod_rows['product_title'];
							$prod_cat = $catagory_prod_rows['cat_id'];
							$prod_brand = $catagory_prod_rows['brand_id'];
							$prod_price = $catagory_prod_rows['product_price'];
							$prod_desp = $catagory_prod_rows['product_desp'];
							$prod_img1 = $catagory_prod_rows['product_img1'];
						$dis = $prod_price + 1000 ;
								echo "
							<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='all_products.php?cat_id=$cat_id&add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='all_products.php?cat_id=$cat_id&wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>
								";
						$dis = 0;
						
								}
					
							}
						
						
					}
}
// get brand products all products
function get_brand_Products(){
					$conn = new mysqli("localhost","root","","my_electronics");
					if(isset($_GET['brand_id']))
					{
						$brand_id = $_GET['brand_id'];
							$brand_product = "select * from products where brand_id='$brand_id' "; 
							$brand_prod_res = $conn->query($brand_product);
							if($brand_prod_res->num_rows == 0)
							{
								echo "<h1> No Related Brand Products Found  </h1>";
							}
							if($brand_prod_res->num_rows > 0)
							{
								while($brand_prod_rows = $brand_prod_res->fetch_assoc())
								{
							$prod_id = $brand_prod_rows['product_id'];
							$prod_title = $brand_prod_rows['product_title'];
							$prod_cat = $brand_prod_rows['cat_id'];
							$prod_brand = $brand_prod_rows['brand_id'];
							$prod_price = $brand_prod_rows['product_price'];
							$prod_desp = $brand_prod_rows['product_desp'];
							$prod_img1 = $brand_prod_rows['product_img1'];
						$dis = $prod_price + 1000 ;
								echo "
								<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='all_products.php?brand_id=$brand_id&add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='all_products.php?brand_id=$brand_id&wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>
								";
						$dis = 0;
								
						
								}
					
							}
						
						
					}
}


//Left Navigation Brands Catagory Products
function get_brand_Cat_Products(){
					$conn = new mysqli("localhost","root","","my_electronics");
					if(isset($_GET['brand_c_id']) and isset($_GET['cat_b_id']))
					{
						$brand_c_id = $_GET['brand_c_id'];
						$cat_b_id = $_GET['cat_b_id'];
							$brand_cat_product = "select * from products where brand_id='$brand_c_id' AND cat_id='$cat_b_id' "; 
							$brand_cat_prod_res = $conn->query($brand_cat_product);
							if($brand_cat_prod_res->num_rows == 0)
							{
								echo "<h1> No Related Brand Products Found  </h1>";
							}
							if($brand_cat_prod_res->num_rows > 0)
							{
								while($brand_cat_prod_rows = $brand_cat_prod_res->fetch_assoc())
								{
							$prod_id = $brand_cat_prod_rows['product_id'];
							$prod_title = $brand_cat_prod_rows['product_title'];
							$prod_cat = $brand_cat_prod_rows['cat_id'];
							$prod_brand = $brand_cat_prod_rows['brand_id'];
							$prod_price = $brand_cat_prod_rows['product_price'];
							$prod_desp = $brand_cat_prod_rows['product_desp'];
							$prod_img1 = $brand_cat_prod_rows['product_img1'];
						$dis = $prod_price + 1000 ;
								echo "
								<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='all_products.php?brand_c_id=$brand_c_id&cat_b_id=$cat_b_id&add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='all_products.php?brand_c_id=$brand_c_id&cat_b_id=$cat_b_id&wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>
								";
						$dis = 0;
								
						
								}
					
							}
						
						
					}
}

function upsale_Products(){
    $conn = new mysqli("localhost","root","","my_electronics");
					//global $conn;
							$b_id = $_GET['detail_id'];
							$product = "select * from products order by rand() LIMIT 0,6"; 
							$prod_res = $conn->query($product);
							if($prod_res->num_rows > 0)
							{
								while($prod_rows = $prod_res->fetch_assoc())
								{
							$prod_id = $prod_rows['product_id'];
							$prod_title = $prod_rows['product_title'];
							$prod_cat = $prod_rows['cat_id'];
							$prod_brand = $prod_rows['brand_id'];
							$prod_price = $prod_rows['product_price'];
							$prod_desp = $prod_rows['product_desp'];
							$prod_img1 = $prod_rows['product_img1'];
							$dis = $prod_price + 4000 ;
						
							echo "
								 
								<div class='product-item'>
                            <div class='product-item-img'>
                                <a href='#' title='product image'>
                                    <img src='admin_area/product_images/$prod_img1' alt='product image' width='250' height='270'/>
                                </a>
                                <div class='item-lable'>
                                    <span class='lable-new'>new</span>
                                    <span class='lable-sale'>sale</span>
                                </div>
                                <div class='hover-box'>
                                   <a href='product_detail.php?detail_id=$b_id&add_cart=$prod_id' > <button title='Add to Cart' data-placement='top' data-toggle='tooltip' type='button' class='btn btn-button cart-button lagoon-blue-bg'><i class='fa fa-shopping-basket'></i></button> </a>
                                    <a href='product_detail.php?detail_id=$prod_id' title='Search' data-placement='top' data-toggle='tooltip' class='btn btn-button button-search lagoon-blue-bg'><i class='fa fa-search'></i></a>
                                    <a href='product_detail.php?detail_id=$b_id&wish=$prod_id' title='Wishlist' data-placement='top' data-toggle='tooltip' class='btn btn-button button-wishlist lagoon-blue-bg'><i class='fa fa-heart'></i></a>
                                    
                                </div>
                            </div>

                            <div class='item-bottom'>
                                <div class='item-content'>
                                    <div class='product-name'><a href='product_detail.php?detail_id=$prod_id'>$prod_title </a></div>
                                    <div class='ratting-box'>
                                        <div class='rating'>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star active'></span>
                                            <span class='star-half-o'></span>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <span class='new-price'>Rs $prod_price</span>
                                        <span class='old-price'>Rs $dis </span>
                                    </div>
                                </div>
                            </div>
                    </div>								";
						$dis = 0;
								}
					
							}
					
}


// get user id adrdress
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


// add products into cart
function cart(){
	$conn = new mysqli("localhost","root","","my_electronics");
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
				$add_card = "insert into cart (p_id,ip_add,qty) values ('$p_id','$ip_add','1')";
				$res_ins = $conn->query($add_card);
				echo "<script> alert('You have Sucessfully Buy this Product!')</script>";
				//echo "<script> window.open('index.php','_self') </script>";
			}
	}
}

//add products into wish list
function wish(){
	$conn = new mysqli("localhost","root","","my_electronics");
	if(isset($_GET['wish']))
	{
		$p_id = $_GET['wish'];
		$ip_add = getUserIP();
		
		$check_prod = "select * from wish where p_id='$p_id' AND ip_add='$ip_add'";
		$check_run = $conn->query($check_prod);
							if($check_run->num_rows > 0)
							{
								echo "<script> alert('You already add this Product into Wish List! Please check your wish List')</script>";
							}
			else
			{
				$add_card = "insert into wish (p_id,ip_add) values ('$p_id','$ip_add')";
				$res_ins = $conn->query($add_card);
				echo "<script> alert('You have Sucessfully add this Product into Your Wish List!')</script>";
				//echo "<script> window.open('index.php','_self') </script>";
			}
	}
}


// Get Total Prodtcs Price product table using cart
function total_Price(){
		$conn = new mysqli("localhost","root","","my_electronics");
	$ip_add = getUserIP();
	$total = 0;
	$total_prod_Price = 0;
	
	$total_items = "select * from cart where ip_add='$ip_add'";
	$res_total_items = $conn->query($total_items);
	
	while($items_row = $res_total_items->fetch_assoc())
	{
		$prod_id = $items_row['p_id'];
		$prod_qty = $items_row['qty'];
		
		$prod_price = "select * from products where product_id='$prod_id'";
		$res_prod_price = $conn->query($prod_price);
		
		while($p_price = $res_prod_price->fetch_assoc())
		{
		
			$total_prod_Price += $p_price['product_price'] * $prod_qty ;
			
			
			$total = $total_prod_Price ;
			
			// here we can also add all products price like this
			/*
				$total_prod_Price = array($p_price['product_price']);
				$sum_price = array_sum($total_prod_Price);
				$total += $total_prod_Price ;
			*/
		}
	}
	echo $total . " PKR" ; 
}
// Cart Page Users Cart 
function cart_get(){
	$ip_add = getUserIP();
	$conn = new mysqli("localhost","root","","my_electronics");
						$total = 0;
					$total_prod_Price = 0;
	
					$total_items = "select * from cart where ip_add='$ip_add'";
					$res_total_items = $conn->query($total_items);
	
					while($items_row = $res_total_items->fetch_assoc())
					{
						$prod_id = $items_row['p_id'];
						$prod_qty = $items_row['qty'];
		
						$prod_price = "select * from products where product_id='$prod_id'";
						$res_prod_price = $conn->query($prod_price);
		
						while($p_items = $res_prod_price->fetch_assoc())
						{
							$product_id = $p_items['product_id'];
							$product_title = $p_items['product_title'];
							$product_image = $p_items['product_img1'];
							$product_price = $p_items['product_price'];
							
							
							$total_prod_Price += $p_items['product_price'];
						
						$total = $total_prod_Price ;
						$total_qty_price = $product_price * $prod_qty; 

echo "
<tr>
                                                            <td class='text-center'>
                                                                <a href='#'>
                                                                   <img alt='' src='admin_area/product_images/$product_image' width='80' height='80'>
                                                                </a>
                                                            </td>
                                                            <td class='text-left'>
                                                                <ul>
                                                                    <li><a href='#'>$product_title</a></li>
                                                                    <li><a href='#'></a></li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                            <a href='shopping-cart.php?del_id=$product_id' >
          <span class='glyphicon glyphicon-remove-circle'></span> Remove
        </a>
                                                            </td>
                                                            <td class='text-left'>
                                                       			<span>$prod_qty</span>
                                                            </td>
                                                            <td class='text-right'> Rs $product_price</td>
                                                            <td class='text-right'>Rs $total_qty_price </td>
                                                        </tr>
                                                        

"; 

					}
		
	

				}
}


//delete Cart Product 
function del_cart()
{
	    $conn = new mysqli("localhost","root","","my_electronics");
				if(isset($_GET['del_id']))
					{
                            $del_id = $_GET['del_id'];
							$del_prod = "delete from cart where p_id='$del_id'";
							$run_del = $conn->query($del_prod);
							if($run_del)
							{
								echo "<script> window.open('shopping-cart.php','_self') </script>";
							}
						
					}
}

function hidden_cart(){
	$ip_add = getUserIP();
	$conn = new mysqli("localhost","root","","my_electronics");
						$total = 0;
					$total_prod_Price = 0;
	
					$total_items = "select * from cart where ip_add='$ip_add'";
					$res_total_items = $conn->query($total_items);
	
					while($items_row = $res_total_items->fetch_assoc())
					{
						$prod_id = $items_row['p_id'];
						$prod_qty = $items_row['qty'];
		
						$prod_price = "select * from products where product_id='$prod_id'";
						$res_prod_price = $conn->query($prod_price);
		
						while($p_items = $res_prod_price->fetch_assoc())
						{
							$product_id = $p_items['product_id'];
							$product_title = $p_items['product_title'];
							$product_image = $p_items['product_img1'];
							$product_price = $p_items['product_price'];
							
							
							$total_prod_Price += $p_items['product_price'];
						
							$total = $total_prod_Price ;
							$total_qty_price = $product_price * $prod_qty; 

						echo "
							<li class='item cart-item'>
                                                    <a href='#'>
                                                        <img src='admin_area/product_images/$product_image' alt='' width='80' height='90' />
                                                    </a>
                                                    <div class='product-details'>
                                                        <div class='product-details-inner'>

                                                            <p class='product-name'><a href='#'>$product_title</a></p>
                                                            <a href='?del_p_id=$prod_id' title=''><span class='fa fa-remove'></span></a>
                                                            <div class='ratting-box'>
                                                                <div class='rating'>
                                                                    <span class='star active'></span>
                                                                    <span class='star active'></span>
                                                                    <span class='star active'></span>
                                                                    <span class='star active'></span>
                                                                    <span class='star-o'></span>
                                                                </div>
                                                            </div>
                                                            <div style='color: red'> Qty: <span> $prod_qty </span> </div>
                                                            <div class='product-price'>
                                                                <span class='new-price'>Price: $product_price PKR</span>
                                                                <span class='old-price'>$product_price PKR</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
"; 

					}

				}
}

// delete hidden cart items
function del_hidden_cart_index()
{
	    $conn = new mysqli("localhost","root","","my_electronics");
				if(isset($_GET['del_p_id']))
					{
                            $del_id = $_GET['del_p_id'];
							$del_prod = "delete from cart where p_id='$del_id'";
							$run_del = $conn->query($del_prod);
							if($run_del)
							{
								echo "<script> window.open('index.php','_self') </script>";
							}
						
					}
}

// Wish Page Users wish 
function get_wish(){
	$ip_add = getUserIP();
	$conn = new mysqli("localhost","root","","my_electronics");
				
	
					$total_items = "select * from wish where ip_add='$ip_add'";
					$res_total_items = $conn->query($total_items);
	
					while($items_row = $res_total_items->fetch_assoc())
					{
						$prod_id = $items_row['p_id'];
						
		
						$prod_price = "select * from products where product_id='$prod_id'";
						$res_prod_price = $conn->query($prod_price);
		
						while($p_items = $res_prod_price->fetch_assoc())
						{
							$product_id = $p_items['product_id'];
							$product_title = $p_items['product_title'];
							$product_image = $p_items['product_img1'];
							$product_price = $p_items['product_price'];
							

echo "
                                                    <tr>
                                                        <td class='text-center'>
                                                            <a href='#'>
                                                                <img src='admin_area/product_images/$product_image' alt='' width='80' height='90'/>
                                                            </a>
                                                        </td>
                                                        <td class='text-left'>
                                                            <ul>
                                                                <li><a href='#'>$product_title</a></li>
                                                            </ul>
                                                        </td>
                                                        <td class='text-left'>Rs $product_price</td>
                                                        <td class='text-left'>In Stock</td>
                                                        <td class='text-right new'><span class='new'>Rs $product_price</span></td>
                                                        <td class='text-right'>
                                                            <div class='float-right'>
                                                                <a href='wishlist.php?add_cart=$product_id&del_id=$product_id' class='btn btn-button global-bg white' title='Shopping Cart' data-toggle='tooltip' data-placement='top'><span class='fa fa-shopping-cart'></span></a>
                                                                <a href='wishlist.php?del_id=$product_id' class='btn btn-button global-bg white' title='Remove' data-toggle='tooltip' data-placement='top'><span class='fa fa-remove'></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                        

"; 

					}
				}
}

function del_wish()
{
	    $conn = new mysqli("localhost","root","","my_electronics");
				if(isset($_GET['del_id']))
					{
                            $del_id = $_GET['del_id'];
							$del_prod = "delete from wish where p_id='$del_id'";
							$run_del = $conn->query($del_prod);
							if($run_del)
							{
								echo "<script> window.open('wishlist.php','_self') </script>";
							}
						
					}
}


// Get Total No Products from Cart
function items(){
	   $conn = new mysqli("localhost","root","","my_electronics");
$ip_add = getUserIP();
		$get_items = "select * from cart where ip_add='$ip_add'";
		$res_item = $conn->query($get_items);
		$count_items = $res_item->num_rows;
		echo $count_items;
	}
?>
