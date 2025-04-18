<?php 
include("connection.php");
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    if ($product_title == ''or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or $product_price == ''or $product_image1 == ''or $product_image2 == ''or $product_image3 == ''){
        echo "<script>alert('Please fill all the available fields.')</script>";
        exit();
    } else {
move_uploaded_file($temp_image1, "./product_images/$product_image1");
move_uploaded_file($temp_image2, "./product_images/$product_image2");
move_uploaded_file($temp_image3, "./product_images/$product_image3");

        $insert_product = "insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$product_description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

        $result_querry = mysqli_query($conn, $insert_product);
        if ($result_querry){
            echo "<script>alert('Successfully added the product.')</script>";
        
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Insert Products</title>
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- to insert image -->
        <form action="" method="post" enctype="multipart/form-data"> 
            <!-- title -->
            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_title" class=" form-label"   >Product Title:</label>
                <input type="text" name="product_title" id="product_title" class=" form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_description" class=" form-label"   >Product Description:</label>
                <input type="text" name="product_description" id="product_description" class=" form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <!-- keyword -->
            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class=" form-label"   >Product Keywords:</label>
                <input type="text" name="product_keywords" id="product_keywords" class=" form-control" placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>
            <!-- product category -->
            <div class=" form-outline mb-4 w-50 m-auto">
                <select name="product_category" class=" form-select" id="">
                    <option class="" value="">Select a Category</option>
                    <?php
                    // dynamic category
$select_querry = "Select * from `categories`";
$result_querry = mysqli_query($conn,$select_querry);
while($row = mysqli_fetch_assoc($result_querry)) {
    $category_title = $row['category_title'];
    $category_id = $row['category_id'];
    echo "<option value='$category_id'>$category_title</option>";
}

                    ?>

                </select>
            </div>
            <!-- brands -->
            <div class=" form-outline mb-4 w-50 m-auto">
                <select name="product_brands" class=" form-select" id="">
                    <option class="" value="">Select a Brand</option>
                    
                    <?php
$select_querry = "Select * from `brands`";
$result_querry = mysqli_query($conn,$select_querry);
while($row = mysqli_fetch_assoc($result_querry)) {
    $brand_title = $row['brand_title'];
    $brand_id = $row['brand_id'];
    echo "<option value='$brand_id'>$brand_title</option>";
}

                    ?>

                </select>
            </div>
<!-- image -->

            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class=" form-label"   >Image 1:</label>
                <input type="file" name="product_image1" id="product_image1" class=" form-control" required="required">
            </div>
            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class=" form-label"   >Image 2:</label>
                <input type="file" name="product_image2" id="product_image2" class=" form-control"required="required">
            </div>
            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class=" form-label"   >Image 3:</label>
                <input type="file" name="product_image3" id="product_image3" class=" form-control" required="required">
            </div>
<!-- price -->
            <div class=" form-outline mb-4 w-50 m-auto">
                <label for="product_price" class=" form-label"   >Product Price:</label>
                <input type="text" name="product_price" id="product_price" class=" form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>

            <div class=" form-outline mb-4 w-50 m-auto">
                
                <input type="submit" name="insert_product" class=" btn btn-dark mb-3 px-3" value="Insert Product">
            </div>



        </form>
    </div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>