<?php

session_start();
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);

  $id10 = $_GET['id10'];


  $sql11 = "DELETE FROM webpetcare WHERE  ID = $id10";


  $con -> query($sql11);

  header('location:petcare.php');


 ?>
