<?php
include("connection.php");
include("common_function.php");
// session_start();


if(isset($_GET['user_id'])){

    $user_id = $_GET['user_id'];
    
}


//geting the total items and total price
$total_price = 0;
$get_ip_address = getIPAddress() ;

$cart_query_price = "Select * from `cart_details` where ip_address= '$get_ip_address'";
$result_cart_price = mysqli_query($conn, $cart_query_price);
$invoice_number = mt_rand();
$status = 'pending';
$count_products = mysqli_num_rows($result_cart_price);
while($row_price = mysqli_fetch_array($result_cart_price)){
    $product_id = $row_price['product_id'];
    $select_product = "Select * from `products` where product_id= $product_id";
    $run_price = mysqli_query($conn, $select_product);
    while($row_product_price=mysqli_fetch_array($run_price)){
        $product_price = array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total_price += $product_values;
    }

}

//getting quantity from cart
$get_cart = "Select * from `cart_details`";
$run_cart = mysqli_query($conn, $get_cart);
$get_item_quantity = mysqli_fetch_array($run_cart);
$quantity = $get_item_quantity['quantity'];
if($quantity == 0){
    $quantity = 1;
    $subtotal = $total_price;
}
else{
    $quantity = $quantity;
    $subtotal = $total_price * $quantity;
}

$insert_orders = "insert into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values ($user_id,$subtotal,$invoice_number,$count_products,NOW(),'$status')";
$result_querry=mysqli_query($conn, $insert_orders);
if($result_querry){
    echo "<script>alert('Order subitted successfully');</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}

//order pending
$insert_pending_orders = "insert into `orders_pending` (user_id,invoice_number,product_id,quantity,order_status) values ($user_id,$invoice_number,$product_id,$quantity,'$status')";
$result_pending_orders=mysqli_query($conn, $insert_pending_orders);

// delete items from cart
$empty_cart = "Delete from `cart_details` where ip_address= '$get_ip_address'";
$result_delete = mysqli_query($conn, $empty_cart);
?>