
<?php


	        
	        
        
$d='5';
require('fpdf181/fpdf.php');
$mysqli = new mysqli('localhost', 'root', '', 'supplier') or die(mysqli_error($mysqli));
$resultSupplier = $mysqli->query("SELECT * FROM supplierdetails") or die($mysqli->error);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 30);
$pdf->cell(190,10, 'Nimedco Pharmacy', 0, 1 ,'C');

$pdf->SetFont('Arial', '', 25);
$pdf->cell(190,10, 'Supplier Details Summary Report', 0, 1 ,'C');
$pdf->cell(50,10,'', 0, 1,'C'); 
$pdf->SetFont('Arial', '', 12);

date_default_timezone_set('Asia/Colombo');
$date = date('d/m/Y   h:i:s a', time());
$pdf->cell(30,5,'Date & Time : ' , 0, 0,'C'); 
$pdf->cell(50,5,$date , 0, 1,'C'); 
$pdf->cell(50,10,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 18);
$pdf->cell(190,10, 'Supplier Details', 0, 1 );
$pdf->SetFont('Arial', '', 12);

$pdf->cell(20,5, 'supplierid', 1, 0 ,'C');
$pdf->cell(31,5, 'name', 1, 0,'C');
$pdf->cell(34,5,'address', 1, 0,'C');
$pdf->cell(25,5, 'brand', 1, 0,'C');
$pdf->cell(45,5, 'email', 1, 0,'C');
$pdf->cell(31,5, 'contact', 1, 1,'C');

while($row = $resultSupplier->fetch_assoc())
{


$pdf->SetFont('Arial', '', 12);
$pdf->cell(20,5, $row['supplierid'], 1,0,'C');
$pdf->cell(31,5, $row['name'], 1, 0,'C');
$pdf->cell(34,5,$row['address'], 1, 0,'C');
$pdf->cell(25,5, $row['brand'], 1, 0,'C');
$pdf->cell(45,5, $row['email'], 1, 0,'C');
$pdf->cell(31,5, $row['contact'], 1, 1,'C');
}



$pdf->cell(50,20,'', 0, 1,'C'); 
$pdf->cell(190,5, '------------------------', 0, 1 );
$pdf->cell(190,5, '      signature', 0, 1 );

$pdf->output();
?>


