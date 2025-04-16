<h3 class="text-dark mb-4">Delete Account</h3>
<form action="" method="post" class=" mt-5">
    <div class="form-outline mb-4 ">
        <input type="submit" class=" form-control w-50 m-auto bg-danger text-white" name="delete" value="Delete Account"
            id="">
    </div>
    <div class="form-outline mb-4 ">
        <input type="submit" class=" form-control w-50 m-auto bg-secondary text-white" name="dont_delete" value="Cancel"
            id="">
    </div>
</form>

<?php

$username_session = $_SESSION['username'];
if (isset($_POST['delete'])) {
    $delete_query = "delete from `user_table` where username= '$username_session'";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {

        session_destroy();
        echo "<script>alert('Account deleted')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }
}
if (isset($_POST['dont_delete'])) {
    echo "<script>window.open('profile.php','_self')</script>";
}

?>