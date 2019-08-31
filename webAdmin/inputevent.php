
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



    $message = "Event is publish";


  }


}









?>


<html>

<?php echo "$message"; ?>
<form  method = post enctype="multipart/form-data" >
<label>title: </label>
<input type = "text" name = "title">
<span class = "error_all"> <?php echo "$titleValidationError"; ?></span></br>


<label>date: </label>
<input type = "text" name ="date">
<span class = "error_all"> <?php echo "$dateValidationError"; ?></span></br>


<label>time: </label>
<input type = "text" name ="time">
<span class = "error_all"><?php echo "$timeValidationError"; ?></span></br>


<label>place: </label>
<input type = "text" name ="place">
<span class = "error_all"> <?php echo "$placeValidationError"; ?></span></br>


<label>description: </label>
<input type = "text" name ="description">
<span class = "error_all"> <?php echo "$descriptionValidationError"; ?></span></br>



<label>add photo: </label>
<input type = "file" name ="photo">
<span class = "error_all">* <?php echo "$photoValidationError"; ?></span></br>


<input type = "submit" value = "Publish event" name = "submit">


</form>

</html>