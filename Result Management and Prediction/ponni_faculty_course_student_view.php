<?php
  session_start();


$con=mysqli_connect("localhost","root","","s_result_db");

function student_view()
{
  global $con;
  if(isset($_REQUEST['request_course_code']))
  {
    $request_course_code=$_REQUEST['request_course_code'];
    $faculty_id=$_SESSION['faculty_id'];
    
    $query="select * from faculty_course_result where course_code='$request_course_code' and faculty_id= '$faculty_id' ";
    $result=mysqli_query($con,$query);
    //$row=mysqli_fetch_array($result);

    echo "<div class='table-responsive'>
        <table class='table table-hover'>
        <thead>
        <tr class='bg-primary'>
              <th>Student Id</th>
              <th>Name</th>
              <th>Mid1</th>
              <th>Mid2</th>
              <th>Final</th>
              <th>Quiz</th>
              <th>Attendance</th>
              <th>Project</th>
              <th>Total</th>
              <th>Grade</th>
              <th>Gpa</th>
              <th>Action</th>

        </tr> 
        </thead>
        <tbody>";


    while($row=mysqli_fetch_array($result))
      { $section=$row['section'];
        $student_id=$row['student_id'];
        $student_name =$row['student_name'];
        $mid1 =$row['mid1'];
        $mid2 =$row['mid2'];
        $final =$row['final'];
        $quiz =$row['quiz'];
        $attendance =$row['attendance'];
        $project =$row['project'];
        $total =$row['total'];
        $grade=$row['grade'];
        $gpa=$row['gpa'];
        

  /*<a class="btn btn-danger" href="{{URL::to('/delete_stadium/'.$i->id)}}" id="delete">
                    <i class="halflings-icon white trash"></i> 
                  </a>

    <button class='btn btn-default'> <a href='ponni_faculty_course_student_view.php?request_course_code=$course_code' > View</a></button>

  */


        echo"<tr>
                <td>$student_id</td>
                <td>$student_name</td>
                <td>$mid1</td>
                <td>$mid2</td>
                <td>$final</td>
                <td>$quiz</td>
                <td>$attendance</td>
                <td>$project</td>
                <td>$total</td>
                <td>$grade</td>
                <td>$gpa</td>
                <td>
                    <a class='btn btn-warning' href='ponni_faculty_course_student_result_edit.php?student_id=$student_id'>
                   <span class='glyphicon glyphicon-pencil' aria-hidden='true'>
                  </a>
                </td>
            </tr>
          ";
      }

      echo"</tbody>
      </table>
      </div> ";
      $_SESSION['section']=$section;
      $_SESSION['Course_code']=$request_course_code;

  }

}//end of student view




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
    
      <h1 class="text-info text-center"> Course Code: <?php echo $_SESSION['Course_code']; ?>  Section:  <?php echo $_SESSION['section']; ?></h1>
      <hr/>
      <div class="col-md-12" >
              
        <?php
          student_view();
        ?>

        

        
      </div>

    <br>
    
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