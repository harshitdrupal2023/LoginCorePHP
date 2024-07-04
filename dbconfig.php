<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vega6";
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if($conn)
// {
// //echo "Connected successfully";	
// }

//$conn -> close();





$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection  Failed");
}
// echo "connection Succefully";






// INSERT INTO `users`(`uname`, `upass`, `uemail`, `uimg`, `status`) VALUES ('harshit','shukla@123','ratan.sigra@gmail.com','ratan.png','1');
// DELETE FROM `users` WHERE uemail='ratan.sigra@gmail.com';





?>











