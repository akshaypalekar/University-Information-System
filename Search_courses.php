<!DOCTYPE html>
<?php
session_start();
include 'Sidebar.php';
include 'Header.php';
if(!isset($_SESSION['user_status'])){
    header("location:Login_page.php");
}

if(isset($_SESSION['course_taken'])){
    echo "<script type='text/javascript'>alert('Course Already taken');</script>";
    unset($_SESSION['course_taken']);
}

?>
<html>
<title>University Information System</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="search_course">
<form action="" method="post">
<table>
<tr>
<td> Course Number</td>
<td>
<select name="contains">
<option value="1">contains only</option>
<option value="2">greater than or equal to</option></select> </td>
<td> <input type = "number" name = "course_num" placeholder="Course Number"required></td> 
</tr> <br> <br>
<tr>
<td> Course Career</td>
<td><select name="course_career">
<option value="Graduate">Graduate</option>
<option value="Undergraduate">Undergraduate</option></select> </td>
</tr> <br> <br>
</table> <br><br>
<button type="reset" value="Reset">Clear</button>
<button type="submit" value="Submit">Search</button>
</form>
</div>
<div class = "course_list">
<?php

    $contains = (isset($_POST['contains']) ? $_POST['contains'] : null);
  
    $course_num = (isset($_POST['course_num']) ? $_POST['course_num'] : null);
  
    $course_career = (isset($_POST['course_career']) ? $_POST['course_career'] : null);


    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'uis');

    if($contains==1){
    
    $sql="SELECT * FROM courses WHERE Course_Id = '$course_num' AND Course_Level = '$course_career'";
    
    $result = mysqli_query($con,$sql);
    echo "<table class='search_table'><tr><th>Course ID</th><th>Course Name</th><th>Day</th><th>Timing</th></tr>";
    while($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Day'] . "</td><td>". $row['Course_Time'] ."-".$row['Time_End'] . "</td><td><a href='enroll_course.php?Course_Id=".$row['Course_Id']."'>Enroll</a></td><td>".$row['Capacity']."</td><td>".$row['Course_Status']."</td></tr>";  
    }
    echo "</table>";

    }elseif($contains==2){
        
        $sql="SELECT * FROM courses WHERE Course_Id > '$course_num' AND Course_Level = '$course_career'";
        
        $result = mysqli_query($con,$sql);
        echo "<table class='search_table'><tr><th>Course ID</th><th>Course Name</th><th>Day</th><th>Timing</th></tr>";
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Day'] . "</td><td>". $row['Course_Time'] ."-".$row['Time_End'] . "</td><td><a href='enroll_course.php?Course_Id=".$row['Course_Id']."'>Enroll</a></td><td>".$row['Capacity']."</td><td>".$row['Course_Status']."</td></tr>";  
        }
        echo "</table>";
    }
    ?>
</div>
</body>
</html>

