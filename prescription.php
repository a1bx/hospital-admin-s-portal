<?php 

// session_start();
 

	if(isset($_POST['submit']))
	{
		//something was posted
		$medicinename=$_POST['medname'];
		$patientname= $_POST['name'];
        $email=$_POST['email'];
		
		
		 $sql="INSERT INTO `signup` (medname,name,email,)
		 values('$medicinename','$patientname','$email')";
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
        <label class="name">Medicine name:</label>
        <input class="username" type="text" name="medname" placeholder="Enter username" required>
         
        <label class="name">Patient Name:</label>
        <input class="fullname" type="text" name="name" placeholder="Enter your name" required>
         
        <label class="name">Email:</label>
        <input class="email" type="text" name="email" autocomplete="off" placeholder="Enter your email" required >

		<br>
        <div class="regbtn">
            <button type="submit" value="Submit"name="submit">Update</button>
            <button type="reset" value="Clear" >Clear</button>
        </div><br><br>
    </form>
</div>
</body>
<br><br>