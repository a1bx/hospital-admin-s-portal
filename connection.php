<?php
 $con=new mysqli('localhost','root','','projectdb');
 
 if(!$con){
	 die(mysqli_error($con));
 }
?>