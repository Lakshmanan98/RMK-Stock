<?php
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dispatch</title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body{
background-color:#CBFFC2;
}
</style>

</head>
<body>
<div class="container-fluid">
<?php 
include 'nav.php';
?>

<center><h3>Dispatch details</h3></center>
  <hr>
  <form action="disbck.php" method="post">
    <center><div class="form-inline">
      <input type="text" class="form-control" name="item" placeholder="Enter the name of item " >
      <input type="text" class="form-control" name="quantity" placeholder="Enter the quantity of item " >
	<select name="place" class="form-control">
	<option value="RMK">RMK</option>
	<option value="RMD">RMD</option>
	<option value="RMKCET">RMKCET</option>
	</select>
    </div><center>
<br/>
  <center><button type="submit" class="btn btn-info">Dispatch</button></center>
</form>
<center><a href="homepage.php">Home</a></center>
</div>
</body>
</html>
