<?php
session_start();
$con=mysqli_connect("localhost","root","","s_result_db");

if(isset($_POST['submit']))
{
  $course=$_POST['c1_id'];
  $course_section=$_POST['s1_id'];
  $query="select * from courses where course_code='$course' and section=$course_section";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);

  $faculty_id=$row['faculty_id'];
  $student_id=$_SESSION['student_id'];
  $student_name=$_SESSION['student_name'];

 /* $query1=" insert into faculty_course_result (course_code, section, faculty_id, student_id,
  student_name, mid1, mid2 ,final, quiz, attendance, project, total, grade,gpa )
      values ( '$course' , $course_section ,'$faculty_id' ,'$_SESSION['student_id']' ,'$_SESSION['student_name']' ,null,null,null,null,null,null,null,null,null) ";
  */
  $query1=" insert into faculty_course_result (course_code , section , faculty_id ,student_id ,student_name , mid1 , mid2 ,final,quiz,attendance,project,total,grade,gpa)
    values ( '$course' , $course_section , '$faculty_id' '$student_id', '$student_name' , null , null , null , null , null , null , null ,null , null 
      )";
  $result=mysqli_query($con,$query1);

  echo "<script> alert('Course Added')</script>";
    echo "<script> window.open('l_std_add_courses.php','_self')</script>";

} //

function get_already_assigned_courses(){
  global $con;

  $student_id=$_SESSION['student_id'];

  $query="select * from faculty_course_result where student_id='$student_id' ";

   $result=mysqli_query($con,$query);

   echo "<div class='table-responsive'>
      <table class='table table-hover'>
      <thead>
      <tr class='bg-primary'>
          <th>Course Code</th>
          <th>Section</th>
      </tr> 
      </thead>
      <tbody>";

   while($row=mysqli_fetch_array($result))
   {  
      $course_code=$row['course_code'];
      $section=$row['section'];

      echo"<tr style='color:white;'>
            <td>$course_code</td>
            <td>$section</td>
          </tr> ";


   }//end of while

   echo"</tbody>
    </table>
    </div> ";
    

}


/* student_search.php code */


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Student </title>

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

  <div class="container" id="headofpage"><h1 class="page-header">Result Hub</h1></div>

      <div class="dropdown">
          <button class="dropbtn btn btn-default">Student</button>
          <div class="dropdown-content">
            <a href="adminLogin.php">Log Out</a>
    
          </div>
      </div>

    <div class="row">
    
      
      <div class="col-md-6" >
        <div class="col-md-12 col-md-offset-1  bg-primary">
                        

            <h1 class="text-center">Add Courses</h1>
            <hr/>
            <form  method="POST">
              <!--
              <div class="form-group">
                <label for="sel1">Course Code:</label>
                <select class="form-control" id="sel1" name="c1_id">
                  <option selected> Choose Course Code</option>
                  <option value="cse480" name="c1_id">cse480</option>
                  <option value="cse105" name="c1_id">cse105</option>
                  <option value="cse360" name="c1_id">cse360</option>
                   <option value="cse411" name="c1_id">cse411</option>
                </select>
              </div>

              <div class="form-group">
                <label for="sel1">Section:</label>
                <select class="form-control" id="sel1" name="s1_id">
                  <option selected> Choose Section</option>
                  <option value="1" name="s1_id">1</option>
                  <option value="2" name="s1_id">2</option>
                </select>
              </div>
            -->
                    
               <div class="form-group">
                <label for="student_id">Course Code:</label>
                 <input  type="text" class="form-control" id="c1_id" name="c1_id">
              </div>

              <div class="form-group">
                <label for="student_id">Section:</label>
                 <input  type="text" class="form-control" id="s1_id" name="s1_id">
              </div>

              <button type="submit" class="btn btn-default" name="submit">  ADD
              </button>
          
            </form>

                        <br><br><br>
                            

        </div>
      </div>

      <div class="col-md-6" style="margin-left: 0;">
          <div class="col-md-12 col-md-offset-1" style="background-color: #ff4d4d;">
                      <h1 class="text-center" style="color:white;">Taken Courses</h1>
                        <hr/>   
              <?php 
                 get_already_assigned_courses();
              ?>
                <br><br><br>
                            

            </div>
      </div>
      

    <br>
    
  </div>
</div>
                        <br> <br>

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