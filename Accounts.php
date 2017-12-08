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

$sql="SELECT c.Course_Id,c.Course_Name,c.Course_Fees
FROM courses c, course_enrollment e, students s 
WHERE e.User_Id = s.User_Id AND e.Course_Id = c.Course_Id AND s.User_Id = '$userId'";
$result = mysqli_query($con,$sql);

echo "<table class='search_table'><tr><th>Course ID</th><th>Course Name</th><th>Fees</th></tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Fees'] . "</td></tr>"; 
}
echo "<tr><td></td><td>Total:</td>";
echo "</table>";

?>
</div>
</body>
</html>