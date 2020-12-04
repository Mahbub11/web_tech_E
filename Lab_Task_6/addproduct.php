<?php
include "header.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

 <form action="action.php" method="POST" enctype="multipart/form-data">
  <h1> ADD Product</h1>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="bprice">Buying Price:</label><br>
  <input type="text" id="bprice" name="bprice"><br>
  <label for="sprice">Selling Price:</label><br>
  <input type="text" id="sprice" name="sprice"><br>
  <label for="display">Display(0 or 1):</label><br>
  <input type="text" id="display" name="display"><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

