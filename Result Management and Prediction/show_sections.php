<!DOCTYPE html>
<?php
  include("course.php");
?>
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


	     
			/*To give the footer a fixed position at the bootom*/
	    	position: fixed;
	    	bottom: 0;
	    	left: 0;
	    	right: 0;
    	
    }

.form-inline{
  margin-bottom: 0;
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
  <button class="dropbtn btn btn-default">Admin</button>
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
       					<li class="dropdown-header">Faculty option</li>
       					<li> <a href="faculty_info_input2.php">Enter Info</a></li>
       					<li> <a href="faculty_details2.php">Show Info</a></li>
       				</ul>

                </li>

                <li class="dropdown">
       				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Course
       					<span class="caret"></span>
       				</a>
       				<ul class="dropdown-menu" role="menu">
       					<li class="dropdown-header">Courses option</li>

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
                        


                        
						
						
          							 
                              <form class="form-inline"action="l_section_search.php" method="POST">
                              <!-- <label>Student Id</label> -->
                                <div class="form-group">
                              
                              <input type="text" class="form-control" name="search_course_id" placeholder="Enter Course Code">
                                <button type="submit" class="btn btn-default" name="course_search"> <span class="glyphicon glyphicon-search"></span> SEARCH
                              </button>
                            </div>

                            </form>
                        

      <br>
      <table class="table">

      <tbody>
        <?php 
        show_courses_with_sections();
        ?>
      </tbody>
      </table>

      <br/><br/> <br/><br/>



      	                    

                </div>

            </div>

            <!-- /row1 -->


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