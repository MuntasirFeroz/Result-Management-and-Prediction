<?php
$con=mysqli_connect("localhost","root","","s_result_db");



if(isset($_REQUEST['student_id']))
{
  $student_id=$_REQUEST['student_id'];
  
  $query="select * from faculty_course_result where student_id='$student_id' ";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);

  //$course_code=$row['course_code'];//this is used for sending the course_code when submit button is pressed
  $student_name=$row['student_name'];
  $mid1 =$row['mid1'];
  $mid2 =$row['mid2'];
  $final =$row['final'];
  $quiz =$row['quiz'];
  $attendance =$row['attendance'];
  $project =$row['project'];
  $total =$row['total'];
  $grade=$row['grade'];
  $gpa=$row['gpa'];
}

if(isset($_POST['submit']))
{
  $mid1 =$_POST['mid1'];
  $mid2 =$_POST['mid2'];
  $final =$_POST['final'];
  $quiz =$_POST['quiz'];
  $attendance =$_POST['attendance'];
  $project =$_POST['project'];
    /*Calculating total and giving grade and gpa accordingly*/
    //start of logic big if
  //  if($mid1=!null && $mid2=null && $final=null && $quiz=null && $attendance=null && $project=null )
  //  {
        $total=$mid1+$mid2+$final+$quiz+$attendance+$project;
        if($total>=97 && $total<=100)
        {
            $grade='A+';
            $gpa=4;        
        }
        elseif($total>=90 && $total<97)
        {
            $grade='A';
            $gpa=4; 
        }
        elseif($total>=87 && $total<90)
        {
            $grade='A-';
            $gpa=3.70; 
        }
        elseif($total>=83 && $total<87)
        {
            $grade='B+';
            $gpa=3.30; 
        }
         elseif($total>=80 && $total<83)
        {
            $grade='B';
            $gpa=3.00; 
        }
        elseif($total>=77 && $total<80)
        {
            $grade='B-';
            $gpa=2.70; 
        }
        elseif($total>=73 && $total<77)
        {
            $grade='B-';
            $gpa=2.70; 
        }
        elseif($total>=70 && $total<73)
        {
            $grade='C';
            $gpa=2.00; 
        }
         elseif($total>=67 && $total<70)
        {
            $grade='C-';
            $gpa=1.70; 
        }
        elseif($total>=63 && $total<67)
        {
            $grade='D+';
            $gpa=1.30; 
        }
        elseif($total>=60 && $total<63)
        {
            $grade='D';
            $gpa=1.00; 
        }
        else
        {
          $grade='F';
            $gpa=0;          
        }

        $query="update faculty_course_result set mid1=$mid1, mid2=$mid2,final=$final, quiz=$quiz,attendance=$attendance,project=$project,total=$total,grade='$grade',gpa=$gpa where student_id='$student_id' ";
        

        mysqli_query($con,$query);
   // }//end of logic big if

         /*Here if any of the marks containg attributes are not null then this query occurs 
    where the total , gpa,grade is set as null since all the values are not given to the marks containg attributes*/
  /*
       $query="update faculty_course_result set mid1=$mid1, mid2=$mid2,final=$final, quiz=$quiz,attendance=$attendance,project=$project,total=null,grade=null,gpa=null where student_id='$student_id' ";
  
*/
  mysqli_query($con,$query);
   
   unset($_SESSION["section"]);
  echo "<script> alert('Student Result Updated')</script>";
  header('location: ponni_faculty.php?');
  #echo "<script> window.open('student_update.php','_self')</script>";
    
    
  #$query="update student_info set first_name='$first_name', last_name='$last_name',Semester='$semester', semester_num='$semester_no' where student_id='$edit_id' ";

   
  

} //



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Faculty </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <style type="text/css">
    
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0px;
    }

    footer{
      background-color: rgb(52,58,64);


      /*  
      To give the footer a fixed position at the bootom
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
      */
    }

    footer p{
      margin: 0;
      padding: 35px 0;
      color: white;

    }
    .colorforlink:link{
      color: white;
      text-decoration: none;

      
    }

    .colorforlink:visited{
      color: white;
      text-decoration: none;

      
    }

    .colorforlink:hover{
      color: black;
      text-decoration: none;

      
    }

    .colorforlink:active{
      color: green;
      text-decoration: none;

      
    }

  </style>
  


</head>

<body>

<!-- <div class="container-fluid">
  
  <div class="row">
    <div class="col-md-12">
      <div class="header">
        <img src="book.jpg" width="100%" height="300px">

      </div>  
    </div>
    
  </div>
</div>
 -->
<!-- Navigation bar -->


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Result Hub</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      </li>
      <li><a href="prediction/prediction.php">Result Prediction</a></li>
      <li><a href="home.html">Log Out</a></li>
    </ul>
  </div>
</nav>


<div class="jumbotron" style="background-image: url(StyleSheet/images/book1.jpg); background-size: 100%;">
          
          <h1 style="color: white;">Result Hub</h1>
          <h4 style="color: white;">A Result Management Sytem </h4>
    </div>
<!--
<div class="container-fluid">

  

</div>

-->
<div class="container">


  <div class="row">
    
      <h1 class="text-info text-center"> Student <?php echo $student_id; ?></h1>
      <hr/>
      <div class="col-md-12" >
              
             
          <form  method="POST">
                    
                      <div class="form-group">
                        <label for="course_id">Mid 1:</label>
                        <input  type="text" class="form-control"  name="mid1" value="<?php echo $mid1?>">
                      </div>

                      <div class="form-group">
                      <label for="course_id">Mid 2:</label>
                        <input  type="text" class="form-control"  name="mid2" value="<?php echo $mid2?>">
                      </div>

                      <div class="form-group">
                      <label for="course_id">Final:</label>
                        <input  type="text" class="form-control"  name="final" value="<?php echo $final?>">
                      </div>

                      <div class="form-group">
                      <label for="course_id">Quiz:</label>
                        <input  type="text" class="form-control"  name="quiz" value="<?php echo $quiz?>">
                      </div>

                      <div class="form-group">
                      <label for="course_id">Attendance:</label>
                        <input  type="text" class="form-control"  name="attendance" value="<?php echo $attendance?>">
                      </div>

                      <div class="form-group">
                      <label for="course_id">Project:</label>
                        <input  type="text" class="form-control"  name="project" value="<?php echo $project?>">
                      </div>
                    
                    <button type="submit" class="btn btn-default" name="submit"> Submit</button>
                    
       </form>



     

    <br>
    
  </div>
</div>
</div>

<!-- Footer -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>