<?php

$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['submit']))
{
	$course_name=$_POST['c_name'];
	$course_id=$_POST['c_id'];
	$sec=$_POST['section'];
	$f_id=$_POST['f_id'];
	$initials=$_POST['init'];


	$query="insert into courses (course_code, course_details,section,faculty_id,initials)
			values ('$course_id', '$course_name','$sec','$f_id','$initials') ";

	$result=mysqli_query($con,$query);
	

	echo "<script> alert('Course Registered')</script>";
	echo "<script> window.open('add_courses.php','_self')</script>";

} //

/* student_search.php code */

function get_course_details()
{
	global $con;

	/*if(isset($_POST['student_search']))
	{*/
		//$student_id=$_POST['search_id'];

		$query="select distinct course_code,course_details from courses";
		
		//$query="select * from student_info where student_id ='$student_search'";

		$result=mysqli_query($con,$query);

		
		#$row=mysqli_num_rows($result);

			echo "<thead>
			<tr class='bg-primary'>
					<th>Course Code</th>
					<th>Course Details</th>
			</tr> 
			</thead>";




	while($row=mysqli_fetch_array($result))
		{
			$course_code=$row['course_code'];
			$course_details=$row['course_details'];
		

			echo"<tr>
						<td>$course_code</td>
						<td>$course_details</td>
					</tr>
				";


		}
		

		
		

		
		
/*	} // */

}

function show_courses_with_sections()
{
global $con;

	/*if(isset($_POST['student_search']))
	{*/
		//$student_id=$_POST['search_id'];

		$query="select distinct * from courses";
		
		//$query="select * from student_info where student_id ='$student_search'";

		$result=mysqli_query($con,$query);

		
		#$row=mysqli_num_rows($result);

			echo "<thead>
			<tr class='bg-primary'>
					<th>Course Code</th>
					<th>Course Details</th>
					<th> Section</th>
					<th>Faculty ID</th>
					<th>Faculty Initials</th>
			</tr> 
			</thead>";



	while($row=mysqli_fetch_array($result))
		{
			$course_code=$row['course_code'];
			$course_details=$row['course_details'];
			$course_sec=$row['section'];
			$course_faculty=$row['faculty_id'];
			$course_initials=$row['initials'];
			echo"<tr>
						<td>$course_code</td>
						<td>$course_details</td>
						<td>$course_sec</td>
						<td>$course_faculty</td>
						<td>$course_initials</td>
					</tr>
				";


		}
		

		
		

		
		
/*	} // */


}


?>