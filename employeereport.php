<?php
    
      namespace Dompdf;

      require_once 'dompdf/autoload.inc.php';

      include "connection.php";

      if(isset($_POST['Addemployeereport']))
      {

         $emp_name = $_POST['employeename'];     //Get values from the php page
        

           //fetch total amount from the database
         $query_emp_details = "SELECT * FROM employee WHERE FirstName='$emp_name' ";


         $total_amount_result = $conn->query( $query_emp_details ) or die($conn-> error);

         
         while($row = mysqli_fetch_array( $total_amount_result))
         {

               $firstname =  $row['FirstName'];
               $lastname =  $row['LastName'];
               $username =  $row['UserName'];
               $email =  $row['Email'];
               $nicnumber =  $row['NICNumber'];
               $address =  $row['Address'];
               $phonenumber =  $row['PhoneNumber'];
               
         }

        

                echo '<script language = "javascript">';
                echo 'alert("Report Generate Successfully")';      //display the  alert box
                echo '</script>';
                
                header("Location:employeeonereport.php?firstname=".$firstname."&lastname=". $lastname ."&username=". $username ."&email=".$email."&username=".$username."&email=". $email ."&nicnumber=".$nicnumber."&address=". $address."&phoneno=".$phonenumber);
             



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

    <label for="" class="text-primary" style="margin-left:150px;margin-top: -90px;"><h2><b>First name :</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left:  230px;margin-top: -44px;"><b>'.$_POST['FirstName'].'</b></h3>
     <br>
    
    <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Last name :</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['LastName'].'</b></h3>
         
     <br>
      
    <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Username :</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['UserName'].'</b></h3>
     <br>

      
    <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Email:</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['Email'].'</b></h3>

    <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>NIC Number :</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['NICNumber'].'</b></h3>
    
    
    <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Address :</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['Address'].'</b></h3>
    
   
    <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Phone Number  :</b></h2></label>
    <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST['PhoneNumber'].'</b></h3>
    

    <h4 style="margin-left:650px;"><b>....................................</b></h4>
    <h4 style="margin-left:700px;"><b>Signature</b></h4>


          ');
          $dompdf->setPaper('A4', 'landscape');
          $dompdf->render();
          $dompdf->stream("",array("Attachment" => false));
          exit(0);
          

      }

                                                          
           















?>