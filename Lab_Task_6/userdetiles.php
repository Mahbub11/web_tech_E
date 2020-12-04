<?php
 include "connection.php";

 $id=$_SESSION["id"];
 $sql="SELECT * FROM `users` WHERE `id`='$id'";
 $q=$db -> query($sql);
 $row=$q -> fetch_assoc();
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>

   .passContainer{
      width=50px;
      
   }  
  </style>
</head>
<body>

<?php
include "header.php";

?>

<div class="container-fluid">
   <h2> Your Email is:  <?=$row["email"] ?> </h2>



   
<div class="passContainer" >
  <h2>Change Password</h2>
  <form action="action.php"  method="post">
  <div >
      <label for="password">Current Password:</label>
      <input type="password" class="form-control" id="password" placeholder=<?=$row["password"] ?>  name="cr_password">
    </div>
    <div class="form-group">
      <label for="password">New Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter New password" name="nw_password">
    </div>
    
    <button type="submit" class="btn btn-primary" name="change_pass">Submit</button>
  </form>
</div>
</div>





</body>
</html>
