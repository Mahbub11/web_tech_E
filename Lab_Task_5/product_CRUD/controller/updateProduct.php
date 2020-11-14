<?php  
require_once '../model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
  $data['bprice'] = $_POST['buying_price'];
  $data['sprice'] = $_POST['sprice'];
  $data['display'] = $_POST['display'];

  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	
  	header('Location: ../showAllProduct.php?');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>