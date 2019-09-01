<?php

include 'connection.php'

$conn = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($con, 'nimedco-pharmacy');

$username = $_POST['UserName'];
$password = $_POST['Password'];

$s = "select * from admin where UserName = '$username' && Password = '$password'";

$result = mysql_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:Dashboard.php');
} else{
    header('location:signIn.php');
}

    
?>
