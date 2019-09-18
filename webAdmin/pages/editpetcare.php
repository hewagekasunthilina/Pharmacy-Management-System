
<?php 
session_start();
    /* $servername  = "localhost";
     $username = "root";
     $password = "";
     $dbname = "nimedco";
   
     $con = new mysqli($servername,$username,$password,$dbname);*/

     include "connection.php";
 
        $newName = $_POST['newName'];
        $newPrice = $_POST['newPrice'];
        $id = $_POST['id'];

    
         $sql = "UPDATE webpetcare SET title='$newName',price = '$newPrice' WHERE ID ='$id'";
        
         $conn->query($sql);

         header('location:petcare.php');
         
    $conn->close();
?>



