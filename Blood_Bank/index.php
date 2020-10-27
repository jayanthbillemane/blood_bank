<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>

<!DOCTYPE html>
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
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Blood Bank</h2>
		<a href="index.php?logout='1'" style="color: red">logout</a>
	</div>
<div class="content">
	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success">
			<h3>
				<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

<?php if (isset($_SESSION['username'])) : ?>
<p>Welcome <strong><?php echo $_SESSION['username']; ?><strong></p>
<div class="container">
	<?php
	include("./dbconnection.php");
	$connection=$Value['Conn'];
	$sql = "SELECT ID,Hospital_Name,Blood_Type FROM bloodbank.blood_list ";

	$new=mysqli_query($connection,$sql)or die("Failer");
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
			echo("<td align=\"center\"><button onclick=\"myFunction()\">Request</button></td>");
			echo "</tr>";
		}

?>
</div>
</div>
<?php endif ?>

	
</div>
<script>
function myFunction() {
  document.getElementById("myCheck").click();
}
</script>
</body>
</html>