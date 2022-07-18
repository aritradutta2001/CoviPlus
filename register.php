<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) 
	{
		$sql = "SELECT * FROM users WHERE username='$username'";
		$sql1 = "SELECT * FROM users WHERE email='$email'";
		$sql2 = "SELECT * FROM users WHERE phone_no='$phone_no'";
		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql1);
		$result2 = mysqli_query($conn, $sql2);
		if ($result->num_rows > 0) 
		{
			echo"<script>alert('Username Already Exists.')</script>";
		}
		else if (($result1->num_rows > 0))
		{
			echo"<script>alert('Email Already Exists.')</script>";
		}
		else if (($result2->num_rows > 0))
		{
			echo"<script>alert('Mobile no Already Exists.')</script>";
		}
		else
		{
			$sql = "INSERT INTO users (username,phone_no, email, password)
					VALUES ('$username','$phone_no', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) 
			{
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} 
			else 
			{
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} 
		
	} 
	else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>
	<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;"><img src="Logo/logo.png" width="100px"height="100px" align="center"><br>Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="phone_no" placeholder="Mobile no" name="phone_no" value="<?php echo $phone_no; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>