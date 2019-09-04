<?php
/*$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "nimedco";

$con = new mysqli($servername,$username,$password,$dbname);*/

include "connection.php";

?>
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
    <a class="navbar-brand" style="font-size: 30px" href="#">Nimedco
        </a>
  
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
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
     
        
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Products</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#pres">Prescription Medicine</a>
            <a class="dropdown-item" href="#homemed">Home Medicine</a>
            <a class="dropdown-item" href="#Baby">Mother & Baby</a>
            <a class="dropdown-item" href="#personal">Personal Care</a>
            <a class="dropdown-item" href="#pet">Pet Care</a>
          </div>
        </li>

      
          <li class="nav-item">
            <a class="nav-link" href="#contactus">Contact Us</a>
          </li>
          
      </ul>
      <!-- Links -->
  
      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">
  
        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">
  
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                Register</a>
            </li>
          </ul>
  
          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
              <!--Body-->
              
              <form name="customerLogin" method="post" action="customerLogin.php">
              <div class="modal-body mb-1">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" name="email" id="modalLRInput10" class="form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                </div>
  
                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" name="password" id="modalLRInput11" class="form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                </div>
                <div class="text-center mt-2">
                  <input class="btn btn-info" type = "submit" name = "loginsubmit" value="Login">
                </div>
              </div>

              </form>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                  <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                  <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>
  
            </div>
            <!--/.Panel 7-->
  
            <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">
  
              <!--Body-->
              

              <form name="customerSign" method="post" action="addCustomer.php">
              
              <div class="modal-body">

              <div class="md-form form-sm mb-5">
                  <i class="fas fa-lock prefix"></i>
                  <input type="text" name="name" class="form-control-sm">
                  <label data-error="wrong" data-success="right" for="modalLRInput13">Your Name</label>
                </div>

                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" name="email" class="form-control-sm">
                  <label data-error="wrong" data-success="right" for="modalLRInput12">Email</label>
                </div>
  
               
                <div class="md-form form-sm mb-5">
                <i class="fas fa-address-book prefix"></i>
                  <input type="text" name="address" class="form-control-sm">
                  <label data-error="wrong" data-success="right" for="modalLRInput13">Address</label>
                </div>

                <div class="md-form form-sm mb-5">
                <i class="fas fa-mobile-alt prefix"></i>
                  <input type="text" name="number" class="form-control-sm">
                  <label data-error="wrong" data-success="right" for="modalLRInput13">Mobile number</label>
                </div>


                <div class="md-form form-sm mb-5">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" name="password" class="form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput13">Password</label>
                </div>
  
                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" name="repeat" class="form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                </div>

                <div class="text-center form-sm mt-2">
                  <input type="submit" class="btn btn-info" name = "submit" value="Submit" onclick = "javascript:return validateRegisterForm();">
                </div>

                </form>
  
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-right">
                  <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!--/.Panel 8-->
          </div>
  
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form-->
  
  <div class="text-center">
    <a href="" class= "btn btn-primary"  data-toggle="modal" data-target="#modalLRForm">
        <i class="fas fa-user"></i>
    </a>
  </div>


<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart"><i class="fas fa-shopping-cart fa-1x"></i></button>

<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Your cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Product 3</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Product 4</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->
    

  </nav>
  <!--/.Navbar-->

<!-- Card -->
<div class="card-image" style="background-image: url(https://png.pngtree.com/thumb_back/fw800/back_pic/04/57/88/275867aaa43520a.jpg);">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-4 px-4">
    <div>
      <h1 class="card-title pt-2" style="font-size: 50px"><strong>Nimedco Pharmacy</strong></h1>
      <p>Get the treatment you need without leaving your home. With a wide range of medicines at great prices we're sure to ease your ailment with signed for delivery.Choose a safe, quick, cost-effect and convenient way of having your medicines delivered to your door.  </p>
   
    </div>
  </div>

</div>
<!-- Card -->


<br>
<br>
<br>

