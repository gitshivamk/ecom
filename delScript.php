<?php
$pid=$_POST["id"]; 
$con=mysqli_connect("localhost","root","","mydb");
if(!$con) 
die("Server Could Not Be Connected"); 
$s="delete from products where Product_id='".$_POST["id"]."'";
if(mysqli_query($con,$s))
{ 
$del="Deleted Successfully!";
header("location:delProducts.php?data=$del");
}
else 
{ 
$del="Unable to Remove"; 
header("location: delProducts.php?data=$del");
mysqli_error($con);
}
mysqli_close($con);
?>