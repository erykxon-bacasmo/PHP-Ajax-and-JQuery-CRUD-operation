<?php
include ("connection.php" ); 
$id =$_GET['id' ];  
$sql= "DELETE FROM  `employees` WHERE `id`  =  $id " ; 

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record deleted succesfully!'
    ];
    echo (json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record deleted failed!'
    ];
    echo (json_encode($response));
} 
?> 