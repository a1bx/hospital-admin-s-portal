<?php 
include('connection.php');
// session_start();

 

	if(isset($_POST['submit']))
	{
		//something was posted
		$username=$_POST['username'];
		$name=$_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $password2=$_POST['password2'];
        $usertype=$_POST['usertype'];
		
		
		 $sql="INSERT INTO `signup` (username,name,email,password, password2,usertype)
		 values('$username','$name','$email','$password','$password2','$usertype')";
		 $result=mysqli_query($con,$sql);
		 if($result){
			 header('location:login.php');
		 }else{
			die(mysqli_error($con));
		 } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOSPITAL PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">NRB</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="contacts.html">CONTACT</a></li>
                </ul>
            </div>
        </div> 
<body>
	<head>
		<title>Hospital page</title>
		<link rel="style">

	</head>
<div class="register">
        <form  method="post">
        <label class="name">Userame:</label>
        <input class="username" type="text" name="username" placeholder="Enter username" required autocomplete="off">
         
        <label class="name">Name:</label>
        <input class="fullname" type="text" name="name" placeholder="Enter your name" required>
         
        <label class="name">Email:</label>
        <input class="email" type="text" name="email" autocomplete="off" placeholder="Enter your email" required >
         
        <label class="name">Password:</label>
        <input class="password" type="password" name="password" autocomplete="off" placeholder="Set password" required>
          
        <label class="name"> Confirm password:</label>
        <input class="password" type="password" name="password2" placeholder="Confirm password" required>
        <select name="usertype" class="usertype">
            <option value="Doctor">Doctor</option>
            <option value="Patient">Patient</option>
        </select>
		<br>
        <div class="regbtn">
            <button type="submit" value="Submit"name="submit">Submit</button>
            <button type="reset" value="Clear" >Clear</button>
        </div><br><br>
        <p class="click"> Already registered?
            <a href="login.php">log in here</a>
        </p>
    </form>
</div>
</body>
<br><br>