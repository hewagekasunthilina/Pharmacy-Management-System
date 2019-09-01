<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
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
</head>
<body>

<?php
          $mysqli = new mysqli('localhost', 'root', '', 'adminpanel') or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM salary_payslip") or die($mysqli->error);
          //pre_r($result);
          ?> 

          <!--
   
CREATE TABLE salary_payslip(
    
payslipId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
empId VARCHAR(30) NOT NULL,
payrollYear YEAR NOT NULL,
payrollMonth VARCHAR(30) NOT NULL,
bonus FLOAT(30) NOT NULL,
panelties FLOAT(30) NOT NULL,
tax FLOAT(30) NOT NULL,
otPayment FLOAT(30) NOT NULL,
dayPayment FLOAT(30) NOT NULL,
fullPayment FLOAT(30) NOT NULL,
payslip_gdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
) -->   
        <!-- Extended default form grid -->
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">Employee Id
                </th>
                <th class="th-sm">payroll Year 
                </th>
                <th class="th-sm">payroll Month
                </th>
                <th class="th-sm">Bonus
                </th>
                <th class="th-sm">Tax
                </th>
                <th class="th-sm">Full Payment
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
                  <td><?php echo $row['empId']; ?></td>
                  <td><?php echo $row['payrollYear']; ?></td>
                  <td><?php echo $row['payrollMonth']; ?></td>
                  <td><?php echo $row['bonus']; ?></td>
                  <td><?php echo $row['tax']; ?></td>
                  <td><?php echo $row['fullPayment']; ?></td>
                  <td><a href="#?edit=<?php echo $row['id']; ?>"  class="btn btn-info">Edit</a></td>
                  <td><a href="#?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
                  <?php endwhile; ?>
            </table>


</body>

</html>
