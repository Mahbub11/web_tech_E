<?php

include "connection.php";

// total seller count
$sql="SELECT name  FROM seller";
$q = $db->query($sql);
if($q){

    $row = mysqli_num_rows($q); 
          
    if ($row) 
       { 
           $_SESSION["total_seller"]=$row;
           echo "total Seller:  $row";
       } 
}

// today seller added count
 $sql="SELECT * FROM seller WHERE added_date <= CURDATE()";
 $q = $db->query($sql);
if($q){

    $row = mysqli_num_rows($q); 
          
    if ($row) 
       { 
           $_SESSION["seller_addedT"]=$row;
          
       } 
}


 $sql="SELECT dated, SUM(product_price BETWEEN 0 AND 100000) AS 'total' FROM sold_product GROUP BY dated";

 $q = $db->query($sql);
 $json=[];
 $json2=[];

 if($q){
 
    while ($row = mysqli_fetch_assoc($q)){

        extract($row);
        $json[]= $dated;
        $json2[]=$total;

    }
    $_SESSION["dated"]=$json;
    $_SESSION["total_item"]=$json2;
 }
 
?>

