<?php
require "include/common.php";
$rev=$_POST["review"];
$s="INSERT INTO users_items (review) VALUES ('".$rev."')";
if(mysqli_query($con,$s)){
header("location:products.php");
}
else{
  echo '<script>alert("Uanble to submit review")</script>';
  header("location:products.php");
}
?>