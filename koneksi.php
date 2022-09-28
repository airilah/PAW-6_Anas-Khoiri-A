<?php 
$servername ="localhost";
$username ="root";
$password ="";
$database="nas";

// Create connection
$koneksi=new mysqli ($servername,$username,$password,$database);

// check connection
if (!$koneksi) {
	die("connection failed :".mysqli_connect_error());
}

?>