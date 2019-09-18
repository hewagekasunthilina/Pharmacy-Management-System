<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'Supplier') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$reportid = '';
$supplireid = '';
$medName = '';
$date = '';
$qty = '';
$price = '';

if(isset($_POST['REPORTS'])){

    $reportid = $_POST['reportid'];
    $supplireid = $_POST['supplireid'];
    $medName = $_POST['medName'];
    $date = $_POST['date'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    $mysqli->query("INSERT INTO report (reportid, supplireid, medName, date, qty, price) VALUES('$reportid', '$supplireid', '$medName', '$date', '$qty', '$price')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: Reports.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE from report WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: Reports.php");    
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM report WHERE id = $id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $reportid = $row['reportid'];
        $supplireid = $row['supplireid'];
        $medName = $row['medName'];
        $date = $row['date'];
        $qty = $row['qty'];
        $price = $row['price'];

    }
}



if (isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $reportid = $_POST['reportid'];
    $supplireid = $_POST['supplireid'];
    $medName = $_POST['medName'];
    $date = $_POST['date'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    $mysqli->query("UPDATE report SET reportid='$reportid', supplireid ='$supplireid', medName= '$medName', date='$date', qty='$qty', price='$price' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: Reports.php");

}
