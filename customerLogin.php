<?php

/*$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);*/

include "connection.php";

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM customer WHERE email = '$email' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $email and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location:delivery.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>