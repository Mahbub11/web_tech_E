<?php
include('../config/dbconn.php');
        if(isset($_POST['submit']))
        {
            
            $comment=$_POST['post'];
            $prod_id=$_GET['prod_id'];
            
            
            
            $query = "INSERT INTO comment (product_id,comment,user_name) 
            VALUES ('$prod_id','$comment','mahbub')";  
    
            $result = mysqli_query($dbconn,$query);
            if($result){
                echo "comment added";
            }


            


        }

    ?>
