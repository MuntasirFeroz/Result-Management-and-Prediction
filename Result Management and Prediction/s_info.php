<?php

$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['submit']))
{
	$student_id=$_POST['s_id'];
	$first_name=$_POST['f_name'];
	$last_name=$_POST['l_name'];
	$semester=$_POST['semester'];
	$semester_no=$_POST['semester_num'];

	$query="insert into student_info (student_id, first_name, last_name, semester,semester_num)
			values ('$student_id', '$first_name', '$last_name', '$semester', $semester_no) ";


	$result=mysqli_query($con,$query);
	

	echo "<script> alert('Student Registered')</script>";
	echo "<script> window.open('Student_Info_Input2.php','_self')</script>";

} //


?>