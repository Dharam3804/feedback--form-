<?php 

$conn =  mysqli_connect("fdb26.awardspace.net","3318186_db","dharam21823804","3318186_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$dep =$_GET['department'];
$cou =$_GET['course'];
$sem =$_GET['semester'];
$sub =$_GET['subject'];
$sum =(float)$_GET['sum'];
$sql1 = "SELECT Faculty ,count(*) AS TotalFeed FROM feedback WHERE Department='$dep' AND Course='$cou' AND Semester='$sem' AND Subject_Name='$sub'  ";
$result1 = mysqli_query($conn,$sql1);
$res1=mysqli_fetch_assoc($result1);
$sql2 = "SELECT * FROM feedback WHERE Department='$dep' AND Course='$cou' AND Semester='$sem' AND Subject_Name='$sub'";
$result2 = mysqli_query($conn,$sql2);



?>
<!DOCTYPE html>
<html>
<head>
<style>
    table {
        border:2px solid black;
    }
   
</style>
</head>
<body>
<div style="padding:40px ;">

           <div style="border:2px solid black;padding:2px;" >
               <span style="border-right: 2px solid black;padding:5px;padding-right:300px;">Faculty Name: <?php echo $res1['Faculty'] ?></span>
               <span style="border-right: 2px solid black;padding:5px;padding-right:300px;">Department: <?php echo $dep ?></span>
               <span style="padding:2px;padding-right:2px;">Course Name: <?php echo $cou ?></span>
               
</div>
<div style="border-left:2px solid black;padding:2px;border-right:2px solid black;">
               <span style="border-right: 2px solid black;padding:5px;padding-right:370px;">Subject: <?php echo $sub ?></span>
               <span style="border-right: 2px solid black;padding:5px;padding-right:350px;">Semester: <?php echo $sem ?></span>
               <span style="padding:2px;padding-right:2px;">Total Feedback: <?php echo $res1['TotalFeed'] ?></span>

</div>
<table>
<tr>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Student No.</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(a):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(b):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(c):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(d):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(e):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(f):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(g):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(h):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(i):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Que.(j):(out of 5)</th>
               <th style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;">Total Score</th>
              

</tr>
<?php $x=1; ?>
<?php while($res2 = mysqli_fetch_assoc($result2)) : ?> 
<tr>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo "Student-".$x ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q1'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q2'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q3'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q4'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q5'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q6'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q7'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q8'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q9'] ?></td>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $res2['Q10'] ?></td>
               <?php $sum1 = $res2['Q1']+$res2['Q2']+$res2['Q3']+$res2['Q4']+$res2['Q5']+$res2['Q6']+$res2['Q7']+$res2['Q8']+$res2['Q9']+$res2['Q10'];
                 $per = number_format((float)(($sum1*100)/50), 2, '.', '');
                 ?>
               <td style="border-bottom: 2px solid black;border-right: 2px solid black;padding:5px;"><?php echo $sum1."/50=".$per."%" ?></td>
               <?php $x=$x+1; ?>
</tr>
<?php endwhile; ?>
<tr>
<td style="border-right: 2px solid black;padding:5px;"><?php echo "Average Feedback Score:".$sum."%" ?></td>
</tr>
</table> 

</div>
</body>
</html>