<?php 
 
    include ('product.php');
    
    $product = new Product();  
   
    $flag  = $product->DeleteUser($_POST['id']);

    echo json_encode($flag);

 ?>