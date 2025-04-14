<?php
include("connection.php");

if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];

    $select_querry = "Select * from `brands` where brand_title= '$brand_title'";
    $result_select = mysqli_query($conn, $select_querry);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Brand already exist')</script>";
    } else {

    $insert_querry = "insert into `brands` (brand_title) values ('$brand_title')";
    $result = mysqli_query($conn, $insert_querry);
    if ($result){
        echo "<script>alert('Brand has been added successfully')</script>";
    }
}
}
?>

<h2 class=" text-center p-2">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group mb-2 w-90 ">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control bg-tertiary" name="brand_title" placeholder="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-2 w-10 d-flex justify-content-center">
  
<input type="submit" class=" bg-dark text-light p-2 border-0 my-3" name="insert_brand" value="Insert Brands" placeholder="Insert Brands" aria-label="Username" aria-describedby="basic-addon1">
</div>

</form>