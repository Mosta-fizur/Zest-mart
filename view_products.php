<h3 class=" text-center text-success">All Products</h3>
<table class=" table table-bordered mt-5 text-center">
    <thead class="table-dark text-white">
        <tr>
            <th>Product Id</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody class="">
        <?php

        $get_products = "SELECT * FROM `products`";
        $result = mysqli_query($conn, $get_products);
        $number = 0;
        while ($row = mysqli_fetch_array($result)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $status = $row['status'];
            $number++;
            ?>
            <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $product_title; ?></td>
                <td><img src='product_images/<?php echo $product_image1; ?>' width='50' height='50'></td>
                <td><?php echo $product_price; ?></td>
                <td>
                    <?php
                    $get_count = "select * from `orders_pending` where product_id = '$product_id'";
                    $result_count = mysqli_query($conn, $get_count);
                    $rows_count = mysqli_num_rows($result_count);
                    echo $rows_count;
                    ?>
                </td>
                <td>1</td>
                <td><a href='admin_index.php?edit_products=<?php echo $product_id ?>' class=' text-black'><i
                            class='fa-solid fa-pen-to-square'></i></a></td>
                <td>dekte</td>
            </tr>
            <?php
        }

        ?>



    </tbody>

</table>