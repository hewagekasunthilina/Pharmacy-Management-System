<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sign In | Nimedco Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/signIn.css" rel="stylesheet">
</head>
<body background="bg3.jpg">
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">NimedcoPharmacy</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
   
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->


    <div class="login-background"></div>

<!--############################-Sign In Form -###############################-->

<!-- Material form login -->
<div class="card2">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

<?php require_once 'signin-process.php';?>

<?php
if (isset($_SESSION['message'])):?>

<div class = "alert alert-<?=$_SESSION['msg_type']?>">

  <?php 
      echo $_SESSION['message'];
      unset($_SESSION['message']);
  ?>
 </div>
 <?php endif ?> 
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">



    <!-- Form -->
    <form id="signIn" class="text-center" method = "POST" action="signin-process.php" style="color: #757575;" action="signin-process.php">

      <!-- Email -->
      <div class="md-form">
        <input type="text" id="UserName" class="form-control" name = "UserName">
        <label for="UserName">User Name</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="Password" class="form-control" name = "Password">
        <label for="Password">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <!--<input type = "submit" class="btn btn-primary" value = "LOGIN" />--> 
      <button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateSignin();" name="SIGN">SIGN IN</button>    

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->


<!-----------------------------------Sign In Form ------------------------------------>


<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script src="js/addEmployee.js"></script>

</body>

</html>
