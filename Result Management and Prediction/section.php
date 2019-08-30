<?php

$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['submit']))
{
	$course_id=$_POST['c_id'];
	$section_num=$_POST['sec_num'];

	$query="insert into course_info (c_id, sec_num)
			values ('$c_id', '$sec_num') ";

	$result=mysqli_query($con,$query);
	

	echo "<script> alert('Section Registered')</script>";
	echo "<script> window.open('add_section.php','_self')</script>";

} //

?>