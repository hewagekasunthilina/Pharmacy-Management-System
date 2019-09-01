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
            <form >
              <h5 class="card-header info-color white-text text-center py-4">
                <strong>Update Expenditure Details</strong>
               </h5>
        
                <h3  style="margin-left: 15px;"><b>Bill Information</b></h3>
                <hr style = " border: 1px solid black;">  

                <!--input year -->
                <label for="billyear" class="text-primary">Bill Year</label>
                <div class="form-group col-md-6">
                <input type="text" id="defaultFormCardNameEx" class="form-control" placeholder="Enter Bill Year" name="billyear">
                </div>

                <br>
                
                <!--input month-->
                <!--Dropdown primary-->
         <div class="dropdown">
       
         <label for="billmonth" class="text-primary">Bill Month</label>
         <br>
         <!--Trigger-->
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" name ="billmonth">Bill Month</button>
      
      
        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item" href="#">January</a>
          <a class="dropdown-item" href="#">February</a>
          <a class="dropdown-item" href="#">March</a>
          <a class="dropdown-item" href="#">April</a>
          <a class="dropdown-item" href="#">May</a>
          <a class="dropdown-item" href="#">June</a>
          <a class="dropdown-item" href="#">July</a>
          <a class="dropdown-item" href="#">August</a>
          <a class="dropdown-item" href="#">September</a>
          <a class="dropdown-item" href="#">October</a>
          <a class="dropdown-item" href="#">November</a>
          <a class="dropdown-item" href="#">December</a>
        </div>
       </div>
      <!--/Dropdown primary-->
      <br>


      <div class="dropdown">
       
        <label for="billtype" class="text-primary">Bill Type</label>
        <br>
        <!--Trigger-->
       <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false" name ="billmonth">Bill Type</button>
     
     
       <!--Menu-->
       <div class="dropdown-menu dropdown-primary">
         <a class="dropdown-item" href="#">Electricity</a>
         <a class="dropdown-item" href="#">Water</a>
         <a class="dropdown-item" href="#">Other</a>
       </div>
      </div>
     <!--/Dropdown primary-->
     <br> 



                <!--input units -->
                <label for="totalunits" class="text-primary">Total No Of Unit Consumed</label>
                <div class="form-group col-md-6">
                <input type="email" id="defaultFormCardEmailEx" class="form-control" name="noofunits" placeholder="Enter  Total No Of Units">
                </div>

                <br>


                <!--input units -->
                <label for="totalamount" class="text-primary">Total Amount(Rs)</label>
                <div class="form-group col-md-6">
                <input type="email" id="defaultFormCardEmailEx" class="form-control" name="totamouunt" placeholder="Enter Total Amount">
                </div>

                 <br>
                 <!--input units -->
                 <label for="paid" class="text-primary">Paid</label>
                  <!-- Default checked -->
                    <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="paid">
                          <label class="custom-control-label" for="defaultGroupExample1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="paid" >
                                <label class="custom-control-label" for="defaultGroupExample2">No</label>
                    </div>

                    <br>
                    <!--input units -->
                    <label for="paiddate" class="text-primary">Paid Date</label>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputZip" placeholder="DD/MM/YYYY">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary btn-rounded" style="margin-left:500px">UPDATE</button>
                    <button type="submit" class="btn btn-primary btn-rounded" style="margin-left:10px">VIEW BILL TABLE</button>
                <br><br>
              </form>
              <!-- Default form subscription -->
                <h3  style="margin-left: 15px;"><b> Updated Bill Table</b></h3>
                <hr style = " border: 1px solid black;">  
               <!--Bill Table-->
            <table id="billtable" class="table table-striped table-bordered" cellspacing="0" width="80%" style="margin-left:10px;">
                <thead>
                  <tr>
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
                <tbody>
                  <tr>
                    <td>2018</td>
                    <td>January</td>
                    <td>Electricity</td>
                    <td>150</td>
                    <td>5000</td>
                    <td>Yes</td>
                    <td>25/02/2019</td> 
                  </tr>
                  <tr>
                      <td>2018</td>
                      <td>February</td>
                      <td>Electricity</td>
                      <td>100</td>
                      <td>3000</td>
                      <td>No</td>
                      <td>00/00/0000</td>
                    </tr>
                    <tr>
                        <td>2018</td>
                        <td>February</td>
                        <td>Water</td>
                        <td>10</td>
                        <td>1500</td>
                        <td>No</td>
                        <td>00/00/0000</td>
                    </tr>
                    <tr>
                        <td>2018</td>
                        <td>February</td>
                        <td>Other</td>
                        <td>00</td>
                        <td>1500</td>
                        <td>Yes</td>
                        <td>02/01/2019</td>
                     </tr>
                </tbody>
              </table>      
      
    
        </div>
        <!-- Card body -->
    
    </div>
    <!-- Card -->
     

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
      <p>Get the treatment you need without leaving your home. With a wide range of medicines at great prices we're sure to ease your ailment with signed for delivery.Choose a safe, quick, cost-effect and convenient way of having your medicines delivered to your door.</p>
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
        <i class="fas fa-home mr-3"></i> Pohonnaruwa Mirigama (Nearby, Jayathissa Stores, Mirigama</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> nimedcopharmacy@info.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> 071 977 4774</p>
      <p>
      <i class="fas fa-map-marker-alt"></i><a href ="location.php"> Find Us</p></a>
      <p>
      
      
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
