<!-- git add .
git commit -m "string"
git push -->

<?php
include("connection.php");
include("common_function.php");

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

  <style>
    .product img {
      width: 100%;
      height: auto;
      box-sizing: border-box;
      object-fit: cover;
    }

    #featured>div:nth-child(8)>nav>ul>li.page-item.active>a {
      background-color: black;
    }

    #featured>div:nth-child(8)>nav>ul>li:nth-child(n):hover>a {
      background-color: coral;
      color: white;
    }

    .pagination a {
      color: #000;
    }
  </style>

  <title>Cart Details</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand " href="#"><img src="./image/logo/zestmart-logo.png" height="80rem" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa-solid fa-bars fa-2xl"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="shop.php">Shop</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="blog.html">Blog</a>
              </li>
    
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Brand
              </a>
              <ul class="dropdown-menu">
                <?php
                getbrands();
                ?>
                
              </ul>
            </li>
    
              
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
              </a>
              <ul class="dropdown-menu">
                <?php
                getcategories();
    
                ?>
                
              </ul>
            </li>
              
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="cart.php">
                  <i class="fa-solid fa-bag-shopping"></i><sup>
                    <?php 
                    cart_item(); 
                    ?>
                    </sup></a>
              </li>
    
              <!-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="">Total Price: <?php
                total_cart_price();
      
                ?>
                </a>
              </li> -->
              
              <li class="nav-item">
                <a class="nav-link log_nav pb-1 my-1" aria-current="page" href="login.html">
                  Login</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link reg_nav pb-1 my-1" aria-current="page" href="registration.html">
                  Register</a>
              </li> -->
              <!-- <li class="nav-item">
                <form class="nav-link d-flex " role="search" action="search_product.php" method="get">
            <input class="m-1 p-1 border border-secondary-subtle rounded-2" type="search" placeholder="Search" aria-label="Search" name="search_data"> 
            <button class="btn btn-dark " type="submit">Search</button>
             <input type="submit" value="Search" class="btn btn-dark" name="search_data_product">
          </form>
              </li> -->
              
    
          </div>
        </div>
      </nav>
    
      <?php
      cart();
      getIPAddress();

      ?>
    <section id="blog-home" class="pt-5 mt-5 container">


        <h2 class="fw-bold pt-5">Shopping Cart</h2>
        <hr class="">


    </section>

    <!-- sample card code test
    <div class="container">
        <div class="row">
    <div class="text-center col-lg-3 col-md-4 col-12">
        <div class="card">
            <img src="image/clothes/cloth1.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">
                    cart title
                </h5>
                <p class="card-text">
                    some texts
                </p>
                <a href="" class="btn btn-dark">nkk</a>
                <a href="" class="btn btn-dark">[[[</a>
            </div>
        </div>
    </div>
    <div class="text-center col-lg-3 col-md-4 col-12">
        <div class="card">
            <img src="image/shoes/3.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">
                    cart title
                </h5>
                <p class="card-text">
                    some texts
                </p>
                <a href="" class="btn btn-dark">nkk</a>
                <a href="" class="btn btn-dark">[[[</a>
            </div>
        </div>
    </div>
</div>
    </div> -->



<form action="" method="post">
    <section id="cart-container" class="container my-5">
        
        <table class="w-100">
            

                <!-- display dynamic data -->
                 <?php

                 global $conn;
                 $get_ip_add = getIPAddress();
                 $total_price = 0;
                 $cart_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
                 $result = mysqli_query($conn, $cart_query);
                 $result_count = mysqli_num_rows($result);
                 if ($result_count > 0) {

                    echo"<thead>
                <tr>
                    <td>Product Title</td>
                    <td>Product Image</td>
                    <td>Quantity</td>
                    <td>Total Price</td>
                    <td>Remove</td>
                    <td colspan='2'>Operations</td>
                </tr>
            </thead>

            <tbody>";

                 while( $row = mysqli_fetch_array($result) ) {
                   $product_id = $row['product_id'];
                   $select_products = "Select * from `products` where product_id='$product_id'";
                   $result_products = mysqli_query($conn, $select_products); // executeq
                   while($row_product_price = mysqli_fetch_array($result_products)) {
                     $product_price = array($row_product_price['product_price']);
                     $price_table = $row_product_price['product_price'];
                     $product_title = $row_product_price['product_title'];
                     $product_image1 = $row_product_price['product_image1'];
                     $product_values = array_sum($product_price);
                     $total_price += $product_values;
                  


?>
                <tr>
                    <td  style="word-wrap: break-word; white-space: normal;">
                        <h5><?php echo $product_title  ?></h5>
                    </td>
                    <td class="p-1"><img src="product_images/<?php echo $product_image1 ?>" alt=""></td>
                    
                    
                    <td><input class="w-25 p-lg-1" type="text" value="" name="qty"></td>
                    <?php  $get_ip_add = getIPAddress();
                    if(isset($_POST['update_cart'])){
                        $quantities = $_POST['qty'];
                        $update_cart = "update `cart_details` set quantity= '$quantities' where ip_address='$get_ip_add'";
                        $result_products_quantity = mysqli_query($conn, $update_cart); // executeq
                        $total_price = $total_price * $quantities;
                    }

                    ?>
                    <td>
                        <h5><?php echo $price_table ?></h5>
                    </td>
                    <td><i class="  px-2 fa-solid fa-trash-can fa-lg"></i><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                    <td>
                        <!-- <button class="btn btn-info ">Update</button> -->
                         <input type="submit" value="Update Cart" class="btn btn-info px-1" name="update_cart">
                        
                    </td>
                    <td>
                        <!-- <button class="btn btn-danger ">Remove</button> -->
                        <input type="submit" value="Remove Cart" class="btn btn-danger px-1" name="remove_cart">
                    </td>
                </tr>
                <?php 
                 }
             
                }
            }
            else{
                echo "<h2 class= 'text-center text-danger'>Your cart is empty.</h2>";
            }
                
                ?>
            </tbody>

        </table>
    </section>



    <section id="cart-bottom" class="container">
        <div class="row">
        <?php
                     $get_ip_add = getIPAddress();
                     $total_price = 0;
                     $cart_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
                     $result = mysqli_query($conn, $cart_query);
                     $result_count = mysqli_num_rows($result);
                     if ($result_count > 0) {
                        echo"
            <div class='coupon col-lg-6 col-md-6 col-12 mb-4'>
                <div class=>
                    <h5>COUPON</h5>
                    <p>
                        Enter your coupon code if you have one.
                    </p>
                    <input type='text' placeholder='Coupon Code' name= id=>
                    <button>Apply Coupon</button>
                </div>
            </div>
            <div class='total col-lg-6 col-md-6 col-12'>
                
                <div class=>
                    <h5>CART TOTAL</h5>
                    <div class='d-flex justify-content-between'>
                        <h6>Subtotal</h6>
                        <p><?php echo $total_price ?></p>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <h6>Shipping</h6>
                        <p>0</p>
                    </div>

                    <hr class='second-hr'>
                    <div class='d-flex justify-content-between'>
                        <h6>Total</h6>
                        <p><?php echo $total_price ?></p>
                    </div>
                    <div class='d-flex justify-content-between m-3 p-2'>
                    <input type='submit' value='Continue Shopping' class='fw-bold me-auto bg-black mx-2 text-white ps-2 pe-2 my-2 me-2' name='continue_shopping'>
                        
                        <button  class=' ms-auto bg-success mt-2 mb-2 ms-2'><a href='checkout.php' class='text-decoration-none text-white'>Proceed to Checkout</a></button>
                    </div>
                    ";
                     }

                     if(isset($_POST['continue_shopping'])){
                        echo "<script>window.open('shop.php','_self')</script>";
                     }
                ?>
                    
                </div>
            </div>
        </div>
    </section>
    </form>

    <!-- function to remove items -->
     <?php
    function remove_cart_item(){
        global $conn;
        if(isset($_POST['remove_cart'])){
            foreach($_POST['removeitem'] as $remove_id){
                echo $remove_id;
                $delete_query = "Delete from `cart_details` where product_id= '$remove_id'";
                $run_delete = mysqli_query($conn,$delete_query);
                if($run_delete){
                    echo "<script>window.open('cart.php','_self')</script>";
                
                }
            }

        }
    }
    echo $remove_item = remove_cart_item();

?>
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-3 col-12">
                <img src="./image/logo/O-removebg-preview.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatem recusandae dignissimos
                    sequi! Minus
                    qui sint fugiat non nulla nostrum facilis cupiditate debitis laborum nam!</p>

            </div>
            <div class="footer-one col-lg-3 col-md-3 col-12 mb-3">
                <h5 class="
            pb-2">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a class="text-decoration-none" href="#">Men</a></li>
                    <li><a class="text-decoration-none" href="#">Women</a></li>
                    <li><a class="text-decoration-none" href="#">Boys</a></li>
                    <li><a class="text-decoration-none" href="#">Girls</a></li>
                    <li><a class="text-decoration-none" href="#">New Arrivals</a></li>
                    <li><a class="text-decoration-none" href="#">Shoes</a></li>
                    <li><a class="text-decoration-none" href="#">Cloths</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-3 col-12 mb-3">
                <h5 class="
            pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">
                        Address
                    </h6>
                    <p>56/4 Bashundhara, Dhaka.</p>
                </div>
                <div>
                    <h6 class="text-uppercase">
                        Phone
                    </h6>
                    <p>(+880) 1562-51218</p>
                </div>
                <div>
                    <h6 class="text-uppercase">
                        Email
                    </h6>
                    <p>zestmart.official@gmail.com</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-3 col-12">
                <h5 class="
            pb-2">Instagram</h5>
                <div class="row ">
                    <img class="img-fluid w-25 h-100 m-2" src="./image/insta/2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="./image/insta/1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="./image/insta/3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="./image/insta/4.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="./image/insta/5.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="./image/insta/6.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="./image/payment/payment.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-wrap mb-2">
                    <p>
                        Zest Mart E-Commerce Ltd © 2025. All rights reserved.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in fa-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                    <a href="3"><i class="fa-brands fa-instagram fa-2xl"></i></a>

                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>