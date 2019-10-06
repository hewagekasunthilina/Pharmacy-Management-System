<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Invoice | Nimedco Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link href="css/stock_style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body onload=display_ct();>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="Dashboard.php">Admin Panel</a>
      
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
      
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
      
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Reports</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Summary</a>
                <a class="dropdown-item" href="#">Reports Store</a>
                
              </div>
            </li>
      
          </ul>
          <!-- Links -->
      
          <form class="form-inline my-2 my-lg-0 align-self-stretch">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <!-- Collapsible content -->
      
      </nav>
  <!--/.Navbar-->
 

  <?php require_once 'Cashier_process.php'; ?>
  <div style="background-color: rgba(33, 89, 194, 0.753)">
    <form align = "center" name = "CashierCheckAvailabilityForm" method="POST" action="CashierInvoiceAvailability.php">
      <input type="text2" id="fname" name="ItemID" placeholder="Enter Item Number" required>
      
      <button class="buttoncheackcash" name="check" data-toggle="modal" onclick="action='CashierInvoiceAvailability.php';" data-target="#modalLoginForm">Check Availability</button>
    
      </form>
  </div>
  <br>

  <div class="container">
  
    <div class="row">
      <div class="col-lg-4">

      <div float-right>
      <a align="right" href="StockReports.php" class ="btn btn-info btn-md" >
                          <i class="fa fa-search"> </i> Cheack Stock</a>
            </div>
      <?php require_once 'Cashier_process.php'; ?>
     

        &nbsp <!--
        <table align="center">
          <form action="Cashier_process.php" method="POST">
        <tr align="">
              <th>&nbsp&nbsp&nbspItemNo</th> <th>&nbspQuantity</th>
          </tr>

        <tr align="">
          <td>&nbsp&nbsp&nbsp<input type="text" width="100%" name ="ItemID" placeholder="" required></td><td>&nbsp<input type="text" width="100%" name="ItemQuantity" required></td><td>

                  <button type="submit" class="btn btn-primary btn-sm" name="save"><i class="fa fa-plus"></i></button>
          </td></tr></table>
        </tr>
        </form>
        </table>  -->
        <?php
        $inID = $mysqli->query("SELECT id FROM cashierinvoice ORDER BY id DESC LIMIT 1") or die($mysqli->error);
        $rowinID = $inID->fetch_array();
        ?>
        <form action="Cashier_process.php" method="POST">
        <?php if ($update == true):
		            ?>
                <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $rowinID['id']; ?>">
    <label for="formGroupExampleInput">ItemID</label>
    <input type="text" class="form-control" value ="<?php echo $ItemID; ?>" name ="ItemID" id ="ItemID" placeholder="ItemID" readonly>
  </div>
  <!-- Default input -->
  <div class="form-group">
    <label for="formGroupExampleInput2">Quantity</label>
    <input type="text" class="form-control" value ="<?php echo $ItemQuantity; ?>" name="ItemQuantity" id="ItemQuantity" placeholder="Quantity" required>
  </div>
		            <?php else: ?>
                <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $rowinID['id']; ?>">
    <label for="formGroupExampleInput">ItemID</label>
    <input type="text" class="form-control" value ="<?php echo $ItemID; ?>" name ="ItemID" id ="ItemID" placeholder="ItemID" required>
  </div>
  <!-- Default input -->
  <div class="form-group">
    <label for="formGroupExampleInput2">Quantity</label>
    <input type="text" class="form-control" value ="<?php echo $ItemQuantity; ?>" name="ItemQuantity" id="ItemQuantity" placeholder="Quantity" required>
  </div>
                  <?php endif; ?>
  <!-- Default input -->
  
  <?php
		              if ($update == true):
		            ?>
                  <button type="submit" class="btn btn-warning btn-md" name="update">Update</button>
                  <button type="submit" class="btn btn-danger btn-md" name="cancle" onclick="action='CashierInvoice.php';">Cancle</button>
		            <?php else: ?>
                <button type="submit" class="btn btn-primary btn-md" name="save" >&nbsp&nbsp&nbsp&nbsp<i class="fa fa-plus fa-lg"></i>&nbsp&nbsp Add to invoice&nbsp&nbsp&nbsp&nbsp</button>
                  <button type="reset" class="btn btn-danger btn-md">RESET</button>
                  <?php endif; ?>
 
</form> <br>

