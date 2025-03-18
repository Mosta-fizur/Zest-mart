<?php
include("connection.php");

if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    $select_querry = "Select * from `categories` where category_title= '$category_title'";
    $result_select = mysqli_query($conn, $select_querry);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Category already exist')</script>";
    } else {

    $insert_querry = "insert into `categories` (category_title) values ('$category_title')";
    $result = mysqli_query($conn, $insert_querry);
    if ($result){
        echo "<script>alert('Category has been added successfully')</script>";
    }
}
}
?>
<h2 class=" text-center p-2">Insert Catergories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group mb-2 w-90 ">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control bg-tertiary" name="cat_title" placeholder="Insert Catergories" aria-label="Catergories" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-2 w-10 d-flex justify-content-center">
  
  <input type="submit" class=" bg-dark text-light p-2 border-0 my-3" name="insert_cat" value="Insert Catergories" placeholder="Insert Catergories" aria-label="Username" aria-describedby="basic-addon1">
  
</div>

</form>