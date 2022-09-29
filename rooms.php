<?php
include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboardstyles.css">
    <title>Document</title>
</head>
<body>
<div class="Heading">
            <h1>Patient records</h1>
</div>
<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">HOSPITAL ADMINISTRATOR</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="rooms.php">
          <span class="link_name">Rooms</span>
				</a>
			</li>
			<li>
				<a href="doctors.html">
          <span class="link_name">Doctors</span>
				</a>
			</li>
			<li>
				<a href="patients.php">
          <span class="link_name">Patients</span>
				</a>
			</li>
			<li>
				<a href="#">
          <span class="link_name">Appointments</span>
				</a>
			</li>
			<li>
				<a href="fees.html">
          <span class="link_name">Receipts</span>
				</a>
			</li>
			<li>
				<a href="crud.php">
          <span class="link_name">Admissions</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="index.html" >
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>



	<!-- CONTENT -->
	<section id="content">
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Rooms</h1>
					<ul class="breadcrumb">
						<li>
							<a  class="active" href="dashboard.php">Dashboard</a>
						</li>
						<li>
							<a class="active" href="index.html">Home</a>
						</li>
					</ul>
				</div>
			</div>

  <tbody>
      <?php
      $sql="Select * from room";
      $result=mysqli_query($con,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
            $Number=$row['number'];
            $Patientname=$row['patientname'];
            $treatment=$row['treatment'];
            $Doctorname=$row['doctorname'];
			
            echo '<tr>
            <th scope="row">'.$room_id.'</th>
            <td>'.$Number.'</td>
            <td>'.$Patientname.'</td>
            <td>'.$Treatment.'</td>
            <td>'.$Doctorname.'</td>
            <td><button><a href="Update rooms.php updateid='.$Number.'">Update</a></button></td>
          </tr>';
          }
      }
      ?>
  </tbody>
</table>
</body>
</html>
