<?php
session_start();
require "include/common.php";
if(isset($_SESSION["UserName"])){
    header('location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">  
  </head>
  <body>
    <!--Header Here -->
    <?php
    include 'include/header.php';
    ?>
    <div class="container-fluid">
      <div id="content">  
      <div id="banner_image" style="background-image:url('Image/cover.jpg');">
        <center>
        <div id="banner_content">
        <h1>Get the latest Fashion Products here</h1><br>
        <p><a href="products.php" class ="btn btn-danger btn-lg active">Shop Now</a></p>
        </div>
        </center>
      </div>
      </div>
      <!--Footer Here -->
    <?php
    include 'include/footer.php';
    ?>
    </div>
  </body>
</html>