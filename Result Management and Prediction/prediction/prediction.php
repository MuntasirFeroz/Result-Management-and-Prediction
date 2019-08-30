<!DOCTYPE html>
<html lang="en">
<head>
  <title> Result hub</title>
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


      
      /*To give the footer a fixed position at the bootom
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
      <li class="active"><a href="../home.html">Home</a></li>
      <li><a href="../studentLogin.php">Student</a></li>
      <li><a href="#">Faculty</a></li>
      <li><a href="prediction.php">Result Prediction</a></li>
       <li><a href="../adminLogin.php">Admin</a></li>
    </ul>
  </div>
</nav>


<div class="jumbotron" style="background-image: url(../StyleSheet/images/book1.jpg); background-size: 100%;">
          
          <h1 style="color: white;">Result Hub</h1>
          <h4 style="color: white;">A Result Management Sytem </h4>
    </div>
<!--
<div class="container-fluid">

  

</div>

-->
<div class="container">


  <div class="row">
    
      
      <div class="col-md-12" >
        <h1 class="text-info"> RESULT PREDICTION</h1>
        <div class="col-lg-8 col-lg-offset-2">
                        

                        <h1>Enter INFORMATIONS </h1>
                        <form action="" method="POST">
                    
                          <div class="form-group">
                              <label for="study_time">Study Time(in Hours):</label>
                              <input  type="text" class="form-control" id="study_time" name="study_time">
                            </div>

                          <div class="form-group">
                              <label for="social_media_time">Time Spent ON Social Midea(in Hours):</label>
                              <input  type="text" class="form-control" id="social_media" name="social_media">
                            </div>

                          <div class="form-group">
                              <label for="course_id">Credit 1st Semester:</label>
                              <input  type="text" class="form-control" id="credit_1st_semester" name="credit_1st_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">GPA 1st Semester:</label>
                              <input  type="text" class="form-control" id="gpa_1st_semester" name="gpa_1st_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">Credit 2nd Semester:</label>
                              <input  type="text" class="form-control" id="credit_2nd_semester" name="credit_2nd_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">GPA 2nd Semester:</label>
                              <input  type="text" class="form-control" id="gpa_2nd_semester" name="gpa_2nd_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">Credit 3rd Semester:</label>
                              <input  type="text" class="form-control" id="credit_3rd_semester" name="credit_3rd_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">GPA 3rd Semester:</label>
                              <input  type="text" class="form-control" id="gpa_3rd_semester" name="gpa_3rd_semester">
                            </div>
                          <div class="form-group">
                              <label for="course_id">Credit 4th Semester:</label>
                              <input  type="text" class="form-control" id="credit_4th_semester" name="credit_4th_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">GPA 4th Semester:</label>
                              <input  type="text" class="form-control" id="gpa_4th_semester" name="gpa_4th_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">Credit 5th Semester:</label>
                              <input  type="text" class="form-control" id="credit_5th_semester" name="credit_5th_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">GPA 5th Semester:</label>
                              <input  type="text" class="form-control" id="gpa_5th_semester" name="gpa_5th_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">Credit 6th Semester:</label>
                              <input  type="text" class="form-control" id="credit_6th_semester" name="credit_6th_semester">
                            </div>

                          <div class="form-group">
                              <label for="course_id">GPA 6th Semester:</label>
                              <input  type="text" class="form-control" id="gpa_6th_semester" name="gpa_6th_semester">
                            </div>

                    
                            <button type="submit" class="btn btn-default" name="submit">  Submit
                            </button>
                    
                        </form>
                        <br><br><br>
                            

                </div>
      </div>
      

    <br>
    
  </div>

  <div class="row">
      <div class="col-md-12">
  
  <?php
  
  include 'reader.php';

  require_once __DIR__ . '/vendor/autoload.php';

  use Phpml\Regression\LeastSquares;
    
   # global $excel;
    $excel = new Spreadsheet_Excel_Reader();
    $excel->read('sample.xls');    
   /*
    $x=1;
    while($x<=$excel->sheets[0]['numRows']) {
      echo "\t<tr>\n";
      $y=1;
      while($y<=$excel->sheets[0]['numCols']) {
        $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
        echo "\t\t<td>$cell</td>\n";  
        $y++;
      }  
      echo "\t</tr>\n";
      $x++;
    }   
*/

  function read_column($column,$e){
  $x=2;//starting from 2nd row cuz first row i.e $x=1 is header of columns
    $i=0;
    #global $excel;
    while($x<=$e->sheets[0]['numRows']) {
     @ $y=$column; #column no
     @ $cell[$i] = $e->sheets[0]['cells'][$x][$y];
      $x++;
      $i++;
    }   
    return $cell;
}#column end

