<?php

$conn = mysqli_connect("localhost","root","","electricks") or die("Connection Failed");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                
                <th>Name</th>
                <th width="90px">View Detiles</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td>{$row["prod_name"]}</td>

                <td>   <div class='thumbnail'>
                               
                                
                                
                               

                                </td>



                  
                <td align='center'><button class='edit-btn' data-eid=''>View Detiles</button></td><td align='center'></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
