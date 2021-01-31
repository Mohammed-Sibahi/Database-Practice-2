<?php 


    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'mobilephones'; 

    
    $connection = mysqli_connect($server, $username, $password, $database); 

    if(!$connection)
        {
            echo ('failed to connect');
        }

        else
        {
             
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            

           

                header('Location: index.php');
        }

        

?>