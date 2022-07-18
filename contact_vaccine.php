<?php 
include "config.php";

if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sub=$_POST['sub'];
    $message=$_POST['message'];
    
    $sql="insert into vaccine_message(name,phone,email,sub,message)Values('$name','$phone','$email','$sub','$message')";

    if (mysqli_query($conn, $sql)) 
    {

        echo"<script>alert('Thank you')</script>";
    }
    else
    {
        echo"<script>alert('Connection Failed.')</script>";
    }
    
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CONTACT </title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" href="Logo/logo.png" height="100%" width="100%" />
</head>
<body>
    <div class="container">
        <h1>Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us.</p>
        <div class="contact-box">
            <div class="contact-left">
          
                <form action="" method="POST">
                    
                    <div class="input-row">
                    <form action="" method="POST">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="your name" required>
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="+91xxxxxxxxxx" required>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" name = "email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" name="sub" placeholder="your subject" required>
                        </div>
                    </div>

                    <label>Message</label>
                    <textarea rows="5" name= "message" placeholder="your message" required></textarea>
                    <button name="submit" >SEND</button>
                </form> 
            </div>  
            <div class="contact-right">
                <h3>Reach us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>coviplus@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+91 1234567890</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>Block L, New Alipore,<br>Kolkata, West Bengal 700053</td>
                    </tr>    
                </table>
            </div>
        </div>
    </div>  
</body>
</html>
