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
    </head>
    <body>
    <?php
    include 'include/header.php';
    ?>
      <div class="main">
<form action="signup_script.php" method="post">
     <center><h2>Sign Up</h2></center><br>
     <input type="text" placeholder="Enter Your Name" class="form-control" name="name" required><br>
     <input type="email" placeholder="Enter Your Email" class="form-control" name="email" required><br>
     <input type="password" class="form-control" placeholder="Enter Password" name="password" required><br>
     <input type="text" class="form-control" placeholder="Enter Contact No." name="phone" required><br>
     <input type="text" class="form-control" placeholder="Enter City" name="city" required><br>
     <input type="text" class="form-control" placeholder="Enter Address" name="address" required><br>
     <input type="submit" value="Sign Up" class="btn btn-success btn-block" name="submitbtn">
</form>
</div>
    <?php
    include 'include/footer.php';
    ?>
</body>
</html>