<?php
require "include/common.php";

if(!isset($_SESSION['email'])){
    header('location: products.php');
}
?>

<html>
    <head>
        <title>Success Page</title>
         <meta charset="UTF-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type="text/css" href="style.css">
        <style type="text/css">
            .row2{
            margin-top: 60px;
        }
        </style>
    </head>
    <body>
    <?php include "include/header.php"; ?>
    <?php
        
        $item_id=$_GET['item_id'];
        $user_id=$_SESSION['user_id'];
        $query="UPDATE users_items SET status='Confirmed' WHERE item_id IN ($item_id) AND status='Added to cart' and user_id=$user_id";
        $result=mysqli_query($con,$query) or die(mysqli_error($con) . "query not executed"); 
    ?>
        <div class="container" id="content">
            <div class="jumbotron text-center row2">
                <p class="text-success"><b>Your order is confirmed!</b></b></p>
                <p>Thank you for shopping with us</p>
                <p><a href="products.php"><i>Click Here</i></a> to purchase any other item</p>
            </div>
        </div>
      <?php include "include/footer.php"; ?>
    </body>
</html>