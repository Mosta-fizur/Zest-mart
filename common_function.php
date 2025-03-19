<?php

include("connection.php");

function getproducts(){
    global $conn;
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
        <button class='buy-btn'>Buy Now</button>
      </div>";
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
echo '<li class= ""><a class="dropdown-item" href="">' .$brand_title.'</a>';

}
}

function getcategories(){
    global $conn;
    $select_categories = "Select * from `categories`";
    $result_categories = mysqli_query($conn, $select_categories);
    
while($row_data = mysqli_fetch_assoc($result_categories)) {
$category_title = $row_data["category_title"];
$category_id = $row_data["category_id"];
echo '<li class= ""><a class="dropdown-item" href="">' .$category_title.'</a>';

}
}


?>