
<!DOCTYPE>
<html>
<head>
   <style>
table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}

thead th:nth-child(1) {
  width: 30%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th, td {
  padding: 20px;
}
html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

thead th, tfoot th {
  font-family: 'Rock Salt', cursive;
}

th {
  letter-spacing: 2px;
}

td {
  letter-spacing: 1px;
}

tbody td {
  text-align: center;
}


html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

thead th, tfoot th {
  font-family: 'Rock Salt', cursive;
}

th {
  letter-spacing: 2px;
}

td {
  letter-spacing: 1px;
}

tbody td {
  text-align: center;
}

tfoot th {
  text-align: right;
}


thead th, tfoot th, tfoot td {
  background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));
  border: 3px solid purple;
}

</style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <title></title>
</head>
<body>
<div class="container">
  <div class="page-header">
    <h1 class="text-center">Blood Bank</h1>      
  </div>
 <div> 
<?php

include("./dbconnection.php");
session_start();
$connection=$Value['Conn'];

$sql = "SELECT ID,Hospital_Name,Blood_Type FROM bloodbank.blood_list ";
$new=mysqli_query($connection,$sql) or die("Failer");

echo "<table>";
echo "<td align=\"center\">Sl No</td>";
echo "<td align=\"center\">Hospital Name</td>";
echo "<td align=\"center\">Blood Type</td>";
echo "<td align=\"center\">Select</td>";
echo "<table>";

while ($Blood_Details=mysqli_fetch_assoc($new))
 {
  $ID=$Blood_Details['ID'];
  $BD=$Blood_Details['Hospital_Name'];
  $BBD=$Blood_Details['Blood_Type'];
  echo "<center>";
  echo "<tr>";
  echo "<td align=\"center\">$ID</td>";
  echo "<td align=\"center\">$BD</td>";
  echo "<td align=\"center\">$BBD</td>";
  echo("<td align=\"center\"><button onclick=\"location.href='login.php'\">Request</button></td>");
  ECHO "</tr>";

 }

?>
</div>
</body>
</html>