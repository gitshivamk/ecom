<?php
session_start();
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
      <form action="delScript.php" method="post">
      <div class="main">
      <center><h2>Delete Product</h2></center> <br>
      <input type="text" name="id" placeholder="Enter Product Id to Delete" required><br><br>
      <input type="submit" name="delete" value="Delete Product" class="btn btn-danger">
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