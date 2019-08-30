
<?php

$titleValidationError = "";
$dateValidationError = "";
$timeValidationError ="";
$placeValidationError = "";
$descriptionValidationError = "";
$photoValidationError = "";
$message ="*Use jpg type and  upload image below 500kb";



  $servername  = "localhost";
  $username = "root";
  $password = "";
  $dbname = "karateka";

  $con = new mysqli($servername,$username,$password,$dbname);


if(isset($_POST['submit'])){


  if(!empty($_POST['title'])){
    $titleValidationError = "";
  }

  else{
    $titleValidationError = "Title is required";

  }


  if(!empty($_POST['date'])){
    $dateValidationError = "";
  }

  else{
    $dateValidationError = "Date is required";

  }


  if(!empty($_POST['time'])){
    $timeValidationError = "";
  }

  else{
    $timeValidationError = "Time is required";

  }


  if(!empty($_POST['place'])){
    $placeValidationError = "";
  }

  else{
    $placeValidationError = "Place is required";

  }



  if(!empty($_POST['description'])){
    $descriptionValidationError = "";
  }

  else{
    $descriptionValidationError = "description is required";

  }



  if(getimagesize($_FILES['photo']['tmp_name']) == FALSE){
      echo "failed";
  }

  else{
      $image = $_FILES['photo']['tmp_name'];
      $imagecontent=addslashes(file_get_contents($image));
  }





  if( ($titleValidationError == $dateValidationError)    &&($dateValidationError == $timeValidationError)  &&($timeValidationError==$placeValidationError) && ($placeValidationError== $descriptionValidationError)&&($descriptionValidationError==="")){

     $title= $_POST['title'];
     $date=$_POST['date'];
     $time=$_POST['time'];
     $place=$_POST['place'];
     $description=$_POST['description'];


    $sql = "INSERT INTO addevent(title,date,time,venue,description,image) values('$title','$date','$time','$place','$description','$imagecontent')";
    $con->query($sql);





  }





}



?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nimedco Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <!--<a class="navbar-brand" href="index.html">--><b>Nimedco</b>
                </div>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../../index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                        <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Prescription</a>
                            </li>
                            <li>
                                <a href="events.php"><i class="fa fa-table fa-fw"></i> Home Medicine</a>
                            </li>
                          
                            <li>
                                <a href="articles.php"><i class="fa fa-edit fa-fw"></i> Mother & Baby</a>
                            </li>
                            <li>
                                <a href="clubs.php"><i class="fa fa-edit fa-fw"></i> Personal Care</a>
                            </li>
                            <li>
                                <a href="reg.php"><i class="fa fa-table fa-fw"></i> Pet Care</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">Events</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Information of the post
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">

                <?php echo "$message"; ?>
                <form  method = post enctype="multipart/form-data" >

                        <div class="form-group">
                            <label>Topic</label>
                            <input type = "text" name = "title" class="form-control" placeholder="Enter Title here">
                            <span class = "error_all"> <?php echo "$titleValidationError"; ?></span>
                            <!--<textarea class="form-control" rows="3" cols="150"></textarea>-->
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type = "text" name ="date" placeholder="Enter Date" class="form-control">
                            <span class = "error_all"> <?php echo "$dateValidationError"; ?></span>
                            <!--<input class="form-control" placeholder="Enter Date">-->
                        </div>

                        <div class="form-group">
                        <label>time: </label>
                        <input type = "text" name ="time" class="form-control" placeholder="Enter Time here">
                        <span class = "error_all"><?php echo "$timeValidationError"; ?></span>
                    </div>


                        <div class="form-group">
                    <label>Venue: </label>
                    <input type = "text" name ="place" class="form-control" placeholder="Enter venue here">
                    <span class = "error_all"> <?php echo "$placeValidationError"; ?></span>
                    </div>


                       <div class="form-group">
                            <label>Description</label>
                            <textarea  name ="description" placeholder="Enter description here" class="form-control" rows="8"></textarea>
                            <span class = "error_all"> <?php echo "$descriptionValidationError"; ?></span>
                        </div>

  




                        <div class="form-group">
                            <label>Images</label>
                            <input type = "file" name ="photo">
                            <span class = "error_all">* <?php echo "$photoValidationError"; ?></span>
                        </div>

                        <input type = "submit" value = "Publish event" name = "submit">
                        <button type="reset" class="btn btn-default">Clear All</button>

                    </form>


                </div>
                <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->

    <?php


    $sql = "select eventid,title,date,time,venue,description,image from addevent";
    $result = $con->query($sql);

    echo '<br/>'.'<h1>Event Delete</h1>'.'<hr>';


    while( $row = mysqli_fetch_array($result)){

     $id= $row['eventid'];


    echo '<div style="text-align: center;margin-top:5px;margin-left:15px;display: inline-block;word-wrap: break-word;  border-radius: 25px;
  border: 2px solid #DCDCDC;width: 200px;height: 150px; border-colorrgb(220,220,220);">'.'<br/>'.'<div style= "padding: 10px; ">'.$row['title'].'</br>'.$row['date'].'</br>'.$row['time'].'</br>'.'</br>'.'<button  style = "background-color: #555555;border: none;width:90px;height:30px">'.'<a href = "deleteeventphp.php?id10='.$row['eventid'].'" style="color:white">delete </a>'.'</button>'.'</br>'.'</br>'.'</div>'.'</div>';

    }

    $con->close();

     ?>


<br/><h1>Event Calender</h1><hr>

<a href="../../calander/admincalender.php" class="btn draw-border" style="border: 2px solid white;background-color: none;font-size:30px;">View Calender</a>


</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->





        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
