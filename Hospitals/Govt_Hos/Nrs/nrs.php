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
	
	$sql = "SELECT * FROM nrs WHERE aadhaar_number='$aadhaar_number'";
	$result=mysqli_query($conn, $sql);
	if ($result->num_rows > 0) 
		{
			echo"<script>alert('Aadhaar No Already Exists.')</script>";
		}
	else
	{
	$sql="insert into nrs(name,username,main_date,date,sex,address,pincode,bg,aadhaar_number,phone)Values('$name','$username',curdate(),'$date','$sex','$address','$pincode','$bg','$aadhaar_number','$phone')";
	
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
<?php 

include 'config.php';

error_reporting(0);

session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>Nil Ratan Sircar Medical College & Hospital (NRSMC&H)</title>
<link rel="icon" href="logo.png" height="100%" width="100%" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.mySlides 
{
	display:none;
}
.loc_btn
{
cursor:pointer;
}
.img
{
  position: relative;
}
.about{
background:rgba(0,0,0,0.6);
}
.progress-label-left
{
float:left;
margin-right:0.5em;
line-height:1em;
}
.progress-label-right
{
float:right;
margin-right:0.3em;
line-height:1em;
}
.star-light
{
color:#e9ecef;
}
.space{
	background-color:#fff;
	width: 100%;
height: 8%;
}
</style>
<style>
.popup_model{
background:rgba(0,0,0,0.7);
height:100%;
width:100%;
top:0;
position:fixed;
display:flex;
justify-content:center;
align-items:center;
display:none;
}
.popup_content{
width:500px;
height:650px;
background:white;
border-radius:5px;
text-align:center;
margin-top:0px;
position:fixed;
z-index: 9;
overflow-y: scroll; /* has to be scroll, not auto */
-webkit-overflow-scrolling: touch;

}
.close{
position:absolute;
top:0px;
right:10px;
font-size:40px;
transform:rotate(45deg);
cursor:pointer;
}
a:link{
text-decoration:none;
}
a:hover{
color:red;
}
input{
width:50%;
height:5%;
display:block;
margin:0px auto;
border-radius:10px;
outline-style:none;
}
.button{
text-align:center;
color:black;
width:20%;
padding:10px 10px;
cursor:pointer;
opacity:0.9;
border-radius:25px;
font-size:20px;
background-color:#2874F0;
}
.button:hover {background-color: #3e8e41}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
h2{
margin-top:20px;
color:red;
}
.reg_input1{
width:80%;
height:5%;
align:center;
margin:0px auto;
border-radius:10px;
outline-style:none;
}
.reg_input2{
width:100%;
height:5%;
align:center;
margin:0px auto;
border-radius:10px;
outline-style:none;
}
.reg_form1{
margin-top:20px;
color:red;
}
</style>

</head>

<body bgcolor="#F1F3F6">
<table border="0" width="100%" bgcolor="#2874F0">
<th><img src="img/hospital2.png" align="left" width="120px" height="120px" class="zoom">
<br><br><br><br><br>
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="15" viewBox="0 0 37 8.818">
    <defs>
        <style>
            .cls-1{fill:#2192d9;fill-rule:evenodd}.cls-2{fill:#3d71b7}
        </style>
    </defs>
    <g id="verified" transform="translate(-.835 -.175)">
        <g id="Artboard-43" transform="translate(.835 .175)">
            <g id="Group-2">
                <path id="Combined-Shape" d="M4.59 6.179l4.434-6h2.846L5.48 8.993H3.424L.835 3.163h2.589z" class="cls-1" transform="translate(-.835 -.175)"/>
                <path id="Combined-Shape-2" d="M13.543 2.923a1.717 1.717 0 0 1 .708.62 2.529 2.529 0 0 1 .351.969 7.838 7.838 0 0 1 .098 1.267v.349h-3.2v.484a3.278 3.278 0 0 0 .041.524 1.666 1.666 0 0 0 .135.451.856.856 0 0 0 .246.315.592.592 0 0 0 .375.118.665.665 0 0 0 .6-.282 2.021 2.021 0 0 0 .258-.856H14.6a2.374 2.374 0 0 1-.585 1.611 2.284 2.284 0 0 1-1.7.552 2.773 2.773 0 0 1-1.37-.282 1.778 1.778 0 0 1-.726-.743 2.845 2.845 0 0 1-.287-1.036c-.028-.308.006-.548 0-.856l2.48-3.428a2.612 2.612 0 0 1 1.131.223zM13.151 5.2q-.012-.349-.047-.614a1.526 1.526 0 0 0-.123-.451.636.636 0 0 0-.246-.282.769.769 0 0 0-.4-.1.706.706 0 0 0-.4.107.778.778 0 0 0-.252.282 1.356 1.356 0 0 0-.135.389 2.272 2.272 0 0 0-.041.428V5.2zm2.388-2.343h1.545v.811h.023a2.226 2.226 0 0 1 .6-.7 1.379 1.379 0 0 1 .855-.265q.07 0 .146.006t.146.017v1.487Q18.723 4.2 18.6 4.2t-.252-.006a1.626 1.626 0 0 0-.421.056 1.142 1.142 0 0 0-.386.186.938.938 0 0 0-.281.338 1.128 1.128 0 0 0-.105.513v3.634h-1.616zM19.5.788h1.615v1.329H19.5zm0 2.073h1.615v6.06H19.5zm3.1 1.059h-.819V2.861h.819v-.687a1.791 1.791 0 0 1 .117-.687 1.087 1.087 0 0 1 .334-.451 1.347 1.347 0 0 1 .533-.242 3.117 3.117 0 0 1 .7-.073q.433 0 .866.034v1.1a.917.917 0 0 0-.164-.011h-.152a.781.781 0 0 0-.48.113.449.449 0 0 0-.14.372v.529h.937V3.92h-.937v5H22.6zM25.782.788H27.4v1.329h-1.618zm0 2.073H27.4v6.06h-1.618zM31.565 5.2q-.012-.349-.047-.614a1.526 1.526 0 0 0-.123-.451.636.636 0 0 0-.246-.282.769.769 0 0 0-.4-.1.706.706 0 0 0-.4.107.778.778 0 0 0-.252.282 1.356 1.356 0 0 0-.135.389 2.272 2.272 0 0 0-.041.428V5.2zm-1.651.924v.484a3.278 3.278 0 0 0 .041.524 1.666 1.666 0 0 0 .135.451.856.856 0 0 0 .246.315.592.592 0 0 0 .375.118.665.665 0 0 0 .6-.282 2.021 2.021 0 0 0 .258-.856h1.452a2.374 2.374 0 0 1-.585 1.611 2.284 2.284 0 0 1-1.7.552 2.773 2.773 0 0 1-1.37-.282 1.778 1.778 0 0 1-.726-.743 2.845 2.845 0 0 1-.287-1.036q-.053-.571-.053-1.145a7.6 7.6 0 0 1 .088-1.172 2.754 2.754 0 0 1 .351-1 1.876 1.876 0 0 1 .755-.7A2.822 2.822 0 0 1 30.8 2.7a2.634 2.634 0 0 1 1.153.22 1.717 1.717 0 0 1 .708.62 2.529 2.529 0 0 1 .351.969 7.837 7.837 0 0 1 .094 1.267v.349zm7.27 2.152h-.023a1.588 1.588 0 0 1-.6.6 1.815 1.815 0 0 1-.825.169 1.612 1.612 0 0 1-1.463-.732 4.687 4.687 0 0 1-.473-2.422 4.786 4.786 0 0 1 .468-2.439 1.6 1.6 0 0 1 1.465-.752 1.571 1.571 0 0 1 .778.18 1.806 1.806 0 0 1 .579.541h.023V.878h1.616v8.043h-1.545zm-1.767-2.385a5.29 5.29 0 0 0 .158 1.493.657.657 0 0 0 .685.5.664.664 0 0 0 .7-.5 5.291 5.291 0 0 0 .158-1.493 5.291 5.291 0 0 0-.162-1.491.664.664 0 0 0-.7-.5.657.657 0 0 0-.685.5 5.29 5.29 0 0 0-.154 1.491z" class="cls-2" data-name="Combined-Shape" transform="translate(-1.729 -.229)"/>
            </g>
        </g>
    </g>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" width="65" height="22" viewBox="0 0 44.521 15.772">
    <defs>
        <style>
            .cls-1,.cls-2{fill:#face32}.cls-2{stroke:#fff;fill-rule:evenodd}.cls-3{fill:#fff}.cls-4{fill:#4c4a4a}
        </style>
    </defs>
    <g id="trusted" transform="translate(-194.479 -566.484)">
        <rect id="Rectangle_7273" width="31.5" height="10" class="cls-1" data-name="Rectangle 7273" rx="1.5" transform="translate(207.5 569.5)"/>
        <path id="Path_3849" d="M13.258 1.281v2.057h-2.253V.607L8.592 0 6.179.607v2.731H3.926V1.281l-2.334.71.608 10.751 6.391 1.991 6.391-1.991.609-10.751z" class="cls-2" data-name="Path 3849" transform="translate(193.408 567)"/>
        <path id="Path_3853" d="M3.853-7.139H2.339v-5.879H.4v-1.26h5.391v1.26H3.853z" class="cls-3" data-name="Path 3853" transform="translate(198.9 586.139)"/>
        <path id="Path_4184" d="M.176-15.4h4.551v1.042H3.062v4.4H1.833v-4.4H.176zm6.192 2.015a1.522 1.522 0 0 1 .568-.591 1.661 1.661 0 0 1 .817-.21v1.128a1.64 1.64 0 0 0-.187-.008 1.236 1.236 0 0 0-.875.3 1.036 1.036 0 0 0-.323.8v2.015H5.17v-4.189h1.2zm6.013-.755v4.185h-1.19v-.739a1.473 1.473 0 0 1-1.4.786 1.443 1.443 0 0 1-1.1-.432 1.634 1.634 0 0 1-.408-1.171v-2.629h1.2v2.287a.878.878 0 0 0 .21.622.748.748 0 0 0 .576.226.86.86 0 0 0 .677-.3 1.143 1.143 0 0 0 .249-.762v-2.073zm3.8 1.229a3.489 3.489 0 0 0-.677-.3 2.025 2.025 0 0 0-.6-.105.687.687 0 0 0-.35.078.254.254 0 0 0-.134.238.289.289 0 0 0 .179.264 3.427 3.427 0 0 0 .583.21 6.155 6.155 0 0 1 .731.261 1.364 1.364 0 0 1 .5.381 1.007 1.007 0 0 1 .21.665 1.127 1.127 0 0 1-.478.969 2.039 2.039 0 0 1-1.225.346 3.225 3.225 0 0 1-.988-.152 2.546 2.546 0 0 1-.825-.432l.389-.809a2.454 2.454 0 0 0 .712.385 2.272 2.272 0 0 0 .743.136.779.779 0 0 0 .385-.082.265.265 0 0 0 .144-.245.31.31 0 0 0-.183-.28 3.056 3.056 0 0 0-.587-.218 5.942 5.942 0 0 1-.71-.252 1.269 1.269 0 0 1-.486-.377 1.02 1.02 0 0 1-.2-.657 1.126 1.126 0 0 1 .467-.965 1.947 1.947 0 0 1 1.182-.342 3.142 3.142 0 0 1 .856.121 2.857 2.857 0 0 1 .778.346zm3.835 2.723a1.958 1.958 0 0 1-.517.214 2.261 2.261 0 0 1-.572.074 1.351 1.351 0 0 1-.949-.335 1.231 1.231 0 0 1-.366-.957v-1.937h-.583v-.825h.583V-15.1H18.8v1.151h1.136v.832H18.8v1.727q0 .482.381.482a1.347 1.347 0 0 0 .583-.156z" class="cls-4" data-name="Path 4184" transform="translate(213.324 586.9)"/>
    </g>
</svg>
</th>
<th>
<h1 align="center"><font color ="white">Nil Ratan Sircar Medical College & Hospital (NRSMC&H)</font></h1>
<h3 align="center"><font color ="white">No 138, A J C Bose Road, Sealdah, Kolkata - 700014, Near Sealdah Railway Station</font></h3>
<h4 align="center"><font color ="white"><b><i class="fa fa-phone" style="font-size:18px"></i>  +(91)-033-22653214,033 2286 0033..</b></h4></font>
</th>
<th>
<div class="img">
<a href="https://www.google.com/maps/place/Nil+Ratan+Sarkar+Medical+College+and+Hospital/@22.5643724,88.3693414,18z/data=!4m5!3m4!1s0x3a0276563bb4b7f7:0x80593e9569cd828e!8m2!3d22.5650822!4d88.3692411?hl=en%3Cbutton"<button class="loc_btn"><image src="location_icon.png" width="120px" height="120px" /></button></a>
<p align="center"><font color="white">map..</font></p>
</div>
</th>
</table>
<div class="space">
</div>
<table border="0" width="100%" bgcolor="#fff">
<tr>
<center>
<div class="w3-content w3-display-container">               
  
  <img class="mySlides" src="bg_img_nrs/bg_img6.png" width="100%" height="60%" >
  <img class="mySlides" src="bg_img_nrs/bg_img7.png" width="100%" height="60%" >
  <img class="mySlides" src="bg_img_nrs/bg_img8.png" width="100%" height="60%" >
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br>
</tr>
</table>

<style>
 .img1 {
    background-image: url(bg.jpg);
   
    background-size: cover;
 
}

</style>
<div class = "img1">
<center>
<i class="fa fa-phone" style="font-size:18px"  align= "left"></i> 033 22653214,033 22653215<br>033 22653216,033 22653217<br>033 22860033

<br><br>
<img src="add.png" style="width=20%" "height :5%" align= "center">No 138, A J C Bose Road, Sealdah, Kolkata - 700014, Near Sealdah Railway Station
<br><br></center>
<center><img src="loc.png" style="width=20%" "height :5%" align= "center" >

<a href="http://www.nrsmc.edu.in" onclick="_ct('weblink', 'dtpg','','033PXX33.XX33.140308191416.Z2C4');" rel="nofollow" target="_BLANK" title="http://www.nrsmc.edu.in">
					www.nrsmc.edu.in
						</a>
</center>
<br>
<center><i class="material-icons">email</i></center>
<center><a href="mailto:support@nrsmc.edu.in" style="color: rgb(17, 85, 204);" target="_blank">support@nrsmc.edu.in</a><center>

<br>

<center>
<h3 align="left">Hours of Operation <h3>
<div id="open">
<br>
<table border=0 align="center">
<?php
								$result=mysqli_query($conn,"SELECT * FROM `nrs_open`");
								while($row=mysqli_fetch_assoc($result))
								{
									
									echo"<tr class=odd>
                                	
									<td>$row[date]</td>
									<td>$row[open]</td>
                                	
                                	
                            		</tr>";
								}
							?>                 
                        </table>



</div>
</center>



<center>

<br>
<h3 align="left">Available Beds :</h3>
<div id="main">
<center>
					
                    	<table border="0" cellpadding="2" cellspacing="10" align="center">
							<tr>
                                <br>
								<td><b>Ward</b></td>
								<td><b>Available Beds</b></td>
                                
								
                            </tr> 
                            <?php
								$result=mysqli_query($conn,"SELECT * FROM `nrs_beds`");
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
                        <br /><br />
                </div>
<br>
<div class="book">
<center><button id="button" ONCLICK="Hide()" class="button">Book Bed</button></center>
</div>
</center>
<div class="popup_model">

<div class="popup_content">

<div class="close"><a href="nrs.php">+</a>
</div>

<h2 class="reg_form1">Registration Form</h2>
		<form action="" method="POST" class="form-submit">
			<div class="input-form">
				<br><label><b>Patient Name : </b><input type="text" class="reg_input2" placeholder="Enter Name" name="name" value="" required>
			</div>
			<div class="input-form">
				<br><label><b>Date of Birth : </b></label><input class="reg_input1" type="date" name="date"  value=" " required >
            </div>
			<div class="input-form">
				<br><label><b>Sex : </b></label>
				<input list="sex" name="sex" class="reg_input1" placeholder="sex" required>
							  <datalist id="sex">
								<option value="Male">
								<option value="Female">
								<option value="Others">
							  </datalist>
   
			</div>
			<div class="input-form">
			<br><label><b>Address : </b></label><input type="text-box" class="reg_input1" placeholder="Enter Address" name="address" value="" required>
			</div>
			<div class="input-form">
			<br><label><b>Pincode : </b></label><input type="text-box" class="reg_input1" placeholder="Enter Pincode" name="pincode" value="" required>
			</div>
			<div class="input-form">
			<br><label><b>Blood Group: </b></label><input list="blood" name="bg" class="reg_input1" placeholder="Blood Group" value="" required>
									  <datalist id="blood">
										<option value="A+">
										<option value="B+">
										<option value="O+">
										<option value="AB+">
										<option value="A-">
										<option value="B-">
										<option value="O-">
										<option value="AB-">
										</datalist>
			</div>
			<div class="input-form">
				<br><label><b>Aadhaar No : </b></label><input type="text" class="reg_input1" placeholder="xxxx-xxxx-xxxx" name="aadhaar_number" value="" required>
            </div>
			<div class="input-form">
				<br><label><b>Phone Number : </b></label><input type="text" class="reg_input1" placeholder="Enter Phone Number" name="phone" value="" required>
            </div>
			<div class="input-form">
				<br><center><button name="submit" class="button">Submit</button></center>
			</div>
			
		</form>
</div>
</div>
</center>
<script>
document.getElementById('button').addEventListener('click',
function(){
document.querySelector('.popup_model').style.display ='flex';
})
</script>
</center>

<DIV ID="SectionName" STYLE="display:block">
<table border="1" width="100%" bgcolor="#fff">
<div class="container">
    	<h1 class="mt-5 mb-5"></h1>
    	<div class="card">
    		<div class="card-header"><b>Reviews & Ratings</b></div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>



<script>
var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"ratings/submit_rating_nrs.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });
	load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"ratings/submit_rating_nrs.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

</script>


</table>
</div>
<script>
//Hides the rating when click on book bed
function Hide() {
    var x = document.getElementById('SectionName');
    if (x.style.display == 'block') {
        x.style.display = 'none';
    }
}
</script>
</div>
<table border="1" width="100%" bgcolor="#fff">
<tr>
<div class="about">
<h1 style="padding: 0;text-align: left;">
                    <img src="https://www.wbhealth.gov.in/images/doc_sign.gif">About Us                    </h1>

</div>
<div class="about1">
<p>The Nil Ratan Sircar Medical College and Hospital (NRSMC&H), also known as NRS Medical College, Kolkata, is a public medical school and hospital in Kolkata, India. It is located in Sealdah, in the heart of Kolkata.
</p>
<p>The institute was established on 1st December, 1873 as Sealdah Medical School.
</p>
<p>In 1864, the British government was compelled to open a hospital due to the social and political pressures that arose from epidemics, class struggle, and the Sepoy Mutiny. Considering this urgent need, the decision was made to convert the Sealdah Market Building at Central Hall into what was to be known as the Sealdah Municipal Hospital.
</p>
<p>On 1 December of 1873, the Sealdah Medical School was established and underwent several name changes. In 1884, it was renamed the Campbell Medical School and in 1894 became the Campbell Medical College. After gaining independence from British rule in 1950, the college was renamed for the last time to Nil Ratan Sircar Medical College in honor of freedom fighter and one of the college's famous alumnus, physician Sir Nilratan Sircar. The institution is recognized under the Medical Council of India, New Delhi and is run by the Government of West Bengal. It is affiliated with West Bengal University of Health Sciences and offers both undergraduate and postgraduate studies in various departments.
</p>
</div>
</tr>
</body>
</html>