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
<?php require_once 'addEmployee_process.php'; ?>
      <?php
      	if(isset($_SESSION['message'])): ?>
	        <div class = "alert alert-<?=$_SESSION['msg_type']?>">
	    	<?php
		    	echo $_SESSION['message'];
		    	unset($_SESSION['message']);
	    	?>
	    </div>
  	<?php endif ?>
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>ADD NEW EMPLOYEE | NIMEDCO PHARMACY</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="addEmployee_process.php" name="addEmployee" method="POST">
            <input type="hidden" name="EmpId" value="<?php echo $EmpId; ?>">
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input type="text" value="<?php echo $FirstName; ?>" id="FirstName" name="FirstName" class="form-control">
                            <label for="FirstName">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input type="text" id="LastName" value="<?php echo $LastName; ?>" name="LastName" class="form-control">
                            <label for="LastName">Last name</label>
                        </div>
                    </div>
                </div>

                 <!-- Username -->
                 <div class="md-form">
                    <input type="text" id="UserName" value="<?php echo $UserName; ?>" name="UserName" class="form-control">
                    <label for="UserName">Username</label> 
                </div>
    
                <!-- E-mail -->
                <div class="md-form mt-0">
                    <label for="Email">E-mail</label>
                </div>

                 <!-- NIC Number -->
                 <div class="md-form mt-0">
                    <input type="text" id="NICNumber" value="<?php echo $NICNumber; ?>" name="NICNumber" class="form-control">
                    <label for="NICNumber">NIC Number</label>
                </div>

                 <!-- Address -->
                 <div class="md-form mt-0">
                    <input type="text" id="Address" value="<?php echo $Address; ?>" name="Address" class="form-control">
                    <label for="Address">Address</label>
                </div>
    
                <!-- Phone number -->
                <div class="md-form">
                    <input type="text" id="PhoneNumber" value="<?php echo $PhoneNumber; ?>" name="PhoneNumber" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                    <label for="PhoneNumber">Phone number</label>
                    <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication
                    </small>
                </div>

                 <!-- Password -->
                 <div class="md-form">
                    <input type="password" id="Password" value="<?php echo $Password; ?>" name="Password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="Password">Password</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>
                </div>

                 <!-- Password -->
                 <div class="md-form">
                    <input type="password" id="ConfirmPassword" name="ConfirmPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="ConfirmPassword">Password</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>
                </div>
    
                <!-- Sign up button -->

                <?php
		              if ($update == true):
		            ?>
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="update" onclick = "javascript:return validateaddEmployee();" type="submit">UPDATE EMPLOYEE</button>
                  
		            <?php else: ?>
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="save" onclick = "javascript:return validateaddEmployee();" type="submit">ADD EMPLOYEE</button>
                  
                  <?php endif; ?>

    
                <!-- Terms of service -->
                <p>By clicking
                    <em>Add Employee</em> The Employee agree to our
                    <a href="" target="_blank">terms of service</a>
    
            </form>
            <!-- Form -->
        </div>
    </div>
    <div class="container">
    <?php
	       $mysqli = new mysqli('localhost', 'root', 'root', 'nimedco-pharmacy') or die(mysqli_error($mysqli));
        	$result = $mysqli->query("SELECT * FROM employee") or die($mysqli->error);
	        //pre_r($result);
        ?>
  
      <div class="col">
        

          <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm">EmpId
                  </th>
                  <th class="th-sm">FirstName
                  </th>
                  <th class="th-sm">LastName
                  </th>
                  <th class="th-sm">UserName
                  </th>
                  <th class="th-sm">Email
                  </th>
                  <th class="th-sm">NICNumber
                  </th>
                  <th class="th-sm">Address
                  </th>
                  <th class="th-sm">PhoneNumber
                  </th>
                  <th class="th-sm">Action
                  </th>
                </tr>
              </thead>
              <tbody>
                
              <?php
		          	while($row = $result->fetch_assoc()): ?>
			          	<tr>
                  
                              <td><?php echo $row['EmpId']; ?></td>
                              <td><?php echo $row['FirstName']; ?></td>
                              <td><?php echo $row['LastName']; ?></td>
                              <td><?php echo $row['UserName']; ?></td>
                              <td><?php echo $row['Email']; ?></td>
                              <td><?php echo $row['NICNumber']; ?></td>
                              <td><?php echo $row['Address']; ?></td>
                              <td><?php echo $row['PhoneNumber']; ?></td>
                   
				          	<td>
					            	<a href="addEmployee.php?edit=<?php echo $row['EmpId']; ?>"
                          class ="btn btn-info btn-sm" >
                          <i class="fa fa-edit"></i>
                        </a>
					            	<a href="addEmployee_process.php?delete=<?php echo $row['EmpId']; ?>"
                          class ="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </a>
				          	</td>
			          	</tr>
			        <?php endwhile; ?>

              </tbody>
             
            </table>

            <?php
	            function pre_r( $array ){
		            echo '<pre>';
	            	print_r($array);
		            echo '</pre>';
              	}
          	?>
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
