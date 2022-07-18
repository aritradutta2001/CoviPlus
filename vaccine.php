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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Vaccine</title>
<link rel="icon" href="Logo/logo.png" height="100%" width="100%" />

</head>

<body bgcolor="#F1F3F6">

<table border ="0" width="100%"height="10%" bgcolor="#2874F0">
<tr>
<td align="center" ><img src="Logo/title.png" width="150px"height="50px"></td>

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
</th>
</tr>
</table>
</div>

<!DOCTYPE html>
<html>
<head>
	<title>VACCINATION</title>
	<link rel="stylesheet" type="text/css" href="css/1stpagee.css">
    <script src="https://kit.fontawesome.com/868a450bd6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
	<section class="header">
		<div class="main">
        <div class="text-box">
        	<h1>VACCINATION</h1>
        	<p>#INDIA FIGHTS CORONA<br># LARGEST VACCINE DRIVE<br>Everyone 18 and older is eligible to get the vaccine against Covid-19. Availability may vary by state.Check your nearest vaccination center and slots availability.
        	</p>
        	<a href="regis.php"class="pro-btn">Register Yourself For Vaccination</a>
        </div>
    </section>
        <!-----------------------ABOUT--------------->
        <section class="about">
        	<h1>ALL ABOUT VACCINATION</h1>
        	<p>How It Works?<br>Know Everything About Vaccination.</p>
        	
        	<div class="row">
        		<div class="aboutt-col">
        			<h3>Appointment</h3>
        			<p>Book An Appointment On Covid Plus Or Walk Into Any Vaccination Center.</p>
        		</div>
        		<div class="aboutt-col">
        			<h3>Vaccination</h3>
        			<p>Get Your Vaccination Safely AT The Time Of Your Appointment.</p>
        		</div>
        		<div class="aboutt-col">	
        			<h3>Completion</h3>
        			<p>Get Your Conformation Message From Covid Plus And Wait For Dose #2.</p>	
        		</div>
        	</div>
        </section> 
        <!-----------------------GALLERY--------------->
        <section class="gallery">
        	<h1>Our Vaccination Centers</h1>
        	<p>Know More About And Look Into These Vaccination Centers</p>
        	<div class="row">
        		<div class="gallery-col">
        			<img src="images/sskm.jpg">
        			<div class="layer">
        				<h3>SSKM</h3>
        			</div>	
        		</div>
        		<div class="gallery-col">
        			<img src="images/cmri2.jpg">
        			<div class="layer">
        				<h3>CMRI</h3>
        			</div>	
        		</div>
        		<div class="gallery-col">
        			<img src="images/amri.jpg">
        			<div class="layer">
        				<h3>AMRI</h3>
        			</div>
        		</div>
        </section>
<!------------------------facilities----------------->
        <section class="facilities">
        	<h1>How To Get Your Vaccination</h1>
        	<p>Know The Whole Rundown Process To Get Your Vaccination</p>

        	<div class="row">
        		<div class="facilities-col">
        			<img src="images/phone.jpg">
        			<h3>Booking An Appointment</h3>
        			<p>Book An Appointment On Covid Plus On "Register Yourself For Vaccination" Or Walk Into Any Vaccination Center.</p>
        		</div>
        		<div class="facilities-col">
        			<img src="images/injection.jpg">
        			<h3>Getting Yourself For Vaccination</h3>
        			<p>Get Your Vaccination Safely AT The Time Of Your Appointment.</p>
        		</div>
        		<div class="facilities-col">
        			<img src="images/Message.jpg">
        			<h3>Completion Of Vaccination</h3>
        			<p>Get Your Conformation Message From Covid Plus And Wait For Dose #2.</p>
        		</div>
        	</div>
        	<section class="testimonials">
        		<h1>What Our Citizen Says</h1>
        		<p>Check Here The Latest Public Review About Vaccination</p>
        		<div class="row">
        			<div class="testimonial-col">
        				<img src="images/sayani.jpg">
        				<div>
        					<p>I have been Vaccinated successfully so I would suggest each of you to kindly get vaccinated.</p>
        					<h3>Sayani Deb</h3>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star"></i>
        				</div>
        			</div>	
        			<div class="testimonial-col">
        				<img src="images/aritra.jpg">
        				<div>
        					<p>I am suffering from fever and back pain also feeling a heat on my body after vaccination.</p>
        					<h3>Aritra Dutta</h3>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star"></i>
        					<i class="fa fa-star-o"></i>
        					<i class="fa fa-star-o"></i>
        				</div>
        			</div>		
        		</div>
        	</section>
        </section>

        <section class="ctw">
        	<h1>Enroll For Your Vaccination From Your Place<br>Just From Covid Plus</h1>
        	<a href="contact_vaccine.php" class="pro-btn">CONTACT US</a>
        </section>
        <section class="footer">
        	<h4>About Us</h4>
        	<p>Launching Covid Plus as an open source platform for countries to orchestrate successful vaccination<br> with efficient monitoring with an aim of achieving universal vaccination</p>
        	<p>Made with <i class="fa fa-heart-o"></i> by New Alipore College</p>
        </section>          
	</header>
    
</body>
</html>
