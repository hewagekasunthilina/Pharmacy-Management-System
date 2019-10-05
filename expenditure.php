<?php
  include('connection.php');

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
  <!--Form validation-->
  <script src = "js/expenditure.js"> </script>  
  <!--Datepicker validate-->
  <script src = "expendituredate.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

</head>
<body  onload=enable_text(false);>
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
            <form  method="POST" action="expendituredetails.php"  name="expenditureform" id="expenditureform">
              <h5 class="card-header info-color white-text text-center py-4">
                <strong>Expenditure Details</strong>
               </h5>
        
                <h3  style="margin-left: 15px;"><b>Bill Information</b></h3>
                <hr style = " border: 1px solid black;">  

                <!--input year -->
                <label for="" class="text-primary">Bill Year</label>
                <div class="form-group col-md-6">
                <input type="text" id="inputCity" class="form-control" placeholder="Enter Bill Year" name="billyear" required >
                </div>

                <br>
                
                <!--input month-->
                <!--Dropdown primary-->
         <div class="dropdown">
       
         <label for="billmonth" class="text-primary">Bill Month</label>
         <br>
         <select class="btn btn-primary dropdown-toggle mr-4"  style="margin-left:20px" name="billmonth" required>
          <option value="January" class="dropdown-item" href="#" >January</option>
          <option value="February" class="dropdown-item" href="#">February</option>
          <option value="March" class="dropdown-item" href="#">March</option>
          <option value="April" class="dropdown-item" href="#">April</option>
          <option value="May"   class="dropdown-item" href="#">May</option>
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
          <select class="btn btn-primary dropdown-toggle mr-4"  style="margin-left:20px"  name="billtype"  required>
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
                <input type="text" id="inputCity" class="form-control" name="noofunits" placeholder="Enter  Total No Of Units">
                </div>

                <br>


                <!--input units -->
                <label for="totalamount" class="text-primary">Total Amount(Rs)</label>
                <div class="form-group col-md-6">
                <input type="text" id="inputCity" class="form-control" name="totamouunt" placeholder="Enter Total Amount" required>
                </div>


                 <br>
                 <!--input units -->
                 <label for="paid" class="text-primary">Paid</label>
                  <!-- Default checked -->
                    <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="rdb" value ="Yes"  onclick = "enable_text(false)" /> 
                          <label class="custom-control-label" for="defaultGroupExample1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="rdb" value="No" onclick = "enable_text(this.checked)" />
                                <label class="custom-control-label" for="defaultGroupExample2">No</label>
                    </div>

                    <br>
                    <!--input units -->
                    <label for="paiddate" class="text-primary">Paid Date</label>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputZip" placeholder="DD/MM/YYYY" name="paiddate" required >
                    </div>
                     <br>

                    <input type="submit" name="Addexpenditure" class="btn btn-primary btn-rounded" style="margin-left:500px" onclick="ValidateForm(document.expenditureform.billyear,document.expenditureform.totamouunt,document.expenditureform.paiddate)" value="OK"/>
                    <a href="expenditurereport.php"  class="btn btn-primary btn-rounded" style="margin-left:670px;margin-top:-74px;">REPORT</a>
                    </form>
                    <form  method ="POST"  action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="submit" name="Viewbilltable" class="btn btn-primary btn-rounded" style="margin-left:10px" value="VIEW BILL TABLE" />
                             
                      </form>
                    <br><br>
                    


    
     </div>
            <!-- Card body -->
        
  </div>
  <!-- Card -->
         

          
        <br><br>

                <h2  style="margin-left: 600px;"><b>Bill Table</b></h2>
                <hr style = " border: 1px solid black; width: 240px;">  
                <br><br>
                <!--Bill Table-->
                <div class="container">            
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="80%" style="margin-left:10px;">
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
                  <th class="th-sm">Update
                    </th>
                  <th class="th-sm">Delete
                    </th>
                </tr>
              </thead>
              <tbody>
              <?php
                
                      $reterive_query = "SELECT * FROM  expenditure ";
                      $result = $conn->query($reterive_query) or die($conn -> error);
                         

                  while($rows = $result->fetch_assoc()): ?>
                

                  
            
              
              <tr>
              <td> <?php echo $rows['BillId']; ?> </td>
              <td> <?php echo $rows['BillYear']; ?> </td>
              <td> <?php echo $rows['BillMonth']; ?> </td>
              <td> <?php echo $rows['BillType']; ?> </td>
              <td> <?php echo $rows['TotalUnits']; ?> </td>
              <td> <?php echo $rows['TotalAmount']; ?> </td>
              <td> <?php echo $rows['Paid']; ?></td>
              <td> <?php echo $rows['PaidDate']; ?> </td>
              <td><a href="UpdateExpenditure.php?Update=<?php echo $rows['BillId'];?>" 
                class="btn btn-primary btn-rounded">Update</a></td>
                <td><a href="expendituredetails.php?Delete=<?php echo $rows['BillId'];?>"
                  class="btn btn-danger btn-rounded">Delete</button></td>  
               </tr>
               <?php endwhile; ?>
              </tbody>
             
                 <tfoot>
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
              <th class="th-sm">Update
             </th>
             <th class="th-sm">Delete
             </th>
            </tr>
          </tfoot>
             </table>
             </div>
           


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
  
  
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script src = "js/expenditure.js"> </script>  
    <script type="text/javascript">
             $(document).ready(function () {
             $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
            });
          </script> 
                  
</body>

</html>
