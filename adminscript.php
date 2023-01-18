<?php
require "include/common.php";

$email = $_POST["email"];
$password = $_POST["password"];

$s="select email,id from admin where email='".$email."' and password='".$password."'";
$res=mysqli_query($con,$s);
if(mysqli_num_rows($res)==0)
{
	echo "Invalid User";
}
else
{
	$row=mysqli_fetch_array($res) or die(mysqli_error($con));
	$_SESSION["email"]=$row["email"];
	$_SESSION["admin_id"]=$row["id"];
	echo "login successful";
	header("location:admin.php");
}
?>