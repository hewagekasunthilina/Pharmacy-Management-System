<?php

session_start();
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);

  $id10 = $_GET['id10'];


  $sql11 = "DELETE FROM webpersonalcare WHERE  ID = $id10";


  $con -> query($sql11);

  header('location:personalcare.php');


 ?>
