<?php
require "include/common.php";

$name=$_POST["name"];
$price=$_POST["price"];
$brand=$_POST["brand"];
$img_name=$_FILES["imglr"]["name"];
$folder="img/".$img_name;
move_uploaded_file($_FILES["imglr"]["tmp_name"],$folder);

$s="insert into product(name,price,brand,image) values('".$name."','".$price."','".$brand."','".$img_name."')";
$res=mysqli_query($con,$s);
if($res!=0)
{
$ins="Added Successfully!"; 
header("location:addProducts.php?data=$ins");
}
else 
{
$err="Unable to Add Product";
header("location:addProducts.php?data=$err");
}
?>