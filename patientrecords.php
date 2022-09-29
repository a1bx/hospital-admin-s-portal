<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patinent records</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="dashboardstyles.css">

	<title>Admin</title>
</head>
<body>

	<section id="sidebar">
		<a href="dashboard.php" class="brand">
			<span class="text">HOSPITAL ADMINISTRATOR</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="rooms.php">
          <span class="link_name">Rooms</span>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="dashboard.php">Dashboard</a>
						</li>
						<li>
							<a class="active" href="index.html">Home</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Patients</h3>
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
						<h3>Appointments</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Monday 21/05/2022</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
	</section>
</body>
</html>

