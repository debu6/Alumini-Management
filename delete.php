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
	$id=$_GET['id'];
	$sql= "DELETE registration.*, create_account.* FROM create_account , registration WHERE (registration.reg_no=create_account.registration_num AND registration.reg_no='$id')";
	mysqli_query($conn, $sql);
    header('location:admindetails.php');


?>