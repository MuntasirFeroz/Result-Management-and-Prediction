<?php
session_start();
$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['login']))
{
	$user_id=$_POST['username'];
	$password=$_POST['password'];

	$query="select * from faculty_users where faculty_id='$user_id' and password='$password' ";

	$result=mysqli_query($con,$query);
	$rows=mysqli_num_rows($result);

	if($rows==1)
	{
		$_SESSION["faculty_id"] = $user_id;
		$row=mysqli_fetch_array($result);
		$_SESSION["faculty_name"]=$row['first_name'].' '.$row['last_name'];

		header("Location: ponni_faculty.php");
		
	}
	else{

		echo "<script> alert('Incorrect User Name and Password.')</script>";
		echo "<script> window.open('ponni_facultylogin.php','_self')</script>";
		//header("Location: facultylogin.php");

		//header("Location: home.html"); 
	}

} //


/* student_search.php code */

function get_faculty_courses($faculty_id)
{
	global $con;

	/*if(isset($_POST['student_search']))
	{*/
		//$student_id=$_POST['search_id'];

		$query="select * from courses where faculty_id='$faculty_id' ";
		//$query="select * from student_info where student_id ='$student_search'";

		$result=mysqli_query($con,$query);

		
		

			echo "<div class='table-responsive'>
			<table class='table table-hover'>
			<thead>
			<tr class='bg-primary'>
					<th>Courses</th>
					<th>Course Code</th>
					<th>Section</th>
					<th>Action</th>
			</tr> 
			</thead>
			<tbody>";




	while($row=mysqli_fetch_array($result))
		{
			$course=$row['course_details'];
			$course_code=$row['course_code'];
			$section=$row['section'];
			echo"<tr>
						<td>$course</td>
						<td>$course_code</td>
						<td>$section</td>
						<td><button class='btn btn-default'><a href='ponni_faculty_course_student_view.php?request_course_code=$course_code' > View</a></button> </td>
				</tr>
				";
		}

	echo"</tbody>
		</table>
		</div> ";
		
}

?>
