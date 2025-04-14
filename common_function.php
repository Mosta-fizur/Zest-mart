<?php

include("connection.php");

function getproducts(){
    global $conn;
    /// condition to check issset or not
    if(!isset($_GET['category'])){
if(!isset($_GET['brand'])){


    
$select_querry = "Select * from `products` order by rand() limit 0,12";
$result_querry = mysqli_query($conn, $select_querry);
// $row = mysqli_fetch_assoc($result_querry);
// echo $row['product_title'];
while($row = mysqli_fetch_assoc($result_querry)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
$brand_id = $row['brand_id'];
echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
        <img class='img-fluid mb-3' src='./product_images/$product_image1' alt=''>

        <h5 class='p-name'>
          $product_title
        </h5>
        <p>$product_description</p>
        
        <h4>
          $product_price 
        </h4>
        <a href='shop.php?add_to_cart=$product_id' class='btn btn-secondary'>Buy Now</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
      </div>";
      
}

}
}
}

// getting unique categories
function get_unique_categories(){
  global $conn;
  /// condition to check issset or not
  if(isset($_GET['category'])){

$category_id = $_GET['category'];

  
$select_querry = "Select * from `products` where category_id = $category_id";
$result_querry = mysqli_query($conn, $select_querry);
$number_of_rows = mysqli_num_rows($result_querry);
if($number_of_rows == 0){
  echo "<h2 class='text-center text-danger'>Out of Stock.</h2>";
}

// $row = mysqli_fetch_assoc($result_querry);
// echo $row['product_title'];
while($row = mysqli_fetch_assoc($result_querry)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
$brand_id = $row['brand_id'];
echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3' src='./product_images/$product_image1' alt=''>

      <h5 class='p-name'>
        $product_title
      </h5>
      <p>$product_description</p>
      <h4>
        $product_price
      </h4>
      <a href='shop.php?add_to_cart=$product_id' class='btn btn-secondary'>Buy Now</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
    </div>";
    
}

}
}



// getting unique brands
function get_unique_brands(){
  global $conn;
  /// condition to check issset or not
  if(isset($_GET['brand'])){

$brand_id = $_GET['brand'];

  
$select_querry = "Select * from `products` where brand_id = $brand_id";
$result_querry = mysqli_query($conn, $select_querry);
$number_of_rows = mysqli_num_rows($result_querry);
if($number_of_rows == 0){
  echo "<h2 class='text-center text-danger'>This brand is not available.</h2>";
}

// $row = mysqli_fetch_assoc($result_querry);
// echo $row['product_title'];
while($row = mysqli_fetch_assoc($result_querry)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
$brand_id = $row['brand_id'];
echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3' src='./product_images/$product_image1' alt=''>

      <h5 class='p-name'>
        $product_title
      </h5>
      <p>$product_description</p>
      <h4>
        $product_price
      </h4>
      <a href='shop.php?add_to_cart=$product_id' class='btn btn-secondary'>Buy Now</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
    </div>";
    
}

}
}




function getbrands(){
    global $conn;
    $select_brands = "Select * from `brands`";
    $result_brands = mysqli_query($conn, $select_brands);
    // $row_data = mysqli_fetch_assoc($result_brands);
    // echo"".$row_data["brand_title"];
while($row_data = mysqli_fetch_assoc($result_brands)) {
$brand_title = $row_data["brand_title"];
$brand_id = $row_data["brand_id"];
echo "<li class= ><a class='dropdown-item' href='shop.php?brand=$brand_id'> $brand_title</a></li>";

}
}

function getcategories(){
    global $conn;
    $select_categories = "Select * from `categories`";
    $result_categories = mysqli_query($conn, $select_categories);
    
while($row_data = mysqli_fetch_assoc($result_categories)) {
$category_title = $row_data["category_title"];
$category_id = $row_data["category_id"];

echo "<li class= ><a class='dropdown-item' href='shop.php?category=$category_id'> $category_title</a></li>";

}
}


