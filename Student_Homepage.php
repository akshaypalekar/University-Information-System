<!DOCTYPE html>
<?php
session_start();
include 'Sidebar.php';
include 'Header.php';
if(!isset($_SESSION['user_status'])){
    header("location:Login_page.php");
}
?>
<html>
<title>University Information System</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="Student_schedule">
<?php
$userId = $_SESSION['userId'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');
$sql="SELECT c.Course_Id,c.Course_Name,c.Course_Day,c.Course_Time,c.Time_End
FROM courses c, course_enrollment e, students s 
WHERE e.User_Id = s.User_Id AND e.Course_Id = c.Course_Id AND s.User_Id = '$userId'";
$result = mysqli_query($con,$sql);
    echo "<table class='schedule_table'>";
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><th>Course ID</th><th>Course Name</th><th>Day</th><th>Timing</th></tr><tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Day'] . "</td><td>". $row['Course_Time'] ."-".$row['Time_End'] . "</td></tr>";  
    }
    echo "</table>";  
?>
</div>
</body>
</html>