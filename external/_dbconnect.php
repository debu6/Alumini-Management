<?php
$server="localhost";
$username="root";
$password="";
$database="alumni_nexus";


$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if(!$conn){
  //echo "connected sucessfully";
//}
//else{
  die("Connection error".mysqli_connect_error());
}
 ?>
