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
	
	
<title>Hospitals</title>
<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
</head>
<body bgcolor="#F1F3F6">

<table border ="0" width="100%"height="10%" bgcolor="#2874F0">
<tr>
<td align="right" ><img src="Logo/title.png" width="150px"height="50px"></td>
<td align="center" >
<div class="dropdown">
  <input type="text" onclick="myFunction()" class="dropbtn"  placeholder="Search for Hospitals" style="width:500px;height:35px;" id="myInput" onkeyup="filterFunction()" >
  <div id="myDropdown" class="dropdown-content">
   
    <a href="Hospitals/Govt_Hos/sskm/sskm.php">SSKM Medical College & Hospital</a>
    <a href="Hospitals/Govt_Hos/Nrs/nrs.php">Nil Ratan Sircar Medical College & Hospital (NRSMC&H)</a>
    <a href="Hospitals/Govt_Hos/Id_Bg/id_bg.php">ID & BG Hospital</a>
    <a href="Hospitals/Govt_Hos/R_j_kar/r_j_kar.php">R.G.Kar Medical College & Hospital</a>
    <a href="Hospitals/Govt_Hos/Cmc/cmc.php">Calcutta Medical College & Hospital</a>
	<a href="Hospitals/Govt_Hos/Cnmc/cnmc.php">Calcutta National Medical College & Hospital</a>
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
<li align="left" ><a href="main.php" ><font color="white">Home</a></li>
</ul>
<div>
</th>
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
<div class="space">
</div>
<html>
<style>
.layer1 {
margin-left:10px;
    background-color: rgba(0,0,0,0.6);
    position: absolute;
   width: 45%;
    height: 40%;
	 border-radius:5px 70px 5px;
	 }

.header1{
padding-top:30px;
 
height:50vh;
background-image:url("back.jpg");
background-size: 100% 100%; 
background-repeat: no-repeat;
  
font-family: Verdana, sans-serif;
 font-size:40px;
text-shadow:5px 5px black;
color:white;
border-radius:25px;
}

.header1 h1{
margin-left:30px;
font-size:80px;

}


.container1 {
text-align:center;
display: flex; 
  width: 100%;
  justify-content: center;
 
}

.container1 p{
color:black;
font-size:20px;
}

.btn1{
margin:50px;
color:blue;
cursor:pointer;
opacity:0.9;
border-radius:25px;
width: 300px;
height: 100px;

}

.v{
margin-top:40px;
border-left: 6px solid black;
border-left-style:dotted;
  height: 145px;
}
.cvg{
 
 margin-left:auto;
 margin-right:auto;
  width: 50%;
}

body{
border-left:6px solid black;
border-right:6px solid black;
border-left-style:dotted;
border-right-style:dotted;
background-color: #F1F3F6;
}

.hos : link
{
text-decoration:none;
}


</style>

<header class="header1">

<div class="layer1">
    
<h1>HOSPITALS</h1>
</div>
</header>
<body>

<div class="container1">
<a href="gov_hospital.php" class="hos"><button type="submit" class="btn1" ><p>GOVERNMENT HOSPITALS</p></button></a>
<div class="v"></div>
<a href="pri_hospital.php" class="hos"><button type="submit"class="btn1"><p>PRIVATE HOSPITALS</p></button></a>
</div>
<br><br>
<div class="cvg">
<img src="cosymp.jpg" >
<br><br>
<img src="call.jpg">
</div>
</body>
</html>