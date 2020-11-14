<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProduct();


?>
<!DOCTYPE html>
<html>
<head>
	<title> Add Product</title>
	<style type="text/css">
		
		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
	</style>
</head>
<body>
	<h1> Show All Product</h1>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying_Price</th>
			<th>Selling_Price</th>
			<th>Visiablity</th>
			<th>Action</th>
			
		</tr>
	</thead>
	
	<tbody>
		
		<?php foreach ($products as $i => $products): ?>

			
				<tr>
				
				<td><?php echo $products['name'] ?></td>
				<td><?php echo $products['buying_price'] ?></td>
				<td><?php echo $products['selling_price'] ?></td>
				<td><?php echo $products['visiablity'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $products['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $products['id'] ?>">Delete</a></td>
				
			</tr>
			
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>