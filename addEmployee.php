<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sign Up | Nimedco Pharmacy</title>
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

<!-- Material form register -->
<div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>ADD NEW EMPLOYEE | NIMEDCO PHARMACY</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="server.php" name="addEmployee">
    
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input type="text" id="FirstName" class="form-control">
                            <label for="FirstName">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input type="text" id="LastName" class="form-control">
                            <label for="LastName">Last name</label>
                        </div>
                    </div>
                </div>

                 <!-- Username -->
                 <div class="md-form">
                    <input type="text" id="UserName" class="form-control">
                    <label for="UserName">Username</label>
                </div>
    
                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input type="email" id="Email" class="form-control">
                    <label for="Email">E-mail</label>
                </div>

                 <!-- NIC Number -->
                 <div class="md-form mt-0">
                    <input type="text" id="NICNumber" class="form-control">
                    <label for="NICNumber">NIC Number</label>
                </div>

                 <!-- Address -->
                 <div class="md-form mt-0">
                    <input type="text" id="Address" class="form-control">
                    <label for="Address">Address</label>
                </div>
    
                <!-- Phone number -->
                <div class="md-form">
                    <input type="text" id="PhoneNumber" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                    <label for="PhoneNumber">Phone number</label>
                    <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication
                    </small>
                </div>

                 <!-- Password -->
                 <div class="md-form">
                    <input type="password" id="Password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="Password">Password</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>
                </div>

                 <!-- Password -->
                 <div class="md-form">
                    <input type="password" id="ConfirmPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="ConfirmPassword">Password</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>
                </div>
    
                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick = "javascript:return validateaddEmployee();" type="submit">ADD EMPLOYEE</button>
    
                <!-- Terms of service -->
                <p>By clicking
                    <em>Add Employee</em> The Employee agree to our
                    <a href="" target="_blank">terms of service</a>
    
            </form>
            <!-- Form -->
    
        </div>
    
    </div>
    <!-- Material form register -->

<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript" src="js/addEmployee.js"></script>

</body>

</html>
