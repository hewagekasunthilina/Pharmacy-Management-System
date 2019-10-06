<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Stock Reports | Nimedco Pharmacy</title>
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
  <br><br>

  <?php
         $mysqli = new mysqli('localhost', 'root', '', 'nimedco') or die(mysqli_error($mysqli));
         $ItemID = $_POST['ItemID'];
        	$result = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
        
          
          $row = $result->fetch_assoc();
        ?>



  <div class="container w-50">
<div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info ">
      <h1>ITEM</h1>
    </div>
    <div class="col col-lg-5 bg-info ">
    <p class="text-right">
					            <a href="CashierViewInvoice.php"
                          class ="btn btn-danger btn-sm" align="center">
                          &nbsp &nbsp   <i class="fa fa-times fa-2x"></i>   &nbsp &nbsp
                        </a> </p>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info ">
    <b><br>ItemID :</b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b><br><font size="6"><?php echo $row['ItemID']; ?></font></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Item Name : </b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b> <?php echo $row['ItemName']; ?></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Description :</b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b><?php echo $row['Description']; ?></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Category : </b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b><?php echo $row['Category']; ?></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Price : <br><br></b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    Rs: <b><?php echo $row['Price']; ?> <br><br></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b><br>Availability : </b>
    </div>
    <?php
		              if ($row['ItemQuantity'] == 0):
		            ?>
                  <div class="col col-lg-5 bg-danger   ">
                  <i class="fas fa-exclamation-triangle fa-2x"></i>&nbsp;<b><font size="6">Out of stock</font></b></br></br>
    </div>  
    <?php
		              elseif ($row['ItemQuantity'] <= 10):
		            ?>
                 <div class="col col-lg-5 bg-warning   ">
                  <b><font size="20"><?php echo $row['ItemQuantity']; ?></font></b> &nbsp;&nbsp;<font size="3"> (Running out of stock) </font>
    </div>
		            <?php else: ?>
                <div class="col col-lg-5 bg-success   ">
    <b><font size="20"><?php echo $row['ItemQuantity']; ?></font></b>
    </div> 
                  <?php endif; ?>
  </div>
</div>

<br><br>
 












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