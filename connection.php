<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$db = 'nimedco-pharmacy';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
if($conn -> connect_error){
	die("connection failed :". $conn ->connect_error);
}
 ?>