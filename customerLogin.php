
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $email ="";
  $passwordtext ="";

if(isset($_POST['loginsubmit'])){
    $email = $_POST['email'];
    $passwordtext = $_POST['password_text'];
}



    $hashcode  ="SELECT login_password,type from approved where email = '$email'";
    $email12  ="SELECT count(email) from approved where email = '$email'";
    $result1 = $con->query($hashcode);
    $result2 = $con->query($email12);





while($row2 = mysqli_fetch_array($result2)){

    if((1==$row2['count(email)'])){



      while($row1 = mysqli_fetch_array($result1)){
        if(password_verify($passwordtext,$row1['login_password'])){

          if($row1['type'] =="admin"){
            header('location:adminview.php');
          }
          else if($row1['type'] =="member"){

            header('location:hello.php');
          }




        }




        else{
            $message = "login is unsuccess full";
        }

      }
      }

    else{
          $message = "login is unsuccess full";
    }

}






}




 ?>


