<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>
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
<<<<<<< HEAD
                            <input name="fname" type="text" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName">First name</label>
=======
                            <input type="text" id="FirstName" class="form-control">
                            <label for="FirstName">First name</label>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
<<<<<<< HEAD
                            <input name="lname" type="text" id="materialRegisterFormLastName" class="form-control">
                            <label for="materialRegisterFormLastName">Last name</label>
=======
                            <input type="text" id="LastName" class="form-control">
                            <label for="LastName">Last name</label>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                        </div>
                    </div>
                </div>

                 <!-- Username -->
                 <div class="md-form">
<<<<<<< HEAD
                    <input name="uname" type="text" id="materialRegisterFormFirstName" class="form-control">
                    <label for="materialRegisterFormFirstName">Username</label>
=======
                    <input type="text" id="UserName" class="form-control">
                    <label for="UserName">Username</label>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                </div>
    
                <!-- E-mail -->
                <div class="md-form mt-0">
<<<<<<< HEAD
                    <input name="email" type="email" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">E-mail</label>
=======
                    <input type="email" id="Email" class="form-control">
                    <label for="Email">E-mail</label>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                </div>

                 <!-- NIC Number -->
                 <div class="md-form mt-0">
<<<<<<< HEAD
                    <input name="nicnum" type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">NIC Number</label>
=======
                    <input type="text" id="NICNumber" class="form-control">
                    <label for="NICNumber">NIC Number</label>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                </div>

                 <!-- Address -->
                 <div class="md-form mt-0">
<<<<<<< HEAD
                    <input name="address" type="email" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">Address</label>
                </div>

                <div class="md-form mt-0">
                    <input name="time" placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
                    <label for="date-picker-example"></label>
                  </div>
=======
                    <input type="text" id="Address" class="form-control">
                    <label for="Address">Address</label>
                </div>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
    
                <!-- Phone number -->
                <div class="md-form">
<<<<<<< HEAD
                    <input name="password" type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="materialRegisterFormPassword">Password</label>
=======
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
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>
                </div>
<<<<<<< HEAD
    
                <!-- Phone number -->
                <div class="md-form">
                    <input name="pnum" type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                    <label for="materialRegisterFormPhone">Phone number</label>
                    <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication
=======

                 <!-- Password -->
                 <div class="md-form">
                    <input type="password" id="ConfirmPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="ConfirmPassword">Password</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
                    </small>
                </div>
    
                <!-- Sign up button -->
<<<<<<< HEAD
                <button method="post"  name="signup" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">ADD EMPLOYEE</button>
=======
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick = "javascript:return validateaddEmployee();" type="submit">ADD EMPLOYEE</button>
>>>>>>> 283082c6b82fdd0f57e2ef7e6e5239661bfe174d
    
                <!-- Terms of service -->
                <p>By clicking
                    <em>Add Employee</em> The Employee agree to our
                    <a href="" target="_blank">terms of service</a>
    
            </form>
            <!-- Form -->
 <?php


if(isset($_POST['signup'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $nicnum = $_POST['nicnum'];
  $address = $_POST['address'];
  $time = $_POST['time'];
  $password = $_POST['password'];
  $nicnum = $_POST['nicnum'];
  $pnum = $_POST['pnum'];
  

  $sql = "INSERT INTO employee (firstName, lastName, userName, mail, NICNumber, address, phoneNumber, password)
  VALUES ('$fname','$lname','$uname','$email','$nicnum','$address','$pnum','$password')";

  if ($conn->query($sql) === TRUE) {
      echo "Successfully Inserted";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}

if(isset($_POST['outtime'])){

  $sql = "UPDATE attendance SET empID='EI111' WHERE test=10";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 



    
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
