<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) 
{
    header($link);
	
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	

	$sql = "SELECT * FROM oxy_users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $username;
		
		$link="Location: Oxygen/".$username."/index1.php";
		header($link);
		
	} else {
		echo "<script>alert('Username or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Login Form</title>
	<link rel="icon" href="logo.png" height="100%" width="100%" />
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;"><img src="logo.png" width="100px"height="100px" align="center"><br>Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username"  required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
				<i class "fas fa-lock"></i>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			
		</form>
		
	</div>
</body>
</html>