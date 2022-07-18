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
<style>
header
{
height: 10%;
padding:0px;
text-align: center;
background: #1abc9c;
color: white;
font-size:25px;
}


.btn{
cursor:pointer;
}
.details{
text-align:center;
}
.logo{
height:150;
width:150;
}

.btn2{
cursor:pointer;
border-radius:8px;

transition: .3s;

}
.btn2:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
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
</style>  



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.checked {
  color: orange;
}
</style>
	<link rel="stylesheet" type="text/css" href="style1.css">
<title>Private Hospitals</title>
<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />

</head>

<body bgcolor="#F1F3F6">

<table border ="0" width="100%"height="10%" bgcolor="#2874F0">
<tr>
<td align="right" ><img src="Logo/title.png" width="150px"height="50px"></td>
<td align="center" >
<div class="dropdown">
  <input type="text" onclick="myFunction()" class="dropbtn"  placeholder="Search for Private Hospitals" style="width:500px;height:35px;" id="myInput" onkeyup="filterFunction()" >
  <div id="myDropdown" class="dropdown-content">
   
    <a href="Apollo\sub_apollo.php">Apollo Gleneagles Hospitals</a>
    <a href="Peerless\sub_peerless.php">Peerless Hospital And B.K.Roy Research Centre Ltd.</a>
    <a href="Medica\sub_medica.php">Medica Superspecialty Hospital</a>
    <a href="Belle\sub_belle.php">Belle Vue Clinic</a>
    <a href="Tagore\sub_tagore.php">NH Rabindranath Tagore International Institute Of Cardiac Science</a>
	<a href="Jimsh\sub_jims.php">Jagannath Gupta Institute of Medical Science & Hospital</a>
    
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
<li align="left" ><a href="hospital.php" ><font color="white">Home</a></li>
</ul>
<div>
</th>
<th>
<div class ="menu-bar">
<ul>
<li align="left" ><a href="#" ><?php
echo $_SESSION['username'];
?></a>
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
<li><a href="#" >Notification Preferences</a></li>
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
<li align="left" ><a href="logout.php" ><font color="white">Logout</a></li>
</ul>
<div>
</th>

</tr>
</table>
</div>
<div class="space">
</div>






<title>Private Hospitals</title>
<header class="header">
<h1>Private Hospitals</h1>
</header>

<body>
<!-- Creating_list_of_Hospitals -->
<table border="2" style="width:100%">
 <!-- Apollo_Hospital -->
 <tr>
    <tr width="100%" height="40%"><a href="Apollo\sub_apollo.php"><button class="btn2"style="width:100%;height:26%;background-color:white;">
	<img align="left" class="logo"src="image\apollo.jpg" >
    <center><h4>Apollo Gleneagles Hospitals</h4> 
<img height="10%" src="image\internet_icon.png" >		http://www.apollogleneagles.in<br>
<img height="6%" src="image\@icon.png" >	ips_kol@apollohospitals.com<br>
☎ +91-33-23203040/23202122<br>
A 610-bedded multispecialty tertiary care hospital – Apollo Gleneagles Hospitals Kolkata, is a perfect blend of technological excellence, comple ..</td>
 </center></button></a></tr>
  <!-- Peerless_Hospital -->
  
     <tr width="100%" height="40%"><a href="Peerless\sub_peerless.php"><button class="btn2"style="width:100%;height:26%;background-color:white;">
	 <img align="left"class="logo"src="image\peerless.jpg" >
<center><h4>Peerless Hospital And B.K.Roy Research Centre Ltd.</h4> 
<img height="10%" src="image\internet_icon.png" >	http://wwwww.peerlesshospital.com<br>
<img height="6%" src="image\@icon.png" >	internationaldesk@peerlesshospital.com<br>
☎ +91 9433129040<br>
Peerless Hospitex Hospital and Research Center Ltd. is a premier 400-bedded Corporate multispecialty tertiary care hospital, in a sprawling area of 10 ..</td>
 </center></button></a></tr>
 <!-- Medica_Hospital -->
 
    <tr width="100%" height="40%"><a href="Medica\sub_medica.php"><button class="btn2"style="width:100%;height:26%;background-color:white;">
	<img align="left"class="logo"src="image\medica.jpg" >
    <center><h4>Medica Superspecialty Hospital</h4> 
<img height="10%" src="image\internet_icon.png" >		www.medicahospitals.in<br>
<img height="6%" src="image\@icon.png" >	internationaldesk.mshk@medicasynergie.in<br>
☎ 7044025090 / 91-9830720624<br>
Medica Group of Hospitals Touching new heights healthcare delivery in the east Medica Hospitals, one of the most reputed and leading healthcare chains .. </td>
 </center></button></a></tr>
 <!-- Belle_Hospital -->
 
    <tr width="100%" height="40%"><a href="Belle\sub_belle.php"><button class="btn2"style="width:100%;height:26%;background-color:white;">
	<img align="left"class="logo"src="image\belle.jpg" >
<center><h4>Belle Vue Clinic</h4> 
<img height="10%" src="image\internet_icon.png" >		www.bellevueclinic.com<br>
<img height="6%" src="image\@icon.png" >	marketing@bellevueclinic.com<br>
☎ 03322872321 (2202) / 9836193420<br>
Belle Vue Clinic is a 241-bed, multi-speciality facility that provides comprehensive and affordable care to patients suffering from various ailments. ..</td>
 </center></button></a></tr> 
 <!-- Tagore_Hospital -->
 
 <tr width="100%" height="40%"><a href="Tagore\sub_tagore.php"><button class="btn2" style="width:100%;height:26%;background-color:white;">
 <img align="left" class="logo"src="image\tagore.jpg" >
    <center><h4>NH Rabindranath Tagore International Institute Of Cardiac Science</h4>
<img height="10%" src="image\internet_icon.png" >		http://www.narayanahealth.org<br>
<img height="6%" src="image\@icon.png" >	arnab.banerjee01@nhhospitals.org<br>
☎ + 91-8420000628<br>
Rabindranath Tagore International Institute of Cardiac Sciences (RTIICS) Kolkata is a 550 bed full-fledged multi-specialty hospital spread over 4 acre ..</td>
 </center></button></a></tr>
 
<!-- Tagore_Hospital -->
 
 <tr width="100%" height="40%"><a href="Jimsh\sub_jims.php"><button class="btn2" style="width:100%;height:26%;background-color:white;">
 <img align="left" class="logo"src="image\jims.jpg" >
    <center><h4>Jagannath Gupta Institute of Medical Science & Hospital</h4>
<img height="10%" src="image\internet_icon.png" >		http://jimsh.org/<br>
<img height="6%" src="image\@icon.png" >	contact@jimsh.org<br>
☎ +9903396230 / 8334999333<br>
Established in June 2016, Jagannath Gupta Institute of Medical Sciences and Hospital (JIMSH) is committed to fostering patient care, research and education. With the motto of “Advancing Human Health”, JIMSH aspires to deliver healthcare f ...... 
</center></button></a></tr>

</table>
</body>
</html>