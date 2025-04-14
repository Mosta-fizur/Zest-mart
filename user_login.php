<!-- git add .
git commit -m "string"
git push -->

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

  <title>Zest Mart</title>
</head>

<body>


<section id="login">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="./image/login/1.png" class="img-fluid" alt="">
                </div>
                <p class=" fs-2 fw-bold">Be Verified</p>
                <small class=" text-wrap text-center">For Better Experience</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h3>Hello there,</h3>
                        <p>Enter your username and password to login.</p>
                    </div>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Enter your username" name="user_username" id="user_username" autocomplete="off" required="required">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="user_password" id="user_password" autocomplete="off" required="required">
                        </div>
                        <!-- <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" name="" id="formCheck">
                            <label for="formCheck"  class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <div class="forget">
                            <small>
                                <a href="">Forgot Password?</a>
                            </small>
                        </div>
                    </div> -->
                    <!-- <div class="input-group mt-3 mb-5">
                        <button class=" w-100 text-uppercase ">Login </button>
                    </div> -->
                    <!-- <div class="input-group mb-3">
                        <button class="sign-btn text-bg-light w-100  "><img class="google me-3" src="./image/login/google.png" alt=""><small class="text-dark fw-normal">Sign in with Google</small></button>
                    </div> -->

                    <div class="text-center mt-4 pt-2 ">
                    <input type="submit" value="Login" class=" btn btn-dark mb-3 px-3 py-2" name="user_login" id="user_login">
                    <p class="small fw-bold mt-2 pt-1 ">Already have an account?<a href="user_registration.php" class="text-blue text-decoration-none"> Register</a></p>
                </div>

                    </form>
                    
                    
                    

                </div>

            </div>
        </div>
    </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>