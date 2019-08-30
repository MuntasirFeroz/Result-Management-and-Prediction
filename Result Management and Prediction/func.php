<?php

$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['login']))
{
	$user_name=$_POST['username'];
	$password=$_POST['password'];

	$query="select * from admin_users where admin_name='$user_name' and password='$password' ";

	$result=mysqli_query($con,$query);
	$rows=mysqli_num_rows($result);

	if($rows==1)
	{
		header("Location: admin.php");
	}
	else{

		echo "<script> alert('Incorrect User Name and Password.')</script>";
		echo "<script> window.open('adminLogin.php','_self')</script>";
		//header("Location: adminLogin.php");

		//header("Location: home.html"); 
	}

} //


/* student_search.php code */

function get_student_details()
{
	global $con;

	/*if(isset($_POST['student_search']))
	{*/
		//$student_id=$_POST['search_id'];

		$query="select * from student_info";
		//$query="select * from student_info where student_id ='$student_search'";

		$result=mysqli_query($con,$query);

		
		

			echo "<thead>
			<tr class='bg-primary'>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Semester</th>
					<th>Semester No</th>
			</tr> 
			</thead>";




	while($row=mysqli_fetch_array($result))
		{
			$student_id=$row['student_id'];
			$first_name=$row['first_name'];
			$last_name=$row['last_name'];
			$semester=$row['semester'];
			$semester_no=$row['semester_num'];

			echo"<tr>
						<td>$student_id</td>
						<td>$first_name</td>
						<td>$last_name</td>
						<td>$semester</td>
						<td>$semester_no</td>
					</tr>
				";


		}
		

		
		

		
		
/*	} // */

}

/*-----------------------------------------*/







?>