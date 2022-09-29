<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="dashboardstyles.css">

	<title>Patient Portal</title>
</head>
<body>

	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">PATIENT PORTAL</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="admission.php">
          <span class="link_name">Rooms</span>
				</a>
			</li>
			<li>
				<a href="doctorecords.php">
          <span class="link_name">Doctors</span>
				</a>
			</li>
			<li>
				<a href="appointment.php">
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li>
							<a class="active" href="index.html">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<span class="text">
						<h3>1142</h3>
						<p>Patients</p>
					</span>
				</li>
				<li>
					<span class="text">
						<h3>2834</h3>
						<p>Rooms</p>
					</span>
				</li>
				<li>
					<span class="text">
						<h3>867</h3>
						<p>Doctors</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Doctors</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>username</th>
								<th>name</th>
								<th>email</th>
							</tr>
						</thead>
						<tbody>
							<?php
							require "config.php";
							$query ="SELECT * from signup ORDER BY id DESC LIMIT 5";
						$query_run=mysqli_query($con,$query);
						$row=mysqli_num_rows($query_run);
						if(mysqli_num_rows($query_run)>0)
						{
							foreach($query_run as $row)
							{
								?>
								 <tr>
									 <td><?= $row['username'];?></td>
									 <td><?= $row['name'];?></td>
									 <td><?= $row['email'];?></td>
								 </tr>
								<?php
							}
						}
						else
						{

							?>
							<tr>
								<td colspan="3">NO RECORDS FOUND</td>
							</tr>
							<?php
						}
						?>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Events</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Retreat</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</body>
</html>