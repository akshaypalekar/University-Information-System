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

$sql="SELECT * FROM courses WHERE Faculty_Id = '$userId'";

$result = mysqli_query($con,$sql);
    echo "<table class='schedule_table'><tr><th>Course ID</th><th>Course Name</th><th>Day</th><th>Timing</th></tr>";
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Day'] . "</td><td>". $row['Course_Time'] ."-".$row['Time_End'] . "</td></tr>";  
    }
    echo "</table>";  
?>
</div>
</body>
</html>