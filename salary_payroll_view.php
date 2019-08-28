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

$sql = "SELECT empID, basic, tet FROM salary_payroll";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["empID"]."</td><td>".$row["basic"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>