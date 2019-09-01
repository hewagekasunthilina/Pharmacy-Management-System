<?php
      namespace Dompdf;
      require_once 'dompdf/autoload.inc.php';
                                                          
            if(isset($_POST['viewemployeetable']))
            {


                $dompdf = new Dompdf(); 
                $dompdf->loadHtml('
                <h4 style="margin-left: 3px;"><b>Address: NimedcoPharmacy, Meerigama</b></h4>
                <h4 style="margin-left: 3px;"><b>G-mail: nimedcopharmacy@.com</b></h4>
                <h4 style="margin-left: 3px;"><b>Tp.No: +94 770 828 319</b></h4>
                <h4 style="margin-left: 3px;"><b>Fax: +011 234 567 89</b></h4>
                <h2  style="margin-left: 400px;"><b>Employee Report</b></h2>
                <hr style = " border: 1px solid black; length:180px"> 
                <br>
 
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>First Name :</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left:  230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
           <br>
          
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Last Name :</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
               
           <br>
            
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>User Name:</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
           <br>

            
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>E-mail:</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
                
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>NIC Number:</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
          
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Address:</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
          
          <label for="" class="text-primary" style="margin-left: 50px;margin-top: -90px;"><h2><b>Phone Number:</b></h2></label>
          <h3 for="" class="text-primary" style="margin-left: 230px;margin-top: -44px;"><b>'.$_POST[''].'</b></h3>
          
          <h4 style="margin-left:650px;"><b>....................................</b></h4>
          <h4 style="margin-left:700px;"><b>Signature</b></h4> 


              ');
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream("",array("Attachment" => false));
                exit(0);
                

            }


?>