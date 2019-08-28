<?php

include "connection.php";  //connection created

//Get values from the html page

if(isset($_POST['submit']))
{
$bill_year = $_POST['billyear'] ;   
$bill_month = $_POST['billmonth'];
$bill_type = $_POST['billtype'];
$total_units = $_POST['noofunits'];
$total_amount = $_POST['totamouunt'];
$paid = $_POST['paid'];
$paid_date = $_POST['paiddate'];


echo $bill_year."".$bill_month."<br/>";

//now insert data into db
$result = mysql_query("INSERT INTO expenditure( Bill Month, Bill Type ,Total Units ,Total Amount ,Paid ,Paid Date) VALUES('$bill_year','$bill_month','$bill_type','$total_units','$total_amount','$paid','$paid_date')",$conn);
}

mysqli_close($conn);
?>
