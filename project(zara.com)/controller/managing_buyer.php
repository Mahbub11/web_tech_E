<?php

require_once '../model.php';
session_start();

$name='';

if(isset($_POST["createSeller"])){

    $data['name']= $_POST['name'];
    $data['email']= $_POST['email'];
    $data['address']= $_POST['address'];
    $data['mob']= $_POST['mob'];
    $data['pass']= $_POST['pass'];
    $data['date']= $_POST['addedDate'];

    if (addBuyer($data)) {
      
        echo 'Record Added';
      
    }
}



if(isset($_GET["delete"])){

    $id=$_GET["delete"];
    if(deleteBuyer($id)){

       $_SESSION["message"]="Record has been Deleted!";
       $_SESSION["msg_type"]="Danger";

       echo "Record has been Deleted!";
      
    }

}


    
if(isset($_POST["editSeller"])){


    $data['name']= $_POST['name'];
    $data['email']= $_POST['email'];
    $data['address']= $_POST['address'];
    $data['mob']= $_POST['mob'];
    $data['pass']= $_POST['pass'];
    $data['date']= $_POST['addedDate'];

        $id=1;
    
    if(updateBuyer($data,1)){

        echo "Update Successfully";
    }
    
    


} 




else{

    echo 'You are not allowed to access this page.';
}

?>