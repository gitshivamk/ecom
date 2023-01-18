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
<div class="row text-center row2" style="overflow-auto;">

<?php
$query="Select * from product";
$rs=mysqli_query($con,$query);
while($row=mysqli_fetch_array($rs)){
?>
<div class="col-md-3 col-xs-6">
<div class="thumbnail">
	<img src="<?php echo 'Image/'.$row['image']; ?>" alt="Image is Loading">
<div class="caption">
	<p class="text-info"><?php echo $row['id'].".".$row['name']; ?><p>
	<p class="text-warning"><?php echo $row['brand']; ?></p>
	<p class="text-danger"><?php echo "INR ".$row['price']; ?></p>
</div>
</div>
</div>
<?php } ?>

</div>
    </div>
  </div>
      <?php
    include 'include/footer.php';
    ?>
</body>
</html>