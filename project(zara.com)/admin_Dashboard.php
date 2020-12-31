<?php
session_start();

 include "connection.php";

 include "adminData.php";
 if(isset($_SESSION["total_seller"])){
     $total_seller=$_SESSION["total_seller"]+300;
     
 }
 if(isset($_SESSION["seller_addedT"])){
    $seller_addedT=$_SESSION["seller_addedT"]+50;
   
    
}
if(isset($_SESSION["dated"]) && isset($_SESSION["total_item"])){


    $dated=$_SESSION["dated"];
    $total=$_SESSION["total_item"];
}

 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet"  href="adminDashboardStyle.css">

</head>

<body>

    <div class="dashboard">
        <h5 id="heading">Dashboard</h5>
    </div>
    
    <div class="container">

      <div class="first_itemFlex">
 
         <div id="item1">
            <h2>600+</h2>
            <h4>Total Product</h4>
         </div>
     
         <div id="item2">
            <h2>200+</h2>
            <h4>Today Added Product</h4>
         </div>
         <div id="item3">
            <h2><?php echo "$total_seller +" ?></h2>
            <h4>Total Seller</h4>
         </div>
         <div id="item4">
            <h2><?php echo "$seller_addedT +"  ?></h2>
            <h4>Tody New Seller Joined</h4>
         </div>
         
      </div>
    </div>


 <div id="test">
    
    <div class="item">
      <h3>Monthly Selles Chart </h3>
      <canvas id="myChart"></canvas>
      
    </div>
    <section>
      <div class="item">B</div>
      <div class="item">C</div>
      <div class="item">D</div>
     
    </section>
  </div>
    
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  
  <script type="text/javascript">
   
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: <?php echo json_encode($dated); ?>,
        datasets: [{
            label: 'Sells Report',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: <?php echo  json_encode($total)  ?>,
        }]
    },

    // Configuration options go here
    options: {}
});
    
    
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>