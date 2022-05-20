<?php

$host = "localhost:3306"; 
$user = "root"; 
$password = ""; 
$dbname = "foka"; 

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
