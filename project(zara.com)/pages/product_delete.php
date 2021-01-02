
<?php
//including the database connection file
include '../config/dbconn.php';

$id = $_GET['prod_id'];
//deleting the row from table
$result = mysqli_query($dbconn, "DELETE FROM products WHERE prod_id=$id");
//redirecting to the display page (index.php in our case)
header("Location:admin_panel.php");
?>
    