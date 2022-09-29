<?php
include 'connectcrud.php';
// $Number = $_GET['updateid'];

$sql = "select * from room";
$result = mysqli_query($con,$sql);
// $row= mysqli_fetch_assoc($result);
// $Number=$row['number'];
// $patientname=$row['patientname'];
// $treatment=$row['treatment'];
// $doctorname=$row['doctorname'];

if(isset($_POST['submit'])){
    $Number=$_POST['number'];
    $patientname=$_POST['patientname'];
    $treatment=$_POST['treatment'];
    $doctorname=$_POST['doctorname'];

    // $sql="update crud set Number = $Number, patientname= '$TypeofSeed', VarietyofSeed= '$VarietyofSeed', SeedCode= '$SeedCode'
    //  where Number = $Number";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo "Updated successfully";
       header('location:index.html');
    }else{
        die(mysqli_error($con));
    }
}


?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admissions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>

<div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">NRB</h2>
        </div>
        <div class="menu">
            <ul>
                <div class="dropdown"> 
             <li><a href="Patient.html">Portal</a></li>
                        <div class="dropdown-content">
                          <a href="login.php">Doctor</a>
                          <a href="Patient.html">Patient</a>
                        </div>
            </div>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>
    </div> 
    <div class="crud">
        <form method="post" name="form1" id="form1">
            <div class="">
                <label>Room Number</label>
                <br><br>
                <input type="text" class="form-control"
                placeholder="Enter room number" name="number" autocomplete="off" >
                
            </div>
            <br>
            <div class="form-group">
                <label>Patient name</label>
                <br><br>
                <input type="text" class="form-control"
                placeholder="Enter the patient's name" name="patientname" autocomplete="off">
                
            </div>
            <br>
            <div class="form-group">
                <label>Treatment</label>
                <br><br>
                <input type="text" class="form-control"
                placeholder="Treatment for" name="treatment" autocomplete="off">
                
            </div>
            <div class="form-group">
                <label>Doctorname</label>
                <br><br>
                <input type="text" class="form-control"
                placeholder="Treatment" name="doctorname" autocomplete="off">
                
            </div>

            <br><br>
              <button type="submit" name="submit"> Update</button> 
              <input type="reset" value="Clear"> 
              
            </form>

    </div>

</body>
</html>