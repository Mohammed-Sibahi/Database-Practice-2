<?php

      
      $server = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'mobilephones'; 
  
      
      $connection = mysqli_connect($server, $username, $password, $database); 

      $id = $_GET["id"];

      $query = 'DELETE FROM customers WHERE Id = '.$id; 

      mysqli_query($connection, $query);
      header('Location: index.php');

?>
