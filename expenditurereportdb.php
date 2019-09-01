<?php

  namespace Dompdf;
  require_once 'dompdf/autoload.inc.php';




  include "connection.php";  //connection created"

     $total_amount = 0.00;
  
           
            if(isset($_POST['Addexpenditurereport']))
            {

               $bill_year = $_POST['billyear'];     //Get values from the php page
               $bill_month = $_POST['billmonth'];

                 //fetch total amount from the database
               $query_total_amount = "SELECT TotalAmount FROM expenditure WHERE BillYear='$bill_year' and BillMonth='$bill_month'";

               $query_report_id = "SELECT ReportId FROM expenditurereport"; //get the report ids

              
               $reportid_result = $conn->query($query_report_id) or die($conn -> error);  //execute the report id query

               $total_amount_result = $conn->query($query_total_amount) or die($conn-> error);  //execute the total amount query
  
               while($row = mysqli_fetch_array( $total_amount_result))
               {

                     $total_amount = $total_amount + $row['TotalAmount'];  //calculate the total  
               }
                 
               
               while($row = mysqli_fetch_array($reportid_result,MYSQLI_ASSOC)) //fetch the database values into row as an associative array
              {
                   $id = $row['ReportId'];
              }
                    $reportid =  ++$id;       //increment report id
              
              $report_sql = "INSERT INTO expenditurereport(ReportId,Year,Month,TotalExpenses) VALUES('$reportid',' $bill_year',' $bill_month','$total_amount')";


              if($conn->query($report_sql) === TRUE)
              {

                echo '<script language = "javascript">';
                echo 'alert("Report Generate Successfully")';      //display the  alert box
                echo '</script>';
                
                header("Location:expenditurereport.php?reportid=".$reportid."&year=".$bill_year."&month=".$bill_month."&totalexpenses=".$total_amount);
              }





            }



             
            if(isset($_POST['Addpdf']))
            {


                $dompdf = new Dompdf(); 
                $dompdf->loadHtml('
               <h4 style="margin-left: 3px;"><b>Address: NimedcoPharmacy, Meerigama</b></h4>
               <h4 style="margin-left: 3px;"><b>G-mail: nimedcopharmacy@gmail.com</b></h4>
               <h4 style="margin-left: 3px;"><b>Tp.No: +94 770 828 319</b></h4>
               <h4 style="margin-left: 3px;"><b>Fax: +011 234 567 89</b></h4>
                <h1  style="margin-left: 320px;"><b>Monthly Expenditure Report</b></h1>
                <hr style = " border: 1px solid black; length:180px"> 
                <br>
 
          <label for="" class="text-primary" style="margin-left:150px;margin-top: -90px;"><h2><b>Report Id :</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left:  230px;margin-top: -44px;"><b>'.$_POST['Reportid'].'</b></h3>
           <br>
            <!--output report year -->
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Year :</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['year'].'</b></h3>
               
           <br>
            <!--output report month -->
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Month :</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['month'].'</b></h3>
           <br>

            <!--output All monthly expenses  -->
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Total Expenses(Rs.) :</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['Totalmontlyexpenses'].'</b></h3>
          
          <h4 style="margin-left:650px;"><b>....................................</b></h4>
          <h4 style="margin-left:700px;"><b>Signature</b></h4>


                ');
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream("",array("Attachment" => false));
                exit(0);
                

            }

  ?>