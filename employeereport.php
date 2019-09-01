<?php
    include "connection.php";
      namespace Dompdf;
      require_once 'dompdf/autoload.inc.php';




                                                          
            if(isset($_POST['employeereport']))
            {
                

                $dompdf = new Dompdf(); 
                $dompdf->loadHtml('
                <table id="billtable" class="table table-striped table-bordered" cellspacing="0" width="80%" style="margin-left:10px;">
                <thead>
                  <tr>
                  <th class="th-sm">Bill Id
                    </th>
                    <th class="th-sm">Bill Year
                    </th>
                    <th class="th-sm">Bill Month
                    </th>
                    <th class="th-sm">Bill Type
                    </th>
                    <th class="th-sm">Total No of Units 
                    </th>
                    <th class="th-sm">Total Amount
                    </th>
                    <th class="th-sm">Paid
                    </th>
                    <th class="th-sm">Paid Date
                      </th>
                  </tr>
                </thead>
                '.<?php.'
                
             '.$reterive_query = "SELECT * FROM  employee ";.'
            $result = $conn->query($reterive_query) or die($conn -> error);
         
                while($rows = mysqli_fetch_assoc($result))
                {
                   ?> 
              '<tbody>
                <tr>
                <td>'.$rows['EmpId'].' </td>
                <td> '.$rows['FirstName'].' </td>
                <td> '.$rows['LastName'].' </td>
                <td> '.$rows['UserName'].' </td>
                <td> '.$rows['Email'].' </td>
                <td> '.$rows['NICNumber'].' </td>
                <td> '.$rows['Address'].'</td>
                <td> '.$rows['PhoneNumber'].' </td>  
                 </tr>
                </tbody>'
                 <?php
                    }
                  
                   ?>
               '</table>
                      

              ');
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream("",array("Attachment" => false));
                exit(0);
                

            }


?>