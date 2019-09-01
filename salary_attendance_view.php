<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
 
</head>
<body>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'adminpanel';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT date,empID,type,reason,email,cnum FROM employeeleave";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    
    <tr>
    <th>Date &nbsp &nbsp &nbsp &nbsp</th>
    <th>Emp ID &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
    <th>Type &nbsp &nbsp &nbsp</th>
    <th> Reason </th>
    <th>Email</th>
    <th>Contact No</th>
    </tr>


    // output data of each row

    
    while($row = $result->fetch_assoc()) {
        echo "<tr>

        <td>".$row["date"]."</td>
        <td>".$row["empID"]."<td>
        <td>".$row["type"]."<td>
        <td>".$row["reason"]."<td>
        <td>".$row["email"]."<td>
        <td>".$row["cnum"]."<td> 
        
    </tr>";
    <tr><td>
    echo ' <button type="submit" name="lrequest" class="btn btn-primary btn-md">REGISTER</button>';
    <td> </tr>
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


</body>

</html>
