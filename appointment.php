<?php 

session_start();
	include("connection.php");
    if(isset($_POST['submit']))
	{
		//something was posted
		$name=$_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $date=$_POST['date'];
		
		
		 $sql="INSERT INTO `appoinment` (name,email,date)
		 values('$name','$email','$date',)";
		 $result=mysqli_query($con,$sql);
		 if($result){
			 header('location:appointment.php');
		 }else{
			die(mysqli_error($con));
		 } 
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>HOSPITAL PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">NRB</h2>
            </div>
            <div class="menu">
                <ul>
                    <div class="dropdown"> 
                 <li><a href="login.html">LOGIN</a></li>
                            <div class="dropdown-content">
                              <a href="admin login.php">Admin</a>
                              <a href="doctor login.php">Doctor</a>
                              <a href="login.php">Patient</a>
                            </div>
                </div>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div> 
        <section class="book" id="book">
 
        
            <div class="row">
        
        
                <form method="POST">
                    <label >Book Now</label>
                    <input type="text" placeholder="your name" name="name" class="box">
                    <input type="number" placeholder="your number" name="phone" class="box">
                    <input type="email" placeholder="your email" name="email" class="box">
                    <input type="date"  name="date" class="box">
                    <input type="submit" value="book now" class="btn">
                </form>
        
            </div>
        
        </section>
     </div>
</html>