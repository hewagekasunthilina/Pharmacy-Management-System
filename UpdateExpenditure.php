<?php
       require_once "expendituredetails.php"; 
       
       include "connection.php";  //connection created
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Electricity Bill | Nimedco Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <!--Header-->

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="index.html">Admin Panel</a>
    
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
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
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

       <!-- Card -->
 <div class="card mx-xl-5">

        <!-- Card body -->
        <div class="card-body">
    
            <!--form-->
            <form  method="POST" action="expendituredetails.php"  >
              <h5 class="card-header info-color white-text text-center py-4">
                <strong>Update Expenditure Details</strong>
               </h5>
        
                <h3  style="margin-left: 15px;"><b>Bill Information</b></h3>
                <hr style = " border: 1px solid black;">  

              <!--input hidden field-->
              <input type="hidden" name="billid"  value="<?php echo $bill_id;?>">



                <!--input year -->
                <label for="billyear" class="text-primary">Bill Year</label>
                <div class="form-group col-md-6">
                <input type="text" id="defaultFormCardNameEx" class="form-control" placeholder="Enter Bill Year" name="updatebillyear" value="<?php echo  $bill_year;?> ">
                </div>

                <br>
                
                <!--input month-->
                <!--Dropdown primary-->
         <div class="dropdown">
       
       <label for="billmonth" class="text-primary">Bill Month</label>
       <br>
       <select class="btn btn-primary dropdown-toggle mr-4" style="margin-left:20px" name="updatebillmonth" required>
        <option value = "<?php echo  $bill_month;?>"  class="dropdown-item" href="#"><?php echo  $bill_month;?></option>
        <option value="January" class="dropdown-item" href="#">January</option>
        <option value="February" class="dropdown-item" href="#">February</option>
        <option value="March"  class="dropdown-item" href="#">March</option>
        <option value="April" class="dropdown-item" href="#">April</option>
        <option value="May" class="dropdown-item" href="#">May</option>
        <option value="June" class="dropdown-item" href="#">June</option>
        <option value="July" class="dropdown-item" href="#">July</option>
        <option value="August" class="dropdown-item" href="#">August</option>
        <option value="September" class="dropdown-item" href="#">September</option>
        <option value="October" class="dropdown-item" href="#">October</option>
        <option value="November" class="dropdown-item" href="#">November</option>
        <option value="December" class="dropdown-item" href="#">December</option>   
      </select>
      </div>
    <!--/Dropdown primary-->
      <br>


      <div class="dropdown">  
        <label for="billtype" class="text-primary">Bill Type</label>
        <br>
       <!--Menu-->
          <select class="btn btn-primary dropdown-toggle mr-4"  style="margin-left:20px"  name="updatebilltype"  required>
              <option value="<?php echo  $bill_type;?>" class="dropdown-item" href="#"><?php echo $bill_type;?></option>
              <option value="Electricity" class="dropdown-item" href="#" >Electricity</option>
              <option value="Water" class="dropdown-item" href="#">Water</option>
              <option value="Other" class="dropdown-item" href="#">Other</option>
          </select>
       
      </div>
     <!--/Dropdown primary-->
     <br> 



                <!--input units -->
                <label for="totalunits" class="text-primary">Total No Of Unit Consumed</label>
                <div class="form-group col-md-6">
                <input type="text" id="defaultFormCardEmailEx" class="form-control" name="updatenoofunits" placeholder="Enter  Total No Of Units" value="<?php echo  $total_units;?>">
                </div>

                <br>


                <!--input units -->
                <label for="totalamount" class="text-primary">Total Amount(Rs)</label>
                <div class="form-group col-md-6">
                <input type="text" id="defaultFormCardEmailEx" class="form-control" name="updatetotamouunt" placeholder="Enter Total Amount"  value="<?php echo  $total_amount;?>">
                </div>

                 <br>
                 <!--input units -->
                 <label for="paid" class="text-primary">Paid</label>
                  <!-- Default checked -->
                    <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="updaterdb" value ="Yes"  <?php echo ($paid=='Yes') ?  "checked" : "";?>  onclick = "enable_text(false)"/>
                          <label class="custom-control-label" for="defaultGroupExample1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="updaterdb" value="No" <?php echo ($paid=='No') ?  "checked" : "";?> />
                                <label class="custom-control-label" for="defaultGroupExample2">No</label>
                    </div>

                    <br>
                    <!--input units -->
                    <label for="paiddate" class="text-primary">Paid Date</label>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputZip" placeholder="DD/MM/YYYY"  name="updatepaiddate"  value="<?php echo  $paid_date;?>">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary btn-rounded" style="margin-left:500px" value="UPDATE" name="updated" />
                    </form>
                    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
                    <input  type="submit" class="btn btn-primary btn-rounded" style="margin-left:10px" value="VIEW BILL TABLE" name="viewupdatetable" />
                     </form>
                     <br>
              <!-- Default form subscription -->
                <h3  style="margin-left: 15px;"><b> Updated Bill Table</b></h3>
                <hr style = " border: 1px solid black;">  
               <!--Bill Table-->
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
                <?php 
                    
                    if(isset($_POST['viewupdatetable']))
                    {
                          
                          $reterive_query = "SELECT * FROM  expenditure";
                          $result = $conn->query($reterive_query) or die($conn -> error);

                          while($row = mysqli_fetch_assoc($result))
                          {
                 
                  ?>
                  <tbody>
                    <tr>
                    <td> <?php echo $row['BillId']; ?></td>
                    <td> <?php echo $row['BillYear']; ?></td>
                    <td> <?php echo $row['BillMonth']; ?></td>
                    <td> <?php echo $row['BillType'];?></td>
                    <td> <?php echo $row['TotalUnits'];?></td>
                    <td> <?php echo $row['TotalAmount'];?></td>
                    <td> <?php echo $row['Paid']; ?></td>
                    <td> <?php echo $row['PaidDate'];?></td>
                    </tr>
                    </tbody>
                    <?php 
                          }
                        }
                        ?>
                    </table>    
        </div>
        <!-- Card body -->
    
    </div>
    <!-- Card -->
     

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
 </fieldset>
</body>

</html>
