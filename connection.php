<?php
$server_name= "localhost";
$user_name= "root";
$password= "";
$database_name= "php_ajax";
$conn= mysqli_connect($server_name , $user_name , $password , $database_name); 

if ($conn->connect_error) { 
// echo "connected" ; 
    echo $conn->connect_error;
    } else {
    return $conn;

}
?> 