<?php
/*$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);
*/

include "connection.php";

$name = '';
$email = '';
$address = '';
$mobleNo = '';
$login_password =''; 

$name = $_POST['name'];
$email =  $_POST['email'];
$address = $_POST['address'];
$mobleNo =  $_POST['number'];
$login_password = $_POST['password'];


  $hash= password_hash($login_password,PASSWORD_DEFAULT);
  $sql ="INSERT INTO customer(name,email,address,mobile,password) values('$name','$email','$address','$mobleNo','$hash')";

  $conn->query($sql);
  
        
    header('Location:delivery.php');

  $conn->close();
   
?>