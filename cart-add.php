<?php
require "include/common.php";

$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];
echo $user_id."<br>";
echo $item_id;

$query = "INSERT INTO users_items(user_id, item_id, status) VALUES('".$user_id."', '".$item_id."', 'Added to cart')";
$run = mysqli_query($con,$query) or die(mysqli_error($con));

header('location: products.php');
?>