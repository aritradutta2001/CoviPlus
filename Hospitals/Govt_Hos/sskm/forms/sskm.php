<?php 
session_start();
include "config.php";
if(isset($_POST["submit"]))
{
	$name = $_POST['name'];
	$username = $_SESSION['username'];
	$date = $_POST['date'];
	$sex=$_POST['sex'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$bg=$_POST['bg'];
	$aadhaar_number=$_POST['aadhaar_number'];
	$phone=$_POST['phone'];
	
	$sql = "SELECT * FROM sskm WHERE aadhaar_number='$aadhaar_number'";
	$result=mysqli_query($conn, $sql);
	if ($result->num_rows > 0) 
		{
			echo"<script>alert('Aadhaar No Already Exists.')</script>";
		}
	else
	{
	$sql="insert into sskm(name,username,main_date,date,sex,address,pincode,bg,aadhaar_number,phone)Values('$name','$username',curdate(),'$date','$sex','$address','$pincode','$bg','$aadhaar_number','$phone')";
	
	if(mysqli_query($conn,$sql))
	{
		echo"<script>alert('Wow!Registration Sucessfull...')</script>";
	}
	else
	{
		echo"<script>alert('Connection Failed.')</script>";
	}
	}
}
?>