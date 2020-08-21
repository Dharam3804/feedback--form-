<?php 
$servername = "fdb26.awardspace.net";
$username = "3318186_db";
$password = "dharam21823804";
$dbname="3318186_db";

// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$dep =$_POST['department'];
$cou =$_POST['course'];
$sem =$_POST['semester'];
$sub =$_POST['subject'];
$fac =$_POST['faculty'];
$q1 =(int)$_POST['1'];
$q2 =(int)$_POST['2'];
$q3 =(int)$_POST['3'];
$q4 =(int)$_POST['4'];
$q5 =(int)$_POST['5'];
$q6 =(int)$_POST['6'];
$q7 =(int)$_POST['7'];
$q8 =(int)$_POST['8'];
$q9 =(int)$_POST['9'];
$q10 =(int)$_POST['10'];
$com =$_POST['comments'];

$query = "INSERT INTO feedback(Department,Course,Semester,Subject_Name,Faculty,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Comments ) VALUES ('$dep','$cou','$sem','$sub','$fac','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$com')";
if(!mysqli_query($con,$query))
{
    die('Error in inserting records'.mysqli_connect_error());
}
else{
    ?>
<h1 style="text-align:center">Your feedback is submitted successfully</h1>

<?php
}
$sql ="SELECT * FROM feedback ";

$feedback =  mysqli_query($con,$sql);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>Feedback</title>
    </head>
        <body>

        <div class="container" style="margin-bottom: 50px;margin-top: 50px; border:2px solid black;" >
          <table class="table">
              <tr>
                  <td>SNo</td>
                  <td>Department</td>
                  <td>Course</td>
                  <td>Semester</td>
                  <td>Subject</td>
                  <td>Faculty</td>
                  <td>Q1</td>
                  <td>Q2</td>
                  <td>Q3</td>
                  <td>Q4</td>
                  <td>Q5</td>
                  <td>Q6</td>
                  <td>Q7</td>
                  <td>Q8</td>
                  <td>Q9</td>
                  <td>Q10</td>
                  <td>Comments</td>
              </tr>
          <?php  $c=(int)0; 
          while($feed = mysqli_fetch_assoc($feedback)) :
           if(mysqli_num_rows($feedback)-1==$c) { ?>
            <tr>
                <td><?php echo $feed['Sno'] ?></td>
                <td><?php echo $feed['Department'] ?></td>
                <td><?php echo $feed['Course'] ?></td>
                <td><?php echo $feed['Semester'] ?></td>
                <td><?php echo $feed['Subject_Name'] ?></td>
                <td><?php echo $feed['Faculty'] ?></td>
                <td><?php echo $feed['Q1'] ?></td>
                <td><?php echo $feed['Q2'] ?></td>
                <td><?php echo $feed['Q3'] ?></td>
                <td><?php echo $feed['Q4'] ?></td>
                <td><?php echo $feed['Q5'] ?></td>
                <td><?php echo $feed['Q6'] ?></td>
                <td><?php echo $feed['Q7'] ?></td>
                <td><?php echo $feed['Q8'] ?></td>
                <td><?php echo $feed['Q9'] ?></td>
                <td><?php echo $feed['Q10'] ?></td>
                <td><?php echo $feed['Comments'] ?></td>
            </tr>
            
           <?php } 
              $c++; 
          endwhile; 
          ?>
         </table>
        </div>
  </body>
  </html>