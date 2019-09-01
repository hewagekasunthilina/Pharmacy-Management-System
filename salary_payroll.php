<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Nimedco Pharmacy</title>
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
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.html">NimedcoPharmacy - Salary Managment</a>
  
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
          <a class="nav-link" href="salary_dashboard.php">Dasboard
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salary_attendance_view.php">Attendance</a>
          <span class="sr-only">(current)</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salary_payroll.php"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salary_payroll.php">Payroll</a>
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
  <br><br>
 <!-- PAYROLL-->
 
<!-- Large input -->

<div style="max-width: 700px; padding-left:500px;">

  <form name="payslip" id="form" action="/Pharmacy-Management-System/salary_payslip.php" method="POST">

<div class="md-form form-lg"  >
  <input name="empID" type="text" id="name" class="form-control form-control-lg" required >
  <label for="inputLGEx">Employee ID</label>


        
 <input type="text" id="inputCity" class="form-control" placeholder="Payroll Year" name="payrollyear" required >




</div>

         <!--input month-->
                <!--Dropdown primary-->
                <div class="dropdown">
       
       <label for="payrollmonth" class="text-primary">Payroll Month</label>
       <br>
       <select name="payrollmonth" class="mdb-select" style="margin-left:20px" required>
        <option name="payrollmonth" value="January" >January</option>
        <option name="payrollmonth" value="February">February</option>
        <option name="payrollmonth" value="March">March</option>
        <option name="payrollmonth" value="April">April</option>
        <option name="payrollmonth" value="May">May</option>
        <option name="payrollmonth" value="June">June</option>
        <option name="payrollmonth" value="July">July</option>
        <option name="payrollmonth" value="August">August</option>
        <option name="payrollmonth" value="September">September</option>
        <option name="payrollmonth" value="October">October</option>
        <option name="payrollmonth" value="November">November</option>
        <option name="payrollmonth" value="December">December</option>   
      </select>
      </div>
    <!--/Dropdown primary-->
    <!--/Dropdown primary-->


<div class="md-form form-lg"  >
  <input type="text" name="bonus" id="bonus" class="form-control form-control-lg" required>
  <label for="inputLGEx">Bonus</label>
</div>
<div class="md-form form-lg"  >
  <input type="text" name="panelties" id="panelties" class="form-control form-control-lg" required>
  <label for="inputLGEx">Panelties</label>
</div>
<div class="md-form form-lg"  >
  <input type="text" name="tax" id="tax" class="form-control form-control-lg" required>
  <label for="inputLGEx">Tax</label>
</div>

<!-- <input type="submit" id="form" name="gpayslip" value="Genarate Pay Slip" class="btn btn-primary"> -->
<button type="submit"  id="form" name="gpayslip" class="btn btn-primary btn-md">Calculate Salary</button>
</form>

</div> 
<!-- 
CREATE TABLE salary_payroll(
    
    empID VARCHAR(30) PRIMARY KEY,
    basic FLOAT(30) NOT NULL,
    otperhour FLOAT(30) NOT NULL
    
    )
    
    INSERT INTO salary_payroll(`empID`, `basic`, `otperhour`) VALUES ("Emp001",25000.00,230.00)
INSERT INTO `salary_payroll`(`empID`, `basic`, `otperhour`) VALUES ('Emp002",22000.00,200.00);
INSERT INTO `salary_payroll`(`empID`, `basic`, `otperhour`) VALUES ("Emp003",20000.00,180.00) -->


  
<br>
    <!--Footer start-->

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
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript" src="js/salary.js"></script>
</body>

</html>