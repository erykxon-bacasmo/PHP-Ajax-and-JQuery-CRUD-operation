<?php
include ("connection.php" ); 
$sql= "SELECT *  FROM `employees`" ; 
$result = mysqli_query($conn ,$sql); 
$data = [];
while ($fetch=mysqli_fetch_assoc($result)){
    $data[] = $fetch;
}
echo(json_encode($data));
?> 