/*--------- READING HEADERS----------*/
/* echo "<table>";
$x=1;//row 1
 $i=0;    
      echo "\t<tr>\n";
      $y=1;//column1
      while($y<=$excel->sheets[0]['numCols']) {
        $headers[$i] = $excel->sheets[0]['cells'][$x][$y];
        echo "\t\t<td>$headers</td>\n";
      echo "\t</tr>\n";  
        $y++;
        $i++;
      }  
  echo "</table>";    
       
print_r($headers);
*/
#echo "<br/><br/>";

$x=1;//row 1
 $i=0;    
      #echo "\t<tr>\n";
      $y=1;//column1
      while($y<=$excel->sheets[0]['numCols']) {
        $headers[$i] = $excel->sheets[0]['cells'][$x][$y];
        
        $y++;
        $i++;
      }  
       
#print_r($headers);

   /*-----READING COLUMN 1 Running or graduated-----------*/
/*    echo "<table>";
    $x=2;//starting from 2nd row cuz first row i.e $x=1 is header of columns
    $i=0;
while($x<=$excel->sheets[0]['numRows']) {
      echo "\t<tr>\n";
      $y=1; //column 1
     
      $cell[$i] = $excel->sheets[0]['cells'][$x][$y];
      echo "\t\t<td>$cell[$i]</td>\n";   
      echo "\t</tr>\n";
      $x++;
      $i++;
    }   
    echo "</table>";

print_r($cell);
*/

#$running_or_graduated=read_column(1);

#print_r($running_or_graduated);




 /*-----READING COLUMN 4 study time----------*/
/*
 echo "<table>";
    $x=2;//starting from 2nd row cuz first row i.e $x=1 is header of columns
    $i=0;
while($x<=$excel->sheets[0]['numRows']) {
      echo "\t<tr>\n";
      $y=4; //column 1
     
      $cell[$i] = $excel->sheets[0]['cells'][$x][$y];
      echo "\t\t<td>$cell[$i]</td>\n";   
      echo "\t</tr>\n";
      $x++;
      $i++;
    }   
    echo "</table>";

print_r($cell);
*/

$study_time=read_column(4 ,$excel);
#echo "<br><br> printing study time\n";
#print_r($study_time);

 /*-----READING COLUMN 5 Social Media----------*/
$social_media=read_column(5,$excel);
#echo "<br><br> printing social_media\n";
#print_r($social_media);

/*-----READING COLUMN 6 Credit  1st Semester----------*/
$credit_1st_semester=read_column(6,$excel);
#echo "<br><br> printing credit_1st_semester\n";
#print_r($credit_1st_semester);

/*-----READING COLUMN 7  GPA  1st Semester ----------*/
$gpa_1st_semester=read_column(7,$excel);
#echo "<br><br> printing gpa_1st_semester\n";
#print_r($gpa_1st_semester);

/*-----READING COLUMN 8 credit_2nd_semester ----------*/
$credit_2nd_semester=read_column(8,$excel);

/*-----READING COLUMN 9  GPA  2nd Semester  ----------*/
$gpa_2nd_semester=read_column(9,$excel);

