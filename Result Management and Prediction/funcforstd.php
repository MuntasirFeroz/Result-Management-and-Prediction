<?php
session_start();
$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['login']))
{
	$s_id=$_POST['studentid'];
	$password=$_POST['password'];
	$query="select * from student_users where student_id='$s_id' and password='$password' ";


	$result=mysqli_query($con,$query);
	$rows=mysqli_num_rows($result);

	if($rows==1)
	{		
			$_SESSION["student_id"] = $s_id;
		$row=mysqli_fetch_array($result);
		$_SESSION["student_name"]=$row['first_name'].' '.$row['last_name'];

			header("Location: l_student_home_page.php");
	}
	else{

		echo "<script> alert('Incorrect User Name and Password.')</script>";
	echo "<script> window.open('studentLogin.php','_self')</script>";
			}

}