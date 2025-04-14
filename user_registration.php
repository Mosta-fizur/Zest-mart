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

  <title>Zest Mart</title>
</head>

<body>


<div class="container-fluid">
    <h2 class="text-center m-3">New user registration</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- username -->
                <div class="form-outline mb-4">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required"/>
                </div>
                <!-- email -->
                <div class="form-outline mb-4">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required"/>
                </div>
                <!-- image -->
                <div class="form-outline mb-4">
                    <label for="user_image" class="form-label">Image</label>
                    <input type="file" id="user_image" name="user_image" class="form-control"  required="required"/>
                </div>
                <!-- password -->
                <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required"/>
                </div>
                <!-- confirm password -->
                <div class="form-outline mb-4">
                    <label for="conf_user_password" class="form-label">Confirm Password</label>
                    <input type="password" id="conf_user_password" name="conf_user_password" class="form-control" placeholder="Confirm password" autocomplete="off" required="required"/>
                </div>
                <!-- address -->
                <div class="form-outline mb-4">
                    <label for="user_address" class="form-label">Address</label>
                    <input type="text" id="user_address" name="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required="required"/>
                </div>
                <!-- contact -->
                <div class="form-outline mb-4">
                    <label for="user_contact" class="form-label">Contact</label>
                    <input type="text" id="user_contact" name="user_contact" class="form-control" placeholder="Enter your contact" autocomplete="off" required="required"/>
                </div>
                <div class="text-center mt-4 pt-2 ">
                    <input type="submit" value="Register" class=" btn btn-dark mb-3 px-3 py-2" name="user_register">
                    <p class="small fw-bold mt-2 pt-1 ">Already have an account?<a href="user_login.php" class="text-blue text-decoration-none"> Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>

<!-- php code -->
 <?php
 if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();

    // selectq
    $select_query ="Select * from `user_table` where username= '$user_username' or user_email= '$user_email'";
    $result = mysqli_query($conn, $select_query);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
      echo "<script>alert('Username or Email Aready Exists. Try a different one.')</script>";
    }
    else if($user_password != $conf_user_password){
      echo "<script>alert('Passwords do not match.')</script>";
      
    }
    else{


    // insertq
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query = "insert into `user_table` (username, user_email,user_password,user_image,user_ip,user_address,user_mobile) values ('$user_username',' $user_email','$hash_password',' $user_image','$user_ip',' $user_address','$user_contact')";
    $sql_execute = mysqli_query($conn, $insert_query);
    
        echo "<script>alert('Registered successfully.')</script>";
    
  }
    

    // selecting cart items
    $select_cart_items = "Select * from `cart_details` where ip_address= '$user_ip'";
    $result_cart = mysqli_query($conn, $select_cart_items);
    $rows_count = mysqli_num_rows($result_cart);
    if($rows_count > 0){
      $_SESSION['username'] = $user_username;
      echo "<script>alert('You have items in your cart.')</script>";
      echo "<script>window.open('checkout.php','_self')</script>";
    }else{
      echo "<script>window.open('index.php','_self')</script>";   // index here
    }

 }
 ?>