<!-- Section: Features v.1 -->
<section class="text-center my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Order Medicines Instantly</h2>
    <!-- Section description -->
    <p class="lead grey-text w-responsive mx-auto mb-5">

    </p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-md-4">
  
        <i class="fas fa-check-circle fa-5x"></i>
        <h5 class="font-weight-bold my-4">QUALITY PRODUCTS</h5>
        <p class="grey-text mb-md-0 mb-5">100% Quality Standard Guarantee
        </p>
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4">
  
            <i class="fas fa-shipping-fast fa-5x"></i>
        <h5 class="font-weight-bold my-4">Cash on Delivery</h5>
        <p class="grey-text mb-md-0 mb-5">All Product Delivery your Doorstep
        </p>
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4">
  
            <i class="fas fa-phone fa-5x"></i>
        <h5 class="font-weight-bold my-4">CUSTOMER SUPPORT</h5>
        <p class="grey-text mb-0">Support online & Phone
        </p>
  
      </div>
      <!-- Grid column -->
  
    </div>
    <!-- Grid row -->
  
  </section>
  <!-- Section: Features v.1 -->

  <hr class="my-5">

<!-- Section: Blog v.1 -->
<section class="my-5" id="pres">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="img/depositphotos_189339050-stock-photo-rx-prescription-pen-and-a.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>Upload Prescription</strong></h3>
      <!-- Excerpt -->
      <p>Allow customer to upload prescription to confirm the medicine order from online medical stores. Let customer to search and compare medicines offered by different online medicine supplier.</p>
      <!-- Post data -->
      <p>Upload your prescription..</p>
      <!-- Read more button -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01"
            aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      <button type="button" class="btn btn-primary">UPLOAD</button>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <br>  <br>  <br>
<!--products-->

<!-- Section: Products v.3 -->
<section class="text-center my-5" id="homemed" style="padding: 80px" >

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Home Medicine</h2>
 
  <!-- Grid row -->
  <div class="row">

  <?php

$sql = "select ID,title,price,image from webHomemed ORDER BY ID desc";
$result = $conn->query($sql);
  


while( $row = mysqli_fetch_array($result)){

   echo '<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">'.
      '<div class="card align-items-center">'.
        '<div class="view overlay">'.   
         '<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="card-img-top">'.
          '<a>'.
            '<div class="mask rgba-white-slight">'.'</div>'.
          '</a>'.
        '</div>'.
        '<div class="card-body text-center">'.
          '<h5>'.
              '<strong>'.
                '<a href="" class="dark-grey-text">'.$row['title'].
                  '<span class="badge badge-pill danger-color">NEW</span>'.
                '</a>'.
              '</strong>'.
            '</h5>'.
          '<h4 class="font-weight-bold blue-text">'.
            '<strong>'.$row['price'].'</strong>'.
          '</h4>'.'<br>'.
          '<strong>Quantity</strong>'.
          '<div style="padding-left: 50px;">'.
          '<div class="def-number-input number-input safari_only">'.
              
            '<button  class="minus">'.'</button>'.
            '<input class="quantity" min="0" name="quantity" value="1" type="number">'.
            '<button  class="plus">'.'</button>'.
            
      '</div>'.
    
        '</div>'.
          '<i class="fas fa-shopping-cart fa-2x">'.'</i>'.
          
        
        '</div>'.
      '</div>'.
    '</div>';
 
  }

  echo '</div>';
    
 
  ?>


</section>
<!-- Section: Products v.3 -->


<hr>

<!-- Section: Products v.3 -->
<section class="text-center my-5" id="Baby" style="padding: 80px">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Mother & Baby</h2>
   
    <!-- Grid row -->
    <div class="row">
    <?php

$sql = "select ID,title,price,image from webbabyproducts ORDER BY ID desc";
$result = $conn->query($sql);
  


while( $row = mysqli_fetch_array($result)){

   echo '<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">'.
      '<div class="card align-items-center">'.
        '<div class="view overlay">'.   
         '<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="card-img-top">'.
          '<a>'.
            '<div class="mask rgba-white-slight">'.'</div>'.
          '</a>'.
        '</div>'.
        '<div class="card-body text-center">'.
          '<h5>'.
              '<strong>'.
                '<a href="" class="dark-grey-text">'.$row['title'].
                  /*'<span class="badge badge-pill danger-color">NEW</span>'.*/
                '</a>'.
              '</strong>'.
            '</h5>'.
          '<h4 class="font-weight-bold blue-text">'.
            '<strong>'.$row['price'].'</strong>'.
          '</h4>'.'<br>'.
          '<strong>Quantity</strong>'.
          '<div style="padding-left: 50px;">'.
          '<div class="def-number-input number-input safari_only">'.
              
            '<button  class="minus">'.'</button>'.
            '<input class="quantity" min="0" name="quantity" value="1" type="number">'.
            '<button  class="plus">'.'</button>'.
            
      '</div>'.
    
        '</div>'.
        
          '<i class="fas fa-shopping-cart fa-2x">'.'</i>'.
          
        '</div>'.
      '</div>'.
    '</div>';
 
  }

  echo '</div>';
    

  ?>

