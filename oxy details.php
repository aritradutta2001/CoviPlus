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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;

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
	<link rel="stylesheet" type="text/css" href="style1.css">
<title>Oxygen Dealers</title>
<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />

</head>

<body bgcolor="#F1F3F6">

<table border ="0" width="100%"height="10%" bgcolor="#2874F0">
<tr>
<td align="right" ><img src="Logo/title.png" width="80px"height="30px"></td>
<td align="center" >
<div class="dropdown">
  <input type="text" onclick="myFunction()" class="dropbtn"  placeholder="Search for Oxygen Dealers" style="width:500px;height:35px;" id="myInput" onkeyup="filterFunction()" >
  <div id="myDropdown" class="dropdown-content">
   
    <a href="Oxy_Dealers/Dealer1/index.php">Trinayani Medical Store</a>
    <a href="Oxy_Dealers/Dealer2/index.php">Shibani Enterprise</a>
    <a href="Oxy_Dealers/Dealer3/index.php">Aryan Oxygen Services</a>
    <a href="Oxy_Dealers/Dealer4/index.php">Fyrax INDIA</a>
    <a href="Oxy_Dealers/Dealer5/index.php">Bijoli Seba Centre Oxygen Division</a>
     <a href="Oxy_Dealers/Dealer6/index.php">Jiban Deep Medicine & Oxygen</a>
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
<table border ="0" width="100%" bgcolor="#1abc9c">
<tr>
<td align="center" colspan="5"><h1><font color="white">Oxygen Dealers</h1></td>
</tr>
</table>
<table border="1" width="100%" bgcolor="White">

<tr>
<tr>
<a href="Oxy_Dealers/Dealer1/index.php" ><button name="submit" class="btn2" style="width:100%;height:22%;background-color:white;"><img src="Oxy_image/image/oxy.png" align="left" width="120px" height="120px" class="zoom"><font color="green" ><b>Trinayani Medical Stores</b></font>
<p><b><font color = "dblack" >Rating : 4</p></font>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>Address: 31/N/1, Siddhinath Chatterjee Rd, Arcadia, Behala, Kolkata, West Bengal 700034,Phone:+(91)-033-22551633</p>

</tr>

<tr>
<a href="Oxy_Dealers/Dealer2/index.php" ><button name="submit" class="btn2" style="width:100%;height:22%;background-color:white;"><img src="Oxy_image/image/oxy1.png" align="left" width="120px" height="120px" class="zoom"><font color="green" ><b>Shibani Enterprise</b></font>
<p><b><font color = "dblack" >Rating : 3</p></font>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>Address: 53 College Street, 53, College Street, Bowbazar, Kolkata - 700012, Near College Square (Map),Phone:+(91)-079-47405688
</tr>
<tr>
<a href="Oxy_Dealers/Dealer3/index.php" ><button name="submit" class="btn2" style="width:100%;height:22%;background-color:white;"><img src="Oxy_image/image/oxy2.png" align="left" width="120px" height="120px" class="zoom"><font color="green" ><b>Aryan Oxygen Services</b></font>
<p><b><font color = "dblack" >Rating : 5</p></font>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<p>Address: 51, SOUTH SINTHI ROAD, Sinthee, Dipen Ghosh Sarani, Kolkata-700050, West Bengal, India,Phone:+(91)-079-8390215
</tr>
<tr>
<a href="Oxy_Dealers/Dealer4/index.php" ><button name="submit" class="btn2" style="width:100%;height:22%;background-color:white;"><img src="Oxy_image/image/oxy3.png" align="left" width="120px" height="120px" class="zoom"><font color="green" ><b>Fyrax INDIA</b></font>
<p><b><font color = "dblack" >Rating : 4</p></font>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>Address: 208/1A, Bidhan Sarani, Beadon Street, Kolkata - 700006, Opposite Vidyasar College (Map),Phone:+(91)-079-9385164</tr>
<tr>
<a href="Oxy_Dealers/Dealer5/index.php" ><button name="submit" class="btn2" style="width:100%;height:22%;background-color:white;"><img src="Oxy_image/image/oxy4.png" align="left" width="120px" height="120px" class="zoom"><font color="green" ><b>Bijoli Seba Centre Oxygen Division</b></font>
<p><b><font color = "dblack" >Rating : 3</p></font>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>Address: Ground Floor, 28/2/1, Old Ballygunge 2nd Lane, Ballygunge, Kolkata - 700019, Near Balaram Mallick Sweet Shop,Phone:+(91)-079-47404346
</tr>

<tr>
<a href="Oxy_Dealers/Dealer6/index.php" ><button name="submit" class="btn2" style="width:100%;height:22%;background-color:white;"><img src="Oxy_image/image/oxy5.png" align="left" width="120px" height="120px" class="zoom"><font color="green" ><b>Jiban Deep Medicine & Oxygen</b></font>
<p><b><font color = "dblack" >Rating : 5</p></font>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<p>Address: 114/ B, Hazra Road, Kalighat, Kolkata - 700026, Near Harish Mukherjee Road and Hazra Road Crossing Opposite Petrol Pump,Phone:+(91)-033-24550926
</tr>

</tr>
</table>
</html>