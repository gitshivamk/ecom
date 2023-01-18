<?php
require "include/common.php";

?>

<html>
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type="text/css" href="style.css">
        <style type="text/css">
            .row{
            margin-top: 60px;
        }
        </style>
    </head>
    <body>
        <?php
        include "include/header.php";
        ?>
        <section>
            <div class="container" id="content">
                <div class="row">
                <div class="col-xs-12">
                <table class="table">
                <?php
                $user_id= $_SESSION['user_id'];
                $sum=0;
                $id="";
                $query ="select product.price,product.id,product.name from users_items JOIN product ON users_items.item_id = product.id WHERE users_items.user_id = '$user_id' and status = 'Added to cart'";
                $result = mysqli_query($con,$query) or die(mysqli_error($con));
                if(mysqli_num_rows($result)>=1){
                ?>
                    <thead>
                        <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){
                        $sum=$sum +((int)$row['price']);
                        $id=$id.$row['id'].",";
                        echo "<tr><td>" . $row['id'] . "</td><td>". $row['name'] ."</td><td>". $row['price'] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
                    }  
                        $id=rtrim($id,",");
                        echo "<tr><td></td><td>Total</td><td>Rs ". $sum ."</td><td><a href='success.php?item_id=". $id . "' class='btn btn-primary'>Confirm Order</></a></td></tr>";
                        ?>
                    </tbody>
                    <?php
                }else{
                    echo "<center><p class='text-danger'>Add items to the cart first</p></center>";
                }
                ?>
                </table>
            </div>
            </div>
        </div>
        </section>
         <?php
         include "include/footer.php";
         ?>
    </body>
</html>