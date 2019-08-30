<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Student </title>
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
  	
  		<h1 class="text-info text-center"> WELCOME <?php echo $_SESSION["student_name"]; ?></h1>
      <hr/>
  		<div class="col-md-7" >

        <div class="well-lg"  style="background-color: #ec1b5a;">
          <h3 style="color:white;">
            <a class="colorforlink" href="l_std_add_courses.php">ADD COURSE</a></h3>
        </div> 
<!--
        <div class="well-lg"  style="background-color: orange; ">
          <h3 style="color:white;">
            <a class="colorforlink" href="l_std_view_courses.php">VIEW COURSES</a></h3>
        </div>
-->
        <div class="well-lg"  style="background-color: #79aefe; ">
          <h3 style="color:white;">
            <a class="colorforlink" href="l_std_view_result.php">VIEW RESULT</a></h3>
        </div> 




  			
  		</div>
  		<div class="col-md-5">
  			<img src="StyleSheet/images/motors.png"  class="img-round img-responsive" style=" width: 500px; height:300px;" />
  			
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