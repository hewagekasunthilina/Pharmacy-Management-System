 
<?php
  
    
include "connection.php";  //connection created
  
$bill_year = '';
$bill_month = '';
$bill_type =  '';  
$total_units = '';
$total_amount = '';
$paid  = '';
$paid_date = '';    

   
   
      //Get values from the html page
        if(isset($_POST['Addexpenditure']) )
    {
               $bill_year = $_POST['billyear'] ;   
               $bill_month = $_POST['billmonth'];
               $bill_type = $_POST['billtype'];
               $total_units = $_POST['noofunits'];
               $total_amount = $_POST['totamouunt'];
               $paid = $_POST['rdb'];

             if($paid == "Yes")
             {
                $paid_date = $_POST['paiddate'];
             }
             elseif($paid == "No")
             {
                $paid_date = "00/00/0000" ;

             }

               $query_id = "SELECT BillId FROM expenditure ";
               
               $result = $conn->query($query_id) or die($conn -> error);

               while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) //fetch the database values into row as an associative array
              {
                   $id = $row['BillId'];
                   
              }
                    $billid =  ++$id;       //increment bill id
              
                    $query_all = "SELECT * FROM expenditure ";
                
                    $results = $conn->query($query_all) or die($conn -> error);

                    while($rows = mysqli_fetch_assoc($results)) //fetch the database values into row as an associative array
                    {
                        
                     
                         $validatebillmonth = $rows['BillMonth'];
                         $validatetype = $rows['BillType'];

                         $month  = strcmp($validatebillmonth,$bill_month);
                          $type  =   strcmp($validatetype,$bill_type);

                         if( $month==0  && $type==0 )
                       {
                         
                          echo '<script language = "javascript">';
                          echo 'alert("Do Not Enter Same Bill type Details")';      //display the  alert box
                          echo '</script>';
        
                        header('Refresh: 1 ; URL=http://localhost/Pharmacy-Management-System/Expenditure.php');   //redirect to expenditure page after certain time   


                       }
                     
                       elseif(($month==0 || $type!==0) || ($month!=0 || $type!=0) )
                        {
                            
                             $sql = "INSERT INTO expenditure(BillId,BillYear,BillMonth, BillType ,TotalUnits ,TotalAmount ,Paid ,PaidDate) VALUES('$billid','$bill_year','$bill_month','$bill_type','$total_units','$total_amount','$paid','$paid_date')";
          
                                 if($conn->query($sql)=== TRUE)
                            { 

         

                                  echo '<script language = "javascript">';
                                  echo 'alert("New Record Inserted Successfully")';      //display the  alert box
                                   echo '</script>';

                                  header('Refresh: 1 ; URL=http://localhost/Pharmacy-Management-System/Expenditure.php');   //redirect to expenditure page after certain time  

                            }
                          
                       }

                      // header('Refresh: 1 ; URL=http://localhost/Pharmacy-Management-System/Expenditure.php'); 
                    
                    }



            

             
      }

      
     if(isset($_GET['Delete']))
     {
        $billid = $_GET['Delete'];

        $deleterow = "DELETE FROM  expenditure WHERE BillId = '$billid'"; //Delete the Record

        echo '<script language = "javascript">';
        echo 'alert("Record Deleted Successfully")';
        echo '</script>';

        if($conn->query($deleterow) === TRUE)
        {
          

             echo '<script language = "javascript">';
             echo 'alert("Record Deleted Successfully")';
             echo '</script>';

             header('Refresh: 1 ; URL=http://localhost/Pharmacy-Management-System/Expenditure.php');  //redirect to expenditure page after certain time
        }


     }

      //pass the bill table row values into update expenditure php page
     if(isset($_GET['Update']))
     {
           $billid = $_GET['Update'];

           $fetchdata = "SELECT * FROM  expenditure WHERE BillId = '$billid'";

            $result = $conn->query($fetchdata) or die($conn -> error);
                
            $row = $result->fetch_array();

            
               
                  $bill_id = $row['BillId'];
                  $bill_year = $row['BillYear'] ;   
                  $bill_month = $row['BillMonth'];
                  $bill_type = $row['BillType'];
                  $total_units = $row['TotalUnits'];
                  $total_amount = $row['TotalAmount'];
                  $paid = $row['Paid'];
                  $paid_date = $row['PaidDate'];

            
            
        }

   
         //update the database values

        if(isset($_POST['updated']))
        {
          $update_bill_id = $_POST['billid'];    
          $update_bill_year = $_POST['updatebillyear'];
          $update_bill_month = $_POST['updatebillmonth'];
          $update_bill_type = $_POST['updatebilltype'];
          $update_total_units = $_POST['updatenoofunits'];
          $update_total_amount = $_POST['updatetotamouunt'];
          $update_paid = $_POST['updaterdb'];
          $update_paid_date = $_POST['updatepaiddate'];
          

          $update_query = "UPDATE  expenditure SET BillYear = '$update_bill_year',BillMonth='$update_bill_month',BillType=' $update_bill_type',TotalUnits='$update_total_units',TotalAmount='$update_total_amount',Paid='$update_paid',PaidDate='$update_paid_date' WHERE  BillId='$update_bill_id' ";

          if($conn->query($update_query) === TRUE)
          {
              echo '<script language = "javascript">';
              echo 'alert("Update Record Successfully")';     //display the  alert box
              echo '</script>';

              header('Refresh: 1 ; URL=http://localhost/Pharmacy-Management-System/UpdateExpenditure.php');  //redirect to update expenditure page after certain time
          }

        }






  $conn->close();    //connection close  
   
?>
