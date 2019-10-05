<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));
$inID = $mysqli->query("SELECT id FROM cashierinvoice ORDER BY id DESC LIMIT 1") or die($mysqli->error);
$rowinID = $inID->fetch_array();
$email = $_POST['email'];

try {
    //Server settings
    $mail->SMTPDebug = 4;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nimedco.pharmacy@gmail.com';                     // SMTP username
    $mail->Password   = 'nimedco@123';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nimedco.pharmacy@gmail.com', 'Nimedco Pharmacy');
    $mail->addAddress($email);     // Add a recipient
              // Name is optional
    //$mail->addReplyTo($email);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Invoice id : '.$rowinID['id'];
    $id = $rowinID['id'];
    $result = $mysqli->query("SELECT * FROM cashierinvoiceitem WHERE invoiceID='$id'") or die($mysqli->error);
    //$mail->Body = 'a';
    $mail->Body     .='<font size="6" color="#2B65EC">Nimedco Pharmacy</font><br>';
    $mail->Body     .='No:33, Gampaha Road, Meerigama, Sri Lanka.<br><a href="www.nimedco.lk">www.nimedco.lk</a><br>+94 770 828 319<br>';
    $mail->Body     .='<font size="5" color="#571B7E">Invoice id : '.$rowinID['id'].'</font>';
    $mail->Body     .='<table border="0" width="70%">';
    $mail->Body     .='<tr bgcolor="#ffb3b3" align="center">';
    $mail->Body     .= '<td>#</td><td colspan="4">PRODUCT</td><td>QTY</td><td>PRICE</td><td>AMOUNT</td>';
    $mail->Body     .='</tr>';
    
    //$mail->Body     .= "First Name: <br>" ;
    $c = 1;
    while($row = $result->fetch_assoc()){
        $mail->Body     .='<tr bgcolor="yellow" align="center">';
     //$ItemID = $row['ItemID'] ;
     //$mail->Body     .= $c.'.';
     //$mail->Body     .= '&emsp;';
    //$mail->Body     .= $row['ItemID'];
    //$mail->Body     .= '&emsp;';
    
    //$mail->Body     .= '<b>'.$item['ItemName'].'</b>';
    //$mail->Body     .= '&emsp;';
    //$mail->Body     .= $item['Description'];
    //$mail->Body     .= '&emsp;';
    //$mail->Body     .= $item['Category'];
    //$mail->Body     .= '&emsp;';
    //$mail->Body     .= '( &emsp;'.$row['ItemQuantity'].' &emsp; x &emsp;'.$item['Price'].' &emsp;)';
    //$mail->Body     .= '&emsp;&emsp;';
    //$mail->Body     .= $row['Total'];
    $mail->Body     .= '<td>';
    $mail->Body     .= $c;
    $mail->Body     .= '</td>';

    $mail->Body     .= '<td>';
    $mail->Body     .= $row['ItemID'];
    $mail->Body     .= '</td>';

    $ItemID=$row['ItemID'];
    $itemd = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $item = $itemd->fetch_array();

    $mail->Body     .= '<td>';
    $mail->Body     .= '<b>'.$item['ItemName'].'</b>';
    $mail->Body     .= '</td>';

    $mail->Body     .= '<td>';
    $mail->Body     .= $item['Description'];
    $mail->Body     .= '</td>';

    $mail->Body     .= '<td>';
    $mail->Body     .= $item['Category'];
    $mail->Body     .= '</td>';

    $mail->Body     .= '<td>';
    $mail->Body     .= '<b>'.$row['ItemQuantity'].'</b>';
    $mail->Body     .= '</td>';

    $mail->Body     .= '<td>';
    $mail->Body     .= $item['Price'];
    $mail->Body     .= '</td>';

    $mail->Body     .= '<td align="right">';
    $mail->Body     .= '<b>'.$row['Total'].'</b>';
    $mail->Body     .= '</td>';

    $mail->Body     .='</tr>';

    //$mail->Body     .= '<br>';
    $c++;
    }
    $subTot = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
        $subTota = $subTot->fetch_array();
    $mail->Body     .='<tr bgcolor="#00ffbf">';
    $mail->Body     .='<td colspan="7" align="right">';
    $mail->Body     .='<font size="4">Sub Total:</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='<td align="right">';
    $mail->Body     .='<font size="4">'.$subTota['subTotal'].'</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='</tr>';

    $mail->Body     .='<tr bgcolor="#7FFFD4">';
    $mail->Body     .='<td colspan="7" align="right">';
    $mail->Body     .='<font size="3">Discount:</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='<td align="right">';
    $mail->Body     .='<font size="3">'.$subTota['discount'].' %'.'</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='</tr>';

    $mail->Body     .='<tr bgcolor="#ADFF2F">';
    $mail->Body     .='<td colspan="7" align="right">';
    $mail->Body     .='<font size="6">Net Total:</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='<td align="right">';
    $mail->Body     .='<font size="6">'.$subTota['netTotal'].'</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='</tr>';

    $mail->Body     .='<tr bgcolor="#7FFFD4">';
    $mail->Body     .='<td colspan="7" align="right">';
    $mail->Body     .='<font size="2">Cash:</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='<td align="right">';
    $mail->Body     .='<font size="2">'.$subTota['CashAmt'].'</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='</tr>';

    $mail->Body     .='<tr bgcolor="#7FFFD4">';
    $mail->Body     .='<td colspan="7" align="right">';
    $mail->Body     .='<font size="2">Balance:</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='<td align="right">';
    $mail->Body     .='<font size="2">'.$subTota['ChangeAmt'].'</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='</tr>';

    $mail->Body     .='<tr bgcolor="#7FFFD4">';
    $mail->Body     .='<td colspan="7" align="right">';
    $mail->Body     .='<font size="3">No of Items:</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='<td align="right">';
    $qt = $c-1;
    $mail->Body     .='<font size="3">'.$qt.'</font>';
    $mail->Body     .='</td>';
    $mail->Body     .='</tr>';

    $mail->Body     .='</table>';
    $mail->Body     .='<font size="4" color="red">Thank you !</font>';
    

    
    //$mail->msgHTML("
    //<html>
    //<body>
    

    //</body>
    //</html>");
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//header("location: CashierInvoice.php");


?>