<?php
include("connection.php");
include("common_function.php");
// session_start();
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
    <!-- php code to access user id -->
     <?php

$user_ip = getIPAddress();
$get_user = "Select * from `user_table` where user_ip= '$user_ip'";
$result = mysqli_query($conn, $get_user);
$run_query = mysqli_fetch_array($result);
$user_id= $run_query['user_id'];

?>
<section id="featured" class="mt-5 py-5 ">
    <div class="container ">
      <h2 class="fw-bold">
        Payment Page
      </h2>
      <hr> 
      <p>Please enter your payment option.</p>
      </div>
      <div class="row mx-auto container py-3" >
        <div class="col-md-4">
            <a href=""class="text-decoration-none">1.  <img src="./image/payment/payment.png" alt=""></a>
        </div>
        <div class="col-md-4">
            <a href="order.php?user_id=<?php echo $user_id  ?>" class="text-decoration-none">2.  Cash on Delivery</a>
        </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>