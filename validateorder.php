<?php

$mysqli = new mysqli('localhost', 'root', '', 'supplier') or die(mysqli_error($mysqli));

if(isset($_POST['REPORTS'])){

    $orderid = $_POST['orderid'];
    $supplierid = $_POST['supplierid'];
    $medName = $_POST['medName'];
    $qty = $_POST['qty'];
    $date = $_POST['date'];
    
    $mysqli->query("INSERT INTO order (orderid, supplierid, medName, qty, date) VALUES('$orderid', '$supplierid', '$medName', '$qty', '$date')") or die($mysqli->error);

}


