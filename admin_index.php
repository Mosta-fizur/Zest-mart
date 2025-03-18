<?php
include("connection.php");
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
      .admin_image{
    object-fit: contain;
    width: 100px;
}
    </style>

  <title>Admin Dashboard</title>
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="shop.html">Shop</a>
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
              $select_brands = "Select * from `brands`";
              $result_brands = mysqli_query($conn, $select_brands);
              // $row_data = mysqli_fetch_assoc($result_brands);
              // echo"".$row_data["brand_title"];
while($row_data = mysqli_fetch_assoc($result_brands)) {
  $brand_title = $row_data["brand_title"];
  $brand_id = $row_data["brand_id"];
  echo '<li class= ""><a class="dropdown-item" href="">' .$brand_title.'</a>';
  
}
            ?>
            
          </ul>
        </li>

          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Category
          </a>
          <ul class="dropdown-menu">
            <?php
              $select_categories = "Select * from `categories`";
              $result_categories = mysqli_query($conn, $select_categories);
              
while($row_data = mysqli_fetch_assoc($result_categories)) {
  $category_title = $row_data["category_title"];
  $category_id = $row_data["category_id"];
  echo '<li class= ""><a class="dropdown-item" href="">' .$category_title.'</a>';
  
}
            ?>
            
          </ul>
        </li>
          
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="cart.html">
              <i class="fa-solid fa-bag-shopping"></i><sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link log_nav pb-1 my-1" aria-current="page" href="login.html">
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link reg_nav pb-1 my-1" aria-current="page" href="registration.html">
              Register</a>
          </li>
          <li class="nav-item">
            <form class="nav-link d-flex " role="search">
        <input class="m-2 py-1 border border-secondary-subtle rounded-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark " type="submit">Search</button>
      </form>
          </li>
          

      </div>
    </div>
  </nav>

<section id="welcome" class="my-5 py-5">

<div class="container text-center mt-5 py-3">
      <h3>
        Welcome Guest
      </h3>
      <hr class="mx-auto">
      <p>Manage Settings</p>
    </div>
    <div class="bg-body-tertiary container shadow">
      <div class="row ">
      <div class="col-md-12 my-2 d-flex align-items-center">
        <div class="px-5">
          <a href=""><img class="admin_image pe-2" src="./image/clothes/1.jpg" alt=""></a>
          <p class="text-center">Admin Name</p>
        </div>
        <div class="button text-center ">
        <button class="p-2 my-2"><a href="insert_product.php" class="nav-link">Insert Products</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link">View Products</a></button>
        <button class="p-2 my-2"><a href="admin_index.php?insert_categories" class="nav-link">Insert Catagories</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link">View Catagories</a></button>
        <button class="p-2 my-2"><a href="admin_index.php?insert_brands" class="nav-link">Insert Brands</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link ">View Brands</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link ">All Orders</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link ">All Payments</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link ">List of Users</a></button>
        <button class="p-2 my-2"><a href="" class="nav-link ">Log Out</a></button>
        </div>


      </div>
    </div></div>

    <div class="container my-5">
      <?php
      if(isset($_GET["insert_categories"])){
        include("insert_category.php");
      }
      if(isset($_GET["insert_brands"])){
        include("insert_brand.php");
      }
      ?>
    </div>


    
</section>
   
<!-- footer -->
<footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-3 col-12">
        <img src="./image/logo/O-removebg-preview.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatem recusandae dignissimos sequi! Minus
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
    <script src="script.js"></script>
</body>

</html>