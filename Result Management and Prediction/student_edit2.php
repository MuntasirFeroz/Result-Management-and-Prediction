<?php
$con=mysqli_connect("localhost","root","","s_result_db");



if(isset($_REQUEST['edit_id']))
{
  $edit_id=$_REQUEST['edit_id'];
  
  $query="select * from student_info where student_id='$edit_id' ";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);

  $student_id=$row['student_id'];
  $first_name =$row['first_name'];
  $last_name =$row['last_name'];
  $semester=$row['semester'];
  $semester_num=$row['semester_num'];
}

if(isset($_POST['submit']))
{
  $student_id=$_POST['s_id'];
  $first_name=$_POST['f_name'];
  $last_name=$_POST['l_name'];
  $semester=$_POST['semester'];
  $semester_no=$_POST['semester_num'];

  #$query="update student_info set first_name='$first_name', last_name='$last_name',Semester='$semester', semester_num='$semester_no' where student_id='$edit_id' ";
  
  $query="update student_info set first_name='$first_name', last_name='$last_name',Semester='$semester', semester_num='$semester_no' where student_id='$student_id' ";
  

  mysqli_query($con,$query);
   
  echo "<script> alert('Student UPDATED')</script>";
  header('location:student_details2.php');
  #echo "<script> window.open('student_update.php','_self')</script>";


} //



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- MY OWN CSS and Javasript-->

<link rel="stylesheet" type="text/css" href="StyleSheet/adminStyleSheet.css">

<script src="JavaScript/admin.js"></script>

<style type="text/css">
	
	footer{
    	background-color: rgb(52,58,64);


	     
		/*	To give the footer a fixed position at the bootom
	    	position: fixed;
	    	bottom: 0;
	    	left: 0;
	    	right: 0;*/
    	
    }

    footer p{
    	margin: 0;
    	padding: 35px 0;
    	color: white;

    }
    form{
    	 margin-bottom: 80px;
    }

    #headofpage{
    	 margin-bottom: 0px;	
    }
	
	.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
	float: right;
	top: -15%;
	right: 15px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>
<body>

<div class="container fluid" id="headofpage"><h1 class="page-header">Result Hub</h1></div>

<div class="dropdown">
  <button class="dropbtn">Admin</button>
  <div class="dropdown-content">
    <a href="adminLogin.php">Log Out</a>
    
  </div>
</div>
 
 
 <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- sidebar -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			
			
			<ul class="nav sidebar-nav">
				<li class="sidebar-brand">
					<a href="admin.php">
						ADMIN PANEL
					</a>
				</li>


				<li class="dropdown">
       				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Students
       					<span class="caret"></span>
       				</a>
       				<ul class="dropdown-menu" role="menu">
       					<li class="dropdown-header">Student option
       					</li>
       					<li> <a href="Student_Info_Input2.php">Enter Info</a></li>
       					<li> <a href="student_details2.php">Show Info</a></li>
       					
       				</ul>

                </li>

                <li class="dropdown">
       				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculty
       					<span class="caret"></span>
       				</a>
       				<ul class="dropdown-menu" role="menu">
       					<li class="dropdown-header">Faculty option
       					</li>
       					<li> <a href="faculty_info_input2.php">Enter Info</a></li>
       					<li> <a href="faculty_details2.php">Show Info</a></li>
       				</ul>

                </li>

                <li class="dropdown">
       				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Course
       					<span class="caret"></span>
       				</a>
       				<ul class="dropdown-menu" role="menu">
       					<li class="dropdown-header">Courses option
       					</li>
       					<li> <a href="add_courses.php">Add Course</a></li>
       					
						<li> <a href="show_courses.php">Show Courses</a></li>
						<li> <a href="show_sections.php">Show Sections</a></li>
       					
       				</ul>

                </li>



			</ul>
			
		</nav>
		<!-- /#sidebar -->


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			      <span class="hamb-middle"></span>
				        <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <!-- row 1 -->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        
						
						      <h1>STUDENT <?php echo $edit_id;?> UPDATE </h1>
   <form  method="POST" action="student_edit2.php">
                    
              <div class="form-group">
                        <label for="course_id">Student ID:</label>
                        <input  type="text" class="form-control"  name="s_id" value="<?php echo $student_id?>">
                      </div>

                    <div class="form-group">
                        <label for="course_id">First Name:</label>
                        <input  type="text" class="form-control"  name="f_name" value="<?php echo $first_name?>">
                      </div>

                          <div class="form-group">
                              <label for="course_id">Last Name</label>
                              <input  type="text" class="form-control"  name="l_name" value="<?php echo $last_name?>">
                            </div>

                            <div class="form-group">
                              <label for="course_id">Semester:</label>
                              <input  type="text" class="form-control" name="semester" value="<?php echo $semester?>">
                            </div>

                            <div class="form-group">
                              <label for="course_id">Semester Number</label>
                              <input  type="text" class="form-control" name="semester_num" value="<?php echo $semester_num?>">

                    
                    <button type="submit" class="btn btn-default" name="submit"> Submit</button>
                    
       </form>


      	                    

                </div>

            </div>

            <!-- /row1 -->
          </div>

        </div>
        <!-- /#page-content-wrapper -->

<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <p class="text-center">Copyright &copy; Result Hub 2018</p>
          </div>
        </div>

      </div>
      <!-- /.container -->
    </footer>


    </div>
    <!-- /#wrapper -->



</body>
</html>