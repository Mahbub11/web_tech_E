<?php
session_start();
include "admin_header.php";
require_once 'model.php';

$allSeller=getAllBuyer();
//echo json_encode($allSeller);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Seller</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    
   
    
    <style>
        .cointainer{

            padding:0px 300px 300px 300px;
        }
        .tableContainer{
            margin-top: 20px;
        }

    </style>
  
</head>

<body>


<div class="cointainer my-4">
    <h3>Manage Buyer</h3>

<form action="controller/managing_buyer.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name"  name="name" ><br>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control"  name="email"  placeholder="Enter Email">
    
    <div class="form-group">
    <label for="mob">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mob"  placeholder="Enter Phone Number">
    
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address"  placeholder="Enter Address">
    
    <div class="form-group">
    <label for="addedDate">Added Date</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="addedDate" placeholder="Enter Date">
    
    <div class="form-group">
    <label for="pass">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pass" placeholder="Enter pass">
    
  </div>
  

  <button type="add_seller" class="btn btn-primary" name = "createSeller">Add Seller</button>
</form>

<div class="tableContainer" > 
<table class="table my-8" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.l</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
     
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

   <?php

    $sno=0;
   foreach($allSeller as $row){

    $sno=$sno+1;

  
    
    echo '
<tr>
<td>'.$row['name'] .'</td>
<td>' . $row['phoneNo'] .'</td>
<td>' . $row['address'] .'</td>
<td>

<a href="seller_edit.php?edit='.$row['id'].'"class="btn btn-info"> Edit</a>
<a href="controller/managing_buyer.php?delete='.$row['id'].'"class="btn btn-info"> Delete</a>
<a href="managing_buyer.php?profile='.$row['id'].'"class="btn btn-info"> View Profile</a>

</td>
</tr>';
   }

   ?>
  </tbody>
</table>

</div>

</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
   <script src="adminData.js"></script> 
</body>
</html>