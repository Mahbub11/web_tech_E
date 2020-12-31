<?php
session_start();
include "admin_header.php";
require_once 'model.php';

$name='';
$email='';
$mobNo='';
$address='';
$date='';
$pass='';
$id='';



if(isset($_GET["edit"])){

 
  $id=$_GET["edit"];
  $row= showSeller($id);
  $name=$row['name'];
  $email=$row['email'];
  $address=$row['address'];
  $mobNo=$row['phoneNo'];
  $pass=$row['password'];
  $date=$row['added_date'];




}

else{

  echo 'You are not allowed to access this page.';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .cointainer{

            padding:0px 300px 300px 300px;
        }
       

    </style>
</head>
<body>


<form action="controller/managing_buyer.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" value= <?php echo $name; ?> name="name"><br>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" value= <?php echo $email; ?> name="email"  placeholder="Enter Email">
    
    <div class="form-group">
    <label for="mob">Mobile Number</label>
    <input type="text" class="form-control" value= <?php echo $mobNo; ?> name="mob"  placeholder="Enter Phone Number">
    
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" value= <?php echo $address; ?> name="address"  placeholder="Enter Address">
   
    <div class="form-group">
    <label for="addedDate">Added Date</label>
    <input type="text" class="form-control" value= <?php echo $date; ?> name="addedDate" placeholder="Enter Date">
    
    <div class="form-group">
    <label for="pass">Password</label>
    <input type="text" class="form-control" value= <?php echo $pass; ?> name="pass" placeholder="Enter pass">
    
  </div>
  

  <button type="add_seller" class="btn btn-primary" name = "editSeller">Edit Seller</button>
</form>
    
</body>
</html>