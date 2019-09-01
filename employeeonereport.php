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
            <a class="nav-link" href="Dashboard.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
    
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Reports</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="employeeonereport.php">Summary</a>
              
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
  
<form  method="POST" action="employeereport.php" name="expenditurereportform" >
        
      <br><br>

            <!-- Default input -->
            <div class="form-group col-md-6" style="margin-left: 15px;">
              <input type="text" class="form-control" id="inputemployeename" placeholder="Enter employee name" name="employeename" />
            </div>
             
            
                <!--input month-->
                <!--Dropdown primary-->
        
                <input type="submit" name="Addemployeereport" class="btn btn-primary btn-rounded"  onclick="" value="Report"/>
</form>    

<form class="text-center" style="color: #757575;" action="employeereport.php" name="addEmployee" method="POST">
            
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input type="text" value="<?php echo $_GET['firstname'];?>" id="FirstName" name="FirstName" class="form-control">
                            <label for="FirstName">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input type="text" id="LastName" value="<?php echo $_GET['lastname'];?>" name="LastName" class="form-control">
                            <label for="LastName">Last name</label>
                        </div>
                    </div>
                </div>

                 <!-- Username -->
                 <div class="md-form">
                    <input type="text" id="UserName" value="<?php echo $_GET['username'];?>" name="UserName" class="form-control">
                    <label for="UserName">Username</label> 
                </div>
    
                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input type="email" id="Email" value="<?php echo $_GET['email'];?>" name="Email" class="form-control">
                    <label for="Email">E-mail</label>
                </div>

                 <!-- NIC Number -->
                 <div class="md-form mt-0">
                    <input type="text" id="NICNumber" value="<?php echo $_GET['username'];?>" name="NICNumber" class="form-control">
                    <label for="NICNumber">NIC Number</label>
                </div>

                 <!-- Address -->
                 <div class="md-form mt-0">
                    <input type="text" id="Address" value="<?php echo $_GET['address'];?>" name="Address" class="form-control">
                    <label for="Address">Address</label>
                </div>
    
                <!-- Phone number -->
                <div class="md-form">
                    <input type="text" id="PhoneNumber" value="<?php echo $_GET['phoneno'];?>" name="PhoneNumber" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                    <label for="PhoneNumber">Phone number</label>
                    <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication
                    </small>
                </div>
                <input type="submit" name="Addpdf" class="btn btn-primary btn-rounded" style="margin-left:10px" onclick="" value="PDF"/>
</form>           