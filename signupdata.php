<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername, $username, $password);

if($conn){
	echo "Connection is successfull";
}
else{
	echo "Connection is not successfull";
}
?>