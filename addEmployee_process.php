<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'supplier') or die(mysqli_error($mysqli));


$update = false;


$id = 0;
$EmpId = '';
$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$NICNumber = '';
$Address = '';
$PhoneNumber = '';
$Password = '';

if(isset($_POST['REGISTER'])){

    $EmpId = $_POST['EmpId'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $NICNumber = $_POST['NICNumber'];
    $Address = $_POST['Address'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Password = $_POST['Password'];
    

	$mysqli->query("INSERT INTO employee (EmpId, FirstName, LastName, UserName, Email, NICNumber, Address, PhoneNumber, Password) VALUES('$EmpId', '$FirstName', '$LastName', '$UserName', '$Email', '$NICNumber', '$Address', '$PhoneNumber', '$Password')") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	header("location: addEmployee.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE from employee WHERE id=$id") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: addEmployee.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM employee WHERE id='$id'") or die($mysqli->error());
	if (count($result)==1){
        $row = $result->fetch_array();
        $EmpId = $row['EmpId'];
	    $FirstName = $row['FirstName'];
        $LastName = $row['LastName'];
        $UserName = $row['UserName'];
        $Email = $row['Email'];
        $NICNumber = $row['NICNumber'];
        $Address = $row['Address'];
        $PhoneNumber = $row['PhoneNumber'];
        $Password = $row['Password'];
    }
	
}

if(isset($_POST['UPDATE'])){
    $id = $_POST['id'];
	$EmpId = $_POST['EmpId'];
	$FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $NICNumber = $_POST['NICNumber'];
    $Address = $_POST['Address'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Password = $_POST['Password'];
	
	$mysqli->query("UPDATE employee SET EmpId='$EmpId', FirstName='$FirstName', LastName='$LastName', UserName='$UserName', Email='$Email', NICNumber='$NICNumber', Address='$Address', PhoneNumber='$PhoneNumber', Password='$Password' WHERE id='$id'") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updateed!";
	$_SESSION['msg_type'] = "warning";
	
	header('location: addEmployee.php');
}

?>