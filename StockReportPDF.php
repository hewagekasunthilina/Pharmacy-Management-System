
<?php


	        
	        
        
$d='5';
require('fpdf181/fpdf.php');
$mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM stockitem WHERE ItemQuantity != 0") or die($mysqli->error);
$resultOut = $mysqli->query("SELECT * FROM stockitem WHERE ItemQuantity = 0") or die($mysqli->error);
$resultRun = $mysqli->query("SELECT * FROM stockitem WHERE ItemQuantity <= 10 and ItemQuantity !=0 ORDER BY ItemQuantity") or die($mysqli->error);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 30);
$pdf->cell(190,10, 'Nimedco Pharmacy', 0, 1 ,'C');

$pdf->SetFont('Arial', '', 25);
$pdf->cell(190,10, 'Stock Report', 0, 1 ,'C');
$pdf->cell(50,10,'', 0, 1,'C'); 
$pdf->SetFont('Arial', '', 12);

date_default_timezone_set('Asia/Colombo');
$date = date('d/m/Y   h:i:s a', time());
$pdf->cell(30,5,'Date & Time : ' , 0, 0,'C'); 
$pdf->cell(50,5,$date , 0, 1,'C'); 
$pdf->cell(50,10,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 18);
$pdf->cell(190,10, 'Available Items', 0, 1 );
$pdf->SetFont('Arial', '', 12);

$pdf->cell(31,5, 'ItemID', 1, 0 ,'C');
$pdf->cell(31,5, 'ItemName', 1, 0,'C');
$pdf->cell(31,5,'Description', 1, 0,'C');
$pdf->cell(31,5, 'Category', 1, 0,'C');
$pdf->cell(31,5, 'Each price(Rs:)', 1, 0,'C');
$pdf->cell(31,5, 'Qty', 1, 1,'C');

while($row = $result->fetch_assoc())
{


$pdf->SetFont('Arial', '', 12);
$pdf->cell(31,5, $row['ItemID'], 1,0,'C');
$pdf->cell(31,5, $row['ItemName'], 1, 0,'C');
$pdf->cell(31,5,$row['Description'], 1, 0,'C');
$pdf->cell(31,5, $row['Category'], 1, 0,'C');
$pdf->cell(31,5, $row['Price'], 1, 0,'C');
$pdf->cell(31,5, $row['ItemQuantity'], 1, 1,'C');
}

$pdf->cell(50,5,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 18);
$pdf->cell(190,10, 'Out of Stock Items', 0, 1 );
$pdf->SetFont('Arial', '', 12);

$pdf->cell(31,5, 'ItemID', 1, 0 ,'C');
$pdf->cell(31,5, 'ItemName', 1, 0,'C');
$pdf->cell(31,5,'Description', 1, 0,'C');
$pdf->cell(31,5, 'Category', 1, 0,'C');
$pdf->cell(31,5, 'Each price(Rs:)', 1, 1,'C');



while($rowOut = $resultOut->fetch_assoc())
{


$pdf->SetFont('Arial', '', 12);
$pdf->cell(31,5, $rowOut['ItemID'], 1,0,'C');
$pdf->cell(31,5, $rowOut['ItemName'], 1, 0,'C');
$pdf->cell(31,5, $rowOut['Description'], 1, 0,'C');
$pdf->cell(31,5, $rowOut['Category'], 1, 0,'C');
$pdf->cell(31,5, $rowOut['Price'], 1, 1,'C');

}

$pdf->cell(50,10,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 18);
$pdf->cell(190,10, 'Running Out of Stock Items', 0, 1 );
$pdf->SetFont('Arial', '', 12);

$pdf->cell(31,5, 'ItemID', 1, 0 ,'C');
$pdf->cell(31,5, 'ItemName', 1, 0,'C');
$pdf->cell(31,5,'Description', 1, 0,'C');
$pdf->cell(31,5, 'Category', 1, 0,'C');
$pdf->cell(31,5, 'Each price(Rs:)', 1, 0,'C');
$pdf->cell(31,5, 'Qty', 1, 1,'C');


while($rowRun = $resultRun->fetch_assoc())
{


$pdf->SetFont('Arial', '', 12);
$pdf->cell(31,5, $rowRun['ItemID'], 1,0,'C');
$pdf->cell(31,5, $rowRun['ItemName'], 1, 0,'C');
$pdf->cell(31,5, $rowRun['Description'], 1, 0,'C');
$pdf->cell(31,5, $rowRun['Category'], 1, 0,'C');
$pdf->cell(31,5, $rowRun['Price'], 1, 0,'C');
$pdf->cell(31,5, $rowRun['ItemQuantity'], 1, 1,'C');
}

$pdf->cell(50,20,'', 0, 1,'C'); 
$pdf->cell(190,5, '------------------------', 0, 1 );
$pdf->cell(190,5, '      signature', 0, 1 );

$pdf->output();
?>