<?php
      	if(isset($_SESSION['message'])): ?>
	        <div class = "alert alert-<?=$_SESSION['msg_type']?>">
	    	<?php
		    	echo $_SESSION['message'];
		    	unset($_SESSION['message']);
	    	?>
	    </div>
  	<?php endif ?>

    </div>

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));
        $inid=$rowinID['id'];
        	$result = $mysqli->query("SELECT * FROM cashierinvoiceitem WHERE invoiceID='$inid' ") or die($mysqli->error);
	        //pre_r($result); 
    ?>
    
      <div class="col">
      
      <div class="row">
      
      <font size="5">INVOICE ID:&nbsp; </font><font size="5" color="blue"><b><?php echo $rowinID['id']; ?></b></font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id='ct' ></span>
      

      <table border="" width="100%" class="table table-sm table-striped table-bordered" cellspacing="0">
        <tr style="color: white;" class="bg-info" align="center">
          <td><b>#</b></td>
          <td><b>ItemID</b></td>
          <td><b>ItemName</b></td>
          <td><b>Qty</b></td>
          <td><b>Price(each) Rs:</b></td>
          <td><b>Action</b></td>
          <td><b>Total</b></td>
        </tr>
        
        <?php
                $c = 1;
		          	while($row = $result->fetch_assoc()): ?>
			          	
                    <td style="color: white;" class="bg-info"><b><?php echo $c; ?></b></td>
                    <td><b><?php echo $row['ItemID']; ?></b></td>
                    <?php
                    $ItemID = $row['ItemID'];
                    $itemd = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
                    $item = $itemd->fetch_array(); 
                    ?>
                    <td><b><?php echo $item['ItemName']; ?></b></td>
                    <td><b><?php echo $row['ItemQuantity']; ?></b></td>
                    <td><b><?php echo $item['Price']; ?></b></td>
                    
				          	<td align="center">
					            	<a href="CashierInvoice.php?edit=<?php echo $rowinID['id']; ?>&ItemID=<?php echo $row['ItemID']; ?>&ItemQuantity=<?php echo $row['ItemQuantity']; ?>"
                          class ="btn btn-info btn-sm" >
                          <i class="fa fa-edit"></i>
                        </a>
					            	<a href="Cashier_process.php?delete=<?php echo $rowinID['id']; ?>&ItemID=<?php echo $row['ItemID']; ?>&ItemQuantity=<?php echo $row['ItemQuantity']; ?>"
                          class ="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </a>
                    </td>
                    <td><b><?php echo $row['Total']; ?></b></td>
			          	</tr>
                  <?php $c++; ?>
			        <?php endwhile; ?>
              
              <?php
              $inid=$rowinID['id'];
        $subTot = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$inid'") or die($mysqli->error);
        $subTota = $subTot->fetch_array();
        ?>
        <tr>
          <td colspan="6" align="right">Sub Total  (Rs:)&nbsp</td>
          <td><b><?php echo $subTota['subTotal']; ?></b></td>
        </tr>
        <tr>
          <td colspan="6" align="right">Discount : &nbsp</td>
          
          <td>
          <form action="Cashier_process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $rowinID['id']; ?>">
          <input type="text" width="" name="rate" placeholder="Discount (%)" required> %          
          <button type="submit" class="btn btn-primary btn-sm" name="discount" ><i class="fa fa-star fa-spin fa-lg"></i></button>
          </form> <b><?php echo $subTota['discount']; ?> %</b> Discount added
        </td>
        </tr>
        <tr style="color: black;" class="bg-warning">
          <td colspan="6" align="right"><font size="5">Net Total  (Rs:) &nbsp</font></td>
          <td><font size="5"><b><?php echo $subTota['netTotal']; ?></b></font></td>
        </tr>
        <form action="Cashier_process.php" method="POST">
        <tr>
        <input type="hidden" name="id" value="<?php echo $rowinID['id']; ?>">
          <td colspan="6" align="right">Cash  (Rs:)&nbsp</td>
          <td>&nbsp<input type="text" width="" name ="Amt" placeholder="Cash" required>&nbsp&nbsp&nbsp
          <button type="submit" class="btn btn-primary btn-sm" name="Cash"><i class="fa fa-hand-holding-usd fa-lg"></i></button>
          <br>Cash Amount = Rs: <b><?php echo $subTota['CashAmt']; ?></b>
        </td>
        </tr>
        <tr>
          <td colspan="6" align="right">Change  (Rs:)&nbsp</td>
          <td><b><?php echo $subTota['ChangeAmt']; ?><b></td>
        </tr></form>
      </table>
      </div><div class="row">
      <p align="right" >
      <form action="Cashier_mail.php" method="POST">
      <input type="text" name="email" class="form-control" placeholder="Customer Email"><div class ="col">
      
      <button type="submit" class="btn btn-primary btn-md" name="Cash"><i class="fa fa-envelope fa-lg"></i> Send</button>
                        </form>

      <a href="CashierBill.php"
                          class ="btn btn-info btn-md">
                          <i class="fa fa-print fa-lg"></i> Bill
                        </a>
                        

                        <a href="Cashier.php?edit2=<?php echo $row['id']; ?>"
                          class ="btn btn-warning btn-md">
                          <i class="fa fa-check fa-lg"></i> Finish
                        </a>
                        </p>

      <br>
      </div></div>
      </div>
      </div>
</div>
     
<?php
	            function pre_r( $array ){
		            echo '<pre>';
	            	print_r($array);
		            echo '</pre>';
              	}
          	?>



 

 












<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Nimedco Pharmacy</h6>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!-- Grid column -->
  
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
          <p>
            <a href="#!">Drugs</a>
          </p>
          <p>
            <a href="#!">Medicine</a>
          </p>
          <p>
            <a href="#!">Child Items</a>
          </p>
          <p>
            <a href="#!">Energy Drinks</a>
          </p>
        </div>
        <!-- Grid column -->
  
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Medicines</a>
          </p>
          <p>
            <a href="#!">Delivery</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>
  
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> NimedcoPharmacy, Meerigama</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> nimedcopharmacy@.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 94 770 828 319</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Footer links -->
  
      <hr>
  
      <!-- Grid row -->
      <div class="row d-flex align-items-center">
  
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">
  
          <!--Copyright-->
          <p class="text-center text-md-left">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/">
              <strong> NimedcoPharmacy.com</strong>
            </a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">
  
          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  </footer>
  <!-- Footer -->
  
  <!--Ens of the footer-->        
  
  
  
  
  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
var x1=" Date : " + x.getDate() +"/"+ (x.getMonth()+1) + "/" + x.getFullYear(); 
x1 = x1 + " Time :  " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
document.getElementById('ct').innerHTML = x1;
display_c();
 }


</script>
  

  </body>
  </html>