<?php

$con=mysqli_connect("localhost","root","","s_result_db");

function getTotalStudents(){
	global $con;
	$query="select * from student_info";
	$result=mysqli_query($con,$query);
	$fieldcount=mysqli_num_rows($result);
	echo"<h3 style='color:white'>$fieldcount</h3>";

}

function getTotalfaculty(){
	global $con;	
	$query="select * from faculty_info";
	$result=mysqli_query($con,$query);
	$fieldcount=mysqli_num_rows($result);
	echo"<h3 style='color:white'>$fieldcount</h3>";


}

function getTotalCourses(){
	global $con;
	$query="select * from courses";
	$result=mysqli_query($con,$query);
	$fieldcount=mysqli_num_rows($result);
	echo"<h3 style='color:white'>$fieldcount</h3>";
}

//mysqli_close($con);

?>