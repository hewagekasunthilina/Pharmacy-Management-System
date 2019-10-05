<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$ItemID = '';
$ItemName ='';
$Description ='';
$Category ='';
$Price ='';

if(isset($_POST['save'])){
	$ItemID = $_POST['ItemID'];
    $ItemName = $_POST['ItemName'];
    $Description = $_POST['Description'];
    $Category = $_POST['Category'];
    $Price = $_POST['Price'];

	$mysqli->query("INSERT INTO stockitem(ItemID, ItemName, Description, Category, Price) VALUES('$ItemID', '$ItemName', '$Description', '$Category', '$Price')") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	header("location: StockItem.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM stockitem WHERE id=$id") or die($mysql->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: StockItem.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM stockitem WHERE id=$id") or die($mysqli->error());
	
		$row = $result->fetch_array();
		$ItemID = $row['ItemID'];
        $ItemName = $row['ItemName'];
        $Description = $row['Description'];
        $Category = $row['Category'];
        $Price = $row['Price'];
	
}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$ItemID = $_POST['ItemID'];
    $ItemName = $_POST['ItemName'];
    $Description = $_POST['Description'];
    $Category = $_POST['Category'];
    $Price = $_POST['Price'];
	
	$mysqli->query("UPDATE stockitem SET ItemID='$ItemID', ItemName='$ItemName', Description='$Description', Category='$Category', Price='$Price' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updateed!";
	$_SESSION['msg_type'] = "warning";
	
	header('location: StockItem.php');
}

?>
