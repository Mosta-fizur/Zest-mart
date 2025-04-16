<?php

if (isset($_GET['edit_products'])) {

    $edit_id = $_GET['edit_products'];
    $get_data = "Select * from `products` where product_id= '$edit_id'";
    $result = mysqli_query($conn, $get_data);
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];

    $product_keywords = $row['product_keywords'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
    // category id fetch
    $select_category = "SELECT * FROM `categories` WHERE category_id='$category_id'";
    $result_category = mysqli_query($conn, $select_category);
    $row_category = mysqli_fetch_assoc($result_category);
    $category_title = $row_category['category_title'];
    // echo $category_title;

    // brand id fetch
    $select_brand = "SELECT * FROM `brands` WHERE brand_id='$brand_id'";
    $result_brand = mysqli_query($conn, $select_brand);
    $row_brand = mysqli_fetch_assoc($result_brand);
    $brand_title = $row_brand['brand_title'];
    // echo $brand_title;



}

?>


<div class="container mt-5">
    <h1 class="text-center">Edit Products</h1>
    <form action="" method="post" enctype=" multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class=" form-label"> Product Title</label>
            <input type="text" name="product_title" id="product_title" class="form-control bg-light" required="required"
                value="<?php echo $product_title; ?>">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_desc" class=" form-label"> Product Description</label>
            <input type="text" name="product_desc" id="product_desc" class="form-control bg-light"
                value="<?php echo $product_description; ?>" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class=" form-label">Product Keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" value="<?php echo $product_keywords; ?>"
                class="form-control bg-light" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_category" class=" form-label">Product categories</label>
            <select name="product_category" class=" form-select">

                <option value="<?php echo $category_title; ?>"><?php echo $category_title; ?></option>
                <?php
                $select_category_all = "SELECT * FROM `categories`";
                $result_category_all = mysqli_query($conn, $select_category_all);
                while ($row_category_all = mysqli_fetch_assoc($result_category_all)) {
                    $category_title = $row_category_all['category_title'];
                    $category_id = $row_category_all['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_brands" class=" form-label">Product brands</label>
            <select name="product_brands" class=" form-select">

                <option value="<?php echo $brand_title; ?>"><?php echo $brand_title; ?></option>
                <?php
                $select_brand_all = "SELECT * FROM `brands`";
                $result_brand_all = mysqli_query($conn, $select_brand_all);
                while ($row_brand_all = mysqli_fetch_assoc($result_brand_all)) {
                    $brand_title = $row_brand_all['brand_title'];
                    $brand_id = $row_brand_all['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }

                ?>

            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class=" form-label">Product image1</label>
            <div class="d-flex">
                <input type="file" name="product_image1" id="product_image1" class="form-control bg-light w-90 m-auto"
                    required="required">
                <img src="product_images/<?php echo $product_image1 ?>" width='90' height='90' alt="">
            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class=" form-label">Product image2</label>
            <div class="d-flex">
                <input type="file" name="product_image2" id="product_image2" class="form-control bg-light w-90 m-auto"
                    required="required">
                <img src="product_images/<?php echo $product_image2 ?>" width='90' height='90' alt="">
            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class=" form-label">Product image3</label>
            <div class="d-flex">
                <input type="file" name="product_image3" id="product_image3" class="form-control bg-light w-90 m-auto"
                    required="required">
                <img src="product_images/<?php echo $product_image3 ?>" width='90' height='90' alt="">
            </div>

        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class=" form-label">Product price</label>
            <input type="text" name="product_price" id="product_price" class="form-control bg-light"
                required="required">
        </div>
        <div class="text-center">
            <input type="submit" name="edit_product" class=" btn btn-dark mb-3 px-3" value="Update Product">
        </div>
    </form>
</div>