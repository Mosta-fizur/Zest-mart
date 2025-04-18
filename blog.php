<!-- git add .
git commit -m "string"
git push -->

<?php
include("connection.php");
include("common_function.php");
session_start();
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
      .navbar.bg-body-tertiary {
  z-index: 1030;
}

.navbar.bg-dark {
  z-index: 1020;
}
    </style>

  <title>Zest Mart</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand " href="index.php"><img src="./image/logo/zestmart-logo.png" height="80rem" ></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i id="bar" class="fa-solid fa-bars fa-2xl"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <!-- home -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
<!-- shop   -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="shop.php">Shop</a>
          </li>

          <!-- blog  -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="blog.php">Shop</a>
          </li>

         <!-- brand -->

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
<!-- category -->
          
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
          <!-- cart -->
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="cart.php">
              <i class="fa-solid fa-bag-shopping"></i><sup>
                <?php 
                cart_item(); 
                ?>
                </sup></a>
          </li>
<!-- total -->
          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Total Price: <?php
            total_cart_price();
  
            ?>
            </a>
          </li> -->
          <!-- register -->
          <li class="nav-item">
            <a class="nav-link log_nav pb-1 my-1" aria-current="page" href="user_registration.php">
              Register</a>
          </li>
          <!-- search -->
          <li class="nav-item">
            <form class="nav-link d-flex " role="search" action="search_product.php" method="get">
        <input class="m-1 p-1 border border-secondary-subtle rounded-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        
         <input type="submit" value="Search" class="btn btn-dark" name="search_data_product">
      </form>
          </li>
          

      </div>
    </div>
  </nav>
  <?php
  cart();
  ?>
  <!-- second nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="top: 100px;">
  <div class="container">
    <ul class="navbar-nav me-auto">
    <?php

if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
        <a href='#' class='nav-link text-white'>Welcome Guest</a>
      </li>";
}else{
  echo "<li class='nav-item'>
        <a href='#' class='nav-link text-white'>Welcome ".$_SESSION['username']."</a>
      </li>";
}

      if(!isset($_SESSION['username'])){
        echo "<li class='nav-item'>
        <a class='nav-link ' href='user_login.php'>Login</a>
      </li>";
      }else{
        echo "<li class='nav-item'>
        <a class='nav-link ' href='logout.php'>Logout</a>
      </li>";
      }

      ?>
    </ul>
  </div>
</nav>

  <section id="blog-home" class="pt-5 mt-5 container">


    <h2 class="fw-bold pt-5">Blogs</h2>
    <hr class="">


  </section>

  <section id="blog-container" class="container pt-5">
    <div class="row">
      <div class="post col-lg-6 col-md-6 col-sm-12 pb-5">
        <div class="post-img">
          <img class="img-fluid w-100" src="image/blog/7.jpg" alt="">
        </div>
        <h3 class="text-center fw-normal pt-3">The best way to change your winter wardrobe into spring wardrobe.</h3>
        <p class="text-center">February 3, 2025</p>
      </div>
      <div class="post col-lg-6 col-md-6 col-sm-12 pb-5">
        <div class="post-img">
          <img class="img-fluid w-100" src="image/blog/2.jpg" alt="">
        </div>
        <h3 class="text-center fw-normal pt-3">Mens fashion in leather.</h3>
        <p class="text-center">January 10, 2025</p>
      </div>
      <div class="post col-lg-6 col-md-6 col-sm-12 pb-5">
        <div class="post-img">
          <img class="img-fluid w-100" src="image/blog/3.jpg" alt="">
        </div>
        <h3 class="text-center fw-normal pt-3">DIYer's guide to making your own clothes.</h3>
        <p class="text-center">February 3, 2025</p>
      </div>
      <div class="post col-lg-6 col-md-6 col-sm-12 pb-5">
        <div class="post-img">
          <img class="img-fluid w-100" src="image/blog/5.jpg" alt="">
        </div>
        <h3 class="text-center fw-normal pt-3">TV host Sabrina's journey through fashion keeps evolving.</h3>
        <p class="text-center">February 16, 2025</p>
      </div>

      <div class=" col-lg-12 col-md-12 col-sm-12 pb-5">
        <div class="post-img">
          <img class="img-fluid w-100" src="image/blog/banner.webp" alt="">
        </div>

        <div class="row mt-5">
          <div class="post col-lg-4 col-md-6 col-12 pb-5">
            <div class="post-img">
              <img class="img-fluid w-100" src="image/blog/1.webp" alt="">
            </div>
            <h4 class=" fw-normal pt-3">Line up your wardrobe with the latest fashion trends.</h4>
            
          </div>
          <div class="post col-lg-4 col-md-6 col-12 pb-5">
            <div class="post-img">
              <img class="img-fluid w-100" src="image/blog/3.webp" alt="">
            </div>
            <h4 class=" fw-normal pt-3">Branded shoes becoming stoke in the fashion world.</h4>
            
          </div>
          <div class="post col-lg-4 col-md-6 col-12 pb-5">
            <div class="post-img">
              <img class="img-fluid w-100" src="image/blog/2.webp" alt="">
            </div>
            <h4 class="fw-normal pt-3">Discover the unique style of the fashion world.</h4>
            
          </div>
          
        </div>


      </div>

    </div>
  </section>


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
</body>

</html>