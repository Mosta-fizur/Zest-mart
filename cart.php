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

    <title>Cart</title>
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
            <a class="nav-link " aria-current="page" href="shop.php">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="blog.php">Blog</a>
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
            <a class="nav-link active" aria-current="page" href="cart.php">
              <i class="fa-solid fa-bag-shopping"></i><sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link log_nav pb-1 my-1" aria-current="page" href="login.php">
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link reg_nav pb-1 my-1" aria-current="page" href="registration.php">
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


    <section id="blog-home" class="pt-5 mt-5 container">


        <h2 class="fw-bold pt-5">Shopping Cart</h2>
        <hr class="">


    </section>

    <section id="cart-container" class="container my-5">
        <table class="w-100">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-trash-can fa-lg"></i></a></td>
                    <td><img src="image/shoes/1.jpg" alt=""></td>
                    <td>
                        <h5>Adidas Superstar</h5>
                    </td>
                    <td>
                        <h5>120 Taka</h5>
                    </td>
                    <td><input class="w-25 p-lg-1" type="number" value="1"></td>
                    <td>
                        <h5>120 Taka</h5>
                    </td>
                </tr>
            </tbody>

        </table>
    </section>

    <section id="cart-bottom" class="container">
        <div class="row">
            <div class="coupon col-lg-6 col-md-6 col-12 mb-4">
                <div class="">
                    <h5>COUPON</h5>
                    <p>
                        Enter your coupon code if you have one.
                    </p>
                    <input type="text" placeholder="Coupon Code" name="" id="">
                    <button>Apply Coupon</button>
                </div>
            </div>
            <div class="total col-lg-6 col-md-6 col-12">
                <div class="">
                    <h5>CART TOTAL</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Subtotal</h6>
                        <p>120.00</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6>Shipping</h6>
                        <p>140.00</p>
                    </div>

                    <hr class="second-hr">
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <p>140.00</p>
                    </div>
                    <button class="ms-auto">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </section>

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