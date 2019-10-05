<?php

session_start();

$id = 0;
$update = false;
$ItemID = '';
$ItemName ='';
$ItemQuantity ='';
$Total ='';

$new ='';

$mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));

if (isset($_POST['new'])){
    $mysqli->query("INSERT INTO cashierinvoice(subTotal, discount, netTotal) VALUES(0,0,0)") or die($mysqli->error);
    

    header("location: CashierInvoice.php");
}


if(isset($_POST['save'])){
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    $id = $_POST['id'];
    
    $pQty = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    $new = $row['ItemQuantity'] - $ItemQuantity;
    $total= $row['Price'] * $ItemQuantity;
    if($row['ItemQuantity'] == 0){
        $_SESSION['message'] = "Sorry Item is out of stock!";
	    $_SESSION['msg_type'] = "danger";
    }
    else if($row['ItemQuantity'] >= $ItemQuantity){
	$mysqli->query("INSERT INTO cashierinvoiceitem(invoiceID, ItemID, ItemQuantity, Total) VALUES('$id','$ItemID', '$ItemQuantity', '$total')") or die($mysqli->error);
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);
    $intot = $mysqli->query("SELECT subTotal FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
    $tot = $intot->fetch_array();
    $subtot=$tot['subTotal'];
    $nsubtot=$subtot+$total;
    $mysqli->query("UPDATE cashierinvoice SET subTotal='$nsubtot', netTotal='$nsubtot' WHERE id='$id'") or die($mysqli->error);
    

	$_SESSION['message'] = "Item has been added!";
    $_SESSION['msg_type'] = "success";
    } else{
        $_SESSION['message'] = "Sorry ".$row['ItemID']." only ".$row['ItemQuantity']." Items available in stock!";
	$_SESSION['msg_type'] = "warning";
    }
	
	header("location: CashierInvoice.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $ItemID = $_GET['ItemID'];
    $ItemQuantity = $_GET['ItemQuantity'];

    $intot = $mysqli->query("SELECT * FROM cashierinvoiceitem WHERE invoiceID='$id' and ItemID='$ItemID' and ItemQuantity='$ItemQuantity'") or die($mysqli->error);
    $tot = $intot->fetch_array();
    $toti=$tot['Total'];
    $iQt=$tot['ItemQuantity'];

    $mysqli->query("DELETE FROM cashierinvoiceitem WHERE invoiceID='$id' and ItemID='$ItemID' and ItemQuantity='$ItemQuantity'") or die($mysql->error());
    $pQty = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    $new = $row['ItemQuantity'] + $iQt;
    //var_dump($new);
   // die();
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);

    $intot = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
    $tot = $intot->fetch_array();
    $subtot=$tot['subTotal'];
    $nsubtot=$subtot-$toti;

    $mysqli->query("UPDATE cashierinvoice SET subTotal='$nsubtot', netTotal='$nsubtot' WHERE id='$id'") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: CashierInvoice.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $ItemID = $_GET['ItemID'];
	$update = true;
	$resultin = $mysqli->query("SELECT * FROM cashierinvoiceitem WHERE invoiceID='$id' and ItemID='$ItemID'") or die($mysqli->error());
	
        $rowin = $resultin->fetch_array();
        $inID = $rowin['invoiceID'];
		$ItemID = $rowin['ItemID'];
        $ItemQuantity = $rowin['ItemQuantity'];
        $Total = $rowin['Total'];
	
}

if(isset($_POST['update'])){
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    $id = $_POST['id'];

    $itemValue = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $itemValue->fetch_array();

    $invoiceItemV = $mysqli->query("SELECT * FROM cashierinvoiceitem WHERE ItemID='$ItemID' and invoiceID='$id'") or die($mysqli->error);
    $row1 = $invoiceItemV->fetch_array();
    $firstitemV = $row1['ItemQuantity'];
    
    $invoice = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
    $in = $invoice->fetch_array();
    $firsttot = $in['subTotal'];

    $nowitem = $row['ItemQuantity'] + $firstitemV;
    $lastitem = $nowitem - $ItemQuantity;
    $ptot = $row1['Total'];
    $ntot = $row['Price'] * $ItemQuantity;
    $nsubtot = $firsttot - $ptot + $ntot;


    if($nowitem >= $ItemQuantity){
        $mysqli->query("UPDATE cashierinvoiceitem SET ItemQuantity='$ItemQuantity', Total='$ntot' WHERE invoiceID='$id' and ItemID='$ItemID'") or die($mysqli->error);
        $mysqli->query("UPDATE stockitem SET ItemQuantity='$lastitem' WHERE ItemID='$ItemID'") or die($mysqli->error);
        $mysqli->query("UPDATE cashierinvoice SET subTotal='$nsubtot', netTotal='$nsubtot' WHERE id='$id'") or die($mysqli->error);

        $_SESSION['message'] = "Record has been updateed!";
	    $_SESSION['msg_type'] = "warning";
    }
    else{
        $_SESSION['message'] = "Sorry ".$row['ItemID']." only ".$nowitem." Items available in stock!";
	$_SESSION['msg_type'] = "warning";
    }

	
	
    
    
	
	
	header('location: CashierInvoice.php');
}

if (isset($_POST['discount'])){
    //var_dump(12333);
    $DiscountAm = $_POST['rate'];
    $id = $_POST['id'];
    $intot = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
    $tot = $intot->fetch_array();
    $subtot=$tot['subTotal'];
    
    
    $mysqli->query("UPDATE cashierinvoice SET netTotal='$subtot' WHERE id='$id'") or die($mysqli->error);
    $NnetTotal = $subtot - (($subtot*$DiscountAm)/100);
    $mysqli->query("UPDATE cashierinvoice SET netTotal='$NnetTotal', discount='$DiscountAm' WHERE id='$id'") or die($mysqli->error);

    header("location: CashierInvoice.php");

}
if(isset($_POST['Cash'])){
	$Amount = $_POST['Amt'];
    $id = $_POST['id'];
    $intot = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
    $tot = $intot->fetch_array();
    $nettot=$tot['netTotal'];
    $new = $Amount - $nettot;
    $mysqli->query("UPDATE cashierinvoice SET CashAmt='$Amount',ChangeAmt='$new' WHERE id='$id'") or die($mysqli->error);
    header("location: CashierInvoice.php");
}
    

?>

