<?php
require "include/common.php";
include "include/check_if_added.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Update Product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="jumbotron" style="margin-top:70px;">
    <center><h2>Welcome to Sk Apparel Co.</h2></center>
    <p>We have the best range of fashion products. Happy Shopping! </p>
    </div>
<div class="row text-center row2">

<?php
require "include/header.php";

$query="Select * from product";
$rs=mysqli_query($con,$query);

while($row=mysqli_fetch_array($rs)){

?>
<div class="col-md-3 col-xs-6">
<div class="thumbnail">
	<img src="<?php echo 'Image/'.$row['image']; ?>" alt="Image is Loading">
<div class="caption">
	<h4><?php echo $row['name']; ?></h4>
	<p class="text-info"><?php echo $row['brand']; ?></p>
	<p class="text-danger"><?php echo "₹". $row['price']; ?></p>
	<p class="text-warning"><?php $pid=$row['id']; echo $pid; ?></p>
	<?php if (!isset($_SESSION['user_id'])) { global $pid;?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else{
                            if (check_if_added_to_cart($pid)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                  } else { 
                                    ?> 
                                    <a href="cart-add.php?id=<?php echo $pid; ?>" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                }
                            } 
                                 ?>
</div>
</div>
</div>
<?php } ?>

</div>
</div>
<?php
include "include/footer.php";
?>
</body>
</html>