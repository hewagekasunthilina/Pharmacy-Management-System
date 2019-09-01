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
  
<form  method="POST" action="expenditurereportdb.php" name="expenditurereportform" >
        
      <br><br>

            <!-- Default input -->
            <div class="form-group col-md-6" style="margin-left: 15px;">
              <input type="text" class="form-control" id="inputbillyear" placeholder="Enter Bill Year" name="billyear" />
            </div>
             
            
                <!--input month-->
                <!--Dropdown primary-->
        
       
       
        <select class="btn btn-primary dropdown-toggle mr-4"  style="margin-left:410px; margin-top: -90px;" name="billmonth" required>
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
             <div style="margin-left:640px;margin-top:-86px;" >
            <input type="submit" name="Addexpenditurereport" class="btn btn-primary btn-rounded"  onclick="ValidateForm(document.expenditurereportform.billyear)" value="Report"/>
             </div>
         <br><br>

         
         <h3  style="margin-left: 150px;"><b>Monthly Expenditure Report</b></h3>
                <hr style = " border: 1px solid black; length:180px"> 
                <br><br>

</form>
         <form  method="POST" action="expenditurereportdb.php">
          <!--output report id -->
          <label for="" class="text-primary">Report Id</label>
           <br>
                <div class="form-group col-md-6">
                <input type="text" id="outputreportid" class="form-control" placeholder="Report Id" name="Reportid"  value ="<?php echo $_GET['reportid'];?>">
                </div>
           <br>
            <!--output report id -->
          <label for="" class="text-primary">Year</label>
           <br>
                <div class="form-group col-md-6">
                <input type="text" id="year" class="form-control" placeholder="Year" name="year" value ="<?php echo $_GET['year'];?>" >
                </div>
           <br>
            <!--output report id -->
          <label for="" class="text-primary">Month</label>
           <br>
                <div class="form-group col-md-6">
                <input type="text" id="month" class="form-control" placeholder="Month" name="month" value ="<?php echo $_GET['month'];?>" >
                </div>
           <br>
            <!--output All monthly expenses  -->
          <label for="" class="text-primary">Total Monthly Expenses(Rs.)</label>
           <br>
                <div class="form-group col-md-6">
                <input type="text" id="Totalmontlyexpenses" class="form-control" placeholder="Total Montly Expenses" name="Totalmontlyexpenses" value ="<?php echo $_GET['totalexpenses'];?>" >
                </div>
           <br>
           <input type="submit" name="Addpdf" class="btn btn-primary btn-rounded" style="margin-left:10px" onclick="ValidateForm(document.expenditureform.billyear,document.expenditureform.totamouunt,document.expenditureform.paiddate)" value="PDF"/>
           </form>
                   
                    <br><br>

    
           

    
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


</body>
</html>
