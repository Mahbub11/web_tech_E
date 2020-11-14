<?php 

require_once 'controller/productInfo.php';
$product = fetchStudent($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
 
  <?php
   
  
  ?>
  <h1> Edit Product</h1>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $product["name"] ?>"><br>
  <label for="bprice">Buying Price:</label><br>
  <input type="text" id="bprice" name="bprice" value="<?php echo $product["buying_price"] ?>"><br>
  <label for="sprice">Selling Price:</label><br>
  <input type="text" id="sprice" name="sprice" value="<?php echo $product["selling_price"] ?>"><br>
  <label for="display">Display( 0 or 1):</label><br>
  <input type="text" id="display" name="display" value="<?php echo $product["visiablity"] ?>"><br>
  <input type="hidden" name="id" value="<?php echo $product["id"] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

