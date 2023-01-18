<?php
require "include/common.php";

$email=$_POST["email"];
$password=md5($_POST["password"]);

$s="select email,id from user where email='".$email."' and password='".$password."'";
$res=mysqli_query($con,$s);
if(mysqli_num_rows($res)==0)
{
	echo "Invalid User";
}
else
{
	$row=mysqli_fetch_array($res) or die(mysqli_error($con));
	$_SESSION["email"]=$row["email"];
	$_SESSION["user_id"]=$row["id"];
	header("location:products.php");
}

?>