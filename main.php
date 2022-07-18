<?php 

include 'config.php';

session_start();
error_reporting(0);

if ($_SESSION['username']=="")
{
	header("Location: login.php");
}

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>Hospital,Oxy_Dealers,Vaccination...,Covi+</title>
<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />
<style>
.mySlides {display:none;}
.star-light
{
color:#e9ecef;
}
.checked{
	color:orange;
}
</style>
<style>
.dropbtn {
 
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}



#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus 
{
outline: 3px solid #ddd;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover 
{
background-color: #ddd;
}

.show
{
display: block;
}
.last
{
background-color:yellow;

text-align : center;

}
	
</style>
</head>

<body bgcolor="#F1F3F6">

<table border ="0" width="100%"height="10%" bgcolor="#2874F0">
<tr>
<td align="right" ><img src="Logo/title.png" width="150px"height="50px"></td>
<td align="center"  >

<div class="dropdown">
  <input type="text" onclick="myFunction()" class="dropbtn"  placeholder="Search for Oxygen,Hospitals,Vaccine" style="width:500px;height:35px;" id="myInput" onkeyup="filterFunction()" >
  <div id="myDropdown" class="dropdown-content">
   
    <a href="oxy details.php">Oxy Dealers</a>
    <a href="hospital.php">Hospitals</a>
    <a href="gov_hospital.php">Government Hospitals</a>
    <a href="pri_hospital.php">Private Hospitals</a>
    <a href="vaccine.php">Vaccine</a>
    
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

</td>
<th>
<div class ="menu-bar">
<ul>
<li align="left" ><a href="#" >
<?php
echo $_SESSION['username'];
?>
</a>
<div class="sub-menu-1">
<ul>
<li><a href="#" >My Profile</a></li>
<li><a href="#" >Orders</a></li>
<li><a href="#" >Booking</a></li>
<li><a href="#" >Notifications</a></li>
</ul>
</div>
</li>
</ul>
</div>
</th>
<th>
<div class ="menu-bar">
<ul>
<li align="left" ><a href="#" >More</a>
<div class="sub-menu-1">
<ul>
<li><a href="" >Notification Preferences</a></li>
<li><a href="24x7/bot.php" >24*7 Customer Care</a></li>
<li><a href="advertise/add.html" >Advertise</a></li>
</ul>
</div>
</li>
</ul>
</div>
</th>
<th>
<div class ="menu-bar">
<ul>
<li><a href="logout.php" ><font color="white">Logout</a></li>
</ul>
</div>
</th>

</tr>

</table>
<div class="input-menu">
<table border="0" width="100%" bgcolor="White">
<tr>
<th width="35%"><center><a href="oxy details.php" ><button name="submit"  class="btn" style="width:140px;height:45px;background-color:blue;color:white;"><b>Oxygen Dealers</b></button></a></center></th>
<th width="30%"><center><a href="hospital.php" ><button name="submit" class="btn" style="width:140px;height:45px;background-color:blue;color:white;"><b>Hospitals</b></button></a><center></th>
<th width="35%"><center><a href="vaccine.php" ><button name="submit" class="btn" style="width:140px;height:45px;background-color:blue;color:white;"><b>Vaccine</b></button></a><center></th>
</tr>
</div>
</table>

<div class ="w3-content w3-section">
	<img class="mySlides"src="banner.jpg"  width="100%" height="45%" >
	<img class="mySlides"src="banner1.jpg" width="100%" height="45%" >
	<img class="mySlides"src="banner2.jpg" width="100%" height="45%" >
</div>

<br>

<style>
.mar
{
background-color:yellow;
height:9%;
text-align : center;
}

</style>
<div class= "mar">
<center>
<marquee direction="left">
          <p><b><h6>Here You Can Search Oxygen Dealers,Hospitals<b> | </b>You can buy Oxygen cylinders from Dealers and You Can Book a bed for your COVID patient  in any Gov and private Hospitals | You Can Register for Vaccination <b>|</b> <b>For any query / difficulty, contact +911234567890 or send mail to support - coviplus@gmail.com </b></b></h6></p>
          </marquee></center>
</div>
<br>

<div class="input-color">
<table border ="0" width="100%" bgcolor="white">
<tr>
<td colspan="5"><h2>Oxygen Dealers <a href="oxy details.php" ><button name="submit"  class="btn" style="width:140px;height:40px;background-color:blue;color:white;"><b>VIEW ALL</b></button></a>
</div></h2><hr></td>
<tr>
<th><center><img src="Oxy_image/image/oxy.png" width="100px" height="100px" class="zoom"></center></th>
<th><center><img src="Oxy_image/image/oxy5.png" width="100px" height="100px" class="zoom"></center></th>
<th><center><img src="Oxy_image/image/oxy2.png" width="100px" height="100px" class="zoom"></center></th>
<th><center><img src="Oxy_image/image/oxy3.png" width="100px" height="100px" class="zoom"></center></th>
<th><center><img src="Oxy_image/image/oxy4.png" width="100px" height="100px" class="zoom"></center></th>
</tr>
<tr>
<th><center><font color="green">Trinayani Medical Stores</font></center></th>
<th><center><font color="green">Jibandeep</font></center></th>
<th><center><font color="green">Aryan Oxygen Services</font></center></th>
<th><center><font color="green">Fyrax INDIA</font></center></th>
<th><center><font color="green">Bijoli Seba Centre Oxygen Division </font></center></th>
</tr>
<tr>
<th><center><a href="Oxy_Dealers/Dealer1/index.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Oxy_Dealers/Dealer6/index.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Oxy_Dealers/Dealer3/index.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Oxy_Dealers/Dealer4/index.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Oxy_Dealers/Dealer5/index.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
</tr>
</tr>
</table>
<br>
<div class="input-color">
<table border ="0" width="100%" bgcolor="white">
<tr>
<td colspan="5"><h2>Hospitals <a href="hospital.php" ><button name="submit"  class="btn" style="width:140px;height:40px;background-color:blue;color:white;"><b>VIEW ALL</b></button></a>
</h2><hr></td>

<tr>
<th width="20%"><center><img src="Hos_Image/hospital.png" width="100px" height="100px" class="zoom"></center></th>
<th width="20%"><center><img src="Hos_Image/hospital1.png" width="100px" height="100px" class="zoom"></center></th>
<th width="20%"><center><img src="Hos_Image/hospital2.png" width="100px" height="100px" class="zoom"></center></th>
<th width="20%"><center><img src="Hos_Image/hospital3.png" width="100px" height="100px" class="zoom"></center></th>
<th width="20%"><center><img src="Hos_Image/hospital4.png" width="100px" height="100px" class="zoom"></center></th>
</tr>
<tr>
<th><center><font color="green"> SSKM Medical College & Hospital</font></center></th>
<th><center><font color="green"> Jagannath Gupta Institute of Medical Sciences and Hospital</font></center></th>
<th><center><font color="green"> N.R.S. Medical College & Hospital</font></center></th>
<th><center><font color="green"> ID & BG Hospital</font></center></th>
<th><center><font color="green"> R.G.Kar Medical College & Hospital</font></center></th>
</tr>
<tr>
<th><center><a href="Hospitals/Govt_Hos/sskm/sskm.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Jimsh/sub_jims.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Hospitals/Govt_Hos/Nrs/nrs.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Hospitals/Govt_Hos/Id_Bg/id_bg.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
<th><center><a href="Hospitals/Govt_Hos/R_j_kar/r_j_kar.php"><button name="submit" class="btn1" style="width:120px;height:30px;background-color:blue;color:white;"><b>Show Details</b></button></center></th>
</tr>
</tr>                           
</table>
<div class="space">
</div>
<table border ="0" width="100%" bgcolor="#2874F0" >
<tr>
<td align="center" bgcolor="black" width="25%"><font color="white"><b>Quick Links</b></font></td>
<td align="center" bgcolor="black" width="25%"><font color="white"><b>Follow Us</b></font></td>
<td align="center" bgcolor="black" width="25%"><font color="white"><b>Contact</b></font></td>
<td align="center" bgcolor="black" width="25%"><font color="white"><b>Message</b></font></td>
</tr>

<tr>
<td>
<div class="sub-menu-2">
<ul>
<li><a href="oxy details.php"><font color="white">Oxygen Dealers</font></a></li>
<li><a href="hospital.php"><font color="white">Hospitals</font></a></li>
<li><a href="vaccine.php"><font color="white">Vaccine</font></a></li>

</ul>
</div>
</td>

<td>
<div class="sub-menu-2">
<ul>
<li><a href=""><font color="white">Facebook</font></a></li>
<li><a href=""><font color="white">Twitter</font></a></li>
<li><a href=""><font color="white">Youtube</font></a></li>
</ul>
</div>
</td>

<td>
<div class="sub-menu-2">
<ul>
<li><font color="white">Covi+ Developers </b></font></li>
<li><font color="white"><b>ADDRESS : </b>Block L, New Alipore,<br>Kolkata, West Bengal 700053</font></li>
<li><font color="white"><b>PHONE : </b> +91 1234567890 </font></li>
<li><font color="white"><b>EMAIL : <a href="mailto:coviplus@gmail.com" style="color: rgb(17, 85, 204);" target="_blank">coviplus@gmail.com</a></b></font></li>
<li><font color="white"></font></li>
</ul>
</div>
</td>

<td>
<div class="sub-menu-2">
<ul>
<font color="white">To Send a Message</font>
<br>
<a href="contact.php" ><button name="submit"  class="btn" style="width:140px;height:40px;background-color:blue;color:white;"><b>CLICK HERE</b></button>
</ul>
</div>
</td>

</tr>

</table>
<div class= "last">
<p ><font color="black"><center><b>Covi+ &copy; 2021 All Rights Reserved | Powered by New Alipore College </b></font></p></center>
</div>
<script>
var myindex =0;
carousel();

function carousel()
{
	var i;
	var x= document.getElementsByClassName("mySlides");
	for(i=0;i<x.length;i++)
	{
		x[i].style.display="none";
	}
	myindex++;
	if(myindex>x.length) {myindex=1}
	x[myindex-1].style.display="block";
	setTimeout(carousel,3000);
}
</script>

</body>