// get seaching products
function search_product(){

  global $conn;
  if(isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data']; 

$search_query = "Select * from `products` where product_keywords like '%$search_data_value%'"; // displaying art any position
$result_querry = mysqli_query($conn, $search_query);
// $row = mysqli_fetch_assoc($result_querry);
// echo $row['product_title'];
$number_of_rows = mysqli_num_rows($result_querry);
if($number_of_rows == 0){
  echo "<h2 class='text-center text-danger'>No result match.</h2>";
}

while($row = mysqli_fetch_assoc($result_querry)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
$brand_id = $row['brand_id'];
echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3' src='./product_images/$product_image1' alt=''>

      <h5 class='p-name'>
        $product_title
      </h5>
      <p>$product_description</p>
      <h4>
        $product_price
      </h4>
      <a href='shop.php?add_to_cart=$product_id' class='btn btn-secondary'>Buy Now</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
    </div>";
    
}

}
}



// view details
function view_details(){
  global $conn;
  /// condition to check issset or not
  if(isset($_GET['product_id'])){
  if(!isset($_GET['category'])){
if(!isset($_GET['brand'])){

$product_id = $_GET['product_id'];
  
$select_querry = "Select * from `products` where product_id= $product_id";
$result_querry = mysqli_query($conn, $select_querry);

while($row = mysqli_fetch_assoc($result_querry)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_image2 = $row['product_image2'];
$product_image3 = $row['product_image3'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
$brand_id = $row['brand_id'];
echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3' src='./product_images/$product_image1' alt=''>

      <h5 class='p-name'>
        $product_title
      </h5>
      <p>$product_description</p>
      <h4>
        $product_price
      </h4>
      <a href='shop.php?add_to_cart=$product_id' class='btn btn-secondary'>Buy Now</a>
    <a href='shop.php' class='btn btn-dark'>Go Back</a>
    </div>
    <div class='product text-center col-lg-8 col-md-8 col-12'>
    <div class='container text-center '>
      <h3>
        Related Products
      </h3>
      <hr class='mx-auto'>
      <div class='row'>
        <div class='col-6'>
        <img src='./product_images/$product_image2' class='card-img-top' alt=''>
      </div>
      <div class='col-6'>
        <img src='./product_images/$product_image3' class='card-img-top' alt=''>
      </div>
      </div>
      
    </div>

    </div>";
    
}

}
}
}
}


//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


// cart function
function cart() {
if(isset($_GET['add_to_cart'])) {
  global $conn;
  $get_ip_add = getIPAddress();
  $get_product_id = $_GET['add_to_cart'];
  $select_query = "Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
  $result_querry = mysqli_query($conn, $select_query);

  $number_of_rows = mysqli_num_rows($result_querry);
if($number_of_rows > 0){
  echo "<script>alert('This item is already present inside the cart.')</script>";
  echo "<script>window.open('shop.php','_self')</script>"; //to open int he sametab
}
else{
  $insert_query = "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_add',0)";
  $result_querry = mysqli_query($conn, $insert_query);
  echo "<script>alert('Item added to the cart.')</script>";
  echo "<script>window.open('shop.php','_self')</script>"; //to open int he sametab

}



}
}

/// function to get cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])) {
    global $conn;
    $get_ip_add = getIPAddress();
    
    $select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query = mysqli_query($conn, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);
  
  }
  else{
    global $conn;
    $get_ip_add = getIPAddress();
    
    $select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query = mysqli_query($conn, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);
  
  }
  echo $count_cart_items;
  }


  /// total price
  function total_cart_price(){
    global $conn;
    $get_ip_add = getIPAddress();
    $total = 0;
    $cart_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
    $result = mysqli_query($conn, $cart_query);
    while( $row = mysqli_fetch_array($result) ) {
      $product_id = $row['product_id'];
      $select_products = "Select * from `products` where product_id='$product_id'";
      $result_products = mysqli_query($conn, $select_products); // executeq
      while($row_product_price = mysqli_fetch_array($result_products)) {
        $product_price = array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total += $product_values;
      }

    }
    echo $total;

  }
?>