<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'nimedco-pharmacy') or die(mysqli_error($mysqli));


if(isset($_POST['save'])){
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    
    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    $new = $row['ItemQuantity'] - $ItemQuantity;
    if($row['ItemQuantity'] == 0){
        $_SESSION['message'] = "Sorry Item is out of stock!";
	    $_SESSION['msg_type'] = "danger";
    }
    else if($row['ItemQuantity'] >= $ItemQuantity){
	$mysqli->query("INSERT INTO stocksales(ItemID, ItemQuantity) VALUES('$ItemID', '$ItemQuantity')") or die($mysqli->error);
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);

	$_SESSION['message'] = "Item has been added!";
    $_SESSION['msg_type'] = "success";
    } else{
        $_SESSION['message'] = "Sorry Item is not available for this order!";
	$_SESSION['msg_type'] = "warning";
    }
	
	header("location: CashierInvoice.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM stocksales WHERE id=$id") or die($mysql->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: CashierInvoice.php");
}


