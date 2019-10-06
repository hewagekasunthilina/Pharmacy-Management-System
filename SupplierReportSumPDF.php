
<?php


	        
	        
        
$d='5';
require('fpdf181/fpdf.php');
$mysqli = new mysqli('localhost', 'root', '', 'supplier') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM report") or die($mysqli->error);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 30);
$pdf->cell(190,10, 'Nimedco Pharmacy', 0, 1 ,'C');

$pdf->SetFont('Arial', '', 25);
$pdf->cell(190,10, 'Supplier Report Summary', 0, 1 ,'C');
$pdf->cell(50,10,'', 0, 1,'C'); 
$pdf->SetFont('Arial', '', 12);

date_default_timezone_set('Asia/Colombo');
$date = date('d/m/Y   h:i:s a', time());
$pdf->cell(30,5,'Date & Time : ' , 0, 0,'C'); 
$pdf->cell(50,5,$date , 0, 1,'C'); 
$pdf->cell(50,10,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 18);
$pdf->cell(190,10, 'Supplier Reports', 0, 1 );
$pdf->SetFont('Arial', '', 12);

$pdf->cell(31,5, 'reportid', 1, 0 ,'C');
$pdf->cell(31,5, 'supplireid', 1, 0,'C');
$pdf->cell(31,5,'medName', 1, 0,'C');
$pdf->cell(31,5, 'date', 1, 0,'C');
$pdf->cell(31,5, 'qty', 1, 0,'C');
$pdf->cell(31,5, 'price', 1, 1,'C');

while($row = $result->fetch_assoc())
{


$pdf->SetFont('Arial', '', 12);
$pdf->cell(31,5, $row['reportid'], 1,0,'C');
$pdf->cell(31,5, $row['supplireid'], 1, 0,'C');
$pdf->cell(31,5,$row['medName'], 1, 0,'C');
$pdf->cell(31,5, $row['date'], 1, 0,'C');
$pdf->cell(31,5, $row['qty'], 1, 0,'C');
$pdf->cell(31,5, $row['price'], 1, 1,'C');
}



$pdf->cell(50,20,'', 0, 1,'C'); 
$pdf->cell(190,5, '------------------------', 0, 1 );
$pdf->cell(190,5, '      signature', 0, 1 );

$pdf->output();
?>


