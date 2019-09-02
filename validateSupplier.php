<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'supplier') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$supplierid = '';
$name = '';
$address = '';
$brand = '';
$email = '';
$contact = '';

if(isset($_POST['REGISTER'])){

    $supplierid = $_POST['supplierid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $brand = $_POST['brand'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $mysqli->query("INSERT INTO supplierdetails (supplierid, name, address, brand, email, contact) VALUES('$supplierid', '$name', '$address', '$brand', '$email', '$contact')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: registerSupplier.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE from supplierdetails WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: registerSupplier.php");    
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM supplierdetails WHERE id = $id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $supplierid = $row['supplierid'];
        $name = $row['name'];
        $address = $row['address'];
        $brand = $row['brand'];
        $email = $row['email'];
        $contact = $row['contact'];

    }
}



if (isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $supplierid = $_POST['supplierid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $brand = $_POST['brand'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $mysqli->query("UPDATE supplierdetails SET supplierid='$supplierid', name ='$name', address= '$address', brand='$brand', email='$email', contact='$contact' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: registerSupplier.php");

}