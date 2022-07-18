<?php 
include "config.php";
if(isset($_POST["submit"]))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $aadhaar_number=$_POST['aadhaar_number'];
    $bg=$_POST['bg'];
    $sex=$_POST['sex'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    
    
    
    $sql = "SELECT * FROM register_vaccine WHERE aadhaar_number='$aadhaar_number'";
    $result=mysqli_query($conn, $sql);
    if ($result->num_rows > 0) 
        {
            echo"<script>alert('Aadhaar No Already Exists.')</script>";
        }
    else
    {
    $sql="insert into register_vaccine(fname,lname,aadhaar_number,bg,sex,email,phone,address,pincode)Values('$fname','$lname','$aadhaar_number','$bg','$sex','$email','$phone','$address','$pincode')";
    
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CONTACT</title>
    <link rel="icon" href="Logo/logo.png" height="100%" width="100%" />
    <link rel="stylesheet" href="css/regis.css"> 
</head>
<body>
<div class="wrapper">
    <div class="title">
        Registration Form
    </div>
    <form method="POST">
    <div class="form">
        <div class="input_field">
            <label>First Name</label>
            <input type="text" name="fname" class="input" required>
        </div>
        <div class="input_field">
            <label>last Name</label>
            <input type="text" name="lname" class="input" required>
        </div>
        <div class="input_field">
            <label>Aadhar Card Number</label>
            <input type="text" name="aadhaar_number" class="input" required>
        </div>
        <div class="input_field">
            <label>Blood Group</label>
            <div class="custom_select">
                <select name="bg" required>
                    <option value="">Select</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="ab">AB</option>
                    <option value="o">O</option>
                </select>
            </div>
        </div>
        <div class="input_field">
            <label>Gender</label>
            <div class="custom_select">
                <select name="sex" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="input_field">
            <label>Email Address</label>
            <input type="text" name="email" class="input" required>
        </div>
        <div class="input_field">
            <label>Phone Number</label>
            <input type="text" name="phone" class="input" required>
        </div>
        <div class="input_field">
            <label>Address</label>
            <textarea class="textarea" name="address" required></textarea>
        </div>
        <div class="input_field">
            <label>Postal Code</label>
            <input type="text" name="pincode" class="input" required>
        </div>
        <div class="input_field terms">
            <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <p>Agreed to terms and condition</p>
        </div>
        <div class="input_field">
        <button name="submit" class="btn">Register</button>
        </div>  
    </form>    
    </div>
</div>
</body>
</html>
