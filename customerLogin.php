<?php

$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);

if($_SERVER["REQUEST_METHOD"]=="POST"){

  $email ="";
  $passwordtext ="";

if(isset($_POST['customerLogin'])){
    $email = $_POST['email'];
    $passwordtext = $_POST['password'];
}



    $hashcode  ="SELECT password from customer where email = '$email'";
    $email12  ="SELECT count(email) from customer where email = '$email'";
    $result1 = $con->query($hashcode);
    $result2 = $con->query($email12);





while($row2 = mysqli_fetch_array($result2)){

    if((1==$row2['count(email)'])){



      while($row1 = mysqli_fetch_array($result1)){
        if(password_verify($passwordtext,$row1['password'])){

            $message = "login is successfull";
            header('location:delivery.php');
          }
      
      }
    }

    else{
          $message = "login is unsuccessfull";
    }

}



}


 ?>


