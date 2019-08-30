<?php

$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['submit']))
{
	$faculty_id=$_POST['f_id'];
	$first_name=$_POST['f_name'];
	$last_name=$_POST['l_name'];
	$initials=$_POST['init'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];



	$query="insert into faculty_info (faculty_id, first_name, last_name, initials,contact,email)
			values ('$faculty_id', '$first_name', '$last_name', '$initials', '$contact', '$email') ";

	$result=mysqli_query($con,$query);
	

	echo "<script> alert('Faculty Registered')</script>";
	echo "<script> window.open('faculty_info_input2.php','_self')</script>";

} //


?>