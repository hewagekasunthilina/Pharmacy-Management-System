<?php



$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "karateka";

  $con = new mysqli($servername,$username,$password,$dbname);



if(isset($_POST['submiti'])){

  if(getimagesize($_FILES['imagei']['tmp_name']) == FALSE){
      echo "failed";
  }

  else{
      $imagei = $_FILES['imagei']['tmp_name'];
      $imagecontenti=addslashes(file_get_contents($imagei));
  }



     $topici= $_POST['topici'];
     $datei=$_POST['datei'];
     $descriptioni=$_POST['textareai'];



 if($imagecontenti != null)
{
    $sql = "INSERT INTO news(topic,date,description,image) values('$topici','$datei','$descriptioni','$imagecontenti')";
    $con->query($sql);
}
else
{
    $sql = "INSERT INTO news(topic,date,description) values('$topici','$datei','$descriptioni')";
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
                            <h1 class="page-header">Karate News</h1>
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
                                            <form role="form" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Topic</label>
                                                    <textarea class="form-control" rows="3" name= "topici"></textarea>
                                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input class="form-control" placeholder="Enter Date" name ="datei">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="8" name = "textareai"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Images</label>
                                                    <input type="file" name = "imagei">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-md" name = "submiti">Post</button>
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

$sql = "select id,topic,date,description,image from news";
$result = $con->query($sql);


echo '<br/>'.'<h1>News Delete</h1>'.'<hr>';


while( $row = mysqli_fetch_array($result)){

 $id= $row['id'];


echo '<div style="text-align: center;margin-top:5px;margin-left:15px;display: inline-block;word-wrap: break-word;  border-radius: 25px;
border: 2px solid #DCDCDC;width: 200px;height: 150px; border-colorrgb(220,220,220);">'.'<br/>'.'<div style= "padding: 10px; ">'.$row['topic'].'</br>'.$row['date'].'</br>'.'<button  style = "background-color: #555555;border: none;width:90px;height:30px">'.'<a href = "deletenewsphp.php?id10='.$row['id'].'" style="color:white">delete </a>'.'</button>'.'</br>'.'</br>'.'</div>'.'</div>';

}

$con->close();

?>
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
