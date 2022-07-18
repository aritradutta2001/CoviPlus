<?php 

include 'config.php';

error_reporting(0);

session_start();
?>
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
	
	$sql = "SELECT * FROM jims WHERE aadhaar_number='$aadhaar_number'";
	$result=mysqli_query($conn, $sql);
	if ($result->num_rows > 0) 
		{
			echo"<script>alert('Aadhaar No Already Exists.')</script>";
		}
	else
	{
	$sql="insert into jims(name,username,main_date,date,sex,address,pincode,bg,aadhaar_number,phone)Values('$name','$username',curdate(),'$date','$sex','$address','$pincode','$bg','$aadhaar_number','$phone')";
	
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



<html>
<style>
header{
padding:0px;
text-align: center;
background: #2874F0;
color: white;
font-size:30px;
}
.logo{
height:200;
width:100%;
margin-top:10px;

}
.img{
  position: relative;
}

.inner-image {
  position: absolute;
  bottom: 2px;
  right:1px;
  height:100;
  width:100;
  border:5px solid black;
  background:rgba(0,0,0,0.6);
}
.loc_btn{
cursor:pointer;
}

.container1{
text-align:block;
display: flex; 
  width: 100%;
  justify-content: center;
}
.details{
text-align:left-side;
margin:50px;
}
.about
{
height:8%;
margin-top:20px;
background:rgba(0,0,0,0.6);
color:red;
}
.about1
{

background:rgba(0,0,0,0.6);

}
.book{
 text-align:center;
  width: 100%;
  justify-content: center;
  
}

.reg_form1{
margin-top:20px;
color:red;
}



.popup_model_1{
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
.popup_content1{
width:500px;
height:650px;
background:white;
border-radius:5px;
text-align:center;
position:fixed;
z-index: 9;
overflow-y: scroll; /* has to be scroll, not auto */
-webkit-overflow-scrolling: touch;
display:block;
justify-content:center;
align-items:center;
}

.close1{
position:absolute;
top:0px;
right:10px;
font-size:40px;
transform:rotate(45deg);
cursor:pointer;
}
.close1_link:link{
text-decoration:none;
}
.close1_link:hover{
color:red;
}

.reg_input1{
width:90%;
height:5%;
margin:0px auto;
border-radius:10px;
outline-style:none;
}

.button1{
text-align:center;
color:black;
width:20%;
padding:10px 10px;
cursor:pointer;
opacity:0.9;
border-radius:25px;
font-size:20px;
background-color:#2874F0;
margin:5px;
}
.button2{
text-align:center;
color:black;
width:30%;
height:5%;
padding:5px 5px;
cursor:pointer;
opacity:0.9;
border-radius:25px;
font-size:15px;
background-color:#2874F0;
margin:10px;
}
.button1:hover {background-color: #3e8e41}
.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  }
  
  .button2:hover {background-color: #3e8e41}
.button2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  }
  
  .progress-label-left
{
float:left;
margin-right:0.5em;
line-height:1em;
}
.progress-label-right
{
float:left;
margin-right:0.3em;
line-height:1em;
}
.star-light
{
color:#e9ecef;
}

</style>
<head>

 <title>Jagannath Gupta Institute of Medical Science & Hospital </title>
 <link rel="icon" href="logo.png" height="100%" width="100%" />
</head>

<header class="header">
Jagannath Gupta Institute of Medical Science & Hospital
</header>


<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> </script>
</head>

<body>
<div class="img">
<a href="https://www.google.com/maps/place/Jagannath+Gupta+Institute+of+Medical+Sciences+%26+Hospital/@22.4533875,88.1716742,15z/data=!4m2!3m1!1s0x0:0x29e8e16e7311fbe9?sa=X&ved=2ahUKEwjt2vPV7dfxAhU_7XMBHU8DDBUQ_BIwEnoECC0QBQ"><button class="loc_btn"><image src="image\location_icon.png" alt="" class="inner-image" /></button>
</a>
<img class="logo"src="image\sub_jims.jpg" alt="" >
</div>

<div class="container1">
<p class="details"><b>Address :</b>Address:K.P.Mondal Road, Buita, Budge Budge<br>
<b>City :</b> Kolkata - 700 137<br>
<b>Phone no :</b>  (+91) (033) 2482 3500 / 9903396230<br>
<b>Email :</b>  contact@jimsh.org<br></p>

<p class="details"><b>No. of Hospital Beds :</b> 1000<br>
<b>No. of ICU Beds :</b> 100<br>
<b>No. of Operating Rooms :</b> 17<br>
<b>Payment Mode :</b>card, cash, wire<br>
</p>
</div>

<center><h3 align="top">Bed Booking</h3>
<div id="main">
<center>
					
                    	<table border="0" cellpadding="2" cellspacing="1">
							<tr>
                                
								<td><b>Available Beds</b></td>
                                <td><b>Ward</b></td>
								
                            </tr> 
                            <?php
								$result=mysqli_query($conn,"SELECT * FROM `jims_beds`");
								while($row=mysqli_fetch_assoc($result))
								{
									
									echo"<tr class=odd>
                                	
									<td>$row[beds]</td>
                                	<td>$row[ward]</td>
                                	
                            		</tr>";
								}
							?>                       
                        </table>
						</center>
                        <br /><br />
                </div>




<div class="book">
<button  class="button1" ONCLICK="Hide()" id="button1">Book Bed</button>
</div>
<!-- pop up model -->
<div id="myModal" class="popup_model_1">

<div  class="popup_content1">

<div class="close1"><a href="sub_jims.php" class="close1_link">+</a>
</div>
<h2 class="reg_form1">Registration Form</h2>
		<form action="" method="POST" class="">
		
				<br><center><label><b>Patient Name : </b><input type="text" class="reg_input1" placeholder="Enter Name" name="name" value="" required>
			
				<br><label><b>Date of Birth : </b></label><input type="date" class="reg_input1" name="date"  value=" " required >
            
				<br><label><b>Sex : </b></label>
				<input  class="reg_input1"  list="sex" placeholder="sex" name="sex" required>
							  <datalist id="sex">
								<option value="Male">
								<option value="Female">
								<option value="Others">
							  </datalist>
   
			
			<br><label><b>Address : </b></label><input type="text-box"  class="reg_input1" placeholder="Enter Address" name="address" value="" required>
			
			<br><label><b>Pincode : </b></label><input type="text-box"  class="reg_input1" placeholder="Enter Pincode" name="pincode" value="" required>
			
			<br><label><b>Blood Group: </b></label><input list="blood"  class="reg_input1" placeholder="Blood Group" name="bg" value="" required>
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
			
				<br><label><b>Aadhaar No : </b></label><input type="text"  class="reg_input1" placeholder="xxxx-xxxx-xxxx" name="aadhaar_number" value="" required>
            
				<br><label><b>Phone Number : </b></label><input type="text"  class="reg_input1" placeholder="Enter Phone Number" name="phone" value="" required>
            
				<button name="submit" class="button2" >Submit</button>
			
			
		</form>
</div>
</div>
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
                url:"jims_rating.php",
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
            url:"jims_rating.php",
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


<div class="about">
<h2>About:</h2></div>
<div class="about1">
<p>
Established in June 2016, Jagannath Gupta Institute of Medical Sciences and Hospital (JIMSH) is committed to fostering patient care, research and education. With the motto of “Advancing Human Health”, JIMSH aspires to deliver healthcare facilities and medical education that would be within the reach of all. It is a place where students will educate themselves in the medical sciences using the latest clinical information and simulation technology and where they will develop the leadership, clinical and interpersonal skills essential to delivering the next generation of patient-focused health care with confidence and compassion.

JIMSH has been issued Letter of Permission by the Medical Council of India for the starting of a medical college with 150 seats for MBBS, 100 seats for GNM & 60 seats for  BSC nursing under West Bengal Nursing Council & Indian Nursing Council, 80 seats for Paramedical under State Medical Faculty of West Benga for the academic year 2020-2021

. JIMSH also boasts of a fully functional hospital with state of the art facilities and highly qualified and certified doctors and paramedical support staff. The hospital is equipped with:
<br>
350 beds and 10 emergency beds<br>
5 Major and 3 Minor Operation Theatres<br>
2 labour rooms<br>
Fully functional out-patient as well as in-patient departments including General Medicine, Obstetrics and Gynaecology, General Surgery, Orthopaedics, ENT, Ophthalmology, Dermatology, Psychiatry, Paediatrics, Pulmonary Medicine, Anaesthesia, Dental, Speech & Audiometry and Physiotherapy
Highly advanced intensive care units (ICU, ITU, NICU/PICU, and SICU) which are managed by exceedingly capable doctors who are available round the clock
World-class diagnostic laboratory facilities which include Biochemistry, Haematology, Pathology, Serology and Microbiology
Radiology Department is well equipped with CT Scan, X-ray ( Fixed & Mobile), USG, Dexa Scan, Cath Lab & MRI. Superspeciality Departments such as Cardiology, Neurology, Nephrology & Gastroenterology is also available</p>


</div>
<script>
// When the user clicks the button, open the modal
document.getElementById('button1').addEventListener('click',
function(){
document.querySelector('.popup_model_1').style.display ='flex';
})
</script>

 
<script>
//Hides the rating when click on book bed
function Hide() {
    var x = document.getElementById('SectionName');
    if (x.style.display == 'block') {
        x.style.display = 'none';
    }
}
</script>


</body>
</html>