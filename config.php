<?php
$conn = new mysqli('localhost', 'root', '', 'imp_exp');
//Check for database connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
?>
