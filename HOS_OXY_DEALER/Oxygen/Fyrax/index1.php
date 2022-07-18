<?php 

include 'config.php';
session_start();

if ($_SESSION['username']=="")
{
	header("Location: \Covi+\HOS_OXY_DEALER\login_oxy.php ");
}
?>
<html>
<head>
	
<title>Fyrax INDIA</title>
<link rel="icon" href="logo.png" height="100%" width="100%" />
<style>
 .img {
    background-image: url(oxyg.png);
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
<th><img src="oxy3.png" align="left" width="120px" height="120px" class="zoom">
<th>Fyrax INDIA </font></h1>
<h3 align="center"><font color ="white"> Address: 208/1A, Bidhan Sarani, Beadon Street, Kolkata - 700006, Opposite Vidyasar College (Map),</font></h3>
<h4 align="center"><font color ="white"><b><i class="fa fa-phone" style="font-size:18px"></i> ,+(91)-079-9385164..</b></h4></font>
</th>
<th>
<a href="logout.php" ><button name="submit" class="button">Logout</button></a>
</th>
</table>
<div class="img">
<h2>View All Buyers</h2>

<div id="main">

					
					<center>
                    	<table border="0" cellpadding="2" cellspacing="10" >
							<tr><br>
                                 <td><b>ID</b></td>
                                <td><b>Name</b></td>
                                <td><b>email</b></td>
                                <td><b>phone</b></td>
								<td><b>Address</b></td>
								<td><b>Pmode</b></td>
                                <td><b>products</b></td>
                                <td><b>amount_paid</b></td>
								
                                
								
                            </tr> 
                            <?php
								$result=mysqli_query($conn,"SELECT * FROM `orders_fyrax`");
								while($row=mysqli_fetch_assoc($result))
								{
									
									echo"<tr class=odd>
                                	<td>$row[id]</td>
                                	<td>$row[name]</td>
                                	<td>$row[email]</td>
                                	<td>$row[phone]</td>
                                	<td>$row[address]</td>
									<td>$row[pmode]</td>
									<td>$row[products]</td>
									<td>$row[amount_paid]</td>
								
                            		</tr>";
								}
							?>                       
                        </table>
				      
						</center>
                        <br/><br/>
						<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


						
						
					

</div>


</body>


</div>