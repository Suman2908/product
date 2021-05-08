<?php
include ('db_connection.php');

$db = new Database();
$conn = $db->db_connect();

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM product";
 $result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <table class="table table-striped table-bordered" border="1">  
                   <tr>  
                        <th>Id</th>  
                        <th>Name</th>  
                        <th>Description</th>  
                        <th>Price</th>
                   </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>  
                <td>'.$row["id"].'</td>  
                <td>'.$row["name"].'</td>  
                <td>'.$row["description"].'</td>  
                <td>'.$row["price"].'</td>  
     
   </tr>
  ';
 }
$output .= '</table>';

header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=Product.xls');
echo $output;
}
}
?>




