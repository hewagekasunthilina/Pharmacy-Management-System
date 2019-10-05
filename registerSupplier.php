<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Supplier Register | Nimedco Pharmacy</title>
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
    <a class="navbar-brand" href="index.html">NimedcoPharmacy</a>
  
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
          <a class="nav-link" href="Dashboard.php">Dashboard
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Supplier.php">SupplierHome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registerSupplier.php">Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Orders.php">Orders</a>
        </li>
  
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Reports</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="Summary.php">Summary</a>
            <a class="dropdown-item" href="Reports.php">Add Reports</a>
            
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





  
  <div class="container">
    <div class="row"  style="margin-left:300px;">
      <div><h2 style="margin-left:150px;">REGISTER</h2>  
        <br>    
        
        <?php require_once 'validateSupplier.php';?>

        <?php
        if (isset($_SESSION['message'])):?>

        <div class = "alert alert-<?=$_SESSION['msg_type']?>">

          <?php 
              echo $_SESSION['message'];
              unset($_SESSION['message']);
          ?>
         </div>
         <?php endif ?> 


        <form id="myform1" method="POST" action="validateSupplier.php">
         <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
          <div class="form-row" >
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="supplierid">SupplireID</label>
              <input type="text" class="form-control" id="supplierid" value="<?php echo $supplierid; ?>" placeholder="SupplireID" name="supplierid" >
              <span id="supplerId" class="text-danger font-weight-bold"></span>
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" value="<?php echo $name;?>" placeholder="Name" name="name">
              <span class="helper-text"></span>
            </div>
          </div>
          <!-- Grid row -->
        
          <!-- Default input -->
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" value="<?php echo $address;?>" placeholder="1234 Main St" name="address">
            <span class="helper-text"></span>
          </div>
          <!-- Default input -->
          <div class="form-group">
            <label for="brand">Medicine Brand</label>
            <input type="text" class="form-control" id="brand" value="<?php echo $brand;?>" placeholder="SPC,MPC,ACC" name="brand">
            <span id="Brand" class="text-danger font-weight-bold"></span>
          </div>
          <!-- Grid row -->
          <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" value="<?php echo $email;?>" placeholder="Email" name="email">
              <span class="helper-text"></span>
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="contact">Contact Number</label>
              <input type="text" class="form-control" id="contact" value="<?php echo $contact;?>" placeholder="xxxxxxxxxx" name="contact">
              <span class="helper-text"></span>
            </div>
          </div>
          <?php
          if ($update == true):
          ?>
          <a href="registerSupplier.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateRegisterForm();" name="UPDATE">UPDATE</button></a>
          <?php else: ?>  
          <a href="registerSupplier.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateRegisterForm();" name="REGISTER">REGISTER</button></a>
          <?php endif; ?>
        </form>
        <!-- Extended default form grid --></div>
     
      <br><br>
      <div style="margin-left:-402px;margin-top:50px"><h2>SUPPLIERS</h2>  
        <br>

        <?php
          $mysqli = new mysqli('localhost', 'root', '', 'supplier') or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM supplierdetails") or die($mysqli->error);
          //pre_r($result);
          ?>    
        <!-- Extended default form grid -->
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">SupplireID
                </th>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Address
                </th>
                <th class="th-sm">Medicine Brand
                </th>
                <th class="th-sm">Email
                </th>
                <th class="th-sm">Contact
                </th>
                <th class="th-sm">Edit
                </th>
                <th class="th-sm">Delete
                </th>
                
              </tr>
            </thead>

            <?php
              while ($row = $result->fetch_assoc()):?>
              
              <tr>
                  <td><?php echo $row['supplierid']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['brand']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['contact']; ?></td>
                  <td><a href="registerSupplier.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                  <td><a href="validateSupplier.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
                  <?php endwhile; ?>
                
            </table>
      </div>
      <?php
          function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
          }
      ?> 
    </div>
  </div>

<br>
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
  
  <script src="js/supvalidation.js"></script>

</body>

</html>