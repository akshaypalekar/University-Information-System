<!DOCTYPE html>
<html>
<title>University Information System</title>
<head>
<?php include 'Faculty_Header.php' ?>
<?php include 'Faculty_Sidebar.php' ?>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<div class="Student_schedule">
<?php
$userId = $_SESSION['userId'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');

// $sql="SELECT s.User_Id,s.First_Name,s.Last_Name 
// FROM courses c,students s,course_enrollment e, Faculty f 
// WHERE c.Course_Id = e.CourseId AND f.User_Id = c.Faculty_Id AND Faculty_Id = '$userId'";


// while($row = mysqli_fetch_array($result)){


// }

?>
</div>
</body>
</html>