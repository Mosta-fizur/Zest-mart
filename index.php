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
      <a class="navbar-brand " href="index.php"><img src="./image/logo/zestmart-logo.png" height="80rem"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i id="bar" class="fa-solid fa-bars fa-2xl"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <!-- home -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <!-- shop   -->
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="shop.php">Shop</a>
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
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Total Price: <?php
            total_cart_price();

            ?>
            </a>
          </li>
          <!-- register -->
          <?php
          if (isset($_SESSION['username'])) {
            echo "<li class='nav-item'>
            <a class='nav-link log_nav pb-1 my-1 text-center' aria-current='page' href='profile.php'>
              My account</a>
          </li>";
          } else {
            echo "<li class='nav-item'>
            <a class='nav-link log_nav pb-1 my-1' aria-current='page' href='user_registration.php'>
              Register</a>
          </li>";
          }
          ?>

          <!-- search -->
          <li class="nav-item">
            <form class="nav-link d-flex " role="search" action="search_product.php" method="get">
              <input class="m-1 p-1 border border-secondary-subtle rounded-2" type="search" placeholder="Search"
                aria-label="Search" name="search_data">

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

        if (!isset($_SESSION['username'])) {
          echo "<li class='nav-item'>
        <a href='#' class='nav-link text-white'>Welcome Guest</a>
      </li>";
        } else {
          echo "<li class='nav-item'>
        <a href='#' class='nav-link text-white'>Welcome " . $_SESSION['username'] . "</a>
      </li>";
        }

        if (!isset($_SESSION['username'])) {
          echo "<li class='nav-item'>
        <a class='nav-link ' href='user_login.php'>Login</a>
      </li>";
        } else {
          echo "<li class='nav-item'>
        <a class='nav-link ' href='logout.php'>Logout</a>
      </li>";
        }

        ?>
      </ul>
    </div>
  </nav>

  <section id="home">

    <div class="container">
      <h5>NEW ARRAIVALS</h5>
      <h1><span>Best Price </span>This Ramadan</h1>
      <p>Zest Mart offers you the best deals <br> on the latest products</p>
      <button><a href="shop.php" class=" text-white text-decoration-none">Shop Now</a></button>
    </div>

  </section>

  <section id="brand" class="container">
    <div class="row m-0 py-5">
      <img src="./image/brand/adidas.png" class=" brnd img-fluid col-lg-2 col-md-4 col-sm-6 " alt="">
      <img src="./image/brand/calvin.png" class=" brnd img-fluid col-lg-2 col-md-4 col-sm-6 " alt="">
      <img src="./image/brand/gucci.png" class=" brnd img-fluid col-lg-2 col-md-4 col-sm-6 " alt="">
      <img src="./image/brand/louis.png" class=" brnd img-fluid col-lg-2 col-md-4 col-sm-6 " alt="">
      <img src="./image/brand/nike.png" class=" brnd img-fluid col-lg-2 col-md-4 col-sm-6 " alt="">
      <img src="./image/brand/ralph.png" class=" img-fluid col-lg-2 col-md-4 col-sm-6 " alt="">

    </div>
  </section>

  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <div class="one col-lg-4 col-md-12 col-12 p-0">

        <img class="img-fluid" src="./image/new/1.jpg" alt="">
        <div class="details">
          <h2>Extreme Rare Sneakers</h2>
          <button class="text-uppercase"><a href="shop.php" class=" text-black text-decoration-none">Shop
              Now</a></button>
        </div>
      </div>
      <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid" src="./image/new/5.jpg" alt="">
        <div class="details">
          <h2>Awesome Blank Outfit</h2>
          <button class="text-uppercase"><a href="shop.php" class=" text-black text-decoration-none">Shop
              Now</a></button>
        </div>
      </div>
      <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid" src="./image/new/3.jpg" alt="">
        <div class="details">
          <h2>Sportswear Up To 40% Off</h2>
          <button class="text-uppercase"><a href="shop.php" class=" text-black text-decoration-none">Shop
              Now</a></button>
        </div>
      </div>
    </div>
  </section>

  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>
        Our Featured Products
      </h3>
      <hr class="mx-auto">
      <p>Here you can check out our new and featured products with fair price on Zest Mart.</p>
    </div>

  </section>

  <section id="banner" class="my-5 py-5">
    <div class="container">
      <h4>MID SEASON'S SALE</h4>
      <h1>Spring Collection <br> UP TO 25% OFF</h1>
      <button class="text-uppercase"><a href="shop.php" class=" text-white text-decoration-none">Shop Now</a></button>
    </div>
  </section>

  <!-- <section id="cloths" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>
        Dresses and Jumpsuits
      </h3>
      <hr class="mx-auto">
      <p>Here you can check out our new and featured products with fair price on Zest Mart.</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/clothes/1.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Woman Full Suit
        </h5>
        <h4>
          9500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/clothes/2.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Woman Long Dress
        </h5>
        <h4>
          4000 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/clothes/3.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Black T-shirt (Woman)
        </h5>
        <h4>
          2500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/clothes/1.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Woman Full Suit
        </h5>
        <h4>
          9500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>

  <section id="watches" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>
        Best Watches
      </h3>
      <hr class="mx-auto">
      <p>Here you can check out our new and featured products with fair price on Zest Mart.</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/watches/1.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Titan Leather Watch
        </h5>
        <h4>
          19500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/watches/2.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Curren Leather Watch
        </h5>
        <h4>
          9000 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/watches/3.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Curren Metal Belt Watch
        </h5>
        <h4>
          10500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/watches/4.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Naviforce Leather Black-Gold
        </h5>
        <h4>
          15500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>

  <section id="shoes" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>
        Running Shoes
      </h3>
      <hr class="mx-auto">
      <p>Here you can check out our new and featured products with fair price on Zest Mart.</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/shoes/1.jpg" alt="">
        
        <h5 class="p-name">
          Ash White Shoes
        </h5>
        <h4>
          2500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/shoes/2.jpg" alt="">
        
        <h5 class="p-name">
          Faded Blue Runing Shoes
        </h5>
        <h4>
          5000 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/shoes/3.jpg" alt="">
        
        <h5 class="p-name">
          Redro Running Trackers
        </h5>
        <h4>
          10500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/shoes/4.jpg" alt="">
        
        <h5 class="p-name">
          Puma Tracker (Black)
        </h5>
        <h4>
          15500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section> -->

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