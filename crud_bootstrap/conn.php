<?php
 
//MySQLi Procedural
$conn = mysqli_connect("db-server","root","fazool","anas");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>