<?php

require_once ('db_connection.php');

class Product 
{

  public $conn; 

  function __construct() 
  {    
      // Create database connection
    $db = new Database();
    $this->conn = $db->db_connect();
 
  }   



  function add($name,$description,$price,$quantity)
  {
    
     $sql = "insert into product (name,description,price,quantity) values('$name','$description','$price','$quantity')";
    
    // echo $sql;exit;

  	if($this->conn->query($sql) === TRUE)
  	{
  		return true;
  	}
  	else
  	{
  		return false;
  	}
    
  }



  function DeleteUser($id)
  {
      
    $sql = "delete from product where id = $id";
      // echo "$sql";exit;
    
    if($this->conn->query($sql) === TRUE)
  	{
         return true;
  	}
  	else
  	{
          return false;
  	}
  }

}