<!-- git add .
git commit -m "string"
git push -->

<?php
include("connection.php");

session_start();
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    // echo''.$order_id.'';
    $select_data = "Select * from `user_orders` where order_id= '$order_id'";
    $result = mysqli_query($conn,$select_data);
    $row_fetch = mysqli_fetch_assoc($result);
    $invoice_number= $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];
}

if(isset($_POST['confirm_payment'])) {
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $insert_query = "insert into `user_payments` (order_id,invoice_number,amount,payment_mode) values ($order_id,$invoice_number,$amount,'$payment_mode')";
    $result=mysqli_query($conn,$insert_query);
    if($result) {
        echo "<h3 class='text-center text-light'>Payment confirmed</h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders= "update `user_orders` set order_status='Complete' where order_id=$order_id";
    $result_orders=mysqli_query($conn,$update_orders);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="bg-secondary">
    

<div class="container my-5">
    <h1 class=" text-center">Confirm Payment</h1>
    <form action="" method="post">
        <div class="form-outline my-4 text-center">
            <label for="invoice_number" class=" text-light">Invoice Number</label>
            <input type="text" value="<?php echo  $invoice_number ?>" class=" form-control w-50 m-auto" name="invoice_number" id="">
        </div>
        <div class="form-outline my-4 text-center">
            <label for="amount" class=" text-light">Amount</label>
            <input type="text" value="<?php echo  $amount_due ?>" class=" form-control w-50 m-auto" name="amount" id="">
        </div>
        <div class="form-outline my-4 text-center">
            <select name="payment_mode" class=" form-select w-50 m-auto" id="">
                <option>Select Payment mode</option>
                <option>VISA</option>
                <option>MASTERCARD</option>
                <option>Bkash</option>
                <option>Cash on delivery</option>
            </select>
        </div>
        <div class="form-outline my-4 text-center">
            <input type="submit" class=" bg-info py-2 px-3 border-0" value="Confirm" name="confirm_payment" id="">
        </div>
    </form>
</div>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