/*-----READING COLUMN 10 credit_3rd_semester ----------*/
$credit_3rd_semester=read_column(10,$excel);

/*-----READING COLUMN 11  GPA  3rd Semester  ----------*/
$gpa_3rd_semester=read_column(11,$excel);

/*-----READING COLUMN 12 credit_4th_semester ----------*/
$credit_4th_semester=read_column(12,$excel);

/*-----READING COLUMN 13  GPA  4th Semester  ----------*/
$gpa_4th_semester=read_column(13,$excel);

/*-----READING COLUMN 14 credit_5th_semester ----------*/
$credit_5th_semester=read_column(14,$excel);

/*-----READING COLUMN 15  GPA  5th Semester  ----------*/
$gpa_5th_semester=read_column(15,$excel);

/*-----READING COLUMN 16 credit_6th_semester ----------*/
$credit_6th_semester=read_column(16,$excel);

/*-----READING COLUMN 17  GPA  6th Semester  ----------*/
$gpa_6th_semester=read_column(17,$excel);

/*-----READING COLUMN 18 credit_7th_semester ----------*/
$credit_7th_semester=read_column(18,$excel);

/*-----READING COLUMN 19  GPA  7th Semester  ----------*/
$gpa_7th_semester=read_column(19,$excel); #this is the target value



/*-------------USING MULTIVARIENT LEAST SQAURE LINEAR REGRESSION ----------------------- */

$num_of_rows_in_dataset=count($study_time);
for ($i=0; $i<$num_of_rows_in_dataset;$i++)
{
  $samples[$i]=[ $study_time[$i],$social_media[$i],$credit_1st_semester[$i],$gpa_1st_semester[$i],$credit_2nd_semester[$i],$gpa_2nd_semester[$i],$credit_3rd_semester[$i],$gpa_3rd_semester[$i],$credit_4th_semester[$i],$gpa_4th_semester[$i],$credit_5th_semester[$i],$gpa_5th_semester[$i],$credit_6th_semester[$i],$gpa_6th_semester[$i] ];

}

$targets=$gpa_7th_semester;
$regression = new LeastSquares();
$regression->train($samples, $targets);
#echo($regression->predict([60000, 1996]));
// return 4094.82
if(isset($_POST['submit']))
  {
$st_time=$_POST['study_time'];
$sc_time=$_POST['social_media'];
$c_1st_sem=$_POST['credit_1st_semester'];
$g_1st_sem=$_POST['gpa_1st_semester'];
$c_2nd_sem=$_POST['credit_2nd_semester'];
$g_2nd_sem=$_POST['gpa_2nd_semester'];
$c_3rd_sem=$_POST['credit_3rd_semester'];
$g_3rd_sem=$_POST['gpa_3rd_semester'];
$c_4th_sem=$_POST['credit_4th_semester'];
$g_4th_sem=$_POST['gpa_4th_semester'];
$c_5th_sem=$_POST['credit_5th_semester'];
$g_5th_sem=$_POST['gpa_5th_semester'];
$c_6th_sem=$_POST['credit_6th_semester'];
$g_6th_sem=$_POST['gpa_6th_semester'];

$predicted_gpa=$regression->predict([$st_time,$sc_time,$c_1st_sem,$g_1st_sem,$c_2nd_sem,$g_2nd_sem,$c_3rd_sem,$g_3rd_sem,$c_4th_sem,$g_4th_sem,$c_5th_sem,$g_5th_sem,$c_6th_sem,$g_6th_sem]);

#$predicted_gpa=(float)$predicted_gpa;
$predicted_gpa=number_format($predicted_gpa, 2);
echo "<h1>7th Semester GPA: $predicted_gpa</h1><br><br>";

}#isset

#echo($regression->predict([1,7,10,2.2,10,2.2,10,2.6,13,3.6,12,3.5,11,3.5]));
#result 3.3343215551229

#print_r($samples);
?>

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

