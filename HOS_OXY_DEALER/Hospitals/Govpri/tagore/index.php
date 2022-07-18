<?php 

include 'config.php';

error_reporting(0);

session_start();
if ($_SESSION['username']=="")
{
	header("Location: \Covi+\HOS_OXY_DEALER\login_hos.php");
}
?>

<html>

<head>
	
<title>NH Rabindranath Tagore International Institute Of Cardiac Science</title>
<link rel="icon" href="logo.png" height="100%" width="100%" />
<style>
 .img {
    background-image: url(bg.jpg);
    background-position: center;
    background-size: cover;
 
}
.button{
	cursor:pointer;
	border-radius:25px;
width: 100px;
height: 30px;
transition: .3s;
}
.button:hover {
    transform: translateY(-5px);
    background: #6c5ce7;

}
</style>
<body bgcolor="#F1F3F6">
<table border="0" width="100%" bgcolor="#2874F0">
<th><img src="img/tagore.jpg" align="left" width="120px" height="120px" class="zoom">
<th>
<h1 align="center"><font color ="white">NH Rabindranath Tagore International Institute Of Cardiac Science</font></h1>
<h3 align="center"><font color ="white">Premises No. 1489, (Postal Address: 124 Mukundapur) E M Bypass, Kolkata - 700099</font></h3>
<h4 align="center"><font color ="white"><b><i class="fa fa-phone" style="font-size:18px"></i>  + 91-8420000628</b></h4></font>
</th>
<th>
<a href="logout.php" ><button name="submit" class="button">Logout</button></a>
</th>
</table>
<div class="img">
<h2>View All Patients</h2>

<div id="main">

					
					<center>
                    	<table border="0" cellpadding="2" cellspacing="10">
							<tr><br>
                                 <td><b>Patient ID</b></td>
                                <td><b>Name</b></td>
                                <td><b>DOB</b></td>
                                <td><b>Sex</b></td>
								<td><b>Address</b></td>
								<td><b>Pincode</b></td>
                                <td><b>Blood Group</b></td>
                                <td><b>Aadhaar Number</b></td>
								<td><b>Phone Number</b></td>
                                
								
                            </tr> 
                            <?php
								$result=mysqli_query($conn,"SELECT * FROM `tagore`");
								while($row=mysqli_fetch_assoc($result))
								{
									
									echo"<tr class=odd>
                                	<td>$row[id]</td>
                                	<td>$row[name]</td>
                                	<td>$row[date]</td>
                                	<td>$row[sex]</td>
                                	<td>$row[address]</td>
									<td>$row[pincode]</td>
									<td>$row[bg]</td>
									<td>$row[aadhaar_number]</td>
									<td>$row[phone]</td>
                            		</tr>";
								}
							?>                       
                        </table>
				      
						</center>
                        <br/><br/>

</div>
<h1 align="left">Available Beds :</h1>
<div id="main">

					
					<center>
                    	<table border="0" cellpadding="5" cellspacing="5">
							<tr><br>
                                <td><b>Ward</b></td>
								<td><b>Available Beds</b></td>
                                
								
                            </tr> 
                            <?php
								$result=mysqli_query($conn,"SELECT * FROM tagore_beds`");
								while($row=mysqli_fetch_assoc($result))
								{
									
									echo"<tr class=odd>
                                	
									<td>$row[ward]</td>
									<td>$row[beds]</td>
                                	
                                	
                            		</tr>";
								}
							?>                       
                        </table>
						</center>
                        <br/><br/>

</div>
<form action="" method="POST" class="form-submit">
<div class="input-form">
				<br><label><b>Update Beds : </b><input type="text-box"  placeholder="Update" name="beds" required>
			</div>
<div class="input-form">
				<br><center><button name="submit" class="button">Update</button></center>
</div>
</form>
</body>
<?php 
include "config.php";
if(isset($_POST["submit"]))
{
	$beds = $_POST['beds'];
	$sql="UPDATE `tagore_beds` SET `beds` ='$beds'";
	if(mysqli_query($conn,$sql))
	{
		echo"<script>alert('Sucessfull...')</script>";
	}
}
?>
<h3 align="left">Hours of Operation <h3>
<div id="open">
<br>
<center>
<table border=0 align="center">
<tr>
<?php
								$result=mysqli_query($conn,"SELECT * FROM `tagore_open`");
								while($row=mysqli_fetch_assoc($result))
								{
									
									echo"<tr class=odd>
                                	
									<td>$row[date]</td>
									<td>$row[open]</td>
                                	
                                	
                            		</tr>";
								}
							?> 
							
							</tr>	
</table>					
</center>
</div>
</div>