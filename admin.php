<?php
session_start();
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
      <div id="home">
        <h2>Welcome!</h2><br>
        <p>Manage Your Products Easily With The Help Of This Page.<br><br>
        Add, Edit, Delete and View Products On This Page.
        <br>
        <h3>Thank you!</h3>
        </p>
      </div>
    </div>
  </div>
  </div>
    <?php
    include 'include/footer.php';
    ?>
</body>
</html>