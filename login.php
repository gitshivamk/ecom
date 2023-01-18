<?php
require "include/common.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"> 
<script>
$(document).ready(function(){
  $("#aflip").click(function(){
    $("#apanel").slideToggle("normal");
  });
});
$(document).ready(function(){
  $("#uflip").click(function(){
    $("#upanel").slideToggle("normal");
  });
});
</script>
    </head>
    <body>
    <?php
    include 'include/header.php';
    ?>
    <div class="main">
 <div id="aflip" style="background-color:#dcdcdc;">Click for Admin Login</div>
<div id="apanel">    
<form action="adminscript.php" method="post">
    <input type="email" placeholder="Enter your email" class="form-control" name="email" required><br>
    <input type="password" class="form-control" placeholder="Enter password" name="password" required><br>
    <input type="submit" value="Login" class="btn btn-primary btn-block" name="adminlogin">
</form>
</div>
<br>
<div id="uflip" style="background-color:#dcdcdc;">Click for User Login</div>
<div id="upanel">
    <form action="userscript.php" method="post">
    <input type="email" class="form-control" placeholder="Enter your email" name="email" required><br>
    <input type="password" class="form-control" placeholder="Enter password" name="password" required><br>
    <input type="submit" value="Login" class="btn btn-primary btn-block" name="userlogin">
</form>
</div>
</div>
    <?php
    include 'include/footer.php';
    ?>
    </body>
    </html>