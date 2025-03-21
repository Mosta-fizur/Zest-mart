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
    .small-img-grp {
      display: flex;
      justify-content: space-between;

    }

    .small-img-col {
      flex-basis: 24%;
      cursor: pointer;
    }

    .sproduct select {
      display: block;
      padding: 5px 10px;

    }

    .sproduct input {
      width: 50px;
      height: 40px;
      padding-left: 10px;
      margin-right: 10px;
    }

    .sproduct input:focus {
      outline: none;
    }

    .buy-btn {
      background: #fb774b;
      opacity: 1;
      transition: 0.3s all;
    }
  </style>

  <title>Product Details</title>
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


  <section class="sproduct my-5 pt-5 container">
    <div class="row mt-5 pt-5">
      <div class="col-lg-5 col-md-12 col-12">
        <img class="img-fluid w-100 pb-1" src="./image/shop/1.jpg" alt="" id="mainImg">
        <div class="small-img-grp">
          <div class="small-img-col">
            <img class="w-100 small-img" src="./image/shop/1.jpg" alt="">
          </div>
          <div class="small-img-col">
            <img class="w-100 small-img" src="./image/shop/24.jpg" alt="">
          </div>
          <div class="small-img-col">
            <img class="w-100 small-img" src="./image/shop/25.jpg" alt="">
          </div>
          <div class="small-img-col">
            <img class="w-100 small-img" src="./image/shop/26.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-12">
        <h6>Home / T-Shirt</h6>
        <h3 class="py-4">Mens's Fashion T-shirt</h3>
        <h2>850 Taka </h2>
        <select name="" id="" class="my-5">
          <option value="">Select size</option>
          <option value="">XXL</option>
          <option value="">XL</option>
          <option value="">L</option>
          <option value="">M</option>
          <option value="">S</option>
        </select>
        <input type="number" value="1">
        <button class="buy-btn">Add to Cart</button>
        <h4 class="my-5">Product Details</h4>
        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia ea quas dolores neque perferendis facere
          deserunt voluptatibus, sunt nam aliquid eligendi maxime tempore, magni autem modi unde blanditiis voluptatem
          nobis alias tempora eius rem? Possimus perferendis est quam dicta, eos, at exercitationem illum autem veniam
          ipsum doloribus mollitia vitae tempore saepe dolorum necessitatibus, quidem enim omnis odit quos. Id error
          doloremque repellendus repellat aliquid provident dolor ullam unde corrupti vitae ratione quia alias sint
          recusandae rerum modi quidem nobis nulla, distinctio suscipit, deserunt harum tenetur aperiam molestias?
          Labore fugiat animi perferendis, ex maiores quod quidem, illum eveniet unde, voluptate deleniti!</span>
      </div>
    </div>
  </section>

  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>
        Related Products
      </h3>
      <hr class="mx-auto">

    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/featured/1.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Sports Boots
        </h5>
        <h4>
          4500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/featured/2.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Sports Boots
        </h5>
        <h4>
          4000 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/featured/3.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Classy Black Bag
        </h5>
        <h4>
          2500 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./image/featured/4.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">
          Knee Cap
        </h5>
        <h4>
          1000 Taka
        </h4>
        <button class="buy-btn">Buy Now</button>
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

  <script>
    var mainImg = document.getElementById("mainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function () {
      mainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function () {
      mainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function () {
      mainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function () {
      mainImg.src = smallimg[3].src;
    }

  </script>

</body>

</html>