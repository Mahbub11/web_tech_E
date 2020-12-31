<?php 

$con=mysqli_connect("localhost","root","","cloth_selling");

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	

	

    $img_name = $_FILES['my_image']['name'];

    $sql="INSERT INTO products (name, price, des,img_link)
    VALUES ('John', '222', 'john@example.com', '$img_name')";

    $res=mysqli_query($con,$sql);

    if($res){

        move_uploaded_file($_FILES['my_image']['tmp_name'], "$img_name");
    }

    
    
	

}else {
	header("Location: index1.php");
}