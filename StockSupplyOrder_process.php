<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$ItemID = '';
$ItemQuantity ='';
$SupplerID ='';
$OrderID ='';
$exp_date ='';
$exp_month = '';
$exp_year ='';
$mfg_date ='';
$mfg_month ='';
$mfg_year ='';
$phs_date = '';
$phs_month ='';
$phs_year ='';
$Pu_price ='';


if(isset($_POST['save'])){
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    $SupplerID = $_POST['SupplerID'];
    $OrderID = $_POST['OrderID'];
    $exp_date = $_POST['exp_date'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $mfg_date = $_POST['mfg_date'];
    $mfg_month = $_POST['mfg_month'];
    $mfg_year = $_POST['mfg_year'];
    $phs_date = $_POST['phs_date'];
    $phs_month = $_POST['phs_month'];
    $phs_year = $_POST['phs_year'];
    $Pu_price = $_POST['Pu_price'];

    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();    

    $new = $row['ItemQuantity'] + $ItemQuantity;
	$mysqli->query("INSERT INTO StockSupplyOrder(ItemID, ItemQuantity, SupplerID, OrderID, exp_date, exp_month, exp_year, mfg_date, mfg_month, mfg_year, phs_date, phs_month, phs_year, Pu_price) VALUES('$ItemID', '$ItemQuantity', '$SupplerID', '$OrderID', '$exp_date', '$exp_month', '$exp_year', '$mfg_date', '$mfg_month', '$mfg_year', '$phs_date', '$phs_month', '$phs_year', '$Pu_price')") or die($mysqli->error);
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	header("location: StockSupplyOrder.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $ItemID = $_GET['ItemID'];
    
    $Qty1 = $mysqli->query("SELECT ItemQuantity FROM StockSupplyOrder WHERE id=$id") or die($mysqli->error);
    $row1 = $Qty1->fetch_array();

    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    
    $new = $row['ItemQuantity'] - $row1['ItemQuantity'];
    echo $new;
    $mysqli->query("DELETE FROM StockSupplyOrder WHERE id=$id") or die($mysql->error());
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: StockSupplyOrder.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM StockSupplyOrder WHERE id=$id") or die($mysqli->error());
	
		$row = $result->fetch_array();
		$ItemID = $row['ItemID'];
        $ItemQuantity = $row['ItemQuantity'];
        $SupplerID = $row['SupplerID'];
        $OrderID = $row['OrderID'];
        $exp_date = $row['exp_date'];
        $exp_month = $row['exp_month'];
        $exp_year = $row['exp_year'];
        $mfg_date = $row['mfg_date'];
        $mfg_month = $row['mfg_month'];
        $mfg_year = $row['mfg_year'];
        $phs_date = $row['phs_date'];
        $phs_month = $row['phs_month'];
        $phs_year = $row['phs_year'];
        $Pu_price = $row['Pu_price'];
	
}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    $SupplerID = $_POST['SupplerID'];
    $OrderID = $_POST['OrderID'];
    $exp_date = $_POST['exp_date'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $mfg_date = $_POST['mfg_date'];
    $mfg_month = $_POST['mfg_month'];
    $mfg_year = $_POST['mfg_year'];
    $phs_date = $_POST['phs_date'];
    $phs_month = $_POST['phs_month'];
    $phs_year = $_POST['phs_year'];
    $Pu_price = $_POST['Pu_price'];

    
    $Qty1 = $mysqli->query("SELECT ItemQuantity FROM StockSupplyOrder WHERE id=$id") or die($mysqli->error);
    $row1 = $Qty1->fetch_array();

    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    
    $new = $row['ItemQuantity'] - $row1['ItemQuantity'] + $ItemQuantity;

	$mysqli->query("UPDATE StockSupplyOrder SET ItemID='$ItemID', ItemQuantity='$ItemQuantity', SupplerID='$SupplerID', OrderID='$OrderID', exp_date='$exp_date', exp_month='$exp_month', exp_year='$exp_year', mfg_date='$mfg_date', mfg_month='$mfg_month', mfg_year='$mfg_year', phs_date='$phs_date', phs_month='$phs_month', phs_year='$phs_year', Pu_price='$Pu_price' WHERE id=$id") or die($mysqli->error);
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updateed!";
	$_SESSION['msg_type'] = "warning";
	
	header('location: StockSupplyOrder.php');
}

?>
