<?php

session_start();
/*$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);*/

include "connection.php";

  $id10 = $_GET['id10'];


  $sql11 = "DELETE FROM webbabyproducts WHERE  ID = $id10";


  $conn -> query($sql11);

  header('location:babyproducts.php');


 ?>
