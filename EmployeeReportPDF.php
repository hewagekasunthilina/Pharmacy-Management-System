
<?php


	        
	        
        
$d='5';
require('fpdf181/fpdf.php');
$mysqli = new mysqli('localhost', 'root', '', 'supplier') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM employee") or die($mysqli->error);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 30);
$pdf->cell(190,10, 'Nimedco Pharmacy', 0, 1 ,'C');

$pdf->SetFont('Arial', '', 25);
$pdf->cell(190,10, 'Employee Details Summary', 0, 1 ,'C');
$pdf->cell(50,10,'', 0, 1,'C'); 
$pdf->SetFont('Arial', '', 12);

date_default_timezone_set('Asia/Colombo');
$date = date('d/m/Y   h:i:s a', time());
$pdf->cell(30,5,'Date & Time : ' , 0, 0,'C'); 
$pdf->cell(50,5,$date , 0, 1,'C'); 
$pdf->cell(50,10,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 18);
$pdf->cell(190,10, 'Employee Details', 0, 1 );
$pdf->SetFont('Arial', '', 12);

$pdf->cell(21,5, 'EmpId', 1, 0 ,'C');
$pdf->cell(26,5, 'FirstName', 1, 0,'C');
$pdf->cell(23,5, 'UserName', 1, 0,'C');
$pdf->cell(34,5, 'Email', 1, 0,'C');
$pdf->cell(29,5, 'NIC', 1, 0,'C');
$pdf->cell(30,5, 'Address', 1, 0,'C');
$pdf->cell(30,5, 'Contact', 1, 1,'C');

while($row = $result->fetch_assoc())
{


$pdf->SetFont('Arial', '', 12);
$pdf->cell(21,5, $row['EmpId'], 1,0,'C');
$pdf->cell(26,5, $row['FirstName'], 1, 0,'C');
$pdf->cell(23,5, $row['UserName'], 1, 0,'C');
$pdf->cell(34,5, $row['Email'], 1, 0,'C');
$pdf->cell(29,5, $row['NICNumber'], 1, 0,'C');
$pdf->cell(30,5, $row['Address'], 1, 0,'C');
$pdf->cell(30,5, $row['PhoneNumber'], 1, 1,'C');
}



$pdf->cell(50,20,'', 0, 1,'C'); 
$pdf->cell(190,5, '------------------------', 0, 1 );
$pdf->cell(190,5, '      signature', 0, 1 );

$pdf->output();
?>


