<?php

include('db_connection.php');

$db = new Database();
$conn = $db->db_connect();

//Fetch Data
if(isset($_POST['updateid']) && isset($_POST['updateid']) != "")
{
    $id = $_POST['updateid'];
    $query = "select * from product where id = '$id'";
    
    $result = mysqli_query($conn,$query);
    
    if(!$result)
    {
        exit(mysqli_error());
    }
    
    $response = array();
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $response = $row;
        }
    }
    else
    {
        $response['status']=200;
        $response['message']="Data Not Found";
    }
    echo json_encode($response);
}
else
{
    $response['status']=200;
    $response['message']="Invalid Request";
}




//update code
if(isset($_POST['update_hidden_id']))
{
    $update_id = $_POST['update_hidden_id'];
    $update_name = $_POST['update_name'];
    $update_description = $_POST['update_description'];
    $update_price = $_POST['update_price'];
    $update_quantity = $_POST['update_quantity'];
   
    
    $query = "update product set name = '$update_name', description = '$update_description',price = '$update_price',quantity = '$update_quantity' where id = '$update_id'";
    
    mysqli_query($conn,$query);
}


?>