</section>

<hr>

  <!-- Section: Products v.3 -->
<section class="text-center my-5" id="personal" style="padding: 80px">

<!-- Section heading -->
<h2 class="h1-responsive font-weight-bold text-center my-5">Personal Care</h2>

<!-- Grid row -->
<div class="row">
<?php

$sql = "select ID,title,price,image from webpersonalcare ORDER BY ID desc";
$result = $conn->query($sql);



while( $row = mysqli_fetch_array($result)){

echo '<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">'.
  '<div class="card align-items-center">'.
    '<div class="view overlay">'.   
     '<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="card-img-top">'.
      '<a>'.
        '<div class="mask rgba-white-slight">'.'</div>'.
      '</a>'.
    '</div>'.
    '<div class="card-body text-center">'.
      '<h5>'.
          '<strong>'.
            '<a href="" class="dark-grey-text">'.$row['title'].
            '</a>'.
          '</strong>'.
        '</h5>'.
      '<h4 class="font-weight-bold blue-text">'.
        '<strong>'.$row['price'].'</strong>'.
      '</h4>'.'<br>'.
      '<strong>Quantity</strong>'.
      '<div style="padding-left: 50px;">'.
      '<div class="def-number-input number-input safari_only">'.
          
        '<button  class="minus">'.'</button>'.
        '<input class="quantity" min="0" name="quantity" value="1" type="number">'.
        '<button  class="plus">'.'</button>'.
        
  '</div>'.

    '</div>'.
      '<i class="fas fa-shopping-cart fa-2x">'.'</i>'.
     
    
    '</div>'.
  '</div>'.
'</div>';

}

echo '</div>';


?>
    
  
  </section>
  <hr>

<!-- Section: Products v.3 -->
<section class="text-center my-5" id="personal" style="padding: 80px">

<!-- Section heading -->
<h2 class="h1-responsive font-weight-bold text-center my-5">Pet Care</h2>

<!-- Grid row -->
<div class="row">
<?php

$sql = "select ID,title,price,image from webpetcare ORDER BY ID desc";
$result = $conn->query($sql);



while( $row = mysqli_fetch_array($result)){

echo '<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">'.
  '<div class="card align-items-center">'.
    '<div class="view overlay">'.   
     '<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="card-img-top">'.
      '<a>'.
        '<div class="mask rgba-white-slight">'.'</div>'.
      '</a>'.
    '</div>'.
    '<div class="card-body text-center">'.
      '<h5>'.
          '<strong>'.
            '<a href="" class="dark-grey-text">'.$row['title'].
              /*'<span class="badge badge-pill danger-color">NEW</span>'.*/
            '</a>'.
          '</strong>'.
        '</h5>'.
      '<h4 class="font-weight-bold blue-text">'.
        '<strong>'.$row['price'].'</strong>'.
      '</h4>'.'<br>'.
      '<strong>Quantity</strong>'.
      '<div style="padding-left: 50px;">'.
      '<div class="def-number-input number-input safari_only">'.
          
        '<button  class="minus">'.'</button>'.
        '<input class="quantity" min="0" name="quantity" value="1" type="number">'.
        '<button  class="plus">'.'</button>'.
        
  '</div>'.

    '</div>'.
      '<i class="fas fa-shopping-cart fa-2x">'.'</i>'.
     
    
    '</div>'.
  '</div>'.
'</div>';

}

echo '</div>';

$conn->close();
?>
    
  
  </section>

  <hr>
<!--Section: Contact v.2-->
<section class="contactus" id="contactus">
<div style="padding: 100px">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
  

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Pohonnaruwa Mirigama (Nearby, Jayathissa Stores, Mirigama</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>071 977 44</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>nimedcopharmacy@info.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
  </div>
</section>
<!--Section: Contact v.2-->


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

  <script type="text/javascript" src="js/customersign.js"></script>
</body>

</html>
