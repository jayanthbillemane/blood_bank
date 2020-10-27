<?php
include("./dbconnection.php");
$connection=$Value['Conn'];
   if( $_REQUEST["hname"] || $_REQUEST["age"] ) {
   	  $hospital_name= $_REQUEST['hname'];
      $blood_type= $_REQUEST['btype'];
      $query = "INSERT INTO bloodbank.blood_list (`ID`, `Hospital_Name`, `Blood_Type`) VALUES ('','$hospital_name', '$blood_type')";
      print_r($query);	
      $new=mysqli_query($connection,$query) or die("Failer");
      if($new!="")
      {
      	{header('location: index2.php');}
      }
      exit();
   }
?>
<html>
<HEAD>	
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</HEAD>
   <body>
    <div class="container">  
      <form class="form-horizontal" action = "<?php $_PHP_SELF ?>" method = "POST">
         Hopital Name: <input type = "text" name = "hname" />
         Blood Type: <input type = "text" name = "btype" />
         <input type = "submit" />
      </form>

   </div>   
   <button onclick="location.href = 'index2.php';" id="myButton" class="float-left submit-button" >Home</button>
   </body>
</html>