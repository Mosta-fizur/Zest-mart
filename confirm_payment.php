<!-- git add .
git commit -m "string"
git push -->

<?php
include("connection.php");

session_start();
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    echo''.$order_id.'';
}
?>
