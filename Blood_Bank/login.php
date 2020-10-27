<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login </h2>
		<div class="input-group">
		<button onclick="myFunction()">Home Page</button>
		</div>	
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
		<label for="cars">Choose a Reciever/Hospital:</label>
		  <select name="user_type" id="user_type">
		    <option value="Hospital">Hospital</option>
		    <option value="Reciever">Reciever</option>
		  </select>
		  <br><br>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member ? <a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
<script>
function myFunction() {
  location.replace("home.php")
}
</script>
</html>