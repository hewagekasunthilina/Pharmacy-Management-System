<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'Supplier') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$orderid = '';
$supplierid = '';
$medname = '';
$qty = '';
$date = '';


if(isset($_POST['ORDER'])){

    $orderid = $_POST['orderid'];
    $supplierid = $_POST['supplierid'];
    $medname = $_POST['medname'];
    $qty = $_POST['qty'];
    $date = $_POST['date'];
    
    

    $mysqli->query("INSERT INTO orders (orderid, supplierid, medName, qty, date) VALUES('$orderid', '$supplierid', '$medname', '$qty', '$date')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: Orders.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE from orders WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: Orders.php");    
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM orders WHERE id = $id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $orderid = $row['orderid'];
        $supplierid = $row['supplierid'];
        $medname = $row['medName'];
        $qty = $row['qty'];
        $date = $row['date'];

    }
}



if (isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $orderid = $_POST['orderid'];
    $supplierid = $_POST['supplierid'];
    $medname = $_POST['medname'];
    $qty = $_POST['qty'];
    $date = $_POST['date'];
    

    $mysqli->query("UPDATE orders SET orderid='$orderid', supplierid ='$supplierid', medName= '$medname', qty='$qty', date='$date' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: Orders.php");

}
