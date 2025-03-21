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

    <title>Registration</title>
    
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
            <a class="nav-link " aria-current="page" href="cart.php">
              <i class="fa-solid fa-bag-shopping"></i><sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link log_nav pb-1 my-1" aria-current="page" href="login.php">
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link reg_nav pb-1 my-1 active" aria-current="page" href="registration.php">
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


    <section id="login">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="./image/login/1.png" class="img-fluid" alt="">
                </div>
                <p class=" fs-2 fw-bold">Get Registered</p>
                <small class=" text-wrap text-center">Unlock new features and get access to exclusive deals</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h3>Welcome,</h3>
                        <p>Please enter your email and password.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="" id="">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="" id="">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" name="" id="">
                    </div>
                    
                    <div class="input-group mb-3">
                        <button class=" w-100 text-uppercase ">Register</button> </button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="sign-btn text-bg-light w-100  "><img class="google me-3" src="./image/login/google.png" alt=""><small class="text-dark fw-normal">Sign up with Google</small></button>
                    </div>
                    <div class="row">
                        <small>
                            Already have an account? <a href="login.html">Log in</a>
                        </small>
                    </div>

                </div>

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