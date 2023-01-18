<?php
require "include/common.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin.css">
  </head>
<body>
    <?php
    include 'include/header.php';
    ?>
  </div>
  <div class="container section">
  <?php include("menu.php"); ?>
    <div class="right">
      <div class="main">
      <form action="addScript.php" method="post" enctype="multipart/form-data">
      <center><h2>Add Product</h2></center> <br>
      <input type="text" name="name" placeholder="Enter Product Name" required>
      <input type="text" name="brand" placeholder="Enter Brand Name" required>
      <input type="text" name="price" placeholder="Enter Price" required>
      <input type="file" name="imglr">
      <input type="submit" name="add" value="Add Product" class="btn btn-success">
      <div class="result"><?php if(isset($_GET['data'])) echo $_GET['data']; ?></div>
      </div>
      </form>
    </div>
  </div>
      <?php
    include 'include/footer.php';
    ?>
</body>
</html>