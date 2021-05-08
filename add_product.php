<?php 
 
    include ('product.php');
    $product = new Product();  
     
    $flag  = $product->add($_POST['name'],$_POST['description'],$_POST['price'],$_POST['quantity']);


    echo json_encode($flag);

 ?>