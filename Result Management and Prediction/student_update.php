<?php
$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['submit']))
{
	$edit_id=$_REQUEST['edit_id'];
	$first_name=$_POST['f_name'];
	$last_name=$_POST['l_name'];
	$semester=$_POST['semester'];
	$semester_no=$_POST['semester_num'];


	$query="update student_info set first_name='$first_name' where student_id='2015-1-60-057' ";
	#$query="update student_info set first_name ='$first_name' , last_name='$last_name', semester='$semester' ,semester_num=$'$semester_no' where student_id='$edit_id' ";

	mysqli_query($con,$query);
	 
	echo "<script> alert('Student UPDATED')</script>";
#	header('location:student_details2.php');
	#echo "<script> window.open('student_update.php','_self')</script>";


} //



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?
 	echo $edit_id ;
echo $first_name;
 	?>
 </body>
 </html>