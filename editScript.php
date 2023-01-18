<?php
$pid=$_POST["id"];
$pname=$_POST["name"];
$pbrand=$_POST["brand"];
$price=$_POST["price"];
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("Server Could Not Be Connected");
$s="update products set Product_name='".$pname."',Brand='".$pbrand."',Price='".$price."' where Product_id='".$pid."'";
$check=mysqli_query($con,$s);
if($check!=0)
{
$res="Updated Successfully!"; 
header("location:editProducts.php?data=$res");
}
else 
{
$err="Unable to Update Product";
header("location:editProducts.php?data=$err");
}
?>