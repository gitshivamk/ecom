<?php
require "include/common.php";

$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$contact=$_POST["phone"];
$city=$_POST["city"];
$address=$_POST["address"];

$s="insert into user(name,email,password,contact,city,address) values('".$name."','".$email."','".$password."','".$contact."','".$city."','".$address."')";
$res=mysqli_query($con,$s);
if($res!=0)
{
	echo "User inserted successfully";
	$_SESSION["email"]=$email;
	$_SESSION["user_id"]=mysqli_insert_id($con);
	header("location:products.php");
}
?>