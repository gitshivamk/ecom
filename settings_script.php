<?php
require "include/common.php";
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

$oldpassword=md5($_POST['oldpwd']);
$newpassword=md5($_POST['newpwd']);
$retypenewpwd=md5($_POST['Retypenewpwd']);


if(strlen($newpassword)!=strlen($retypenewpwd)){
    header('location: settings.php?password_error=length not match');
}
if(isset($_SESSION['admin_id'])){
  $admin_id=$_SESSION['admin_id'];
$query="SELECT password FROM admin WHERE id='$admin_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$oldpassworddb= $row['password'];
if($oldpassword==$oldpassworddb){
    $query1 ="UPDATE admin SET password='$newpassword' WHERE id='$admin_id'";
    $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
    header("location: settings.php?success=Your password is updated");
}else{
    header("location: settings.php?error=password doesn't match");
}
} 
else if(isset($_SESSION['user_id'])){
  $user_id=$_SESSION['user_id'];
$query="SELECT password FROM user WHERE id='$user_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$oldpassworddb= $row['password'];
if($oldpassword==$oldpassworddb){
    $query2 ="UPDATE user SET password='$newpassword' WHERE id='$user_id'";
    $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
    header("location: settings.php?success=Your password is updated");
}else{
    header("location: settings.php?error=password doesn't match");
}
}
else 
header("location: settings.php?error=Unable to Change Password");
?>