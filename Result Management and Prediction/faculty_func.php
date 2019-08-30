<?php

$con=mysqli_connect("localhost","root","","s_result_db");
/*for faculty login page


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

*/
/* student_search.php code */

function get_faculty_details()
{
	global $con;

	

		$query="select * from faculty_users";
		

		$result=mysqli_query($con,$query);

		echo "<thead>
			<tr class='bg-primary'>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Initials</th>
					<th>Contact No</th>
					<th>Email</th>
			</tr>
			</thead>";




	while($row=mysqli_fetch_array($result))
		{
			$faculty_id=$row['faculty_id'];
			$first_name=$row['first_name'];
			$last_name=$row['last_name'];
			$initials=$row['initials'];
			$contact=$row['contact'];
			$email=$row['email'];



			echo"<tr>
						<td>$faculty_id</td>
						<td>$first_name</td>
						<td>$last_name</td>
						<td>$initials</td>
						<td>$contact</td>
						<td>$email</td>
					</tr>
				";


		}
		
		

}

/*-----------------------------------------*/







?>