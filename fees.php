<?php
include 'connectcrud.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
    <title>display</title>
</head>
<body>
    <div class="container">
        <button><a href="crud.php">Add payment</a></button>
    </div>
    <br><br>

    <table>
<body> 
<div class="container">
  <table class="table">
    <thead>
        <tr>
            <th>Number</th>
            <th>Patient name</th>
            <th>Treatment</th>
            <th>Amount</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
    <?php

$sql="Select * from ";
$result=mysqli_query($con,$sql);
if($result){
    while ($row=mysqli_fetch_assoc($result)){
    $Number=  $row ['Number'];
    $Patientname=  $row ['Patient name'];
    $Treatment=  $row ['Treatment'];
    $Payment =  $row ['Payment'];

    echo '<tr> 
    <th scope="row"></th>
    <td></td>
    <td></td>
    <td></td>

    <td>
    <button><a href="update.php? updateid='.$Number.'"> Update</a></button>
    <button><a href="delete.php? deleteid='.$Number.'">Delete</a></button>
    </td>';

}

 }
 ?>
     <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
        </tbody>
        
    </table>
</body>
</html>