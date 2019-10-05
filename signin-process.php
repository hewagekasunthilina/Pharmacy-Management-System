<?php
session_start();

if(isset($_POST['SIGN'])){

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

$UserName = stripcslashes($UserName);
$Password = stripcslashes($Password);
$UserName = mysql_real_escape_string($UserName);
$Password = mysql_real_escape_string($Password);

mysql_connect("localhost", "root", "");
mysql_select_db("supplier");

$result = mysql_query("select * from employee where UserName = '$UserName' and Password = '$Password'") or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);
if ($row['UserName'] == $UserName && $row['Password'] == $Password){
    header("location: Dashboard.php");
} else{
    
    $_SESSION['message'] = "Invalid User Login !!!     Please Enter Valid User Login !!!";
    $_SESSION['msg_type'] = "danger";

    header("location: signIn.php");
}
}
    
?>
